import { hideLoader, showLoader } from "../../../../js/mainloader/loader";
import { ProductsManagerClass } from "./ajax-data/ProductsManagerClass";
import { appendData, productsHtml } from "./html/product-html";

class ProductManger {
    constructor() {
        this.product = [];
        this.nextPageUrl = null;
        this.isFetching = false;
        this.hasMoreData = true;
        this.query={};
        this.main();
    }

    main() {
        this.initData();
        this.onScrollAppendNewItems();
        this.searchFunction()
    }

    async initData() {
        try {
            showLoader();
            this.productsManagerClass = new ProductsManagerClass();
            await this.productsManagerClass.initGetAllProductsAjax();
            this.handlerShowData();
            hideLoader();

        } catch (error) {
            hideLoader();
            console.error('Error adding group:', error);
            throw error;
        }
    }

    handlerShowData(){
        this.product = this.productsManagerClass.getProducts();
        const data = productsHtml( this.product.data);
        $('#showProdutsHere').empty()
        appendData(data);
        this.nextPageUrl =  this.product.next_page_url || null;
        this.hasMoreData =  this.product.nextPageUrl !== null;
    }

    onScrollAppendNewItems() {
        $(window).on("scroll", this.handleScroll.bind(this));
    }

    handleScroll() {
        if (this.isFetching || !this.hasMoreData) return;

        let scrollPosition = $(window).scrollTop() + $(window).height();
        let documentHeight = $(document).height();

        if (scrollPosition > documentHeight - 100) {
            this.isFetching = true;
            showLoader();

            this.fetchMoreProducts();
        }
    }

    async fetchMoreProducts() {
        try {
            if (!this.nextPageUrl) return;

            const response = await fetch(this.nextPageUrl);
            const data = await response.json();

            if (data.data.length > 0) {
                const newProductsHtml = productsHtml(data.data);
                appendData(newProductsHtml);
                this.nextPageUrl = data.next_page_url || null;
                this.hasMoreData = this.nextPageUrl !== null;
            } else {
                this.hasMoreData = false;
            }
        } catch (error) {
            console.error('Error fetching more products:', error);
        } finally {
            this.isFetching = false;
            hideLoader();
        }
    }


    searchFunction(){
        this.searchVieName();
    }

    searchVieName(){
        $(document).off('change','.searchData').on('change','.searchData', async (e)=> await this.handlerSearch(e))
    }
   async handlerSearch(e){
        const $target=$(e.target);
        this.query.searchData=$target.val();
        if($target.val().length>0){
            $('.removeQuery').removeClass('hidden');
        }else{
            $('.removeQuery').addClass('hidden');
        }
        $(document).on('click','.removeQuery',(e)=>{
            $target.val('').trigger('change');
        })
        showLoader();
        this.productsManagerClass = new ProductsManagerClass();
        await this.productsManagerClass.filterData(this.query);
        this.handlerShowData();
        hideLoader();


    }
}

new ProductManger();
