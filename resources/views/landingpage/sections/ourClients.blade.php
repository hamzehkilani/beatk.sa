


<section class="mt-10 w-full  overflow-hidden " >
    <div class=" flex flex-row justify-center mb-5   items-center"  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1600" id="products">
        <span class=" font-IBM text-[40px]  font-bold">شركائنا</span>

        </div>
        <div class=" w-full h-[182.7px] bg-black flex justify-center items-center ">
            <div class="swiper-blogs overflow-hidden   imageToUpdate  cursor-pointer  h-full mt-[10] w-full " data-aos="fade-up"
            data-aos-easing="linear" data-aos-duration="1600">
            <div class="swiper-wrapper h-full px-2 ">
                @for($i=0;$i<20;$i++)
                    <div class="swiper-slide hover:scale-[1.006] w-full rounded-[24px] hover:bg-card-bg flex flex-col p-6 justify-center items-center text-2">
                        <div class="w-[231.27px] h-[80.7px] ">
                            <img src="{{asset('assets/attachment/logo/logo.png')}}" class="w-full h-full object-cover" alt="OurClients">
                        </div>
                    </div>
                @endfor

        </div>

    </div>

    </div>

</section>
