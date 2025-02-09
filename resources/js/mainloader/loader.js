function showLoader(){

        $('.main-loader').removeClass('hidden').fadeIn()


}
function hideLoader(){
    setTimeout(()=>{
        $('.main-loader').fadeOut()

    },300)
}


export {showLoader,hideLoader}
