<nav class=" w-full  md:h-[85.5px] flex justify-end  md:flex-row flex-col bg-secondry   ">
    <div
        class="flex justify-between items-center    px-[25px]  py-[19px] border-b border-borderColor250 w-full ">
        <button id="sidebarToggle" class="lg:hidden fixed top-4 right-4 z-50 bg-white text-white rounded-full p-2">
            <i class="las la-bars text-[25px]"></i>
        </button>

        <div class=" items-center hidden md:flex gap-[12px] bg-white px-2  ">

            <div class="flex h-[47.5px] items-center justify-center border-l-2 border-borderColor250  px-2 ">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.8996 20.1509L22.4996 22.7509M21.1996 15.6009C21.1996 12.37 18.5805 9.75092 15.3496 9.75092C12.1187 9.75092 9.49963 12.37 9.49963 15.6009C9.49963 18.8318 12.1187 21.4509 15.3496 21.4509C18.5805 21.4509 21.1996 18.8318 21.1996 15.6009Z"
                        stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M2.49963 6.75092C2.63013 5.41542 2.92583 4.51722 3.59588 3.84717C4.26593 3.17712 5.16413 2.88142 6.49963 2.75092M6.49963 22.7509C5.16413 22.6204 4.26593 22.3247 3.59588 21.6546C2.92583 20.9846 2.63013 20.0864 2.49963 18.7509M22.4996 6.75092C22.3691 5.41542 22.0734 4.51722 21.4033 3.84717C20.7333 3.17712 19.8351 2.88142 18.4996 2.75092M2.49963 10.7509V14.7509M14.4996 2.75092H10.4996"
                        stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <input type="text" class=" border-0 focus:ring-0 text-[18px] focus:outline-none  text-inputColor " placeholder="إبحث عن">

            </div>
            <svg width="25" height="25" viewBox="0 0 25 25" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.24452 15.1449C3.03187 16.498 3.9826 17.4371 5.14665 17.9051C9.60941 19.6995 15.8198 19.6995 20.2825 17.9051C21.4466 17.4371 22.3973 16.498 22.1847 15.1449C22.054 14.3134 21.4078 13.621 20.929 12.9449C20.3019 12.0484 20.2396 11.0706 20.2395 10.0303C20.2395 6.01002 16.8705 2.75092 12.7146 2.75092C8.55873 2.75092 5.18973 6.01002 5.18973 10.0303C5.18963 11.0706 5.12732 12.0484 4.50021 12.9449C4.02144 13.621 3.37521 14.3134 3.24452 15.1449Z"
                    stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M9.7146 21.7509C10.5107 22.3728 11.5621 22.7509 12.7146 22.7509C13.8671 22.7509 14.9185 22.3728 15.7146 21.7509"
                    stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
{{--                    @if(count(auth()->user()->notifications)>0)--}}
                <circle cx="18.0188" cy="4.24576" r="2.95181" fill="#FF0909" />
{{--                @endif--}}
            </svg>

        </div>
        <div class="flex items-center gap-[13px]">

            <svg width="25" height="25" viewBox="0 0 25 25" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.7146 11.5554C17.7146 11.2097 17.7146 11.0369 17.7666 10.8829C17.9178 10.4354 18.3164 10.2617 18.7157 10.0798C19.1646 9.87534 19.389 9.77311 19.6114 9.75512C19.8639 9.7347 20.1168 9.7891 20.3326 9.91021C20.6187 10.0708 20.8182 10.3758 21.0225 10.6239C21.9659 11.7697 22.4375 12.3427 22.6101 12.9745C22.7494 13.4843 22.7494 14.0175 22.6101 14.5273C22.3584 15.4488 21.5631 16.2213 20.9744 16.9363C20.6733 17.302 20.5227 17.4849 20.3326 17.5916C20.1168 17.7127 19.8639 17.7671 19.6114 17.7467C19.389 17.7287 19.1646 17.6265 18.7157 17.422C18.3164 17.2401 17.9178 17.0665 17.7666 16.6189C17.7146 16.4649 17.7146 16.2921 17.7146 15.9464V11.5554Z"
                    stroke="black" stroke-width="1.5" />
                <path
                    d="M7.7146 11.5555C7.7146 11.1203 7.70238 10.7291 7.35051 10.4231C7.22253 10.3118 7.05285 10.2345 6.71351 10.08C6.26461 9.8755 6.04016 9.77327 5.81776 9.75528C5.15051 9.70132 4.79152 10.1567 4.40673 10.6241C3.46335 11.7699 2.99166 12.3428 2.81906 12.9746C2.67978 13.4845 2.67978 14.0177 2.81906 14.5275C3.0708 15.449 3.86612 16.2214 4.45481 16.9365C4.82589 17.3872 5.18037 17.7984 5.81776 17.7469C6.04016 17.7289 6.26461 17.6266 6.71351 17.4222C7.05285 17.2676 7.22253 17.1903 7.35051 17.079C7.70238 16.773 7.7146 16.3819 7.7146 15.9466V11.5555Z"
                    stroke="black" stroke-width="1.5" />
                <path
                    d="M5.7146 9.75092C5.7146 6.43721 8.84861 3.75092 12.7146 3.75092C16.5806 3.75092 19.7146 6.43721 19.7146 9.75092"
                    stroke="black" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                <path d="M19.7146 17.7509V18.5509C19.7146 20.3182 17.9237 21.7509 15.7146 21.7509H13.7146"
                    stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="relative inline-block">
                <button onclick="toggleDropdown()" class="flex bg-[#F2F2F2] items-center rounded-md px-[6px] py-[3px] gap-[10px]">
                    <div
                        class="w-[38.73px] h-[38.73px] rounded-full bg-[#F2F2F2] overflow-hidden flex justify-center items-center">
                        <img
                            @if(auth()->user()->image)
                                src="{{ asset('profile_images/' . auth()->user()->image) }}"
                            @else
                                src="{{ asset('assets/attachment/users/e19f613309299898e00a9c5567d99099.png') }}"
                            @endif
                            class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="flex flex-col justify-start items-start gap-0.5">
                        <p class="text-[14.71px] font-medium"> {{ auth()->user()->name }}</p>
                        <p class="text-[8.82px] font-medium"> {{ auth()->user()->email }}</p>
                    </div>
                    <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.7826 13.7509C16.7826 15.8438 15.0859 17.5405 12.993 17.5405C10.9 17.5405 9.20337 15.8438 9.20337 13.7509C9.20337 11.658 10.9 9.9613 12.993 9.9613C15.0859 9.9613 16.7826 11.658 16.7826 13.7509Z"
                            stroke="black" stroke-width="1.62411" />
                        <path
                            d="M22.7494 16.0209C23.3145 15.8686 23.5971 15.7924 23.7086 15.6466C23.8203 15.501 23.8203 15.2666 23.8203 14.7979V12.7042C23.8203 12.2354 23.8203 12.001 23.7086 11.8554C23.597 11.7097 23.3145 11.6334 22.7494 11.4811C20.6377 10.9116 19.316 8.70375 19.861 6.60578C20.0109 6.02881 20.0858 5.74034 20.0142 5.57114C19.9426 5.40193 19.7374 5.28534 19.3266 5.05214L17.4592 3.99189C17.0562 3.76306 16.8547 3.64865 16.6738 3.67301C16.4929 3.69737 16.2889 3.90094 15.8807 4.30805C14.3008 5.88425 11.6866 5.88419 10.1066 4.30795C9.69852 3.90083 9.49447 3.69727 9.3136 3.6729C9.13274 3.64854 8.93122 3.76295 8.52818 3.99178L6.66078 5.05205C6.25009 5.28523 6.04473 5.40182 5.97318 5.57098C5.90161 5.74016 5.97652 6.02868 6.12635 6.60571C6.6711 8.70374 5.34837 10.9116 3.23626 11.4811C2.67118 11.6334 2.38863 11.7097 2.27701 11.8553C2.16541 12.001 2.16541 12.2354 2.16541 12.7042V14.7979C2.16541 15.2666 2.16541 15.501 2.27701 15.6466C2.38861 15.7924 2.67117 15.8686 3.23626 16.0209C5.34802 16.5904 6.6697 18.7983 6.12469 20.8962C5.97481 21.4732 5.89986 21.7616 5.97142 21.9309C6.04299 22.1001 6.24834 22.2167 6.65906 22.4498L8.52647 23.5101C8.92953 23.7389 9.13106 23.8534 9.31194 23.829C9.49283 23.8047 9.69684 23.601 10.1048 23.1939C11.6856 21.6164 14.3017 21.6163 15.8826 23.1938C16.2905 23.601 16.4945 23.8045 16.6755 23.8289C16.8563 23.8533 17.0579 23.7388 17.4609 23.51L19.3283 22.4497C19.7391 22.2166 19.9445 22.1 20.0159 21.9308C20.0875 21.7615 20.0126 21.4731 19.8626 20.8961C19.3174 18.7983 20.638 16.5906 22.7494 16.0209Z"
                            stroke="black" stroke-width="1.62411" stroke-linecap="round" />
                    </svg>
                </button>

                <div id="dropdown" class="hidden absolute bg-white border border-gray-300 rounded-md shadow-lg mt-2">
                    {{-- <a href="{{route('profile.edit')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">الإعدادات</a>
                    <a href="{{route('password.edit')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">تعديل كلمة المرور</a> --}}
                </div>
            </div>







        </div>

    </div>

</nav>
<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    }
</script>
