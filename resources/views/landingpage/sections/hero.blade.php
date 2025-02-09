<style>
    .swiper-button-next:after, .swiper-button-prev:after{
        font-size: 14px;
        font-weight: 800;
    }
    .swiper-auction .swiper-pagination-bullet-active {
    width: 24px;
    color: white;
    background: white;
    border-radius: 3px;
}

.swiper-products .swiper-pagination-bullet-active {
    width: 32px;
    height: 10px;
    color: #7a69f3;
    background: #7a69f3;
    border-radius: 3px;
}

</style>

<section class="mt-40 w-full py-4 px-4 md:px-10 overflow-hidden  " id="hero">

    <div class="w-full gap-2 flex flex-col items-center justify-center md:flex-row overflow-hidden ">


        <div class=" w-full md:w-4/5 overflow-hidden">
            <div class="swiper-auction overflow-hidden   imageToUpdate  cursor-pointer  h-full mt-[10] w-full "
                data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1600">
                <div class="swiper-wrapper rounded-lg   h-full  ">
                    @for ($i=0 ;$i<6;$i++)
                    <div class="swiper-slide hover:scale-100  w-full h-[367.83px] relative rounded-2xl overflow-hidden">
                        <img src="{{asset('assets/attachment/hero/1.png')}}" class=" object-cover relative rounded-2xl   bg-cover w-full h-full" alt="auction" >
                        <div class=" absolute w-full h-full top-0  bg-custom-270 opacity-[0.98]  rounded-2xl"></div>
                        <div class=" absolute top-0 px-6 py-8 flex flex-col gap-4 h-full w-full rounded-2xl">
                            <h1 class=" w-full max-w-[450px] text-[24px] md:text-[44px] text-white font-bold">
                                صور خاصة بالمزادات  المتاحة حاليا
                            </h1>
                            <div class=" flex gap-4 items-center ">
                                <div class="flex items-center gap-3 ">
                                    <div class="w-6 h-6  rounded-sm bg-[#e0dae9]"></div>
                                    <p class=" text-[16px] md:text-[24px] text-white font-bold"> معلومة 1</p>
                                </div>
                                <div class="flex items-center gap-3 ">
                                    <div class="w-6 h-6  rounded-sm bg-[#e0dae9]"></div>
                                    <p class=" text-[16px] md:text-[24px] text-white font-bold"> معلومة 2</p>
                                </div>
                            </div>
                            <div class=" flex gap-4 items-center ">
                                <div class="flex items-center gap-3 ">
                                    <div class="w-6 h-6  rounded-sm bg-[#e0dae9]"></div>
                                    <p class=" text-[16px] md:text-[24px] text-white font-bold"> معلومة 1</p>
                                </div>
                                <div class="flex items-center gap-3 ">
                                    <div class="w-6 h-6  rounded-sm bg-[#e0dae9]"></div>
                                    <p class=" text-[16px] md:text-[24px] text-white font-bold"> معلومة 2</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endfor




                </div>
                <div class="swiper-button-next absolute z-40  bottom-4 top-[unset] border-2 !p-0  border-white !text-[14px] !left-[61px] rounded-full font-bold w-9 h-9 flex justify-center items-center text-white"></div>
                <div class="swiper-button-prev absolute z-40 bottom-4 top-[unset] border-2 !p-0  border-white !text-[14px] !left-[106px] font-bold !right-[unset] rounded-full w-9 h-9 flex justify-center items-center text-white"></div>
                <div class="swiper-pagination  absolute z-40 text-start right-12"></div>

            </div>
        </div>
        <div class="md:max-w-1/5 w-fit "  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1600">
            <div class="w-full flex flex-col gap-3 min-h-[367.83px]  bg-gray-50 px-2 py-2 border rounded-md">
                <div class=" w-[297px] h-[192.08px] rounded-md overflow-hidden relative">
                    <img src="{{asset('assets/attachment/products/0af52103d91e7cfa23bd7023122a4a0e.png')}}" alt="products" class="w-full h-full object-cover ">

                    <div class=" absolute px-2 py-1 bg-primary rounded-full top-2 left-4 text-white text-[16px]">
                        00:21:23
                    </div>
                </div>
                <div class=" flex justify-between w-full items-center">
                    <span class="text-[24px] text-black font-bold font-IBM">أفضل مزاد اليوم</span>
                    <i class="las  la-heart text-gray-500 text-2xl hover:text-red-600 transition duration-500 "></i>
                </div>
                <div class=" flex justify-between w-full items-center font-IBM ">
                    <span class="text-[16px] text-black  ">إسم المزاد</span>
                    <span class="text-[16px] text-black "> يبدأ الجمعة</span>
                </div>
                <div class=" flex justify-between w-full items-center  font-IBM">
                    <div class="flex items-center gap-2">
                        <i class="las la-clock text-2xl"></i>
                        <span class="text-[16px] text-black "> لمدة 4 أيام</span>

                    </div>
                    <div class="flex items-center gap-2">
                        <i class="las la-calendar-alt  text-2xl"></i>
                        <div class="flex flex-col gap-2 font-IBM">
                            <span class=" font-IBM">13-12-2024</span>
                            <span>11-06-1446 </span>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>




</section>
