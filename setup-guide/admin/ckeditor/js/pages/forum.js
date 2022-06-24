$(document).ready(function () {

    'use strict';

    // select box
    $('#select1').select2();
    // change category
    $('select#select1').change(function () {
        window.location = "index.php?cat=" + this.value;
    });


});
