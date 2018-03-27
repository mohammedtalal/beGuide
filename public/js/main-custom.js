$(document).ready(function () {

    $(window).scroll(function (){
        if($(this).scrollTop() > 200){
            $('.navbar').css('background-color', '#262626');
        } else{
            $('.navbar').css('background-color', 'transparent');
        }
    });

    //go down
    $('.down img').click(function (){
        $('html, body').animate({
            scrollTop: $('.best_clients').offset().top
        });
    });

    //go up
    $(window).scroll(function(){
        if ($(this).scrollTop() >= 600){
            $('.up').fadeIn();
        } else {
            $('.up').fadeOut();
        }
    });
    
    //up page
    $('.up').click(function (){
        $('html, body').animate({
            scrollTop: 0
        },600);
    });
    
    $('.spe_a_socilas_result .fa-phone').click(function(){
        $('.spe_a_socilas_result_hidden').slideToggle();
    });
    
    $('.special_phone_profile').click(function(){
        $('.hidden_phone').slideToggle();
    });
    
    $('.spe_message').click(function(){
        $('html, body').animate({
            scrollTop: ( $('.parent_profile_form').offset().top -50 )
        });
    });
});

