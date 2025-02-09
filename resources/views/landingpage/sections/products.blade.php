

@php
    $classButton=" text-white font-IBM text-[24px]  py-1 px-4 bg-primary border border-primary  rounded-full hover:bg-white hover:text-black transition duration-300"
@endphp

<section class="mt-10 w-full py-4 px-4 md:px-10 overflow-hidden "  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1600" id="products">
    <div class=" flex flex-row justify-between  items-center">
        <span class=" font-IBM text-[40px]">المزادات </span>

        <div class="   items-center flex flex-col md:flex-row gap-2">
            <button class="{{$classButton}}">
                تصنيف
            </button>
            <button class="{{$classButton}}">
                تصنيف
            </button>
            <button class="{{$classButton}}">
                تصنيف
            </button>
            <button class="{{$classButton}}">
                عرض الكل
            </button>
        </div>
    </div>

    <div class=" mt-10 w-full">

        <div class="swiper-products overflow-hidden mb-16  h-[500px]    cursor-pointer  mt-[10] w-full "
        data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1600">
        <div class="swiper-wrapper rounded-lg   h-full  ">
            @for ($i=0 ;$i<8;$i++)
            <div class="swiper-slide hover:scale-100    flex flex-col gap-3 h-[367.83px]  bg-gray-50 px-2 py-2 border rounded-md">
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

                <div class="w-full flex justify-center ">
                    <button class="{{$classButton}} !text-[16px]">
                        عرض التفاصيل
                    </button>
                </div>
            </div>

            @endfor




        </div>
        <div class="swiper-button-next absolute z-40  bottom-4 top-[unset] border-2 !p-0  border-primary !text-[14px] !left-[61px] rounded-full font-bold w-9 h-9 flex justify-center items-center text-primary"></div>
        <div class="swiper-button-prev absolute z-40 bottom-4 top-[unset] border-2 !p-0  border-primary !text-[14px] !left-[106px] font-bold !right-[unset] rounded-full w-9 h-9 flex justify-center items-center text-primary"></div>
        <div class="swiper-pagination absolute z-40 text-start right-12"></div>

    </div>

    </div>
</section>
