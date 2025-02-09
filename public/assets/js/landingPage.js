$(document).ready(function () {
    const $menu = $('#mobile-menu');
    $('#menu-toggle').click(function () {
        if ($menu.hasClass('translate-x-full')) {
            $menu.removeClass('translate-x-full').addClass('translate-x-0');
        } else {
            $menu.removeClass('translate-x-0').addClass('translate-x-full');
        }
    });
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.mobile-nav, #menu-toggle').length && !$menu.hasClass('translate-x-full')) {
            $menu.removeClass('translate-x-0').addClass('translate-x-full');
        }
    });




      $('a[href^="#"]').on('click', function (event) {
        event.preventDefault();

        const targetId = $(this).attr('href');
        const targetElement = $(targetId);

        if (targetElement.length) {
            $('html, body').animate({
                scrollTop: targetElement.offset().top
            }, 800);
        }
    });

    const navLinks = $(".nav-link");
    const sections = $("section");

    const setActiveLink = () => {
      sections.each(function () {
        const section = $(this);
        const id = section.attr("id");

        const offsetTop = section.offset().top;
        const offsetBottom = offsetTop + section.outerHeight();
        const scrollPosition = $(window).scrollTop() + $(window).height() / 2;

        if (scrollPosition >= offsetTop && scrollPosition < offsetBottom) {
          navLinks.removeClass("text-primary font-bold");
          $(`.nav-link[href="#${id}"]`).addClass("text-primary font-bold");

        }
      });
    };
    $(window).on("scroll", setActiveLink);

    setActiveLink();


    let headerTextColor = $('.headerTextColor').text().split(' ');
    const words = headerTextColor.filter(item => item.trim() !== "");
    const styledText =
        `<span class="text-primary font-bold">${words[0]}</span>` +
        ' ' + words.slice(1).join(' ');

    $('.headerTextColor').html(styledText);

    $('.custom-paragraph').each(function () {
        let text = $(this).html();
        let parts = text.split(':');
        if (parts.length > 1) {
            $(this).html(`<span class=" font-bold">${parts[0]}</span>: ${parts.slice(1).join(':')}`);
        }
    });


    new Swiper(".swiper-blogs", {
        spaceBetween: 10,
        scrollbar: {
            el: ".swiper-scrollbar",
            draggable: true,
        },

        loop: true,
        slidesPerView:2,
        autoplay: {
            delay: 1400, // 2 seconds delay
            disableOnInteraction: false, // Keep autoplay running even after interaction
        },
        speed: 1000, // Slide change duration in milliseconds

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            900: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 15,
            },
            1400: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        },
    });




    new Swiper(".swiper-auction", {
        scrollbar: {
            el: ".swiper-scrollbar",
            draggable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
          },

        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        speed: 1200,
        slidesPerView: 1,
        spaceBetween: 10,



    });

    new Swiper(".swiper-products", {
        scrollbar: {
            el: ".swiper-scrollbar",
            draggable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
          },

        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        speed: 1200,
        slidesPerView: 1.12,
        spaceBetween: 10,

                breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 15,
            },
            900: {
                slidesPerView: 3.3,
                spaceBetween: 10,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 15,
            },
            1600: {
                slidesPerView: 4.7,
                spaceBetween: 20,
            },
            1800: {
                slidesPerView: 5.5,
                spaceBetween: 20,
            },
        },



    });



});
$(document).off('change', '#ChangeYear').on('change', '#ChangeYear', (event) => {
    const $target = $(event.target);

    if ($target.is(':checked')) {
        plansCheck($('#firstPlanPrice'));
        plansCheck($('#secondePlanPrice'));
        plansCheck($('#thierdPlanPrice'));
    } else {
        plansUnChecked($('#firstPlanPrice'));
        plansUnChecked($('#secondePlanPrice'));
        plansUnChecked($('#thierdPlanPrice'));
    }
});

function plansCheck(attrId) {
    let val = parseFloat(attrId.attr('data-price'));
    let usersAttr = attrId.closest('.plans').find('.rangePlans'); // Find input within the same container
    let userValue=usersAttr.val();
    let costPerValue=usersAttr.attr('data-cost-per-user');

    attrId.text(`\$${((val *10)+(((userValue-1)*costPerValue)*10)).toFixed(2)}`);
}

function plansUnChecked(attrId) {
    let val = parseFloat(attrId.attr('data-price'));
    let usersAttr = attrId.closest('.plans').find('.rangePlans'); // Find input within the same container
    let userValue=usersAttr.val();
    let costPerValue=usersAttr.attr('data-cost-per-user');
    attrId.text(`\$${((val)+((userValue-1)*costPerValue)).toFixed(2)}`);
}



$(document).off('change', '.rangePlans').on('change', '.rangePlans', (event) => {
    const $target = $(event.target);
    const $planContainer = $target.closest('.plans');
    const isYearly = $('#ChangeYear').is(':checked');
    if(isYearly){
        plansCheck($planContainer.find('#firstPlanPrice'));
        plansCheck($planContainer.find('#secondePlanPrice'));
        plansCheck($planContainer.find('#thierdPlanPrice'));


    }else{
        plansUnChecked($planContainer.find('#firstPlanPrice'));
        plansUnChecked($planContainer.find('#secondePlanPrice'), );
        plansUnChecked($planContainer.find('#thierdPlanPrice'));
    }

});


$(document).off('click','.goToGregister').on('click','.goToGregister',(event)=>{
    const $target = $(event.target);
    const planId = $(event.target).attr('data-plan-id');

    const $planContainer = $target.closest('.plans');
    const isYearly = $planContainer.find('#ChangeYear').is(':checked');
    let usersAttr = $planContainer.find('.rangePlans'); // Find input within the same container
    let userValue=usersAttr.val();
    let costPerValue=usersAttr.attr('data-cost-per-user');
    let sitesCount=1;
    let encodedPlanId = btoa(planId.toString());
    let encodedIsYearly = btoa(isYearly.toString());
    let encodedUserValue = btoa(userValue.toString());
    let encodedSitesCount = btoa(sitesCount.toString());
    let encodedCostPerValue = btoa(costPerValue.toString());
    // console.log(planId,isYearly);


    // Build the URL
    window.location.href = `/register/${encodedPlanId}/${encodedIsYearly}/${encodedUserValue}/${encodedSitesCount}/${encodedCostPerValue}`;
})




