@extends('layouts.landingPageLayout.app')
@section('title', 'حساب جديد')
@section('content')


<style>
    /* Full screen spinner style */
    .spinner-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.5); /* Optional: adds a semi-transparent overlay */
    }

    .spinner {
        position: relative;
        width: 40px;
        height: 40px;
    }

    .spinner div {
        position: absolute;
        width: 50%;
        height: 150%;
        background: #000000;
        transform: rotate(calc(var(--rotation) * 1deg)) translate(0, calc(var(--translation) * 1%));
        animation: spinner-fzua35 1s calc(var(--delay) * 1s) infinite ease;
    }

    .spinner div:nth-child(1) {
        --delay: 0.1;
        --rotation: 36;
        --translation: 150;
    }

    .spinner div:nth-child(2) {
        --delay: 0.2;
        --rotation: 72;
        --translation: 150;
    }

    .spinner div:nth-child(3) {
        --delay: 0.3;
        --rotation: 108;
        --translation: 150;
    }

    .spinner div:nth-child(4) {
        --delay: 0.4;
        --rotation: 144;
        --translation: 150;
    }

    .spinner div:nth-child(5) {
        --delay: 0.5;
        --rotation: 180;
        --translation: 150;
    }

    .spinner div:nth-child(6) {
        --delay: 0.6;
        --rotation: 216;
        --translation: 150;
    }

    .spinner div:nth-child(7) {
        --delay: 0.7;
        --rotation: 252;
        --translation: 150;
    }

    .spinner div:nth-child(8) {
        --delay: 0.8;
        --rotation: 288;
        --translation: 150;
    }

    .spinner div:nth-child(9) {
        --delay: 0.9;
        --rotation: 324;
        --translation: 150;
    }

    .spinner div:nth-child(10) {
        --delay: 1;
        --rotation: 360;
        --translation: 150;
    }

    @keyframes spinner-fzua35 {
        0%, 10%, 20%, 30%, 50%, 60%, 70%, 80%, 90%, 100% {
            transform: rotate(calc(var(--rotation) * 1deg)) translate(0, calc(var(--translation) * 1%));
        }

        50% {
            transform: rotate(calc(var(--rotation) * 1deg)) translate(0, calc(var(--translation) * 1.5%));
        }
    }
</style>

<div class="spinner-wrapper z-[1000000000] !hidden">
    <div class="spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


    <section class="w-screen h-screen flex flex-col md:flex-row" id="login">
        <div class="w-full md:w-1/2  h-full flex items-center justify-center bg-white">
            <div class="flex flex-col  justify-center items-center w-full md:max-w-[516px] px-4 gap-8">
                <div class="w-48 h-32">
                    <img src="{{ asset('assets/attachment/logo/logo.png') }}" class="w-full h-full" alt="logo">
                </div>
                <h1 class=" text-[36px] text-secondry font-bold">إنشاء حساب</h1>
                <form class="w-full flex flex-col gap-6">
                    <input type="text" id="plan-id" value="{{$planId}}"  hidden>
                    <input type="text" id="isYearly" value="{{$isYearly}}" hidden>
                    <input type="text" id="userValue" value="{{$userValue}}" hidden>
                    <input type="text" id="sitesCount" value="{{$sitesCount}}" hidden>
                    <input type="text" id="type" value="{{$type}}" hidden>



                    @if($type=='agency')
                    <div class="input-group flex flex-col gap-2">
                        <label for="name" class="text-[15px] text-gray-700 font-bold">اسم الوكالة</label>
                        <input type="text" id="agancy_name" name="agancy_name" required
                            class="w-full border border-gray-300  focus:ring-0 text-[18px] h-12 rounded-md px-3"
                            placeholder="اسم الوكالة">
                        <p class="text-sm text-red-600 mt-1 hidden"> يجب عليك ادخال اسم الوكالة</p>

                    </div>
                    @endif


                    <div class="input-group flex flex-col gap-2">
                        <label for="name" class="text-[15px] text-gray-700 font-bold">الإسم الكامل</label>
                        <input type="text" id="name" name="name" required
                            class="w-full border border-gray-300  focus:ring-0 text-[18px] h-12 rounded-md px-3"
                            placeholder="الإسم الكامل">
                        <p class="text-sm text-red-600 mt-1 hidden"> يجب عليك ادخال اسم المستخدم</p>

                    </div>
                    <div class="input-group flex flex-col gap-2">
                        <label for="email" class="text-[15px] text-gray-700 font-bold">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" required
                            class="w-full border border-gray-300  focus:ring-0 text-[18px] h-12 rounded-md px-3"
                            placeholder="أدخل بريدك الإلكتروني">
                        <p class="text-sm text-red-600 mt-1 hidden">يجب عليك ادخال البريد الالكتروني</p>
                    </div>
                    <div class="input-group flex flex-col gap-2">
                        <label for="password" class="text-[15px] text-gray-700 font-bold"> كلمة السر</label>
                        <input type="password" id="password" name="password" required
                            class="w-full border border-gray-300  focus:ring-0 text-[18px] h-12 rounded-md px-3"
                            placeholder="  كلمة السر">
                        <p class="text-sm text-red-600 mt-1"></p>
                    </div>
                    <div class="input-group flex flex-col gap-2">
                        <label for="password" class="text-[15px] text-gray-700 font-bold"> تأكيد كلمة السر</label>
                        <input type="password"required id="Cpassword" name="Cpassword"
                            class="w-full border border-gray-300  focus:ring-0 text-[18px] h-12 rounded-md px-3"
                            placeholder="تأكيد كلمة السر">
                        <p class="text-sm text-red-600 mt-1 hidden"></p>
                    </div>

                    <button type="button" class="w-full h-12 bg-secondry text-white rounded-md" id="register-btn">
                        انشاء حساب
                    </button>

                    <p class="text-[15px] text-center "> قم بتسجيل دخولك من هنا</p>

                </form>
            </div>
        </div>
        <div class="hidden md:block w-full md:w-1/2 h-full relative">
            <img src="{{ asset('assets/attachment/Auth/Auth.jpg') }}" alt="hero" class="w-full h-full object-cover">
        </div>
    </section>
@endsection

@section('js')
@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'خطأ',
        text: '{{ session('error') }}',
        confirmButtonText: 'حسناً'
    });
</script>
@endif
@vite('resources/js/Auth/register.js')
@endsection
