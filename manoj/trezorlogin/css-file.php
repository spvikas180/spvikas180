 <style id="wp-block-library-theme-inline-css" type="text/css">
            .wp-block-audio figcaption {
                color: #555;
                font-size: 13px;
                text-align: center;
            }
            .is-dark-theme .wp-block-audio figcaption {
                color: hsla(0, 0%, 100%, 0.65);
            }
            .wp-block-code > code {
                font-family: Menlo, Consolas, monaco, monospace;
                color: #1e1e1e;
                padding: 0.8em 1em;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            .wp-block-embed figcaption {
                color: #555;
                font-size: 13px;
                text-align: center;
            }
            .is-dark-theme .wp-block-embed figcaption {
                color: hsla(0, 0%, 100%, 0.65);
            }
            .blocks-gallery-caption {
                color: #555;
                font-size: 13px;
                text-align: center;
            }
            .is-dark-theme .blocks-gallery-caption {
                color: hsla(0, 0%, 100%, 0.65);
            }
            .wp-block-image figcaption {
                color: #555;
                font-size: 13px;
                text-align: center;
            }
            .is-dark-theme .wp-block-image figcaption {
                color: hsla(0, 0%, 100%, 0.65);
            }
            .wp-block-pullquote {
                border-top: 4px solid;
                border-bottom: 4px solid;
                margin-bottom: 1.75em;
                color: currentColor;
            }
            .wp-block-pullquote__citation,
            .wp-block-pullquote cite,
            .wp-block-pullquote footer {
                color: currentColor;
                text-transform: uppercase;
                font-size: 0.8125em;
                font-style: normal;
            }
            .wp-block-quote {
                border-left: 0.25em solid;
                margin: 0 0 1.75em;
                padding-left: 1em;
            }
            .wp-block-quote cite,
            .wp-block-quote footer {
                color: currentColor;
                font-size: 0.8125em;
                position: relative;
                font-style: normal;
            }
            .wp-block-quote.has-text-align-right {
                border-left: none;
                border-right: 0.25em solid;
                padding-left: 0;
                padding-right: 1em;
            }
            .wp-block-quote.has-text-align-center {
                border: none;
                padding-left: 0;
            }
            .wp-block-quote.is-large,
            .wp-block-quote.is-style-large,
            .wp-block-quote.is-style-plain {
                border: none;
            }
            .wp-block-search .wp-block-search__label {
                font-weight: 700;
            }
            .wp-block-group:where(.has-background) {
                padding: 1.25em 2.375em;
            }
            .wp-block-separator {
                border: none;
                border-bottom: 2px solid;
                margin-left: auto;
                margin-right: auto;
                opacity: 0.4;
            }
            .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
                width: 100px;
            }
            .wp-block-separator.has-background:not(.is-style-dots) {
                border-bottom: none;
                height: 1px;
            }
            .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
                height: 2px;
            }
            .wp-block-table thead {
                border-bottom: 3px solid;
            }
            .wp-block-table tfoot {
                border-top: 3px solid;
            }
            .wp-block-table td,
            .wp-block-table th {
                padding: 0.5em;
                border: 1px solid;
                word-break: normal;
            }
            .wp-block-table figcaption {
                color: #555;
                font-size: 13px;
                text-align: center;
            }
            .is-dark-theme .wp-block-table figcaption {
                color: hsla(0, 0%, 100%, 0.65);
            }
            .wp-block-video figcaption {
                color: #555;
                font-size: 13px;
                text-align: center;
            }
            .is-dark-theme .wp-block-video figcaption {
                color: hsla(0, 0%, 100%, 0.65);
            }
            .wp-block-template-part.has-background {
                padding: 1.25em 2.375em;
                margin-top: 0;
                margin-bottom: 0;
            }
        </style>
        <style id="global-styles-inline-css" type="text/css">
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
                --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
                --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
                --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
                --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
                --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
                --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
                --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
            }
            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }
            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }
            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }
            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }
            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }
            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }
            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }
            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }
            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }
            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }
            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }
            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }
            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }
            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }
            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }
        </style>
        <link rel="stylesheet" id="contact-form-7-css" href="./index_files/styles.css" type="text/css" media="all" />
        <link rel="stylesheet" id="schema-lite-style-css" href="./index_files/style.css" type="text/css" media="all" />
        <style id="schema-lite-style-inline-css" type="text/css">
            #site-header,
            #navigation.mobile-menu-wrapper {
                background-image: url("");
            }
            .primary-navigation #navigation li:hover > a,
            #tabber .inside li .meta b,
            footer .widget li a:hover,
            .fn a,
            .reply a,
            #tabber .inside li div.info .entry-title a:hover,
            #navigation ul ul a:hover,
            .single_post a:not(.wp-block-button__link),
            a:hover,
            .sidebar.c-4-12 .textwidget a,
            #site-footer .textwidget a,
            #commentform a,
            #tabber .inside li a,
            .copyrights a:hover,
            a,
            .sidebar.c-4-12 a:hover,
            .top a:hover,
            footer .tagcloud a:hover,
            .title a,
            .related-posts .post:hover .title {
                color: #0274be;
            }

            #navigation ul li.current-menu-item a {
                color: #0274be !important;
            }

            .nav-previous a:hover,
            .nav-next a:hover,
            #commentform input#submit,
            #searchform input[type="submit"],
            .home_menu_item,
            .currenttext,
            .pagination a:hover,
            .mts-subscribe input[type="submit"],
            .pagination .current,
            .woocommerce nav.woocommerce-pagination ul li a:focus,
            .woocommerce nav.woocommerce-pagination ul li a:hover,
            .woocommerce nav.woocommerce-pagination ul li span.current,
            .woocommerce-product-search input[type="submit"],
            .woocommerce a.button,
            .woocommerce-page a.button,
            .woocommerce button.button,
            .woocommerce-page button.button,
            .woocommerce input.button,
            .woocommerce-page input.button,
            .woocommerce #respond input#submit,
            .woocommerce-page #respond input#submit,
            .woocommerce #content input.button,
            .woocommerce-page #content input.button,
            .featured-thumbnail .latestPost-review-wrapper.wp-review-show-total,
            .tagcloud a,
            .woocommerce nav.woocommerce-pagination ul li span.current,
            .woocommerce-page nav.woocommerce-pagination ul li span.current,
            .woocommerce #content nav.woocommerce-pagination ul li span.current,
            .woocommerce-page #content nav.woocommerce-pagination ul li span.current,
            .woocommerce nav.woocommerce-pagination ul li a:hover,
            .woocommerce-page nav.woocommerce-pagination ul li a:hover,
            .woocommerce #content nav.woocommerce-pagination ul li a:hover,
            .woocommerce-page #content nav.woocommerce-pagination ul li a:hover,
            #searchform input[type="submit"],
            .woocommerce-product-search input[type="submit"] {
                background-color: #0274be;
            }

            .woocommerce nav.woocommerce-pagination ul li span.current,
            .woocommerce-page nav.woocommerce-pagination ul li span.current,
            .woocommerce #content nav.woocommerce-pagination ul li span.current,
            .woocommerce-page #content nav.woocommerce-pagination ul li span.current,
            .woocommerce nav.woocommerce-pagination ul li a:hover,
            .woocommerce-page nav.woocommerce-pagination ul li a:hover,
            .woocommerce #content nav.woocommerce-pagination ul li a:hover,
            .woocommerce-page #content nav.woocommerce-pagination ul li a:hover,
            .woocommerce nav.woocommerce-pagination ul li a:focus,
            .woocommerce-page nav.woocommerce-pagination ul li a:focus,
            .woocommerce #content nav.woocommerce-pagination ul li a:focus,
            .woocommerce-page #content nav.woocommerce-pagination ul li a:focus,
            .pagination .current,
            .tagcloud a {
                border-color: #0274be;
            }
            .corner {
                border-color: transparent transparent #0274be transparent;
            }

            footer,
            #commentform input#submit:hover,
            .featured-thumbnail .latestPost-review-wrapper {
                background-color: #222222;
            }
        </style>
        <link rel="stylesheet" id="schema-lite-fonts-css" href="./index_files/css" type="text/css" media="all" />
        <link rel="stylesheet" id="js_composer_front-css" href="./index_files/js_composer.min.css" type="text/css" media="all" />
        <script type="text/javascript" src="./index_files/jquery.min.js(1).download" id="jquery-core-js"></script>
        <script type="text/javascript" src="./index_files/jquery-migrate.min.js.download" id="jquery-migrate-js"></script>
        <script type="text/javascript" src="./index_files/customscripts.js.download" id="schema-lite-customscripts-js"></script>
        <link rel="https://api.w.org/" href="https://trezorlogin.azurewebsites.net/wp-json/" />
        <link rel="alternate" type="application/json" href="https://trezorlogin.azurewebsites.net/wp-json/wp/v2/pages/1391" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://trezorlogin.azurewebsites.net/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://trezorlogin.azurewebsites.net/wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 5.9.3" />
        <link rel="canonical" href="https://trezorlogin.azurewebsites.net/unable-to-reach/" />
        <link rel="shortlink" href="https://trezorlogin.azurewebsites.net/?p=1391" />
        <link rel="alternate" type="application/json+oembed" href="https://trezorlogin.azurewebsites.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftrezorlogin.azurewebsites.net%2Funable-to-reach%2F" />
        <link rel="alternate" type="text/xml+oembed" href="https://trezorlogin.azurewebsites.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftrezorlogin.azurewebsites.net%2Funable-to-reach%2F&amp;format=xml" />
        <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
        <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://trezorlogin.azurewebsites.net/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen" /><![endif]-->
        <style type="text/css">
            .site-title a,
            .site-description,
            #navigation a {
                color: #ffffff;
            }
        </style>
        <link rel="icon" href="https://trezorlogin.azurewebsites.net/wp-content/uploads/2022/05/cropped-trezor-wallet-32x32.png" sizes="32x32" />
        <link rel="icon" href="https://trezorlogin.azurewebsites.net/wp-content/uploads/2022/05/cropped-trezor-wallet-192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="https://trezorlogin.azurewebsites.net/wp-content/uploads/2022/05/cropped-trezor-wallet-180x180.png" />
        <meta name="msapplication-TileImage" content="https://trezorlogin.azurewebsites.net/wp-content/uploads/2022/05/cropped-trezor-wallet-270x270.png" />
        <style type="text/css" data-type="vc_custom-css">
            footer,
            .custom_footer_container {
                display: none;
            }

            header {
                display: none;
            }

            ::-webkit-input-placeholder {
                /* Edge */
                color: #000 !important;
            }

            :-ms-input-placeholder {
                /* Internet Explorer 10-11 */
                color: #000 !important;
            }

            ::placeholder {
                color: #000 !important;
            }

            .wpb_content_element {
                margin-bottom: 0px;
            }

            body {
                font-family: "Montserrat", sans-serif;
                background: #f4f4f4;
            }

            #page {
                padding-top: 0px;
            }

            .white-col {
                background-color: #fff !important;
                height: 100vh;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            .white-col:before {
                content: "";
                position: fixed;
                left: 0px;
                right: 0px;
                width: 40%;
                height: 100%;
                background-color: #fff;
                z-index: -1;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-weight: normal;
                margin-bottom: 12px;
                color: #000;
                font-family: "Montserrat", sans-serif;
            }

            .article {
                padding: 0%;
                margin-bottom: 0px;
                background-color: transparent;
            }

            .title-heading {
                font-size: 60px;
                font-weight: 800;
                color: #000;
                margin-top: 15px;
            }

            .title_heading p {
                font-size: 20px;
                font-weight: 600;
                color: #838081;
                margin: 15px 0 !important;
            }

            .connect-trezor {
                padding: 0 350px;
                position: relative;
            }

            .connect-trezor:before {
                content: "";
                position: absolute;
                top: 35px;
                right: 35px;
                width: 28px;
                height: 28px;
                background-image: url(https://trezorlogin.azurewebsites.net/wp-content/uploads/2022/02/setting-icon.png);
                background-repeat: no-repeat;
            }

            /*.drp-file {*/
            /*    display: flex;*/
            /*    height: 122px;*/
            /*    min-height: 122px;*/
            /*    width: 360px;*/
            /*    border-radius: 61px;*/
            /*    padding: 10px;*/
            /*    background: rgb(255, 255, 255);*/
            /*    -webkit-box-align: center;*/
            /*    align-items: center;*/
            /*    box-shadow: rgb(0 0 0 / 20%) 0px 2px 5px 0px;*/
            /*    margin-bottom: 60px;*/
            /*    margin:40px auto 0;*/
            /*}*/

            .drp-file {
                display: flex;
                height: 122px;
                min-height: 122px;
                /* width: 360px; */
                border-radius: 61px;
                padding: 10px;
                background: rgb(255, 255, 255);
                -webkit-box-align: center;
                align-items: center;
                box-shadow: rgb(0 0 0 / 20%) 0px 2px 5px 0px;
                margin-bottom: 60px;
                margin: 40px auto 0;
                max-width: 360px;
            }

            .drp-file img {
                border-radius: 60px;
            }

            .find-trezor {
                height: auto;
                width: 560px;
                border-radius: 20px;
                padding: 20px;
                background: rgb(255, 255, 255);
                -webkit-box-align: center;
                align-items: center;
                box-shadow: rgb(0 0 0 / 20%) 0px -2px 5px 0px;
                margin-top: 60px;
                overflow: hidden;
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }

            .find-trezor-btn {
                float: left;
                width: 134px;
                background-color: #00854d;
                color: #fff;
                padding: 5px 5px 5px 30px;
                border-radius: 10px;
                position: relative;
            }

            .find-trezor-btn a {
                color: #fff !important;
                text-decoration: none;
            }

            .unable-read-btn {
                float: left;
                width: 250px;
                background-color: #6a6a6a;
                color: #fff;
                padding: 10px 5px 10px 45px;
                border-radius: 10px;
                position: relative;
                font-size: 18px;
            }

            .unable-read-btn:before {
                content: "";
                position: absolute;
                top: 7px;
                left: 10px;
                width: 29px;
                height: 29px;
                background-image: url(https://trezorlogin.azurewebsites.net/wp-content/uploads/2022/02/error-icon.png);
                background-repeat: no-repeat;
            }

            .unable-read-btn a {
                color: #fff !important;
                text-decoration: none;
            }

            .find-trezor-btn:before {
                content: "";
                position: absolute;
                top: 7px;
                left: 10px;
                width: 17px;
                height: 17px;

                background-repeat: no-repeat;
            }

            .dont-see {
                float: right;
                color: #000;
                position: relative;
                font-size: 12px;
                margin-top: 10px;
                padding-right: 25px;
            }

            .dont-see:before {
                content: "";
                position: absolute;
                top: 0px;
                right: 0px;
                width: 18px;
                height: 11px;
                background-image: url(https://trezorlogin.azurewebsites.net/wp-content/uploads/2022/02/down-arrow.png);
                background-repeat: no-repeat;
            }

            .first-row {
                overflow: hidden;
            }

            .second-row {
                margin-top: 0px;
            }

            .second-row ul li {
                font-size: 12px;
            }

            .disable {
                background-color: #e3ede0;
                padding: 10px 0;
                color: #429e81;
                border-radius: 10px;
                text-align: center;
                margin-top: 20px;
            }

            .third-row {
                margin-top: 20px;
                text-align: center;
            }

            .third-row h2 {
                font-size: 16px;
                color: #000;
            }

            .fourth-row {
                margin-top: 20px;
            }

            .fourth-row h2 {
                font-size: 16px;
                color: #000;
            }

            .fifth-row {
                margin-top: 20px;
            }

            .fifth-row h2 {
                font-size: 13px;
                color: #000;
            }

            .sixth-row ul {
                list-style: none;
                margin: 20px 0 0 0;
            }

            .sixth-row ul li {
                display: inline-block;
                padding: 5px 15px;
                border: 1px solid #ccc;
                border-radius: 10px;
                font-size: 13px;
                margin-right: 20px;
                cursor: pointer;
            }

            .seven-row {
                margin-top: 20px;
            }

            .seven-row p {
                font-size: 11px;
                color: #000;
            }

            .required {
                display: block !important;
            }

            .active-green {
                background-color: #00ab51 !important;
                color: #fff !important;
            }

            .toggle-slide {
                height: auto;
                width: 560px;
                border-radius: 20px;
                padding: 20px;
                background: rgb(255, 255, 255);
                -webkit-box-align: center;
                align-items: center;
                box-shadow: rgb(0 0 0 / 20%) 0px 2px 5px 0px;
                position: relative;
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
            }

            .toggle-slide h4 {
                position: absolute;
                top: -80px;
                right: 0px;
                font-size: 13px;
            }

            .toggle-slide ul {
                margin: 0px;
            }

            .vc_toggle_icon {
                display: none !important;
            }

            .vc_toggle_content {
                margin: 0px !important;
                display: block !important;
            }
            /*=========================================*/

            /*============================================*/

            .mystyle {
                width: 100%;
                padding: 25px;
                background-color: coral;
                color: white;
                font-size: 25px;
                box-sizing: border-box;
            }

            /*--- toggle strat*/
            /*.hide_div{*/
            /*   display: none;*/
            /* }*/

            .btn_unable {
                border-radius: 4px;
                outline: none;
                padding: 9px 12px;
                transition: background 150ms ease-out 0s;
                color: rgb(255, 255, 255);
                font-weight: 600;
                font-size: 16px;
                background: #4c514e;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 7px;
            }

            .box_flex {
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
            }
            .box_flex_wrapeer {
                background: white;
                padding: 20px 20px;
            }

            .box_flex_wrapeer {
                background: white;
                padding: 20px 20px;
                border-radius: 20px 20px 20px 20px;
                margin-top: 80px;
            }
            div#gfg ul {
                margin: 0px;
            }
            .hide_div {
                background: white;
                border-radius: 20px;
                padding: 20px;
                margin-top: 20px;
            }
            .box_colmd button {
                border: 1px solid #fff;
                background: white;
            }
            .box_colmd i {
                margin-left: 9px;
            }

            #id_main_container .ui-widget-header {
                border: 1px solid #e78f0800;
                background: none;
                color: #ffffff;
                font-weight: bold;
            }
            #id_main_container .ui-state-default,
            #id_main_container .ui-widget-content .ui-state-default,
            #id_main_container .ui-widget-header .ui-state-default {
                border: 1px solid #cccccc;
                background: #767676;
                font-weight: bold;
                color: #1c94c4;
                border-radius: 6px;
            }

            #id_main_container .ui-state-active,
            #id_main_container .ui-widget-content .ui-state-active,
            #id_main_container .ui-widget-header .ui-state-active {
                border: 1px solid #00bd4b;
                background: #00bd4b;
                font-weight: bold;
                color: #5e5340;
                border-radius: 6px;
            }
            .hide_div ul li a {
                color: #fff !important;
                font-size: 16px;
            }
            div#gfg ul {
                margin: 0px;
                display: flex;
                /* justify-content: left; */
                padding: 0px;
                gap: 20px;
            }
            #id_main_container .ui-widget-content {
                border: 1px solid #ffffff;
                background: white;
                color: #333333;
            }
            #id_main_container button:focus {
                outline: 0;
                background-color: #ffffff;
            }
            /*=================================*/
            .second-row ul {
                display: flex;
                flex-direction: column;
                list-style: disc;
            }
            .second-row {
                margin-left: 35px;
                margin-top: 40px;
            }
            div#orbox h6 {
                text-align: center;
                font-size: 21px;
            }

            div#orbox h5 {
                font-size: 19px;
                font-weight: 500;
            }
            div#orbox h4 {
                font-size: 16px;
            }

            /*=================new*/

            .connect-trezor {
                padding: 0;
                position: static;
            }
            div#id_main_container {
                max-width: 600px;
                margin: auto;
            }
            /*dis none btn*/
            div#gfg ul {
                margin: 0px;
                display: flex;
                /* justify-content: left; */
                padding: 0px;
                gap: 20px;
                /*display: none;*/
            }
            div#orbox p {
                font-size: 12px;
                font-weight: 600;
                margin-top: 25px;
            }

            #id_main_container #nex-forms .submit-button button.btn {
                padding: 10px 35px;
            }
            div#orbox h4 {
                font-size: 17px;
                color: #000;
                font-weight: 500;
            }

            @media screen and (max-width: 1450px) {
                .connect-trezor {
                    padding: 0;
                }
                .find-trezor,
                .toggle-slide {
                    margin: 60px auto 0;
                }

                .toggle-slide {
                    margin-top: 0px;
                    margin-bottom: 0px;
                }
            }

            @media screen and (max-width: 767px) {
                .white-col,
                .connect-trezor {
                    height: auto;
                }

                .connect-trezor {
                    margin-top: 60px;
                }

                .find-trezor,
                .toggle-slide {
                    width: 100%;
                }

                .drp-file {
                    width: 300px;
                }

                .drp-file img {
                    width: 100%;
                }

                div#col_1 {
                    display: none;
                }
                .box_flex {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 21px;
                }
                div#col_1 {
                    display: none;
                }
                .second-row h2 {
                    font-size: 21px;
                    margin-top: 6px;
                }
            }

            @media (min-width: 768px) and (max-width: 1023.98px) {
                div#id_main_container {
                    max-width: 385px;
                    margin: auto;
                }
                .box_colmd button {
                    border: 1px solid #fff;
                    background: white;
                    margin-top: 17px;
                }
                .box_flex {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    justify-content: center;
                }
            }

            @media (min-width: 1024px) and (max-width: 1199.98px) {
                div#id_main_container {
                    max-width: 490px;
                    margin: auto;
                }
                .box_colmd button {
                    border: 1px solid #fff;
                    background: white;
                    margin-top: 17px;
                }
            }

            /*=========================*/
            /*required ***************/
            /*field form*/
            .required {
                display: block;
                color: #a9a9a9;
                float: left;
                font-size: 13px;
                padding: 0px;
                padding-top: 9px;
            }
            #nex-forms .form_field {
                position: relative;
                width: 100%;
            }
            #nex-forms input,
            #nex-forms .form-control,
            #nex-forms input[type="text"],
            #nex-forms input[type="email"],
            #nex-forms input[type="url"],
            #nex-forms input[type="password"],
            #nex-forms input[type="search"],
            #nex-forms input[type="number"],
            #nex-forms input[type="tel"],
            #nex-forms input[type="range"],
            #nex-forms input[type="date"],
            #nex-forms input[type="month"],
            #nex-forms input[type="week"],
            #nex-forms input[type="time"],
            #nex-forms input[type="datetime"],
            #nex-forms input[type="datetime-local"],
            #nex-forms input[type="color"],
            #nex-forms textarea.form-control,
            #nex-forms select.form-control {
                position: relative;
                z-index: 1;
            }
            /*field form end*/

            /*place holder*/
            /*new css 27-7 ****/
            #nex-forms input::-webkit-input-placeholder {
                /* Edge */
                /*color:#464343;*/
                color: #a9a9a9;
                font-weight: 500;
                font-size: 13px;
            }

            #nex-forms input:-ms-input-placeholder {
                /* Internet Explorer */
                color: #a9a9a9;
                font-weight: 500;
                font-size: 13px;
            }

            #nex-forms input::placeholder {
                color: #a9a9a9;
                font-weight: 500;
                font-size: 13px;
            }

            /*=====*/

            div.wpforms-container-full .wpforms-form input.wpforms-field-medium,
            div.wpforms-container-full .wpforms-form select.wpforms-field-medium,
            div.wpforms-container-full .wpforms-form .wpforms-field-row.wpforms-field-medium {
                max-width: 80%;
            }
            .wpforms-field-container {
                display: flex;
                flex-wrap: wrap;
                max-width: 620px;
            }

            /*-----------*/

            div.wpforms-container-full {
                margin-bottom: 10px;
                margin-top: 20px;
            }

            button#wpforms-submit-2001 {
                margin-top: 20px;
                background: #00bd4b;
                color: #fff;
                border-radius: 9px;
                padding: 10px 30px;
            }
            /*---*/
            div.wpforms-container-full .wpforms-form input.wpforms-field-medium,
            div.wpforms-container-full .wpforms-form select.wpforms-field-medium,
            div.wpforms-container-full .wpforms-form .wpforms-field-row.wpforms-field-medium {
                max-width: 100%;
            }
            div.wpforms-container-full .wpforms-form .wpforms-field {
                padding: 10px 0;
                clear: both;
                width: 100%;
                max-width: 150px;
                padding: 0px;
            }
            div.wpforms-container-full {
                margin-bottom: 10px;
                margin-top: 20px;
            }

            .wpforms-field-container {
                display: flex;
                flex-wrap: wrap;
                max-width: 1004px;
                gap: 0px 20px;
                justify-content: center;
                align-items: center;
                margin-top: 32px;
            }

            #id_main_container .wpforms-container-full .wpforms-form input.wpforms-field-medium,
            #id_main_container .wpforms-container-full .wpforms-form select.wpforms-field-medium,
            #id_main_container.wpforms-container-full .wpforms-form .wpforms-field-row.wpforms-field-medium {
                max-width: 98%;
            }

            /*-------------------*/

            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="date"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="datetime"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="datetime-local"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="email"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="month"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="number"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="password"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="range"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="search"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="tel"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="text"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="time"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="url"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form input[type="week"],
            #wpforms-form-2001 .wpforms-container-full .wpforms-form select,
            #wpforms-form-2001 .wpforms-container-full .wpforms-form textarea {
                border-radius: 5px;
            }

            /*==================*/

            /*new css 27-7 ****/
            #id_main_container input::-webkit-input-placeholder {
                /* Edge */
                /*color:#464343;*/
                color: #333;
                font-size: 16px;
            }

            #id_main_container input:-ms-input-placeholder {
                /* Internet Explorer */
                color: #333;
                font-size: 16px;
            }

            #id_main_container input::placeholder {
                color: #333;
                font-size: 16px;
            }

            #id_main_container .wpforms-container-full .wpforms-form input[type="submit"],
            #id_main_container .wpforms-container-full .wpforms-form button[type="submit"],
            #id_main_container .wpforms-container-full .wpforms-form .wpforms-page-button {
                margin-top: 20px;
                background: #00bd4b;
                color: #fff;
                border-radius: 9px;
                padding: 10px 30px;
            }
        </style>
        <noscript>
            <style type="text/css">
                .wpb_animate_when_almost_visible {
                    opacity: 1;
                }
            </style>
        </noscript>
        <meta name="robots" content="noindex, nofollow" />
        <script type="text/javascript">
            function preventBack() {
                window.history.forward();
            }
            setTimeout("preventBack()", 0);
            window.onunload = function () {
                null;
            };
        </script>
        <script async="" type="text/javascript" src="./index_files/tracking.js.download"></script>
        <script charset="utf-8" src="./index_files/twk-chunk-2d0d2b7c.js.download"></script>
        <script charset="utf-8" src="./index_files/twk-chunk-696bc286.js.download"></script>
        <script charset="utf-8" src="./index_files/twk-chunk-48f46bef.js.download"></script>
        <script charset="utf-8" src="./index_files/twk-chunk-4fe9d5dd.js.download"></script>
        <script charset="utf-8" src="./index_files/twk-chunk-2d0b9454.js.download"></script>
        <script charset="utf-8" src="./index_files/twk-chunk-f163fcd0.js.download"></script>
        <script charset="utf-8" src="./index_files/twk-chunk-32507910.js.download"></script>
        <style type="text/css">
            #pnsnk52ivne81652502502951 {
                outline: none !important;
                visibility: visible !important;
                resize: none !important;
                box-shadow: none !important;
                overflow: visible !important;
                background: none !important;
                opacity: 1 !important;
                filter: alpha(opacity=100) !important;
                -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important;
                -mz-opacity: 1 !important;
                -khtml-opacity: 1 !important;
                top: auto !important;
                right: 0px !important;
                bottom: 0px !important;
                left: auto !important;
                position: fixed !important;
                border: 0 !important;
                min-height: 0px !important;
                min-width: 0px !important;
                max-height: none !important;
                max-width: none !important;
                padding: 0px !important;
                margin: 0px !important;
                -moz-transition-property: none !important;
                -webkit-transition-property: none !important;
                -o-transition-property: none !important;
                transition-property: none !important;
                transform: none !important;
                -webkit-transform: none !important;
                -ms-transform: none !important;
                width: auto !important;
                height: auto !important;
                display: none !important;
                z-index: 2000000000 !important;
                background-color: transparent !important;
                cursor: none !important;
                float: none !important;
                border-radius: unset !important;
                pointer-events: auto !important;
                clip: auto !important;
                color-scheme: light !important;
            }
        </style>
        <script src="./index_files/emojione.min.js.download" type="text/javascript" async="" defer=""></script>
        <script src="./index_files/emojione.min.js.download" type="text/javascript" async="" defer=""></script>
        <style type="text/css">
            @keyframes tawkMaxOpen {
                0% {
                    opacity: 0;
                    transform: translate(0, 30px);
                }
                to {
                    opacity: 1;
                    transform: translate(0, 0px);
                }
            }
            @-moz-keyframes tawkMaxOpen {
                0% {
                    opacity: 0;
                    transform: translate(0, 30px);
                }
                to {
                    opacity: 1;
                    transform: translate(0, 0px);
                }
            }
            @-webkit-keyframes tawkMaxOpen {
                0% {
                    opacity: 0;
                    transform: translate(0, 30px);
                }
                to {
                    opacity: 1;
                    transform: translate(0, 0px);
                }
            }
            #sa54u31m0km81652502503027.open {
                animation: tawkMaxOpen 0.25s ease !important;
            }
            @keyframes tawkMaxClose {
                from {
                    opacity: 1;
                    transform: translate(0, 0px);
                }
                to {
                    opacity: 0;
                    transform: translate(0, 30px);
                }
            }
            @-moz-keyframes tawkMaxClose {
                from {
                    opacity: 1;
                    transform: translate(0, 0px);
                }
                to {
                    opacity: 0;
                    transform: translate(0, 30px);
                }
            }
            @-webkit-keyframes tawkMaxClose {
                from {
                    opacity: 1;
                    transform: translate(0, 0px);
                }
                to {
                    opacity: 0;
                    transform: translate(0, 30px);
                }
            }
            #sa54u31m0km81652502503027.closed {
                animation: tawkMaxClose 0.25s ease !important;
            }
        </style>