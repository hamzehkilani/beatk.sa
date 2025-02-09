import { Dropdown, Modal } from "flowbite";
import { decodeEncryption } from "../../../../js/decondeEnciption/decondeEnciption";
import echo from "../../../../js/Pusher/EchoPusher";




let id=null;

$(document)
    .off("click", ".updateCaetgroy")
    .on("click", ".updateCaetgroy", (e) => {
        const $target=$(e.target)
        const data=decodeEncryption($target.attr('data-user'));


        id=data.id
        const modalElement = document.getElementById("edit-new-category");

        const modal = new Modal(modalElement);
        modal.show();
        $("#editcatname").val(data.name)
        $("#editcatsort").val(data.sort);

        // Ensure modal exists before adding an event listener
        $(document).on("click", ".hideDeleteModel", () => {
            modal.hide();
        });


        if(data.image){
            $('#editimagePreview').removeClass('hidden').attr('src',`${data.image}`);
            $('.selecId').addClass('hidden');
        }else{
            $('#editimagePreview').addClass('hidden');
            $('.selecId').removeClass('hidden');
        }




    });

    $(document)
    .off("click", ".editCategory")
    .on("click", ".editCategory", (e) => {


        const name = $("#editcatname").val().trim();
        const sort = $("#editcatsort").val();
        const image = $("#editcatimage")[0].files[0];


        const formData = new FormData();
        formData.append("name", name);
        formData.append("sort", sort);
        formData.append("_token", $('meta[name="csrf-token"]').attr("content"));


        if (image) {
            formData.append("image", image);
        }


        if (!name || !sort ) {
            Swal.fire({
                icon: "error",
                title: "خطأ",
                text: "يرجى تعبئة جميع الحقول!",
            });
            return;
        }



        Swal.showLoading();
        $.ajax({
            url: `/categories/${id}`,
            method: "POST",
            dataType: "json",
            contentType: false,
            processData: false,
            data: formData,
            success: function (response) {
                Swal.close();

                if (response.success) {
                    Swal.fire({
                        icon: "success",
                        title: "تم الحفظ",
                        text: "تم حفظ البيانات بنجاح.",
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "خطأ",
                        text: response.message || "حدث خطأ أثناء حفظ البيانات.",
                    });
                }
            },
            error: function (xhr) {
                Swal.close();

                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    let errorMessage = "يرجى تصحيح الأخطاء التالية:\n";
                    for (const [field, messages] of Object.entries(errors)) {
                        errorMessage += `- ${messages.join(", ")}\n`;
                    }

                    Swal.fire({
                        icon: "error",
                        title: "خطأ في التحقق",
                        text: errorMessage,
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "خطأ",
                        text:
                            xhr.responseJSON.message ||
                            "حدث خطأ في الخادم. يرجى المحاولة مرة أخرى لاحقًا.",
                    });
                }
            },
        });
    });



    $(function () {
        echo.channel("category")
            .listen(".category-edit", async (e) => {
                let categoryData = decodeEncryption(e.category);
                const tr=$(`#category-tr-${categoryData.id}`)

                tr.find('.catNameTd').text(categoryData.name);
                tr.find('.catImageTd').attr('src',categoryData.image);
                tr.find('.catSortTd').text(categoryData.sort);
                tr.find('.updateCaetgroy').attr('data-user',e.category);

            });
    });


$(document).ready(function () {
    function previewImage(inputId, imageId) {
        $(`#${inputId}`).on("change", function (e) {
            const $parent = $(e.target).closest(".imageDev");
            $parent.find(".selecId").addClass("hidden");
            let file = e.target.files[0];
            if (file && file.type.startsWith("image/")) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    $(`#${imageId}`)
                        .attr("src", event.target.result)
                        .removeClass("hidden");
                };
                reader.readAsDataURL(file);
            }
        });
    }

    previewImage("editcatimage", "editimagePreview");
});
