$(document).ready(function () {

    'use strict';

    // select box
    $('#select1').select2();
    // change category
    $('select#select1').change(function () {
        window.location = "index.php?cat=" + this.value;
    });
    
    user_activity(userid);

    function user_activity(userid) {
        $.ajax({
            type: "POST",
            url: "../services/user_activity.php",
            data: "userid=" + userid,
            success: function (response) {
                var data = $.parseJSON(response);
                if (data.status === 'success') {
                    $('div#user_activity').html('<ul class="media-list user-list"></ul>');
                    for (var i = 0; i < data.msg.length; i++) {
                        var ht_data = '<li id="' + data.msg[i]['id'] + '" class="media">';
                        ht_data = ht_data + '<div class="media-body">';
                        ht_data = ht_data + data.msg[i]['activity_desc'];
                        ht_data = ht_data + '<small class="date"><i class="fa fa-clock-o"></i> ' + data.msg[i]['date_time'] + '</small>';
                        ht_data = ht_data + '</div>';
                        ht_data = ht_data + '</li>';
                        $('div#user_activity ul').append(ht_data);
                    }
                } else {
                    console.log(data.msg);
                }
            }
        });
    }


});