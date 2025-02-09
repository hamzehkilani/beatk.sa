<div id="edit-plan" tabindex="-1"  aria-hidden="true"  data-modal-target="edit-plan"
    class=" hidden   overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-7xl max-h-full">
        <div class="relative  bg-secondry   rounded-lg shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-white ">
                    تعديل الخطة
                </h3>
                <button type="button"
                    class="end-2.5  bg-gray-200 text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  hideModel"
                    data-modal-hide="edit-plan">
                    <svg class="w-3 h-3" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5 bg-white rounded-b-lg">

                <div class="flex w-full  flex-col gap-4  ">
                    <div class="input-group w-full flex flex-col gap-2">
                        <label class="text-[18px] text-secondry"> عنوان الخطة</label>
                        <div class="relative">
                            <input type="text" id="name_ar" name="name_ar" required
                                class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                placeholder="عنوان الخطة ">
                        </div>
                    </div>

                    <div class="input-group w-full flex flex-col gap-2">
                        <label class="text-[18px] text-secondry">الوصف	 </label>
                        <div class="relative">
                            <textarea  id="description_ar"  required
                                class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                placeholder=" الوصف	"></textarea>
                        </div>
                    </div>
                    <div class="input-group w-full flex flex-col gap-2">
                        <label class="text-[18px] text-secondry">السعر الإجمالي	</label>
                        <div class="relative">
                            <input type="number" id="total_price" name="total_price" required
                                class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                placeholder=" السعر الإجمالي">
                        </div>
                    </div>
                    <div class="input-group w-full flex flex-col gap-2">
                        <label class="text-[18px] text-secondry">تكلفة المستخدم	 	</label>
                        <div class="relative">
                            <input type="number" id="user_price" name="user_price" required
                                class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                placeholder=" تكلفة المستخدم">
                        </div>
                    </div>
                    <div class="input-group w-full flex flex-col gap-2">
                        <label class="text-[18px] text-secondry"> الحد الاقصى من المستخدمين</label>
                        <div class="relative">
                            <input type="number" id="max_users" name="max_users" required
                                class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                placeholder="الحد الاقصى من المستخدمين">
                        </div>
                    </div>

                    <div class="w-full flex rounded-md gap-5    py-1  px-1">
                        @foreach ($features as $feature)
                        <div class="flex items-center gap-2">
                            <input
                                type="checkbox"
                                id="feature_{{ $feature->id }}"
                                name="features[]"
                                data-id="{{ $feature->id }}"
                                value="{{ $feature->id }}"
                                class="hidden feature-checkbox"
                                {{$feature->id==1?"checked":''}}
                            />
                            <label for="feature_{{ $feature->id }}"
                                class="flex text-nowrap   text-primary bg-gray-50 font-bold rounded-md  py-4 px-4 justify-center items-center gap-2 cursor-pointer transition-transform duration-300 active:scale-95 feature-label">
                                <span class="text-[16.7px]">{{ $feature->name_ar }}</span>
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1627_1453)">
                                        <path
                                            d="M6.42925 7.45063L6.5672 7.3127C7.88632 5.99351 10.0251 5.99351 11.3443 7.3127C12.6635 8.63183 12.6635 10.7706 11.3443 12.0898L9.43346 14.0006C8.11432 15.3198 5.97552 15.3198 4.65636 14.0006C3.3372 12.6814 3.3372 10.5426 4.65636 9.2235L4.96592 8.91397"
                                            stroke="#16DBCC" stroke-width="1.5" stroke-linecap="round" />
                                        <path
                                            d="M11.7017 7.73264L12.0112 7.4231C13.3304 6.10394 13.3304 3.96516 12.0112 2.646C10.6921 1.32685 8.55332 1.32685 7.23418 2.646L5.32335 4.55684C4.0042 5.876 4.0042 8.01477 5.32335 9.3339C6.64251 10.6531 8.78132 10.6531 10.1005 9.3339L10.2384 9.19597"
                                            stroke="#16DBCC" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1627_1453">
                                            <rect width="16" height="16" fill="white"
                                                transform="translate(0.333984 0.323303)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </label>
                        </div>
                        @endforeach


                    </div>




                    <div class="w-full flex justify-between items-center ">
                        <button
                            class="  text-nowrap py-4 flex justify-center items-center px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-secondry submitUpdate">
                            <i
                                class="las la-plus w-[18px] h-[18px] text-secondry  flex justify-center items-center text-[12px] font-bold bg-white rounded-md"></i>
                            تعديل الخطة

                        </button>
                        <button
                            class="  text-nowrap py-4 flex justify-center items-center px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-red-500 hideModel"
                            data-modal-hide="edit-plan">

                            اغلاق

                        </button>

                    </div>





                </div>

            </div>
        </div>
    </div>
</div>

