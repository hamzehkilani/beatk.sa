import { Modal } from "flowbite";
import echo from "../../Pusher/EchoPusher";

$(document)
    .off("click", ".deleteModel")
    .on("click", ".deleteModel", (event) => {
        const $target = $(event.target).closest(".deleteModel");
        const id = $target.attr("data-id");
        const name = $target.attr("data-name");
        $("#featureName").text(name);

        const modalElement = document.getElementById("delete-modal");

        const modal = new Modal(modalElement);
        modal.show();

        // Ensure modal exists before adding an event listener
        $(document).on("click", ".hideDeleteModel", () => {
            modal.hide();
        });

        $(document)
            .off("click", ".deleteButton")
            .on("click", ".deleteButton", (e) => {
                const formData = {
                    _token: $('meta[name="csrf-token"]').attr("content"),
                };

                Swal.showLoading(); // Show loading spinner

                // Send AJAX request
                $.ajax({
                    url: `/features/${id}`,
                    method: "DELETE",
                    data: formData,
                    success: function (response) {
                        Swal.close();

                        if (response.success) {
                            Swal.fire({
                                icon: "success",
                                title: "تم الذف",
                                text: "تم حذف البيانات بنجاح.",
                            });
                            modal.hide();
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "خطأ",
                                text:
                                    response.message ||
                                    "حدث خطأ أثناء حفظ البيانات.",
                            });
                        }
                    },
                    error: function (xhr) {
                        Swal.close();
                        Swal.fire({
                            icon: "error",
                            title: "خطأ",
                            text:
                                xhr.responseJSON.message ||
                                "حدث خطأ في الخادم. يرجى المحاولة مرة أخرى لاحقًا.",
                        });
                    },
                });
            });
    });

$(function () {
    echo.channel("feature") // Use 'Echo' with correct casing
        .listen(".feature-delete", (e) => {
            $(`#feature-tr-${e.feature}`).remove();
        });
});
