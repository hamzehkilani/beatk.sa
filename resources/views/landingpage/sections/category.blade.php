@php
    $classButton=" text-white font-IBM text-[24px]  py-1 px-4 bg-primary border border-primary  rounded-full hover:bg-white hover:text-black transition duration-300"
@endphp
<section class="mt-10 w-full py-4 px-4 md:px-10 overflow-hidden "  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1600" id="products">
    <div class=" flex flex-row justify-between  items-center">
        <span class=" font-IBM text-[40px]">التصنيفات </span>

        <div class=" items-center flex gap-2">

            <button class="{{$classButton}}">
                عرض الكل
            </button>
        </div>
    </div>


{{-- caasd --}}
    <div class=" mt-10 w-full">
        <div class=" flex flex-wrap gap-[20px]">
            @for ($i=1;$i<=6;$i++)
            <div class="{{ $i == 3 || $i == 5
            ? ($i == 5 ? 'w-[47%]' : 'w-full md:w-[47%]')
            : ($i == 6 ? 'w-full md:w-1/4' : 'w-[47%] md:w-1/4')
        }} h-[319.27px] rounded-xl overflow-hidden relative">
                        <img src=" {{ asset('assets/attachment/category/'.$i.'.png')}}" alt="category" class=" w-full h-full object-fill" >
                <div class=" absolute w-full h-full top-0 bg-[#00000063] z-10"></div>
                <div class=" absolute w-full h-full top-0 bg-[#00000063] z-20 flex items-end opacity-0  text-white px-[10px] py-[14px] hover:opacity-100 transition duration-300">
                    <div class=" flex justify-between w-full">
                        <span>إسم التصنيف</span>

                        <button class="{{$classButton}} !text-[16px]">
                            عرض التفاصيل
                        </button>
                    </div>

                </div>
            </div>
            @endfor

        </div>
    </div>
</section>
