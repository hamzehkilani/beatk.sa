import Swal from "sweetalert2";

class AuctionsManagerClass {
    constructor() {
        this.auctions = [];

    }

    async initGetAllAuctionsAjax() {
        try {
            this.auctions = await this.getAllAuctions();
        } catch (error) {
            console.error('Error fetching auctions:', error);
            throw error;
        }
    }

    getAllAuctions() {
        return $.ajax({
            url: 'auctions/get-all-auctions',
            method: 'GET',
            dataType: 'json',
        });
    }



    getAuctions() {
        return this.auctions;
    }

    getAuctionsById(auctionsId) {

        return this.auctions.find(auction => auction.id == auctionsId);
    }

    addAuctions(auction) {
        this.auctions.push(auction);
    }

    removeAuctionsById(auctionsId) {
        this.auctions = this.auctions.filter(auction => auction.id != auctionsId);
    }

    updateAuctions(ProductId, newProduct) {
        this.auctions = this.auctions.filter(auction => auction.id != ProductId);
        this.auctions.push(newProduct);
    }

    updateAllAuctions(auctions) {
        this.auctions = auctions;
    }

    async addNewAjax(auctionData) {
        try {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

          await $.ajax({
                url: '/add-auction',
                type: 'POST',
                data: auctionData,
                dataType: 'json' // Ensure you expect a JSON response
            });
        } catch (error) {
            console.error('Error adding auction:', error);
            throw error;
        }
    }


    async filterData(auctionData) {
        try {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            let response = await $.ajax({
                url: `/auctions/get-fillter-auction`,
                type: 'GET',
                data: auctionData,
                dataType: 'json'
            });

            if (!response || !response.data || response.data.length === 0) {
                Swal.fire({
                    icon: "error",
                    title: "خطأ",
                    text: "لا توجد منتجات مطابقة للبحث!",
                });

            }

            this.auctions = response;
        } catch (error) {
            console.error('Error fetching filtered auctions:', error);
            throw error;
        }
    }



    async editNewAjax(auctionData) {

        try {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            await $.ajax({
                url: '/edit-auction',
                type: 'POST',
                data: auctionData,
                dataType: 'json'
            });


        } catch (error) {
            console.error('Error adding auction:', error);
            throw error;
        }
    }

    async deleteProduct(auctionData) {

        try {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            await $.ajax({
                url: '/delete-auction',
                type: 'POST',
                data: auctionData,
                dataType: 'json'
            });


        } catch (error) {
            console.error('Error adding auction:', error);
            throw error;
        }
    }

}

export { AuctionsManagerClass };
