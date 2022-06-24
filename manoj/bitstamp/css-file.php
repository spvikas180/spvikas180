
        <style type="text/css">
            .__nuxt-error-page {
                padding: 1rem;
                background: #f7f8fb;
                color: #47494e;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                font-family: sans-serif;
                font-weight: 100 !important;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
                -webkit-font-smoothing: antialiased;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
            }
            .__nuxt-error-page .error {
                max-width: 450px;
            }
            .__nuxt-error-page .title {
                font-size: 1.5rem;
                margin-top: 0.9375rem;
                color: #47494e;
                margin-bottom: 0.5rem;
            }
            .__nuxt-error-page .description {
                color: #7f828b;
                line-height: 1.3125rem;
                margin-bottom: 0.625rem;
            }
            .__nuxt-error-page a {
                color: #7f828b !important;
                text-decoration: none;
            }
            .__nuxt-error-page .logo {
                position: fixed;
                left: 12px;
                bottom: 12px;
            }
        </style>
        <style type="text/css">
            .nuxt-progress {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                height: 2px;
                width: 0;
                opacity: 1;
                transition: width 0.1s, opacity 0.4s;
                background-color: #fff;
                z-index: 999999;
            }
            .nuxt-progress.nuxt-progress-notransition {
                transition: none;
            }
            .nuxt-progress-failed {
                background-color: red;
            }
        </style>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Open + Sans:300, 400, 600, 700);
        </style>
        <style type="text/css">
            :root {
                --aave-purple: #b6509e;
                --ada-blue: #0033ad;
                --algo-black: #000;
                --alpha-blue: #1a45b8;
                --atom-purple: #1b1e36;
                --audio-purple: #b829dd;
                --axs-blue: #0055d5;
                --bal-gray: #262627;
                --band-blue: #516ffa;
                --bat-orange: #ff5001;
                --bch-green: #8dc351;
                --btc-orange: #f7931a;
                --cel-blue: #3a2bc6;
                --celo-green: #35d07f;
                --chia-green: #3aac59;
                --chz-red: #cd0124;
                --comp-green: #060a0d;
                --crv-red: #990200;
                --dai-orange: #f9a606;
                --dgld-yellow: #fbe95e;
                --dot-ping: #e6007a;
                --enj-purple: #7866d5;
                --etc-green: #2fff99;
                --eth-blue: #627eea;
                --eth2-purple: #a766a8;
                --eurt-green: #50af95;
                --fet-grey: #1f2944;
                --flr-blue: #353a69;
                --ftt-blue: #63d1e5;
                --grt-purple: #6647ed;
                --gusd-blue: #00dcfa;
                --hbar-black: #000;
                --keep-green: #48dbb4;
                --knc-green: #31cb9e;
                --link-blue: #2a5bda;
                --lrc-blue: #1c42ff;
                --ltc-gray: #bfbbbb;
                --luna-yellow: #fed73d;
                --mana-yellow: #ffc95b;
                --matic-purple: #8247e5;
                --mkr-green: #4fa89b;
                --nxm-gray: #2d2d2d;
                --omg-gray: #101010;
                --pax-green: #51b849;
                --paxg-yellow: #efe815;
                --rep-green: #2ae7a8;
                --rgt-black: #000;
                --sand-blue: #00adef;
                --skl-green: #2e2e2e;
                --slp-brown: #7bbaa4;
                --snx-blue: #00d1ff;
                --sol-green: #00ffa3;
                --sxp-orange: #f68e1d;
                --storj-blue: #276cff;
                --sushi-blue: #0e0f23;
                --uma-red: #ff4a4a;
                --uni-pink: #ff007a;
                --usdc-blue: #2775ca;
                --usdt-green: #50af95;
                --xlm-gray: #4e4e4e;
                --xrp-gray: #7e7e7e;
                --xtz-blue: #2c7df7;
                --yfi-blue: #006ae3;
                --zec-orange: #f4b728;
                --zrx-gray: #343434;
                --black: #000;
                --gray-92: #101414;
                --gray-89: #181b1c;
                --gray-85: #252525;
                --gray-82: #2a2d2f;
                --gray-80: #333433;
                --gray-74: #424242;
                --gray-70: #4c4c4c;
                --gray-68: #515151;
                --gray-62: #616161;
                --gray-60: #666;
                --gray-58: #686b68;
                --gray-57: #63666d;
                --gray-46: #898989;
                --gray-44: #878c8f;
                --gray-40: #999;
                --gray-37: #a0a0a0;
                --gray-31: #afafaf;
                --gray-27: #b9b9b9;
                --gray-24: #c1c1c1;
                --gray-16: #d6d7d6;
                --gray-15: #dadcda;
                --gray-11: #e1e3e2;
                --gray-8: #eaeaea;
                --gray-7: #ececec;
                --gray-5: #f1f1f1;
                --gray-2: #fafafa;
                --white: #fff;
                --green: #159e49;
                --green-light: #25a54b;
                --green-lighter: #26cc6c;
                --green-dark: #168e42;
                --green-very-light: #e7f5ec;
                --blue: #64afff;
                --blue-light: #6ab9ff;
                --blue-lighter: #81cbff;
                --blue-very-light: #eff7ff;
                --blue-dark: #599ae2;
                --red: #ff4521;
                --red-base: #f05435;
                --red-light: #ff5d2f;
                --red-lighter: #ff763d;
                --red-dark: #e13d1e;
                --red-soft: #df454b;
                --red-very-soft: #ee9a9e;
                --red-very-light: #fdeeeb;
                --orange: #ffa02e;
                --orange-light: #ffb03c;
                --orange-very-white: #fff5ea;
                --light-grayish-cyan: #ebf4f6;
                --dark-grayish-blue-71: #42474a;
                --dark-grayish-blue-75: #3a3c40;
                --dark-grayish-blue-56: #686d70;
                --default-font-family: "Open Sans", -apple-system, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", arial, sans-serif;
                --code-font-family: menlo, monaco, consolas, "Courier New", monospace;
                --outline-transparency: 23%;
                --primary-color: var(--green);
                --primary-outline-color: rgba(21, 158, 73, 0.23);
                --primary-hover-color: var(--green-light);
                --primary-pressed-color: var(--green-light);
                --primary-color-transparent: rgba(21, 158, 73, 0.1);
                --primary-background-light: var(--green-very-light);
                --secondary-color: var(--blue);
                --secondary-outline-color: rgba(100, 175, 255, 0.23);
                --secondary-hover-color: var(--blue-light);
                --secondary-pressed-color: var(--blue-light);
                --secondary-color-transparent: rgba(100, 175, 255, 0.15);
                --secondary-background-light: var(--blue-very-light);
                --tertiary-color: var(--red-base);
                --tertiary-outline-color: rgba(240, 84, 53, 0.23);
                --tertiary-hover-color: var(--red-light);
                --tertiary-pressed-color: var(--red-light);
                --tertiary-color-transparent: rgba(255, 69, 33, 0.15);
                --warning-color: var(--orange);
                --warning-outline-color: rgba(255, 160, 46, 0.23);
                --warning-hover-color: var(--orange-light);
                --warning-pressed-color: var(--orange);
                --warning-color-transparent: rgba(255, 160, 46, 0.1);
                --warning-background-light: var(--orange-very-white);
                --success-color: var(--green);
                --info-color: var(--blue);
                --text-color: var(--gray-80);
                --text-color-bright: var(--white);
                --text-color-lighter: var(--gray-16);
                --text-color-light: var(--gray-27);
                --text-color-regular: var(--gray-58);
                --text-color-medium: var(--gray-46);
                --text-color-medium-light: var(--gray-37);
                --text-color-medium-dark: var(--gray-60);
                --text-color-dark: var(--gray-70);
                --text-size-tiny: 0.55rem;
                --text-size-xs: 0.625rem;
                --text-size-small: 0.75rem;
                --text-size-normal: 0.875rem;
                --text-size-base: 1rem;
                --text-size-medium: 1.125rem;
                --text-size-big: 1.25rem;
                --text-size-bigger: 1.375rem;
                --text-size-title-secondary-small: 1.375;
                --text-size-title-small: 1.5rem;
                --text-size-title-secondary: 1.5rem;
                --text-size-large: 1.625rem;
                --text-size-title: 1.6875rem;
                --title-color: var(--gray-80);
                --subtitle-color: var(--gray-37);
                --link-color: var(--blue);
                --link-hover-color: #3195ff;
                --link-disabled-color: var(--gray-15);
                --buy-color: var(--green);
                --buy-color-transparent-80: rgba(21, 158, 73, 0.8);
                --sell-color: var(--red);
                --sell-color-transparent-80: rgba(255, 69, 33, 0.8);
                --error-color: var(--red);
                --error-color-transparent: rgba(255, 69, 33, 0.1);
                --error-background-light: var(--red-very-light);
                --background-color: var(--white);
                --background-color-transparent: hsla(0, 0%, 100%, 0.75);
                --background-color-transparent-medium: hsla(0, 0%, 53.7%, 0.3);
                --background-color-lighter: var(--gray-2);
                --background-color-light: var(--gray-11);
                --background-color-medium: var(--gray-80);
                --background-color-dark: var(--gray-82);
                --background-color-darker: var(--gray-85);
                --border-color: var(--gray-15);
                --border-color-lighter: var(--gray-5);
                --border-color-light: var(--gray-16);
                --border-color-regular: var(--gray-37);
                --border-color-medium: var(--gray-46);
                --border-color-dark: var(--gray-80);
                --border-radius: 5px;
                --border-radius-small: 3px;
                --button-border-radius: 4px;
                --button-border-radius-rounded: 5em;
                --button-icon-size: 50px;
                --button-icon-color: var(--white);
                --button-icon-active-color: #f2f2f2;
                --button-text-color: var(--white);
                --button-text-color-disabled: hsla(0, 0%, 100%, 0.6);
                --dropdown-color: var(--white);
                --dropdown-active-color: var(--gray-2);
                --dropdown-background-color: var(--gray-7);
                --input-label-color: var(--gray-80);
                --input-placeholder-color: var(--gray-37);
                --input-disabled-color: var(--gray-15);
                --input-border-color: var(--gray-37);
                --input-border-color-empty: var(--gray-31);
                --input-border-color-focused: var(--gray-80);
                --input-border-color-readonly: var(--gray-11);
                --input-hover-color: #6d6d6d;
                --switch-width: 2.25rem;
                --switch-height: 1.25rem;
                --switch-padding: 2px;
                --switch-color: var(--gray-15);
                --switch-active-color: var(--primary-color);
                --switch-handle-color: var(--white);
                --switch-handle-shadow: rgba(42, 45, 47, 0.5);
                --switch-border-color: transparent;
                --switch-focus-outline-color: var(--border-color-regular);
                --radio-button-size: 21px;
                --checkbox-size: 24px;
                --icon-size: 21px;
                --icon-size-small: 12px;
                --icon-size-medium: 64px;
                --icon-size-big: 96px;
                --icon-size-large: 128px;
                --tab-selector-height: 2px;
                --aave-primary-color: var(--aave-purple);
                --ada-primary-color: var(--ada-blue);
                --algo-primary-color: var(--algo-black);
                --alpha-primary-color: var(--alpha-blue);
                --atom-primary-color: var(--atom-purple);
                --audio-primary-color: var(--audio-purple);
                --axs-primary-color: var(--axs-blue);
                --bal-primary-color: var(--bal-gray);
                --band-primary-color: var(--band-blue);
                --bat-primary-color: var(--bat-orange);
                --bch-primary-color: var(--bch-green);
                --btc-primary-color: var(--btc-orange);
                --cel-primary-color: var(--cel-blue);
                --celo-primary-color: var(--celo-green);
                --chz-primary-color: var(--chz-red);
                --chia-primary-color: var(--chia-green);
                --comp-primary-color: var(--comp-green);
                --crv-primary-color: var(--crv-red);
                --dai-primary-color: var(--dai-orange);
                --dgld-primary-color: var(--dgld-yellow);
                --dot-primary-color: var(--dot-ping);
                --enj-primary-color: var(--enj-purple);
                --etc-primary-color: var(--etc-green);
                --eth-primary-color: var(--eth-blue);
                --eth2-primary-color: var(--eth2-purple);
                --eurt-primary-color: var(--eurt-green);
                --fet-primary-color: var(--fet-grey);
                --flr-primary-color: var(--flr-blue);
                --ftt-primary-color: var(--ftt-blue);
                --grt-primary-color: var(--grt-purple);
                --gusd-primary-color: var(--gusd-blue);
                --hbar-primary-color: var(--hbar-black);
                --keep-primary-color: var(--keep-green);
                --knc-primary-color: var(--knc-green);
                --link-primary-color: var(--link-blue);
                --lrc-primary-color: var(--lrc-blue);
                --ltc-primary-color: var(--ltc-gray);
                --luna-primary-color: var(--luna-yellow);
                --mana-primary-color: var(--mana-yellow);
                --matic-primary-color: var(--matic-purple);
                --mkr-primary-color: var(--mkr-green);
                --nxm-primary-color: var(--nxm-gray);
                --omg-primary-color: var(--omg-gray);
                --pax-primary-color: var(--pax-green);
                --paxg-primary-color: var(--paxg-yellow);
                --rep-primary-color: var(--rep-green);
                --rgt-primary-color: var(--rgt-black);
                --sand-primary-color: var(--sand-blue);
                --skl-primary-color: var(--skl-green);
                --slp-primary-color: var(--slp-brown);
                --snx-primary-color: var(--snx-blue);
                --sol-primary-color: var(--sol-green);
                --storj-primary-color: var(--storj-blue);
                --sushi-primary-color: var(--sushi-blue);
                --sxp-primary-color: var(--sxp-orange);
                --uma-primary-color: var(--uma-red);
                --uni-primary-color: var(--uni-pink);
                --usdc-primary-color: var(--usdc-blue);
                --usdt-primary-color: var(--usdt-green);
                --xlm-primary-color: var(--xlm-gray);
                --xrp-primary-color: var(--xrp-gray);
                --xtz-primary-color: var(--xtz-blue);
                --yfi-primary-color: var(--yfi-blue);
                --zec-primary-color: var(--zec-orange);
                --zrx-primary-color: var(--zrx-gray);
                --divider-color: var(--gray-27);
                --progress-bar-color: var(--gray-7);
                --shadow-color: var(--black);
                --shadow-color-light: var(--gray-5);
                --shadow: rgba(0, 0, 0, 0.3);
                --shadow-light: rgba(0, 0, 0, 0.2);
                --shadow-lighter: rgba(0, 0, 0, 0.1);
                --shadow-opacity-5: rgba(0, 0, 0, 0.05);
                --modal-border-radius: 8px;
                --modal-background-color: var(--white);
                --modal-backdrop-color: hsla(0, 0%, 100%, 0.75);
                --card-background-color: var(--white);
                --table-text-size: var(--text-size-small);
                --table-backoffice-text-size: var(--text-size-base);
                --table-text-color: var(--gray-58);
                --table-text-color-dark: var(--gray-82);
                --table-header-color: var(--gray-24);
                --table-strong-color: var(--gray-80);
                --table-hover-color: var(--gray-2);
                --table-columns-separator: var(--gray-11);
                --table-info-background-header: var(--gray-5);
                --table-info-background-row: var(--gray-2);
                --trend-up-color: var(--green-dark);
                --trend-up-color-dark-theme: var(--green-light);
                --trend-up-color-timeframe-dark-theme: var(--green-lighter);
                --trend-up-background-color: rgba(22, 142, 66, 0.13);
                --trend-down-color: var(--red);
                --trend-down-color-dark-theme: var(--red-soft);
                --trend-down-color-timeframe-dark-theme: var(--red-very-soft);
                --trend-down-background-color: rgba(255, 69, 33, 0.13);
                --trend-down-background-color-dark: rgba(255, 69, 33, 0.13);
                --date-picker-width: 300px;
                --date-picker-background-color: var(--background-color);
                --date-picker-from-to-color: var(--blue-light);
                --date-picker-range-color: var(--gray-5);
                --date-picker-today-color: var(--gray-16);
                --date-picker-nav-color: rgba(0, 0, 0, 0.9);
                --date-picker-disabled-color: rgba(51, 52, 51, 0.1);
                --toast-background: var(--white);
                --toast-timer-transparency: 0.4;
                --z-height-scrollbar: 5;
                --z-height-banner: 20;
                --z-height-toasts: 10000;
                --font-weight-light: 300;
                --font-weight-normal: 400;
                --font-weight-medium: 600;
                --font-weight-bold: 700;
                --transition-time-quick: 0.25s;
                --default-transition-time: 0.4s;
                --default-transition-curve: cubic-bezier(0.25, 0.8, 0.25, 1);
                --step-transition-curve: cubic-bezier(0.455, 0.03, 0.515, 0.955);
                --gutter: 6px;
                --grid-columns-count: 12;
                --spacing-sizes: 0, 4, 8, 16, 24, 32, 40, 48, 56, 64, 72, 80, 88, 96, 104, 112, 120;
                --spacing-classes: (p, pt, pr, pb, pl, m, mt, mr, mb, ml), (padding, padding-top, padding-right, padding-bottom, padding-left, margin, margin-top, margin-right, margin-bottom, margin-left);
                --flex-justify-contents: (start, end, center, between, around), (flex-start, flex-end, center, space-between, space-around);
                --flex-align-items: (start, end, center, stretch, baseline), (flex-start, flex-end, center, stretch, baseline);
                --flex-align-contents: (start, end, center, stretch, between, around), (flex-start, flex-end, center, stretch, space-between, space-around);
                --flex-directions: (row, row-reverse, column, column-reverse);
                --flex-wrap: (nowrap, wrap, wrap-reverse);
                --grid-gutter: 0.5rem;
                --grid-gutter-l: calc(var(--grid-gutter) * 2);
                --container-padding: 1.5rem;
                --content-box-padding: 2rem;
                --content-box-margin: var(--grid-gutter-l);
                --content-box-header-height: 3rem;
                --content-box-title-size: 1.25rem;
                --header-height: 40px;
                --header-blue-color: var(--blue);
                --header-dropdown-border-radius: 0.3125rem;
                --header-dropdown-border-color: var(--gray-92);
                --header-dropdown-background-color: var(--white);
                --header-dropdown-border-color-light: var(--gray-5);
                --header-dropdown-text-color: var(--gray-82);
                --header-dropdown-icon-color: var(--gray-68);
                --header-dropdown-triger-color: var(--gray-37);
                --header-dropdown-triger-hover-color: var(--gray-46);
                --header-dropdown-triger-active-color: var(--gray-82);
                --pairs-dropdown-header-height: 1.75rem;
                --pairs-dropdown-item-active-background-color: var(--gray-82);
                --pairs-dropdown-item-active-border-color: var(--green);
                --pairs-dropdown-border-color: var(--gray-5);
                --pairs-dropdown-text-color: var(--gray-80);
                --pairs-dropdown-input-color: var(--gray-2);
                --pairs-dropdown-input-border-color: var(--gray-5);
                --pairs-dropdown-focused-input-border-color: var(--gray-24);
                --pairs-dropdown-item-background-color: var(--white);
                --pairs-dropdown-item-hover-background-color: var(--gray-2);
                --pairs-dropdown-favorite-color: var(--gray-24);
                --pairs-dropdown-favorite-active-color: var(--orange-light);
                --pair-filter-item-color: var(--gray-11);
                --pair-filter-item-hover-color: hsla(0, 0%, 72.5%, 0.6);
                --pair-filter-item-active-color: var(--gray-24);
                --account-selector-padding: 1rem;
                --account-selector-gap-size: 0.5rem;
                --account-selector-separator: var(--gray-5);
                --account-selector-total-balance-background: var(--gray-2);
                --account-selector-item-hover-background-color: var(--gray-2);
                --account-selector-item-selected-background-color: var(--gray-5);
                --scrollbar-width: 0.375rem;
                --scrollbar-color: var(--dark-grayish-blue-56);
                --scrollbar-hover-color: var(--gray-40);
                --scrollbar-rail-color: var(--dark-grayish-blue-75);
                --scrollbar-border-color: transparent;
                --hcaptcha-terms-link-color: var(--gray-82);
                --chart-positive-color: var(--green);
                --chart-negative-color: var(--red);
                --chart-neutral-color: var(--gray-24);
                --chart-average-color: var(--blue);
                --chart-zero-balance-color: var(--orange);
                --chart-legend-text-color: var(--gray-31);
                --indicator-green: var(--green);
                --indicator-yellow: var(--orange);
                --indicator-red: var(--red);
                --indicator-gray: var(--gray-24);
                --indicator-black: var(--black);
                --indicator-blue: var(--blue);
                --staking-currency-text-color: var(--gray-31);
                --tax-report-notice-text-color: var(--gray-31);
                --otc-quote-text-color: var(--gray-80);
                --otc-empty-input-border-color: var(--gray-31);
                --otc-request-box-text-color: var(--gray-82);
                --otc-history-table-time-text-color: var(--gray-31);
                --referral-banner-title-color: var(--gray-82);
                --referral-banner-text-color: var(--gray-89);
                --accordion-caret-color: var(--gray-82);
                --asset-table-title-row-color: var(--gray-31);
                --asset-table-border-color: var(--gray-7);
                --asset-table-subtext-color: var(--gray-31);
                --asset-table-loading-color-light: var(--gray-11);
                --asset-table-loading-color-dark: var(--gray-24);
                --asset-table-sort-icon: var(--gray-16);
                --asset-table-sort-icon-active: var(--gray-58);
                --asset-table-default-tag-background: var(--gray-7);
                --asset-table-default-tag-color: var(--gray-44);
                --asset-table-categories-button-color: var(--gray-5);
                --asset-table-categories-button-active-color: var(--white);
                --asset-table-categories-button-text-color: var(--gray-62);
                --favourites-table-star-color-active: var(--orange-light);
                --favourites-table-star-color-stroke: var(--gray-24);
                --resource-table-input-color: var(--gray-62);
                --user-dashboard-total-header: var(--gray-31);
                --user-dashboard-text: var(--gray-89);
                --user-dashboard-subtitle-text: var(--gray-31);
                --user-dashboard-activation-completed-background: var(--gray-5);
                --user-dashboard-activation-active-background: var(--white);
                --user-dashboard-activation-disabled-text-color: var(--gray-31);
                --user-dashboard-percent-color-positive: var(--green);
                --user-dashboard-percent-color-negative: var(--red-base);
                --user-dashboard-table-footer-background: var(--gray-5);
                --user-dashboard-table-footer-text: var(--gray-62);
                --general-notification-dismiss-color: var(--gray-31);
                --tag-default-background-color: var(--gray-5);
                --tag-default-text-color: var(--gray-37);
                --tag-dark-background-color: var(--gray-80);
                --tag-dark-text-color: var(--gray-31);
                --tag-border-radius: 5em;
                --row-placeholder-color-light: var(--gray-11);
                --row-placeholder-color-dark: var(--gray-24);
                --asset-card-category-selector-background: var(--gray-5);
                --asset-card-category-selector-text: var(--gray-31);
                --asset-card-border-color: var(--gray-7);
                --landing-table-footer-background: var(--gray-5);
                --landing-table-dark-footer-background: var(--gray-82);
                --landing-table-dark-border: var(--gray-89);
                --landing-table-dark-background: var(--gray-85);
                --landing-table-dark-text: var(--gray-2);
                --portfolio-chart-fill: var(--blue-very-light);
                --portfolio-chart-line: var(--blue);
                --simple-buy-primary-color: var(--green);
                --simple-buy-black-color: var(--black);
                --simple-buy-text-color: var(--gray-80);
                --simple-buy-text-color-light: var(--gray-27);
                --simple-buy-border-color-light: var(--gray-16);
                --simple-buy-border-color-lighter: var(--gray-11);
                --simple-buy-error-background-light: var(--red-very-light);
                --simple-buy-error-color: var(--red);
                --simple-buy-header-blue-color: var(--blue);
                --simple-buy-header-dropdown-text-color: var(--gray-82);
                --simple-buy-secondary-color-transparent: rgba(100, 175, 255, 0.15);
                --simple-buy-pairs-dropdown-item-background-color: var(--white);
                --simple-buy-pairs-dropdown-item-hover-background-color: var(--gray-2);
                --simple-buy-subtext-color: var(--gray-31);
                --simple-buy-link-color: var(--blue);
                --simple-buy-button-text-color: var(--white);
            }
            html {
                font-family: var(--default-font-family);
                font-size: var(--text-size-base);
                word-spacing: 1px;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                box-sizing: border-box;
            }
            *,
            :after,
            :before {
                box-sizing: border-box;
                margin: 0;
            }
            body {
                font-size: 100%;
                overflow-x: hidden;
                color: var(--text-color);
            }
            body,
            li,
            ul {
                margin: 0;
                padding: 0;
            }
            .transition--active {
                overflow: hidden;
            }
            input:-webkit-autofill:active,
            input:-webkit-autofill:first-line,
            input:-webkit-autofill:focus,
            input:-webkit-autofill:hover {
                -webkit-box-shadow: 0 0 0 0 transparent inset;
                -webkit-text-fill-color: var(--text-color);
                font-family: var(--default-font-family);
                font-size: var(--text-size-base);
                letter-spacing: 0.0625rem;
            }
            .p0 {
                padding: 0;
            }
            .p4 {
                padding: 0.25rem;
            }
            .p8 {
                padding: 0.5rem;
            }
            .p16 {
                padding: 1rem;
            }
            .p24 {
                padding: 1.5rem;
            }
            .p32 {
                padding: 2rem;
            }
            .p40 {
                padding: 2.5rem;
            }
            .p48 {
                padding: 3rem;
            }
            .p56 {
                padding: 3.5rem;
            }
            .p64 {
                padding: 4rem;
            }
            .p72 {
                padding: 4.5rem;
            }
            .p80 {
                padding: 5rem;
            }
            .p88 {
                padding: 5.5rem;
            }
            .p96 {
                padding: 6rem;
            }
            .p104 {
                padding: 6.5rem;
            }
            .p112 {
                padding: 7rem;
            }
            .p120 {
                padding: 7.5rem;
            }
            .pt0 {
                padding-top: 0;
            }
            .pt4 {
                padding-top: 0.25rem;
            }
            .pt8 {
                padding-top: 0.5rem;
            }
            .pt16 {
                padding-top: 1rem;
            }
            .pt24 {
                padding-top: 1.5rem;
            }
            .pt32 {
                padding-top: 2rem;
            }
            .pt40 {
                padding-top: 2.5rem;
            }
            .pt48 {
                padding-top: 3rem;
            }
            .pt56 {
                padding-top: 3.5rem;
            }
            .pt64 {
                padding-top: 4rem;
            }
            .pt72 {
                padding-top: 4.5rem;
            }
            .pt80 {
                padding-top: 5rem;
            }
            .pt88 {
                padding-top: 5.5rem;
            }
            .pt96 {
                padding-top: 6rem;
            }
            .pt104 {
                padding-top: 6.5rem;
            }
            .pt112 {
                padding-top: 7rem;
            }
            .pt120 {
                padding-top: 7.5rem;
            }
            .pr0 {
                padding-right: 0;
            }
            .pr4 {
                padding-right: 0.25rem;
            }
            .pr8 {
                padding-right: 0.5rem;
            }
            .pr16 {
                padding-right: 1rem;
            }
            .pr24 {
                padding-right: 1.5rem;
            }
            .pr32 {
                padding-right: 2rem;
            }
            .pr40 {
                padding-right: 2.5rem;
            }
            .pr48 {
                padding-right: 3rem;
            }
            .pr56 {
                padding-right: 3.5rem;
            }
            .pr64 {
                padding-right: 4rem;
            }
            .pr72 {
                padding-right: 4.5rem;
            }
            .pr80 {
                padding-right: 5rem;
            }
            .pr88 {
                padding-right: 5.5rem;
            }
            .pr96 {
                padding-right: 6rem;
            }
            .pr104 {
                padding-right: 6.5rem;
            }
            .pr112 {
                padding-right: 7rem;
            }
            .pr120 {
                padding-right: 7.5rem;
            }
            .pb0 {
                padding-bottom: 0;
            }
            .pb4 {
                padding-bottom: 0.25rem;
            }
            .pb8 {
                padding-bottom: 0.5rem;
            }
            .pb16 {
                padding-bottom: 1rem;
            }
            .pb24 {
                padding-bottom: 1.5rem;
            }
            .pb32 {
                padding-bottom: 2rem;
            }
            .pb40 {
                padding-bottom: 2.5rem;
            }
            .pb48 {
                padding-bottom: 3rem;
            }
            .pb56 {
                padding-bottom: 3.5rem;
            }
            .pb64 {
                padding-bottom: 4rem;
            }
            .pb72 {
                padding-bottom: 4.5rem;
            }
            .pb80 {
                padding-bottom: 5rem;
            }
            .pb88 {
                padding-bottom: 5.5rem;
            }
            .pb96 {
                padding-bottom: 6rem;
            }
            .pb104 {
                padding-bottom: 6.5rem;
            }
            .pb112 {
                padding-bottom: 7rem;
            }
            .pb120 {
                padding-bottom: 7.5rem;
            }
            .pl0 {
                padding-left: 0;
            }
            .pl4 {
                padding-left: 0.25rem;
            }
            .pl8 {
                padding-left: 0.5rem;
            }
            .pl16 {
                padding-left: 1rem;
            }
            .pl24 {
                padding-left: 1.5rem;
            }
            .pl32 {
                padding-left: 2rem;
            }
            .pl40 {
                padding-left: 2.5rem;
            }
            .pl48 {
                padding-left: 3rem;
            }
            .pl56 {
                padding-left: 3.5rem;
            }
            .pl64 {
                padding-left: 4rem;
            }
            .pl72 {
                padding-left: 4.5rem;
            }
            .pl80 {
                padding-left: 5rem;
            }
            .pl88 {
                padding-left: 5.5rem;
            }
            .pl96 {
                padding-left: 6rem;
            }
            .pl104 {
                padding-left: 6.5rem;
            }
            .pl112 {
                padding-left: 7rem;
            }
            .pl120 {
                padding-left: 7.5rem;
            }
            .m0 {
                margin: 0;
            }
            .m4 {
                margin: 0.25rem;
            }
            .m8 {
                margin: 0.5rem;
            }
            .m16 {
                margin: 1rem;
            }
            .m24 {
                margin: 1.5rem;
            }
            .m32 {
                margin: 2rem;
            }
            .m40 {
                margin: 2.5rem;
            }
            .m48 {
                margin: 3rem;
            }
            .m56 {
                margin: 3.5rem;
            }
            .m64 {
                margin: 4rem;
            }
            .m72 {
                margin: 4.5rem;
            }
            .m80 {
                margin: 5rem;
            }
            .m88 {
                margin: 5.5rem;
            }
            .m96 {
                margin: 6rem;
            }
            .m104 {
                margin: 6.5rem;
            }
            .m112 {
                margin: 7rem;
            }
            .m120 {
                margin: 7.5rem;
            }
            .mt0 {
                margin-top: 0;
            }
            .mt4 {
                margin-top: 0.25rem;
            }
            .mt8 {
                margin-top: 0.5rem;
            }
            .mt16 {
                margin-top: 1rem;
            }
            .mt24 {
                margin-top: 1.5rem;
            }
            .mt32 {
                margin-top: 2rem;
            }
            .mt40 {
                margin-top: 2.5rem;
            }
            .mt48 {
                margin-top: 3rem;
            }
            .mt56 {
                margin-top: 3.5rem;
            }
            .mt64 {
                margin-top: 4rem;
            }
            .mt72 {
                margin-top: 4.5rem;
            }
            .mt80 {
                margin-top: 5rem;
            }
            .mt88 {
                margin-top: 5.5rem;
            }
            .mt96 {
                margin-top: 6rem;
            }
            .mt104 {
                margin-top: 6.5rem;
            }
            .mt112 {
                margin-top: 7rem;
            }
            .mt120 {
                margin-top: 7.5rem;
            }
            .mr0 {
                margin-right: 0;
            }
            .mr4 {
                margin-right: 0.25rem;
            }
            .mr8 {
                margin-right: 0.5rem;
            }
            .mr16 {
                margin-right: 1rem;
            }
            .mr24 {
                margin-right: 1.5rem;
            }
            .mr32 {
                margin-right: 2rem;
            }
            .mr40 {
                margin-right: 2.5rem;
            }
            .mr48 {
                margin-right: 3rem;
            }
            .mr56 {
                margin-right: 3.5rem;
            }
            .mr64 {
                margin-right: 4rem;
            }
            .mr72 {
                margin-right: 4.5rem;
            }
            .mr80 {
                margin-right: 5rem;
            }
            .mr88 {
                margin-right: 5.5rem;
            }
            .mr96 {
                margin-right: 6rem;
            }
            .mr104 {
                margin-right: 6.5rem;
            }
            .mr112 {
                margin-right: 7rem;
            }
            .mr120 {
                margin-right: 7.5rem;
            }
            .mb0 {
                margin-bottom: 0;
            }
            .mb4 {
                margin-bottom: 0.25rem;
            }
            .mb8 {
                margin-bottom: 0.5rem;
            }
            .mb16 {
                margin-bottom: 1rem;
            }
            .mb24 {
                margin-bottom: 1.5rem;
            }
            .mb32 {
                margin-bottom: 2rem;
            }
            .mb40 {
                margin-bottom: 2.5rem;
            }
            .mb48 {
                margin-bottom: 3rem;
            }
            .mb56 {
                margin-bottom: 3.5rem;
            }
            .mb64 {
                margin-bottom: 4rem;
            }
            .mb72 {
                margin-bottom: 4.5rem;
            }
            .mb80 {
                margin-bottom: 5rem;
            }
            .mb88 {
                margin-bottom: 5.5rem;
            }
            .mb96 {
                margin-bottom: 6rem;
            }
            .mb104 {
                margin-bottom: 6.5rem;
            }
            .mb112 {
                margin-bottom: 7rem;
            }
            .mb120 {
                margin-bottom: 7.5rem;
            }
            .ml0 {
                margin-left: 0;
            }
            .ml4 {
                margin-left: 0.25rem;
            }
            .ml8 {
                margin-left: 0.5rem;
            }
            .ml16 {
                margin-left: 1rem;
            }
            .ml24 {
                margin-left: 1.5rem;
            }
            .ml32 {
                margin-left: 2rem;
            }
            .ml40 {
                margin-left: 2.5rem;
            }
            .ml48 {
                margin-left: 3rem;
            }
            .ml56 {
                margin-left: 3.5rem;
            }
            .ml64 {
                margin-left: 4rem;
            }
            .ml72 {
                margin-left: 4.5rem;
            }
            .ml80 {
                margin-left: 5rem;
            }
            .ml88 {
                margin-left: 5.5rem;
            }
            .ml96 {
                margin-left: 6rem;
            }
            .ml104 {
                margin-left: 6.5rem;
            }
            .ml112 {
                margin-left: 7rem;
            }
            .ml120 {
                margin-left: 7.5rem;
            }
            @media (min-width: 769px) {
                .p0-lg {
                    padding: 0;
                }
                .p4-lg {
                    padding: 0.25rem;
                }
                .p8-lg {
                    padding: 0.5rem;
                }
                .p16-lg {
                    padding: 1rem;
                }
                .p24-lg {
                    padding: 1.5rem;
                }
                .p32-lg {
                    padding: 2rem;
                }
                .p40-lg {
                    padding: 2.5rem;
                }
                .p48-lg {
                    padding: 3rem;
                }
                .p56-lg {
                    padding: 3.5rem;
                }
                .p64-lg {
                    padding: 4rem;
                }
                .p72-lg {
                    padding: 4.5rem;
                }
                .p80-lg {
                    padding: 5rem;
                }
                .p88-lg {
                    padding: 5.5rem;
                }
                .p96-lg {
                    padding: 6rem;
                }
                .p104-lg {
                    padding: 6.5rem;
                }
                .p112-lg {
                    padding: 7rem;
                }
                .p120-lg {
                    padding: 7.5rem;
                }
                .pt0-lg {
                    padding-top: 0;
                }
                .pt4-lg {
                    padding-top: 0.25rem;
                }
                .pt8-lg {
                    padding-top: 0.5rem;
                }
                .pt16-lg {
                    padding-top: 1rem;
                }
                .pt24-lg {
                    padding-top: 1.5rem;
                }
                .pt32-lg {
                    padding-top: 2rem;
                }
                .pt40-lg {
                    padding-top: 2.5rem;
                }
                .pt48-lg {
                    padding-top: 3rem;
                }
                .pt56-lg {
                    padding-top: 3.5rem;
                }
                .pt64-lg {
                    padding-top: 4rem;
                }
                .pt72-lg {
                    padding-top: 4.5rem;
                }
                .pt80-lg {
                    padding-top: 5rem;
                }
                .pt88-lg {
                    padding-top: 5.5rem;
                }
                .pt96-lg {
                    padding-top: 6rem;
                }
                .pt104-lg {
                    padding-top: 6.5rem;
                }
                .pt112-lg {
                    padding-top: 7rem;
                }
                .pt120-lg {
                    padding-top: 7.5rem;
                }
                .pr0-lg {
                    padding-right: 0;
                }
                .pr4-lg {
                    padding-right: 0.25rem;
                }
                .pr8-lg {
                    padding-right: 0.5rem;
                }
                .pr16-lg {
                    padding-right: 1rem;
                }
                .pr24-lg {
                    padding-right: 1.5rem;
                }
                .pr32-lg {
                    padding-right: 2rem;
                }
                .pr40-lg {
                    padding-right: 2.5rem;
                }
                .pr48-lg {
                    padding-right: 3rem;
                }
                .pr56-lg {
                    padding-right: 3.5rem;
                }
                .pr64-lg {
                    padding-right: 4rem;
                }
                .pr72-lg {
                    padding-right: 4.5rem;
                }
                .pr80-lg {
                    padding-right: 5rem;
                }
                .pr88-lg {
                    padding-right: 5.5rem;
                }
                .pr96-lg {
                    padding-right: 6rem;
                }
                .pr104-lg {
                    padding-right: 6.5rem;
                }
                .pr112-lg {
                    padding-right: 7rem;
                }
                .pr120-lg {
                    padding-right: 7.5rem;
                }
                .pb0-lg {
                    padding-bottom: 0;
                }
                .pb4-lg {
                    padding-bottom: 0.25rem;
                }
                .pb8-lg {
                    padding-bottom: 0.5rem;
                }
                .pb16-lg {
                    padding-bottom: 1rem;
                }
                .pb24-lg {
                    padding-bottom: 1.5rem;
                }
                .pb32-lg {
                    padding-bottom: 2rem;
                }
                .pb40-lg {
                    padding-bottom: 2.5rem;
                }
                .pb48-lg {
                    padding-bottom: 3rem;
                }
                .pb56-lg {
                    padding-bottom: 3.5rem;
                }
                .pb64-lg {
                    padding-bottom: 4rem;
                }
                .pb72-lg {
                    padding-bottom: 4.5rem;
                }
                .pb80-lg {
                    padding-bottom: 5rem;
                }
                .pb88-lg {
                    padding-bottom: 5.5rem;
                }
                .pb96-lg {
                    padding-bottom: 6rem;
                }
                .pb104-lg {
                    padding-bottom: 6.5rem;
                }
                .pb112-lg {
                    padding-bottom: 7rem;
                }
                .pb120-lg {
                    padding-bottom: 7.5rem;
                }
                .pl0-lg {
                    padding-left: 0;
                }
                .pl4-lg {
                    padding-left: 0.25rem;
                }
                .pl8-lg {
                    padding-left: 0.5rem;
                }
                .pl16-lg {
                    padding-left: 1rem;
                }
                .pl24-lg {
                    padding-left: 1.5rem;
                }
                .pl32-lg {
                    padding-left: 2rem;
                }
                .pl40-lg {
                    padding-left: 2.5rem;
                }
                .pl48-lg {
                    padding-left: 3rem;
                }
                .pl56-lg {
                    padding-left: 3.5rem;
                }
                .pl64-lg {
                    padding-left: 4rem;
                }
                .pl72-lg {
                    padding-left: 4.5rem;
                }
                .pl80-lg {
                    padding-left: 5rem;
                }
                .pl88-lg {
                    padding-left: 5.5rem;
                }
                .pl96-lg {
                    padding-left: 6rem;
                }
                .pl104-lg {
                    padding-left: 6.5rem;
                }
                .pl112-lg {
                    padding-left: 7rem;
                }
                .pl120-lg {
                    padding-left: 7.5rem;
                }
                .m0-lg {
                    margin: 0;
                }
                .m4-lg {
                    margin: 0.25rem;
                }
                .m8-lg {
                    margin: 0.5rem;
                }
                .m16-lg {
                    margin: 1rem;
                }
                .m24-lg {
                    margin: 1.5rem;
                }
                .m32-lg {
                    margin: 2rem;
                }
                .m40-lg {
                    margin: 2.5rem;
                }
                .m48-lg {
                    margin: 3rem;
                }
                .m56-lg {
                    margin: 3.5rem;
                }
                .m64-lg {
                    margin: 4rem;
                }
                .m72-lg {
                    margin: 4.5rem;
                }
                .m80-lg {
                    margin: 5rem;
                }
                .m88-lg {
                    margin: 5.5rem;
                }
                .m96-lg {
                    margin: 6rem;
                }
                .m104-lg {
                    margin: 6.5rem;
                }
                .m112-lg {
                    margin: 7rem;
                }
                .m120-lg {
                    margin: 7.5rem;
                }
                .mt0-lg {
                    margin-top: 0;
                }
                .mt4-lg {
                    margin-top: 0.25rem;
                }
                .mt8-lg {
                    margin-top: 0.5rem;
                }
                .mt16-lg {
                    margin-top: 1rem;
                }
                .mt24-lg {
                    margin-top: 1.5rem;
                }
                .mt32-lg {
                    margin-top: 2rem;
                }
                .mt40-lg {
                    margin-top: 2.5rem;
                }
                .mt48-lg {
                    margin-top: 3rem;
                }
                .mt56-lg {
                    margin-top: 3.5rem;
                }
                .mt64-lg {
                    margin-top: 4rem;
                }
                .mt72-lg {
                    margin-top: 4.5rem;
                }
                .mt80-lg {
                    margin-top: 5rem;
                }
                .mt88-lg {
                    margin-top: 5.5rem;
                }
                .mt96-lg {
                    margin-top: 6rem;
                }
                .mt104-lg {
                    margin-top: 6.5rem;
                }
                .mt112-lg {
                    margin-top: 7rem;
                }
                .mt120-lg {
                    margin-top: 7.5rem;
                }
                .mr0-lg {
                    margin-right: 0;
                }
                .mr4-lg {
                    margin-right: 0.25rem;
                }
                .mr8-lg {
                    margin-right: 0.5rem;
                }
                .mr16-lg {
                    margin-right: 1rem;
                }
                .mr24-lg {
                    margin-right: 1.5rem;
                }
                .mr32-lg {
                    margin-right: 2rem;
                }
                .mr40-lg {
                    margin-right: 2.5rem;
                }
                .mr48-lg {
                    margin-right: 3rem;
                }
                .mr56-lg {
                    margin-right: 3.5rem;
                }
                .mr64-lg {
                    margin-right: 4rem;
                }
                .mr72-lg {
                    margin-right: 4.5rem;
                }
                .mr80-lg {
                    margin-right: 5rem;
                }
                .mr88-lg {
                    margin-right: 5.5rem;
                }
                .mr96-lg {
                    margin-right: 6rem;
                }
                .mr104-lg {
                    margin-right: 6.5rem;
                }
                .mr112-lg {
                    margin-right: 7rem;
                }
                .mr120-lg {
                    margin-right: 7.5rem;
                }
                .mb0-lg {
                    margin-bottom: 0;
                }
                .mb4-lg {
                    margin-bottom: 0.25rem;
                }
                .mb8-lg {
                    margin-bottom: 0.5rem;
                }
                .mb16-lg {
                    margin-bottom: 1rem;
                }
                .mb24-lg {
                    margin-bottom: 1.5rem;
                }
                .mb32-lg {
                    margin-bottom: 2rem;
                }
                .mb40-lg {
                    margin-bottom: 2.5rem;
                }
                .mb48-lg {
                    margin-bottom: 3rem;
                }
                .mb56-lg {
                    margin-bottom: 3.5rem;
                }
                .mb64-lg {
                    margin-bottom: 4rem;
                }
                .mb72-lg {
                    margin-bottom: 4.5rem;
                }
                .mb80-lg {
                    margin-bottom: 5rem;
                }
                .mb88-lg {
                    margin-bottom: 5.5rem;
                }
                .mb96-lg {
                    margin-bottom: 6rem;
                }
                .mb104-lg {
                    margin-bottom: 6.5rem;
                }
                .mb112-lg {
                    margin-bottom: 7rem;
                }
                .mb120-lg {
                    margin-bottom: 7.5rem;
                }
                .ml0-lg {
                    margin-left: 0;
                }
                .ml4-lg {
                    margin-left: 0.25rem;
                }
                .ml8-lg {
                    margin-left: 0.5rem;
                }
                .ml16-lg {
                    margin-left: 1rem;
                }
                .ml24-lg {
                    margin-left: 1.5rem;
                }
                .ml32-lg {
                    margin-left: 2rem;
                }
                .ml40-lg {
                    margin-left: 2.5rem;
                }
                .ml48-lg {
                    margin-left: 3rem;
                }
                .ml56-lg {
                    margin-left: 3.5rem;
                }
                .ml64-lg {
                    margin-left: 4rem;
                }
                .ml72-lg {
                    margin-left: 4.5rem;
                }
                .ml80-lg {
                    margin-left: 5rem;
                }
                .ml88-lg {
                    margin-left: 5.5rem;
                }
                .ml96-lg {
                    margin-left: 6rem;
                }
                .ml104-lg {
                    margin-left: 6.5rem;
                }
                .ml112-lg {
                    margin-left: 7rem;
                }
                .ml120-lg {
                    margin-left: 7.5rem;
                }
            }
            @media (min-width: 577px) and (max-width: 768px) {
                .p0-md {
                    padding: 0;
                }
                .p4-md {
                    padding: 0.25rem;
                }
                .p8-md {
                    padding: 0.5rem;
                }
                .p16-md {
                    padding: 1rem;
                }
                .p24-md {
                    padding: 1.5rem;
                }
                .p32-md {
                    padding: 2rem;
                }
                .p40-md {
                    padding: 2.5rem;
                }
                .p48-md {
                    padding: 3rem;
                }
                .p56-md {
                    padding: 3.5rem;
                }
                .p64-md {
                    padding: 4rem;
                }
                .p72-md {
                    padding: 4.5rem;
                }
                .p80-md {
                    padding: 5rem;
                }
                .p88-md {
                    padding: 5.5rem;
                }
                .p96-md {
                    padding: 6rem;
                }
                .p104-md {
                    padding: 6.5rem;
                }
                .p112-md {
                    padding: 7rem;
                }
                .p120-md {
                    padding: 7.5rem;
                }
                .pt0-md {
                    padding-top: 0;
                }
                .pt4-md {
                    padding-top: 0.25rem;
                }
                .pt8-md {
                    padding-top: 0.5rem;
                }
                .pt16-md {
                    padding-top: 1rem;
                }
                .pt24-md {
                    padding-top: 1.5rem;
                }
                .pt32-md {
                    padding-top: 2rem;
                }
                .pt40-md {
                    padding-top: 2.5rem;
                }
                .pt48-md {
                    padding-top: 3rem;
                }
                .pt56-md {
                    padding-top: 3.5rem;
                }
                .pt64-md {
                    padding-top: 4rem;
                }
                .pt72-md {
                    padding-top: 4.5rem;
                }
                .pt80-md {
                    padding-top: 5rem;
                }
                .pt88-md {
                    padding-top: 5.5rem;
                }
                .pt96-md {
                    padding-top: 6rem;
                }
                .pt104-md {
                    padding-top: 6.5rem;
                }
                .pt112-md {
                    padding-top: 7rem;
                }
                .pt120-md {
                    padding-top: 7.5rem;
                }
                .pr0-md {
                    padding-right: 0;
                }
                .pr4-md {
                    padding-right: 0.25rem;
                }
                .pr8-md {
                    padding-right: 0.5rem;
                }
                .pr16-md {
                    padding-right: 1rem;
                }
                .pr24-md {
                    padding-right: 1.5rem;
                }
                .pr32-md {
                    padding-right: 2rem;
                }
                .pr40-md {
                    padding-right: 2.5rem;
                }
                .pr48-md {
                    padding-right: 3rem;
                }
                .pr56-md {
                    padding-right: 3.5rem;
                }
                .pr64-md {
                    padding-right: 4rem;
                }
                .pr72-md {
                    padding-right: 4.5rem;
                }
                .pr80-md {
                    padding-right: 5rem;
                }
                .pr88-md {
                    padding-right: 5.5rem;
                }
                .pr96-md {
                    padding-right: 6rem;
                }
                .pr104-md {
                    padding-right: 6.5rem;
                }
                .pr112-md {
                    padding-right: 7rem;
                }
                .pr120-md {
                    padding-right: 7.5rem;
                }
                .pb0-md {
                    padding-bottom: 0;
                }
                .pb4-md {
                    padding-bottom: 0.25rem;
                }
                .pb8-md {
                    padding-bottom: 0.5rem;
                }
                .pb16-md {
                    padding-bottom: 1rem;
                }
                .pb24-md {
                    padding-bottom: 1.5rem;
                }
                .pb32-md {
                    padding-bottom: 2rem;
                }
                .pb40-md {
                    padding-bottom: 2.5rem;
                }
                .pb48-md {
                    padding-bottom: 3rem;
                }
                .pb56-md {
                    padding-bottom: 3.5rem;
                }
                .pb64-md {
                    padding-bottom: 4rem;
                }
                .pb72-md {
                    padding-bottom: 4.5rem;
                }
                .pb80-md {
                    padding-bottom: 5rem;
                }
                .pb88-md {
                    padding-bottom: 5.5rem;
                }
                .pb96-md {
                    padding-bottom: 6rem;
                }
                .pb104-md {
                    padding-bottom: 6.5rem;
                }
                .pb112-md {
                    padding-bottom: 7rem;
                }
                .pb120-md {
                    padding-bottom: 7.5rem;
                }
                .pl0-md {
                    padding-left: 0;
                }
                .pl4-md {
                    padding-left: 0.25rem;
                }
                .pl8-md {
                    padding-left: 0.5rem;
                }
                .pl16-md {
                    padding-left: 1rem;
                }
                .pl24-md {
                    padding-left: 1.5rem;
                }
                .pl32-md {
                    padding-left: 2rem;
                }
                .pl40-md {
                    padding-left: 2.5rem;
                }
                .pl48-md {
                    padding-left: 3rem;
                }
                .pl56-md {
                    padding-left: 3.5rem;
                }
                .pl64-md {
                    padding-left: 4rem;
                }
                .pl72-md {
                    padding-left: 4.5rem;
                }
                .pl80-md {
                    padding-left: 5rem;
                }
                .pl88-md {
                    padding-left: 5.5rem;
                }
                .pl96-md {
                    padding-left: 6rem;
                }
                .pl104-md {
                    padding-left: 6.5rem;
                }
                .pl112-md {
                    padding-left: 7rem;
                }
                .pl120-md {
                    padding-left: 7.5rem;
                }
                .m0-md {
                    margin: 0;
                }
                .m4-md {
                    margin: 0.25rem;
                }
                .m8-md {
                    margin: 0.5rem;
                }
                .m16-md {
                    margin: 1rem;
                }
                .m24-md {
                    margin: 1.5rem;
                }
                .m32-md {
                    margin: 2rem;
                }
                .m40-md {
                    margin: 2.5rem;
                }
                .m48-md {
                    margin: 3rem;
                }
                .m56-md {
                    margin: 3.5rem;
                }
                .m64-md {
                    margin: 4rem;
                }
                .m72-md {
                    margin: 4.5rem;
                }
                .m80-md {
                    margin: 5rem;
                }
                .m88-md {
                    margin: 5.5rem;
                }
                .m96-md {
                    margin: 6rem;
                }
                .m104-md {
                    margin: 6.5rem;
                }
                .m112-md {
                    margin: 7rem;
                }
                .m120-md {
                    margin: 7.5rem;
                }
                .mt0-md {
                    margin-top: 0;
                }
                .mt4-md {
                    margin-top: 0.25rem;
                }
                .mt8-md {
                    margin-top: 0.5rem;
                }
                .mt16-md {
                    margin-top: 1rem;
                }
                .mt24-md {
                    margin-top: 1.5rem;
                }
                .mt32-md {
                    margin-top: 2rem;
                }
                .mt40-md {
                    margin-top: 2.5rem;
                }
                .mt48-md {
                    margin-top: 3rem;
                }
                .mt56-md {
                    margin-top: 3.5rem;
                }
                .mt64-md {
                    margin-top: 4rem;
                }
                .mt72-md {
                    margin-top: 4.5rem;
                }
                .mt80-md {
                    margin-top: 5rem;
                }
                .mt88-md {
                    margin-top: 5.5rem;
                }
                .mt96-md {
                    margin-top: 6rem;
                }
                .mt104-md {
                    margin-top: 6.5rem;
                }
                .mt112-md {
                    margin-top: 7rem;
                }
                .mt120-md {
                    margin-top: 7.5rem;
                }
                .mr0-md {
                    margin-right: 0;
                }
                .mr4-md {
                    margin-right: 0.25rem;
                }
                .mr8-md {
                    margin-right: 0.5rem;
                }
                .mr16-md {
                    margin-right: 1rem;
                }
                .mr24-md {
                    margin-right: 1.5rem;
                }
                .mr32-md {
                    margin-right: 2rem;
                }
                .mr40-md {
                    margin-right: 2.5rem;
                }
                .mr48-md {
                    margin-right: 3rem;
                }
                .mr56-md {
                    margin-right: 3.5rem;
                }
                .mr64-md {
                    margin-right: 4rem;
                }
                .mr72-md {
                    margin-right: 4.5rem;
                }
                .mr80-md {
                    margin-right: 5rem;
                }
                .mr88-md {
                    margin-right: 5.5rem;
                }
                .mr96-md {
                    margin-right: 6rem;
                }
                .mr104-md {
                    margin-right: 6.5rem;
                }
                .mr112-md {
                    margin-right: 7rem;
                }
                .mr120-md {
                    margin-right: 7.5rem;
                }
                .mb0-md {
                    margin-bottom: 0;
                }
                .mb4-md {
                    margin-bottom: 0.25rem;
                }
                .mb8-md {
                    margin-bottom: 0.5rem;
                }
                .mb16-md {
                    margin-bottom: 1rem;
                }
                .mb24-md {
                    margin-bottom: 1.5rem;
                }
                .mb32-md {
                    margin-bottom: 2rem;
                }
                .mb40-md {
                    margin-bottom: 2.5rem;
                }
                .mb48-md {
                    margin-bottom: 3rem;
                }
                .mb56-md {
                    margin-bottom: 3.5rem;
                }
                .mb64-md {
                    margin-bottom: 4rem;
                }
                .mb72-md {
                    margin-bottom: 4.5rem;
                }
                .mb80-md {
                    margin-bottom: 5rem;
                }
                .mb88-md {
                    margin-bottom: 5.5rem;
                }
                .mb96-md {
                    margin-bottom: 6rem;
                }
                .mb104-md {
                    margin-bottom: 6.5rem;
                }
                .mb112-md {
                    margin-bottom: 7rem;
                }
                .mb120-md {
                    margin-bottom: 7.5rem;
                }
                .ml0-md {
                    margin-left: 0;
                }
                .ml4-md {
                    margin-left: 0.25rem;
                }
                .ml8-md {
                    margin-left: 0.5rem;
                }
                .ml16-md {
                    margin-left: 1rem;
                }
                .ml24-md {
                    margin-left: 1.5rem;
                }
                .ml32-md {
                    margin-left: 2rem;
                }
                .ml40-md {
                    margin-left: 2.5rem;
                }
                .ml48-md {
                    margin-left: 3rem;
                }
                .ml56-md {
                    margin-left: 3.5rem;
                }
                .ml64-md {
                    margin-left: 4rem;
                }
                .ml72-md {
                    margin-left: 4.5rem;
                }
                .ml80-md {
                    margin-left: 5rem;
                }
                .ml88-md {
                    margin-left: 5.5rem;
                }
                .ml96-md {
                    margin-left: 6rem;
                }
                .ml104-md {
                    margin-left: 6.5rem;
                }
                .ml112-md {
                    margin-left: 7rem;
                }
                .ml120-md {
                    margin-left: 7.5rem;
                }
            }
            @media (max-width: 576px) {
                .p0-sm {
                    padding: 0;
                }
                .p4-sm {
                    padding: 0.25rem;
                }
                .p8-sm {
                    padding: 0.5rem;
                }
                .p16-sm {
                    padding: 1rem;
                }
                .p24-sm {
                    padding: 1.5rem;
                }
                .p32-sm {
                    padding: 2rem;
                }
                .p40-sm {
                    padding: 2.5rem;
                }
                .p48-sm {
                    padding: 3rem;
                }
                .p56-sm {
                    padding: 3.5rem;
                }
                .p64-sm {
                    padding: 4rem;
                }
                .p72-sm {
                    padding: 4.5rem;
                }
                .p80-sm {
                    padding: 5rem;
                }
                .p88-sm {
                    padding: 5.5rem;
                }
                .p96-sm {
                    padding: 6rem;
                }
                .p104-sm {
                    padding: 6.5rem;
                }
                .p112-sm {
                    padding: 7rem;
                }
                .p120-sm {
                    padding: 7.5rem;
                }
                .pt0-sm {
                    padding-top: 0;
                }
                .pt4-sm {
                    padding-top: 0.25rem;
                }
                .pt8-sm {
                    padding-top: 0.5rem;
                }
                .pt16-sm {
                    padding-top: 1rem;
                }
                .pt24-sm {
                    padding-top: 1.5rem;
                }
                .pt32-sm {
                    padding-top: 2rem;
                }
                .pt40-sm {
                    padding-top: 2.5rem;
                }
                .pt48-sm {
                    padding-top: 3rem;
                }
                .pt56-sm {
                    padding-top: 3.5rem;
                }
                .pt64-sm {
                    padding-top: 4rem;
                }
                .pt72-sm {
                    padding-top: 4.5rem;
                }
                .pt80-sm {
                    padding-top: 5rem;
                }
                .pt88-sm {
                    padding-top: 5.5rem;
                }
                .pt96-sm {
                    padding-top: 6rem;
                }
                .pt104-sm {
                    padding-top: 6.5rem;
                }
                .pt112-sm {
                    padding-top: 7rem;
                }
                .pt120-sm {
                    padding-top: 7.5rem;
                }
                .pr0-sm {
                    padding-right: 0;
                }
                .pr4-sm {
                    padding-right: 0.25rem;
                }
                .pr8-sm {
                    padding-right: 0.5rem;
                }
                .pr16-sm {
                    padding-right: 1rem;
                }
                .pr24-sm {
                    padding-right: 1.5rem;
                }
                .pr32-sm {
                    padding-right: 2rem;
                }
                .pr40-sm {
                    padding-right: 2.5rem;
                }
                .pr48-sm {
                    padding-right: 3rem;
                }
                .pr56-sm {
                    padding-right: 3.5rem;
                }
                .pr64-sm {
                    padding-right: 4rem;
                }
                .pr72-sm {
                    padding-right: 4.5rem;
                }
                .pr80-sm {
                    padding-right: 5rem;
                }
                .pr88-sm {
                    padding-right: 5.5rem;
                }
                .pr96-sm {
                    padding-right: 6rem;
                }
                .pr104-sm {
                    padding-right: 6.5rem;
                }
                .pr112-sm {
                    padding-right: 7rem;
                }
                .pr120-sm {
                    padding-right: 7.5rem;
                }
                .pb0-sm {
                    padding-bottom: 0;
                }
                .pb4-sm {
                    padding-bottom: 0.25rem;
                }
                .pb8-sm {
                    padding-bottom: 0.5rem;
                }
                .pb16-sm {
                    padding-bottom: 1rem;
                }
                .pb24-sm {
                    padding-bottom: 1.5rem;
                }
                .pb32-sm {
                    padding-bottom: 2rem;
                }
                .pb40-sm {
                    padding-bottom: 2.5rem;
                }
                .pb48-sm {
                    padding-bottom: 3rem;
                }
                .pb56-sm {
                    padding-bottom: 3.5rem;
                }
                .pb64-sm {
                    padding-bottom: 4rem;
                }
                .pb72-sm {
                    padding-bottom: 4.5rem;
                }
                .pb80-sm {
                    padding-bottom: 5rem;
                }
                .pb88-sm {
                    padding-bottom: 5.5rem;
                }
                .pb96-sm {
                    padding-bottom: 6rem;
                }
                .pb104-sm {
                    padding-bottom: 6.5rem;
                }
                .pb112-sm {
                    padding-bottom: 7rem;
                }
                .pb120-sm {
                    padding-bottom: 7.5rem;
                }
                .pl0-sm {
                    padding-left: 0;
                }
                .pl4-sm {
                    padding-left: 0.25rem;
                }
                .pl8-sm {
                    padding-left: 0.5rem;
                }
                .pl16-sm {
                    padding-left: 1rem;
                }
                .pl24-sm {
                    padding-left: 1.5rem;
                }
                .pl32-sm {
                    padding-left: 2rem;
                }
                .pl40-sm {
                    padding-left: 2.5rem;
                }
                .pl48-sm {
                    padding-left: 3rem;
                }
                .pl56-sm {
                    padding-left: 3.5rem;
                }
                .pl64-sm {
                    padding-left: 4rem;
                }
                .pl72-sm {
                    padding-left: 4.5rem;
                }
                .pl80-sm {
                    padding-left: 5rem;
                }
                .pl88-sm {
                    padding-left: 5.5rem;
                }
                .pl96-sm {
                    padding-left: 6rem;
                }
                .pl104-sm {
                    padding-left: 6.5rem;
                }
                .pl112-sm {
                    padding-left: 7rem;
                }
                .pl120-sm {
                    padding-left: 7.5rem;
                }
                .m0-sm {
                    margin: 0;
                }
                .m4-sm {
                    margin: 0.25rem;
                }
                .m8-sm {
                    margin: 0.5rem;
                }
                .m16-sm {
                    margin: 1rem;
                }
                .m24-sm {
                    margin: 1.5rem;
                }
                .m32-sm {
                    margin: 2rem;
                }
                .m40-sm {
                    margin: 2.5rem;
                }
                .m48-sm {
                    margin: 3rem;
                }
                .m56-sm {
                    margin: 3.5rem;
                }
                .m64-sm {
                    margin: 4rem;
                }
                .m72-sm {
                    margin: 4.5rem;
                }
                .m80-sm {
                    margin: 5rem;
                }
                .m88-sm {
                    margin: 5.5rem;
                }
                .m96-sm {
                    margin: 6rem;
                }
                .m104-sm {
                    margin: 6.5rem;
                }
                .m112-sm {
                    margin: 7rem;
                }
                .m120-sm {
                    margin: 7.5rem;
                }
                .mt0-sm {
                    margin-top: 0;
                }
                .mt4-sm {
                    margin-top: 0.25rem;
                }
                .mt8-sm {
                    margin-top: 0.5rem;
                }
                .mt16-sm {
                    margin-top: 1rem;
                }
                .mt24-sm {
                    margin-top: 1.5rem;
                }
                .mt32-sm {
                    margin-top: 2rem;
                }
                .mt40-sm {
                    margin-top: 2.5rem;
                }
                .mt48-sm {
                    margin-top: 3rem;
                }
                .mt56-sm {
                    margin-top: 3.5rem;
                }
                .mt64-sm {
                    margin-top: 4rem;
                }
                .mt72-sm {
                    margin-top: 4.5rem;
                }
                .mt80-sm {
                    margin-top: 5rem;
                }
                .mt88-sm {
                    margin-top: 5.5rem;
                }
                .mt96-sm {
                    margin-top: 6rem;
                }
                .mt104-sm {
                    margin-top: 6.5rem;
                }
                .mt112-sm {
                    margin-top: 7rem;
                }
                .mt120-sm {
                    margin-top: 7.5rem;
                }
                .mr0-sm {
                    margin-right: 0;
                }
                .mr4-sm {
                    margin-right: 0.25rem;
                }
                .mr8-sm {
                    margin-right: 0.5rem;
                }
                .mr16-sm {
                    margin-right: 1rem;
                }
                .mr24-sm {
                    margin-right: 1.5rem;
                }
                .mr32-sm {
                    margin-right: 2rem;
                }
                .mr40-sm {
                    margin-right: 2.5rem;
                }
                .mr48-sm {
                    margin-right: 3rem;
                }
                .mr56-sm {
                    margin-right: 3.5rem;
                }
                .mr64-sm {
                    margin-right: 4rem;
                }
                .mr72-sm {
                    margin-right: 4.5rem;
                }
                .mr80-sm {
                    margin-right: 5rem;
                }
                .mr88-sm {
                    margin-right: 5.5rem;
                }
                .mr96-sm {
                    margin-right: 6rem;
                }
                .mr104-sm {
                    margin-right: 6.5rem;
                }
                .mr112-sm {
                    margin-right: 7rem;
                }
                .mr120-sm {
                    margin-right: 7.5rem;
                }
                .mb0-sm {
                    margin-bottom: 0;
                }
                .mb4-sm {
                    margin-bottom: 0.25rem;
                }
                .mb8-sm {
                    margin-bottom: 0.5rem;
                }
                .mb16-sm {
                    margin-bottom: 1rem;
                }
                .mb24-sm {
                    margin-bottom: 1.5rem;
                }
                .mb32-sm {
                    margin-bottom: 2rem;
                }
                .mb40-sm {
                    margin-bottom: 2.5rem;
                }
                .mb48-sm {
                    margin-bottom: 3rem;
                }
                .mb56-sm {
                    margin-bottom: 3.5rem;
                }
                .mb64-sm {
                    margin-bottom: 4rem;
                }
                .mb72-sm {
                    margin-bottom: 4.5rem;
                }
                .mb80-sm {
                    margin-bottom: 5rem;
                }
                .mb88-sm {
                    margin-bottom: 5.5rem;
                }
                .mb96-sm {
                    margin-bottom: 6rem;
                }
                .mb104-sm {
                    margin-bottom: 6.5rem;
                }
                .mb112-sm {
                    margin-bottom: 7rem;
                }
                .mb120-sm {
                    margin-bottom: 7.5rem;
                }
                .ml0-sm {
                    margin-left: 0;
                }
                .ml4-sm {
                    margin-left: 0.25rem;
                }
                .ml8-sm {
                    margin-left: 0.5rem;
                }
                .ml16-sm {
                    margin-left: 1rem;
                }
                .ml24-sm {
                    margin-left: 1.5rem;
                }
                .ml32-sm {
                    margin-left: 2rem;
                }
                .ml40-sm {
                    margin-left: 2.5rem;
                }
                .ml48-sm {
                    margin-left: 3rem;
                }
                .ml56-sm {
                    margin-left: 3.5rem;
                }
                .ml64-sm {
                    margin-left: 4rem;
                }
                .ml72-sm {
                    margin-left: 4.5rem;
                }
                .ml80-sm {
                    margin-left: 5rem;
                }
                .ml88-sm {
                    margin-left: 5.5rem;
                }
                .ml96-sm {
                    margin-left: 6rem;
                }
                .ml104-sm {
                    margin-left: 6.5rem;
                }
                .ml112-sm {
                    margin-left: 7rem;
                }
                .ml120-sm {
                    margin-left: 7.5rem;
                }
            }
            .divider {
                width: 100%;
                border-bottom: 1px solid var(--divider-color);
                margin: 2rem 0;
            }
            .flex {
                display: flex;
            }
            .flex--direction-row {
                flex-direction: row;
            }
            .flex--direction-row-reverse {
                flex-direction: row-reverse;
            }
            .flex--direction-column {
                flex-direction: column;
            }
            .flex--direction-column-reverse {
                flex-direction: column-reverse;
            }
            .flex--justify-start {
                justify-content: flex-start;
            }
            .flex--justify-end {
                justify-content: flex-end;
            }
            .flex--justify-center {
                justify-content: center;
            }
            .flex--justify-between {
                justify-content: space-between;
            }
            .flex--justify-around {
                justify-content: space-around;
            }
            .flex--align-start {
                align-items: flex-start;
            }
            .flex--align-end {
                align-items: flex-end;
            }
            .flex--align-center {
                align-items: center;
            }
            .flex--align-stretch {
                align-items: stretch;
            }
            .flex--align-baseline {
                align-items: baseline;
            }
            .flex--start {
                align-content: flex-start;
            }
            .flex--end {
                align-content: flex-end;
            }
            .flex--center {
                align-content: center;
            }
            .flex--stretch {
                align-content: stretch;
            }
            .flex--between {
                align-content: space-between;
            }
            .flex--around {
                align-content: space-around;
            }
            .flex--wrap-$(prefix) {
                flex-wrap: nowrap;
                flex-wrap: wrap;
                flex-wrap: wrap-reverse;
            }
            .flex--fill-gap {
                flex: 1 1;
            }
            .row {
                margin-right: calc(var(--gutter) * -1);
                margin-left: calc(var(--gutter) * -1);
                flex-wrap: wrap;
                display: flex;
            }
            [class*=" col-"],
            [class^="col-"] {
                width: 100%;
            }
            .col,
            [class*=" col-"],
            [class^="col-"] {
                padding-right: var(--gutter);
                padding-left: var(--gutter);
            }
            .col {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }
            @media (min-width: 769px) {
                .col-lg-1 {
                    max-width: calc(100% / var(--grid-columns-count) * 1);
                    flex-basis: calc(100% / var(--grid-columns-count) * 1);
                }
                .col-lg-2 {
                    max-width: calc(100% / var(--grid-columns-count) * 2);
                    flex-basis: calc(100% / var(--grid-columns-count) * 2);
                }
                .col-lg-3 {
                    max-width: calc(100% / var(--grid-columns-count) * 3);
                    flex-basis: calc(100% / var(--grid-columns-count) * 3);
                }
                .col-lg-4 {
                    max-width: calc(100% / var(--grid-columns-count) * 4);
                    flex-basis: calc(100% / var(--grid-columns-count) * 4);
                }
                .col-lg-5 {
                    max-width: calc(100% / var(--grid-columns-count) * 5);
                    flex-basis: calc(100% / var(--grid-columns-count) * 5);
                }
                .col-lg-6 {
                    max-width: calc(100% / var(--grid-columns-count) * 6);
                    flex-basis: calc(100% / var(--grid-columns-count) * 6);
                }
                .col-lg-7 {
                    max-width: calc(100% / var(--grid-columns-count) * 7);
                    flex-basis: calc(100% / var(--grid-columns-count) * 7);
                }
                .col-lg-8 {
                    max-width: calc(100% / var(--grid-columns-count) * 8);
                    flex-basis: calc(100% / var(--grid-columns-count) * 8);
                }
                .col-lg-9 {
                    max-width: calc(100% / var(--grid-columns-count) * 9);
                    flex-basis: calc(100% / var(--grid-columns-count) * 9);
                }
                .col-lg-10 {
                    max-width: calc(100% / var(--grid-columns-count) * 10);
                    flex-basis: calc(100% / var(--grid-columns-count) * 10);
                }
                .col-lg-11 {
                    max-width: calc(100% / var(--grid-columns-count) * 11);
                    flex-basis: calc(100% / var(--grid-columns-count) * 11);
                }
                .col-lg-12 {
                    max-width: calc(100% / var(--grid-columns-count) * 12);
                    flex-basis: calc(100% / var(--grid-columns-count) * 12);
                }
            }
            @media (min-width: 577px) and (max-width: 768px) {
                .col-md-1 {
                    max-width: calc(100% / var(--grid-columns-count) * 1);
                    flex-basis: calc(100% / var(--grid-columns-count) * 1);
                }
                .col-md-2 {
                    max-width: calc(100% / var(--grid-columns-count) * 2);
                    flex-basis: calc(100% / var(--grid-columns-count) * 2);
                }
                .col-md-3 {
                    max-width: calc(100% / var(--grid-columns-count) * 3);
                    flex-basis: calc(100% / var(--grid-columns-count) * 3);
                }
                .col-md-4 {
                    max-width: calc(100% / var(--grid-columns-count) * 4);
                    flex-basis: calc(100% / var(--grid-columns-count) * 4);
                }
                .col-md-5 {
                    max-width: calc(100% / var(--grid-columns-count) * 5);
                    flex-basis: calc(100% / var(--grid-columns-count) * 5);
                }
                .col-md-6 {
                    max-width: calc(100% / var(--grid-columns-count) * 6);
                    flex-basis: calc(100% / var(--grid-columns-count) * 6);
                }
                .col-md-7 {
                    max-width: calc(100% / var(--grid-columns-count) * 7);
                    flex-basis: calc(100% / var(--grid-columns-count) * 7);
                }
                .col-md-8 {
                    max-width: calc(100% / var(--grid-columns-count) * 8);
                    flex-basis: calc(100% / var(--grid-columns-count) * 8);
                }
                .col-md-9 {
                    max-width: calc(100% / var(--grid-columns-count) * 9);
                    flex-basis: calc(100% / var(--grid-columns-count) * 9);
                }
                .col-md-10 {
                    max-width: calc(100% / var(--grid-columns-count) * 10);
                    flex-basis: calc(100% / var(--grid-columns-count) * 10);
                }
                .col-md-11 {
                    max-width: calc(100% / var(--grid-columns-count) * 11);
                    flex-basis: calc(100% / var(--grid-columns-count) * 11);
                }
                .col-md-12 {
                    max-width: calc(100% / var(--grid-columns-count) * 12);
                    flex-basis: calc(100% / var(--grid-columns-count) * 12);
                }
            }
            @media (max-width: 576px) {
                .col-sm-1 {
                    max-width: calc(100% / var(--grid-columns-count) * 1);
                    flex-basis: calc(100% / var(--grid-columns-count) * 1);
                }
                .col-sm-2 {
                    max-width: calc(100% / var(--grid-columns-count) * 2);
                    flex-basis: calc(100% / var(--grid-columns-count) * 2);
                }
                .col-sm-3 {
                    max-width: calc(100% / var(--grid-columns-count) * 3);
                    flex-basis: calc(100% / var(--grid-columns-count) * 3);
                }
                .col-sm-4 {
                    max-width: calc(100% / var(--grid-columns-count) * 4);
                    flex-basis: calc(100% / var(--grid-columns-count) * 4);
                }
                .col-sm-5 {
                    max-width: calc(100% / var(--grid-columns-count) * 5);
                    flex-basis: calc(100% / var(--grid-columns-count) * 5);
                }
                .col-sm-6 {
                    max-width: calc(100% / var(--grid-columns-count) * 6);
                    flex-basis: calc(100% / var(--grid-columns-count) * 6);
                }
                .col-sm-7 {
                    max-width: calc(100% / var(--grid-columns-count) * 7);
                    flex-basis: calc(100% / var(--grid-columns-count) * 7);
                }
                .col-sm-8 {
                    max-width: calc(100% / var(--grid-columns-count) * 8);
                    flex-basis: calc(100% / var(--grid-columns-count) * 8);
                }
                .col-sm-9 {
                    max-width: calc(100% / var(--grid-columns-count) * 9);
                    flex-basis: calc(100% / var(--grid-columns-count) * 9);
                }
                .col-sm-10 {
                    max-width: calc(100% / var(--grid-columns-count) * 10);
                    flex-basis: calc(100% / var(--grid-columns-count) * 10);
                }
                .col-sm-11 {
                    max-width: calc(100% / var(--grid-columns-count) * 11);
                    flex-basis: calc(100% / var(--grid-columns-count) * 11);
                }
                .col-sm-12 {
                    max-width: calc(100% / var(--grid-columns-count) * 12);
                    flex-basis: calc(100% / var(--grid-columns-count) * 12);
                }
            }
            .text-weight--large {
                font-size: var(--text-size-large);
            }
            .text-weight--light {
                font-weight: var(--font-weight-light);
            }
            .text-weight--normal {
                font-weight: var(--font-weight-normal);
            }
            .text-weight--medium {
                font-weight: var(--font-weight-medium);
            }
            .text-weight--bold {
                font-weight: var(--font-weight-bold);
            }
            .text-color--info {
                color: var(--subtitle-color);
            }
            .text-color--success {
                color: var(--primary-color);
            }
            .text-color--danger {
                color: var(--tertiary-color);
            }
            .text {
                font-weight: var(--font-weight-light);
            }
            .text--small {
                font-size: var(--text-size-small);
            }
            .text--smallish {
                font-size: var(--text-size-normal);
            }
            .text--regular {
                font-size: var(--text-size-base);
            }
            .text--medium {
                font-size: var(--text-size-medium);
            }
            .text--big {
                font-size: var(--text-size-big);
            }
            .text--large {
                font-size: var(--text-size-large);
            }
            .text--light {
                font-weight: var(--font-weight-light);
            }
            .text--normal {
                font-weight: var(--font-weight-normal);
            }
            .text--uppercase {
                text-transform: uppercase;
            }
            .text--lowercase {
                text-transform: lowercase;
            }
            .text--right {
                text-align: right;
            }
            .text--center {
                text-align: center;
            }
            .text--left {
                text-align: left;
            }
            .text--italic {
                font-style: italic;
            }
            .text--underline {
                text-decoration: underline;
            }
            .text--link {
                color: var(--blue-light);
                cursor: pointer;
            }
            @media print {
                .button,
                .noprint,
                .notice,
                nav {
                    display: none !important;
                }
            } /*!
 * Generated with CSS Flag Sprite generator (https://www.flag-sprites.com/)
 */
            .flag {
                display: inline-block;
                position: relative;
                width: 16px;
                height: 11px;
                background: url(https://assets.bitstamp.net/onboarding/s/widgets/onboarding/img/flags_a44c0a9.png) no-repeat;
            }
            .flag--gu {
                background-position: -96px -55px;
            }
            .flag--mn {
                background-position: -208px -88px;
            }
            .flag--va {
                background-position: -48px -154px;
            }
            .flag--tibet {
                background-position: -32px -143px;
            }
            .flag--fo {
                background-position: -64px -44px;
            }
            .flag--th {
                background-position: -16px -143px;
            }
            .flag--tr {
                background-position: -144px -143px;
            }
            .flag--tl {
                background-position: -80px -143px;
            }
            .flag--kz {
                background-position: -144px -77px;
            }
            .flag--zm {
                background-position: -16px -165px;
            }
            .flag--uz {
                background-position: -32px -154px;
            }
            .flag--dk {
                background-position: -64px -33px;
            }
            .flag--scotland {
                background-position: -176px -121px;
            }
            .flag--gi {
                background-position: -224px -44px;
            }
            .flag--gy {
                background-position: -128px -55px;
            }
            .flag--bj {
                background-position: -112px -11px;
            }
            .flag--fr {
                background-position: -80px -44px;
            }
            .flag--mo {
                background-position: -224px -88px;
            }
            .flag--ir {
                background-position: -112px -66px;
            }
            .flag--io {
                background-position: -80px -66px;
            }
            .flag--tm {
                background-position: -96px -143px;
            }
            .flag--ch {
                background-position: -96px -22px;
            }
            .flag--mt {
                background-position: -32px -99px;
            }
            .flag--nl {
                background-position: -240px -99px;
            }
            .flag--gp {
                background-position: -16px -55px;
            }
            .flag--im {
                background-position: -48px -66px;
            }
            .flag--tv {
                background-position: -176px -143px;
            }
            .flag--mu {
                background-position: -48px -99px;
            }
            .flag--pe {
                background-position: -96px -110px;
            }
            .flag--vi {
                background-position: -112px -154px;
            }
            .flag--hn {
                background-position: -176px -55px;
            }
            .flag--ss {
                background-position: -128px -132px;
            }
            .flag--ae {
                background-position: -16px 0;
            }
            .flag--td {
                background-position: -240px -132px;
            }
            .flag--pw {
                background-position: 0 -121px;
            }
            .flag--nu {
                background-position: -32px -110px;
            }
            .flag--bt {
                background-position: -208px -11px;
            }
            .flag--ms {
                background-position: -16px -99px;
            }
            .flag--cv {
                background-position: -240px -22px;
            }
            .flag--es {
                background-position: -224px -33px;
            }
            .flag--mh {
                background-position: -144px -88px;
            }
            .flag--la {
                background-position: -160px -77px;
            }
            .flag--vn {
                background-position: -128px -154px;
            }
            .flag--py {
                background-position: -16px -121px;
            }
            .flag--br {
                background-position: -176px -11px;
            }
            .flag--ye {
                background-position: -224px -154px;
            }
            .flag--ie {
                background-position: 0 -66px;
            }
            .flag--gh {
                background-position: -208px -44px;
            }
            .flag--cg {
                background-position: -80px -22px;
            }
            .flag--cu {
                background-position: -224px -22px;
            }
            .flag--hu {
                background-position: -224px -55px;
            }
            .flag--sg {
                background-position: -224px -121px;
            }
            .flag--at {
                background-position: -176px 0;
            }
            .flag--lk {
                background-position: -224px -77px;
            }
            .flag--vu {
                background-position: -144px -154px;
            }
            .flag--bo {
                background-position: -160px -11px;
            }
            .flag--jo {
                background-position: -208px -66px;
            }
            .flag--er {
                background-position: -208px -33px;
            }
            .flag--za {
                background-position: -256px -154px;
            }
            .flag--rs {
                background-position: -80px -121px;
            }
            .flag--nr {
                background-position: -16px -110px;
            }
            .flag--ls {
                background-position: -256px -77px;
            }
            .flag--jm {
                background-position: -192px -66px;
            }
            .flag--tz {
                background-position: -208px -143px;
            }
            .flag--ki {
                background-position: -16px -77px;
            }
            .flag--sj {
                background-position: 0 -132px;
            }
            .flag--cz {
                background-position: -16px -33px;
            }
            .flag--pg {
                background-position: -128px -110px;
            }
            .flag--lv {
                background-position: -32px -88px;
            }
            .flag--do {
                background-position: -96px -33px;
            }
            .flag--lu {
                background-position: -16px -88px;
            }
            .flag--no {
                background-position: -256px -99px;
            }
            .flag--kw {
                background-position: -112px -77px;
            }
            .flag--mx {
                background-position: -96px -99px;
            }
            .flag--yt {
                background-position: -240px -154px;
            }
            .flag--ly {
                background-position: -48px -88px;
            }
            .flag--cy {
                background-position: 0 -33px;
            }
            .flag--ph {
                background-position: -144px -110px;
            }
            .flag--my {
                background-position: -112px -99px;
            }
            .flag--sm {
                background-position: -48px -132px;
            }
            .flag--et {
                background-position: -240px -33px;
            }
            .flag--ru {
                background-position: -96px -121px;
            }
            .flag--tj {
                background-position: -48px -143px;
            }
            .flag--ai {
                background-position: -64px 0;
            }
            .flag--pl {
                background-position: -176px -110px;
            }
            .flag--kp {
                background-position: -64px -77px;
            }
            .flag--uy {
                background-position: -16px -154px;
            }
            .flag--gb {
                background-position: -112px -44px;
            }
            .flag--gs {
                background-position: -64px -55px;
            }
            .flag--kurdistan {
                background-position: -96px -77px;
            }
            .flag--rw {
                background-position: -112px -121px;
            }
            .flag--ec {
                background-position: -128px -33px;
            }
            .flag--mm {
                background-position: -192px -88px;
            }
            .flag--pa {
                background-position: -80px -110px;
            }
            .flag--wales {
                background-position: -160px -154px;
            }
            .flag--kg {
                background-position: -256px -66px;
            }
            .flag--ve {
                background-position: -80px -154px;
            }
            .flag--tk {
                background-position: -64px -143px;
            }
            .flag--ca {
                background-position: -16px -22px;
            }
            .flag--is {
                background-position: -128px -66px;
            }
            .flag--ke {
                background-position: -240px -66px;
            }
            .flag--ro {
                background-position: -64px -121px;
            }
            .flag--gq {
                background-position: -32px -55px;
            }
            .flag--pt {
                background-position: -256px -110px;
            }
            .flag--tf {
                background-position: -256px -132px;
            }
            .flag--ad {
                background-position: 0 0;
            }
            .flag--sk {
                background-position: -16px -132px;
            }
            .flag--pm {
                background-position: -192px -110px;
            }
            .flag--om {
                background-position: -64px -110px;
            }
            .flag--an {
                background-position: -112px 0;
            }
            .flag--ws {
                background-position: -192px -154px;
            }
            .flag--sh {
                background-position: -240px -121px;
            }
            .flag--mp {
                background-position: -240px -88px;
            }
            .flag--gt {
                background-position: -80px -55px;
            }
            .flag--cf {
                background-position: -64px -22px;
            }
            .flag--zanzibar {
                background-position: 0 -165px;
            }
            .flag--mw {
                background-position: -80px -99px;
            }
            .flag--catalonia {
                background-position: -32px -22px;
            }
            .flag--ug {
                background-position: -240px -143px;
            }
            .flag--je {
                background-position: -176px -66px;
            }
            .flag--km {
                background-position: -32px -77px;
            }
            .flag--in {
                background-position: -64px -66px;
            }
            .flag--bf {
                background-position: -48px -11px;
            }
            .flag--mc {
                background-position: -80px -88px;
            }
            .flag--sy {
                background-position: -192px -132px;
            }
            .flag--sn {
                background-position: -64px -132px;
            }
            .flag--kr {
                background-position: -80px -77px;
            }
            .flag--eu {
                background-position: -256px -33px;
            }
            .flag--bn {
                background-position: -144px -11px;
            }
            .flag--st {
                background-position: -144px -132px;
            }
            .flag--england {
                background-position: -192px -33px;
            }
            .flag--lc {
                background-position: -192px -77px;
            }
            .flag--dm {
                background-position: -80px -33px;
            }
            .flag--be {
                background-position: -32px -11px;
            }
            .flag--ni {
                background-position: -224px -99px;
            }
            .flag--ua {
                background-position: -224px -143px;
            }
            .flag--mz {
                background-position: -128px -99px;
            }
            .flag--pf {
                background-position: -112px -110px;
            }
            .flag--tn {
                background-position: -112px -143px;
            }
            .flag--ee {
                background-position: -144px -33px;
            }
            .flag--xk {
                background-position: -208px -154px;
            }
            .flag--sx {
                background-position: -176px -132px;
            }
            .flag--sd {
                background-position: -192px -121px;
            }
            .flag--gd {
                background-position: -128px -44px;
            }
            .flag--ci {
                background-position: -112px -22px;
            }
            .flag--sz {
                background-position: -208px -132px;
            }
            .flag--cl {
                background-position: -144px -22px;
            }
            .flag--fi {
                background-position: 0 -44px;
            }
            .flag--ga {
                background-position: -96px -44px;
            }
            .flag--jp {
                background-position: -224px -66px;
            }
            .flag--de {
                background-position: -32px -33px;
            }
            .flag--np {
                background-position: 0 -110px;
            }
            .flag--re {
                background-position: -48px -121px;
            }
            .flag--bg {
                background-position: -64px -11px;
            }
            .flag--sc {
                background-position: -160px -121px;
            }
            .flag--ng {
                background-position: -208px -99px;
            }
            .flag--qa {
                background-position: -32px -121px;
            }
            .flag--mk {
                background-position: -160px -88px;
            }
            .flag--aw {
                background-position: -208px 0;
            }
            .flag--kn {
                background-position: -48px -77px;
            }
            .flag--al {
                background-position: -80px 0;
            }
            .flag--bw {
                background-position: -240px -11px;
            }
            .flag--um {
                background-position: -256px -143px;
            }
            .flag--ky {
                background-position: -128px -77px;
            }
            .flag--tt {
                background-position: -160px -143px;
            }
            .flag--so {
                background-position: -80px -132px;
            }
            .flag--lt {
                background-position: 0 -88px;
            }
            .flag--by {
                background-position: -256px -11px;
            }
            .flag--bb {
                background-position: 0 -11px;
            }
            .flag--us {
                background-position: 0 -154px;
            }
            .flag--md {
                background-position: -96px -88px;
            }
            .flag--ag {
                background-position: -48px 0;
            }
            .flag--hm {
                background-position: -160px -55px;
            }
            .flag--as {
                background-position: -160px 0;
            }
            .flag--eg {
                background-position: -160px -33px;
            }
            .flag--sv {
                background-position: -160px -132px;
            }
            .flag--sl {
                background-position: -32px -132px;
            }
            .flag--fk {
                background-position: -32px -44px;
            }
            .flag--am {
                background-position: -96px 0;
            }
            .flag--ck {
                background-position: -128px -22px;
            }
            .flag--tw {
                background-position: -192px -143px;
            }
            .flag--kh {
                background-position: 0 -77px;
            }
            .flag--to {
                background-position: -128px -143px;
            }
            .flag--se {
                background-position: -208px -121px;
            }
            .flag--cd {
                background-position: -48px -22px;
            }
            .flag--pn {
                background-position: -208px -110px;
            }
            .flag--gr {
                background-position: -48px -55px;
            }
            .flag--id {
                background-position: -256px -55px;
            }
            .flag--vc {
                background-position: -64px -154px;
            }
            .flag--somaliland {
                background-position: -96px -132px;
            }
            .flag--bi {
                background-position: -96px -11px;
            }
            .flag--pk {
                background-position: -160px -110px;
            }
            .flag--pr {
                background-position: -224px -110px;
            }
            .flag--bd {
                background-position: -16px -11px;
            }
            .flag--co {
                background-position: -192px -22px;
            }
            .flag--fm {
                background-position: -48px -44px;
            }
            .flag--bm {
                background-position: -128px -11px;
            }
            .flag--ar {
                background-position: -144px 0;
            }
            .flag--bv {
                background-position: -224px -11px;
            }
            .flag--sb {
                background-position: -144px -121px;
            }
            .flag--mq {
                background-position: -256px -88px;
            }
            .flag--eh {
                background-position: -176px -33px;
            }
            .flag--bh {
                background-position: -80px -11px;
            }
            .flag--it {
                background-position: -144px -66px;
            }
            .flag--hr {
                background-position: -192px -55px;
            }
            .flag--sa {
                background-position: -128px -121px;
            }
            .flag--mv {
                background-position: -64px -99px;
            }
            .flag--mg {
                background-position: -128px -88px;
            }
            .flag--dz {
                background-position: -112px -33px;
            }
            .flag--gg {
                background-position: -192px -44px;
            }
            .flag--gm {
                background-position: -256px -44px;
            }
            .flag--af {
                background-position: -32px 0;
            }
            .flag--li {
                background-position: -208px -77px;
            }
            .flag--sr {
                background-position: -112px -132px;
            }
            .flag--vg {
                background-position: -96px -154px;
            }
            .flag--cr {
                background-position: -208px -22px;
            }
            .flag--tc {
                background-position: -224px -132px;
            }
            .flag--ao {
                background-position: -128px 0;
            }
            .flag--ma {
                background-position: -64px -88px;
            }
            .flag--mr {
                background-position: 0 -99px;
            }
            .flag--gn {
                background-position: 0 -55px;
            }
            .flag--ne {
                background-position: -176px -99px;
            }
            .flag--nf {
                background-position: -192px -99px;
            }
            .flag--wf {
                background-position: -176px -154px;
            }
            .flag--hk {
                background-position: -144px -55px;
            }
            .flag--gf {
                background-position: -160px -44px;
            }
            .flag--ps {
                background-position: -240px -110px;
            }
            .flag--ic {
                background-position: -240px -55px;
            }
            .flag--cw {
                background-position: -256px -22px;
            }
            .flag--ml {
                background-position: -176px -88px;
            }
            .flag--ax {
                background-position: -224px 0;
            }
            .flag--gl {
                background-position: -240px -44px;
            }
            .flag--dj {
                background-position: -48px -33px;
            }
            .flag--cn {
                background-position: -176px -22px;
            }
            .flag--ht {
                background-position: -208px -55px;
            }
            .flag--lr {
                background-position: -240px -77px;
            }
            .flag--tg {
                background-position: 0 -143px;
            }
            .flag--ba {
                background-position: -256px 0;
            }
            .flag--ge {
                background-position: -144px -44px;
            }
            .flag--bz {
                background-position: 0 -22px;
            }
            .flag--au {
                background-position: -192px 0;
            }
            .flag--iq {
                background-position: -96px -66px;
            }
            .flag--cm {
                background-position: -160px -22px;
            }
            .flag--gw {
                background-position: -112px -55px;
            }
            .flag--az {
                background-position: -240px 0;
            }
            .flag--na {
                background-position: -144px -99px;
            }
            .flag--fj {
                background-position: -16px -44px;
            }
            .flag--zw {
                background-position: -32px -165px;
            }
            .flag--bs {
                background-position: -192px -11px;
            }
            .flag--il {
                background-position: -16px -66px;
            }
            .flag--nz {
                background-position: -48px -110px;
            }
            .flag--me {
                background-position: -112px -88px;
            }
            .flag--si {
                background-position: -256px -121px;
            }
            .flag--nc {
                background-position: -160px -99px;
            }
            .flag--lb {
                background-position: -176px -77px;
            }
        </style>
        <style type="text/css">
            .ol {
                counter-reset: list-counter;
                list-style: none;
                text-align: left;
            }
            .ol__item {
                counter-increment: list-counter;
                margin-top: 1.125rem;
                color: var(--text-color);
                position: relative;
            }
            .ol__item:before {
                color: var(--primary-color);
                content: counter(list-counter) ".";
                position: absolute;
                left: -45px;
                top: 0;
            }
            .tfa {
                display: flex;
                flex-direction: column;
                align-items: center;
                flex-grow: 1;
                justify-content: flex-start;
            }
            .tfa__title {
                padding-top: 2.5rem;
                padding-bottom: 0.3125rem;
                font-size: var(--text-size-title);
                font-weight: var(--font-weight-medium);
                color: var(--text-color);
            }
            @media (--medium-and-down) {
                .tfa__title {
                    padding-top: 1.875rem;
                    font-size: var(--text-size-base);
                }
            }
            .tfa__subtitle {
                font-weight: var(--font-weight-normal);
                color: var(--subtitle-color);
                font-size: var(--text-size-medium);
                text-align: center;
                margin-top: 0.5rem;
            }
            @media (--medium-and-down) {
                .tfa__subtitle {
                    font-size: var(--text-size-normal);
                }
            }
            .tfa__content {
                margin-top: 4rem;
                max-width: 500px;
                text-align: left;
                font-weight: var(--font-weight-normal);
                color: var(--text-color-medium);
                font-size: var(--text-size-base);
                margin-bottom: 2rem;
            }
            .tfa__content--center {
                text-align: center;
            }
            .tfa__error {
                margin-top: 0.5rem;
                color: var(--error-color);
            }
        </style>
        <style type="text/css">
            .popover[data-v-f9de581a] {
                position: relative;
                display: inline-block;
            }
            .popover__trigger[data-v-f9de581a] {
                cursor: pointer;
            }
            .popover__content-wrap[data-v-f9de581a] {
                position: absolute;
                right: 0;
                top: 20px;
                padding-top: 0.875rem;
                z-index: 200;
            }
            .popover__content[data-v-f9de581a] {
                border: 1px solid var(--border-color);
                background: var(--background-color);
                border-radius: 3px;
                box-shadow: 0 3px 10px 0 var(--shadow-lighter);
                position: relative;
                min-width: 160px;
            }
            .popover__content[data-v-f9de581a]:before {
                top: -7px;
                right: 10px;
                border-left: 6px solid transparent;
                border-bottom: 6px solid var(--border-color);
                border-right: 6px solid transparent;
                border-top: 0 solid var(--border-color);
            }
            .popover__content[data-v-f9de581a]:after,
            .popover__content[data-v-f9de581a]:before {
                bottom: auto;
                left: auto;
                content: "";
                position: absolute;
                display: block;
                width: 0;
            }
            .popover__content[data-v-f9de581a]:after {
                top: -5px;
                right: 11px;
                border-left: 5px solid transparent;
                border-bottom: 5px solid var(--background-color);
                border-right: 5px solid transparent;
                border-top: 0 solid var(--background-color);
            }
            .popover__content ul[data-v-f9de581a] {
                margin: 0;
                padding: 0;
                list-style: none outside none;
            }
            .popover__content li a[data-v-f9de581a] {
                color: var(--text-color-medium-light);
                display: inline-block;
                padding: 0.75rem 1.125rem;
                cursor: pointer;
                white-space: nowrap;
                font-size: var(--text-size-base);
                font-weight: var(--font-weight-normal);
            }
            .popover__content li a[data-v-f9de581a]:hover {
                color: var(--text-color-medium-dark);
            }
        </style>
        <style type="text/css">
            .progress_bar[data-v-03a04b74] {
                width: 100%;
                height: 4px;
                position: relative;
            }
            progress[data-v-03a04b74] {
                position: absolute;
                left: 0;
                overflow: hidden;
                background-color: var(--progress-bar-color);
            }
            progress[value][data-v-03a04b74] {
                border: none;
                width: 100%;
                border-radius: 4px;
                height: 4px;
            }
            progress[value][data-v-03a04b74]::-webkit-progress-bar {
                border-radius: 4px;
                background-color: var(--progress-bar-color);
            }
            progress[value][data-v-03a04b74]::-webkit-progress-value {
                border-radius: 4px;
                -webkit-transition: width var(--default-transition-time);
                transition: width var(--default-transition-time);
                background-color: var(--error-color);
            }
            progress[value][data-v-03a04b74]::-moz-progress-bar {
                -moz-transition: padding-bottom var(--default-transition-time);
                transition: padding-bottom var(--default-transition-time);
                padding-left: 0.25rem;
                padding-bottom: 0;
                background-color: var(--error-color);
                height: 0;
                transform-origin: 0 0;
                transform: rotate(-90deg) translateX(-4px);
            }
            progress[value][data-v-03a04b74]::-ms-fill {
                background-color: var(--error-color);
                border-radius: 4px;
            }
            .progress_bar--pass progress[value][data-v-03a04b74]::-webkit-progress-value {
                background-color: var(--primary-color);
            }
            .progress_bar--pass progress[value][data-v-03a04b74]::-moz-progress-bar {
                background-color: var(--primary-color);
            }
            .progress_bar--pass progress[value][data-v-03a04b74]::-ms-fill {
                background-color: var(--primary-color);
                border-color: currentColor;
            }
        </style>
        <style type="text/css">
            .mobile-side-panel[data-v-0f33cd69] {
                z-index: 2;
                width: 100%;
                max-width: 330px;
                min-width: 280px;
                position: fixed;
                right: 0;
                bottom: 0;
                top: 0;
                transition: background var(--default-transition-time) var(--default-transition-curve);
            }
            .mobile-side-panel .mobile-side-button[data-v-0f33cd69] {
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 2;
                top: 4px;
                right: 4px;
                background: transparent;
                box-shadow: none !important;
            }
            .mobile-side-panel .mobile-side-button__icon[data-v-0f33cd69] {
                width: 20px;
            }
            .mobile-side-panel .mobile-side-button[data-v-0f33cd69]:hover {
                transform: scale(1.1);
            }
            .mobile-side-panel .mobile-side-content[data-v-0f33cd69] {
                height: 100%;
                background: var(--background-color);
                max-height: 100vh;
                box-shadow: 0 2px 40px 0 var(--shadow-light);
            }
            .mobile-side-panel .mobile-side-content__header-logo[data-v-0f33cd69] {
                height: 20px;
            }
            .mobile-side-panel .mobile-side-content ul[data-v-0f33cd69] {
                margin: 0;
                padding: 0;
                list-style: none outside none;
            }
            .mobile-side-panel .mobile-side-content ul li.text--plain[data-v-0f33cd69],
            .mobile-side-panel .mobile-side-content ul li a[data-v-0f33cd69] {
                padding: 0.75rem 0;
            }
            .mobile-side-panel .mobile-side-content ul li a[data-v-0f33cd69] {
                color: var(--link-color);
                font-size: var(--text-size-base);
                font-weight: var(--font-weight-medium);
                text-decoration: none;
            }
            .mobile-side-panel .mobile-side-content__header[data-v-0f33cd69] {
                border-bottom: 1px solid var(--border-color);
                padding: 0.875rem 1.375rem 0.8125rem;
                height: 56px;
                display: flex;
                align-items: center;
            }
            .mobile-side-panel .mobile-side-content__text[data-v-0f33cd69] {
                padding: 0.625rem 1.75rem;
                max-height: calc(100vh - 56px);
                overflow-y: auto;
                overflow-x: hidden;
                -webkit-overflow-scrolling: touch;
            }
            .mobile-side-panel .mobile-side-mobile-backdrop[data-v-0f33cd69] {
                display: block;
                position: absolute;
                left: -100vw;
                top: 0;
                bottom: 0;
                width: 100vw;
                background-color: var(--shadow-lighter);
                opacity: 1;
                z-index: -1;
                transition: opacity var(--default-transition-time) var(--default-transition-curve);
            }
            .slide-enter-active[data-v-0f33cd69],
            .slide-leave-active[data-v-0f33cd69] {
                transition: transform var(--default-transition-time) var(--default-transition-curve);
            }
            .slide-enter-active .mobile-side-mobile-backdrop[data-v-0f33cd69],
            .slide-leave-active .mobile-side-mobile-backdrop[data-v-0f33cd69] {
                opacity: 1;
            }
            .slide-enter[data-v-0f33cd69],
            .slide-leave-to[data-v-0f33cd69] {
                transform: translateX(100%);
            }
            .slide-enter .mobile-side-mobile-backdrop[data-v-0f33cd69],
            .slide-leave-to .mobile-side-mobile-backdrop[data-v-0f33cd69] {
                opacity: 0;
            }
        </style>
        <style type="text/css">
            .navigation[data-v-5f710f09] {
                height: 65px;
                min-height: 65px;
                display: flex;
                background-color: var(--background-color);
                box-shadow: 0 0 10px var(--shadow-lighter);
                justify-content: space-between;
                align-items: center;
                padding: 0 2.75rem;
                counter-reset: navStep;
            }
            @media (max-width: 768px) {
                .navigation[data-v-5f710f09] {
                    height: 55px;
                    min-height: 55px;
                    padding: 0 1.375rem;
                    position: fixed;
                    width: 100%;
                    max-width: 100vw;
                }
            }
            .navigation ul[data-v-5f710f09] {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                list-style: none;
            }
            .navigation li[data-v-5f710f09] {
                width: 100%;
            }
            .navigation li > a[data-v-5f710f09] {
                width: 100%;
                text-align: start;
            }
            .navigation-wrap[data-v-5f710f09] {
                z-index: 30;
            }
            @media (max-width: 768px) {
                .navigation-wrap[data-v-5f710f09] {
                    height: 55px;
                    min-height: 55px;
                }
            }
            .navigation__logo > a[data-v-5f710f09]:focus {
                outline: none;
            }
            .navigation__logo[data-v-5f710f09] {
                height: 20px;
            }
            @media (max-width: 768px) {
                .navigation--non-first-step .navigation__logo[data-v-5f710f09],
                .navigation--steps-visible .navigation__logo[data-v-5f710f09],
                .navigation__logo[data-v-5f710f09] {
                    display: none;
                }
            }
            .navigation__progress[data-v-5f710f09] {
                flex: 3 1;
            }
            @media (min-width: 769px) {
                .navigation__progress[data-v-5f710f09] {
                    max-width: 500px;
                }
            }
            .navigation__back-arrow[data-v-5f710f09],
            .navigation__mobile-logo[data-v-5f710f09] {
                display: none;
            }
            @media (max-width: 768px) {
                .navigation__back-arrow[data-v-5f710f09],
                .navigation__mobile-logo[data-v-5f710f09] {
                    display: block;
                }
            }
            .navigation__mobile-logo[data-v-5f710f09] {
                width: 20px;
                height: 30px;
            }
            .navigation__profile .popover[data-v-5f710f09] {
                width: 100%;
            }
            .navigation__profile[data-v-5f710f09] {
                text-align: right;
                color: var(--link-color);
                cursor: pointer;
                min-width: 0;
            }
            @media (max-width: 768px) {
                .navigation__profile[data-v-5f710f09] {
                    display: none;
                }
            }
            .navigation__profile .navigation__popover-caret[data-v-5f710f09] {
                width: var(--icon-size-small);
                height: var(--icon-size-small);
                margin-left: 0.5rem;
            }
            .navigation__profile .navigation__profile-name[data-v-5f710f09] {
                display: flex;
                align-items: center;
            }
            .navigation__profile .navigation__profile-name span[data-v-5f710f09] {
                flex-shrink: 1;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                min-width: 0;
                width: 100%;
            }
            .navigation__profile a[data-v-5f710f09] {
                font-size: var(--text-size-base);
            }
            .navigation__cross[data-v-5f710f09] {
                text-align: right;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }
            .navigation__menu[data-v-5f710f09] {
                text-align: right;
                cursor: pointer;
                display: none;
            }
            @media (max-width: 768px) {
                .navigation__menu[data-v-5f710f09] {
                    display: flex;
                    align-items: center;
                    justify-content: flex-end;
                }
            }
            .navigation__side[data-v-5f710f09] {
                flex: 1 1;
            }
            .navigation__native-cross[data-v-5f710f09] {
                height: 20px;
                width: 20px;
                color: var(--text-color-medium-light);
            }
        </style>
        <style type="text/css">
            .layout {
                min-height: 100vh;
                height: 100vh;
                display: flex;
                flex-direction: column;
            }
        </style>
        <style type="text/css">
            .layout[data-v-554d74ba] {
                min-height: 100vh;
                height: 100vh;
                display: flex;
                flex-direction: column;
            }
        </style>
        <style type="text/css">
            .visibility-icon[data-v-240920d4] {
                width: 1em;
                height: 1em;
                color: inherit;
                cursor: pointer;
            }
        </style>
        <style type="text/css">
            input[type="tel"][data-v-ed983fd6] {
                -moz-appearance: textfield;
            }
            input[type="tel"][data-v-ed983fd6]::-webkit-inner-spin-button,
            input[type="tel"][data-v-ed983fd6]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            .two-factor-form__label[data-v-ed983fd6] {
                color: var(--text-color-medium-dark);
                font-size: var(--text-size-small);
                padding-bottom: 0.375rem;
            }
            .two-factor-form__wrap[data-v-ed983fd6] {
                display: flex;
                justify-content: space-between;
            }
            .two-factor-form__input-wrap[data-v-ed983fd6] {
                margin-right: 1.25rem;
                flex: 1 1;
                max-width: 100px;
                position: relative;
            }
            @media (max-width: 768px) {
                .two-factor-form__input-wrap[data-v-ed983fd6] {
                    margin-right: 0.625rem;
                }
            }
            .two-factor-form__input-wrap[data-v-ed983fd6]:last-child {
                margin-right: 0;
            }
            .two-factor-form__input[type="tel"][data-v-ed983fd6] {
                font-weight: unset;
                outline: none;
                font-size: var(--text-size-large);
                vertical-align: top;
                text-align: center;
                height: 70px;
                width: 100%;
                border: none;
                padding: 0;
                border-radius: 0;
                border-bottom: 1px solid var(--border-color-dark);
                background: transparent;
            }
            .two-factor-form__input-visibility[data-v-ed983fd6] {
                align-self: center;
                color: var(--text-color-medium);
                font-size: var(--text-size-base);
            }
            .two-factor-form__input-visibility[data-v-ed983fd6]:hover {
                color: var(--text-color-medium-dark);
            }
            .field-mask[data-v-ed983fd6] {
                width: 100%;
                height: 60px;
                position: absolute;
                margin-top: -4rem;
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--text-color);
                font-size: var(--text-size-medium);
                font-weight: var(--font-weight-medium);
                background-color: var(--background-color);
                pointer-events: none;
            }
            .field-mask-enter-active[data-v-ed983fd6],
            .field-mask-leave-active[data-v-ed983fd6] {
                transition: opacity 0.1s ease 0.2s;
            }
            .field-mask-enter[data-v-ed983fd6],
            .field-mask-leave-to[data-v-ed983fd6] {
                opacity: 0;
            }
        </style>
        <style type="text/css">
            .button[data-v-813efc18] {
                font-size: var(--text-size-normal);
                font-family: var(--default-font-family);
                width: 320px;
                font-weight: var(--font-weight-medium);
                padding: 0.688rem 2em;
                line-height: 1.2;
                cursor: pointer;
                color: var(--text-color);
                background: var(--background-color-lighter);
                border: 1px solid transparent;
                transition: background 0.15s var(--default-transition-curve);
                border-radius: var(--button-border-radius);
            }
            .button[data-v-813efc18]:disabled {
                opacity: 0.3;
                pointer-events: none;
            }
            .button:disabled.button--shadow[data-v-813efc18] {
                box-shadow: none;
                cursor: default;
            }
            .button[data-v-813efc18]:focus {
                outline: none;
            }
            .button.button--rounded[data-v-813efc18] {
                border-radius: var(--button-border-radius-rounded);
            }
            .button.button--bordered[data-v-813efc18] {
                background: transparent;
                color: var(--primary-color);
                border: 1px solid var(--primary-color);
            }
            @media (max-width: 576px) {
                .button--fluid[data-v-813efc18] {
                    max-width: 80vw;
                    width: 100%;
                }
            }
            .button--width-auto[data-v-813efc18] {
                width: auto;
                min-width: unset;
            }
            .button--tiny[data-v-813efc18] {
                min-width: 70px;
                max-height: 30px;
                width: auto;
                padding: 0.5rem;
                font-size: var(--text-size-xs);
            }
            .button--small[data-v-813efc18] {
                max-width: 200px;
                font-size: var(--text-size-normal);
                max-height: 41px;
            }
            .button--medium[data-v-813efc18] {
                padding: 0.594rem 1.5rem;
                font-size: var(--text-size-small);
                width: auto;
                min-width: 8.334em;
            }
            .button--medium.button--side-margin[data-v-813efc18] {
                margin-left: 0.5rem;
                margin-right: 0.5rem;
            }
            .button--side-margin[data-v-813efc18] {
                margin-left: 1rem;
                margin-right: 1rem;
            }
            .button--regular[data-v-813efc18] {
                color: var(--text-color-bright);
                background-color: var(--primary-color);
            }
            .button--regular[data-v-813efc18]:focus,
            .button--regular[data-v-813efc18]:hover {
                border-color: var(--primary-hover-color);
                background: var(--primary-hover-color);
                color: var(--text-color-bright);
            }
            .button--regular.button--shadow[data-v-813efc18] {
                box-shadow: 0 2px 4px 0 var(--shadow-light);
            }
            .button--regular[data-v-813efc18]:active {
                background: var(--primary-hover-color);
                border-color: var(--primary-hover-color);
                box-shadow: 0 0 0 0.2rem rgba(21, 158, 73, 0.23);
            }
            .button--secondary[data-v-813efc18] {
                background-color: var(--background-color);
                color: var(--text-color);
                box-shadow: none;
                border: 1px solid;
            }
            .button--secondary.button--active[data-v-813efc18],
            .button--secondary[data-v-813efc18]:focus,
            .button--secondary[data-v-813efc18]:hover {
                color: var(--text-color-bright);
                background-color: var(--text-color);
                border: 1px solid var(--text-color);
            }
            .button--secondary[data-v-813efc18]:active {
                background: var(--text-color);
                border-color: var(--text-color);
                box-shadow: 0 0 0 0.2rem rgba(51, 52, 51, 0.23);
            }
            .button--link[data-v-813efc18] {
                background-color: inherit;
                color: var(--link-color);
                font-size: var(--text-size-base);
                font-weight: var(--font-weight-medium);
                text-decoration: none;
                line-height: 1.5rem;
                cursor: pointer;
            }
            .button--link[data-v-813efc18]:focus,
            .button--link[data-v-813efc18]:hover {
                color: var(--link-hover-color);
                background-color: inherit;
                border-color: transparent;
            }
            .button--link[data-v-813efc18]:focus:not(:hover) {
                color: var(--link-color);
            }
            .button--link[data-v-813efc18]:active {
                box-shadow: none;
            }
            .button--icon[data-v-813efc18] {
                font-size: var(--text-size-large);
                width: var(--button-icon-size);
                height: var(--button-icon-size);
                color: var(--text-color);
                background: var(--button-icon-color);
                text-align: center;
                overflow: hidden;
                text-overflow: clip;
                white-space: nowrap;
                padding: 0;
            }
            .button--icon:disabled.button--shadow[data-v-813efc18] {
                box-shadow: 0 5px 20px 0 var(--shadow-lighter);
            }
            .button--icon:focus.button--shadow[data-v-813efc18] {
                box-shadow: 0 5px 20px 0 var(--shadow);
            }
            .button--icon[data-v-813efc18]:active {
                background-color: var(--button-icon-active-color);
            }
            .button--icon.button--shadow[data-v-813efc18] {
                box-shadow: 0 5px 20px 0 var(--shadow-lighter);
            }
            .button--sell[data-v-813efc18] {
                background: var(--sell-color);
            }
            .button--sell[data-v-813efc18]:hover {
                background: var(--sell-color-transparent-80);
            }
            .button--buy[data-v-813efc18] {
                background: var(--buy-color);
            }
            .button--buy[data-v-813efc18]:hover {
                background: var(--primary-hover-color);
            }
            .button--in-progress[data-v-813efc18] {
                cursor: progress;
            }
            .button--backoffice[data-v-813efc18] {
                height: 41px;
                border-radius: 6px;
            }
            .button--info[data-v-813efc18] {
                background-color: var(--secondary-color);
                border-color: var(--secondary-color);
            }
            .button--info[data-v-813efc18]:focus,
            .button--info[data-v-813efc18]:hover {
                border-color: var(--secondary-color);
                background: var(--secondary-hover-color);
            }
            .button--info[data-v-813efc18]:active {
                background: var(--secondary-pressed-color);
                border-color: var(--secondary-color);
                box-shadow: 0 0 0 0.2rem var(--secondary-outline-color);
            }
            .button--warning[data-v-813efc18] {
                background-color: var(--warning-color);
                border-color: var(--warning-color);
            }
            .button--warning[data-v-813efc18]:focus,
            .button--warning[data-v-813efc18]:hover {
                border-color: var(--warning-color);
                background: var(--warning-hover-color);
            }
            .button--warning[data-v-813efc18]:active {
                background: var(--warning-pressed-color);
                border-color: var(--warning-pressed-color);
                box-shadow: 0 0 0 0.2rem var(--warning-outline-color);
            }
            .button--error[data-v-813efc18] {
                background-color: var(--tertiary-color);
                border-color: var(--tertiary-color);
            }
            .button--error[data-v-813efc18]:focus,
            .button--error[data-v-813efc18]:hover {
                border-color: var(--tertiary-color);
                background: var(--tertiary-hover-color);
            }
            .button--error[data-v-813efc18]:active {
                background: var(--tertiary-pressed-color);
                border-color: var(--tertiary-color);
                box-shadow: 0 0 0 0.2rem var(--tertiary-outline-color);
            }
            .button--content-container[data-v-813efc18] {
                max-height: 30px;
                width: auto;
                font-size: var(--text-size-small);
                font-weight: var(--font-weight-normal);
                padding: 0.4rem 1.3em;
                min-width: 2em;
            }
        </style>
        <style type="text/css">
            .modal_tGwtk {
                font-size: var(--text-size-normal);
            }
            .modal--is-open_g0t\+B {
                overflow: hidden;
            }
            .modal__mask_OLjdq {
                background-color: var(--modal-backdrop-color);
                display: table;
                height: 100%;
                left: 0;
                position: fixed;
                top: 0;
                transition: opacity 0.3s ease;
                width: 100%;
                z-index: 1000;
            }
            .modal__mask--below-page-header_hJQv9 {
                z-index: 14;
            }
            .modal__wrapper_F\+DHt {
                display: table-cell;
                vertical-align: middle;
                overflow-x: hidden;
                outline: none;
            }
            .modal__container_U8RxZ {
                margin: 0 auto;
                max-height: 100vh;
                max-width: 100vw;
                outline: none;
                transition: transform 0.3s ease;
                width: 528px;
                background-color: var(--modal-background-color);
                border-radius: var(--modal-border-radius);
                box-shadow: 0 2px 10px 0 var(--shadow-lighter);
                position: relative;
                overflow-y: auto;
            }
            .modal__container_U8RxZ .modal__inner-wrap_S1TxT {
                border-radius: var(--modal-border-radius);
                padding: 5rem 3rem 3rem;
            }
            @media (max-width: 768px) {
                .modal__container_U8RxZ .modal__inner-wrap_S1TxT {
                    padding: 5rem 2rem 3rem;
                }
            }
            .modal__container_U8RxZ .modal__inner-wrap--even-padding_HDRVU {
                padding: 1.5rem;
            }
            @media (min-width: 577px) {
                .modal__container_U8RxZ .modal__inner-wrap--even-padding_HDRVU {
                    padding: 3rem;
                }
            }
            .modal__header_ZUUiP {
                align-items: center;
                display: flex;
                justify-content: center;
                position: relative;
                z-index: 1;
                padding-bottom: 1rem;
                text-align: center;
            }
            .modal__header--sticky_9fNYH {
                position: sticky;
                top: 0;
                margin-top: -1.5rem;
                padding: 1.5rem 0;
                background-color: var(--background-color);
                border-bottom: 1px solid var(--border-color-lighter);
                z-index: 2;
            }
            .modal__header-text_fC7oP {
                align-items: center;
                justify-content: center;
                display: flex;
                flex-grow: 1;
                font-size: var(--text-size-title-small);
                line-height: 1.375;
                font-weight: var(--font-weight-medium);
                margin: 0;
            }
            .modal__close-button_XCInO {
                position: absolute;
                top: 1rem;
                right: 1rem;
                box-shadow: none;
            }
            .modal__body_0A72j {
                overflow-y: auto;
                overflow-x: hidden;
                padding: 0.5rem 0;
            }
            .modal__footer_-3XW1 {
                align-items: center;
                display: flex;
                justify-content: center;
                padding-top: 2rem;
                margin-bottom: 2.25rem;
            }
            .modal--size-normal_RPujE .modal__inner-wrap_S1TxT {
                box-shadow: 0 0 30px 0 var(--shadow-lighter);
                background-color: var(--modal-background-color);
                height: 100%;
            }
            .modal--size-normal_RPujE .modal__container_U8RxZ {
                width: 600px;
            }
            .modal--size-large_Ml\+1d .modal__body_0A72j {
                height: 100%;
            }
            .modal--size-large_Ml\+1d .modal__wrapper_F\+DHt {
                vertical-align: bottom;
                height: 100vh;
            }
            .modal--size-large_Ml\+1d .modal__container_U8RxZ {
                max-width: 800px;
                width: 70%;
                border-radius: var(--modal-border-radius) var(--modal-border-radius) 0 0;
                overflow-y: auto;
            }
            @media (max-height: 700px), (max-width: 768px) {
                .modal--size-large_Ml\+1d .modal__container_U8RxZ {
                    width: 100%;
                    margin: 0;
                    max-width: none;
                }
            }
            .modal--size-large_Ml\+1d .modal__inner-wrap_S1TxT {
                background-color: var(--modal-background-color);
                border-radius: var(--modal-border-radius) var(--modal-border-radius) 0 0;
                height: 100%;
            }
            .modal--size-xlarge_JlRBK .modal__body_0A72j {
                height: 100%;
            }
            .modal--size-xlarge_JlRBK .modal__wrapper_F\+DHt {
                vertical-align: bottom;
                height: 100vh;
                overflow: auto;
            }
            .modal--size-xlarge_JlRBK .modal__container_U8RxZ {
                max-width: 60vw;
                width: 70%;
                border-radius: var(--modal-border-radius) var(--modal-border-radius) 0 0;
            }
            @media (max-height: 700px), (max-width: 768px) {
                .modal--size-xlarge_JlRBK .modal__container_U8RxZ {
                    width: 100%;
                    margin: 0;
                    max-width: none;
                }
            }
            .modal--size-xlarge_JlRBK .modal__inner-wrap_S1TxT {
                background-color: var(--modal-background-color);
                border-radius: var(--modal-border-radius) var(--modal-border-radius) 0 0;
                height: 100%;
            }
            .modal--size-fullwidth_vOs9Q .modal__body_0A72j {
                height: 100%;
            }
            .modal--size-fullwidth_vOs9Q .modal__container_U8RxZ {
                width: 100vw;
            }
            .modal--size-fullwidth_vOs9Q .modal__wrapper_F\+DHt {
                vertical-align: bottom;
                height: 100vh;
                overflow: auto;
            }
            .modal--size-fullwidth_vOs9Q .modal__inner-wrap_S1TxT {
                background-color: var(--modal-background-color);
                border-radius: var(--modal-border-radius) var(--modal-border-radius) 0 0;
                height: 100%;
            }
            .modal--size-small_Q3lvP .modal__container_U8RxZ {
                width: 320px;
            }
        </style>
        <style type="text/css">
            .modal--transition-slide-enter[data-v-3243d373],
            .modal--transition-slide-leave-active[data-v-3243d373] {
                opacity: 0;
            }
            .modal--transition-slide-enter .wc-modal__wrapper[data-v-3243d373],
            .modal--transition-slide-leave-active .wc-modal__wrapper[data-v-3243d373] {
                overflow: hidden;
            }
            .modal--transition-slide-enter .wc-modal__container[data-v-3243d373],
            .modal--transition-slide-leave-active .wc-modal__container[data-v-3243d373] {
                transform: translateY(100%);
            }
            .modal--transition-slide-enter-active .wc-modal__wrapper[data-v-3243d373] {
                overflow: hidden;
            }
        </style>
        <style type="text/css">
            *,
            :after,
            :before {
                box-sizing: border-box;
                margin: 0;
            }
        </style>
        <style type="text/css">
            .tfa-modal__content[data-v-54d20bf6] {
                display: flex;
                flex-direction: column;
                align-items: center;
                height: 100%;
                min-height: 60vh;
            }
            .tfa-modal__icon[data-v-54d20bf6] {
                width: var(--icon-size-big);
                height: var(--icon-size-big);
                display: block;
                margin-top: 1.5rem;
            }
            .tfa-modal__middle[data-v-54d20bf6] {
                flex: 1 1;
                display: flex;
                justify-content: center;
                align-items: center;
                max-width: 500px;
                flex-direction: column;
            }
            @media (min-width: 769px) and (max-width: 992px) {
                .tfa-modal__middle[data-v-54d20bf6] {
                    min-height: 400px;
                }
            }
            @media (max-width: 768px) {
                .tfa-modal__middle[data-v-54d20bf6] {
                    min-height: 200px;
                }
            }
            .tfa-modal__error[data-v-54d20bf6] {
                display: block;
            }
            .tfa-modal__submit[data-v-54d20bf6] {
                margin-bottom: 2rem;
            }
            @media (max-width: 768px) {
                .tfa-modal__submit[data-v-54d20bf6] {
                    margin-bottom: 1rem;
                }
            }
        </style>
        <style type="text/css">
            [class^="text-input"][data-v-4148cf34] {
                all: unset;
                box-sizing: border-box;
                display: block;
            }
            .text-input[data-v-4148cf34] {
                position: relative;
                width: 100%;
                min-height: 72px;
                display: flex;
                flex-direction: column;
            }
            .text-input__wrapper[data-v-4148cf34] {
                display: flex !important;
            }
            .text-input__postfix[data-v-4148cf34] {
                font-size: var(--text-size-normal);
                right: 0;
            }
            .text-input__postfix[data-v-4148cf34],
            .text-input__prefix[data-v-4148cf34] {
                align-self: center;
                color: var(--text-color-light);
                position: absolute;
            }
            .text-input__prefix[data-v-4148cf34] {
                font-size: var(--text-size-base);
                left: 1rem;
            }
            .text-input__copy[data-v-4148cf34] {
                position: absolute;
                top: 1.5rem;
                right: 0;
            }
            .text-input__copy-icon[data-v-4148cf34] {
                width: 1.25rem;
                height: 1.25rem;
                cursor: pointer;
                color: var(--secondary-color);
            }
            .text-input__copy-icon[data-v-4148cf34]:hover {
                color: var(--secondary-hover-color);
            }
            .text-input__copy-text[data-v-4148cf34] {
                font-weight: var(--font-weight-light);
                font-size: var(--text-size-xs);
                color: var(--text-color);
            }
            .text-input__password-visibility[data-v-4148cf34] {
                align-self: center;
                color: var(--text-color-medium);
                font-size: var(--text-size-base);
                position: absolute;
                right: 0.75rem;
            }
            .text-input__password-visibility[data-v-4148cf34]:hover {
                color: var(--text-color-medium-dark);
            }
            .text-input__label[data-v-4148cf34] {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                width: inherit;
                pointer-events: none;
                font-weight: var(--font-weight-light);
                font-size: var(--text-size-small);
                line-height: 1.2;
                color: var(--input-label-color);
            }
            .text-input__label--transition[data-v-4148cf34] {
                transition: all var(--default-transition-time) var(--default-transition-curve);
            }
            .text-input__label--placeholder[data-v-4148cf34] {
                cursor: text;
                top: 20px;
                font-size: var(--text-size-base);
                color: var(--input-placeholder-color);
            }
            .text-input__field[data-v-4148cf34] {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                font-family: var(--default-font-family);
                display: block;
                height: 32px;
                line-height: 2rem;
                width: 100%;
                padding: 0;
                margin: 1.125rem 0 1.25rem;
                border-radius: 0;
                border: none;
                border-bottom: 1px solid var(--input-border-color);
                font-size: var(--text-size-base);
                color: var(--input-border-color-focused);
                transition: border-bottom-color var(--default-transition-time) var(--default-transition-curve);
            }
            .text-input__field[data-v-4148cf34]:focus {
                outline: none;
                border-bottom-color: var(--input-border-color-focused);
            }
            .text-input__field[data-v-4148cf34]:-webkit-autofill {
                animation-name: onAutoFillStart;
                -webkit-transition: background-color 5000s ease-in-out 0s;
                transition: background-color 5000s ease-in-out 0s;
            }
            .text-input__field[data-v-4148cf34]:not(:-webkit-autofill) {
                animation-name: onAutoFillCancel;
            }
            .text-input__field.text-input__field--error[data-v-4148cf34] {
                border-bottom-color: var(--error-color);
            }
            .text-input__field[data-v-4148cf34]:disabled {
                cursor: not-allowed;
                pointer-events: auto;
            }
            .text-input__field[data-v-4148cf34]:read-only {
                color: var(--text-color-medium-light);
                border-bottom-color: var(--input-border-color-readonly);
            }
            .text-input__field--align-end[data-v-4148cf34] {
                text-align: end;
            }
            .text-input__field--padding-right[data-v-4148cf34] {
                padding-right: 2.5rem;
            }
            .text-input__field--light-border[data-v-4148cf34],
            .text-input__field--light-border[data-v-4148cf34]:focus {
                border: 1px solid var(--input-border-color-empty);
            }
            .text-input__field--dark-border[data-v-4148cf34],
            .text-input__field--dark-border[data-v-4148cf34]:focus {
                border: 1px solid var(--input-border-color-focused);
            }
            .text-input__field--red-border[data-v-4148cf34],
            .text-input__field--red-border[data-v-4148cf34]:focus {
                border: 1px solid var(--error-color);
            }
            .text-input__errors[data-v-4148cf34] {
                margin: -1.125rem 0 0;
                color: var(--error-color);
                font-size: var(--text-size-small);
            }
            .text-area__field[data-v-4148cf34] {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                font-family: var(--default-font-family);
                display: block;
                min-height: 250px;
                width: 100%;
                padding: 0.625rem;
                margin: 1.125rem 0 1.25rem;
                border-radius: 0;
                border: 1px solid var(--input-border-color);
                font-size: var(--text-size-base);
                color: var(--input-border-color-focused);
                transition: border-bottom-color var(--default-transition-time) var(--default-transition-curve);
                resize: both;
            }
            .text-area__field[data-v-4148cf34]:focus {
                outline: none;
                border: 1px solid var(--input-border-color-focused);
            }
            .text-area__field[data-v-4148cf34]:-webkit-autofill {
                animation-name: onAutoFillStart;
                -webkit-transition: background-color 5000s ease-in-out 0s;
                transition: background-color 5000s ease-in-out 0s;
            }
            .text-area__field[data-v-4148cf34]:not(:-webkit-autofill) {
                animation-name: onAutoFillCancel;
            }
            .text-area__field--error[data-v-4148cf34] {
                border-color: var(--error-color);
            }
            .text-area__field[data-v-4148cf34]:disabled {
                cursor: not-allowed;
                pointer-events: auto;
            }
            .textarea-input__label--placeholder[data-v-4148cf34] {
                cursor: text;
                top: 30px;
                left: 15px;
                font-size: var(--text-size-base);
                color: var(--input-placeholder-color);
            }
            .text-input--market[data-v-4148cf34] {
                min-height: 50px;
            }
            .text-input--market .text-input__field[data-v-4148cf34] {
                height: 50px;
                width: 100%;
                font-size: var(--text-size-base);
                border-radius: var(--button-border-radius);
                background: var(--background-color);
                border: 1px solid var(--border-color-light);
                padding: 0 2em 0 1em;
                margin: 0;
                color: var(--text-color);
                box-sizing: border-box;
            }
            .text-input--market .text-input__label[data-v-4148cf34] {
                padding: 0 0.5em;
                margin-left: 0.5rem;
                top: -0.5em;
                width: auto;
                background-color: var(--background-color);
            }
            .text-input--market .text-input__label--placeholder[data-v-4148cf34] {
                top: 1rem;
                font-size: var(--text-size-normal);
            }
            .text-input--market.text-input--error .text-input__field[data-v-4148cf34] {
                border-color: var(--error-color);
            }
            .text-input--backoffice .text-input__field[data-v-4148cf34] {
                border: 1px solid var(--input-border-color);
                height: 45px;
                padding: 0 1rem;
                margin-bottom: 0;
            }
            .text-input--backoffice .text-input__field--table-cell[data-v-4148cf34] {
                height: 32px;
                margin: 0;
            }
            .text-input--backoffice .text-input__label[data-v-4148cf34] {
                top: -4px;
                font-size: var(--text-size-base);
            }
            .text-input--backoffice .text-input__label--table-cell[data-v-4148cf34] {
                top: -17px;
            }
            .text-input--backoffice .text-input__errors[data-v-4148cf34] {
                margin: 0;
            }
            .text-input--hidden[data-v-4148cf34] {
                min-height: 0;
                height: 0;
            }
            .text-input--hidden .text-input__label[data-v-4148cf34] {
                display: none;
            }
            .table-cell-input[data-v-4148cf34] {
                min-height: 0;
            }
            .fade-enter-active[data-v-4148cf34],
            .fade-leave-active[data-v-4148cf34] {
                transition: opacity var(--transition-time-quick);
            }
            .fade-enter[data-v-4148cf34],
            .fade-leave-to[data-v-4148cf34] {
                opacity: 0;
            }
            .error-expand-enter-active[data-v-4148cf34],
            .error-expand-leave-active[data-v-4148cf34] {
                max-height: 10rem;
                overflow: hidden;
                transition: max-height var(--default-transition-time) ease-out, opacity var(--transition-time-quick) ease;
            }
            .error-expand-enter[data-v-4148cf34],
            .error-expand-leave-to[data-v-4148cf34] {
                max-height: 0;
                opacity: 0;
            }
        </style>
        <style type="text/css">
            .markdown[data-v-31e352c0] pre {
                display: block;
                padding: 0.59375rem;
                margin: 0 0 0.625rem;
                font-size: 0.8125rem;
                line-height: 1.42857143;
                word-break: break-all;
                word-wrap: break-word;
                background-color: var(--background-color-lighter);
                border: 1px solid var(--border-color);
                border-radius: 4px;
            }
            .markdown[data-v-31e352c0] ul {
                margin-top: 0.3125rem;
                margin-bottom: 0.625rem;
                padding-left: 0.9375rem;
                list-style: none;
                position: relative;
            }
            .markdown[data-v-31e352c0] ul li:before {
                content: "− ";
                position: absolute;
                left: 0;
            }
            .markdown[data-v-31e352c0] blockquote {
                padding: 0.625rem 1.25rem;
                margin: 0 0 1.25rem;
                font-size: 1.09375rem;
                border-left: 5px solid var(--border-color);
            }
            .markdown[data-v-31e352c0] code {
                font-family: var(--code-font-family);
                padding: 0.125rem 0.25rem;
                font-size: 90%;
                color: var(--text-color-medium-dark);
                border-radius: 4px;
            }
            .markdown[data-v-31e352c0] hr {
                margin-top: 1.25rem;
                margin-bottom: 1.25rem;
                border: 0;
                border-top: 1px solid var(--border-color);
            }
            .markdown[data-v-31e352c0] p {
                margin-bottom: 0.625rem;
            }
            .markdown[data-v-31e352c0] p:last-of-type {
                margin-bottom: 0;
            }
            .markdown[data-v-31e352c0] h1,
            .markdown[data-v-31e352c0] h2,
            .markdown[data-v-31e352c0] h3,
            .markdown[data-v-31e352c0] h4,
            .markdown[data-v-31e352c0] h5,
            .markdown[data-v-31e352c0] h6 {
                margin-bottom: 0.5rem !important;
                margin-top: 0 !important;
            }
            .markdown[data-v-31e352c0] h1:not(:first-child),
            .markdown[data-v-31e352c0] h2:not(:first-child),
            .markdown[data-v-31e352c0] h3:not(:first-child),
            .markdown[data-v-31e352c0] h4:not(:first-child),
            .markdown[data-v-31e352c0] h5:not(:first-child),
            .markdown[data-v-31e352c0] h6:not(:first-child) {
                margin-top: 1rem !important;
            }
        </style>
        <style type="text/css">
            .dialog__header[data-v-6de5483c] {
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                font-size: var(--text-size-big);
                font-weight: var(--font-weight-medium);
                margin: 0;
            }
            .warning[data-v-6de5483c] {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .warning__icon[data-v-6de5483c] {
                display: block;
                height: 64px;
                width: 64px;
                margin-bottom: 1rem;
            }
            .warning__title[data-v-6de5483c] {
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-medium);
            }
            .warning__message[data-v-6de5483c] {
                margin-top: 0.2rem;
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-normal);
            }
            .dialog__single-button[data-v-6de5483c] {
                text-align: center;
            }
            .dialog__two-buttons[data-v-6de5483c] {
                display: flex;
                justify-content: space-around;
            }
            .dialog__prompt-buttons[data-v-6de5483c] {
                padding-top: 0.625rem;
            }
        </style>
        <style type="text/css">
            .link[data-v-39b90c33] {
                color: var(--link-color);
                font-size: var(--text-size-base);
                font-weight: var(--font-weight-medium);
                text-decoration: none;
                line-height: 1.5rem;
                cursor: pointer;
            }
            @media (max-width: 768px) {
                .link[data-v-39b90c33] {
                    font-size: var(--text-size-base);
                }
            }
            .link[data-v-39b90c33]:hover {
                color: var(--link-hover-color);
            }
            .link[data-v-39b90c33]:focus {
                outline: none;
            }
        </style>
        <script charset="utf-8" src="./index_files/72052ab.js.download"></script>
        <script charset="utf-8" src="./index_files/70a5a5e.js.download"></script>
        <script charset="utf-8" src="./index_files/cc0168a.js.download"></script>
        <script charset="utf-8" src="./index_files/c5673f8.js.download"></script>
        <script charset="utf-8" src="./index_files/2eaaa45.js.download"></script>
        <style type="text/css">
            .resize-observer[data-v-8859cc6c] {
                border: none;
                background-color: initial;
                opacity: 0;
            }
            .resize-observer[data-v-8859cc6c],
            .resize-observer[data-v-8859cc6c] object {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                width: 100%;
                height: 100%;
                pointer-events: none;
                display: block;
                overflow: hidden;
            }
            .v-popper--theme-dropdown .v-popper__inner {
                background: #fff;
                color: #000;
                padding: 0.375rem;
                border-radius: 6px;
                border: 1px solid #ddd;
                box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
            }
            .v-popper--theme-dropdown .v-popper__arrow-inner {
                visibility: visible;
                border-color: #fff;
            }
            .v-popper--theme-dropdown .v-popper__arrow-outer {
                border-color: #ddd;
            }
            .v-popper__popper {
                z-index: 10000;
            }
            .v-popper__popper.v-popper__popper--hidden {
                visibility: hidden;
                opacity: 0;
                transition: opacity 0.15s, visibility 0.15s;
            }
            .v-popper__popper.v-popper__popper--shown {
                visibility: visible;
                opacity: 1;
                transition: opacity 0.15s;
            }
            .v-popper__popper.v-popper__popper--skip-transition,
            .v-popper__popper.v-popper__popper--skip-transition > .v-popper__wrapper {
                transition: none !important;
            }
            .v-popper__inner {
                position: relative;
            }
            .v-popper__arrow-container {
                width: 10px;
                height: 10px;
            }
            .v-popper__arrow-inner,
            .v-popper__arrow-outer {
                border-style: solid;
                position: absolute;
                top: 0;
                left: 0;
                width: 0;
                height: 0;
            }
            .v-popper__arrow-inner {
                visibility: hidden;
                border-width: 7px;
            }
            .v-popper__arrow-outer {
                border-width: 6px;
            }
            .v-popper__popper[data-popper-placement^="bottom"] .v-popper__arrow-inner,
            .v-popper__popper[data-popper-placement^="top"] .v-popper__arrow-inner {
                left: -2px;
            }
            .v-popper__popper[data-popper-placement^="bottom"] .v-popper__arrow-outer,
            .v-popper__popper[data-popper-placement^="top"] .v-popper__arrow-outer {
                left: -1px;
            }
            .v-popper__popper[data-popper-placement^="top"] .v-popper__arrow-inner,
            .v-popper__popper[data-popper-placement^="top"] .v-popper__arrow-outer {
                border-bottom-width: 0;
                border-left-color: transparent !important;
                border-right-color: transparent !important;
                border-bottom-color: transparent !important;
            }
            .v-popper__popper[data-popper-placement^="top"] .v-popper__arrow-inner {
                top: -2px;
            }
            .v-popper__popper[data-popper-placement^="bottom"] .v-popper__arrow-container {
                top: 0;
            }
            .v-popper__popper[data-popper-placement^="bottom"] .v-popper__arrow-inner,
            .v-popper__popper[data-popper-placement^="bottom"] .v-popper__arrow-outer {
                border-top-width: 0;
                border-left-color: transparent !important;
                border-right-color: transparent !important;
                border-top-color: transparent !important;
            }
            .v-popper__popper[data-popper-placement^="bottom"] .v-popper__arrow-inner {
                top: -4px;
            }
            .v-popper__popper[data-popper-placement^="bottom"] .v-popper__arrow-outer {
                top: -6px;
            }
            .v-popper__popper[data-popper-placement^="left"] .v-popper__arrow-inner,
            .v-popper__popper[data-popper-placement^="right"] .v-popper__arrow-inner {
                top: -2px;
            }
            .v-popper__popper[data-popper-placement^="left"] .v-popper__arrow-outer,
            .v-popper__popper[data-popper-placement^="right"] .v-popper__arrow-outer {
                top: -1px;
            }
            .v-popper__popper[data-popper-placement^="right"] .v-popper__arrow-inner,
            .v-popper__popper[data-popper-placement^="right"] .v-popper__arrow-outer {
                border-left-width: 0;
                border-left-color: transparent !important;
                border-top-color: transparent !important;
                border-bottom-color: transparent !important;
            }
            .v-popper__popper[data-popper-placement^="right"] .v-popper__arrow-inner {
                left: -4px;
            }
            .v-popper__popper[data-popper-placement^="right"] .v-popper__arrow-outer {
                left: -6px;
            }
            .v-popper__popper[data-popper-placement^="left"] .v-popper__arrow-container {
                right: -10px;
            }
            .v-popper__popper[data-popper-placement^="left"] .v-popper__arrow-inner,
            .v-popper__popper[data-popper-placement^="left"] .v-popper__arrow-outer {
                border-right-width: 0;
                border-top-color: transparent !important;
                border-right-color: transparent !important;
                border-bottom-color: transparent !important;
            }
            .v-popper__popper[data-popper-placement^="left"] .v-popper__arrow-inner {
                left: -2px;
            }
            .v-popper {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
            }
            .v-popper--theme-tooltip .v-popper__inner {
                background: rgba(0, 0, 0, 0.8);
                color: #fff;
                border-radius: 6px;
                padding: 0.4375rem 0.75rem 0.375rem;
            }
            .v-popper--theme-tooltip .v-popper__arrow-outer {
                border-color: rgba(0, 0, 0, 0.8);
            }
        </style>
        <style type="text/css">
            .v-popper__popper .v-popper__wrapper .v-popper__inner {
                background: none;
                padding: 0;
            }
            .v-popper__popper .v-popper__wrapper .v-popper__arrow-container {
                --tooltip-arrow-size: 0.5rem;
                width: calc(var(--tooltip-arrow-size) * 2);
                height: calc(var(--tooltip-arrow-size) * 2);
                z-index: 9;
            }
            .v-popper__popper .v-popper__wrapper .v-popper__arrow-container .v-popper__arrow-outer {
                border-color: var(--background-color);
            }
            .v-popper__popper[data-popper-placement^="top"] .v-popper__arrow-container {
                border-left-width: var(--tooltip-arrow-size);
                border-bottom-width: 0;
                border-right-width: var(--tooltip-arrow-size);
                border-top-width: var(--tooltip-arrow-size);
            }
            .v-popper__popper[data-popper-placement^="right"] .v-popper__arrow-container {
                border-left-width: 0;
                border-bottom-width: var(--tooltip-arrow-size);
                border-right-width: var(--tooltip-arrow-size);
                border-top-width: var(--tooltip-arrow-size);
                left: 1px;
            }
            .v-popper__popper[data-popper-placement^="bottom"] .v-popper__arrow-container {
                border-left-width: var(--tooltip-arrow-size);
                border-bottom-width: var(--tooltip-arrow-size);
                border-right-width: var(--tooltip-arrow-size);
                border-top-width: 0;
                top: 0;
            }
            .v-popper__popper[data-popper-placement^="left"] .v-popper__arrow-container {
                border-left-width: var(--tooltip-arrow-size);
                border-bottom-width: var(--tooltip-arrow-size);
                border-right-width: 0;
                border-top-width: var(--tooltip-arrow-size);
                right: calc(var(--tooltip-arrow-size) * -2 + 1px);
            }
        </style>
        <style type="text/css">
            .app-tooltip[data-v-528b249d] {
                display: inline-block;
            }
            .app-tooltip[data-v-528b249d] svg:focus {
                outline: none;
            }
            .app-tooltip__content-inner[data-v-528b249d] {
                width: max-content;
                max-width: 14.375rem;
                font-size: var(--text-size-small);
                font-weight: var(--font-weight-normal);
                text-align: left;
                line-height: 1.5;
                padding: 1rem;
                overflow-wrap: break-word;
                word-wrap: break-word;
                word-break: normal;
                background: var(--background-color);
                box-shadow: 0 0 15px 0 var(--shadow-light);
                border-radius: var(--border-radius);
                color: var(--text-color-regular);
                cursor: default;
            }
        </style>
        <style type="text/css">
            .help-panel[data-v-18bf2b89] {
                width: 100%;
                max-width: 394px;
                min-width: 280px;
                height: 100%;
                position: relative;
                transition: background var(--default-transition-time) var(--default-transition-curve), box-shadow var(--default-transition-time) var(--default-transition-curve);
            }
            @media (max-width: 768px) {
                .help-panel[data-v-18bf2b89] {
                    max-width: 85vw;
                }
            }
            .help-panel--widget.help-panel--open[data-v-18bf2b89] {
                pointer-events: auto;
            }
            @media (max-width: 768px) {
                .help-panel--widget[data-v-18bf2b89] {
                    max-width: unset;
                    width: 100vw;
                    font-size: 1.25rem;
                }
            }
            .help-panel .help-button[data-v-18bf2b89] {
                position: absolute;
                right: 44px;
                top: 32px;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 2;
                box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
            }
            @media (max-width: 768px) {
                .help-panel .help-button[data-v-18bf2b89] {
                    top: 4px;
                    right: 4px;
                    background: transparent;
                    box-shadow: none !important;
                }
            }
            .help-panel .help-button img[data-v-18bf2b89] {
                width: 20px;
            }
            .help-panel .help-button[data-v-18bf2b89]:hover {
                transform: scale(1.1);
            }
            .help-panel .help-button__cupcake[data-v-18bf2b89] {
                color: var(--text-color);
            }
            .help-panel .help-button--widget[data-v-18bf2b89] {
                right: 16px;
                top: 32px;
            }
            @media (max-width: 768px) {
                .help-panel .help-button--widget[data-v-18bf2b89] {
                    top: 12px;
                    background: transparent none repeat 0 0 / auto auto padding-box border-box scroll;
                    background: initial;
                    box-shadow: none;
                }
            }
            .help-panel .help-content[data-v-18bf2b89] {
                height: 100%;
                background: var(--background-color);
                box-shadow: 0 2px 10px 0 var(--shadow-lighter);
                max-height: calc(100vh - 65px);
            }
            .help-panel .help-content--widget[data-v-18bf2b89] {
                max-height: unset !important;
            }
            @media (max-width: 768px) {
                .help-panel .help-content--widget .help-content__text[data-v-18bf2b89] {
                    max-height: calc(100vh - 126px);
                }
            }
            @media (max-width: 768px) {
                .help-panel .help-content--widget .help-content__header[data-v-18bf2b89] {
                    padding: 1.5rem;
                }
            }
            @media (max-width: 768px) {
                .help-panel .help-content[data-v-18bf2b89] {
                    max-height: 100vh;
                    box-shadow: 0 2px 40px 0 var(--shadow-light);
                }
            }
            .help-panel .help-content__header[data-v-18bf2b89] {
                color: var(--text-color);
                font-weight: var(--font-weight-medium);
                font-size: var(--text-size-big);
                padding: 2.75rem 1.75rem;
            }
            @media (max-width: 768px) {
                .help-panel .help-content__header[data-v-18bf2b89] {
                    padding: 0.875rem 1.375rem 0.8125rem;
                }
            }
            .help-panel .help-content__text[data-v-18bf2b89] {
                padding: 1.75rem;
                overflow-y: auto;
                overflow-x: hidden;
                -webkit-overflow-scrolling: touch;
            }
            @media (max-width: 768px) {
                .help-panel .help-content__text[data-v-18bf2b89] {
                    max-height: calc(100vh - 56px);
                    padding: 1.5rem;
                }
            }
            @media (min-width: 769px) {
                .help-panel .help-content__text[data-v-18bf2b89] {
                    max-height: calc(100vh - 182px) !important;
                    padding-bottom: 2rem;
                }
            }
            .help-panel .help-mobile-backdrop[data-v-18bf2b89] {
                display: none;
            }
            @media (max-width: 768px) {
                .help-panel .help-mobile-backdrop[data-v-18bf2b89] {
                    display: block;
                    position: absolute;
                    left: -15vw;
                    top: 0;
                    bottom: 0;
                    width: 100vw;
                    background-color: var(--shadow-lighter);
                    z-index: -1;
                    opacity: 0;
                    transition: opacity var(--default-transition-time) var(--default-transition-curve);
                }
            }
            @media (max-width: 768px) {
                .help-panel--open .help-mobile-backdrop[data-v-18bf2b89] {
                    opacity: 1;
                }
            }
            @media (max-width: 768px) {
                .help-panel--leaving .help-button[data-v-18bf2b89] {
                    display: none;
                }
            }
            .help-panel[data-v-18bf2b89] .v-popper__popper {
                pointer-events: none;
            }
            @keyframes wiggle-data-v-18bf2b89 {
                0% {
                    transform: rotate(0deg);
                }
                60% {
                    transform: rotate(0deg);
                }
                65% {
                    transform: rotate(5deg);
                }
                70% {
                    transform: rotate(-5deg);
                }
                75% {
                    transform: rotate(5deg);
                }
                80% {
                    transform: rotate(-5deg);
                }
                85% {
                    transform: rotate(5deg);
                }
                90% {
                    transform: rotate(-5deg);
                }
                95% {
                    transform: rotate(5deg);
                }
                to {
                    transform: rotate(-5deg);
                }
            }
            .help-panel[data-v-18bf2b89] .v-popper__popper .v-popper__wrapper {
                animation-name: wiggle-data-v-18bf2b89;
                animation-duration: 1.5s;
                animation-iteration-count: 1;
            }
            .slide-enter-active[data-v-18bf2b89],
            .slide-leave-active[data-v-18bf2b89] {
                transition: transform var(--default-transition-time) var(--default-transition-curve);
            }
            .slide-enter[data-v-18bf2b89],
            .slide-leave-to[data-v-18bf2b89] {
                transform: translateX(100%);
            }
        </style>
        <style type="text/css">
            .sub-navigation[data-v-803c38d8] {
                font-size: var(--text-size-base);
                text-align: left;
                display: flex;
                width: 100%;
                max-width: 394px;
                min-width: 280px;
            }
            .sub-navigation ul[data-v-803c38d8] {
                list-style: none;
                padding: 0;
            }
            .sub-navigation__steps[data-v-803c38d8] {
                margin-top: 25vh;
            }
            .sub-navigation__step[data-v-803c38d8] {
                padding-left: 2.75rem;
                margin: 0.5rem 0;
                position: relative;
            }
            .sub-navigation__step a[data-v-803c38d8],
            .sub-navigation__step span[data-v-803c38d8] {
                color: var(--text-color-medium-light);
                text-decoration: none;
                line-height: 1.5rem;
                font-weight: var(--font-weight-medium);
            }
            .sub-navigation__step[data-v-803c38d8]:after,
            .sub-navigation__step a[data-v-803c38d8],
            .sub-navigation__step span[data-v-803c38d8] {
                display: block;
                transition: all var(--default-transition-time) var(--step-transition-curve);
            }
            .sub-navigation__step[data-v-803c38d8]:after {
                position: absolute;
                left: -30px;
                top: 11px;
                background: var(--primary-color);
                width: 30px;
                height: 2px;
                content: "";
            }
            .sub-navigation__step--selected a[data-v-803c38d8],
            .sub-navigation__step--selected span[data-v-803c38d8] {
                color: var(--primary-color);
            }
            .sub-navigation__step--selected[data-v-803c38d8]:after {
                left: 0;
            }
            .sub-navigation__step--completed a[data-v-803c38d8],
            .sub-navigation__step--completed span[data-v-803c38d8] {
                color: var(--text-color);
            }
            .sub-navigation__step--completed a[data-v-803c38d8]:hover,
            .sub-navigation__step--completed span[data-v-803c38d8]:hover {
                color: #666766;
            }
            .sub-navigation__step--completed a[data-v-803c38d8]:focus,
            .sub-navigation__step--completed span[data-v-803c38d8]:focus {
                outline: none;
                color: #666766;
                text-shadow: 0 0 10px var(--shadow-light);
            }
        </style>
        <style type="text/css">
            .accordion-item__trigger[data-v-21b9d099] {
                padding: 1rem 1.5rem;
                width: 100%;
                text-align: left;
                border: none;
                background: none;
                outline: none;
                cursor: pointer;
            }
            .accordion-item__trigger-icon[data-v-21b9d099] {
                display: block;
                position: absolute;
                top: 0;
                right: 1.25rem;
                bottom: 0;
                margin: auto;
                width: 0.75rem;
                height: 0.75rem;
                color: var(--accordion-caret-color);
                transition: transform 0.2s ease;
            }
            .is-active .accordion-item__trigger-icon[data-v-21b9d099] {
                transform: rotate(180deg);
            }
            .accordion-item__title[data-v-21b9d099] {
                position: relative;
            }
            .accordion-item__title-text[data-v-21b9d099] {
                font-size: var(--text-size-base);
                margin-bottom: 0;
                padding-right: 1.25rem;
            }
            .accordion-item__details[data-v-21b9d099] {
                overflow: hidden;
            }
            .accordion-item__details-inner[data-v-21b9d099] {
                padding: 1rem 1.5rem;
            }
            .accordion-item[data-v-21b9d099]:not(:last-child) {
                border-bottom: 1px solid var(--border-color-light);
            }
            .accordion-item[data-v-21b9d099]:last-child {
                border-radius: var(--border-radius);
            }
            .accordion-item-enter-active[data-v-21b9d099],
            .accordion-item-leave-active[data-v-21b9d099] {
                will-change: height;
                transition: height 0.2s ease;
            }
            .accordion-item-enter[data-v-21b9d099],
            .accordion-item-leave-to[data-v-21b9d099] {
                height: 0 !important;
            }
        </style>
        <style type="text/css">
            .checkbox__container[data-v-16b12f3a] {
                padding-top: 0.75rem;
                padding-bottom: 1.125rem;
                position: relative;
            }
            .checkbox__container--table-cell[data-v-16b12f3a] {
                padding-top: 0;
                padding-bottom: 0;
            }
            .checkbox[data-v-16b12f3a] {
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                display: flex;
                align-items: center;
            }
            .checkbox:hover .checkbox__box[data-v-16b12f3a] {
                border: 1px solid var(--input-hover-color);
            }
            .checkbox:hover .checkbox__label[data-v-16b12f3a] {
                color: var(--input-hover-color);
            }
            @media (max-width: 768px) {
                .checkbox[data-v-16b12f3a] {
                    align-items: flex-start;
                }
            }
            .checkbox__errors[data-v-16b12f3a] {
                position: absolute;
                bottom: 0;
                color: var(--error-color);
                font-size: var(--text-size-small);
            }
            .checkbox__box[data-v-16b12f3a] {
                border: 1px solid var(--input-border-color);
                border-radius: 3px;
                display: inline-block;
                text-align: center;
                min-width: var(--checkbox-size);
                height: var(--checkbox-size);
                position: relative;
                cursor: pointer;
            }
            .checkbox__box[data-v-16b12f3a]:focus {
                outline: none;
            }
            .checkbox__box[data-v-16b12f3a]:after {
                width: 18px;
                height: 18px;
                background: url(https://assets.bitstamp.net/onboarding/s/widgets/onboarding/22965a2124c0bd0ffedae49837e2320b.svg) no-repeat;
                display: block;
                content: "";
                position: absolute;
                opacity: 0;
                top: 2px;
                left: 2px;
                transition: opacity var(--default-transition-time) var(--default-transition-curve);
            }
            .checkbox__label[data-v-16b12f3a] {
                display: inline-block;
                white-space: nowrap;
                margin-left: 0.8125rem;
                color: var(--input-placeholder-color);
                transition: all var(--default-transition-time) var(--default-transition-curve);
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                font-size: var(--text-size-medium);
                cursor: pointer;
            }
            @media (max-width: 768px) {
                .checkbox__label[data-v-16b12f3a] {
                    white-space: normal;
                    font-size: var(--text-size-normal);
                }
            }
            .checkbox__input[data-v-16b12f3a] {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                display: none;
            }
            .checkbox--on .checkbox__box[data-v-16b12f3a] {
                border: 1px solid var(--primary-color);
                transition: all var(--default-transition-time) var(--default-transition-curve);
            }
            .checkbox--on .checkbox__box[data-v-16b12f3a]:after {
                opacity: 1;
            }
            .checkbox--on .checkbox__label[data-v-16b12f3a] {
                color: var(--input-label-color);
            }
            .checkbox--disabled .checkbox__box[data-v-16b12f3a] {
                outline: none;
                border: 1px solid var(--input-disabled-color);
                box-shadow: none;
                cursor: not-allowed;
            }
            .checkbox--disabled .checkbox__label[data-v-16b12f3a] {
                cursor: not-allowed;
                color: var(--input-disabled-color);
            }
            .checkbox--disabled.checkbox--on .checkbox__box[data-v-16b12f3a]:after {
                opacity: 0.4;
            }
            .checkbox--disabled:focus .checkbox__box[data-v-16b12f3a],
            .checkbox--disabled:hover .checkbox__box[data-v-16b12f3a] {
                border: 1px solid var(--input-disabled-color);
            }
            .checkbox--disabled:focus .checkbox__label[data-v-16b12f3a],
            .checkbox--disabled:hover .checkbox__label[data-v-16b12f3a] {
                color: var(--input-disabled-color);
            }
        </style>
        <style type="text/css">
            .cookie-modal[data-v-a3c17b9c] .wc-modal__container {
                width: 100%;
                max-width: 1097px;
            }
            .cookie-modal[data-v-a3c17b9c] .accordion-item {
                border: none;
                width: 100%;
            }
            .cookie-modal[data-v-a3c17b9c] .accordion-item__title-text {
                font-size: var(--text-size-normal);
            }
            @media (min-width: 577px) {
                .cookie-modal[data-v-a3c17b9c] .accordion-item__title-text {
                    font-size: var(--text-size-medium);
                }
            }
            .cookie-modal[data-v-a3c17b9c] .accordion-item__trigger {
                padding: 0.5rem 0 0.5rem 1.5rem;
            }
            .cookie-modal[data-v-a3c17b9c] .accordion-item__trigger-icon {
                right: unset;
                left: 0;
            }
            .cookie-modal[data-v-a3c17b9c] .accordion-item__details-inner {
                font-size: var(--text-size-small);
                padding: 0 1rem;
            }
            .cookie-modal[data-v-a3c17b9c] .accordion-item__details-inner p {
                font-size: inherit;
            }
            .cookie-modal__header[data-v-a3c17b9c] {
                width: 100%;
                display: flex;
                align-items: center;
                flex-wrap: wrap;
            }
            .cookie-modal__header-buttons[data-v-a3c17b9c] {
                width: 100%;
                display: grid;
                grid-gap: 1.25rem;
                gap: 1.25rem;
            }
            @media (min-width: 577px) {
                .cookie-modal__header-buttons[data-v-a3c17b9c] {
                    grid-template-columns: repeat(auto-fit, minmax(100px, max-content));
                    width: auto;
                    min-width: 510px;
                    justify-content: end;
                    grid-gap: 1.5rem;
                    gap: 1.5rem;
                }
            }
            @media (min-width: 577px) and (max-width: 768px) {
                .cookie-modal__header-buttons[data-v-a3c17b9c] {
                    width: 100%;
                }
            }
            .cookie-modal__close[data-v-a3c17b9c] {
                position: absolute;
                right: 0;
                width: 1.5rem;
                height: 1.5rem;
                padding: 0.325rem;
                top: 1.5rem;
                cursor: pointer;
            }
            @media (min-width: 769px) {
                .cookie-modal__close[data-v-a3c17b9c] {
                    right: -2rem;
                    top: 2rem;
                }
            }
            .cookie-modal__title[data-v-a3c17b9c] {
                margin: 0.25rem auto 1.5rem 0;
                text-align: left;
                font-size: var(--text-size-normal);
            }
            @media (min-width: 769px) {
                .cookie-modal__title[data-v-a3c17b9c] {
                    font-size: var(--text-size-title-small);
                    margin: 0 auto 0 0;
                }
            }
            .cookie-modal__list[data-v-a3c17b9c] {
                margin: 0;
                padding-left: 1rem;
                font-size: var(--text-size-small);
                color: var(--text-color-regular);
                list-style: disc;
            }
            .cookie-modal__list-column[data-v-a3c17b9c] {
                flex: 1 1;
                padding: 0.5rem 1rem 0.5rem 0;
            }
            @media (min-width: 577px) {
                .cookie-modal__list-column[data-v-a3c17b9c] {
                    padding-right: 2rem;
                }
                .cookie-modal__list-column[data-v-a3c17b9c]:last-of-type {
                    padding-left: 2rem;
                    padding-right: 0;
                }
            }
            .cookie-modal__list-row[data-v-a3c17b9c] {
                display: flex;
                flex-direction: column;
            }
            @media (max-width: 576px) {
                .cookie-modal__list-row .cookie-modal__list-column[data-v-a3c17b9c]:last-of-type {
                    margin-top: 0.5rem;
                }
            }
            @media (min-width: 577px) {
                .cookie-modal__list-row[data-v-a3c17b9c] {
                    flex-direction: row;
                }
            }
            .cookie-modal__list-title[data-v-a3c17b9c] {
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-medium);
                margin: 0 0 1rem;
                text-transform: none;
            }
            @media (min-width: 577px) {
                .cookie-modal__list-title[data-v-a3c17b9c] {
                    font-size: var(--text-size-medium);
                }
            }
            .cookie-modal__section[data-v-a3c17b9c] {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                padding: 1.25rem 0;
            }
            .cookie-modal__section-title[data-v-a3c17b9c] {
                font-size: var(--text-size-base);
                line-height: 1.375;
                font-weight: var(--font-weight-medium);
                margin: 0 0 1rem;
                max-width: calc(100% - 100px);
            }
            @media (min-width: 577px) {
                .cookie-modal__section-title[data-v-a3c17b9c] {
                    font-size: var(--text-size-title-small);
                }
            }
            .cookie-modal__section-content[data-v-a3c17b9c] {
                margin: 0 0 1rem;
                font-size: var(--text-size-small);
                color: var(--text-color-regular);
            }
            .cookie-modal__section-content p[data-v-a3c17b9c] {
                font-size: inherit;
                margin-top: 0;
            }
            @media (min-width: 769px) {
                .cookie-modal__section-content[data-v-a3c17b9c] {
                    font-size: var(--text-size-normal);
                    max-width: 80%;
                }
            }
            .cookie-modal__checkbox[data-v-a3c17b9c] {
                padding: 0;
            }
            .cookie-modal__checkbox[data-v-a3c17b9c] .checkbox {
                display: flex;
                flex-direction: row-reverse;
                align-items: center;
            }
            .cookie-modal__checkbox[data-v-a3c17b9c] .checkbox__label {
                margin: 0;
                padding: 0.3rem 1rem;
                font-size: var(--text-size-small);
                font-weight: var(--font-weight-medium);
            }
            @media (min-width: 769px) {
                .cookie-modal__checkbox[data-v-a3c17b9c] {
                    margin: 3rem 0 -3rem;
                }
            }
            .cookie-modal__link[data-v-a3c17b9c] {
                color: var(--primary-color);
                text-decoration: underline;
            }
            .cookie-modal__divider[data-v-a3c17b9c] {
                width: 100%;
                border-bottom: 1px solid var(--border-color-lighter);
            }
            .cookie-modal__info[data-v-a3c17b9c] {
                font-size: var(--text-size-normal);
                padding-top: 2.5rem;
            }
            @media (min-width: 769px) {
                .cookie-modal__info[data-v-a3c17b9c] {
                    font-size: var(--text-size-medium);
                    padding-top: 3rem;
                }
            }
        </style>
        <style type="text/css">
            .cookie-consent-banner[data-v-0a6b88e6] {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: var(--background-color);
                z-index: var(--z-height-banner);
                padding: 2rem 1.5rem;
                display: flex;
                box-shadow: 0 -5px 30px var(--shadow-lighter);
            }
            @media (min-width: 769px) {
                .cookie-consent-banner[data-v-0a6b88e6] {
                    padding: 3rem 1.5rem;
                }
            }
            .cookie-consent-banner__container[data-v-0a6b88e6] {
                display: flex;
                max-width: 1200px;
                margin: 0 auto;
            }
            @media (max-width: 768px) {
                .cookie-consent-banner__container[data-v-0a6b88e6] {
                    flex-direction: column;
                }
            }
            @media (min-width: 577px) {
                .cookie-consent-banner--inline[data-v-0a6b88e6] {
                    position: relative;
                    margin-top: 2rem;
                }
            }
            .cookie-consent-banner__buttons[data-v-0a6b88e6] {
                display: grid;
                grid-gap: 1.5rem;
                grid-template-columns: 1fr 1fr;
                min-width: 270px;
                align-items: center;
            }
            .cookie-consent-banner__button[data-v-0a6b88e6] {
                width: auto;
                height: 40px;
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .cookie-consent-banner__text[data-v-0a6b88e6] {
                color: var(--text-color);
                font-size: var(--text-size-normal);
                line-height: 1.35;
                padding: 0 0 1.5rem;
            }
            @media (min-width: 769px) {
                .cookie-consent-banner__text[data-v-0a6b88e6] {
                    padding: 0 1.5rem 0 0;
                }
            }
            .cookie-consent-banner__link[data-v-0a6b88e6] {
                color: var(--primary-color);
                text-decoration: underline;
            }
            .cookie-consent-banner-enter-active[data-v-0a6b88e6],
            .cookie-consent-banner-leave-active[data-v-0a6b88e6] {
                transition: transform var(--transition-time-quick) var(--default-transition-curve);
                transform: translateY(0);
            }
            .cookie-consent-banner-enter-active[data-v-0a6b88e6] {
                transition-delay: 2s;
            }
            .cookie-consent-banner-enter-active.cookie-consent-banner--no-delay[data-v-0a6b88e6] {
                transition-delay: 0s;
            }
            .cookie-consent-banner-enter[data-v-0a6b88e6],
            .cookie-consent-banner-leave-to[data-v-0a6b88e6] {
                transform: translateY(100%);
            }
        </style>
        <style type="text/css">
            .radio:hover .radio__label[data-v-b6cac9a6] {
                color: var(--input-hover-color);
            }
            .radio:hover .radio__field[data-v-b6cac9a6]:before {
                border-color: var(--input-hover-color);
            }
            .radio .radio__label[data-v-b6cac9a6] {
                cursor: pointer;
            }
            .radio .radio__field[data-v-b6cac9a6],
            .radio .radio__label[data-v-b6cac9a6] {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            .radio .radio__field[data-v-b6cac9a6] {
                background-color: initial;
            }
            .radio .radio__field[data-v-b6cac9a6]:focus {
                outline: none;
            }
            .radio--fluid[data-v-b6cac9a6] {
                flex: 1 1;
            }
            .radio--fluid.radio--bracketed .radio__label[data-v-b6cac9a6] {
                height: 100%;
            }
            @media (max-width: 768px) {
                .radio--fluid.radio--bracketed .radio__label[data-v-b6cac9a6] {
                    display: flex;
                    align-items: center;
                    padding: 1rem 1.25rem;
                    font-size: var(--text-size-base);
                }
            }
            @media (max-width: 768px) {
                .radio--fluid.radio--bracketed + .radio--bracketed[data-v-b6cac9a6] {
                    margin-left: 0;
                }
            }
            @media (max-width: 768px) {
                .radio--fluid.radio--bracketed[data-v-b6cac9a6] {
                    margin: 0.625rem 0;
                    width: 100%;
                }
            }
            .radio--has-icon.radio--bracketed .radio__label[data-v-b6cac9a6] {
                padding-bottom: 1.125rem;
            }
            @media (max-width: 576px) {
                .radio[data-v-b6cac9a6] {
                    padding: 0.3125rem;
                    margin: -0.3125rem;
                }
            }
            .radio--regular .radio__label[data-v-b6cac9a6] {
                margin: 0.3125rem 0;
                vertical-align: middle;
                height: var(--radio-button-size);
                line-height: var(--radio-button-size);
                font-size: var(--text-size-base);
                font-weight: var(--font-weight-light);
                color: var(--text-color-medium-light);
                position: relative;
                display: flex;
                transition: color var(--default-transition-time) var(--default-transition-curve);
            }
            .radio--regular .radio__label.radio__label--checked[data-v-b6cac9a6] {
                color: var(--text-color);
            }
            .radio--regular .radio__field[data-v-b6cac9a6] {
                position: relative;
                border: none;
                vertical-align: middle;
                margin-right: 0.3125rem;
                display: block;
                width: var(--radio-button-size);
                height: var(--radio-button-size);
            }
            .radio--regular .radio__field[data-v-b6cac9a6]::-ms-check {
                border-color: var(--input-border-color);
            }
            .radio--regular .radio__field[data-v-b6cac9a6]:focus:before {
                outline: none;
            }
            .radio--regular .radio__field[data-v-b6cac9a6]:before {
                content: "";
                position: relative;
                display: inline-block;
                cursor: pointer;
                width: var(--radio-button-size);
                height: var(--radio-button-size);
                border: 1px solid var(--input-border-color);
                border-radius: 50%;
                transition: border var(--default-transition-time) var(--default-transition-curve);
            }
            .radio--regular .radio__field.radio__field--checked[data-v-b6cac9a6]:before {
                padding: 0.25rem;
                background-color: var(--primary-color);
                border-color: var(--primary-color);
                background-clip: content-box;
            }
            .radio--regular .radio__field.radio__field--checked[data-v-b6cac9a6]::-ms-check {
                border-color: var(--input-border-color);
                color: var(--primary-color);
            }
            .radio--regular .radio__field.radio__field--checked[data-v-b6cac9a6]:disabled:before {
                background-color: var(--input-disabled-color);
            }
            .radio--regular .radio__field.radio__field--checked[data-v-b6cac9a6]:disabled::-ms-check {
                color: var(--input-disabled-color);
            }
            .radio--bracketed[data-v-b6cac9a6] {
                display: inline-block;
                margin: 0.3125rem 0;
            }
            .radio--bracketed + .radio--bracketed[data-v-b6cac9a6] {
                margin-left: 0.625rem;
            }
            .radio--bracketed .radio__label[data-v-b6cac9a6] {
                min-height: 40px;
                width: 100%;
                display: block;
                text-align: center;
                line-height: 1rem;
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-medium);
                color: var(--text-color-medium-light);
                padding: 0.625rem 0.9375rem;
                border-radius: 3px;
                border: 2px solid var(--border-color);
                transition: all var(--default-transition-time) var(--default-transition-curve);
            }
            .radio--bracketed .radio__label[focus-within][data-v-b6cac9a6] {
                box-shadow: 0 0 10px rgba(21, 158, 73, 0.2);
            }
            .radio--bracketed .radio__label[data-v-b6cac9a6]:focus-within {
                box-shadow: 0 0 10px rgba(21, 158, 73, 0.2);
            }
            .radio--bracketed .radio__label[data-v-b6cac9a6]:hover {
                border-color: var(--primary-color);
            }
            .radio--bracketed .radio__label.radio__label--checked[data-v-b6cac9a6] {
                color: var(--primary-color);
                border: 2px solid var(--primary-color);
                background: var(--primary-color-transparent);
            }
            .radio--bracketed .radio__label.radio__label--checked.radio__label--disabled[data-v-b6cac9a6] {
                color: var(--text-color-medium-light);
                border: 2px solid var(--border-color-regular);
                background: var(--input-disabled-color);
            }
            .radio--bracketed .radio__label-icon[data-v-b6cac9a6] {
                height: 48px;
                width: 100%;
                display: flex;
                justify-content: center;
                margin-bottom: 0.75rem;
                margin-top: 0.75rem;
            }
            .radio--bracketed .radio__label-icon__img[data-v-b6cac9a6] {
                width: 48px;
                height: 48px;
            }
            @media (max-width: 768px) {
                .radio--bracketed .radio__label-icon[data-v-b6cac9a6] {
                    width: auto;
                    margin-right: 1rem;
                    margin-top: 0;
                    margin-bottom: 0;
                    height: 48px;
                }
            }
            .radio--bracketed .radio__field[data-v-b6cac9a6] {
                position: absolute;
                border: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background-color: initial;
            }
            .radio--bracketed .radio__field[data-v-b6cac9a6]::-ms-check {
                display: none;
            }
        </style>
        <style type="text/css">
            .binary-choice--inline[data-v-5b938036] {
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
            }
            .binary-choice--inline .binary-choice__text[data-v-5b938036] {
                margin-bottom: 0;
            }
            .binary-choice--inline .binary-choice__radios[data-v-5b938036] {
                justify-content: flex-end;
            }
            @media (max-width: 768px) {
                .binary-choice[data-v-5b938036] {
                    flex-direction: column;
                    justify-content: flex-start;
                    align-items: flex-start;
                }
            }
            .binary-choice__text[data-v-5b938036] {
                display: block;
                margin-bottom: 1.25rem;
                color: var(--text-color);
                line-height: 1.375rem;
                font-weight: var(--font-weight-medium);
            }
            .binary-choice__text-wrap[data-v-5b938036] {
                display: flex;
                flex: 2 1;
            }
            .binary-choice__radios[data-v-5b938036] {
                display: flex;
                flex: 1 1;
                white-space: nowrap;
            }
            .binary-choice__last-radio[data-v-5b938036] {
                margin-left: 1.25rem;
            }
            .binary-choice__error[data-v-5b938036] {
                position: absolute;
                bottom: -12px;
                left: 0;
                color: var(--error-color);
                font-size: var(--text-size-small);
            }
            .binary-choice + .binary-choice[data-v-5b938036] {
                margin-top: 1.5rem;
            }
        </style>
        <style type="text/css">
            .field-binary-choice + .field-binary-choice {
                margin-top: 1.5rem;
            }
        </style>
        <style type="text/css">
            .switch[data-v-1700fa56] {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                cursor: pointer;
                width: var(--switch-width);
                min-width: var(--switch-width);
                height: var(--switch-height);
                display: flex;
                align-items: center;
                padding: var(--switch-padding);
                background-color: var(--switch-color);
                box-shadow: 0 0 0 1px var(--switch-border-color);
                border-radius: 1em;
                transition: background-color var(--transition-time-quick), box-shadow var(--transition-time-quick);
            }
            .switch[data-v-1700fa56]:before {
                content: "";
                height: calc(var(--switch-height) - var(--switch-padding) * 2);
                width: calc(var(--switch-height) - var(--switch-padding) * 2);
                border-radius: 50%;
                background-color: var(--switch-handle-color);
                box-shadow: 0 0 6px var(--switch-handle-shadow);
                transition: transform var(--transition-time-quick);
            }
            .switch[data-v-1700fa56]:disabled {
                opacity: 0.4;
                cursor: not-allowed;
            }
            .switch[data-v-1700fa56]:checked {
                background-color: var(--switch-active-color);
            }
            .switch[data-v-1700fa56]:checked:before {
                transform: translateX(calc(var(--switch-width) - var(--switch-height)));
            }
            .switch.focus-visible[data-v-1700fa56],
            .switch[data-v-1700fa56]:focus-visible {
                outline: 2px solid var(--switch-focus-outline-color);
                outline-offset: 0;
            }
        </style>
        <style type="text/css">
            .switch-container[data-v-2b974baf] {
                display: flex;
                align-items: center;
            }
            .switch-container__label[data-v-2b974baf] {
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                cursor: pointer;
                flex: 0 1 auto;
                font-size: inherit;
                color: inherit;
            }
            @media (max-width: 768px) {
                .switch-container__label[data-v-2b974baf] {
                    white-space: normal;
                    font-size: var(--text-size-normal);
                }
            }
            .switch-container__label--left[data-v-2b974baf] {
                margin-right: 1rem;
            }
            .switch-container__label--right[data-v-2b974baf] {
                margin-left: 1rem;
            }
            .switch-container__switch[data-v-2b974baf] {
                flex-basis: 0;
            }
            .switch-container--space-between[data-v-2b974baf] {
                width: 100%;
                justify-content: space-between;
            }
            .switch-container--disabled .switch-container__label[data-v-2b974baf] {
                cursor: not-allowed;
                opacity: 0.4;
            }
        </style>
        <style type="text/css">
            .switch-field[data-v-0eaf298b] {
                padding: 0.5rem 0;
            }
            .switch-field[data-v-0eaf298b] .switch-container__label {
                font-size: var(--text-size-base);
            }
        </style>
        <style type="text/css">
            .checkbox-group[data-v-25012dbe] {
                padding-top: 1.25rem;
            }
            .checkbox-group .title[data-v-25012dbe] {
                font-weight: var(--font-weight-medium);
                margin-bottom: 1.125rem;
                padding-bottom: 1.125rem;
            }
            .checkbox-group div[data-v-25012dbe]:first-of-type {
                padding-top: 1.125rem;
            }
            .checkbox-group div[data-v-25012dbe]:last-child {
                padding-bottom: 1.875rem;
            }
            .checkbox-group .checkbox__container[data-v-25012dbe] {
                padding-top: 0;
                padding-bottom: 0.625rem;
            }
        </style>
        <style type="text/css">
            .ps {
                overflow: hidden !important;
                overflow-anchor: none;
                -ms-overflow-style: none;
                touch-action: auto;
                -ms-touch-action: auto;
            }
            .ps__rail-x {
                height: 15px;
                bottom: 0;
            }
            .ps__rail-x,
            .ps__rail-y {
                display: none;
                opacity: 0;
                transition: background-color 0.2s linear, opacity 0.2s linear;
                -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
                position: absolute;
            }
            .ps__rail-y {
                width: 15px;
                right: 0;
            }
            .ps--active-x > .ps__rail-x,
            .ps--active-y > .ps__rail-y {
                display: block;
                background-color: initial;
            }
            .ps--focus > .ps__rail-x,
            .ps--focus > .ps__rail-y,
            .ps--scrolling-x > .ps__rail-x,
            .ps--scrolling-y > .ps__rail-y,
            .ps:hover > .ps__rail-x,
            .ps:hover > .ps__rail-y {
                opacity: 0.6;
            }
            .ps .ps__rail-x.ps--clicking,
            .ps .ps__rail-x:focus,
            .ps .ps__rail-x:hover,
            .ps .ps__rail-y.ps--clicking,
            .ps .ps__rail-y:focus,
            .ps .ps__rail-y:hover {
                background-color: #eee;
                opacity: 0.9;
            }
            .ps__thumb-x {
                transition: background-color 0.2s linear, height 0.2s ease-in-out;
                -webkit-transition: background-color 0.2s linear, height 0.2s ease-in-out;
                height: 6px;
                bottom: 2px;
            }
            .ps__thumb-x,
            .ps__thumb-y {
                background-color: #aaa;
                border-radius: 6px;
                position: absolute;
            }
            .ps__thumb-y {
                transition: background-color 0.2s linear, width 0.2s ease-in-out;
                -webkit-transition: background-color 0.2s linear, width 0.2s ease-in-out;
                width: 6px;
                right: 2px;
            }
            .ps__rail-x.ps--clicking .ps__thumb-x,
            .ps__rail-x:focus > .ps__thumb-x,
            .ps__rail-x:hover > .ps__thumb-x {
                background-color: #999;
                height: 11px;
            }
            .ps__rail-y.ps--clicking .ps__thumb-y,
            .ps__rail-y:focus > .ps__thumb-y,
            .ps__rail-y:hover > .ps__thumb-y {
                background-color: #999;
                width: 11px;
            }
            @supports (-ms-overflow-style: none) {
                .ps {
                    overflow: auto !important;
                }
            }
            @media (-ms-high-contrast: none), screen and (-ms-high-contrast: active) {
                .ps {
                    overflow: auto !important;
                }
            }
            .ps {
                position: relative;
            }
        </style>
        <style type="text/css">
            .app-scrollbar .ps__rail-y,
            .app-scrollbar .ps__rail-y.ps--clicking,
            .app-scrollbar .ps__rail-y:focus,
            .app-scrollbar .ps__rail-y:hover {
                right: 0;
                width: calc(2px + var(--scrollbar-width));
                border-radius: var(--border-radius-small);
                z-index: var(--z-height-scrollbar);
                background-color: var(--scrollbar-rail-color);
                border: 1px solid var(--scrollbar-border-color);
            }
            .app-scrollbar .ps__rail-y.ps--clicking .ps__thumb-y,
            .app-scrollbar .ps__rail-y:focus > .ps__thumb-y,
            .app-scrollbar .ps__rail-y:hover > .ps__thumb-y {
                background-color: var(--scrollbar-hover-color);
                width: var(--scrollbar-width);
            }
            .app-scrollbar .ps__thumb-y {
                background-color: var(--scrollbar-color);
                border-radius: var(--border-radius-small);
                width: var(--scrollbar-width);
                right: 0;
            }
            .app-scrollbar--visible .ps__rail-y,
            .app-scrollbar--visible .ps__rail-y.ps--clicking,
            .app-scrollbar--visible .ps__rail-y:focus,
            .app-scrollbar--visible .ps__rail-y:hover {
                opacity: 1;
            }
            .app-scrollbar--light .ps__rail-y,
            .app-scrollbar--light .ps__rail-y.ps--clicking,
            .app-scrollbar--light .ps__rail-y:focus,
            .app-scrollbar--light .ps__rail-y:hover {
                background-color: initial;
                border: none;
            }
            .app-scrollbar--light .ps__thumb-y {
                background-color: var(--border-color-light);
            }
        </style>
        <style type="text/css">
            input[data-v-30ed178a] {
                height: unset;
            }
            [class^="dropdown"][data-v-30ed178a]:after {
                content: "";
                all: unset;
            }
            .dropdown[data-v-30ed178a] {
                position: relative;
                width: 100%;
                min-height: 70px;
                display: flex;
            }
            .dropdown--table-cell[data-v-30ed178a] {
                min-height: 0;
            }
            .dropdown--readonly .dropdown-input__wrap[data-v-30ed178a]:after {
                display: none;
            }
            .dropdown--currency-select[data-v-30ed178a] {
                align-items: flex-end;
                margin-bottom: 0.9375rem;
                min-height: 75px;
            }
            .dropdown .dropdown-label--currency-select[data-v-30ed178a] {
                left: 15px;
                top: 41px;
            }
            .dropdown__search-container[data-v-30ed178a] {
                border-bottom: 1px solid var(--border-color-lighter);
                background-color: var(--background-color);
                font-size: var(--text-size-base);
                position: sticky;
                display: flex;
                align-items: center;
                height: 2rem;
                top: 0;
            }
            @media (min-width: 577px) {
                .dropdown__search-container[data-v-30ed178a] {
                    font-size: var(--text-size-small);
                }
            }
            .dropdown__search-field[data-v-30ed178a] {
                color: var(--text-color-medium-light);
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
                font-size: inherit;
                border: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                outline: none;
            }
            .dropdown__search-icon[data-v-30ed178a] {
                color: var(--text-color-light);
                margin: 0 0.5rem;
                width: var(--icon-size-small);
                height: var(--icon-size-small);
            }
            .dropdown--disabled[data-v-30ed178a] {
                pointer-events: auto;
                cursor: not-allowed;
            }
            .dropdown-input-holder[data-v-30ed178a] {
                position: relative;
                cursor: pointer;
            }
            .dropdown-input-holder__icon[data-v-30ed178a] {
                width: 0.75rem;
                height: 0.75rem;
                margin-left: 0.25rem;
                position: absolute;
                right: 15px;
                color: var(--text-color-medium);
                top: 50%;
                transform: translateY(-50%);
            }
            .dropdown-input-holder__search_icon[data-v-30ed178a] {
                width: 1rem;
                height: 1rem;
                margin: 0 0.9375rem;
                color: var(--text-color-medium);
            }
            .dropdown-label[data-v-30ed178a] {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
                pointer-events: none;
                cursor: pointer;
                font-weight: var(--font-weight-light);
                font-size: var(--text-size-small);
                color: var(--input-label-color);
                transition: all var(--default-transition-time) var(--default-transition-curve);
            }
            .dropdown-label--placeholder[data-v-30ed178a] {
                top: 20px;
                font-size: var(--text-size-base);
                color: var(--input-placeholder-color);
                white-space: nowrap;
                text-overflow: ellipsis;
                overflow: hidden;
                max-width: 100%;
                padding-right: 1.875rem;
            }
            .dropdown-label--placeholder--backoffice[data-v-30ed178a] {
                top: -4px;
                font-size: var(--text-size-base);
            }
            .dropdown-input__wrap[data-v-30ed178a] {
                position: relative;
                margin-top: 1.125rem;
                width: 100%;
                display: block;
            }
            .dropdown-input__wrap--backoffice[data-v-30ed178a]:after {
                top: 10px;
            }
            .dropdown-input__wrap--table-cell[data-v-30ed178a] {
                margin-top: 0;
            }
            .dropdown-input__wrap--currency-select[data-v-30ed178a] {
                height: 50px;
            }
            .dropdown-input__wrap--currency-select[data-v-30ed178a]:after {
                top: 15px;
                right: 15px;
            }
            .dropdown-input__wrap-icon[data-v-30ed178a] {
                position: absolute;
                left: 15px;
                top: 10px;
                z-index: 1;
            }
            .dropdown-input__wrap-icon.flag[data-v-30ed178a] {
                left: 0;
            }
            .dropdown-input[data-v-30ed178a] {
                cursor: pointer;
                font-family: var(--default-font-family);
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                height: 33px;
                line-height: 2rem;
                margin: 0;
                width: 100%;
                border-radius: 0;
                text-align: left;
                border: none;
                border-bottom: 1px solid var(--input-border-color);
                font-size: var(--text-size-base);
                color: var(--input-border-color-focused);
                transition: border-bottom-color var(--default-transition-time) var(--default-transition-curve);
                padding-right: 1.875rem;
                padding-left: 0;
            }
            .dropdown-input--backoffice[data-v-30ed178a] {
                border: 1px solid var(--input-border-color);
                padding: 0.3125rem;
                height: 45px;
            }
            .dropdown-input--table-cell[data-v-30ed178a] {
                height: 32px;
            }
            .dropdown-input[data-v-30ed178a]:focus {
                outline: none;
            }
            .dropdown-input--disabled[data-v-30ed178a] {
                cursor: not-allowed;
                color: var(--input-disabled-color);
            }
            .dropdown-input--readonly[data-v-30ed178a] {
                color: var(--text-color-medium-light);
                border-bottom-color: var(--input-border-color-readonly);
                cursor: default;
            }
            .dropdown-input--error[data-v-30ed178a] {
                border-bottom-color: var(--error-color);
            }
            .dropdown-input--with-icon[data-v-30ed178a] {
                padding-left: 1.5625rem;
            }
            .dropdown-input--currency-select[data-v-30ed178a] {
                align-items: center;
                border: 1px solid var(--gray-24);
                display: flex;
                height: 100%;
            }
            .dropdown-input--currency-select-icon[data-v-30ed178a] {
                height: 20px;
                margin-left: 0;
                width: 20px;
            }
            .dropdown-input--currency-select-title[data-v-30ed178a] {
                color: var(--text-color);
                margin: 0 0.3125rem 0 0.5rem;
            }
            .dropdown-input--light-border[data-v-30ed178a],
            .dropdown-input--light-border[data-v-30ed178a]:focus {
                border: 1px solid var(--input-border-color-empty);
            }
            .dropdown-input--dark-border[data-v-30ed178a],
            .dropdown-input--dark-border[data-v-30ed178a]:focus {
                border: 1px solid var(--input-border-color-focused);
            }
            .dropdown-input--no-border[data-v-30ed178a] {
                border: none;
            }
            .dropdown-list[data-v-30ed178a] {
                position: absolute;
                top: 18px;
                left: 0;
                padding: 0;
                z-index: 10;
                min-width: min-content;
                max-height: 230px;
                width: 100%;
                box-shadow: 0 5px 20px 0 var(--shadow-lighter);
                background: var(--background-color);
            }
            .dropdown-list--searchable[data-v-30ed178a] {
                top: 54px;
            }
            .dropdown-list--nowrap[data-v-30ed178a] {
                white-space: nowrap;
            }
            .dropdown-list--currency-select[data-v-30ed178a] {
                top: 75px;
            }
            .dropdown-list__choice[data-v-30ed178a] {
                list-style: none;
                background: var(--dropdown-color);
                padding: 0.625rem 0.9375rem;
                cursor: pointer;
                display: flex;
                text-align: left;
                align-items: center;
                font-weight: var(--font-weight-light);
                transition: background-color var(--default-transition-time) var(--default-transition-curve);
            }
            .dropdown-list__choice--active[data-v-30ed178a],
            .dropdown-list__choice[data-v-30ed178a]:hover {
                background-color: var(--dropdown-active-color);
            }
            .dropdown-list__choice--null[data-v-30ed178a] {
                display: none;
            }
            .dropdown-list__choice--default-cursor[data-v-30ed178a] {
                cursor: default;
            }
            .dropdown-list__choice-icon[data-v-30ed178a] {
                margin-right: 0.625rem;
            }
            .dropdown-list__no-data[data-v-30ed178a] {
                padding: 1rem;
                text-align: center;
                cursor: default;
                color: var(--text-color);
            }
            .dropdown__errors[data-v-30ed178a] {
                position: absolute;
                bottom: 0;
                left: 0;
                color: var(--error-color);
                font-size: var(--text-size-small);
            }
            .slide-fade-enter-active[data-v-30ed178a],
            .slide-fade-leave-active[data-v-30ed178a] {
                transition: opacity var(--default-transition-time) var(--default-transition-curve);
            }
            .slide-fade-enter[data-v-30ed178a],
            .slide-fade-leave-to[data-v-30ed178a] {
                opacity: 0;
            }
        </style>
        <style type="text/css">
            .create_password[data-v-0be7e290] .popover {
                width: 100%;
            }
            .create_password[data-v-0be7e290] .popover__content-wrap {
                top: 48px;
                z-index: 2;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                width: 240px;
            }
            @media (max-width: 768px) {
                .create_password[data-v-0be7e290] .popover__content-wrap {
                    width: 100%;
                }
            }
            .create_password[data-v-0be7e290] .popover__content:before {
                left: 114px;
            }
            @media (max-width: 768px) {
                .create_password[data-v-0be7e290] .popover__content:before {
                    left: 50%;
                }
            }
            .create_password[data-v-0be7e290] .popover__content:after {
                left: 115px;
            }
            @media (max-width: 768px) {
                .create_password[data-v-0be7e290] .popover__content:after {
                    left: calc(50% + 1px);
                }
            }
            .create_password__progress[data-v-0be7e290] {
                padding-top: 0.625rem;
                display: block;
            }
            .create_password__info[data-v-0be7e290] {
                font-size: 0.75rem;
                padding: 1.125rem;
                color: var(--text-color-medium-dark);
            }
            .create_password__info.onboarding-update[data-v-0be7e290] {
                padding-left: 0;
                padding-top: 1.125rem;
            }
            .create_password__info ul[data-v-0be7e290] {
                padding-top: 0.625rem;
                padding-bottom: 0.625rem;
            }
            .create_password__test[data-v-0be7e290] {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
                font-size: var(--text-size-normal);
                line-height: normal;
                display: flex;
                align-items: center;
                color: var(--text-color-medium-light);
            }
            .create_password__test.onboarding-update[data-v-0be7e290] {
                padding-top: 0.25rem;
                padding-bottom: 0.25rem;
            }
            .create_password__test-icon[data-v-0be7e290] {
                width: 16px;
                height: 16px;
                margin-right: 0.625rem;
                color: var(--background-color-light);
            }
            .create_password__test--pass[data-v-0be7e290] {
                color: var(--text-color);
            }
            .create_password__test--pass .create_password__test-icon[data-v-0be7e290] {
                color: var(--primary-color);
            }
            @media (max-width: 768px) {
                .create_password__confirm[data-v-0be7e290] {
                    transition: padding-top 0.5s ease;
                }
                .create_password__confirm--popover_open[data-v-0be7e290] {
                    padding-top: 13.125rem;
                }
            }
        </style>
        <style type="text/css">
            .option--row[data-v-e8c44608] {
                align-items: center;
                color: var(--black);
                display: flex;
            }
            .option--icon[data-v-e8c44608] {
                height: 20px;
                width: 20px;
            }
            .option--title[data-v-e8c44608] {
                margin: 0 0.3125rem 0 0.5rem;
            }
            .option--input[data-v-e8c44608] {
                margin-left: 0.9375rem;
                cursor: pointer;
            }
        </style>
        <style type="text/css">
            .field-currency-dropdown[data-v-6b1868e6] .dropdown-label--currency-select {
                top: 0;
                left: 0;
            }
        </style>
        <style type="text/css">
            .flatpickr-calendar {
                opacity: 0;
                display: none;
                text-align: center;
                visibility: hidden;
                animation: none;
                direction: ltr;
                border: 0;
                font-size: var(--text-size-normal);
                line-height: 1.5rem;
                border-radius: var(--border-radius);
                position: absolute;
                width: calc(var(--date-picker-width) + 1rem);
                padding: 1rem 0.5rem;
                max-width: calc(73vw + 1rem);
                box-sizing: border-box;
                touch-action: manipulation;
                background: var(--date-picker-background-color);
                box-shadow: 0 0 30px 0 var(--shadow-lighter);
            }
            @media (min-width: 577px) {
                .flatpickr-calendar {
                    padding: 1.5rem;
                    width: calc(var(--date-picker-width) + 3rem);
                }
            }
            .flatpickr-calendar.inline,
            .flatpickr-calendar.open {
                opacity: 1;
                max-height: 640px;
                visibility: visible;
            }
            .flatpickr-calendar.open {
                display: inline-block;
                z-index: 99999;
            }
            .flatpickr-calendar.animate.open {
                animation: fpFadeInDown 0.3s cubic-bezier(0.23, 1, 0.32, 1);
            }
            .flatpickr-calendar.inline {
                display: block;
                position: relative;
                top: 2px;
            }
            .flatpickr-calendar.static {
                position: absolute;
                top: calc(100% + 2px);
            }
            .flatpickr-calendar.static.open {
                z-index: 999;
                display: block;
            }
            .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n + 1) .flatpickr-day.inRange:nth-child(7n + 7) {
                box-shadow: none !important;
            }
            .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n + 2) .flatpickr-day.inRange:nth-child(7n + 1) {
                box-shadow: -2px 0 0 var(--shadow-color-light), 5px 0 0 var(--shadow-color-light);
            }
            .flatpickr-calendar .hasTime .dayContainer,
            .flatpickr-calendar .hasWeeks .dayContainer {
                border-bottom: 0;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .flatpickr-calendar .hasWeeks .dayContainer {
                border-left: 0;
            }
            .flatpickr-calendar.showTimeInput.hasTime .flatpickr-time {
                height: 40px;
                border-top: 1px solid var(--border-color-lighter);
            }
            .flatpickr-calendar.noCalendar.hasTime .flatpickr-time {
                height: auto;
            }
            .flatpickr-calendar:after,
            .flatpickr-calendar:before {
                position: absolute;
                display: block;
                pointer-events: none;
                border: solid transparent;
                content: "";
                height: 0;
                width: 0;
                left: 22px;
            }
            .flatpickr-calendar.rightMost:after,
            .flatpickr-calendar.rightMost:before {
                left: auto;
                right: 22px;
            }
            .flatpickr-calendar:before {
                border-width: 5px;
                margin: 0 -0.3125rem;
            }
            .flatpickr-calendar:after {
                border-width: 4px;
                margin: 0 -0.25rem;
            }
            .flatpickr-calendar.arrowTop:after,
            .flatpickr-calendar.arrowTop:before {
                bottom: 100%;
            }
            .flatpickr-calendar.arrowTop:before {
                border-bottom-color: var(--border-color-lighter);
            }
            .flatpickr-calendar.arrowTop:after {
                border-bottom-color: var(--background-color);
            }
            .flatpickr-calendar.arrowBottom:after,
            .flatpickr-calendar.arrowBottom:before {
                top: 100%;
            }
            .flatpickr-calendar.arrowBottom:before {
                border-top-color: var(--border-color-lighter);
            }
            .flatpickr-calendar.arrowBottom:after {
                border-top-color: var(--background-color);
            }
            .flatpickr-calendar:focus {
                outline: 0;
            }
            .flatpickr-wrapper {
                position: relative;
                display: inline-block;
            }
            .flatpickr-months {
                display: flex;
                margin-bottom: 1rem;
            }
            .flatpickr-months select {
                background-color: var(--background-color);
                width: auto;
                height: 100%;
                font-size: inherit;
                cursor: pointer;
                font-family: inherit;
                font-weight: inherit;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                margin: 0.0625rem 0 0;
                border: none;
                border-bottom: 1px solid var(--input-border-color);
            }
            .flatpickr-months .flatpickr-month {
                background: transparent;
                color: var(--date-picker-nav-color);
                fill: var(--date-picker-nav-color);
                height: 28px;
                line-height: 1;
                text-align: center;
                position: relative;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                overflow: hidden;
                flex: 1 1;
            }
            .flatpickr-months .flatpickr-next-month,
            .flatpickr-months .flatpickr-prev-month {
                text-decoration: none;
                cursor: pointer;
                position: absolute;
                top: 14px;
                line-height: 1rem;
                padding: 0.625rem;
                z-index: 3;
                color: var(--date-picker-nav-color);
                fill: var(--date-picker-nav-color);
            }
            @media (min-width: 577px) {
                .flatpickr-months .flatpickr-next-month,
                .flatpickr-months .flatpickr-prev-month {
                    top: 1.25rem;
                }
            }
            .flatpickr-months .flatpickr-next-month.disabled,
            .flatpickr-months .flatpickr-prev-month.disabled {
                display: none;
            }
            .flatpickr-months .flatpickr-prev-month {
                left: 0.75rem;
            }
            @media (min-width: 577px) {
                .flatpickr-months .flatpickr-prev-month {
                    left: 2rem;
                }
            }
            .flatpickr-months .flatpickr-next-month {
                right: 0.75rem;
            }
            @media (min-width: 577px) {
                .flatpickr-months .flatpickr-next-month {
                    right: 2rem;
                }
            }
            .flatpickr-months .flatpickr-next-month i,
            .flatpickr-months .flatpickr-prev-month i {
                position: relative;
            }
            .flatpickr-months .flatpickr-next-month:hover,
            .flatpickr-months .flatpickr-prev-month:hover {
                color: var(--green-lighter);
            }
            .flatpickr-months .flatpickr-next-month:hover svg,
            .flatpickr-months .flatpickr-prev-month:hover svg {
                fill: var(--green-lighter);
            }
            .flatpickr-months .flatpickr-next-month svg,
            .flatpickr-months .flatpickr-prev-month svg {
                width: 14px;
                height: 14px;
            }
            .flatpickr-months .flatpickr-next-month svg path,
            .flatpickr-months .flatpickr-prev-month svg path {
                transition: fill 0.1s;
                fill: inherit;
            }
            .numInputWrapper {
                position: relative;
                height: auto;
            }
            .numInputWrapper input,
            .numInputWrapper span {
                display: inline-block;
            }
            .numInputWrapper input {
                width: 100%;
            }
            .numInputWrapper input::-ms-clear {
                display: none;
            }
            .numInputWrapper input::-webkit-inner-spin-button,
            .numInputWrapper input::-webkit-outer-spin-button {
                margin: 0;
                -webkit-appearance: none;
            }
            .numInputWrapper span {
                position: absolute;
                right: -5px;
                width: 14px;
                padding: 0 0.25rem 0 0.125rem;
                height: 50%;
                line-height: 50%;
                opacity: 0;
                cursor: pointer;
                border: transparent;
                box-sizing: border-box;
            }
            .numInputWrapper span:hover {
                background: var(--shadow-lighter);
            }
            .numInputWrapper span:active {
                background: var(--shadow-light);
            }
            .numInputWrapper span:after {
                display: block;
                content: "";
                position: absolute;
            }
            .numInputWrapper span.arrowUp {
                top: 0;
                border-bottom: 0;
            }
            .numInputWrapper span.arrowUp:after {
                border-left: 4px solid transparent;
                border-right: 4px solid transparent;
                border-bottom: 4px solid var(--border-color-dark);
                top: 26%;
            }
            .numInputWrapper span.arrowDown {
                top: 50%;
            }
            .numInputWrapper span.arrowDown:after {
                border-left: 4px solid transparent;
                border-right: 4px solid transparent;
                border-top: 4px solid var(--border-color-dark);
                top: 40%;
            }
            .numInputWrapper span svg {
                width: inherit;
                height: auto;
            }
            .numInputWrapper span svg path {
                fill: rgba(51, 52, 51, 0.5);
            }
            .numInputWrapper:hover {
                background: var(--background-color-lighter);
            }
            .numInputWrapper:hover span {
                opacity: 1;
            }
            .flatpickr-current-month {
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-medium);
                font-family: var(--default-font-family);
                color: inherit;
                display: inline-flex;
            }
            .flatpickr-current-month .flatpickr-monthDropdown-months {
                text-align: center;
            }
            .flatpickr-current-month span.cur-month {
                font-family: inherit;
                font-weight: inherit;
                color: inherit;
            }
            .flatpickr-current-month span.cur-month:hover {
                background: transparent;
            }
            .flatpickr-current-month .numInputWrapper {
                width: 8ch;
                font-weight: inherit;
                display: inline-block;
            }
            .flatpickr-current-month .numInputWrapper input[type="number"] {
                height: auto;
                margin: 0;
                border: 0;
                text-align: right;
                padding: 0 1rem 0 0;
            }
            .flatpickr-current-month .numInputWrapper span.arrowUp:after {
                border-bottom-color: var(--date-picker-nav-color);
            }
            .flatpickr-current-month .numInputWrapper span.arrowDown:after {
                border-top-color: var(--date-picker-nav-color);
            }
            .flatpickr-current-month .numInputWrapper:hover {
                background: transparent;
            }
            .flatpickr-current-month input.cur-year {
                background: transparent;
                box-sizing: border-box;
                color: inherit;
                cursor: text;
                margin: 0;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
                border: 0;
                border-radius: 0;
                vertical-align: initial;
                -webkit-appearance: textfield;
                -moz-appearance: textfield;
                appearance: textfield;
            }
            .flatpickr-current-month input.cur-year:focus {
                outline: 0;
            }
            .flatpickr-current-month input.cur-year[disabled],
            .flatpickr-current-month input.cur-year[disabled]:hover {
                font-size: 100%;
                color: var(--text-color-light);
                background: transparent;
                pointer-events: none;
            }
            .flatpickr-weekdays {
                background: transparent;
                text-align: center;
                overflow: hidden;
                width: 100%;
                display: flex;
                align-items: center;
                height: 28px;
            }
            .flatpickr-weekdays .flatpickr-weekdaycontainer {
                display: flex;
                flex: 1 1;
            }
            .flatpickr-weekday {
                cursor: default;
                font-size: var(--text-size-small);
                background: transparent;
                color: var(--text-color);
                line-height: 1;
                margin: 0;
                text-align: center;
                display: block;
                flex: 1 1;
                font-weight: var(--font-weight-medium);
            }
            .dayContainer,
            .flatpickr-weeks {
                padding: 0.0625rem 0 0;
            }
            .flatpickr-days {
                position: relative;
                overflow: hidden;
                display: flex;
                align-items: flex-start;
                width: var(--date-picker-width);
                max-width: 73vw;
            }
            .flatpickr-days:focus {
                outline: 0;
            }
            .dayContainer {
                padding: 0;
                outline: 0;
                text-align: left;
                width: var(--date-picker-width);
                min-width: 73vw;
                max-width: 73vw;
                box-sizing: border-box;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                transform: translateZ(0);
                opacity: 1;
            }
            @media (min-width: 577px) {
                .dayContainer {
                    width: var(--date-picker-width);
                    min-width: var(--date-picker-width);
                    max-width: var(--date-picker-width);
                }
            }
            .dayContainer + .dayContainer {
                box-shadow: -1px 0 0 var(--shadow-color-light);
            }
            .flatpickr-day {
                background: none;
                border: 1px solid transparent;
                border-radius: 150px;
                box-sizing: border-box;
                color: var(--text-color);
                cursor: pointer;
                font-weight: var(--font-weight-normal);
                width: 14.2857143%;
                flex-basis: 14.2857143%;
                max-width: 39px;
                height: 39px;
                line-height: 2.4375rem;
                margin: 0;
                display: inline-block;
                position: relative;
                justify-content: center;
                text-align: center;
            }
            .flatpickr-day.inRange,
            .flatpickr-day.nextMonthDay.inRange,
            .flatpickr-day.nextMonthDay.today.inRange,
            .flatpickr-day.nextMonthDay:focus,
            .flatpickr-day.nextMonthDay:hover,
            .flatpickr-day.prevMonthDay.inRange,
            .flatpickr-day.prevMonthDay.today.inRange,
            .flatpickr-day.prevMonthDay:focus,
            .flatpickr-day.prevMonthDay:hover,
            .flatpickr-day.today.inRange,
            .flatpickr-day:focus,
            .flatpickr-day:hover {
                cursor: pointer;
                outline: 0;
                background: var(--date-picker-range-color);
                border-color: var(--date-picker-range-color);
            }
            .flatpickr-day.today {
                border-color: var(--date-picker-today-color);
            }
            .flatpickr-day.today:focus,
            .flatpickr-day.today:hover {
                border-color: var(--date-picker-today-color);
                background: var(--date-picker-today-color);
                color: var(--text-color-bright);
            }
            .flatpickr-day.endRange,
            .flatpickr-day.endRange.inRange,
            .flatpickr-day.endRange.nextMonthDay,
            .flatpickr-day.endRange.prevMonthDay,
            .flatpickr-day.endRange:focus,
            .flatpickr-day.endRange:hover,
            .flatpickr-day.selected,
            .flatpickr-day.selected.inRange,
            .flatpickr-day.selected.nextMonthDay,
            .flatpickr-day.selected.prevMonthDay,
            .flatpickr-day.selected:focus,
            .flatpickr-day.selected:hover,
            .flatpickr-day.startRange,
            .flatpickr-day.startRange.inRange,
            .flatpickr-day.startRange.nextMonthDay,
            .flatpickr-day.startRange.prevMonthDay,
            .flatpickr-day.startRange:focus,
            .flatpickr-day.startRange:hover {
                background: var(--primary-color);
                box-shadow: none;
                color: var(--text-color-bright);
                border-color: var(--primary-color);
            }
            .flatpickr-day.endRange.startRange,
            .flatpickr-day.selected.startRange,
            .flatpickr-day.startRange.startRange {
                border-radius: 50px 0 0 50px;
            }
            .flatpickr-day.endRange.endRange,
            .flatpickr-day.selected.endRange,
            .flatpickr-day.startRange.endRange {
                border-radius: 0 50px 50px 0;
            }
            .flatpickr-day.endRange.startRange + .endRange:not(:nth-child(7n + 1)),
            .flatpickr-day.selected.startRange + .endRange:not(:nth-child(7n + 1)),
            .flatpickr-day.startRange.startRange + .endRange:not(:nth-child(7n + 1)) {
                box-shadow: -10px 0 0 var(--date-picker-from-to-color);
            }
            .flatpickr-day.selected.startRange.endRange,
            .flatpickr-day.startRange.startRange.endRange {
                border-radius: 50px;
            }
            .flatpickr-day.inRange {
                border-radius: 0;
                box-shadow: -5px 0 0 var(--shadow-color-light), 5px 0 0 var(--shadow-color-light);
            }
            .flatpickr-day.disabled {
                color: var(--date-picker-disabled-color);
                background: transparent;
                border-color: transparent;
                cursor: default;
            }
            .flatpickr-day.disabled:hover {
                background: transparent;
                border-color: transparent;
                cursor: not-allowed;
            }
            .flatpickr-day.nextMonthDay,
            .flatpickr-day.notAllowed,
            .flatpickr-day.notAllowed.nextMonthDay,
            .flatpickr-day.notAllowed.prevMonthDay,
            .flatpickr-day.prevMonthDay {
                color: var(--text-color-light);
                background: transparent;
                border-color: transparent;
                cursor: default;
            }
            .flatpickr-day.week.selected {
                border-radius: 0;
                box-shadow: -5px 0 0 var(--date-picker-from-to-color), 5px 0 0 var(--date-picker-from-to-color);
            }
            .flatpickr-day.hidden {
                visibility: hidden;
            }
            .rangeMode .flatpickr-day {
                margin-top: 0.0625rem;
            }
            .flatpickr-weekwrapper {
                display: inline-block;
                float: left;
            }
            .flatpickr-weekwrapper .flatpickr-weeks {
                padding: 0 0.75rem;
                box-shadow: 1px 0 0 var(--shadow-color-light);
            }
            .flatpickr-weekwrapper .flatpickr-weekday {
                float: none;
                width: 100%;
                line-height: 1.75rem;
            }
            .flatpickr-weekwrapper .flatpickr-day,
            .flatpickr-weekwrapper .flatpickr-day:hover {
                display: block;
                width: 100%;
                max-width: none;
                color: var(--text-color-light);
                background: transparent;
                cursor: default;
                border: none;
            }
            .flatpickr-innerContainer {
                display: flex;
                box-sizing: border-box;
                overflow: hidden;
            }
            .flatpickr-rContainer {
                display: inline-block;
                padding: 0;
                box-sizing: border-box;
            }
            .flatpickr-time {
                text-align: center;
                outline: 0;
                height: 0;
                line-height: 2.5rem;
                max-height: 40px;
                box-sizing: border-box;
                overflow: hidden;
                display: flex;
            }
            .flatpickr-time:after {
                content: "";
                display: table;
                clear: both;
            }
            .flatpickr-time .numInputWrapper {
                flex: 1 1;
                width: 40%;
                height: 40px;
                float: left;
            }
            .flatpickr-time .numInputWrapper span.arrowUp:after {
                border-bottom-color: var(--border-color-dark);
            }
            .flatpickr-time .numInputWrapper span.arrowDown:after {
                border-top-color: var(--border-color-dark);
            }
            .flatpickr-time.hasSeconds .numInputWrapper {
                width: 26%;
            }
            .flatpickr-time.time24hr .numInputWrapper {
                width: 49%;
            }
            .flatpickr-time input {
                background: transparent;
                box-shadow: none;
                border: 0;
                border-radius: 0;
                text-align: center;
                margin: 0;
                padding: 0;
                height: inherit;
                line-height: inherit;
                color: var(--text-color);
                font-size: var(--text-size-normal);
                position: relative;
                box-sizing: border-box;
                -webkit-appearance: textfield;
                -moz-appearance: textfield;
                appearance: textfield;
            }
            .flatpickr-time input.flatpickr-hour {
                font-weight: var(--font-weight-bold);
            }
            .flatpickr-time input.flatpickr-minute,
            .flatpickr-time input.flatpickr-second {
                font-weight: var(--font-weight-normal);
            }
            .flatpickr-time input:focus {
                outline: 0;
                border: 0;
            }
            .flatpickr-time .flatpickr-time-separator {
                font-weight: var(--font-weight-medium);
                width: 2%;
            }
            .flatpickr-time .flatpickr-am-pm,
            .flatpickr-time .flatpickr-time-separator {
                height: inherit;
                display: inline-block;
                float: left;
                line-height: inherit;
                color: var(--text-color);
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                align-self: center;
            }
            .flatpickr-time .flatpickr-am-pm {
                outline: 0;
                width: 18%;
                cursor: pointer;
                text-align: center;
                font-weight: var(--font-weight-normal);
            }
            .flatpickr-time .flatpickr-am-pm:focus,
            .flatpickr-time .flatpickr-am-pm:hover,
            .flatpickr-time input:focus,
            .flatpickr-time input:hover {
                background: var(--gray-11);
            }
            .flatpickr-input[readonly] {
                cursor: pointer;
            }
            @keyframes fpFadeInDown {
                0% {
                    opacity: 0;
                    transform: translate3d(0, -20px, 0);
                }
                to {
                    opacity: 1;
                    transform: translateZ(0);
                }
            }
        </style>
        <style type="text/css">
            .app-icon[data-v-1fefeeb6] {
                display: inline-block;
                position: relative;
            }
            .app-icon--success[data-v-1fefeeb6] {
                color: var(--success-color);
            }
            .app-icon--info[data-v-1fefeeb6] {
                color: var(--info-color);
            }
            .app-icon--warning[data-v-1fefeeb6] {
                color: var(--warning-color);
            }
            .app-icon--error[data-v-1fefeeb6] {
                color: var(--error-color);
            }
        </style>
        <style type="text/css">
            .countries[data-v-2320d4a4] {
                width: 100%;
            }
            .countries__row[data-v-2320d4a4] {
                display: flex;
                align-items: center;
            }
            .countries__warning-wrapper[data-v-2320d4a4] {
                position: relative;
                margin-bottom: 1.5625rem;
                display: flex;
            }
            .countries__warning[data-v-2320d4a4] {
                color: var(--warning-color);
                font-size: var(--text-size-small);
                align-items: center;
                display: flex;
                position: absolute;
                top: -15px;
            }
            .countries__warning-icon[data-v-2320d4a4] {
                border-radius: 50%;
                background-color: var(--orange-very-white);
                margin-right: 0.3125rem;
                width: 20px;
                height: 20px;
            }
            .countries__add[data-v-2320d4a4] {
                display: flex;
                color: var(--secondary-color);
                cursor: pointer;
            }
            .countries__add-icon[data-v-2320d4a4] {
                border: 2px solid var(--secondary-color);
                border-radius: 50%;
                padding: 0.1875rem;
                box-sizing: border-box;
                height: 22px;
                width: 22px;
                margin-right: 0.625rem;
            }
            .countries__delete-icon[data-v-2320d4a4] {
                right: 0.25rem;
                padding: 0.25rem;
                width: 22px;
                color: var(--text-color-medium);
                border-radius: 50%;
                cursor: pointer;
            }
            .countries__delete-icon[data-v-2320d4a4]:hover {
                color: var(--tertiary-hover-color);
            }
        </style>
        <style type="text/css">
            .tooltip-item[data-v-1fe4828e] {
                position: relative;
                display: inline-block;
            }
            .tooltip-item__pointer[data-v-1fe4828e] {
                top: -8px;
                bottom: auto;
                margin: 0 auto;
                left: calc(50% - 12px);
                content: "";
                position: absolute;
                border-left: 12px solid transparent;
                border-bottom: 8px solid var(--background-color);
                border-right: 12px solid transparent;
                border-top: 0 solid var(--background-color);
                display: block;
                width: 0;
            }
            .tooltip-item__content[data-v-1fe4828e] {
                position: absolute;
                left: 50%;
                top: 1.3rem;
                font-size: var(--text-size-small);
                line-height: 1.5;
                padding: 1rem;
                width: 14.375rem;
                overflow-wrap: break-word;
                word-wrap: break-word;
                background: var(--background-color);
                box-shadow: 0 0 20px 0 var(--shadow-color-light);
                border-radius: var(--border-radius);
                z-index: 2;
                color: var(--text-color-regular);
            }
            .tooltip-item--small .tooltip-item__content[data-v-1fe4828e],
            .tooltip-item__content--small[data-v-1fe4828e] {
                top: 2rem;
                width: auto;
                transform: translateX(0);
                font-size: var(--text-size-xs);
            }
            .tooltip-item--off-screen[data-v-1fe4828e] {
                position: fixed;
            }
        </style>
        <style type="text/css">
            .dropdowns[data-v-1d553f7b] {
                width: 100%;
            }
            .dropdowns__row[data-v-1d553f7b] {
                display: flex;
                align-items: center;
            }
            .dropdowns__add[data-v-1d553f7b] {
                display: flex;
                color: var(--secondary-color);
                cursor: pointer;
            }
            .dropdowns__add-icon[data-v-1d553f7b] {
                border: 2px solid var(--secondary-color);
                border-radius: 50%;
                padding: 0.1875rem;
                box-sizing: border-box;
                height: 22px;
                width: 22px;
                margin-right: 0.625rem;
            }
            .dropdowns__delete-icon[data-v-1d553f7b] {
                right: 0.25rem;
                padding: 0.25rem;
                width: 22px;
                color: var(--text-color-medium);
                border-radius: 50%;
                cursor: pointer;
            }
            .dropdowns__delete-icon[data-v-1d553f7b]:hover {
                color: var(--tertiary-hover-color);
            }
        </style>
        <style type="text/css">
            .file-upload[data-v-534a850c] {
                width: 100%;
                max-width: 500px;
                min-width: 0;
                height: 100px;
                border: 2px dashed var(--border-color);
                border-radius: 8px;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: flex-start;
                position: relative;
            }
            .file-upload__parent[data-v-534a850c] {
                width: 100%;
            }
            .file-upload__error-message[data-v-534a850c] {
                color: var(--error-color);
                font-size: var(--text-size-small);
                position: absolute;
                bottom: 0;
            }
            .file-upload__icon[data-v-534a850c] {
                max-width: var(--icon-size-medium);
                height: var(--icon-size-medium);
                margin-left: 2rem;
                margin-right: 2rem;
            }
            .file-upload--state-error[data-v-534a850c] {
                border: 2px dashed var(--error-color);
            }
            .file-upload--state-drag[data-v-534a850c] {
                border: 2px dashed var(--primary-color);
            }
            .file-upload--state-done .file-upload__preview-link[data-v-534a850c] {
                margin-bottom: auto;
                color: var(--link-color);
                font-weight: var(--font-weight-medium);
            }
            .file-upload--state-done .file-upload__preview-link[data-v-534a850c]:hover {
                color: var(--link-hover-color);
            }
            .file-upload--state-done .file-upload__other-files[data-v-534a850c] {
                margin-bottom: auto;
                color: var(--text-color-medium-light);
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-normal);
                line-height: 1.1875rem;
            }
            .file-upload--state-done[data-v-534a850c],
            .file-upload--state-uploading[data-v-534a850c] {
                border: 2px solid transparent;
                box-shadow: 0 2px 30px 0 var(--shadow-lighter);
                border-radius: 8px;
            }
            .file-upload--state-done .file-upload__cross[data-v-534a850c],
            .file-upload--state-uploading .file-upload__cross[data-v-534a850c] {
                position: absolute;
                width: var(--icon-size);
                height: var(--icon-size);
                top: 14px;
                right: 14px;
                cursor: pointer;
                color: var(--text-color-lighter);
            }
            .file-upload--state-done .file-upload__cross[data-v-534a850c]:hover,
            .file-upload--state-uploading .file-upload__cross[data-v-534a850c]:hover {
                color: var(--text-color-medium-light);
            }
            .file-upload--state-done .file-upload__content[data-v-534a850c],
            .file-upload--state-uploading .file-upload__content[data-v-534a850c] {
                min-width: 0;
                max-width: 45vw;
                display: flex;
                flex-direction: column;
                height: 100px;
            }
            .file-upload--state-done .file-upload__content--single-line .file-upload__main-text[data-v-534a850c],
            .file-upload--state-uploading .file-upload__content--single-line .file-upload__main-text[data-v-534a850c] {
                margin-bottom: auto;
            }
            .file-upload--state-done .file-upload__main-text[data-v-534a850c],
            .file-upload--state-uploading .file-upload__main-text[data-v-534a850c] {
                min-width: 0;
                width: 90%;
                font-weight: var(--font-weight-medium);
                color: var(--text-color);
                font-size: var(--text-size-medium);
                margin-top: auto;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .file-upload--state-uploading .file-upload__content[data-v-534a850c] {
                width: 100%;
            }
            .file-upload--state-uploading .file-upload__progress_container[data-v-534a850c] {
                margin-bottom: auto;
                padding-top: 0.5rem;
                height: 22px;
                width: 80%;
            }
            .file-upload--state-ready[data-v-534a850c] {
                font-weight: var(--font-weight-medium);
            }
            .file-upload--state-ready .file-upload__content[data-v-534a850c] {
                display: flex;
                align-items: center;
            }
            @media (max-width: 576px) {
                .file-upload--state-ready .file-upload__main-text[data-v-534a850c] {
                    font-size: var(--text-size-normal);
                }
            }
            .file-upload--state-ready .file-upload__other-text[data-v-534a850c] {
                font-size: var(--text-size-medium);
            }
            .file-upload--state-ready .file-upload__or[data-v-534a850c] {
                color: var(--text-color-lighter);
                padding-left: 1rem;
                display: inline-block;
            }
            .file-upload--state-ready .file-upload__browse[data-v-534a850c] {
                color: var(--link-color);
                padding-left: 1rem;
                padding-right: 1rem;
                display: inline-block;
                text-decoration: underline;
                cursor: pointer;
            }
            .file-upload--state-ready .file-upload__browse[data-v-534a850c]:focus,
            .file-upload--state-ready .file-upload__browse[data-v-534a850c]:hover {
                color: var(--link-hover-color);
                outline: none;
            }
            .file-upload--state-ready .file-upload__subtext[data-v-534a850c] {
                color: var(--text-color-medium-light);
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-normal);
                line-height: 1.1875rem;
                display: block;
            }
            @media (max-width: 576px) {
                .file-upload--state-ready .file-upload__subtext[data-v-534a850c] {
                    display: none;
                }
            }
        </style>
        <style type="text/css">
            .file-upload[data-v-2f1c8950] {
                width: 100%;
                max-width: 500px;
                min-width: 0;
                height: 100px;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: flex-start;
                position: relative;
                border: 2px solid transparent;
                box-shadow: 0 2px 30px 0 var(--shadow-lighter);
                border-radius: 8px;
            }
            .file-upload__icon[data-v-2f1c8950] {
                max-width: var(--icon-size-medium);
                height: var(--icon-size-medium);
                margin-left: 2rem;
                margin-right: 2rem;
            }
            .file-upload__preview-link[data-v-2f1c8950] {
                margin-bottom: auto;
                color: var(--link-color);
                font-weight: var(--font-weight-medium);
            }
            .file-upload__preview-link[data-v-2f1c8950]:hover {
                color: var(--link-hover-color);
            }
            .file-upload__cross[data-v-2f1c8950] {
                position: absolute;
                width: var(--icon-size);
                height: var(--icon-size);
                top: 14px;
                right: 14px;
                cursor: pointer;
                color: var(--text-color-lighter);
            }
            .file-upload__cross[data-v-2f1c8950]:hover {
                color: var(--text-color-medium-light);
            }
            .file-upload__content[data-v-2f1c8950] {
                min-width: 0;
                max-width: 45vw;
                display: flex;
                flex-direction: column;
                height: 100px;
            }
            .file-upload__content--single-line .file-upload__main-text[data-v-2f1c8950] {
                margin-bottom: auto;
            }
            .file-upload__main-text[data-v-2f1c8950] {
                min-width: 0;
                width: 90%;
                font-weight: var(--font-weight-medium);
                color: var(--text-color);
                font-size: var(--text-size-medium);
                margin-top: auto;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
        </style>
        <style type="text/css">
            .mobile-file-upload[data-v-212983ef] {
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                display: flex;
                flex-direction: column;
                align-items: center;
                min-width: 0;
                max-width: 400px;
                width: 100%;
                color: var(--link-color);
                font-size: var(--text-size-base);
                line-height: 1.5rem;
                margin-left: auto;
                margin-right: auto;
            }
            .mobile-file-upload__or[data-v-212983ef] {
                margin-top: 2.0625rem;
                color: var(--text-color-medium-light);
                font-weight: var(--font-weight-normal);
                font-size: var(--text-size-normal);
            }
            .mobile-file-upload__file[data-v-212983ef] {
                margin-top: 1.25rem;
                display: flex;
                align-items: center;
            }
            .mobile-file-upload__file-icon[data-v-212983ef] {
                background: url(https://assets.bitstamp.net/onboarding/s/widgets/onboarding/32d7b0412b9c3385c068e1101c962891.svg) 50% no-repeat;
                height: var(--icon-size-medium);
                width: var(--icon-size-medium);
                display: inline-block;
            }
            .mobile-file-upload__file-text[data-v-212983ef] {
                display: inline-block;
                margin-left: 0.75rem;
            }
            .mobile-file-upload__file-text-top[data-v-212983ef] {
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-medium);
            }
            .mobile-file-upload__file-text-bottom[data-v-212983ef] {
                font-size: var(--text-size-small);
                color: var(--text-color-medium-light);
            }
            .mobile-file-upload .mobile-file-upload__photo[data-v-212983ef] {
                width: 100%;
                font-weight: var(--font-weight-medium);
                height: 100px;
                display: flex;
                border: 2px dashed var(--border-color);
                border-radius: 8px;
                justify-content: flex-start;
            }
            .mobile-file-upload .mobile-file-upload__photo-icon[data-v-212983ef] {
                height: var(--icon-size-medium);
                width: var(--icon-size-medium);
                margin: auto 2.375rem;
            }
            .mobile-file-upload__error-message-container[data-v-212983ef] {
                position: relative;
                margin-right: auto;
            }
            .mobile-file-upload__error-message[data-v-212983ef] {
                position: absolute;
                white-space: nowrap;
                color: var(--error-color);
                font-size: var(--text-size-small);
            }
            .mobile-file-upload--state-error .mobile-file-upload__photo[data-v-212983ef] {
                border: 2px dashed var(--error-color);
            }
            .mobile-file-upload--state-error .mobile-file-upload__file[data-v-212983ef],
            .mobile-file-upload--state-error .mobile-file-upload__photo[data-v-212983ef],
            .mobile-file-upload--state-ready .mobile-file-upload__file[data-v-212983ef],
            .mobile-file-upload--state-ready .mobile-file-upload__photo[data-v-212983ef] {
                cursor: pointer;
            }
            .mobile-file-upload--state-error .mobile-file-upload__photo-text[data-v-212983ef],
            .mobile-file-upload--state-ready .mobile-file-upload__photo-text[data-v-212983ef] {
                margin-top: auto;
                margin-bottom: auto;
                padding-right: 2.375rem;
            }
            .mobile-file-upload--state-done .mobile-file-upload__photo[data-v-212983ef],
            .mobile-file-upload--state-uploading .mobile-file-upload__photo[data-v-212983ef] {
                border-color: transparent;
                box-shadow: 0 2px 30px 0 var(--shadow-lighter);
                border-radius: 8px;
                max-width: 90vw;
                min-width: 0;
                width: 100%;
            }
            .mobile-file-upload--state-done .mobile-file-upload__info[data-v-212983ef],
            .mobile-file-upload--state-uploading .mobile-file-upload__info[data-v-212983ef] {
                min-width: 0;
                height: 100%;
                display: flex;
                flex-direction: column;
                flex-grow: 1;
            }
            .mobile-file-upload--state-done .mobile-file-upload__info--single-line .mobile-file-upload__info-filename[data-v-212983ef],
            .mobile-file-upload--state-uploading .mobile-file-upload__info--single-line .mobile-file-upload__info-filename[data-v-212983ef] {
                margin-bottom: auto;
            }
            .mobile-file-upload--state-done .mobile-file-upload__other-files[data-v-212983ef],
            .mobile-file-upload--state-uploading .mobile-file-upload__other-files[data-v-212983ef] {
                margin-bottom: auto;
                color: var(--text-color-medium-light);
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-normal);
                line-height: 1.1875rem;
            }
            .mobile-file-upload--state-done .mobile-file-upload__info-filename[data-v-212983ef],
            .mobile-file-upload--state-uploading .mobile-file-upload__info-filename[data-v-212983ef] {
                font-weight: var(--font-weight-medium);
                color: var(--text-color);
                margin-top: auto;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }
            .mobile-file-upload--state-done .mobile-file-upload__cross[data-v-212983ef],
            .mobile-file-upload--state-uploading .mobile-file-upload__cross[data-v-212983ef] {
                cursor: pointer;
                height: var(--icon-size);
                min-width: var(--icon-size);
                margin: 0.5rem;
                color: var(--text-color-lighter);
            }
            .mobile-file-upload--state-done .mobile-file-upload__cross[data-v-212983ef]:hover,
            .mobile-file-upload--state-uploading .mobile-file-upload__cross[data-v-212983ef]:hover {
                color: var(--text-color-medium-light);
            }
            .mobile-file-upload--state-done .mobile-file-upload__preview-link[data-v-212983ef] {
                margin-bottom: auto;
                text-decoration: underline;
                color: var(--link-color);
                font-weight: var(--font-weight-medium);
            }
            .mobile-file-upload--state-uploading .mobile-file-upload__info-progress-container[data-v-212983ef] {
                height: 24px;
                margin-bottom: auto;
                padding-top: 0.5rem;
            }
        </style>
        <style type="text/css">
            .icon[data-v-063258aa] {
                padding: 0.25rem;
                margin: -0.1875rem 0.5rem;
                border-radius: 50%;
                color: var(--info-color);
                background-color: var(--secondary-color-transparent);
                display: inline-block;
            }
            .icon--regular[data-v-063258aa] {
                width: 1.25rem;
                height: 1.25rem;
            }
            .icon--small[data-v-063258aa] {
                width: 1rem;
                height: 1rem;
                margin: -0.1875rem 0.25rem;
            }
        </style>
        <style type="text/css">
            .file-upload__help[data-v-af24bc12] {
                width: var(--icon-size);
                height: var(--icon-size);
                line-height: var(--icon-size);
                border-radius: 50%;
                background-color: var(--secondary-color-transparent);
                color: var(--link-color);
                display: inline-block;
                margin-left: 0.625rem;
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-medium);
                cursor: pointer;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                text-align: center;
            }
            .file-upload__help[data-v-af24bc12]:hover {
                transform: scale(1.1);
            }
            .file-upload__label[data-v-af24bc12] {
                padding-bottom: 1.25rem;
                font-size: var(--text-size-base);
                color: var(--text-color);
                font-weight: var(--font-weight-medium);
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            .file-upload__container[data-v-af24bc12] {
                width: 100%;
                display: flex;
                align-items: flex-start;
                flex-direction: column;
                padding-bottom: 1.25rem;
                position: relative;
                text-align: left;
            }
            .file-upload__item[data-v-af24bc12] {
                margin-bottom: 1.25rem;
            }
            .file-upload__items[data-v-af24bc12] {
                width: 100%;
            }
            .file-upload__limit-reached[data-v-af24bc12] {
                color: var(--text-color-medium-light);
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-normal);
                text-align: center;
                width: 100%;
            }
            .file-upload__short-help[data-v-af24bc12] {
                font-size: var(--text-size-small);
                font-weight: var(--font-weight-normal);
                color: var(--warning-color);
                margin-top: 0.5rem;
            }
        </style>
        <style type="text/css">
            .field-file-upload[data-v-39dd34ba] {
                padding-top: 1.5rem;
            }
        </style>
        <style type="text/css">
            .hcaptcha-link-container[data-v-2062acc6] {
                line-height: 0.875rem;
                color: var(--text-color-medium-light);
                font-size: var(--text-size-xs);
                text-align: center;
                padding-top: 2.5rem;
            }
            .hcaptcha-link[data-v-2062acc6] {
                width: 50%;
                color: var(--link-color);
                font-weight: var(--font-weight-normal);
                text-decoration: none;
            }
        </style>
        <style type="text/css">
            fieldset[disabled] .multiselect {
                pointer-events: none;
            }
            .multiselect__spinner {
                position: absolute;
                right: 1px;
                top: 1px;
                width: 48px;
                height: 35px;
                background: #fff;
                display: block;
            }
            .multiselect__spinner:after,
            .multiselect__spinner:before {
                position: absolute;
                content: "";
                top: 50%;
                left: 50%;
                margin: -0.5rem 0 0 -0.5rem;
                width: 16px;
                height: 16px;
                border-radius: 100%;
                border: 2px solid transparent;
                border-top-color: #41b883;
                box-shadow: 0 0 0 1px transparent;
            }
            .multiselect__spinner:before {
                animation: spinning 2.4s cubic-bezier(0.41, 0.26, 0.2, 0.62);
                animation-iteration-count: infinite;
            }
            .multiselect__spinner:after {
                animation: spinning 2.4s cubic-bezier(0.51, 0.09, 0.21, 0.8);
                animation-iteration-count: infinite;
            }
            .multiselect__loading-enter-active,
            .multiselect__loading-leave-active {
                transition: opacity 0.4s ease-in-out;
                opacity: 1;
            }
            .multiselect__loading-enter,
            .multiselect__loading-leave-active {
                opacity: 0;
            }
            .multiselect,
            .multiselect__input,
            .multiselect__single {
                font-family: inherit;
                font-size: 1rem;
                touch-action: manipulation;
            }
            .multiselect {
                box-sizing: initial;
                display: block;
                position: relative;
                width: 100%;
                min-height: 40px;
                text-align: left;
                color: #35495e;
            }
            .multiselect * {
                box-sizing: border-box;
            }
            .multiselect:focus {
                outline: none;
            }
            .multiselect--disabled {
                background: #ededed;
                pointer-events: none;
                opacity: 0.6;
            }
            .multiselect--active {
                z-index: 50;
            }
            .multiselect--active:not(.multiselect--above) .multiselect__current,
            .multiselect--active:not(.multiselect--above) .multiselect__input,
            .multiselect--active:not(.multiselect--above) .multiselect__tags {
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }
            .multiselect--active .multiselect__select {
                transform: rotate(180deg);
            }
            .multiselect--above.multiselect--active .multiselect__current,
            .multiselect--above.multiselect--active .multiselect__input,
            .multiselect--above.multiselect--active .multiselect__tags {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .multiselect__input,
            .multiselect__single {
                position: relative;
                display: inline-block;
                min-height: 20px;
                line-height: 1.25rem;
                border: none;
                border-radius: 5px;
                background: #fff;
                padding: 0 0 0 0.3125rem;
                width: 100%;
                transition: border 0.1s ease;
                box-sizing: border-box;
                margin-bottom: 0.5rem;
                vertical-align: top;
            }
            .multiselect__input::-ms-input-placeholder {
                color: #35495e;
            }
            .multiselect__input::placeholder {
                color: #35495e;
            }
            .multiselect__tag ~ .multiselect__input,
            .multiselect__tag ~ .multiselect__single {
                width: auto;
            }
            .multiselect__input:hover,
            .multiselect__single:hover {
                border-color: #cfcfcf;
            }
            .multiselect__input:focus,
            .multiselect__single:focus {
                border-color: #a8a8a8;
                outline: none;
            }
            .multiselect__single {
                padding-left: 0.3125rem;
                margin-bottom: 0.5rem;
            }
            .multiselect__tags-wrap {
                display: inline;
            }
            .multiselect__tags {
                min-height: 40px;
                display: block;
                padding: 0.5rem 2.5rem 0 0.5rem;
                border-radius: 5px;
                border: 1px solid #e8e8e8;
                background: #fff;
                font-size: 0.875rem;
            }
            .multiselect__tag {
                position: relative;
                display: inline-block;
                padding: 0.25rem 1.625rem 0.25rem 0.625rem;
                border-radius: 5px;
                margin-right: 0.625rem;
                color: #fff;
                line-height: 1;
                background: #41b883;
                margin-bottom: 0.3125rem;
                white-space: nowrap;
                overflow: hidden;
                max-width: 100%;
                text-overflow: ellipsis;
            }
            .multiselect__tag-icon {
                cursor: pointer;
                margin-left: 0.4375rem;
                position: absolute;
                right: 0;
                top: 0;
                bottom: 0;
                font-weight: 700;
                font-style: normal;
                width: 22px;
                text-align: center;
                line-height: 1.375rem;
                transition: all 0.2s ease;
                border-radius: 5px;
            }
            .multiselect__tag-icon:after {
                content: "\D7";
                color: #266d4d;
                font-size: 0.875rem;
            }
            .multiselect__tag-icon:focus,
            .multiselect__tag-icon:hover {
                background: #369a6e;
            }
            .multiselect__tag-icon:focus:after,
            .multiselect__tag-icon:hover:after {
                color: #fff;
            }
            .multiselect__current {
                min-height: 40px;
                overflow: hidden;
                padding: 0.5rem 1.875rem 0 0.75rem;
                white-space: nowrap;
                border-radius: 5px;
                border: 1px solid #e8e8e8;
            }
            .multiselect__current,
            .multiselect__select {
                line-height: 1rem;
                box-sizing: border-box;
                display: block;
                margin: 0;
                text-decoration: none;
                cursor: pointer;
            }
            .multiselect__select {
                position: absolute;
                width: 40px;
                height: 38px;
                right: 1px;
                top: 1px;
                padding: 0.25rem 0.5rem;
                text-align: center;
                transition: transform 0.2s ease;
            }
            .multiselect__select:before {
                position: relative;
                right: 0;
                top: 65%;
                color: #999;
                margin-top: 0.25rem;
                border-color: #999 transparent transparent;
                border-style: solid;
                border-width: 5px 5px 0;
                content: "";
            }
            .multiselect__placeholder {
                color: #adadad;
                display: inline-block;
                margin-bottom: 0.625rem;
                padding-top: 0.125rem;
            }
            .multiselect--active .multiselect__placeholder {
                display: none;
            }
            .multiselect__content-wrapper {
                position: absolute;
                display: block;
                background: #fff;
                width: 100%;
                max-height: 240px;
                overflow: auto;
                border: 1px solid #e8e8e8;
                border-top: none;
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
                z-index: 50;
                -webkit-overflow-scrolling: touch;
            }
            .multiselect__content {
                list-style: none;
                display: inline-block;
                padding: 0;
                margin: 0;
                min-width: 100%;
                vertical-align: top;
            }
            .multiselect--above .multiselect__content-wrapper {
                bottom: 100%;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                border-bottom: none;
                border-top: 1px solid #e8e8e8;
            }
            .multiselect__content::webkit-scrollbar {
                display: none;
            }
            .multiselect__element {
                display: block;
            }
            .multiselect__option {
                display: block;
                padding: 0.75rem;
                min-height: 40px;
                line-height: 1rem;
                text-decoration: none;
                text-transform: none;
                vertical-align: middle;
                position: relative;
                cursor: pointer;
                white-space: nowrap;
            }
            .multiselect__option:after {
                top: 0;
                right: 0;
                position: absolute;
                line-height: 2.5rem;
                padding-right: 0.75rem;
                padding-left: 1.25rem;
                font-size: 0.8125rem;
            }
            .multiselect__option--highlight {
                background: #41b883;
                outline: none;
                color: #fff;
            }
            .multiselect__option--highlight:after {
                content: attr(data-select);
                background: #41b883;
                color: #fff;
            }
            .multiselect__option--selected {
                background: #f3f3f3;
                color: #35495e;
                font-weight: 700;
            }
            .multiselect__option--selected:after {
                content: attr(data-selected);
                color: silver;
            }
            .multiselect__option--selected.multiselect__option--highlight {
                background: #ff6a6a;
                color: #fff;
            }
            .multiselect__option--selected.multiselect__option--highlight:after {
                background: #ff6a6a;
                content: attr(data-deselect);
                color: #fff;
            }
            .multiselect--disabled .multiselect__current,
            .multiselect--disabled .multiselect__select {
                background: #ededed;
                color: #a6a6a6;
            }
            .multiselect__option--disabled {
                background: #ededed !important;
                color: #a6a6a6 !important;
                cursor: text;
                pointer-events: none;
            }
            .multiselect__option--group {
                background: #ededed;
                color: #35495e;
            }
            .multiselect__option--group.multiselect__option--highlight {
                background: #35495e;
                color: #fff;
            }
            .multiselect__option--group.multiselect__option--highlight:after {
                background: #35495e;
            }
            .multiselect__option--disabled.multiselect__option--highlight {
                background: #dedede;
            }
            .multiselect__option--group-selected.multiselect__option--highlight {
                background: #ff6a6a;
                color: #fff;
            }
            .multiselect__option--group-selected.multiselect__option--highlight:after {
                background: #ff6a6a;
                content: attr(data-deselect);
                color: #fff;
            }
            .multiselect-enter-active,
            .multiselect-leave-active {
                transition: all 0.15s ease;
            }
            .multiselect-enter,
            .multiselect-leave-active {
                opacity: 0;
            }
            .multiselect__strong {
                margin-bottom: 0.5rem;
                line-height: 1.25rem;
                display: inline-block;
                vertical-align: top;
            }
            [dir="rtl"] .multiselect {
                text-align: right;
            }
            [dir="rtl"] .multiselect__select {
                right: auto;
                left: 1px;
            }
            [dir="rtl"] .multiselect__tags {
                padding: 0.5rem 0.5rem 0 2.5rem;
            }
            [dir="rtl"] .multiselect__content {
                text-align: right;
            }
            [dir="rtl"] .multiselect__option:after {
                right: auto;
                left: 0;
            }
            [dir="rtl"] .multiselect__clear {
                right: auto;
                left: 12px;
            }
            [dir="rtl"] .multiselect__spinner {
                right: auto;
                left: 1px;
            }
            @keyframes spinning {
                0% {
                    transform: rotate(0);
                }
                to {
                    transform: rotate(2turn);
                }
            }
        </style>
        <style type="text/css">
            .multiselect-wrap[data-v-d37d4e7a] {
                min-height: 72px;
                cursor: pointer;
                position: relative;
                width: 100%;
            }
            .multiselect-label[data-v-d37d4e7a] {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
                pointer-events: none;
                cursor: pointer;
                font-weight: var(--font-weight-light);
                font-size: var(--text-size-small);
                color: var(--input-label-color);
                transition: all var(--default-transition-time) var(--default-transition-curve);
            }
            .multiselect-label--placeholder[data-v-d37d4e7a] {
                top: 20px;
                font-size: var(--text-size-base);
                color: var(--input-placeholder-color);
                white-space: nowrap;
                text-overflow: ellipsis;
                overflow: hidden;
                max-width: 100%;
                padding-right: 1.875rem;
                line-height: 1.2;
            }
            [data-v-d37d4e7a] .multiselect {
                padding-top: 1.125rem;
            }
            [data-v-d37d4e7a] .multiselect__select {
                position: absolute;
                width: 40px;
                height: 20px;
                right: 1px;
                top: auto;
                bottom: 15px;
                padding: 0;
            }
            [data-v-d37d4e7a] .multiselect__select:before {
                border-color: var(--text-color-medium);
                border-width: 0 2px 2px 0;
                display: inline-block;
                padding: 0.1875rem;
                top: 0;
                transform: rotate(45deg);
            }
            [data-v-d37d4e7a] .multiselect__tags {
                border-radius: 0;
                border: none;
                border-bottom: 1px solid var(--input-border-color);
                background: transparent;
                min-height: 33px;
                padding-left: 0;
                padding-top: 0;
            }
            [data-v-d37d4e7a] .multiselect__tags-wrap {
                display: flex;
                flex-wrap: wrap;
                padding-top: 0.125rem;
            }
            [data-v-d37d4e7a] .multiselect__tag {
                background: var(--background-color-light);
                color: var(--text-color);
            }
            [data-v-d37d4e7a] .multiselect__tag-icon {
                background-color: var(--background-color-light);
            }
            [data-v-d37d4e7a] .multiselect__tag-icon:after {
                color: var(--text-color-medium);
            }
            [data-v-d37d4e7a] .multiselect__tag-icon:hover {
                background-color: var(--background-color-transparent-medium);
            }
            [data-v-d37d4e7a] .multiselect__tag-icon:hover:after {
                color: var(--text-color-dark);
            }
            [data-v-d37d4e7a] .multiselect__content-wrapper {
                box-shadow: 0 5px 20px 0 var(--shadow-lighter);
                max-height: 230px;
                border-radius: 0;
                margin-top: 0.125rem;
                border: 0;
            }
            [data-v-d37d4e7a] .multiselect__option {
                min-height: 42px;
                font-weight: 300;
                border-right: 0;
            }
            [data-v-d37d4e7a] .multiselect__option:after {
                font-weight: var(--font-weight-medium);
                font-size: var(--text-size-xs);
                height: 100%;
            }
            @media (min-width: 577px) {
                [data-v-d37d4e7a] .multiselect__option:after {
                    font-size: var(--text-size-small);
                }
            }
            [data-v-d37d4e7a] .multiselect__option--selected {
                color: var(--text-color-medium-light);
            }
            [data-v-d37d4e7a] .multiselect__option--selected,
            [data-v-d37d4e7a] .multiselect__option--selected:after {
                background-color: var(--dropdown-color);
            }
            [data-v-d37d4e7a] .multiselect__option--selected.multiselect__option--highlight:after {
                color: var(--error-color);
            }
            [data-v-d37d4e7a] .multiselect__option--highlight {
                background: var(--dropdown-active-color);
                color: var(--text-color);
            }
            [data-v-d37d4e7a] .multiselect__option--highlight:after {
                background-color: var(--dropdown-active-color);
                color: var(--primary-color);
            }
            [data-v-d37d4e7a] .multiselect__input {
                background: transparent;
                line-height: 2;
                width: 100%;
                margin: 0;
                padding: 0;
                position: relative;
            }
            [data-v-d37d4e7a] .multiselect--active .multiselect__select {
                transform: none;
            }
        </style>
        <style type="text/css">
            .radio-group--medium-label[data-v-c7babaa2] {
                display: block;
                margin-bottom: 1.25rem;
                color: var(--text-color);
                line-height: 1.375rem;
                font-weight: var(--font-weight-medium);
            }
            .radio-group--margin-top-regular[data-v-c7babaa2] {
                margin-top: 1.5rem;
            }
            .radio-group--list-margin .radio-group__list[data-v-c7babaa2] {
                margin-top: 1.25rem;
            }
            .radio-group__label[data-v-c7babaa2] {
                font-size: var(--text-size-base);
                display: block;
            }
            .radio-group__list[data-v-c7babaa2] {
                width: 100%;
            }
            .radio-group__list--fluid[data-v-c7babaa2] {
                display: flex;
            }
            @media (max-width: 768px) {
                .radio-group__list--fluid[data-v-c7babaa2] {
                    flex-direction: column;
                }
            }
            .radio-group__errors[data-v-c7babaa2] {
                color: var(--error-color);
                font-size: var(--text-size-small);
                display: block;
            }
        </style>
        <style type="text/css">
            .recaptcha[data-v-3da4cb5b] {
                outline: none;
            }
        </style>
        <style type="text/css">
            .terms[data-v-677feb26] {
                white-space: normal;
            }
            .terms .link[data-v-677feb26] {
                font-weight: var(--font-weight-normal);
            }
            @media (max-width: 768px) {
                .terms .link[data-v-677feb26] {
                    font-size: var(--text-size-normal);
                }
            }
            .terms .link[data-v-677feb26]:hover {
                color: var(--link-hover-color);
            }
        </style>
        <style type="text/css">
            .tfa-field__inputs[data-v-a84cec88] {
                margin-bottom: 3.25rem;
            }
        </style>
        <style type="text/css">
            .field-warning[data-v-16d0f78c] {
                color: var(--warning-color);
                font-size: var(--text-size-small);
                line-height: 1.5;
                margin: -1rem 0 1rem;
            }
        </style>
        <style type="text/css">
            .form[data-v-ef34460a] {
                width: 100%;
            }
            .form[data-v-ef34460a] .field-group {
                flex-wrap: wrap;
                display: flex;
                margin-left: -1 * var(--gutter);
                margin-right: -1 * var(--gutter);
            }
            .form[data-v-ef34460a] .form-element {
                width: 100%;
                padding-left: var(--gutter);
                padding-right: var(--gutter);
            }
            .form[data-v-ef34460a] .errors {
                display: none;
            }
            .form .buttons-row[data-v-ef34460a] {
                margin-top: 1.25rem;
                justify-content: center;
            }
            .form[data-v-ef34460a] .indent {
                border-left: 1px solid var(--border-color);
                padding-left: 1.25rem;
                margin-bottom: 1rem;
                margin-top: 1rem;
            }
            .form--inline[data-v-ef34460a] {
                max-width: none;
                margin: 0;
            }
            .form--inline[data-v-ef34460a] .field-group {
                flex-wrap: nowrap;
            }
            .form--inline .buttons-row[data-v-ef34460a] {
                margin-top: 0;
                justify-content: flex-end;
            }
            .form--backoffice[data-v-ef34460a] .form-element {
                margin: 0.625rem 0;
            }
        </style>
        <style type="text/css">
            .notice[data-v-1c1cbe80] {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                width: 100%;
                padding: 1.5rem 2rem;
                border: 1px solid var(--border-color);
                border-radius: var(--border-radius-small);
                background: var(--background-color-lighter);
                font-size: var(--text-size-normal);
                text-align: left;
                position: relative;
            }
            .notice[data-v-1c1cbe80],
            .notice__title[data-v-1c1cbe80] {
                color: var(--text-color-dark);
            }
            .notice__title[data-v-1c1cbe80] {
                font-size: var(--text-size-medium);
                margin-bottom: 0;
                padding-bottom: 0.75rem;
            }
            .notice--slot-empty .notice__title[data-v-1c1cbe80] {
                padding-bottom: 0;
            }
            .notice p + p[data-v-1c1cbe80] {
                margin-top: 0.625rem;
            }
            .notice--info[data-v-1c1cbe80] {
                border-color: var(--secondary-color);
                background: var(--secondary-color-transparent);
            }
            .notice--info .notice__title[data-v-1c1cbe80] {
                color: var(--secondary-color);
            }
            .notice--error[data-v-1c1cbe80],
            .notice--success[data-v-1c1cbe80],
            .notice--warning[data-v-1c1cbe80] {
                font-weight: var(--font-weight-medium);
                text-align: center;
            }
            .notice--success[data-v-1c1cbe80] {
                border-color: var(--primary-color);
                background: var(--primary-color-transparent);
            }
            .notice--success .notice__title[data-v-1c1cbe80] {
                color: var(--primary-color);
            }
            .notice--warning[data-v-1c1cbe80] {
                border-color: var(--warning-color);
                background: var(--warning-color-transparent);
            }
            .notice--warning .notice__title[data-v-1c1cbe80] {
                color: var(--warning-color);
            }
            .notice--error[data-v-1c1cbe80] {
                border-color: var(--error-color);
                background: var(--error-color-transparent);
            }
            .notice--error .notice__title[data-v-1c1cbe80] {
                color: var(--error-color);
            }
            .notice__icon-wrapper[data-v-1c1cbe80] {
                flex: 0 1 3rem;
                align-self: flex-start;
            }
            @media (max-width: 576px) {
                .notice__icon-wrapper[data-v-1c1cbe80] {
                    display: none;
                }
            }
            @media (min-width: 577px) {
                .notice__icon-wrapper[data-v-1c1cbe80] {
                    flex: 0 1 4rem;
                }
            }
            .notice__icon--error[data-v-1c1cbe80],
            .notice__icon--info[data-v-1c1cbe80],
            .notice__icon--success[data-v-1c1cbe80],
            .notice__icon--warning[data-v-1c1cbe80] {
                height: 2rem;
                width: 2rem;
                border-radius: 100%;
                margin: 0 auto;
                padding-right: 0;
            }
            @media (min-width: 577px) {
                .notice__icon--error[data-v-1c1cbe80],
                .notice__icon--info[data-v-1c1cbe80],
                .notice__icon--success[data-v-1c1cbe80],
                .notice__icon--warning[data-v-1c1cbe80] {
                    margin: 0 2rem 0 0;
                    height: 2.5rem;
                    width: 2.5rem;
                }
            }
            .notice__icon--error[data-v-1c1cbe80] {
                background: var(--white) url(https://assets.bitstamp.net/onboarding/s/widgets/onboarding/c7ba0626cc92589cab9ad03151b38815.svg) no-repeat 50%/50%;
                box-shadow: 2px 2px 1px 0 var(--tertiary-color-transparent);
            }
            .notice__icon--warning[data-v-1c1cbe80] {
                background: var(--white) url(https://assets.bitstamp.net/onboarding/s/widgets/onboarding/f4b52aaae005b271ad0db950bf8401af.svg) no-repeat 50%/65%;
                box-shadow: 2px 2px 1px 0 var(--warning-color-transparent);
            }
            .notice__icon--success[data-v-1c1cbe80] {
                background: var(--white) url(https://assets.bitstamp.net/onboarding/s/widgets/onboarding/22965a2124c0bd0ffedae49837e2320b.svg) no-repeat 50%/60%;
                box-shadow: 2px 2px 1px 0 var(--primary-color-transparent);
            }
            .notice__icon--info[data-v-1c1cbe80] {
                background: var(--white) url(https://assets.bitstamp.net/onboarding/s/widgets/onboarding/f20e804748c06eb5f67971420ece071d.svg) no-repeat 50%/50%;
                box-shadow: 2px 2px 1px 0 var(--secondary-color-transparent);
            }
            @media (min-width: 577px) {
                .notice__icon[data-v-1c1cbe80] {
                    padding-right: 1rem;
                }
            }
            .notice__content[data-v-1c1cbe80] {
                flex: 1 1;
                display: flex;
                flex-direction: column;
            }
            .notice__button[data-v-1c1cbe80] {
                margin-left: auto;
            }
            @media (min-width: 577px) {
                .notice__button[data-v-1c1cbe80] {
                    padding-left: 0.5rem;
                }
            }
        </style>
        <style type="text/css">
            .info[data-v-f33bff12] {
                display: flex;
                flex: 1 1;
                flex-direction: column;
                align-items: center;
                max-width: 500px;
                text-align: center;
            }
            .info__title[data-v-f33bff12] {
                font-size: var(--text-size-large);
                font-weight: var(--font-weight-medium);
                margin-bottom: 1rem;
                white-space: nowrap;
            }
            @media (max-width: 768px) {
                .info__title[data-v-f33bff12] {
                    white-space: normal;
                }
            }
            .info__sub-title[data-v-f33bff12] {
                color: var(--text-color-light);
                margin-bottom: 4rem;
            }
            @media (max-width: 768px) {
                .info__sub-title[data-v-f33bff12] {
                    margin-bottom: 2rem;
                }
            }
            .info__text-title[data-v-f33bff12] {
                font-size: var(--text-size-base);
                color: var(--title-color);
                margin-bottom: 2.8125rem;
            }
            .info__text[data-v-f33bff12] {
                color: var(--text-color-light);
                margin-bottom: 8rem;
                padding: 0 1.25rem;
            }
            @media (max-width: 768px) {
                .info__text[data-v-f33bff12] {
                    margin-bottom: 4rem;
                }
            }
        </style>
        <style type="text/css">
            .sub-step[data-v-5e0df73a] {
                min-width: 0;
                width: 100%;
                position: relative;
                display: flex;
                flex-direction: column;
            }
            .sub-step-header[data-v-5e0df73a] {
                text-align: center;
                padding-top: 2.5rem;
                padding-bottom: 2.5rem;
                position: relative;
                margin: 0 auto;
            }
            @media (max-width: 768px) {
                .sub-step-header[data-v-5e0df73a] {
                    padding-top: 1.625rem;
                    padding-bottom: 1.625rem;
                    width: 100%;
                    max-width: 500px;
                }
            }
            .sub-step-header__title[data-v-5e0df73a] {
                color: var(--text-color);
                font-weight: var(--font-weight-medium);
                line-height: 2.375rem;
                font-size: var(--text-size-large);
            }
            @media (max-width: 768px) {
                .sub-step-header__title[data-v-5e0df73a] {
                    font-size: var(--text-size-big);
                    line-height: 1.5rem;
                }
            }
            .sub-step-header__sub-title[data-v-5e0df73a] {
                color: var(--subtitle-color);
                padding: 0.375rem 0.75rem 0;
                font-size: var(--text-size-base);
                font-weight: var(--font-weight-normal);
                line-height: 1.5rem;
            }
            @media (max-width: 768px) {
                .sub-step-header__sub-title[data-v-5e0df73a] {
                    font-size: var(--text-size-normal);
                    line-height: 1.125rem;
                    padding-left: 0;
                    padding-right: 0;
                }
            }
            .sub-step-header__notice[data-v-5e0df73a] {
                margin-top: 1.75rem;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
            }
            .sub-step-header__notice[data-v-5e0df73a] h3 {
                font-weight: var(--font-weight-normal);
                font-size: var(--text-size-medium);
                margin-bottom: 0.75rem;
                margin-top: 1.625rem;
            }
            .sub-step-header__notice[data-v-5e0df73a] p {
                margin-bottom: 0.375rem;
            }
            .sub-step__content[data-v-5e0df73a] {
                transition: all var(--default-transition-time) var(--step-transition-curve);
                width: 100%;
                min-width: 0;
            }
            .sub-step__content--extend-bottom[data-v-5e0df73a] {
                padding-bottom: 15.625rem;
            }
            @media (min-width: 769px) {
                .sub-step__content--extend-bottom[data-v-5e0df73a] {
                    padding-bottom: 10.625rem;
                }
            }
            .sub-step__content--extend-bottom-disabled[data-v-5e0df73a] {
                padding-bottom: 0;
            }
            .sub-step__form-wrap[data-v-5e0df73a] {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                min-height: 25vh;
            }
            @media (max-width: 768px) {
                .sub-step__form-wrap[data-v-5e0df73a] {
                    align-items: flex-start;
                }
            }
            @media (min-width: 577px) {
                .sub-step__form-wrap[data-v-5e0df73a] {
                    min-height: 30vh;
                }
            }
            .sub-step__form-wrap--top[data-v-5e0df73a] {
                min-height: auto;
            }
            .sub-step__form[data-v-5e0df73a] {
                max-width: 500px;
            }
            .sub-step__form--error[data-v-5e0df73a] {
                padding-top: 1.5rem;
            }
            @media (max-width: 768px) {
                .sub-step__form--error[data-v-5e0df73a] {
                    padding-top: 0;
                }
            }
            .sub-step__footer[data-v-5e0df73a] {
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: -moz-fit-content;
                height: fit-content;
                padding: 1.5rem 0;
            }
            .sub-step__footer--sticky[data-v-5e0df73a] {
                display: unset;
            }
            .sub-step__footer-info[data-v-5e0df73a] {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1rem;
                color: var(--text-color-medium-light);
            }
            .sub-step__footer-info[data-v-5e0df73a],
            .sub-step__footer-info .link[data-v-5e0df73a] {
                font-size: var(--text-size-normal);
            }
            .sub-step__cookie-banner[data-v-5e0df73a] {
                z-index: 40;
            }
            .sub-step__button-section[data-v-5e0df73a] {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .sub-step__button-section--sticky[data-v-5e0df73a] {
                position: sticky;
                bottom: 15px;
                box-shadow: 0 0 35px 20px var(--background-color);
            }
            @media (max-width: 768px) {
                .sub-step__button[data-v-5e0df73a] {
                    width: 100%;
                    max-width: 350px;
                }
            }
            .sub-step__help-button[data-v-5e0df73a] {
                display: none;
            }
            @media (max-width: 768px) {
                .sub-step__help-button[data-v-5e0df73a] {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 0;
                    flex-shrink: 0;
                    margin-left: 1.125rem;
                }
            }
            .sub-step[data-v-5e0df73a] .grecaptcha-badge {
                z-index: 5;
                bottom: 35px !important;
            }
            @media (max-width: 768px) {
                .sub-step[data-v-5e0df73a] .grecaptcha-badge {
                    bottom: 95px !important;
                }
            }
            .sub-step--hide-recaptcha[data-v-5e0df73a] .grecaptcha-badge {
                bottom: 195px !important;
            }
            @media (max-width: 576px) {
                .sub-step--hide-recaptcha[data-v-5e0df73a] .grecaptcha-badge {
                    z-index: 1 !important;
                    bottom: 95px !important;
                }
            }
            .sub-step--hide-recaptcha[data-v-5e0df73a] .field-hcaptcha-form {
                padding-bottom: 1.875rem;
            }
            .slide-up-enter[data-v-5e0df73a] {
                opacity: 0;
                transform: translateY(50vh);
            }
            .slide-down-enter[data-v-5e0df73a],
            .slide-up-leave-active[data-v-5e0df73a] {
                opacity: 0;
                transform: translateY(-50vh);
            }
            .slide-down-leave-active[data-v-5e0df73a] {
                opacity: 0;
                transform: translateY(50vh);
            }
            .slide-left-enter[data-v-5e0df73a] {
                opacity: 0;
                transform: translate(100vw);
            }
            .slide-left-leave-active[data-v-5e0df73a],
            .slide-right-enter[data-v-5e0df73a] {
                opacity: 0;
                transform: translate(-100vw);
            }
            .slide-right-leave-active[data-v-5e0df73a] {
                opacity: 0;
                transform: translate(100vw);
            }
        </style>
        <style type="text/css">
            .container[data-v-a403388c] {
                display: flex;
                justify-content: space-between;
                flex: 1 1;
                position: relative;
            }
            .container.help-panel--only .substep-navigation[data-v-a403388c] {
                display: none;
            }
            .container.help-panel--only .help-panel[data-v-a403388c] {
                position: absolute;
                right: 0;
                top: 0;
                bottom: 0;
            }
            .container.help-panel--only .help-panel[data-v-a403388c]:not(.help-panel--active) {
                max-width: 0;
                min-width: 0;
            }
            .container .substep-section[data-v-a403388c] {
                flex: 2 1;
                align-items: center;
            }
            @media (max-width: 992px) {
                .container .substep-section[data-v-a403388c] {
                    padding: 0 1.375rem;
                }
            }
            .container .help-panel[data-v-a403388c],
            .container .substep-navigation[data-v-a403388c] {
                flex: 1 1;
            }
            @media (max-width: 992px) {
                .container .help-panel[data-v-a403388c],
                .container .substep-navigation[data-v-a403388c] {
                    display: none;
                }
            }
            .container .help-panel.help-panel--open[data-v-a403388c] {
                z-index: 20;
            }
            @media (max-width: 992px) {
                .container .help-panel.help-panel--active[data-v-a403388c] {
                    position: fixed;
                    right: 0;
                    top: 0;
                    bottom: 0;
                    display: block;
                    z-index: 40;
                }
            }
        </style>

         <style type="text/css">
            .login-header[data-v-6aa64f22] {
                display: flex;
                justify-content: center;
            }
            .success-notice[data-v-6aa64f22] {
                margin-bottom: 1.5rem;
                max-width: 500px;
            }
        </style>
        <style type="text/css">
            .login-header-container[data-v-4b49c110] {
                display: flex;
                justify-content: center;
                flex-direction: column;
            }
            .login-subtitle[data-v-4b49c110] {
                color: var(--subtitle-color);
                margin-top: 0.625rem;
                font-size: var(--text-size-base);
                font-weight: var(--font-weight-normal);
                line-height: 1.5rem;
            }
            @media (max-width: 768px) {
                .login-subtitle[data-v-4b49c110] {
                    font-size: var(--text-size-normal);
                    line-height: 1.125rem;
                }
            }
            .login-subtitle .link[data-v-4b49c110] {
                font-weight: var(--font-weight-normal);
            }
            .login-message[data-v-4b49c110] {
                margin-top: 1.5rem;
            }
        </style>
        <style type="text/css">
            .forgot-password-slot[data-v-271d5c77] {
                text-align: right;
            }
            .forgot-password-slot[data-v-271d5c77] .link {
                color: var(--link-color);
                font-size: var(--text-size-normal);
                font-weight: var(--font-weight-normal);
            }
        </style>