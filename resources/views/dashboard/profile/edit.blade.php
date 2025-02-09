@extends('layouts.dashboradLayout.app')
@section('title', 'الإعدادت ')
@section('content')
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Top Section: Submit Button and Image Input -->
        <div class="flex justify-between items-center mb-6">
            <!-- Submit Button -->

            <!-- Image Input -->
            <div class="flex flex-col justify-center items-center">
                <label for="image" class="cursor-pointer">
                    <input type="file" id="image" name="image" class="hidden" onchange="previewImage(event)">
                    <div class="w-32 h-32 bg-gray-300 flex justify-center items-center text-gray-600 relative">
                        <img
                            src="{{ asset('profile_images/' . $user->image) }}"
                            id="imagePreview"
                            class="{{ $user->image ? 'block' : 'hidden' }} w-32 h-32 object-cover"
                        />
                        <span id="uploadText" class="{{ $user->image ? 'hidden' : 'block' }}">حمل الصورة</span>
                    </div>
                    <p class="mt-2 text-gray-600">حمل الصورة</p>
                </label>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">حفظ المعلومات</button>

        </div>


        <!-- Input Fields Based on User Role -->
        @if($user->role == 'admin')
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">البريد الإلكتروني</label>
                    <input value="{{$user->email}}" placeholder="البريد الإلكتروني" type="text" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">الإسم الكامل</label>
                    <input value="{{$user->name}}" placeholder="الإسم الكامل" type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
            </div>
        @endif

        @if($user->role == 'agency')
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">البريد الإلكتروني</label>
                    <input value="{{$user->email}}" placeholder="البريد الإلكتروني" type="text" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">الإسم الكامل</label>
                    <input value="{{$user->name}}" placeholder="الإسم الكامل" type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">رقم الهاتف</label>
                    <input value="{{$user->agency->phone}}" placeholder="رقم الهاتف" type="text" id="phone" name="phone" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="fullname" class="block text-sm font-medium text-gray-700">العلامة التجارية</label>
                    <input value="{{$user->agency->name ?? ''}}" placeholder="العلامة التجارية" type="text" id="fullname" name="fullname" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">العنوان</label>
                    <input value="{{$user->agency->address ?? ''}}" placeholder="العنوان" type="text" id="address" name="address" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
            </div>
        @endif

        @if($user->role == 'user')
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">البريد الإلكتروني</label>
                    <input value="{{$user->email}}" placeholder="البريد الإلكتروني" type="text" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">الإسم الكامل</label>
                    <input value="{{$user->name}}" placeholder="الإسم الكامل" type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">رقم الهاتف</label>
                    <input value="{{$user->userDetail->phone}}" placeholder="رقم الهاتف" type="text" id="phone" name="phone" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="fullname" class="block text-sm font-medium text-gray-700">العلامة التجارية</label>
                    <input value="{{$user->userDetail->name ?? ''}}" placeholder="العلامة التجارية" type="text" id="fullname" name="fullname" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">العنوان</label>
                    <input value="{{$user->userDetail->address ?? ''}}" placeholder="العنوان" type="text" id="address" name="address" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" />
                </div>
            </div>
        @endif

    </form>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            const uploadText = document.getElementById('uploadText');
            const imagePreview = document.getElementById('imagePreview');

            reader.onload = function () {
                // Set the image preview source
                imagePreview.src = reader.result;

                // Hide the upload text and show the image
                uploadText.classList.add('hidden');
                imagePreview.classList.remove('hidden');
            };

            // Read the uploaded file as a data URL
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
