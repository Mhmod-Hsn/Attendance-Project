
$(document).ready(()=>{

    // hide Loader
    document.querySelector('#loader').classList.add('hidden');





    // check if document is RTL or LTR
    const isRTL = document.querySelector('html')?.attributes?.lang?.value === 'ar';



    // Sweet Alert preparation
    window.swal = swal.mixin({
        confirmButtonColor: 'var(--secondary)',
        cancelButtonColor: 'var(--primary)',
    });
    window.toast = swal.mixin({

        toast: true,
        position: 'top',
        icon: 'success',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', swal.stopTimer);
            toast.addEventListener('mouseleave', swal.resumeTimer)
        }
    });






    $.fn.isInViewport = function () {
        let elementTop = $(this).offset().top;
        let elementBottom = elementTop + $(this).outerHeight();

        let viewportTop = $(window).scrollTop();
        let viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };



    $(window).on('scroll',function() {
        $('.counter-number').each(function() {
            if ($(this).isInViewport()) {

                let $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        }
                    });
            } else{
                this.innerText='00'
            }
        });
    });
});




/*

    // https://fancyapps.com/fancybox/3/docs/#options
    $('[data-fancybox="gallery"]').fancybox({
        animationEffect: "zoom",

        buttons: [
            "zoom",
            "share",
            "slideShow",
            "fullScreen",
            "download",
            "thumbs",
            "close"
        ],

        thumbs: {
            autoStart: true, // Display thumbnails on opening
        },

        lang: isRTL?'ar':'en',
        i18n: {
            en: {
                CLOSE: "Close",
                NEXT: "Next",
                PREV: "Previous",
                ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                PLAY_START: "Start slideshow",
                PLAY_STOP: "Pause slideshow",
                FULL_SCREEN: "Full screen",
                THUMBS: "Thumbnails",
                DOWNLOAD: "Download",
                SHARE: "Share",
                ZOOM: "Zoom"
            },
            ar: {
                CLOSE: "أغلق",
                NEXT: "التالى",
                PREV: "السابق",
                ERROR: "المحتوى المطلوب لا يمكن تحميله. <br/> يرجى المحاولة مرة أخرى في وقت لاحق.",
                PLAY_START: "ابدا عرض الشرائح",
                PLAY_STOP: "وقفة عرض الشرائح",
                FULL_SCREEN: "تكبير الشاشة",
                THUMBS: "المصغرات",
                DOWNLOAD: "تحميل",
                SHARE: "شارك",
                ZOOM: "تكبير",
            }
        }
    });
*/

///////////////// fixed menu on scroll
$(window).scroll(function(){
    if ($(this).scrollTop() > 250) {
        $('nav').addClass("fixed-top animate");

        $('#scroll-top').addClass('show')

    }else{
        $('nav').removeClass("fixed-top animate");

        $('#scroll-top').removeClass('show')
    }
});
