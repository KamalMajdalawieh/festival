$(document).on('click','.target-tabs-cards',function (){
    $('.target-tabs-cards').removeClass('active-fields');
    $(this).addClass('active-fields');
})

$(document).on('click','.scroll_to_div',function(e) {
    e.preventDefault();
    let target = $(this).attr('href');
    $('.navbar-collapse.collapse.show')
        .removeClass('show');
    $('html, body').animate({
        scrollTop: $(target).offset().top - ($('.main_menu').height()+20)
    }, 2000);
});


