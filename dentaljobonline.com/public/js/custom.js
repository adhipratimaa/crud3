// on scroll fixed shrink  nav 
$(window).on("scroll", function() {
    if ($(window).scrollTop()) {
        $('nav').addClass('nav-scroll');
        $('a.navbar-brand').addClass('display');
        $('a.nav-link').addClass('text-black');

    } else {
        $('nav').removeClass('nav-scroll');
        $('.mega-menu').removeClass('p-left');
        $('a.navbar-brand').removeClass('display');
        $('a.nav-link').removeClass('text-black');
    }
})

//  on click close side nav
$(function() {
    var navMain = $(".navbar-collapse");
    navMain.on("click", "a:not([data-toggle])", null, function() {
        navMain.collapse('hide');
    });

    // scroll top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('#back-to-top').fadeIn('slow');
        } else {
            $('#back-to-top').fadeOut('slow');
        }
    });
    $('#back-to-top').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
});