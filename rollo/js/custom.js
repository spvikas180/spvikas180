jQuery(document).ready(function () {
    jQuery('.red-btn').click(function () {
        window.location.href = "https://redeemretailcard.co.uk/";
        return false;
    });
});

function toggleIcon(e) {
    $(e.target)
            .prev('.panel-heading')
            .find(".more-less ")
            .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);