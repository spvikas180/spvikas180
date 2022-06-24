<?php include_once"../control/config.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Upload File</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <style>
            #imgdata .myImage{ float: left;}
            .myImage label{ border: none !important; margin: 0 !important;}
            .myImage img{ border: 2px solid red; margin: 5px;}
            .myImage .check{ border: 2px solid blue;}

            .tabset > input[type="radio"] {
                position: absolute;
                left: -200vw;
            }

            .tabset .tab-panel {
                display: none;
            }

            .tabset > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
            .tabset > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
            .tabset > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
            .tabset > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
            .tabset > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
            .tabset > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
                display: block;
            }

            .tabset > label {
                position: relative;
                display: inline-block;
                padding: 11px 10px 17px;
                border: 1px solid transparent;
                border-bottom: 0;
                cursor: pointer;
                font-weight: 600;
            }


            .tabset > label:hover,
            .tabset > input:focus + label {
                color: #06c;
            }

            .tabset > label:hover::after,
            .tabset > input:focus + label::after,
            .tabset > input:checked + label::after {
                background: #06c;
            }

            .tabset > input:checked + label {
                border-color: #ccc;
                border-bottom: 1px solid #fff;
                margin-bottom: -1px;
            }

            .tab-panel {
                padding: 30px 0;
                border-top: 1px solid #ccc;
            }


            /*            .tabset {
                            max-width: 65em;
                        }*/
        </style>
        <script>
            $(document).ready(function () {
                $('#loadimg').hide();
                $('#sendload').click(function () {
                    $('#loadimg').show();
                });
                var options = {
                    success: function (response) {
                        var data = $.parseJSON(response)
                        if (data.status === 'success') {
                            get_path(data.msg);
                            $('#loadimg').hide();
                            $('label#msg_lbl').html('<br><br>Uploaded : ' + data.msg);
                            window.close();
                        } else {
                            $('#loadimg').hide();
                            $('label#msg_lbl').html('<br><br>Error : ' + data.msg);
                        }
                    },
                    error: function (response) {
                        console.log(response);
                    }
                };
                $('#myForm').ajaxForm(options);
            });
            function get_path(location) {
                top.tinymce.activeEditor.windowManager.getParams().oninsert(location);
            }
        </script>
    </head>
    <body>
        <div class="tabset">
            <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
            <label for="tab1">Upload File</label>
            <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
            <label for="tab2">Media Library</label>
            <div class="tab-panels">
                <section id="marzen" class="tab-panel">
                    <div class="form-group">
                        Select File :
                        <form id="myForm" name="myForm" method="POST" action="upload_pic.php"
                              enctype="multipart/form-data">
                            <input name="upload_type" type="hidden" value="blogImage">
                            <input name="upload_file" type="file">
                            <input id="sendload" name="send" type="submit" value="Upload">
                        </form>
                    </div> 
                </section>
                <section id="rauchbier" class="tab-panel">
                    <div class="form-group">
                        <!--Or Choose Image from Server : <br>-->
                        <!--                        <a id="tab2" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#addcustom"> 
                                                    <input id="sendload" name="send" type="submit" value="Choose">
                                                </a>-->
                        <div class="modal-footer" style="display: none;">
                            <!--<button id="dismissImage" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>-->
                            <button type="button" class="btn btn-primary pull-right" id="choose_file">SELECT</button>
                            <button type="button" class="btn btn-primary pull-right" id="delete_file">DELETE</button>
                            <input id="searchImg" class="form-control" type="search" style=" width: 20%; float: right;"/>
                        </div>
                        <div class="modal-content" style=" display: none;">
                            <div class="modal-body myscroll" style="height: 540px;overflow-y: scroll; margin: 15px 0;">
                                <div class="row" id="imgdata">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <img id="loadimg" src="../images/loading.gif" style="width: 70px;">
        <label id="msg_lbl"></label>
    </body>
</html>

<script>
    $('#dismissImage').on('click', function (e) {
        $('.modal-content').css('display', 'none');
        $('.modal-footer').css('display', 'none');
    });
    $('#tab2').on('click', function (e) {
        $('.modal-content').css('display', 'block');
        $('.modal-footer').css('display', 'block');
        $.ajax({
            type: "POST",
            data: '',
            url: '../services/post/img.php',
            success: function (response) {
                $('#imgdata').html(response);
            }
        });
    });

    $('.form-search .btn').on('click', function (e) {
        //alert('asd');
        var query = $('#searchQuery').val();
        //            $('div.myImage .imageName').each(function () {
        //                var $this = $(this);
        //                if ($this.text().toLowerCase().indexOf(query) === -1)
        //                    $this.closest('div.myImage').fadeOut();
        //                else $this.closest('div.myImage').fadeIn();
        //            });

        $.ajax({
            type: "POST",
            data: 'query=' + query,
            url: '../services/post/img.php',
            success: function (response) {
                $('#imgdata').html(response);
            }
        });
    });

//on change search image
    function searchImg() {
        $('#searchImg').keyup(function () {
            var keyImg = $(this).val();
            $.ajax({
                type: "POST",
                data: 'keyImg=' + keyImg,
                url: '../services/post/img.php',
                success: function (response) {
                    $('#imgdata').html(response);
                }
            });
        });
    }
    searchImg();


    $(document).on('click', '.img-check', function (e) {
        $('.img-check').not(this).removeClass('check').siblings('input').prop('checked', false);
        $(this).addClass('check').siblings('input').prop('checked', true);
    });
    $(document).on('click', '.clearData', function (e) {
        $('#blogimage1').val('');
        return false;
    });
    $(document).on('click', '#choose_file', function () {
        var base = '<?php echo BASE_URL; ?>';
        var path = base + $("input[name='chk1']:checked").val();
        get_path(path);
        $('#blogimage1').val(path);
        $('#dismissImage').click();
        return false;

    });

// delete images server
    $(document).on('click', '#delete_file', function () {
        var path = $("input[name='chk1']:checked").val();
        $.ajax({
            type: "POST",
            data: 'path=' + path,
            url: '../services/post/img.php',
            success: function (response) {
                $('#imgdata').html(response);
            }
        });
    });

</script>

