jQuery(function($) {
    'use strict',

    //#main-slider
    $(function() {
        $('#main-slider.carousel').carousel({
            interval: 8000
        });
    });


    // accordian
    $('.accordion-toggle').on('click', function() {
        $(this).closest('.panel-group').children().each(function() {
            $(this).find('>.panel-heading').removeClass('active');
        });

        $(this).closest('.panel-heading').toggleClass('active');
    });

    //Initiat WOW JS
    new WOW().init();

    // portfolio filter
    $(window).load(function() {
        'use strict';
        var $portfolio_selectors = $('.portfolio-filter >li>a');
        var $portfolio = $('.portfolio-items');
        $portfolio.isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });

        $portfolio_selectors.on('click', function() {
            $portfolio_selectors.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $portfolio.isotope({
                filter: selector
            });
            return false;
        });
    });

    // Contact form
    var form = $('#main-contact-form');
    var storyStatus = $('#storyTile');

    form.submit(function(event) {
        var name = $('#form_name').val();
        var email = $('#form_email').val();
        var phone = $('#form_phone').val();
        var story_title = $('#form_story_title').val();
        var story = $('#message').val();
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: {
                name: name,
                email: email,
                phone: phone,
                story_title: story_title,
                story: story
            },
            beforeSend: function() {

                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Sharing your story...</p>').fadeIn());
            }
        }).done(function(data) {
            form.html(data).delay(5000).fadeOut();
            storyStatus.html('<a href="reviews.php"><button class="btn btn-primary btn-lg">Read Reviews</button></a>');


        }).fail(function(data) {
            form.html("<h2>We are having issues, please try again.").delay(5000).fadeOut();
            storyStatus.html('<a href="reviews.php"><button class="btn btn-primary btn-lg">Read Reviews</button></a>');


        })
    });


    //goto top
    $('.gototop').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });

    //Pretty Photo
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: false
    });
});