$(document)
    .off("click", "#register-btn")
    .on("click", "#register-btn",  function () {
        // Get form values
        let name = $("#name").val().trim();
        let agancyName = $("#agancy_name")

        let email = $("#email").val().trim();
        let password = $("#password").val().trim();
        let confirmPassword = $("#Cpassword").val().trim();
        let isYearly=$('#isYearly').val();
        let userValue=$('#userValue').val();
        let planId=$('#plan-id').val();
        let sitesCount=$('#sitesCount').val();
        let type=$('#type').val();
        let isValid;
        if(agancyName.length>0){

            agancyName=agancyName.val();
            isValid = checkValdition({
                name,
                email,
                password,
                confirmPassword,
                agancyName,
                type
            });
        }else{
            isValid = checkValdition({
                name,
                email,
                password,
                confirmPassword,
                type,
                agancyName
            });

        }

        let requestData = {
            plan_id: planId,
            isYearly: isYearly,
            number_of_sites: sitesCount,
            number_of_users: userValue,
            name: name,
            email: email,
            password: password,
        };
        if (agancyName.length>0) {
            requestData.agency_name = agancyName;
        }


        if (isValid) {
            $('.spinner-wrapper').removeClass('!hidden');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/register",
                method: "POST",
                data: requestData,
                success: function (response) {

                    Swal.fire({
                        icon: "success",
                        title: "تم التسجيل بنجاح",
                        text: "تم إنشاء الحساب بنجاح.",
                        confirmButtonText: "موافق",
                    });
                    // Redirect the user to the URL
                    $('.spinner-wrapper').addClass('!hidden');




                    window.location.href = response.redirect_url;

                },
                error: function (xhr) {
                    $('.spinner-wrapper').addClass('!hidden');

                    Swal.fire({
                        icon: "error",
                        title: "خطأ",
                        text:
                            xhr.responseJSON?.message ||
                            "حدث خطأ أثناء عملية التسجيل.",
                        confirmButtonText: "حاول مرة أخرى",
                    });

                },
            });
        }
    });

function checkValdition(data) {
    let { name, email, password, confirmPassword ,agancyName,type } = data;
    let isValid = true;


    // Validate name
    if (name === "") {
        $("#name")
            .next("p")
            .removeClass("hidden")
            .text("يجب عليك ادخال اسم المستخدم");
        isValid = false;
    } else {
        $("#name").next("p").addClass("hidden");
    }
    if(type=='agency'&&agancyName=== ""){

        $("#agancy_name")
        .next("p")
        .removeClass("hidden")
        .text("يجب عليك ادخال اسم الوكالة");
    isValid = false;
    }else{
        $("#agancy_name").next("p").addClass("hidden");

    }

    // Validate email
    if (email === "") {
        $("#email")
            .next("p")
            .removeClass("hidden")
            .text("يجب عليك ادخال البريد الالكتروني");
        isValid = false;
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        $("#email")
            .next("p")
            .removeClass("hidden")
            .text("البريد الإلكتروني غير صالح");
        isValid = false;
    } else {
        $("#email").next("p").addClass("hidden");
    }

    // Validate password
    // Validate password
    if (password === "") {
        $("#password")
            .next("p")
            .removeClass("hidden")
            .text("يجب عليك ادخال كلمة السر");
        isValid = false;
    } else if (password.length < 8) {
        $("#password")
            .next("p")
            .removeClass("hidden")
            .text("كلمة السر يجب أن تحتوي على 8 أحرف على الأقل");
        isValid = false;
    } else {
        $("#password").next("p").addClass("hidden");
    }

    // Validate confirm password
    if (confirmPassword === "" || confirmPassword !== password) {
        $("#Cpassword")
            .next("p")
            .removeClass("hidden")
            .text("كلمة السر وتأكيد كلمة السر يجب أن تتطابق");
        isValid = false;
    } else {
        $("#Cpassword").next("p").addClass("hidden");
    }

    return isValid;
}
