import { Dropdown } from "flowbite";
import { decodeEncryption } from "../../decondeEnciption/decondeEnciption";
import { NotificationModel } from "../../Models/notficationsModel";
import echo from "../../Pusher/EchoPusher";


$(document).ready(function () {
    $('.addNewnoficationSa').on('click', function (e) {

        let isValid = true;
        const title = $('#title').val().trim();
        const content = $('#content').val().trim();
        const category = $('#selectcategory').val();

        if (title === "") {
            Swal.fire({
                icon: 'warning',
                title: 'خطأ',
                text: 'يرجى إدخال عنوان الإشعار.',
                confirmButtonText: 'موافق'
            });
            isValid = false;
        }

        if (content === "") {
            Swal.fire({
                icon: 'warning',
                title: 'خطأ',
                text: 'يرجى إدخال محتوى الإشعار.',
                confirmButtonText: 'موافق'
            });
            isValid = false;
        }

        if (!category) {
            Swal.fire({
                icon: 'warning',
                title: 'خطأ',
                text: 'يرجى اختيار التصنيف.',
                confirmButtonText: 'موافق'
            });
            isValid = false;
        }

        if (!isValid) return;
        $.ajax({
            url: '/notifications',
            type: 'POST',
            data: {
                title: title,
                message: content,
                type: category,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                Swal.showLoading();
                $('.addNewnoficationSa').prop('disabled', true).text('جارٍ الإرسال...');
            },
            success: function (response) {
                Swal.close(); //

                Swal.fire({
                    icon: 'success',
                    title: 'تم الإرسال',
                    text: 'تم إرسال الإشعار بنجاح!',
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
                    text: 'حدث خطأ أثناء محاولة إرسال الإشعار. يرجى المحاولة مرة أخرى.',
                    confirmButtonText: 'موافق'
                });
            },
            complete: function () {
                $('.addNewnoficationSa').prop('disabled', false).text('ارسال اشعار');
            }
        });
    });

    $('.makeAllAsRead').on('click', function (e) {



        $.ajax({
            url: 'notifications/mark-all-read',
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                Swal.showLoading();
                $('.makeAllAsRead').prop('disabled', true).text('جارٍ التعديل...');
            },
            success: function (response) {
                Swal.close(); //

                Swal.fire({
                    icon: 'success',
                    title: 'تم القراءه',
                    text: 'تم قراءة  جميع الاشعارات !',
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
                    text: 'حدث خطأ أثناء محاولة قراءة الإشعار. يرجى المحاولة مرة أخرى.',
                    confirmButtonText: 'موافق'
                });
            },
            complete: function () {
                $('.makeAllAsRead').prop('disabled', false).text('تحديد الكل كمقروء');
                $('.notficationReed').addClass('opacity-30');

            }
        });
    });

    $('.notification').on('click', function (e) {

        const $target=$(e.target);

        const id= $target.attr('data-id');


        $.ajax({
            url: 'notifications/mark-read',
            type: 'POST',
            data: {
                id:id,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                Swal.showLoading();
            },
            success: function (response) {
                Swal.close(); //

                Swal.fire({
                    icon: 'success',
                    title: 'تمت القراءه',
                    text: 'تم تعديل   الاشعار !',
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
                    text: 'حدث خطأ أثناء محاولة قراءة الإشعار. يرجى المحاولة مرة أخرى.',
                    confirmButtonText: 'موافق'
                });
            },
            complete: function () {
                $(`#notfication-${id}`).addClass('opacity-30');
                $target.attr('disabled',true)

            }
        });
    });

});



$(function () {
    echo.channel("notifcation")
        .listen(".notifcation-create", (e) => {
            let data = decodeEncryption(e.nofication);
            const notification = new NotificationModel(data);
            console.log(notification);
            if(notification.type=="system"){

                apeendUserNotication(notification)
              }
          if(notification.type=="user" ||userAuthData.role=="user"){

            apeendUserNotication(notification)
          }

          if(notification.type=="agency" ||userAuthData.role=="user"){

            apeendUserNotication(notification)
          }
        });
});


 async function apeendUserNotication(notification){

        const tableRow = await getData(notification);
$('#notficationTable').prepend(tableRow);

    const maxRows = 10
const $tableRows = $('#notficationTable tr');

if ($tableRows.length > maxRows) {
    $tableRows.last().remove(); // Removes the first row (i.e., the oldest or the last added row)
}


const $targetEl = document.getElementById(`notification-${notification.id}`);

// set the element that trigger the dropdown menu on click
const $triggerEl = document.getElementById(`notification-${notification.id}`);
const options = {
    placement: 'bottom',
    triggerType: 'click',
    offsetSkidding: 0,
    offsetDistance: 10,
    delay: 300,
    ignoreClickOutsideClass: false,
    onHide: () => {
    },
    onShow: () => {
    },
    onToggle: () => {
    },
};

// instance options object
const instanceOptions = {
  id: 'dropdownMenu',
  override: true
};
const dropdown = new Dropdown($targetEl, $triggerEl, options, instanceOptions);
// options with default values


dropdown.show();





}


function getData(notification){
   return ` <tr class="bg-white border-b hover:bg-gray-50 flex flex-col sm:table-row notficationReed"
                            id="column-table-${notification.id}">
                            <td
                                class="p-4 md:px-8 md:py-3 text-center flex justify-between md:justify-center items-center px-8">
                                <span class="block sm:hidden text-gray-900 font-semibold mb-1">المعرف</span>
                                <span class="text-[16px] text-gray-400 text-center ">${notification.id }</span>


                            </td>

                            <td class="px-6 py-4 sm:px-6 sm:py-3 ">
                                <div class="flex justify-between  items-center md:block">

                                    <span class="block sm:hidden text-gray-700 font-semibold mb-1">العنوان</span>
                                    <p class="text-[16px] text-gray-400 text-center"> ${notification.title }</p>
                                </div>
                            </td>
                            <td class="px-6 py-4 sm:px-6 sm:py-3 ">
                                <div class="flex justify-between  items-center md:block">

                                    <span class="block sm:hidden text-gray-700 font-semibold mb-1">الرسالة</span>
                                    <p class="text-[16px] text-gray-400 text-center"> ${ notification.message }</p>
                                </div>
                            </td>
                            <td class="px-6 py-4 sm:px-6 sm:py-3  text-center text-gray-900    ">
                                <div class="flex justify-between items-center md:block">
                                    <span class="block sm:hidden text-gray-700 font-semibold mb-1"> تاريخ الإشعار </span>
                                    <span class="text-[16px] text-gray-400 text-center">
                                    ${new Date( notification.created_at ).toISOString().split('T')[0]}
                                       </span>


                                </div>

                            </td>
                            <td class="px-6 py-4 sm:px-6 sm:py-3 ">
                                <div class="flex justify-between  items-center md:block">

                                    <span class="block sm:hidden text-gray-700 font-semibold mb-1">نوع الإشعار</span>
                                    <p class="text-[16px] text-gray-400 text-center">
                                      ${ notification.type }

                                    </p>
                                </div>
                            </td>
                          <td class="px-6 py-4 sm:px-6 sm:py-3 font-semibold text-gray-900    ">
                                <div class="flex justify-between items-center md:justify-center ">
                                    <button class=" bg-secondry text-white px-4 py-2 rounded-md"
                                        data-dropdown-toggle="notification-${notification.id}">
                                        <i class="las la-angle-down"></i>
                                    </button>

                                    <div id="notification-${notification.id}"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="notificationButton">
                                            <li>
                                                <button
                                                    class="block px-4 py-2 text-secondry  hover:bg-gray-100 w-full text-start  notification" data-id="${notification.id}"
                                                   >مقروء</button>
                                            </li>



                                        </ul>



                                    </div>

                            </td>
                        </tr>
`;
}
