import Swal from "sweetalert2";

class ProductsManagerClass {
    constructor() {
        this.products = [];

    }

    async initGetAllProductsAjax() {
        try {
            this.products = await this.getAllProducts();
        } catch (error) {
            console.error('Error fetching products:', error);
            throw error;
        }
    }

    getAllProducts() {
        return $.ajax({
            url: 'products/get-all-products',
            method: 'GET',
            dataType: 'json',
        });
    }



    getProducts() {
        return this.products;
    }

    getProductsById(productsId) {

        return this.products.find(product => product.id == productsId);
    }

    addProducts(product) {
        this.products.push(product);
    }

    removeProductsById(productsId) {
        this.products = this.products.filter(product => product.id != productsId);
    }

    updateProducts(ProductId, newProduct) {
        this.products = this.products.filter(product => product.id != ProductId);
        this.products.push(newProduct);
    }

    updateAllProducts(products) {
        this.products = products;
    }

    async addNewAjax(productData) {
        try {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

          await $.ajax({
                url: '/add-product',
                type: 'POST',
                data: productData,
                dataType: 'json' // Ensure you expect a JSON response
            });
        } catch (error) {
            console.error('Error adding product:', error);
            throw error;
        }
    }


    async filterData(productData) {
        try {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            let response = await $.ajax({
                url: `/products/get-fillter-product`,
                type: 'GET',
                data: productData,
                dataType: 'json'
            });

            if (!response || !response.data || response.data.length === 0) {
                Swal.fire({
                    icon: "error",
                    title: "خطأ",
                    text: "لا توجد منتجات مطابقة للبحث!",
                });

            }

            this.products = response;
        } catch (error) {
            console.error('Error fetching filtered products:', error);
            throw error;
        }
    }



    async editNewAjax(productData) {

        try {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            await $.ajax({
                url: '/edit-product',
                type: 'POST',
                data: productData,
                dataType: 'json'
            });


        } catch (error) {
            console.error('Error adding product:', error);
            throw error;
        }
    }

    async deleteProduct(productData) {

        try {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            await $.ajax({
                url: '/delete-product',
                type: 'POST',
                data: productData,
                dataType: 'json'
            });


        } catch (error) {
            console.error('Error adding product:', error);
            throw error;
        }
    }

}

export { ProductsManagerClass };
