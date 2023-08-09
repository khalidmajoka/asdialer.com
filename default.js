$(document).ready(function () {
    $(window).scroll(function () {
        if (window.scrollY > 250){
         $('#navbar-desktop').fadeIn().addClass('is-sticky');
        }

        var startPos = 0.5;
        var $w = $(window);

        $('.scrollFade').each(function () {
            var startPos = 0.5;

            var $w = $(window);

            $('.scrollFade').each(function () {

                var pos = $(this).offset().top - $w.scrollTop();

                var vh = $w.height();

                var cal = pos / (vh * startPos) * 1;
                var opacityForSection = cal;

                if (window.scrollY == 0) {
                    opacityForSection = 1;
                    $('.scrollFade').fadeIn().addClass('animate');
                }

                if (pos < vh * startPos) {
                    $(this).css('opacity', opacityForSection);
                }
            });
        });
    });

    $('#defaultOpen').click ();
});


//hide
// animation - delay: 0.6s; visibility: hidden;

// animation - delay: 0.6s; visibility: visible;



// animate animate__fadeInUp animate__animated
//our team section start
let team = document.getElementById("team-inf");
let Hscreen = document.getElementsByClassName("hover-screen")[0];
document.addEventListener("click", element =>{
    if(element.target.className.includes("hover-screen")){
        team.style.transform = "translate(0, 0%) "
    }
    if(element.target.id === "close"){

        team.style.transform = "translate(0, 100%) "

    }
})

//pricing page start
$(function() {

    "use strict";

    $(".section-pricing .plans-buttons > span").on("click", function() {
        $(this).siblings().removeClass("active").end().addClass("active");
    });

    $(".section-pricing .header-section .plans-buttons .monthly").on("click", function() {
        $(".section-pricing .plans .startup .number").text("89");
        $(".section-pricing .plans .agency .number").text("299");
        $(".section-pricing .plans .single-plan .plan-name").text("Monthly");
    });

    $(".section-pricing .header-section .plans-buttons .yearly").on("click", function() {
        $(".section-pricing .plans .startup .number").text("599");
        $(".section-pricing .plans .agency .number").text("1999");
        $(".section-pricing .plans .single-plan .plan-name").text("Yearly");
    });

});


// tabmenu section



