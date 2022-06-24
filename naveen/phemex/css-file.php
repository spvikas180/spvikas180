 <style>
            @font-face {
                font-family: phemex-icon;
                src: url(//at.alicdn.com/t/font_1488528_tm46rufba1n.woff2?t=1640074744405) format("woff2"), url(//at.alicdn.com/t/font_1488528_tm46rufba1n.woff?t=1640074744405) format("woff"),
                    url(//at.alicdn.com/t/font_1488528_tm46rufba1n.ttf?t=1640074744405) format("truetype");
                font-display: swap;
            }
            @font-face {
                font-family: BASE;
                src: url(/font/DINPro-Medium.woff2) format("woff2");
                font-weight: 400;
                unicode-range: U+20-40;
            }
            @font-face {
                font-family: BASE;
                src: url(/font/DINPro-Medium.woff2) format("woff2");
                font-weight: 500;
                unicode-range: U+20-40;
            }
            @font-face {
                font-family: BASE;
                src: url(/font/DINPro-Medium.woff2) format("woff2");
                font-weight: 600;
                unicode-range: U+20-40;
            }
            @font-face {
                font-family: BASE;
                src: url(/font/Roboto-Regular.woff2) format("woff2");
                unicode-range: U+0-1F, U+41-10FFFF;
                font-weight: 400;
            }
            @font-face {
                font-family: BASE;
                src: url(/font/Roboto-Medium.woff2) format("woff2");
                unicode-range: U+0-1F, U+41-10FFFF;
                font-weight: 500;
            }
            @font-face {
                font-family: BASE;
                src: url(/font/gilroy-bold.woff2) format("woff2");
                unicode-range: U+0-1F, U+41-10FFFF;
                font-weight: 600;
            }
        </style>
        <style>
            .register-container.svelte-18h2fhz {
                width: 400px;
            }
            .register-container2.svelte-18h2fhz {
                margin: 0 auto;
                padding-top: 108px;
                width: 480px;
            }
            @media screen and (max-width: 640px) {
                .register-container.svelte-18h2fhz {
                    width: 100%;
                }
            }
            .main.svelte-1jlaehe {
                padding: 8px;
            }
            .title.svelte-1jlaehe {
                font-size: 16px;
                line-height: 24px;
            }
            .title1.svelte-1jlaehe {
                margin-top: 10px;
                font-size: 14px;
                line-height: 22px;
            }
            .footer.svelte-1jlaehe {
                padding: 8px;
                margin-top: 30px;
                text-align: right;
            }
            .button.svelte-1jlaehe {
                display: inline-block;
                margin-left: 16px;
                cursor: pointer;
                background: #003398;
                color: #fff;
                border-radius: 2px;
                border: 1px solid #003398;
                padding: 0 24px;
                height: 40px;
                line-height: 38px;
            }
            .button.svelte-1jlaehe:hover {
                opacity: 0.8;
            }
            label.svelte-1jlaehe {
                width: 16px;
                height: 16px;
                line-height: 16px;
                border-radius: 2px;
                cursor: pointer;
                position: absolute;
                border: 1px solid rgba(0, 0, 0, 0.15);
                top: 2px;
                left: 0;
            }
            input[type="checkbox"].svelte-1jlaehe {
                visibility: hidden;
            }
            .input:checked + label.svelte-1jlaehe:before {
                display: block;
                content: "\2713";
                text-align: center;
                font-size: 12px;
                color: #fff;
                background: #003398;
            }
            .dn.svelte-1jlaehe {
                display: none;
            }
            .incompatible .warp.svelte-1jlaehe {
                display: block;
            }
            .mt30.svelte-1jlaehe {
                margin-top: 30px;
            }
            .modal-mask.svelte-1eb9fes {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 9999999;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6);
            }
            .container.svelte-1eb9fes {
                position: fixed;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999999;
            }
            .modal.svelte-1eb9fes {
                position: relative;
                width: 520px;
                max-height: calc(100vh - 3em);
                overflow: auto;
                border-radius: 12px;
                background: #fff;
            }
            .modal.big.svelte-1eb9fes {
                width: 620px;
            }
            .modal.small.svelte-1eb9fes {
                width: 320px;
            }
            .modal.phone.svelte-1eb9fes {
                width: calc(100vw - 3em);
            }
            .svelte-1eb9fes::-webkit-scrollbar {
                width: 0 !important;
            }
            .close-icon.svelte-1eb9fes {
                position: absolute;
                top: 16px;
                right: 16px;
            }
            .modal_left.svelte-1i2zmxx {
                width: 210px;
                padding: 36px 30px;
                background: #003398;
            }
            .left_title_2.svelte-1i2zmxx {
                opacity: 0.4;
            }
            .lh16.svelte-1i2zmxx {
                line-height: 16px;
            }
            .left_title.svelte-1i2zmxx {
                font-size: 14px;
                line-height: 17px;
            }
            .card.svelte-1i2zmxx {
                background: #f9fafd;
                border-radius: 4px;
                padding: 4px 24px 24px;
            }
            .checked.svelte-1i2zmxx {
                color: #003398;
            }
            .img.svelte-1i2zmxx {
                width: 12px;
            }
            .close.svelte-1i2zmxx {
                margin-top: -10px;
                margin-right: -8px;
            }
            .main.svelte-1i2zmxx {
                margin: -24px;
            }
            @media screen and (min-width: 640px) {
                .modal_right.svelte-1i2zmxx {
                    width: 306px;
                    padding: 36px 32px;
                    background: #fff;
                }
            }
            @media screen and (max-width: 640px) {
                .modal_left.svelte-1i2zmxx {
                    display: none;
                }
                .modal_right.svelte-1i2zmxx {
                    width: 100%;
                    padding: 24px;
                }
            }
            .footer.svelte-a711tm.svelte-a711tm {
                margin: 40px auto 0;
            }
            .icon.svelte-a711tm.svelte-a711tm {
                width: 72px;
            }
            .icon.svelte-a711tm img.svelte-a711tm {
                width: 100%;
            }
            .mt42.svelte-a711tm.svelte-a711tm {
                margin-top: 42px;
            }
            .wp80.svelte-a711tm.svelte-a711tm {
                width: 80%;
            }
            .w18.svelte-a711tm.svelte-a711tm {
                width: 18px;
                height: 18px;
            }
            .main.svelte-1beo2hq.svelte-1beo2hq {
                margin: 24px auto;
                width: 400px;
            }
            .w200.svelte-1beo2hq.svelte-1beo2hq {
                width: 200px;
            }
            .bg.svelte-1beo2hq.svelte-1beo2hq {
                width: 360px;
                height: 60px;
                padding: 20px;
                border-radius: 2px;
                background: #f9f9f9;
            }
            .main.svelte-1beo2hq .date-pick.svelte-1beo2hq .calendar-button {
                padding: 10px 0;
                border-radius: 0;
                border: 0;
                background: 0 0;
                width: 120px;
                text-align: left;
                box-shadow: 0 0 0 0 transparent;
                font-size: 14px;
            }
            .main.svelte-1beo2hq.svelte-1beo2hq .calendar-button:focus {
                background-color: transparent;
                border: 0;
            }
            .main.svelte-1beo2hq .date-pick.svelte-1beo2hq .contents-wrapper {
                position: fixed;
                transform: translate(-56%, -90%) !important;
            }
            .main.svelte-1beo2hq .date-box1.svelte-1beo2hq .contents-wrapper {
                position: fixed;
                transform: translate(-56%, -90%) !important;
            }
            .main.svelte-1beo2hq .date-box2.svelte-1beo2hq .contents-wrapper {
                position: fixed;
                transform: translate(-10%, -90%) !important;
            }
            .main.svelte-1beo2hq.svelte-1beo2hq .datepicker {
                margin: 0;
            }
            .main.svelte-1beo2hq .disable.svelte-1beo2hq .calendar-button {
                color: var(--T3);
            }
            .w140.svelte-1beo2hq.svelte-1beo2hq {
                width: 140px;
            }
            .date-box1.svelte-1beo2hq.svelte-1beo2hq,
            .date-box2.svelte-1beo2hq.svelte-1beo2hq {
                border-bottom: 1px solid #e5e5e5;
            }
            .disable.svelte-1beo2hq.svelte-1beo2hq {
                pointer-events: none;
            }
        </style>
       
       
        <style id="svelte-18h2fhz-style">
            .register-container.svelte-18h2fhz {
                width: 400px;
            }
            .register-container2.svelte-18h2fhz {
                margin: 0 auto;
                padding-top: 108px;
                width: 480px;
            }
            @media screen and (max-width: 640px) {
                .register-container.svelte-18h2fhz {
                    width: 100%;
                }
            }
        </style>
       
        <style id="svelte-1jlaehe-style">
            .main.svelte-1jlaehe {
                padding: 8px;
            }
            .title.svelte-1jlaehe {
                font-size: 16px;
                line-height: 24px;
            }
            .title1.svelte-1jlaehe {
                margin-top: 10px;
                font-size: 14px;
                line-height: 22px;
            }
            .footer.svelte-1jlaehe {
                padding: 8px;
                margin-top: 30px;
                text-align: right;
            }
            .button.svelte-1jlaehe {
                display: inline-block;
                margin-left: 16px;
                cursor: pointer;
                background: #003398;
                color: #fff;
                border-radius: 2px;
                border: 1px solid #003398;
                padding: 0 24px;
                height: 40px;
                line-height: 38px;
            }
            .button.svelte-1jlaehe:hover {
                opacity: 0.8;
            }
            label.svelte-1jlaehe {
                width: 16px;
                height: 16px;
                line-height: 16px;
                border-radius: 2px;
                cursor: pointer;
                position: absolute;
                border: 1px solid rgba(0, 0, 0, 0.15);
                top: 2px;
                left: 0;
            }
            input[type="checkbox"].svelte-1jlaehe {
                visibility: hidden;
            }
            .input:checked + label.svelte-1jlaehe:before {
                display: block;
                content: "\2713";
                text-align: center;
                font-size: 12px;
                color: #fff;
                background: #003398;
            }
            .dn.svelte-1jlaehe {
                display: none;
            }
            .incompatible .warp.svelte-1jlaehe {
                display: block;
            }
            .mt30.svelte-1jlaehe {
                margin-top: 30px;
            }
        </style>
        <style id="svelte-1eb9fes-style">
            .modal-mask.svelte-1eb9fes {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 9999999;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6);
            }
            .container.svelte-1eb9fes {
                position: fixed;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999999;
            }
            .modal.svelte-1eb9fes {
                position: relative;
                width: 520px;
                max-height: calc(100vh - 3em);
                overflow: auto;
                border-radius: 12px;
                background: #fff;
            }
            .modal.big.svelte-1eb9fes {
                width: 620px;
            }
            .modal.small.svelte-1eb9fes {
                width: 320px;
            }
            .modal.phone.svelte-1eb9fes {
                width: calc(100vw - 3em);
            }
            .svelte-1eb9fes::-webkit-scrollbar {
                width: 0 !important;
            }
            .close-icon.svelte-1eb9fes {
                position: absolute;
                top: 16px;
                right: 16px;
            }
        </style>
        <style id="svelte-1i2zmxx-style">
            .modal_left.svelte-1i2zmxx {
                width: 210px;
                padding: 36px 30px;
                background: #003398;
            }
            .left_title_2.svelte-1i2zmxx {
                opacity: 0.4;
            }
            .lh16.svelte-1i2zmxx {
                line-height: 16px;
            }
            .left_title.svelte-1i2zmxx {
                font-size: 14px;
                line-height: 17px;
            }
            .card.svelte-1i2zmxx {
                background: #f9fafd;
                border-radius: 4px;
                padding: 4px 24px 24px;
            }
            .checked.svelte-1i2zmxx {
                color: #003398;
            }
            .img.svelte-1i2zmxx {
                width: 12px;
            }
            .close.svelte-1i2zmxx {
                margin-top: -10px;
                margin-right: -8px;
            }
            .main.svelte-1i2zmxx {
                margin: -24px;
            }
            @media screen and (min-width: 640px) {
                .modal_right.svelte-1i2zmxx {
                    width: 306px;
                    padding: 36px 32px;
                    background: #fff;
                }
            }
            @media screen and (max-width: 640px) {
                .modal_left.svelte-1i2zmxx {
                    display: none;
                }
                .modal_right.svelte-1i2zmxx {
                    width: 100%;
                    padding: 24px;
                }
            }
        </style>
        <style id="svelte-a711tm-style">
            .footer.svelte-a711tm.svelte-a711tm {
                margin: 40px auto 0;
            }
            .icon.svelte-a711tm.svelte-a711tm {
                width: 72px;
            }
            .icon.svelte-a711tm img.svelte-a711tm {
                width: 100%;
            }
            .mt42.svelte-a711tm.svelte-a711tm {
                margin-top: 42px;
            }
            .wp80.svelte-a711tm.svelte-a711tm {
                width: 80%;
            }
            .w18.svelte-a711tm.svelte-a711tm {
                width: 18px;
                height: 18px;
            }
        </style>
        <style id="svelte-1beo2hq-style">
            .main.svelte-1beo2hq.svelte-1beo2hq {
                margin: 24px auto;
                width: 400px;
            }
            .w200.svelte-1beo2hq.svelte-1beo2hq {
                width: 200px;
            }
            .bg.svelte-1beo2hq.svelte-1beo2hq {
                width: 360px;
                height: 60px;
                padding: 20px;
                border-radius: 2px;
                background: #f9f9f9;
            }
            .main.svelte-1beo2hq .date-pick.svelte-1beo2hq .calendar-button {
                padding: 10px 0;
                border-radius: 0;
                border: 0;
                background: transparent;
                width: 120px;
                text-align: left;
                box-shadow: 0 0 0 0 transparent;
                font-size: 14px;
            }
            .main.svelte-1beo2hq.svelte-1beo2hq .calendar-button:focus {
                background-color: transparent;
                border: 0;
            }
            .main.svelte-1beo2hq .date-pick.svelte-1beo2hq .contents-wrapper {
                position: fixed;
                transform: translate(-56%, -90%) !important;
            }
            .main.svelte-1beo2hq .date-box1.svelte-1beo2hq .contents-wrapper {
                position: fixed;
                transform: translate(-56%, -90%) !important;
            }
            .main.svelte-1beo2hq .date-box2.svelte-1beo2hq .contents-wrapper {
                position: fixed;
                transform: translate(-10%, -90%) !important;
            }
            .main.svelte-1beo2hq.svelte-1beo2hq .datepicker {
                margin: 0;
            }
            .main.svelte-1beo2hq .disable.svelte-1beo2hq .calendar-button {
                color: var(--T3);
            }
            .w140.svelte-1beo2hq.svelte-1beo2hq {
                width: 140px;
            }
            .date-box1.svelte-1beo2hq.svelte-1beo2hq,
            .date-box2.svelte-1beo2hq.svelte-1beo2hq {
                border-bottom: 1px solid #e5e5e5;
            }
            .disable.svelte-1beo2hq.svelte-1beo2hq {
                pointer-events: none;
            }
        </style>
        <link rel="shortcut icon" href="https://static.phemex.com/s/common/favicon-v2.ico" type="image/x-icon" />
        <link rel="stylesheet" href="./assets/global.5f8069.css" />
       
        <style>
            @media screen and (min-width: 640px) {
                html,
                body {
                    min-width: 100%;
                }
            }
            .swiper-container {
                padding-top: 96px;
            }
        </style>
       
        <style id="svelte-1nv9oc2-style">
            .user-view-content.svelte-1nv9oc2 {
                min-height: 100%;
            }
            .user-view-left.svelte-1nv9oc2 {
                padding: 16px 0;
                width: 560px;
                min-height: 100%;
                background: var(--blue);
            }
            .user-view-right.svelte-1nv9oc2 {
                min-height: 100%;
            }
            .logo-a.svelte-1nv9oc2 {
                left: 10px;
                top: 30px;
                display: block;
                margin: 0 30px;
                width: 106px;
                height: 24px;
            }
            .copy-right.svelte-1nv9oc2 {
                padding-top: 160px;
            }
        </style>
        <style id="svelte-5om90p-style">
            .swiper-wrapper.svelte-5om90p {
                width: 560px;
            }
            .swiper-viewport.svelte-5om90p {
                margin: 0 auto;
                height: 320px;
            }
            .swiper-text.svelte-5om90p {
                margin: 0 auto;
                width: 320px;
            }
            .swiper-items.svelte-5om90p {
                transition: left 0.3s;
            }
            .swiper-indicator.svelte-5om90p {
                width: 20px;
                height: 4px;
                background: rgba(255, 255, 255, 0.5);
            }
            .swiper-indicator.active.svelte-5om90p {
                background: #fff;
            }
            .swiper-indicator.svelte-5om90p:last-child {
                margin-right: 0;
            }
            .title.svelte-5om90p {
                padding-top: 32px;
            }
            .desc.svelte-5om90p {
                padding-top: 16px;
            }
        </style>
        <style id="svelte-lv9h46-style">
            .warp.svelte-lv9h46.svelte-lv9h46 {
                border-radius: 12px;
                padding: 40px 30px;
                width: 420px;
                background: #fff;
            }
            .form.svelte-lv9h46.svelte-lv9h46 {
                margin: auto !important;
            }
            .btn.svelte-lv9h46.svelte-lv9h46 {
                margin-top: 30px;
            }
            .bottom.svelte-lv9h46.svelte-lv9h46 {
                margin-top: 15px;
                font-size: 14px;
                line-height: 22px;
            }
            .sr.svelte-lv9h46.svelte-lv9h46 {
                float: right;
                color: #003398;
                cursor: pointer;
            }
            .a1.svelte-lv9h46.svelte-lv9h46 {
                line-height: 22px;
                font-size: 14px;
                cursor: pointer;
                padding-left: 0;
                color: #003398;
            }
            .a1.svelte-lv9h46.svelte-lv9h46:hover {
                padding-left: 0;
                color: #003398;
                opacity: 0.8;
            }
            .m-title.svelte-lv9h46.svelte-lv9h46 {
                display: none;
            }
            .warp.svelte-lv9h46.svelte-lv9h46 .home-register-invite-code input[disabled] {
                color: var(--T2);
                opacity: 1;
            }
            .enjoy-phemex-tr.svelte-lv9h46:hover .enjoy.svelte-lv9h46 {
                display: block;
            }
            .enjoy.svelte-lv9h46.svelte-lv9h46 {
                display: none;
            }
            .creat-arrow.svelte-lv9h46.svelte-lv9h46 {
                right: 20px;
            }
            .button-container.svelte-lv9h46.svelte-lv9h46 {
                width: 354px;
            }
            @media screen and (max-width: 640px) {
                .warp.svelte-lv9h46.svelte-lv9h46 {
                    width: 100%;
                    box-sizing: border-box;
                }
                .login-account.svelte-lv9h46.svelte-lv9h46,
                .title.svelte-lv9h46.svelte-lv9h46 {
                    display: none;
                }
                .m-title.svelte-lv9h46.svelte-lv9h46 {
                    display: flex;
                }
                .border.svelte-lv9h46.svelte-lv9h46 {
                    border-bottom: 1px solid var(--T2);
                }
            }
        </style>
        <style id="svelte-1ujaczh-style">
            .light-gray.svelte-1ujaczh.svelte-1ujaczh {
                color: #c5c8ce;
            }
            .item.svelte-1ujaczh.svelte-1ujaczh {
                height: 48px;
                border-radius: 8px;
                border: 1px solid #e9ecef;
            }
            .item.error.svelte-1ujaczh.svelte-1ujaczh {
                border: 1px solid #f66;
            }
            .item.svelte-1ujaczh.svelte-1ujaczh:focus-within,
            .item.svelte-1ujaczh.svelte-1ujaczh:hover {
                border: 1px solid #003fe6;
            }
            .ipt.svelte-1ujaczh.svelte-1ujaczh {
                outline: none;
                border: none;
                height: 88%;
            }
            .ipt.svelte-1ujaczh.svelte-1ujaczh::-webkit-input-placeholder {
                color: var(--T3);
            }
            input[disabled].svelte-1ujaczh.svelte-1ujaczh {
                background: transparent;
            }
            .disabled.svelte-1ujaczh.svelte-1ujaczh {
                background: #efefef;
            }
            .disabled.svelte-1ujaczh input.autofill.svelte-1ujaczh:-webkit-autofill {
                box-shadow: 0 0 0 1000px #efefef inset;
            }
        </style>
        <style id="svelte-1sfg5ak-style">
            .light-gray.svelte-1sfg5ak.svelte-1sfg5ak {
                color: #c5c8ce;
            }
            .item.svelte-1sfg5ak.svelte-1sfg5ak {
                height: 48px;
                border-radius: 8px;
                border: 1px solid #e9ecef;
            }
            .item.error.svelte-1sfg5ak.svelte-1sfg5ak {
                border: 1px solid #f66;
            }
            .item.svelte-1sfg5ak.svelte-1sfg5ak:focus-within,
            .item.svelte-1sfg5ak.svelte-1sfg5ak:hover {
                border: 1px solid #003fe6;
            }
            .ipt.svelte-1sfg5ak.svelte-1sfg5ak {
                outline: none;
                border: none;
                height: 88%;
            }
            .ipt.svelte-1sfg5ak.svelte-1sfg5ak::-webkit-input-placeholder {
                color: var(--T3);
            }
            input[disabled].svelte-1sfg5ak.svelte-1sfg5ak {
                background: transparent;
            }
            .disabled.svelte-1sfg5ak.svelte-1sfg5ak {
                background: #efefef;
            }
            .disabled.svelte-1sfg5ak input.autofill.svelte-1sfg5ak:-webkit-autofill {
                box-shadow: 0 0 0 1000px #efefef inset;
            }
            .password.svelte-1sfg5ak.svelte-1sfg5ak {
                right: 320px;
                top: 0;
            }
            .left.svelte-1sfg5ak.svelte-1sfg5ak {
                right: -10px;
                top: 0;
                transform: translateX(100%);
            }
        </style>
        <style id="svelte-j5w4em-style">
            button.svelte-j5w4em:focus,
            a.svelte-j5w4em:focus {
                outline: 0;
            }
            button.svelte-j5w4em,
            a.svelte-j5w4em {
                display: inline-block;
                border: solid 1px;
                padding: 0 32px;
                line-height: 48px;
                cursor: pointer;
                text-align: center;
            }
            .p024.svelte-j5w4em {
                padding: 0 24px;
            }
            .small.svelte-j5w4em {
                padding: 0 16px;
                line-height: 32px;
            }
            button + button.svelte-j5w4em {
                margin-left: 24px;
            }
            .small + .small.svelte-j5w4em {
                margin-left: 12px;
            }
            button.svelte-j5w4em svg {
                display: inline-block;
                vertical-align: middle;
                -webkit-animation: svelte-j5w4em-loading-circle 1s infinite linear;
                animation: svelte-j5w4em-loading-circle 1s infinite linear;
                transform: scale(0);
                transition: transform 3s linear;
            }
            .default.svelte-j5w4em {
                border-color: #ccc;
                background: transparent;
                color: #383838;
            }
            .default.svelte-j5w4em:hover {
                border-color: #003fe6;
                color: #003fe6;
            }
            .dark.svelte-j5w4em {
                border-color: #e5e5e5;
                background: transparent;
                color: #fff;
            }
            .dark.svelte-j5w4em:hover {
                border-color: #003fe6;
                color: #003fe6;
            }
            .text.svelte-j5w4em {
                border-color: transparent;
                background: transparent;
                color: #003fe6;
            }
            .text.svelte-j5w4em:hover {
                opacity: 0.8;
            }
            .common.svelte-j5w4em {
                border-color: #dbdfe7;
                background: #fff;
                color: #003fe6;
            }
            .common.svelte-j5w4em:hover {
                border-color: #003fe6;
                background: #003fe6;
                color: #fff;
            }
            .primary.svelte-j5w4em {
                border-color: #003fe6;
                background: #003fe6;
                color: #fff;
            }
            .warning.svelte-j5w4em {
                border-color: #ebaf1a;
                background: #ebaf1a;
                color: #fff;
            }
            .danger.svelte-j5w4em {
                border-color: #dc4a45;
                background: #dc4a45;
                color: #fff;
            }
            .white.svelte-j5w4em {
                border-color: #fff;
                background: #fff;
                color: #003fe6;
            }
            .golden.svelte-j5w4em {
                border-color: #f0bb89;
                background: linear-gradient(135deg, #fde3ca 0%, #f0bb89 100%);
                color: #12192a;
            }
            .primary.svelte-j5w4em:hover,
            .warning.svelte-j5w4em:hover,
            .danger.svelte-j5w4em:hover {
                opacity: 0.8;
            }
            .primary.svelte-j5w4em:disabled,
            .warning.svelte-j5w4em:disabled,
            .danger.svelte-j5w4em:disabled {
                opacity: 0.4;
            }
            a.disabled.svelte-j5w4em,
            button.svelte-j5w4em:disabled {
                pointer-events: none;
                opacity: 0.4;
            }
            @keyframes svelte-j5w4em-loading-circle {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
        </style>