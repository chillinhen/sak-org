jQuery(document).ready(function ($) {
    $('.hasTooltip').each(function () { // Notice the .each() loop, discussed below
        $(this).parent().addClass('tooltipContainer');
//        $('.tooltipContainer').css('display','inline');
        $('br', '.tooltipContainer').remove();
        $(this).qtip({
            content: {
                text: $(this).next('span') // Use the "div" element next to this for the content
            },
            show: {
                event: 'click'
            },
            hide: {
                event: 'click'
            },
            style: {
                classes: 'qtip-light qtip-shadow'
            },
            position: {
                my: 'top left', // Position my top left...
                at: 'bottom left', // at the bottom right of...
            }
        });
    });
    
    //remove brs in help
    $('a.help').each(function () {
        $(this).children('br').remove();
    });
});