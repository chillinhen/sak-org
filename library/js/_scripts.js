(function ($, root, undefined) {
    $(function () {
      $('.hasTooltip').each(function () {

          $(this).on('click', function () {
              $(this).next('span').toggleClass('show');
          });
      });

        /*** responsive***/
        $(window).bind("resize", resizeWindow);
        function resizeWindow(e) {
            var newWindowWidth = $(window).width();

            // If width width is below 600px, switch to the mobile stylesheet
            if (newWindowWidth < 576) {
                //alert('hallo');
            }

        }
        // Toggle Nav
        // Toggle Nav
        $('.toggle-nav').click(function (e) {
            $('#offMenu').toggleClass('open');
            $(this).toggleClass('open');
            e.preventDefault();
        });

        // Nav Button
        var navButton = $('.menu-item > a');
        var tapped = false;

        //Set Menu responsive
        if ($(window).width() <= 992){

            $('#offMenu ul li.menu-item-has-children > a').each(function () {
                //console.log('done');
                $(this).parent().find('.sub-menu').prepend('<li class="menu-item first-item"><a class="dropdown-item" href="' + $(this).attr('href') + '">' + $(this).text() + '</a></li>');

                $(this).click(function (e) {
                    e.preventDefault();
                    $(this).toggleClass('dropdown');
                    $(this).siblings('ul').toggleClass('show');
                });
            });
        }

        /*** Language switch ***/
        $('.lang-item').each(function () {
            $(this).children('a').wrapInner('<span></span>');
        });

        /*** NIVO Lightbox ***/
        $('a').nivoLightbox();

        $('.gallery-item a').nivoLightbox({
            effect: 'fade', // The effect to use when showing the lightbox
            theme: 'default', // The lightbox theme to use
            keyboardNav: true, // Enable/Disable keyboard navigation (left/right/escape)
            onInit: function () {}, // Callback when lightbox has loaded
            beforeShowLightbox: function () {}, // Callback before the lightbox is shown
            afterShowLightbox: function (lightbox) {}, // Callback after the lightbox is shown
            beforeHideLightbox: function () {}, // Callback before the lightbox is hidden
            afterHideLightbox: function () {}, // Callback after the lightbox is hidden
            onPrev: function (element) {}, // Callback when the lightbox gallery goes to previous item
            onNext: function (element) {}, // Callback when the lightbox gallery goes to next item
            errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
        });
        $('.gallery-item a').each(function () {
            var gallery = $(this).parent().parent().parent('div');
            var galleryID = gallery.attr('id');
            $(this).attr('data-lightbox-gallery', galleryID);
        });

        //give active-class to first carousel item
        $('.carousel-inner').each(function () {
            $(this).children('.item:first-child').addClass('active');
        });
        $('.carousel-indicators').each(function () {
            $(this).children('li:first-child').addClass('active');
        });

        //disable carousel controls if there is only one item
        $('.carousel').each(function () {
            //
            if ($(this).children('.carousel-inner').children('.item').length === 1) {
                $(this).children('.carousel-indicators').remove();
                $(this).children('.carousel-control').remove();
            }
        });

        // Affix Menu
        $('#mainNav').affix({
            offset: {
                top: 100,
                bottom: function () {
                    return (this.bottom = $('.footer').outerHeight(true))
                }
            }
        })

        //related Articles
        if ($('.row.bottom').children('div').length) {
            $('.row.bottom').addClass('related');
        }

        //EVENTS
        $.each($('.tablepress'), function () {
            $(this).addClass('events-table');
            $("#" + this.id).addClass('collapse');
            $("#" + this.id).prev('h2').addClass('collapseHeadline').wrapInner('<a data-toggle="collapse" class="showToggle"></a>');
            $("#" + this.id).prev('h2').children('a').attr('href', '#' + this.id).attr('aria-controls',this.id);
        });
        //responsive table
//        var mobile = $('body').hasClass('handheld') || $('body').hasClass('android') || $('body').hasClass('tablet');
//        if (!(mobile)) {
//            $('.table-responsive').removeClass('table-responsive');
//        }

        $('.tablepress td').each(function () {

            if ($(this).attr('colspan')) {
                $(this).addClass('table-headline');
            }
        });
        $('td.table-headline').each(function () {
            $(this).parent('tr').next('tr').addClass('transparent');
        });

                // Collapse Headlines
        $('.collapseHeadline').each(function () {
            $(this).addClass('clearfix');
        });
        $('.collapseHeadline > a:first-child').each(function () {
            $(this).wrapInner('<span></span>');
            $(this).children('span').before('<i class="fa fa-plus-circle"></i>');
            $(this).click(function () {
                $(this).parent().find('i').toggleClass('fa-plus-circle fa-minus-circle');
            });
        });


            // tweek large headlines in panels for small devices
//    $('.box > h3').each(function () {
//        var headlineWidth = $(this).width();
//        var linkWidth = $(this).children('a').width();
//        alert(headlineWidth);
//        if (linkWidth > headlineWidth) {
//            $(this).children('a').addClass('ellipsis');
//        }
//
//    });

        //elastic iframe & pointer events
        // only if iframe loads not statistik script
        var iframeSrc = $('iframe').attr('src');

        if (iframeSrc.indexOf("https://statistik.spraachen.org/") == 1){
            $('iframe').wrap('<div class="iframe-elastic"></div>');
        }


        $('.iframe-elastic > iframe').attr('id', 'map');
        //enable pointer events by clicking on parent
        $('.iframe-elastic').click(function () {
            $('#map,.gm-style').css('pointer-events', 'all');
        });
        // you want to disable pointer events when the mouse leave the canvas area;
        $("#map").mouseleave(function () {
            $('#map').css('pointer-events', 'none'); // set the pointer events to none when mouse leaves the map area
        });

        //external icons
        $('a').filter(function () {
            return this.hostname && this.hostname !== location.hostname;
        }).addClass('external').attr('target', '_blank');
        $('.contact-data > a').removeClass('external');
        if ($('a.external > img').length) {
            $('a.external > img').parent('a').removeClass('external');
        }
//PDFs LInks
        $("a[href$='pdf']")
                .prepend('<i class="fa fa-file-pdf-o"></i> ')
                .addClass('file')
                .attr('target', '_blank');
        // post edit link
        $('.post-edit-link').wrapInner('<span></span>');

        navButton.bind('touchstart hover', function () {
            $(this).siblings('ul').addClass('show');
        });

        //request Boxes
    function requestVisa() {
        //alert('hallo');
        // Step 1
        $('#abidance').change(function () {
            var antwort = $(this).val();
            if (antwort == 'ja' || antwort == 'yes') {
                $('#abidance-title-cnt').removeClass('hide');
                $('#visa-cnt').addClass('hide');
                $('#visa-more').addClass('hide');
            } else if (antwort == 'nein' || antwort == 'no') {
                $('#visa-cnt').removeClass('hide');
                $('#abidance-title-cnt').addClass('hide');

                $('#visa').change(function () {
                    var antwort = $(this).val();
                    if (antwort == 'ja' || antwort == 'yes') {
                        $('#visa-more').removeClass('hide');
                    }
                    if (antwort == 'nein' || antwort == 'no') {
                        $('#visa-more').addClass('hide');
                    }
                });
            }

        });
    }
    requestVisa();

        //window scroll funtion
    $(window).scroll(function () {
        if ($(window).scrollTop() > 500) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scroll-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    });

})(jQuery, this);
