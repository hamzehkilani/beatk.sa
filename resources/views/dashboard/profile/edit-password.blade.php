@extends('layouts.dashboradLayout.app')
@section('title', 'الإعدادت ')
@section('content')


    <form action="{{ route('password.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <!-- Top Section: Submit Button and Image Input -->
        <div class="flex justify-between items-center mb-6">

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">تعديل كلمة المرور</button>
        </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="current_password" class="block text-sm font-medium text-gray-700">كلمة المرور الحالية</label>
                    <input required value="" placeholder="كلمة المرور الحالية" type="password" id="current_password" name="current_password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="new_password" class="block text-sm font-medium text-gray-700">كلمة المرور الجديدة</label>
                    <input required value="" placeholder="كلمة المرور الجديدة" type="password" id="new_password" name="new_password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">تأكيد كلمة المرور الجديدة</label>
                    <input required value="" placeholder="تأكيد كلمة المرور الجديدة" type="password" id="new_password_confirmation" name="new_password_confirmation" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
            </div>
    </form>
@endsection
