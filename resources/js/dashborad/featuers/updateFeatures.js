import { decodeEncryption } from "../../decondeEnciption/decondeEnciption";
import { Modal } from "flowbite";
import echo from "../../Pusher/EchoPusher";

$(document)
    .off("click", ".updatefeature")
    .on("click", ".updatefeature", (event) => {
        const $target = $(event.target).closest(".updatefeature");
        const val = $target.attr("data-feature");
        const features = decodeEncryption(val);

        $('#editPrice').val(features.price);
        $('#editname').val(features.name_ar);
        const modalElement = document.getElementById("edit-feature");
        const modal = new Modal(modalElement);
        modal.show();
        $(document).on("click", ".hideModel", () => {
            modal.hide();
        });




        // Add update button handler
        $(document).off("click", ".submitUpdate").on("click", ".submitUpdate", () => {
            $.ajax({
                url: `/features/${features.id}`, // Replace with your API endpoint
                method: 'POST',
                data: {
                    name_ar:  $('#editname').val(),
                    price:  $('#editPrice').val(),
                    _token: $('meta[name="csrf-token"]').attr('content') // For CSRF protection in Laravel
                },
                beforeSend: function () {
                    Swal.showLoading();
                    $('.submitUpdate').prop('disabled', true).text('جارٍ التعديل...');
                },
                success: (response) => {
                    Swal.close(); //

                    if (response.success) {
                        Swal.fire({
                            title: 'تم التحديث بنجاح!',
                            text: 'تم تحديث ميزة الخطة بنجاح.',
                            icon: 'success',
                            confirmButtonText: 'حسنًا',
                            confirmButtonColor: '#3085d6',
                        }).then(() => {
                            modal.hide();
                        });
                    } else {
                        Swal.fire({
                            title: 'خطأ!',
                            text: 'فشل في تحديث  ميزة الخطة. يرجى المحاولة مرة أخرى.',
                            icon: 'error',
                            confirmButtonText: 'حسنًا',
                            confirmButtonColor: '#d33',
                        });
                    }
                },
                error: (error) => {
                    Swal.close(); //

                    Swal.fire({
                        title: 'حدث خطأ!',
                        text: 'حدث خطأ أثناء التحديث. يرجى المحاولة لاحقًا.',
                        icon: 'error',
                        confirmButtonText: 'حسنًا',
                        confirmButtonColor: '#d33',
                    });
                },
                complete: function () {
                    $('.submitUpdate').prop('disabled', false).text(' تعديلات مميزات الخطة');
                }
            });
        });
    });


    $(function () {
        echo.channel("feature") // Use 'Echo' with correct casing
            .listen(".feature-update", (e) => {


                let data = decodeEncryption(e.feature);

                const $target = $(`#feature-tr-${data.id}`);

                // Update text content for fields
                $target.find('.feature-name').text(data.name_ar);
                $target.find('.feature-price').text(data.description_ar);
                $target.find('.updatefeature').attr('data-feature',e.feature);








            });
    });
