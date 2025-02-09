@extends('layouts.dashboradLayout.app')
@section('title', 'الصفحة الرئيسية')
@section('content')




    <div class="flex w-full h-full p-4 flex-col  ">
        <div class=" flex flex-wrap  justify-between w-full ">
            <div class="w-[23%] drop-shadow-md rounded-[14px]  p-4 flex flex-col gap-2  bg-white ">
                <div class="flex justify-between">
                    <span class="text-[16px] text-[#606060] font-bold">إجمالي عدد المنتجات </span>
                </div>
                <span class="text-[40px] font-bold">{{ $productsCount }}</span>

                <div class=" mt-2 w-full flex justify-center items-center gap-2">

                    @if ($productPre['isNegative'])
                        @include('dashboard.components.minus-pre', [
                            'name' => 'انخفاض المنتجات بنسبة ',
                            'val' => $productPre['percentageChange'],
                        ])
                    @else
                        @include('dashboard.components.AddPrecentage', [
                            'name' => 'إرتفاع المنتجات بنسبة ',
                            'val' => $productPre['percentageChange'],
                        ])
                    @endif

                </div>
            </div>
            <div class="w-[23%] drop-shadow-md rounded-[14px]  p-4 flex flex-col gap-2  bg-white ">
                <div class="flex justify-between">
                    <span class="text-[16px] text-[#606060] font-bold">إجمالي عدد المنتجات الفعالة </span>
                </div>
                <span class="text-[40px] font-bold">{{ 10 }}</span>

                <div class=" mt-2 w-full flex justify-center items-center gap-2">

                    @if (false)
                        @include('dashboard.components.minus-pre', [
                            'name' => 'انخفاض المنتجات بنسبة ',
                            'val' => 10,
                        ])
                    @else
                        @include('dashboard.components.AddPrecentage', [
                            'name' => 'إرتفاع المنتجات بنسبة ',
                            'val' => 10,
                        ])
                    @endif

                </div>
            </div>
            <div class="w-[23%] drop-shadow-md rounded-[14px]  p-4 flex flex-col gap-2  bg-white ">
                <div class="flex justify-between">
                    <span class="text-[16px] text-[#606060] font-bold">إجمالي عدد المنتجات غير فعالة </span>
                </div>
                <span class="text-[40px] font-bold">{{ 10 }}</span>

                <div class=" mt-2 w-full flex justify-center items-center gap-2">

                    @if (true)
                        @include('dashboard.components.minus-pre', [
                            'name' => 'انخفاض المنتجات بنسبة ',
                            'val' => 10,
                        ])
                    @else
                        @include('dashboard.components.AddPrecentage', [
                            'name' => 'إرتفاع المنتجات بنسبة ',
                            'val' => 10,
                        ])
                    @endif

                </div>
            </div>
            <div class="w-[23%] drop-shadow-md rounded-[14px]  p-4 flex flex-col gap-2  bg-white ">
                <div class="flex justify-between">
                    <span class="text-[16px] text-[#606060] font-bold">إجمالي عدد المنتجات منتهية </span>
                </div>
                <span class="text-[40px] font-bold">{{ 10 }}</span>

                <div class=" mt-2 w-full flex justify-center items-center gap-2">

                    @if (false)
                        @include('dashboard.components.minus-pre', [
                            'name' => 'انخفاض المنتجات بنسبة ',
                            'val' => 10,
                        ])
                    @else
                        @include('dashboard.components.AddPrecentage', [
                            'name' => 'إرتفاع المنتجات بنسبة ',
                            'val' => 10,
                        ])
                    @endif

                </div>
            </div>
        </div>
        <div
            class="relative  mt-10 border-2  mb-10 px-4 rounded-xl p-8 bg-white border-gray-300" >
            <div class=" flex justify-between mb-4 ">
                <div class="flex h-[47.5px] items-center justify-center border  border-borderColor250  px-2 ">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.8996 20.1509L22.4996 22.7509M21.1996 15.6009C21.1996 12.37 18.5805 9.75092 15.3496 9.75092C12.1187 9.75092 9.49963 12.37 9.49963 15.6009C9.49963 18.8318 12.1187 21.4509 15.3496 21.4509C18.5805 21.4509 21.1996 18.8318 21.1996 15.6009Z"
                            stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M2.49963 6.75092C2.63013 5.41542 2.92583 4.51722 3.59588 3.84717C4.26593 3.17712 5.16413 2.88142 6.49963 2.75092M6.49963 22.7509C5.16413 22.6204 4.26593 22.3247 3.59588 21.6546C2.92583 20.9846 2.63013 20.0864 2.49963 18.7509M22.4996 6.75092C22.3691 5.41542 22.0734 4.51722 21.4033 3.84717C20.7333 3.17712 19.8351 2.88142 18.4996 2.75092M2.49963 10.7509V14.7509M14.4996 2.75092H10.4996"
                            stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <input type="text" class=" border-0 focus:ring-0 text-[18px] min-w-[380px] focus:outline-none searchData  text-inputColor " placeholder="إبحث عن اسم منتج او اسم تاجر او اسم تصنيف">

                    <i class=" las la-times cursor-pointer removeQuery hidden text-[24px] text-red-400"></i>

                </div>
            </div>



            <div class=" flex flex-wrap gap-2  products relative  min-h-[250px]  "  id="showProdutsHere">
                <div class="loader absolute left-1/2 bottom-2 hidden z-20">
                    <div class="loader_cube loader_cube--color"></div>
                    <div class="loader_cube loader_cube--glowing"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
@vite('resources/views/dashboard/products/products-js/product.js')
@endsection
