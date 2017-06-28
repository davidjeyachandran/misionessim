jQuery(document).ready(function() {

    jQuery("#banner a img").hover(function () {

        jQuery(this).toggleClass('portadahover');
        jQuery('.nueva').toggleClass('nuevahover');
        jQuery('.flecha').toggleClass('flechahover');

    })
})