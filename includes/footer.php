

<a href="#" id="scroll-top" class="btn btn-primary text-center shadow">
	<i class="fas fa-arrow-up"></i>
</a>


<script src="https://code.jquery.com/jquery-3.1.0.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<!-- Sweet alert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!--<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>-->


<!--<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->

<script>

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
</script>

</body>
</html>
