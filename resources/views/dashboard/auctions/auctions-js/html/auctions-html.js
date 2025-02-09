function appendData(auctions){
    $('#showProdutsHere').append(auctions)
}


function auctionsHtml(auctions){

    const $classButton=" text-white font-IBM text-[24px]  py-1 px-4 bg-primary border border-primary  rounded-full hover:bg-white hover:text-black transition duration-300";
    let html=auctions.map((p)=>{

        return  `
        <div class=" max-h-[450px] max-w-[350px] px-4 py-4 rounded-lg overflow-hidden border ">
    <div class=" flex flex-col">
        <div class=" h-[180px] w-[250px] relative rounded-md overflow-hidden ">
            <div class=" absolute w-full h-full top-0 bg-[#00000063] z-10"></div>

            <img src=" ${p.first_image.image_path}" class=" h-full w-full object-cover" alt="auctions">
            <div class=" absolute w-full h-full top-0 bg-[#00000063] z-20 flex items-end opacity-0  text-white px-[10px] py-[14px] hover:opacity-100 transition duration-300">
                <div class=" flex justify-between w-full">

                    <span>${p.category.name}</span>
                </div>
            </div>
            <button class=" absolute top-2 left-2 z-20 ${$classButton} !text-[16px] ">
                فعال
            </button>
        </div>

           <div class=" flex items-center flex-row justify-between mt-4 ">
            <h1 class=" text-[18px] font-bold"> اضيف بواسطة</h1>
            <span class=" text-[14px] text-gray-400 font-bold break-words  overflow-y-auto scrollbar-hide" >${p.created_by.name}</span>

        </div>

        <h1 class=" text-[24px] font-bold">  ${p.name}  </h1>
        <span class="  text-[14px] text-gray-400 font-bold break-words max-w-[250px] h-[60px] overflow-y-auto scrollbar-hide" >${p.description}</span>

        <div class=" flex items-center flex-row justify-between mt-4 ">
            <h1 class=" text-[24px] font-bold"> تاريخ الاضافة</h1>
            <span class=" text-[18px] text-gray-400 font-bold break-words  overflow-y-auto scrollbar-hide" >${ new Date(p.created_at).toISOString().split("T")[0]}</span>

        </div>

        <button class=" mt-4    ${$classButton} !text-[16px] ">
            تفاصيل المنتج
        </button>
    </div>

</div>

        `
    }).join(' ');
    return html;
}


export {auctionsHtml,appendData}
