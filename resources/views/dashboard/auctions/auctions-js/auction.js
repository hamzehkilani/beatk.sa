import { hideLoader, showLoader } from "../../../../js/mainloader/loader";
import { AuctionsManagerClass } from "./ajax-data/AuctionsManagerClass";
import { appendData, auctionsHtml } from "./html/auctions-html";

class ProductManger {
    constructor() {
        this.auction = [];
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
            this.auctionsManagerClass = new AuctionsManagerClass();
            await this.auctionsManagerClass.initGetAllAuctionsAjax();
            this.handlerShowData();
            hideLoader();

        } catch (error) {
            hideLoader();
            console.error('Error adding group:', error);
            throw error;
        }
    }

    handlerShowData(){
        this.auction = this.auctionsManagerClass.getAuction();
        const data = auctionsHtml( this.auction.data);
        $('#showProdutsHere').empty()
        appendData(data);
        this.nextPageUrl =  this.auction.next_page_url || null;
        this.hasMoreData =  this.auction.nextPageUrl !== null;
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

            this.fetchMoreAuction();
        }
    }

    async fetchMoreAuction() {
        try {
            if (!this.nextPageUrl) return;

            const response = await fetch(this.nextPageUrl);
            const data = await response.json();

            if (data.data.length > 0) {
                const newAuctionHtml = auctionsHtml(data.data);
                appendData(newAuctionHtml);
                this.nextPageUrl = data.next_page_url || null;
                this.hasMoreData = this.nextPageUrl !== null;
            } else {
                this.hasMoreData = false;
            }
        } catch (error) {
            console.error('Error fetching more auctions:', error);
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
        await this.auctionsManagerClass.filterData(this.query);
        this.handlerShowData();
        hideLoader();


    }
}

new ProductManger();
