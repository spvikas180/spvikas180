// quote
$(function () {
    var formElements = 'label, input, select, textarea, button, .step';
    $('form').addClass('multi-step');
    $(formElements).addClass('hide');
    $('form section').first().find(formElements).removeClass('hide');
    $('h3').on('click', function () {
        $(formElements).addClass('hide');
        $(this).parent('section').find(formElements).removeClass('hide');
    });

    $('.next.step').on('click', function () {
        $(this).parent().find(formElements).addClass('hide').parent().next('section').find(formElements).removeClass('hide');
    });

    $('.previous.step').on('click', function () {
        $(this).parent().find(formElements).addClass('hide').parent().prev('section').find(formElements).removeClass('hide');
    });
});