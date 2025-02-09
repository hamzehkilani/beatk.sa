import { Dropdown } from "flowbite";
import { decodeEncryption } from "../../../../js/decondeEnciption/decondeEnciption";

import echo from "../../../../js/Pusher/EchoPusher";
import Swal from "sweetalert2";




$(document)
    .off("click", ".addNewCategory")
    .on("click", ".addNewCategory", (e) => {

        const name = $("#catname").val().trim();
        const sort = $("#catsort").val();
        const image = $("#catimage")[0].files[0];


        const formData = new FormData();
        formData.append("name", name);
        formData.append("sort", sort);
        formData.append("_token", $('meta[name="csrf-token"]').attr("content"));

        if (image) {
            formData.append("image", image);
        }

        // Check if required fields are filled
        if (!name || !sort || !image) {
            Swal.fire({
                icon: "error",
                title: "خطأ",
                text: "يرجى تعبئة جميع الحقول!",
            });
            return;
        }



        Swal.showLoading();
        $.ajax({
            url: '/categories',


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
                    resetForm();
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
                    // Validation errors
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
                    // General server errors
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

function resetForm() {

    $("#catname, #sort").val("");
    $('#imagePreview').addClass('hidden');
    $('.selecId').removeClass('hidden');
}


$(function () {
    echo.channel("category")
        .listen(".category-create", async (e) => {
            let categoryData = decodeEncryption(e.category);
            await appendCategory(categoryData, e.category);
            console.log(categoryData);

            const $targetEl = document.getElementById(`categorySettings-${categoryData.id}`);
            const $triggerEl = document.getElementById(`categoryToggel-${categoryData.id}`);

            console.log($triggerEl, $targetEl);

            const dropdown = new Dropdown($targetEl, $triggerEl);
            $targetEl.addEventListener("click", () => {
                dropdown.show();
            });
        });
});


function appendCategory(categoryData, enc) {

    const maxRows =  10;
    const $tableRows = $("#categorytable tr");
    const tableRow = `
    <tr class="bg-white border-b hover:bg-gray-50" id="category-tr-${categoryData.id}" data-column-id="${categoryData.id}">
                            <td class="px-6 py-3 text-center text-gray-700"> ${categoryData.name} </td>

                            <td class="px-6 py-3 text-center">
                                <img src="/${categoryData.image}"
                                     class="w-10 h-10 object-cover mx-auto rounded-full  catImageTd ${categoryData.image?"":" hidden"}"
                                     alt="category-image">
                            </td>

                            <td class="px-6 py-3 text-center text-gray-700 catSortTd"> ${categoryData.sort} </td>

                            <td class="px-6 py-3 text-center text-gray-700">  ${ new Date(categoryData.created_at).toISOString().split("T")[0]} </td>

                            <td class="px-6 py-3 text-center">
                                <button class="bg-secondry text-white px-4 py-2 rounded-md"
                                        data-dropdown-toggle="categorySettings-${categoryData.id}"
                                          id="categoryToggel-${categoryData.id}">
                                    <i class="las la-angle-down"></i>
                                </button>

                                <div id="categorySettings-${categoryData.id}"
                                     class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 mt-2">
                                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="categorySettingsButton">
                                        <li>
                                            <button class="block px-4 py-2 text-secondry hover:bg-gray-100 w-full text-start updateCaetgroy"

                                                    data-user="${enc}">
                                                تعديل
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block px-4 py-2 text-red-600 hover:text-red-400 w-full text-start deleteModel"
                                                    data-id="${categoryData.id}" data-name="${categoryData.name}">
                                                حذف
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
`;


    $("#categorytable").prepend(tableRow);




    if ($tableRows.length > maxRows) {
        $tableRows.last().remove(); // Removes the first row (i.e., the oldest or the last added row)
    }
}

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

    previewImage("catimage", "imagePreview");
});
