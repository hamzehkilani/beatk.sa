@php

$class = 'w-full flex flex-row items-center gap-[12px] text-[16px] h-[50px] rounded-[4px] px-[8px] py-[7px] transition-all duration-300 ease-in-out transform hover:bg-white hover:text-secondry hover:font-bold hover:scale-105';
@endphp

<div id="sidebar"
    class="w-[250px] py-[3px] lg:flex flex-col fixed hidden items-center border h-full min-h-screen gap-[14px] bg-secondry shadow-lg transform -translate-x-full transition-transform duration-300 lg:translate-x-0 rtl">
    <div class="w-[108.54px] h-[80px] py-2">
        <img src="{{ asset('assets/attachment/logo/logo.png') }}" class="w-full h-full object-contain" alt="logo" />
    </div>
    <div class="flex flex-col h-[calc(100%-90px)] justify-between w-full">
        <div class="flex flex-col justify-start w-full h-full gap-[5px] px-4">

            <div class="{{ $class }} {{ request()->routeIs( 'categories.index') ? 'bg-white text-primary font-bold' : 'text-white font-light' }}">
                <i class="las la-chart-pie text-[25px]"></i>
                <a href="{{ route('categories.index') }}" class="flex-1 text-right">إدارة التصنيفات</a>
            </div>
            @if(auth()->user()->role=='admin')
            <div class="{{ $class }} {{ request()->routeIs('products.index') ? 'bg-white text-primary font-bold' : 'text-white font-light' }}">
                <i class="las la-box-open text-[25px]"></i>
                <a href="{{ route('products.index') }}" class="flex-1 text-right">المنتجات</a>
            </div>
            @endif

            @if(auth()->user()->role=='admin')
                <div class="{{ $class }} {{ request()->routeIs('plans.index') ? 'bg-secondry text-white font-bold' : 'text-white font-light' }}">
                    <i class="las la-users-cog text-[25px]"></i>
                    <a href="{{ route('auctions.index') }}" class="flex-1 text-right">المزادات</a>
                </div>
            @endif



        </div>

        <div class="{{ $class }} flex justify-center items-center px-4 {{ false ? 'bg-secondry text-white font-bold' : 'text-white font-light' }}">
            <i class="las la-power-off text-[25px]"></i>
            <form method="POST" action="{{ route('logout') }}" class="flex-1 text-right">
                @csrf
                <button type="submit" class="w-full text-right bg-transparent border-none  font-light">
                    تسجيل الخروج
                </button>
            </form>
        </div>

    </div>
</div>
