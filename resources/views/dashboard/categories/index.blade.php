@extends('layouts.dashboradLayout.app')
@section('title', 'الصفحة الرئيسية')
@section('content')

    @if (auth()->user()->role == 'admin')
        @include('dashboard.categories.modals.add-new-category', [
            'name' => 'تصنيف',
        ])



        @include('dashboard.categories.modals.edit-new-category', [

            'name' => 'تصنيف',
        ])
        @include('dashboard.modals.delete', [
            'name' => 'تصنيف',
        ])
    @endif
    <div class="flex w-full h-full p-4 flex-col">
        <div class="flex justify-between w-full gap-5 items-center flex-col md:flex-row ">

            <div class=" w-full  lg:w-[30%] h-[50px] flex gap-2">
                <button data-modal-target="add-new-category" data-modal-toggle="add-new-category"
                    class=" h-full text-nowrap flex justify-center items-center px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-secondry">
                    <i
                        class="las la-plus w-[18px] h-[18px] text-secondry  flex justify-center items-center text-[12px] font-bold bg-white rounded-md"></i>
                    إضافة تصنيف

                </button>

            </div>


        </div>
        <div class="relative overflow-y-auto mt-10 border-2 max-h-screen rounded-xl p-8 bg-white border-gray-300">
            <table class="w-full table-auto border-collapse">
                <thead class="border-b">
                    <tr>
                        <th class="px-6 py-3 text-[16px] font-semibold text-center">الإسم</th>
                        <th class="px-6 py-3 text-[16px] font-semibold text-center">الصورة</th>
                        <th class="px-6 py-3 text-[16px] font-semibold text-center">الترتيب</th>
                        <th class="px-6 py-3 text-[16px] font-semibold text-center">تاريخ الاضافة</th>
                        <th class="px-6 py-3 text-[16px] font-semibold text-center">إعدادات</th>
                    </tr>
                </thead>

                <tbody id="categorytable">
                    @foreach ($categories as $category)
                        <tr class="bg-white border-b hover:bg-gray-50" id="category-tr-{{ $category->id }}" data-column-id="{{ $category->id }}">

                            <td class="px-6 py-3 text-center text-gray-700 catNameTd">{{ $category->name }}</td>

                            <td class="px-6 py-3 text-center">
                                <img src="{{ $category->image ?: asset('assets/attachment/users/user1.png') }}"
                                     class="w-10 h-10 object-cover mx-auto rounded-full catImageTd"
                                     alt="category-image">
                            </td>

                            <td class="px-6 py-3 text-center text-gray-700 catSortTd">{{ $category->sort }}</td>

                            <td class="px-6 py-3 text-center text-gray-700">{{ $category->created_at->format('Y-m-d') }}</td>

                            <td class="px-6 py-3 text-center">
                                <button class="bg-secondry text-white px-4 py-2 rounded-md"
                                        data-dropdown-toggle="categorySettings-{{ $category->id }}">
                                    <i class="las la-angle-down"></i>
                                </button>

                                <div id="categorySettings-{{ $category->id }}"
                                     class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 mt-2">
                                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="categorySettingsButton">
                                        <li>
                                            <button class="block px-4 py-2 text-secondry hover:bg-gray-100 w-full text-start updateCaetgroy"
                                                    data-user="{{ base64_encode(json_encode($category)) }}">
                                                تعديل
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block px-4 py-2 text-red-600 hover:text-red-400 w-full text-start deleteModel"
                                                    data-id="{{ $category->id }}" data-name="{{ $category->name }}">
                                                حذف
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $categories->links('pagination::tailwind') !!}
        </div>



    @endsection

    @section('js')

        <script>
            const userAuthData = {!! auth()->user() !!};


            // console.log(encodedUserAuthData);
        </script>

        @vite('resources/views/dashboard/categories/category-js/index.js')
        @vite('resources/views/dashboard/categories/category-js/delete.js')

        @vite('resources/views/dashboard/categories/category-js/update-category.js')


    @endsection
