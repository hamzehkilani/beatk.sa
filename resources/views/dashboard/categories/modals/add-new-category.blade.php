<div id="add-new-category" tabindex="-1" aria-hidden="true"
class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-7xl max-h-full">
        <div class="relative bg-secondry rounded-lg shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-white">
                    إضافة {{ $name }}
                </h3>
                <button type="button" class="bg-gray-200 text-gray-900 rounded-lg text-sm w-8 h-8 flex justify-center items-center" data-modal-hide="add-new-category">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5 bg-white ">
                <div class="flex flex-col gap-4">
                    <!-- First Row: Name and Sort -->
                    <div class="flex flex-row gap-6">
                        <div class="input-group w-1/2 flex flex-col gap-2">
                            <label class="text-[18px] text-secondry">الإسم</label>
                            <div class="relative">
                                <input type="text" id="catname" name="name" required class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3" placeholder="الإسم" value="">
                            </div>
                        </div>
                        <div class="input-group w-1/2 flex flex-col gap-2">
                            <label class="text-[18px] text-secondry">الترتيب</label>
                            <div class="relative">
                                <input type="number" id="catsort" name="sort" required class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3" placeholder="الترتيب" value="">
                            </div>
                        </div>
                    </div>

                    <!-- Second Row: Image Input and Preview -->
                    <div class="flex flex-row gap-6">
                        <div class="input-group w-1/2 flex flex-col gap-2">
                            <label class="text-[18px] text-secondry">صورة</label>
                            <div class="relative">

                                <div class="w-full border-2 border-dotted imageDev  h-[250px] flex justify-center items-center relative">

                                    <input type="file" id="catimage" name="image" accept="image/*" class="w-full border border-gray-300  absolute top-0 focus:ring-0 text-[18px] h-full  opacity-0 rounded-md px-3" >
                                    <span class="bg-transparent selecId text-secondry">قم باختيار الصور من هنا</span>
                                     <img id="imagePreview" class="w-full h-full bg-cover object-fill image hidden" src="#" alt="Main Property Image">
                                     </div>
                               </div>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full flex justify-between  bg-white items-center px-4 py-4 ">
                    <button class="py-4 px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-secondry flex items-center addNewCategory">
                        <i class="las la-plus w-[18px] h-[18px] text-secondry flex justify-center items-center text-[12px] font-bold bg-white rounded-md"></i>
                        إضافة {{ $name }}
                    </button>
                    <button class="py-4 px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-red-500" data-modal-hide="add-new-category">
                        إغلاق
                    </button>
                </div>
            </div>
        </div>
    </div>


