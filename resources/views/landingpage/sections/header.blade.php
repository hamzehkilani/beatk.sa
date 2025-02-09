<div
    class="w-full  bg-primary   text-white fixed h-[90.09px] top-0  flex justify-between items-center border-b  z-[1000000] px-[52px] py-[23px] fixedHeder "  data-aos="fade-down" data-aos-easing="linear"
    data-aos-duration="1400" >
    <div class="md:flex hidden gap-[30px] items-center text-textBlack text-[18px]"
      >
        <div class="w-[175.47px] h-[71.65px]">
            <img src="{{ asset('assets/attachment/logo/logo.png') }}" class="w-full h-full object-cover"  alt="logo">
        </div>

    </div>

    <div class="  items-center text-[18px] leading-[21.6px] font-semibold hidden md:flex gap-[15px] ">
        <a href="{{ Route::is('landingPage') ? '#main' : '/#main' }}" class="nav-link">الرئيسية</a>
        <a href="{{ Route::is('landingPage') ? '#Services' : '/#Services' }}" class="nav-link">المزادات</a>
        <a href="{{ Route::is('landingPage') ? '#OurPackages' : '/#OurPackages' }}" class="nav-link">تواصل معنا</a>



    </div>



    <div class="md:hidden flex items-center">
        <button id="menu-toggle" class="text-white text-3xl focus:outline-none">☰</button>

    </div>
    <div class="left w-fit">
        <a href="{{route('login.form')}}" class="bg-yalo rounded-md py-[16px] gap-[24px] px-[39px] flex text-[18px] text-white font-bold">
            تسجيل الدخول

            <svg width="25"
                height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.140137" y="24.0444" width="24" height="24" rx="12"
                    transform="rotate(-90 0.140137 24.0444)" fill="white" />
                <g clip-path="url(#clip0_2483_2)">
                    <path
                        d="M14.5781 7.53836C14.5781 7.53836 10.0215 10.8943 10.0215 12.095C10.0215 13.2958 14.5781 16.6516 14.5781 16.6516"
                        stroke="#2461A9" stroke-width="1.13916" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_2483_2">
                        <rect width="6.83496" height="11.3916" fill="white" transform="translate(8.72266 6.34857)" />
                    </clipPath>
                </defs>
            </svg>
        </a>
    </div>
</div>
<div id="mobile-menu"
    class=" w-full  h-full bg-primary bg-opacity-35 fixed top-0  left-0 border-t border-primary shadow-md z-[1000000] transform translate-x-full transition-transform duration-300 ease-in-out">
    <div
        class="flex bg-white flex-col items-start px-2 h-full w-[calc(100%-40%)] text-textBlack text-[28px] py-4 space-y-4 mobile-nav">
        <div class="w-[84.83px] h-[54.88px]">
            <img src="{{ asset('assets/attachment/logo/logo.png') }}" alt="logo">
        </div>
        <div class="  items-start text-[18px] leading-[21.6px] font-semibold  flex flex-col gap-[15px] text-[#2F2F2F] md:hidden">
            <a href="{{ Route::is('landingPage') ? '#main' : '/#main' }}" class="nav-link">الرئيسية</a>
            <a href="{{ Route::is('landingPage') ? '#Services' : '/#Services' }}" class="nav-link">خدماتنا</a>
            <a href="{{ Route::is('landingPage') ? '#OurPackages' : '/#OurPackages' }}" class="nav-link">باقاتنا</a>
            <a href="{{ Route::is('contactUs') ?'#clientsInfo': '/contact#clientsInfo' }}" class="nav-link">شركاء النجاح</a>

            <a href="{{ Route::is('contactUs') ? '#contactmain' : '/contact#contactmain' }}" class="nav-link"> من نحن</a>

        </div>
    </div>
</div>
