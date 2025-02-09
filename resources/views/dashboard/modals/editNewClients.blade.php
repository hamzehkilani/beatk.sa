<div id="edit-new-client" tabindex="-1"  aria-hidden="true"  data-modal-target="edit-new-client"
    class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-7xl max-h-full">
        <div class="relative  bg-secondry   rounded-lg shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-white ">
                    تعديل {{$name}}

                </h3>
                <button type="button"
                    class="end-2.5  bg-gray-200 text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  hideModel"
                    data-modal-hide="edit-new-client">
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
                    <div class="flex w-full flex-row gap-6">


                        <div class="input-group {{$name!='وكالة'? 'w-full':'w-1/2'}}  flex flex-col gap-2">

                            <label class="text-[18px]  text-secondry">البريد الإلكتروني</label>
                            <div class="relative">
                                <input type="editEmail" id="editEmail" name="editEmail" required
                                    class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                    placeholder=" البريد الإلكتروني" value="">

                            </div>
                        </div>

                        @if($name=='وكالة')
                        <div class="input-group w-1/2  flex flex-col gap-2">
                            <label class="text-[18px] text-secondry ">إسم العلامة التجارية</label>
                            <div class="relative">
                                <input type="text" id="editName" name="editName" required
                                    class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                    placeholder=" إسم العلامة التجارية " value="">

                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="flex w-full flex-row gap-6">


                        <div class="input-group w-1/2 flex flex-col gap-2">

                            <label class="text-[18px]  text-secondry">رقم الهاتف </label>

                            <div class="w-full h-full">
                                <div
                                    class="flex items-center border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3">
                                    <button class="flex-shrink-0 z-10 inline-flex items-center " type="button">

                                        +966 <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>

                                    <div class="relative w-full">
                                        <input type="phone" id="edit-phone-input"
                                            class="w-full  border-0 bg-transparent  focus:border-0 outline-none  focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                            pattern="[0][5][0-9]{8}" placeholder="0500000000" required />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="input-group w-1/2  flex flex-col gap-2">

                            <label class="text-[18px] text-secondry ">الإسم الكامل</label>
                            <div class="relative">
                                <input type="text" id="editFullname" name="editFullname" required
                                    class="w-full border border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                    placeholder=" الإسم الكامل" value="">

                            </div>
                        </div>
                    </div>

                     <div class="w-full flex rounded-md justify-between    bg-gray-200 py-1 gap-2 px-1">
                        <button
                            class="flex  text-nowrap bg-white  text-primary font-bold rounded-md py-4   updateSocialMeadiaLinks   px-4 justify-center items-center gap-2"
                            data-id="facbock">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.95639 3.99215H20.4714C21.0214 3.99215 21.5488 4.21061 21.9377 4.59949C22.3265 4.98836 22.545 5.51578 22.545 6.06573V20.5808C22.545 21.1307 22.3265 21.6581 21.9377 22.047C21.5488 22.4359 21.0214 22.6543 20.4714 22.6543H5.95639C5.40644 22.6543 4.87902 22.4359 4.49015 22.047C4.10128 21.6581 3.88281 21.1307 3.88281 20.5808V6.06573C3.88281 5.51578 4.10128 4.98836 4.49015 4.59949C4.87902 4.21061 5.40644 3.99215 5.95639 3.99215ZM19.4346 6.06573H16.8427C15.8803 6.06573 14.9573 6.44804 14.2768 7.12857C13.5962 7.80909 13.2139 8.73208 13.2139 9.69449V12.2865H11.1403V15.3968H13.2139V22.6543H16.3243V15.3968H19.4346V12.2865H16.3243V10.2129C16.3243 9.93791 16.4335 9.6742 16.6279 9.47976C16.8224 9.28533 17.0861 9.17609 17.3611 9.17609H19.4346V6.06573Z"
                                    fill="#2461A9" />
                            </svg>
                            <span class="text-[16.7px]">فيسبوك</span>
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


                        </button>
                        <button
                            class="flex  text-nowrap bg-transparent rounded-md py-4 updateSocialMeadiaLinks   px-4 justify-center items-center gap-2"
                            data-id="snap">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.86074 9.03406C7.86074 6.25561 10.1131 4.00322 12.8916 4.00322C15.67 4.00322 17.9224 6.25561 17.9224 9.03406C17.9224 13.4373 18.1419 15.6385 22.166 17.3995C20.105 17.9148 19.5897 18.4301 19.0746 20.4911C15.4678 20.4911 14.9525 22.552 12.8916 22.552C10.8306 22.552 10.3154 20.4911 6.70865 20.4911C6.19341 18.4301 5.67816 17.9148 3.61719 17.3995C7.64125 15.6385 7.86074 13.4373 7.86074 9.03406Z"
                                    stroke="black" stroke-width="1.39116" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M3.61719 16.9875C7.16331 15.0557 7.16331 13.2316 4.50372 10.4954"
                                    stroke="black" stroke-width="1.39116" stroke-linecap="round" />
                                <path d="M22.1661 16.9875C18.62 15.0557 18.62 13.2316 21.2796 10.4954" stroke="black"
                                    stroke-width="1.39116" stroke-linecap="round" />
                            </svg>

                            <span class="text-[16.7px] ">سناب شات</span>
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


                        </button>
                        <button
                            class="flex  text-nowrap bg-transparent rounded-md py-4  updateSocialMeadiaLinks px-4 justify-center items-center gap-2"
                            data-id="insta">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.81904 0.955238H15.5281C18.8458 0.955238 21.5414 3.65089 21.5414 6.96861V15.6776C21.5414 17.2725 20.9079 18.802 19.7802 19.9297C18.6524 21.0575 17.1229 21.691 15.5281 21.691H6.81904C3.50132 21.691 0.805664 18.9954 0.805664 15.6776V6.96861C0.805664 5.37377 1.43921 3.84424 2.56694 2.71652C3.69467 1.58879 5.22419 0.955238 6.81904 0.955238ZM6.61168 3.02882C5.62178 3.02882 4.67242 3.42205 3.97245 4.12202C3.27248 4.82199 2.87924 5.77135 2.87924 6.76126V15.885C2.87924 17.9482 4.54847 19.6174 6.61168 19.6174H15.7354C16.7253 19.6174 17.6747 19.2242 18.3747 18.5242C19.0746 17.8243 19.4679 16.8749 19.4679 15.885V6.76126C19.4679 4.69805 17.7986 3.02882 15.7354 3.02882H6.61168ZM16.6167 4.584C16.9604 4.584 17.2901 4.72054 17.5331 4.96359C17.7761 5.20663 17.9127 5.53627 17.9127 5.87999C17.9127 6.2237 17.7761 6.55334 17.5331 6.79639C17.2901 7.03943 16.9604 7.17597 16.6167 7.17597C16.273 7.17597 15.9433 7.03943 15.7003 6.79639C15.4572 6.55334 15.3207 6.2237 15.3207 5.87999C15.3207 5.53627 15.4572 5.20663 15.7003 4.96359C15.9433 4.72054 16.273 4.584 16.6167 4.584ZM11.1736 6.13918C12.5484 6.13918 13.867 6.68535 14.8392 7.65753C15.8113 8.6297 16.3575 9.94826 16.3575 11.3231C16.3575 12.698 15.8113 14.0166 14.8392 14.9887C13.867 15.9609 12.5484 16.5071 11.1736 16.5071C9.79869 16.5071 8.48013 15.9609 7.50795 14.9887C6.53577 14.0166 5.98961 12.698 5.98961 11.3231C5.98961 9.94826 6.53577 8.6297 7.50795 7.65753C8.48013 6.68535 9.79869 6.13918 11.1736 6.13918ZM11.1736 8.21276C10.3486 8.21276 9.5575 8.54046 8.97419 9.12377C8.39088 9.70707 8.06319 10.4982 8.06319 11.3231C8.06319 12.148 8.39088 12.9392 8.97419 13.5225C9.5575 14.1058 10.3486 14.4335 11.1736 14.4335C11.9985 14.4335 12.7896 14.1058 13.3729 13.5225C13.9562 12.9392 14.2839 12.148 14.2839 11.3231C14.2839 10.4982 13.9562 9.70707 13.3729 9.12377C12.7896 8.54046 11.9985 8.21276 11.1736 8.21276Z"
                                    fill="black" />
                            </svg>

                            <span class="text-[16.7px]">إنستغرام</span>
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


                        </button>
                        <button
                            class="flex  text-nowrap bg-transparent rounded-md py-4 updateSocialMeadiaLinks   px-4 justify-center items-center gap-2"
                            data-id="tiktok">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.33887 13.2778C3.33887 8.65167 3.33887 6.33862 4.77601 4.90147C6.21316 3.46433 8.5262 3.46433 13.1523 3.46433C17.7783 3.46433 20.0914 3.46433 21.5286 4.90147C22.9657 6.33862 22.9657 8.65167 22.9657 13.2778C22.9657 17.9038 22.9657 20.2169 21.5286 21.6541C20.0914 23.0912 17.7783 23.0912 13.1523 23.0912C8.5262 23.0912 6.21316 23.0912 4.77601 21.6541C3.33887 20.2169 3.33887 17.9038 3.33887 13.2778Z"
                                    stroke="black" stroke-width="1.54949" stroke-linejoin="round" />
                                <path
                                    d="M11.6393 12.2526C10.7922 12.1328 8.86135 12.331 7.91456 14.0817C6.96776 15.8323 7.92199 17.6544 8.51745 18.3466C9.10547 18.9942 10.9744 20.2205 12.9569 19.0232C13.4483 18.7264 14.0604 18.5051 14.7549 16.186L14.6741 7.06069C14.5402 8.06552 15.6501 10.4224 18.8104 10.7012"
                                    stroke="black" stroke-width="1.54949" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <span class="text-[16.7px] ">تيك توك</span>
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


                        </button>
                        <button
                            class="flex  text-nowrap bg-transparent rounded-md py-4 updateSocialMeadiaLinks  px-4 justify-center items-center gap-2"
                            data-id="x">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.6696 20.0833C19.6143 20.1842 19.5328 20.2683 19.4339 20.3269C19.335 20.3856 19.222 20.4167 19.107 20.4169H15.2492C15.141 20.4169 15.0345 20.3895 14.9398 20.3373C14.8449 20.2853 14.7648 20.21 14.7068 20.1187L11.4525 15.0048L6.72356 20.2063C6.60828 20.3301 6.44883 20.4035 6.27979 20.4106C6.11075 20.4177 5.94573 20.3578 5.82052 20.244C5.69532 20.1303 5.62 19.9717 5.61092 19.8027C5.60182 19.6338 5.65969 19.4681 5.77198 19.3415L10.7364 13.8763L5.70526 5.97433C5.6433 5.87712 5.60861 5.76504 5.60484 5.64981C5.60105 5.53459 5.62833 5.42047 5.68378 5.31941C5.73925 5.21835 5.82086 5.13405 5.92009 5.07536C6.01931 5.01666 6.13248 4.98573 6.24777 4.98578H10.1055C10.2137 4.98581 10.3202 5.01315 10.415 5.06528C10.5099 5.11741 10.59 5.19262 10.648 5.28395L13.9022 10.3979L18.6312 5.19635C18.7465 5.07251 18.906 4.99911 19.075 4.99204C19.244 4.98499 19.409 5.04483 19.5342 5.15862C19.6594 5.27241 19.7347 5.43097 19.7439 5.59991C19.7529 5.76885 19.6951 5.93456 19.5828 6.06113L14.6183 11.5223L19.6495 19.4291C19.7112 19.5264 19.7455 19.6384 19.749 19.7534C19.7525 19.8685 19.7252 19.9824 19.6696 20.0833Z"
                                    fill="black" />
                            </svg>

                            <span class="text-[16.7px] "> تويتر</span>
                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.79846 4.77857C4.40758 1.93128 5.21213 0.507624 6.31619 0.141157C6.92352 -0.0604496 7.57779 -0.0604496 8.18512 0.141157C9.28919 0.507624 10.0937 1.93128 11.7029 4.77857C13.312 7.62584 14.1165 9.0495 13.8752 10.2095C13.7424 10.8477 13.4153 11.4265 12.9407 11.8631C12.078 12.6566 10.4689 12.6566 7.25065 12.6566C4.03242 12.6566 2.4233 12.6566 1.56063 11.8631C1.08604 11.4265 0.758913 10.8477 0.626133 10.2095C0.38478 9.0495 1.18934 7.62584 2.79846 4.77857Z"
                                    fill="#FF0000" />
                            </svg>


                        </button>
                        <button
                            class="flex  text-nowrap bg-transparent rounded-md py-4 updateSocialMeadiaLinks  px-4 justify-center items-center gap-2"
                            data-id="linked">
                            <svg width="24" height="23" viewBox="0 0 24 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.56445 9.44263V16.0249" stroke="black" stroke-width="1.4105"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M11.3262 12.2636V16.0249M11.3262 12.2636C11.3262 10.7056 12.5891 9.44263 14.1472 9.44263C15.7052 9.44263 16.9682 10.7056 16.9682 12.2636V16.0249M11.3262 12.2636V9.44263"
                                    stroke="black" stroke-width="1.4105" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7.57185 6.62164H7.56348" stroke="black" stroke-width="1.88066"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M3.33496 11.3233C3.33496 7.11217 3.33496 5.00661 4.64319 3.69838C5.95142 2.39015 8.05698 2.39015 12.2681 2.39015C16.4792 2.39015 18.5848 2.39015 19.8931 3.69838C21.2012 5.00661 21.2012 7.11217 21.2012 11.3233C21.2012 15.5344 21.2012 17.64 19.8931 18.9482C18.5848 20.2564 16.4792 20.2564 12.2681 20.2564C8.05698 20.2564 5.95142 20.2564 4.64319 18.9482C3.33496 17.64 3.33496 15.5344 3.33496 11.3233Z"
                                    stroke="black" stroke-width="1.4105" stroke-linejoin="round" />
                            </svg>

                            <span class="text-[16.7px] ">لينكد إن</span>
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
                                            trans16pxm="translate(0.333984 0.323303)" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </button>

                        <button
                            class="flex  text-nowrap bg-transparent rounded-md py-4 updateSocialMeadiaLinks  px-4 justify-center items-center gap-2"
                            data-id="pixler">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.8457 8.3233L19.6855 10.1734C20.459 10.9512 20.8457 11.3401 20.8457 11.8233C20.8457 12.3065 20.459 12.6954 19.6855 13.4732L17.8457 15.3233"
                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M7.8457 8.3233L6.00589 10.1734C5.23243 10.9512 4.8457 11.3401 4.8457 11.8233C4.8457 12.3065 5.23243 12.6954 6.00589 13.4732L7.8457 15.3233"
                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M15.3457 4.3233L10.3457 20.3233" stroke="black" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>


                            <span class="text-[16.7px] ">البيكسل</span>
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
                                            trans16pxm="translate(0.333984 0.323303)" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </button>
                    </div>

                    <div class="flex w-full flex-row gap-6  InputsUpdateLinks">



                        <div class="input-group w-1/2   flex flex-col gap-2">

                            <label class="text-[18px] ">إسم المستخدم على فيسبوك</label>
                            <div class="relative">
                                <input type="text" id="edit-lable_name" data-lable="facbock" name="InputLabal"
                                    required
                                    class="w-full border InputLabal border-gray-300 focus:ring-0 text-[18px] h-12 rounded-md px-3"
                                    placeholder=" إسم المستخدم على فيسبوك" value="">

                            </div>
                        </div>

                        <div class="input-group w-1/2   flex flex-col gap-2">

                            <label class="text-[18px] text-secondry ">كلمة المرور على فيسبوك</label>
                            <div class="relative">
                                <input type="text" id="edit-facbock" data-user-name="facbock"  name="userName" required
                                    class="w-full border border-gray-300 focus:ring-0 text-[18px] changeUserNameOnSocial h-12 rounded-md px-3"
                                    placeholder="كلمة المرور على فيسبوك" value="">

                            </div>
                        </div>


                    </div>


                    <div class="w-full flex justify-between items-center ">
                        <button
                            class="  text-nowrap py-4 flex justify-center items-center px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-secondry updateClient">
                            <i
                                class="las la-plus w-[18px] h-[18px] text-secondry  flex justify-center items-center text-[12px] font-bold bg-white rounded-md"></i>
                            تعديل {{$name}}

                        </button>
                        <button
                            class="  text-nowrap py-4 flex justify-center items-center px-4 xl:px-10 rounded-md font-bold text-white gap-3 text-[18px] bg-red-500 hideModel"
                            data-modal-hide="edit-new-client">

                            اغلاق

                        </button>

                    </div>





                </div>

            </div>
        </div>
    </div>
</div>
<script>

    let updateRoute=null;
    let updateRouteType= "{!! $name !!}";



</script>
