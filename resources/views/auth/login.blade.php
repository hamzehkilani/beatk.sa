@extends('layouts.landingPageLayout.app')
@section('title', 'تسجيل الدخول')
@section('content')
<section class="w-screen h-screen flex flex-col md:flex-row" id="login">
    <div class="w-full md:w-1/2 h-full flex items-center justify-center bg-white">
        <div class="flex flex-col justify-center items-center w-full md:max-w-md px-4 gap-10">
            <div class="w-48 h-32">
                <img src="{{ asset('assets/attachment/logo/logo.png') }}" class="w-full h-full" alt="Site Logo">
            </div>
            <form action="{{ route('login') }}" method="POST" class="w-full flex flex-col gap-6">
                @csrf
                <div class="input-group flex flex-col gap-2">
                    <label for="email" class="text-[15px] text-gray-700">البريد الإلكتروني</label>
                    <div class="relative">
                        <input type="email" id="email" name="email" required
                               class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                               placeholder="أدخل بريدك الإلكتروني" value="{{ old('email') }}">
                        @error('email')
                            <p class="absolute text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-group flex flex-col gap-2">
                    <label for="password" class="text-[15px] text-gray-700">كلمة المرور</label>
                    <input type="password" id="password" name="password" required
                           class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                           placeholder="أدخل كلمة المرور">
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                    <div class="w-full flex justify-between items-center mt-2">
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="saveLogin" name="remember" value="1"
                                   class="w-5 h-5 bg-gray-100 border-secondry rounded focus:ring-secondry">
                            <label for="saveLogin" class="text-[16px]">أحفظ دخولي</label>
                        </div>
                        <a href="" class="text-[15px] text-blue-600 hover:underline">
                            نسيت كلمة المرور
                        </a>
                    </div>
                </div>
                <button class="w-full h-12 bg-secondry text-white rounded-md">
                    تسجيل الدخول
                </button>
            </form>
        </div>
    </div>
    <div class="hidden md:block w-full md:w-1/2 h-full relative">
        <img src="{{ asset('assets/attachment/Auth/Auth.jpg') }}" alt="Login Illustration" class="w-full h-full object-cover">
    </div>
</section>
@endsection

@section('js')
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'خطأ',
                text: {!! json_encode($errors->first()) !!},
            });
        </script>
    @endif
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'نجاح',
                text: {!! json_encode(session('success')) !!},
            });
        </script>
    @endif
@endsection
