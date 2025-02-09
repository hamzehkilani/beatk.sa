$(document).off('change', '.changeInput').on('change', '.changeInput', (e) => {
    const $target = $(e.target);

    const relashion = $target.attr('data-relashion');
    const inputChange = $target.attr('data-inputChange');
    const id = $target.attr('data-section-id');
    const value=$target.val()
    let file =null;
    if (relashion === 'SectionImage') {
        file = $target[0].files[0];

        const $parent = $target.closest('.imageToUpdate'); // Find the nearest parent container
        if ($parent.length && file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $parent.find('.preview-image').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    }


    // Prepare FormData
    const formData = new FormData();
    formData.append('relashion', relashion);
    formData.append('inputChange', inputChange);
    formData.append('value', value);

    formData.append('id', id);
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    if (file) {
        formData.append('file', file);
    }

    $.ajax({
        url: `/edit-section`,
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function () {
            Swal.showLoading();
        },
        success: (response) => {
            Swal.close();
            if (response.success) {
                Swal.fire({
                    title: 'تم التحديث بنجاح!',
                    text: 'تم تحديث  بنجاح.',
                    icon: 'success',
                    confirmButtonText: 'حسنًا',
                    confirmButtonColor: '#3085d6',
                });
            } else {
                Swal.fire({
                    title: 'خطأ!',
                    text: 'فشل في تحديث المعلومات. يرجى المحاولة مرة أخرى.',
                    icon: 'error',
                    confirmButtonText: 'حسنًا',
                    confirmButtonColor: '#d33',
                });
            }
        },
        error: (error) => {
            Swal.close();
            Swal.fire({
                title: 'حدث خطأ!',
                text: 'حدث خطأ أثناء التحديث. يرجى المحاولة لاحقًا.',
                icon: 'error',
                confirmButtonText: 'حسنًا',
                confirmButtonColor: '#d33',
            });
        }
    });
});
