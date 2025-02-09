import { Dropdown } from "flowbite";
import { decodeEncryption } from "../../decondeEnciption/decondeEnciption";
import { NotificationModel } from "../../Models/notficationsModel";
import echo from "../../Pusher/EchoPusher";


$(document).ready(function () {
    $('.addNewFeatuers').on('click', function (e) {

        let isValid = true;
        const title = $('#name').val().trim();
        const price = $('#price').val();

        if (title === "") {
            Swal.fire({
                icon: 'warning',
                title: 'خطأ',
                text: 'يرجى إدخال عنوان الميزة.',
                confirmButtonText: 'موافق'
            });
            isValid = false;
        }

        if (price === "") {
            Swal.fire({
                icon: 'warning',
                title: 'خطأ',
                text: 'يرجى إدخال سعر الميزة.',
                confirmButtonText: 'موافق'
            });
            isValid = false;
        }


        if (!isValid) return;
        $.ajax({
            url: '/features',
            type: 'POST',
            data: {
                name_ar: title,
                price: price,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                Swal.showLoading();
                $('.addNewFeatuers').prop('disabled', true).text('جارٍ الإرسال...');
            },
            success: function (response) {
                Swal.close(); //

                Swal.fire({
                    icon: 'success',
                    title: 'تم الإرسال',
                    text: 'تم اضافة المميزة بنجاح!',
                    confirmButtonText: 'موافق'
                }).then(() => {
                    $('#title').val('');
                    $('#content').val('');
                    $('select[name="category"]').prop('selectedIndex', 0);
                });
            },
            error: function (xhr, status, error) {
                Swal.close(); //

                Swal.fire({
                    icon: 'error',
                    title: 'فشل الإرسال',
                    text: 'حدث خطأ أثناء محاولة اضافة الميزة. يرجى المحاولة مرة أخرى.',
                    confirmButtonText: 'موافق'
                });
            },
            complete: function () {
                $('.addNewFeatuers').prop('disabled', false).text('ارسال اشعار');
            }
        });
    });



});



$(function () {
    echo.channel("feature")
        .listen(".feature-create", (e) => {
            let data = decodeEncryption(e.feature);

            apeendUserNotication(data,e.feature)


});

});


 async function apeendUserNotication(data,enc){

        const tableRow = await getData(data,enc);
$('#featuresShowMain').prepend(tableRow);

    const maxRows = 10
const $tableRows = $('#featuresShowMain tr');

if ($tableRows.length > maxRows) {
    $tableRows.last().remove(); // Removes the first row (i.e., the oldest or the last added row)
}


// Get the target and trigger elements
const $targetEl = document.getElementById(`featureSetting-${data.id}`);
const $triggerEl = document.getElementById(`featureToggel-${data.id}`);

// Initialize the dropdown instance
const dropdown = new Dropdown($targetEl, $triggerEl);

// Add click event listener to the trigger element
$targetEl.addEventListener('click', () => {
    dropdown.show();
});



}


function getData(feature,enc){
   return `     <tr class="bg-white border-b hover:bg-gray-50 flex flex-col sm:table-row"
                        id="feature-tr-${feature.id}">
                        <td
                            class="p-4 md:px-8 md:py-3 text-center flex justify-between md:justify-center items-center px-8">
                            <span class="block sm:hidden text-gray-900 font-semibold mb-1">الإسم</span>
                            <span class="text-[16px] text-gray-400 text-center ">${feature.name_ar}</span>


                        </td>
                        <td class="px-6 py-4 sm:px-6 sm:py-3 ">
                            <div class="flex justify-between  items-center md:block">

                                <span class="block sm:hidden text-gray-700 font-semibold mb-1">السعر </span>
                                <p class="text-[16px] text-gray-400 text-center" > ${feature.price}  SAR</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 sm:px-6 sm:py-3 font-semibold text-gray-900    ">
                            <div class="flex justify-between items-center md:justify-center ">
                                <button class=" bg-secondry text-white px-4 py-2 rounded-md"
                                id="featureToggel-${feature.id}"
                                    data-dropdown-toggle="featureSetting-${feature.id}">
                                    <i class="las la-angle-down"></i>
                                </button>

                                <div id="featureSetting-${feature.id}"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="featureSettingButton">
                                        <li>
                                            <button
                                                class="block px-4 py-2 text-secondry  hover:bg-gray-100 w-full text-start updatefeature featureData-${feature.id}"
                                                data-feature="${enc}">تعديل</button>
                                        </li>

                                        <li>
                                            <button
                                                class="block px-4 py-2 text-red-600  hover:text-red-400  w-full text-start deleteModel "
                                                data-id="${feature.id}" data-name="${feature.name_ar}" >حذف</button>
                                        </li>



                                    </ul>



                                </div>

                        </td>
                    </tr>
`;
}
