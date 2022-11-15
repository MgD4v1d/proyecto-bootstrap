(function ($) {
    "use strict";

   


    /* ---------------------------------------------- /*
   * Animated scrolling / Scroll Up
   /* ---------------------------------------------- */


   $('.nav-link').on('click', function(e) {
        const sectionTo = $(this).prop('hash');
        $('html, body').animate({ scrollTop: $(sectionTo).offset().top - 70}, 1000);
    });


    $("#scroll-up").on('click', function (e) {
        e.preventDefault();
        $("html, body").animate({scrollTop: 0}, 1000);
    });

    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('.scroll-up').fadeIn();
        } else {
            $('.scroll-up').fadeOut();
        }
    });


     // Closes responsive menu when a scroll trigger link is clicked
     $('.js-scroll-trigger').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });




    /*-----------------------------------------------------------------------------------*/
    /*    FORM CONTACT FOOTER
     /*-----------------------------------------------------------------------------------*/
    $(document).ready(function () {

        function mantenerDatos(n,p,em,m) {
            $('#nombref').val(n);
            $('#telefonof').val(p);
            $('#emailf').val(em);
            $('#messagef').html(m);
        }

        var form = $('#needs-validation-footer');
        var alertx = $('.successMsg'); // alertx div for show alert message

        form.on('submit', function (event) {


            var n=$('#nombref').val(); var p=$('#telefonof').val(); var em=$('#emailf').val(); var m=$('#messagef').val();

            if (form[0].checkValidity() == false){
                event.preventDefault();
                event.stopPropagation();
            }else{

                event.preventDefault();
                $('#overlay, #PleaseWait').show();

                $.ajax({
                    url: 'functions/procesa_footer.php', // form action url
                    type: 'POST', // form submit method get/post
                    dataType: 'html', // request type html/json/xml
                    data: form.serialize(), // serialize form datae
                    recaptcha:grecaptcha.getResponse(),
                    beforeSend: function () {
                        alertx.fadeOut();
                        //submit.html('Sending....'); // change submit button text
                    },
                    success: function (data){
                        form.fadeOut(300);
                        alertx.html(data).fadeIn(1000); // fade in response data
                        setTimeout(function() {
                            alertx.html(data).fadeOut(300);
                            grecaptcha.reset();
                            mantenerDatos(n,p,em,m);
                            form.fadeIn(1800);

                            console.log(data);
                            $('#overlay, #PleaseWait').hide();

                        }, 4000);

                        if(data == "Captcha incorrecto"){
                            $('#overlay, #PleaseWait').hide();
                            grecaptcha.reset();

                        }
                        $('.successMsg').html(data);

                    },
                    error: function (e) {
                        //console.log(e)
                    }

                });
            }
            form.addClass('was-validated');

        });

        $('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1060; display: none;"></div>');
        $('body').prepend('<div id="PleaseWait" class="wait"><img src="images/ajax-loader.gif" /></div>');

    });

    $('#btnCerrar').on('click',function(){
        window.location.href = "index_gracias_cotizador";
    });

})(jQuery);