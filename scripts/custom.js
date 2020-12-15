function openMenu(evt, menuCategory) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("menu-category");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(menuCategory).style.display = "block";
    evt.currentTarget.className += " active";
};

function myFunction() {
    var x = document.getElementById("mobile-menu");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
};

jQuery(document).ready(function() {
    
    $(window).scroll(function() {
        var windowHeight = $(window).height()/2 - $('header').height();
        if ($(window).scrollTop() >= windowHeight) {
            $('header').css({'background-color':'#fff', 'border-bottom':'3px solid #a7784d'});
            $('header a').css('color', '#333333');
            $('.main-nav li a').hover(
                function() {
                    $(this).css('color', '#a7784d');
                }, function() {
                    $(this).css('color', '#333333');
                });
            $('.nav-btns div').css({'border':'1px solid #333333', 'border-radius':'15px'});
            $('.btn-hidden').css('color', '#fff');
            $('.mobile-nav i').css({'color':'#333333', 'border':'1px solid #333333'});
        } else {
            $('header, header a, .nav-btns div, .mobile-nav i').attr('style', '');
            $('.main-nav li a').hover(
                function() {
                    $(this).css('color', '#a7784d');
                }, function() {
                    $(this).css('color', '#fff');
                }
            );
        }
    });
            
    $(window).scroll(function () {
        var position = window.pageYOffset - $('header').height() + $(window).height()/2;
        $('section').each(function () {
            var target = $(this).offset().top;
            var id = $(this).attr('id');
            var navLinks = $('.main-nav li a, .mobile-nav li a');
            if (position >= target) {
                navLinks.removeClass('active');
                $('.main-nav li a[href="#' + id + '"]').addClass('active');
                $('.mobile-nav li a[href="#' + id + '"]').addClass('active');
            }
        });
    });

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - $('header').height()
        }, 500);
    });
            
});


            
            
            
            