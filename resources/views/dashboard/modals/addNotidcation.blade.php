<div id="add-new-nofication" tabindex="-1" aria-hidden="true"
    class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <div class="relative  bg-secondry   rounded-lg shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-white ">
                    ارسال اشعار

                </h3>
                <button type="button"
                    class="end-2.5  bg-gray-200 text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                    data-modal-hide="add-new-nofication">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5 bg-white rounded-b-lg">
   <div class="flex w-full flex-col gap-4">
                    <div class="input-group w-full flex flex-col gap-2">
                        <label class="text-[18px] text-secondry">عنوان الاشعار</label>
                        <div class="relative">
                            <input type="text" id="title" name="title" required
                                class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                placeholder="عنوان الاشعار">
                        </div>
                    </div>
                    <div class="input-group w-full flex flex-col gap-2">
                        <label class="text-[18px] text-secondry">محتوى الاشعار</label>
                        <div class="relative">
                            <textarea id="content" name="content" required
                                class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3" placeholder="محتوى الاشعار"></textarea>
                        </div>
                    </div>
                    <div class="input-group w-full flex flex-col gap-2">
                        <label class="text-[18px] text-secondry">اختر التصنيف</label>
                        <div class="relative">
                            <select required id="selectcategory"
                                class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3">
                                <option value="" disabled selected>اختر التصنيف</option>
                                <option value="system"> جميع العملاء</option>
                                <option value="user">  العملاء</option>
                                <option value="agency">  الوكالات</option>

                            </select>
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <button
                            class="text-nowrap py-4 flex justify-center items-center px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-secondry addNewnoficationSa">
                            <i
                                class="las la-plus w-[18px] h-[18px] text-secondry flex justify-center items-center text-[12px] font-bold bg-white rounded-md"></i>
                            ارسال اشعار
                        </button>
                        <button
                            class="text-nowrap py-4 flex justify-center items-center px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-red-500"
                            data-modal-hide="add-new-nofication">
                            اغلاق
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
