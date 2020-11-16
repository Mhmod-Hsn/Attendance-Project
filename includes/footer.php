<?php include "call-to-action.php"; ?>


<?php include "footer-links.php"; ?>
<?php include "copyrights.php"; ?>










<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    const isRTL = document.querySelector('html')?.attributes?.lang?.value === 'ar';

    $(document).ready(()=>{


        // loader
        document.querySelector('#loader').classList.add('hidden');



	    $('.hero-slider').slick({
	        rtl: isRTL,
            autoplay: true,
            infinite: true,
		    responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        arrows: false
                    }
                },
		    ]
	    });

        $('#team-slider,#offers-slider').slick({
            rtl: isRTL,
            autoplay: true,
            infinite: true,
            arrows: false,
            dots: true,
            slidesToShow: 4,
            swipeToSlide : true,
            responsive: [
                {
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 850,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ]
        });




    });

    // team members modal
    $('#teamMemberModal').on('show.bs.modal', function (event) {
        var e = $(event.relatedTarget) // Button that triggered the modal
        // Extract info from data-* attributes

	    let image= e.data('image')
	    let name= e.data('name')
	    let position= e.data('position')
	    let nationality= e.data('nationality')
	    let phone= e.data('phone')
	    let whatsapp= e.data('whatsapp')
        let email= e.data('email')

        var modal = $(this)


        $('#teamMemberModal .image')[0].src = image;
        $('#teamMemberModal .name')[0].innerText = name;
        $('#teamMemberModal .position')[0].innerText = position;
        $('#teamMemberModal .nationality')[0].innerText = nationality;
        $('#teamMemberModal .phone')[0].innerText = `${phone}`;
        $('#teamMemberModal .phone')[0].href = `tel:${phone}`;
        $('#teamMemberModal .whatsapp')[0].innerText = `${whatsapp}`;
        $('#teamMemberModal .whatsapp')[0].href = `https://api.whatsapp.com/send/?phone=:${whatsapp}`;

        $('#teamMemberModal .email')[0].innerText = email;
        $('#teamMemberModal .email')[0].href = `mailto=:${email}`;


    })



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

    ///////////////// fixed menu on scroll for desktop
    if ($(window).width() > 992) {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 250) {
                $('nav').addClass("fixed-top");
                // add padding top to show content behind navbar
                $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
            }else{
                $('nav').removeClass("fixed-top");
                // remove padding top from body
                $('body').css('padding-top', '0');
            }
        });
    } // end if

</script>

</body>
</html>
