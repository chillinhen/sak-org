jQuery(document).ready(function ($) {
//alert('hallo');
    
    //declare var
    //var navButton = $('.navbar-responsive-collapse >ul >li >a');
    var navButton = $('#offMenu .menu-item a');   
    var tapped=false;
    navButton.on("touchstart", function (e) {
        if (!tapped) { //if tap is not set, set up single tap
            tapped = setTimeout(function () {
                e.preventDefault();
                //insert things you want to do when single tapped
            }, 300);   //wait 300ms then run single click code
        } else {    //tapped within 300ms of last tap. double tap
            clearTimeout(tapped); //stop single tap callback
            window.location.href = $(this).attr('href');
            //insert things you want to do when double tapped
        }
        e.preventDefault()
    });
    
    
     navButton.bind('touchstart hover', function() {
        $(this).parent('li.dropdown').toggleClass('active');
    });

});

