@extends('layouts.dashboradLayout.app')
@section('title', 'الصفحة الرئيسية')
@section('content')

    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'agency')
        @include('dashboard.modals.addNewClients', [
            'name' => 'عميل',
        ])
        @include('dashboard.modals.editNewClients', [
            'name' => 'عميل',
        ])
        @include('dashboard.modals.delete', [
            'name' => 'عميل',
        ])
    @endif
    <div class="flex w-full h-full p-4 flex-col">
        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'agency')
            <div class="flex justify-between w-full gap-5 items-center flex-col md:flex-row ">

                <div class=" w-full  lg:w-[30%] h-[50px] flex gap-2">
                    <button data-modal-target="add-new-client" data-modal-toggle="add-new-client"
                        class=" h-full text-nowrap flex justify-center items-center px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-secondry">
                        <i
                            class="las la-plus w-[18px] h-[18px] text-secondry  flex justify-center items-center text-[12px] font-bold bg-white rounded-md"></i>
                        إضافة عميل

                    </button>

                </div>


            </div>

            <div
                class="relative overflow-y-auto mt-10 border-2 {{ auth()->user()->role == 'admin' ? 'max-h-[500px] ' : '' }}  rounded-xl p-8 bg-white   border-gray-300  ">
                <table class="w-full   ">
                    <thead class=" border-b border-spacing-y-2  ">
                        <tr class="hidden sm:table-row">
                            <th scope="col" class="px-8 py-3 ">
                                <span class="text-[16px] font-semibold">الإسم</span>

                            </th>

                            <th scope="col" class="px-6 py-3">
                                <span class="text-[16px] font-semibold">شعار العميل </span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="text-[16px] font-semibold"> البريد الإلكتروني</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="text-[16px] font-semibold"> تاريخ الإنضمام </span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="text-[16px] font-semibold"> التفاصيل </span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="text-[16px] font-semibold"> اعدادات</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="productsShowMain">

                        @foreach ($data['users'] as $user)
                            <tr class="bg-white border-b hover:bg-gray-50 flex flex-col sm:table-row"
                                id="user-tr-{{ $user->id }}" id="column-table-${product.id}">
                                <td
                                    class="p-4 md:px-8 md:py-3 text-center flex justify-between md:justify-center items-center px-8">
                                    <span class="block sm:hidden text-gray-900 font-semibold mb-1">الإسم</span>
                                    <span
                                        class="text-[16px] text-gray-400 text-center nameInfo-{{ $user->id }} ">{{ $user->name }}</span>


                                </td>


                                <td class="px-6 py-4 sm:px-6 sm:py-3 text-center font-semibold text-gray-900    ">
                                    <div class="flex justify-between md:justify-center items-center ">
                                        <span class="block sm:hidden text-gray-700 font-semibold mb-1">شعار العميل </span>
                                        <div class="w-[36.69px] h-[36.69px]">
                                            <img src="{{ asset('assets/attachment/users/user1.png') }}"
                                                class="w-full h-full object-cover" alt="users">
                                        </div>


                                    </div>

                                </td>
                                <td class="px-6 py-4 sm:px-6 sm:py-3 ">
                                    <div class="flex justify-between  items-center md:block">

                                        <span class="block sm:hidden text-gray-700 font-semibold mb-1">البريد
                                            الالكتروني</span>
                                        <p class="text-[16px] text-gray-400 text-center emailInfo-{{ $user->id }}"
                                            data-email="{{ $user->email }}"> {{ $user->email }}</p>
                                    </div>
                                </td>

                                <td class="px-6 py-4 sm:px-6 sm:py-3  text-center text-gray-900    ">
                                    <div class="flex justify-between items-center md:block">
                                        <span class="block sm:hidden text-gray-700 font-semibold mb-1"> تاريخ الإنضمام
                                        </span>
                                        <span class="text-[16px] text-gray-400 text-center">
                                            {{ $user->created_at->format('Y-m-d') }}</span>

                                    </div>
                                </td>
                                <td class="px-6 py-4 sm:px-6 sm:py-3  text-center text-gray-900    ">
                                    <div class="flex justify-between items-center md:block">
                                        <span class="block sm:hidden text-gray-700 font-semibold mb-1"> التفاصيل </span>
                                        <a href="{{ route('users.getCampaigns', $user->id) }}">
                                            <span class="text-[16px] text-gray-400 text-center"> التفاصيل</span>
                                        </a>

                                    </div>
                                </td>
                                <td class="px-6 py-4 sm:px-6 sm:py-3 font-semibold text-gray-900    ">
                                    <div class="flex justify-between items-center md:justify-center ">
                                        <button class=" bg-secondry text-white px-4 py-2 rounded-md"
                                            data-dropdown-toggle="userSetting-{{ $user->id }}">
                                            <i class="las la-angle-down"></i>
                                        </button>

                                        <div id="userSetting-{{ $user->id }}"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="userSettingButton">
                                                <li>
                                                    <button
                                                        class="block px-4 py-2 text-secondry  hover:bg-gray-100 w-full text-start updateUserInpest userData-{{ $user->id }}"
                                                        data-user="{{ base64_encode($user) }}">تعديل</button>
                                                </li>
                                                <li>
                                                    <button
                                                        class="block px-4 py-2 text-red-600  hover:text-red-400  w-full text-start deleteModel "
                                                        data-id="{{ $user->id }}" data-name="{{ $user->name }}"
                                                        data-role="{{ $user->role }}">حذف</button>
                                                </li>


                                            </ul>



                                        </div>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>



                {!! $data['users']->links('pagination::tailwind') !!}

        @endif
    </div>

    <div class="mt-4 flex justify-center">

        @if (auth()->user()->role == 'admin')
            <div class="flex flex-col mt-10 gap-5 ">
                <span class="text-[20px] text-secondry font-bold">إحصائيات أفضل عملاء الوكالة</span>

                <div class=" flex flex-wrap  w-full  gap-[21px]  max-h-[343px]  ">
                    @for ($i = 1; $i < 8; $i++)
                        <div
                            class="w-[23%] drop-shadow-md rounded-[14px] max-h-[161px] p-4 flex flex-col gap-4  bg-white ">
                            <div class="flex justify-between">
                                <span class="text-[16px] text-[#606060] font-bold">إسم العميل </span>
                                <div class=" w-[35.94px] h-[35.48px]">
                                    <img src="{{ asset('assets/attachment/users/user1.png') }}" alt="users">
                                </div>
                            </div>
                            <span class="text-[20px] font-bold">1000 زائر</span>

                            <div class=" mt-2 w-full flex justify-center items-center gap-2">
                                <svg width="21" height="13" viewBox="0 0 21 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1768 0.641846L16.4668 2.93185L11.5868 7.81185L7.58676 3.81185L0.176758 11.2318L1.58676 12.6418L7.58676 6.64185L11.5868 10.6418L17.8868 4.35185L20.1768 6.64185V0.641846H14.1768Z"
                                        fill="#16DBCC" />
                                </svg>

                                <span class="text-[16px] text-[#606060] font-light">إرتفاع الزوار بنسبة <span
                                        class="text-[#16DBCC] font-bold">1.8% </span></span>
                            </div>
                        </div>
                    @endfor
                    <div class="flex h-full w-[23%] max-h-[161px]  items-center justify-center">
                        <button data-modal-target="add-new-client" data-modal-toggle="add-new-client"
                            class="  text-nowrap py-4 flex justify-center items-center px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-secondry">
                            <i
                                class="las la-plus w-[18px] h-[18px] text-secondry  flex justify-center items-center text-[12px] font-bold bg-white rounded-md"></i>
                            إضافة عميل

                        </button>
                    </div>


                </div>

            </div>
        @endif
        @if (auth()->user()->role == 'user')

            <div class="flex flex-col w-full  gap-5 ">

                <div class=" flex flex-wrap  w-full   justify-between  max-h-[343px]  ">

                    <div class="w-[23%] drop-shadow-md rounded-[14px] max-h-[161px] p-4 flex flex-col gap-4  bg-white ">
                        <div class="flex justify-between">
                            <span class="text-[16px] text-[#606060] font-bold">فيسبوك </span>
                            <svg width="38" height="39" viewBox="0 0 38 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35.6249 0.578613H2.67123C2.13113 0.578613 1.61314 0.799128 1.23123 1.19165C0.849321 1.58417 0.634766 2.11654 0.634766 2.67164V36.5406C0.634766 36.8155 0.68744 37.0877 0.789782 37.3416C0.892124 37.5955 1.04213 37.8263 1.23123 38.0206C1.42034 38.215 1.64483 38.3692 1.89191 38.4743C2.13898 38.5795 2.4038 38.6337 2.67123 38.6337H20.407V23.8873H15.5935V18.1791H20.407V13.8979C20.3073 12.8928 20.4227 11.8774 20.7452 10.923C21.0678 9.9686 21.5895 9.09827 22.274 8.37307C22.9584 7.64787 23.7889 7.08534 24.7073 6.72496C25.6257 6.36457 26.6096 6.21505 27.5901 6.28687C29.0311 6.27776 30.4713 6.35399 31.9037 6.5152V11.6526H28.9601C26.6274 11.6526 26.1831 12.7943 26.1831 14.4497V18.122H31.7371L31.0151 23.8303H26.1831V38.6337H35.6249C35.8923 38.6337 36.1572 38.5795 36.4042 38.4743C36.6513 38.3692 36.8758 38.215 37.0649 38.0206C37.254 37.8263 37.404 37.5955 37.5064 37.3416C37.6087 37.0877 37.6614 36.8155 37.6614 36.5406V2.67164C37.6614 2.39678 37.6087 2.12461 37.5064 1.87067C37.404 1.61674 37.254 1.386 37.0649 1.19165C36.8758 0.997292 36.6513 0.84312 36.4042 0.737936C36.1572 0.632751 35.8923 0.578613 35.6249 0.578613Z"
                                    fill="#0266FF" />
                            </svg>

                        </div>
                        <span class="text-[20px] font-bold">1000 زائر</span>

                        <div class=" mt-2 w-full flex justify-center items-center gap-2">
                            <svg width="21" height="13" viewBox="0 0 21 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1768 0.641846L16.4668 2.93185L11.5868 7.81185L7.58676 3.81185L0.176758 11.2318L1.58676 12.6418L7.58676 6.64185L11.5868 10.6418L17.8868 4.35185L20.1768 6.64185V0.641846H14.1768Z"
                                    fill="#16DBCC" />
                            </svg>

                            <span class="text-[16px] text-[#606060] font-light">إرتفاع الزوار بنسبة <span
                                    class="text-[#16DBCC] font-bold">1.8% </span></span>
                        </div>
                    </div>


                    <div class="w-[23%] drop-shadow-md rounded-[14px] max-h-[161px] p-4 flex flex-col gap-4  bg-white ">
                        <div class="flex justify-between">
                            <span class="text-[16px] text-[#606060] font-bold">إنستجرام </span>
                            <div class=" w-[35.94px] h-[35.48px]">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.9798 10.161C30.5644 10.161 30.1584 10.2841 29.8131 10.5149C29.4677 10.7456 29.1986 11.0736 29.0396 11.4573C28.8807 11.841 28.8391 12.2633 28.9201 12.6706C29.0011 13.078 29.2012 13.4522 29.4948 13.7459C29.7885 14.0396 30.1627 14.2396 30.5701 14.3206C30.9774 14.4016 31.3997 14.36 31.7834 14.2011C32.1671 14.0422 32.4951 13.773 32.7259 13.4277C32.9566 13.0823 33.0798 12.6763 33.0798 12.261C33.0798 11.704 32.8585 11.1699 32.4647 10.776C32.0709 10.3822 31.5367 10.161 30.9798 10.161ZM39.0298 14.396C38.9957 12.944 38.7238 11.5074 38.2248 10.1435C37.7798 8.97644 37.0872 7.91969 36.1948 7.04596C35.3282 6.14895 34.269 5.46077 33.0973 5.03346C31.7369 4.51924 30.2987 4.24107 28.8448 4.21096C26.9898 4.10596 26.3948 4.10596 21.6348 4.10596C16.8748 4.10596 16.2798 4.10596 14.4248 4.21096C12.9708 4.24107 11.5326 4.51924 10.1723 5.03346C9.0027 5.46509 7.9444 6.15269 7.07477 7.04596C6.17776 7.91252 5.48957 8.97173 5.06227 10.1435C4.54805 11.5038 4.26988 12.942 4.23977 14.396C4.13477 16.251 4.13477 16.846 4.13477 21.606C4.13477 26.366 4.13477 26.961 4.23977 28.816C4.26988 30.2699 4.54805 31.7081 5.06227 33.0685C5.48957 34.2402 6.17776 35.2994 7.07477 36.166C7.9444 37.0592 9.0027 37.7468 10.1723 38.1785C11.5326 38.6927 12.9708 38.9708 14.4248 39.001C16.2798 39.106 16.8748 39.106 21.6348 39.106C26.3948 39.106 26.9898 39.106 28.8448 39.001C30.2987 38.9708 31.7369 38.6927 33.0973 38.1785C34.269 37.7511 35.3282 37.063 36.1948 36.166C37.0912 35.2955 37.7844 34.2378 38.2248 33.0685C38.7238 31.7045 38.9957 30.2679 39.0298 28.816C39.0298 26.961 39.1348 26.366 39.1348 21.606C39.1348 16.846 39.1348 16.251 39.0298 14.396ZM35.8798 28.606C35.867 29.7168 35.6658 30.8174 35.2848 31.861C35.0053 32.6225 34.5566 33.3107 33.9723 33.8735C33.4046 34.4518 32.7179 34.8997 31.9598 35.186C30.9162 35.567 29.8156 35.7682 28.7048 35.781C26.9548 35.8685 26.3073 35.886 21.7048 35.886C17.1023 35.886 16.4548 35.886 14.7048 35.781C13.5513 35.8026 12.4028 35.6249 11.3098 35.256C10.5849 34.9551 9.92964 34.5083 9.38477 33.9435C8.80392 33.3813 8.36074 32.6925 8.08977 31.931C7.66251 30.8725 7.42554 29.7469 7.38977 28.606C7.38977 26.856 7.28477 26.2085 7.28477 21.606C7.28477 17.0035 7.28477 16.356 7.38977 14.606C7.39761 13.4703 7.60493 12.3449 8.00227 11.281C8.31035 10.5423 8.78323 9.88386 9.38477 9.35596C9.91644 8.75425 10.5735 8.27637 11.3098 7.95596C12.3765 7.57103 13.5008 7.36985 14.6348 7.36096C16.3848 7.36096 17.0323 7.25596 21.6348 7.25596C26.2373 7.25596 26.8848 7.25596 28.6348 7.36096C29.7456 7.3737 30.8462 7.57489 31.8898 7.95596C32.685 8.2511 33.3988 8.73094 33.9723 9.35596C34.5457 9.89352 34.9938 10.5507 35.2848 11.281C35.6737 12.3466 35.875 13.4716 35.8798 14.606C35.9673 16.356 35.9848 17.0035 35.9848 21.606C35.9848 26.2085 35.9673 26.856 35.8798 28.606ZM21.6348 12.6285C19.8599 12.6319 18.1259 13.1614 16.6519 14.1499C15.1779 15.1385 14.0299 16.5418 13.3531 18.1825C12.6763 19.8233 12.501 21.6278 12.8494 23.3681C13.1978 25.1084 14.0542 26.7064 15.3104 27.9602C16.5666 29.2139 18.1663 30.0672 19.9073 30.4122C21.6483 30.7572 23.4524 30.5784 25.0918 29.8984C26.7312 29.2184 28.1323 28.0677 29.118 26.5918C30.1037 25.1158 30.6298 23.3808 30.6298 21.606C30.6321 20.4249 30.4009 19.255 29.9494 18.1636C29.498 17.0722 28.8352 16.0809 27.9993 15.2465C27.1633 14.4122 26.1707 13.7514 25.0784 13.3021C23.9861 12.8528 22.8158 12.6238 21.6348 12.6285ZM21.6348 27.4335C20.4822 27.4335 19.3555 27.0917 18.3972 26.4513C17.4389 25.811 16.6919 24.9009 16.2509 23.836C15.8098 22.7712 15.6944 21.5995 15.9192 20.4691C16.1441 19.3386 16.6991 18.3003 17.5141 17.4853C18.3291 16.6703 19.3675 16.1153 20.4979 15.8904C21.6283 15.6656 22.8 15.781 23.8649 16.222C24.9297 16.6631 25.8398 17.41 26.4802 18.3684C27.1205 19.3267 27.4623 20.4534 27.4623 21.606C27.4623 22.3712 27.3115 23.129 27.0187 23.836C26.7258 24.5431 26.2966 25.1855 25.7554 25.7266C25.2143 26.2678 24.5719 26.697 23.8649 26.9899C23.1578 27.2827 22.4 27.4335 21.6348 27.4335Z"
                                        fill="#E74363" />
                                </svg>
                            </div>
                        </div>
                        <span class="text-[20px] font-bold">2700 زائر</span>

                        <div class=" mt-2 w-full flex justify-center items-center gap-2">
                            <svg width="21" height="13" viewBox="0 0 21 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1768 0.641846L16.4668 2.93185L11.5868 7.81185L7.58676 3.81185L0.176758 11.2318L1.58676 12.6418L7.58676 6.64185L11.5868 10.6418L17.8868 4.35185L20.1768 6.64185V0.641846H14.1768Z"
                                    fill="#16DBCC" />
                            </svg>

                            <span class="text-[16px] text-[#606060] font-light">إرتفاع الزوار بنسبة <span
                                    class="text-[#16DBCC] font-bold">1.8% </span></span>
                        </div>
                    </div>


                    <div class="w-[23%] drop-shadow-md rounded-[14px] max-h-[161px] p-4 flex flex-col gap-4  bg-white ">
                        <div class="flex justify-between">
                            <span class="text-[16px] text-[#606060] font-bold">تيكتوك </span>
                            <div class=" w-[35.94px] h-[35.48px]">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g style="mix-blend-mode:darken">
                                        <rect x="-0.00878906" y="0.0273438" width="49.1577" height="49.1577"
                                            fill="url(#pattern0_577_2713)" />
                                    </g>
                                    <defs>
                                        <pattern id="pattern0_577_2713" patternContentUnits="objectBoundingBox"
                                            width="1" height="1">
                                            <use xlink:href="#image0_577_2713"
                                                transform="translate(-0.111492 -0.111492) scale(0.00543549)" />
                                        </pattern>
                                        <image id="image0_577_2713" width="225" height="225"
                                            xlink:href="data:image/png;base64,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" />
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <span class="text-[20px] font-bold">5200 زائر</span>

                        <div class=" mt-2 w-full flex justify-center items-center gap-2">
                            <svg width="21" height="13" viewBox="0 0 21 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1768 0.641846L16.4668 2.93185L11.5868 7.81185L7.58676 3.81185L0.176758 11.2318L1.58676 12.6418L7.58676 6.64185L11.5868 10.6418L17.8868 4.35185L20.1768 6.64185V0.641846H14.1768Z"
                                    fill="#16DBCC" />
                            </svg>

                            <span class="text-[16px] text-[#606060] font-light">إرتفاع الزوار بنسبة <span
                                    class="text-[#16DBCC] font-bold">1.8% </span></span>
                        </div>
                    </div>


                    <div class="w-[23%] drop-shadow-md rounded-[14px] max-h-[161px] p-4 flex flex-col gap-4  bg-white ">
                        <div class="flex justify-between">
                            <span class="text-[16px] text-[#606060] font-bold">سناب شات </span>
                            <div class=" w-[35.94px] h-[35.48px]">
                                <svg width="49" height="49" viewBox="0 0 49 49" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M44.3775 34.5803C38.6451 33.6358 36.0757 27.7773 35.9695 27.5285L35.9587 27.5051C35.7958 27.2389 35.6931 26.9402 35.6578 26.6301C35.6225 26.32 35.6554 26.006 35.7542 25.7099C36.1392 24.8027 37.4129 24.3985 38.2569 24.1306C38.4676 24.0638 38.6669 24.0006 38.8232 23.9386C40.3487 23.3361 40.6589 22.7123 40.6513 22.2948C40.6112 22.0344 40.4944 21.7919 40.3158 21.5982C40.1372 21.4046 39.9049 21.2686 39.6486 21.2076L39.6373 21.2034C39.4107 21.1123 39.1687 21.066 38.9246 21.0669C38.7096 21.0632 38.4962 21.1055 38.2989 21.191C37.7032 21.4922 37.054 21.6731 36.3884 21.7233C36.0048 21.7324 35.6301 21.607 35.3293 21.3688C35.3476 21.0289 35.3693 20.6783 35.3929 20.3078L35.4009 20.1772C35.7854 17.4826 35.6215 14.738 34.9191 12.1083C34.0908 10.2202 32.7247 8.6178 30.9915 7.50118C29.2582 6.38456 27.2345 5.80314 25.1728 5.82947C24.9046 5.83227 24.6364 5.83479 24.368 5.83703C22.3094 5.8116 20.2888 6.39315 18.5587 7.50908C16.8285 8.62501 15.4654 10.2259 14.6395 12.1118C13.937 14.7392 13.7729 17.4815 14.157 20.1739C14.1828 20.5722 14.2068 20.9707 14.229 21.3694C13.8975 21.6291 13.4813 21.7562 13.0614 21.7262C12.3547 21.6959 11.6628 21.5133 11.0334 21.1907C10.879 21.1224 10.7115 21.089 10.5428 21.0928C10.1952 21.0791 9.85202 21.1744 9.56132 21.3654C9.27062 21.5565 9.04692 21.8336 8.92153 22.1581C8.75771 23.0193 9.98733 23.6432 10.7349 23.9384C10.8929 24.0012 11.0913 24.0641 11.3011 24.1305C12.1444 24.3982 13.4192 24.8026 13.8041 25.7101C13.9028 26.0063 13.9357 26.3204 13.9004 26.6306C13.8651 26.9407 13.7624 27.2394 13.5996 27.5058L13.5889 27.5289C13.0363 28.7321 12.3164 29.8513 11.4506 30.8531C9.8775 32.8098 7.65138 34.1334 5.18093 34.5809C5.06419 34.6001 4.95867 34.6618 4.88467 34.7541C4.81067 34.8465 4.77341 34.9629 4.78005 35.081C4.7853 35.1704 4.80629 35.2582 4.84205 35.3403C5.19361 36.1625 6.95849 36.8415 9.94569 37.3023C10.225 37.3455 10.3432 37.8008 10.5062 38.5467C10.5714 38.8453 10.6389 39.1552 10.733 39.4752C10.7638 39.617 10.8461 39.7424 10.9641 39.8269C11.0821 39.9115 11.2273 39.9492 11.3715 39.9327C11.6577 39.9166 11.9421 39.8759 12.2213 39.8109C12.9576 39.6502 13.7084 39.5653 14.462 39.5573C15.0034 39.5586 15.5437 39.6043 16.0776 39.6939C17.2057 39.9797 18.2549 40.5157 19.1476 41.2622C20.6543 42.5489 22.5477 43.2951 24.527 43.3824C24.5945 43.3824 24.6619 43.3799 24.7272 43.3744C24.8095 43.3783 24.9177 43.3824 25.0311 43.3824C27.0115 43.2946 28.9058 42.5479 30.4135 41.2608C31.3053 40.515 32.3536 39.9796 33.4805 39.6941C34.0146 39.6047 34.555 39.559 35.0965 39.5575C35.8495 39.5611 36.6002 39.6406 37.3373 39.795C37.6168 39.8561 37.9013 39.8921 38.1873 39.9024H38.234C38.3694 39.9133 38.5042 39.8744 38.613 39.793C38.7218 39.7117 38.7971 39.5934 38.825 39.4604C38.9179 39.1447 38.9859 38.8444 39.0527 38.5378C39.2144 37.7958 39.3325 37.3426 39.6129 37.2993C42.6009 36.8377 44.3657 36.1597 44.7149 35.3421C44.7513 35.2593 44.7728 35.1707 44.7784 35.0804C44.7849 34.9623 44.7476 34.8459 44.6737 34.7536C44.5997 34.6613 44.4942 34.5996 44.3775 34.5803Z"
                                        fill="#FFFB00" />
                                </svg>
                            </div>
                        </div>
                        <span class="text-[20px] font-bold">2000 زائر</span>

                        <div class=" mt-2 w-full flex justify-center items-center gap-2">
                            <svg width="21" height="13" viewBox="0 0 21 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1768 0.641846L16.4668 2.93185L11.5868 7.81185L7.58676 3.81185L0.176758 11.2318L1.58676 12.6418L7.58676 6.64185L11.5868 10.6418L17.8868 4.35185L20.1768 6.64185V0.641846H14.1768Z"
                                    fill="#16DBCC" />
                            </svg>

                            <span class="text-[16px] text-[#606060] font-light">إرتفاع الزوار بنسبة <span
                                    class="text-[#16DBCC] font-bold">1.8% </span></span>
                        </div>
                    </div>





                </div>
                <div class="flex justify-between relative ">

                    <canvas id="lablesChar"
                        class="mt-10 bg-white p-4 rounded-lg shadow-lg relative w-[70%] max-w-[70%] max-h-[400px]">
                    </canvas>
                    <span class=" absolute top-[3rem] right-4 text-[16px] text-[#606060] font-bold ">نسبة الزوار مقارنة
                        بالمبيعات</span>

                    <canvas id="bieChart"
                        class="mt-10 bg-white p-4 rounded-lg shadow-lg relative w-[28%] max-w-[28%] max-h-[400px]">
                    </canvas>
                </div>

                <div class="flex gap-2 relative ">

                    <div
                        class="relative overflow-y-auto mt-10 border-2   rounded-xl p-8 bg-white   border-gray-300  w-1/2">
                        <span class=" absolute top-[1rem] right-4 text-[16px] text-[#606060] font-bold ">أفضل المنتجات
                            مبيعا</span>

                        <table class="w-full   ">
                            <thead class=" border-b border-spacing-y-2  ">
                                <tr class="hidden sm:table-row">
                                    <th scope="col" class="px-8 py-3 ">
                                        <span class="text-[16px] font-semibold">#</span>

                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <span class="text-[16px] font-semibold">الإسم</span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="text-[16px] font-semibold">المنصة</span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="text-[16px] font-semibold"> عدد المبيعات</span>
                                    </th>

                                </tr>
                            </thead>
                            <tbody id="productsShowMain">

                                @for ($i = 1; $i < 4; $i++)
                                    <tr class="bg-white border-b hover:bg-gray-50 flex flex-col sm:table-row"
                                        id="column-table-${product.id}">
                                        <td class="px-6 py-4 sm:px-6 sm:py-3 ">
                                            <div class="flex justify-between  items-center md:block">

                                                <span class="block sm:hidden text-gray-700 font-semibold mb-1">#</span>
                                                <p class="text-[16px] text-gray-400 text-center">1</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 sm:px-6 sm:py-3 ">
                                            <div class="flex justify-between  items-center md:block">

                                                <span
                                                    class="block sm:hidden text-gray-700 font-semibold mb-1">المنصة</span>
                                                <p class="text-[16px] text-gray-400 text-center">فيسبوك</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 sm:px-6 sm:py-3 ">
                                            <div class="flex justify-between  items-center md:block">

                                                <span
                                                    class="block sm:hidden text-gray-700 font-semibold mb-1">المنصة</span>
                                                <p class="text-[16px] text-gray-400 text-center">فيسبوك</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 sm:px-6 sm:py-3 ">
                                            <div class="flex justify-between  items-center md:block">

                                                <span class="block sm:hidden text-gray-700 font-semibold mb-1">عدد
                                                    المبيعات</span>
                                                <p class="text-[16px] text-gray-400 text-center">51</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor

                            </tbody>
                        </table>

                    </div>
                    <div class=" relative  overflow-y-auto mt-10 border-2   rounded-xl p-8 bg-white   border-gray-300  w-1/2">
                        <canvas id="lineChar" class=" w-full h-full">
                        </canvas>
                        <span class=" absolute top-[1rem] right-4 text-[16px] text-[#606060] font-bold ">نسبة الزوار مقارنة
                            بالمبيعات</span>
                    </div>

                </div>
            </div>






        @endif


    </div>



@endsection

@section('js')

    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'agency')
        <script>
            const userAuthData = {!! auth()->user() !!};


            // console.log(encodedUserAuthData);
        </script>
        @vite('resources/js/dashborad/indexAdmin/index.js')
        @vite('resources/js/dashborad/indexAdmin/updateUserLinks.js')
        @vite('resources/js/dashborad/indexAdmin/delete.js')
    @endif
    @if (auth()->user()->role == 'user' )

    @vite('resources/js/chartJsUlitsExample/LabelsChart.js')

    @vite('resources/js/chartJsUlitsExample/bieChart.js')
    @vite('resources/js/chartJsUlitsExample/lineChart.js')
    @endif

@endsection
