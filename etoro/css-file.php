 <style>
            .basic-card-view[_ngcontent-ihs-c1] {
                background-color: #fff;
                border-top: 1px solid #ddd;
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
            }
            .popup-text[_ngcontent-ihs-c1] {
                color: #777;
                font-size: 14px;
                font-weight: 400;
            }
            .popup-title[_ngcontent-ihs-c1] {
                color: #2c2c2c;
                font-weight: 700;
                font-size: 16px;
            }
            .popup-title-small[_ngcontent-ihs-c1] {
                font-size: 12px;
                text-transform: uppercase;
                font-weight: 400;
            }
            .basic-title-small[_ngcontent-ihs-c1] {
                color: #777;
                font-size: 12px;
                text-transform: uppercase;
            }
            .mobile-scrolling[_ngcontent-ihs-c1] {
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
            }
            .app-header[_ngcontent-ihs-c1] {
                background: #fff;
                height: 70px;
                width: 100%;
                position: fixed;
                padding: 0 30px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                z-index: 99;
            }
            @media screen and (max-width: 740px) {
                .app-header.mobile-off[_ngcontent-ihs-c1] {
                    display: none;
                }
            }
            .app-header.app-header-demo-mode[_ngcontent-ihs-c1] {
                background-color: #3c85b7;
                border-color: #0e4063;
            }
            .app-header[_ngcontent-ihs-c1] .app-header-logo[_ngcontent-ihs-c1] {
                display: inline-block;
                height: 70px;
                width: 105px;
                cursor: pointer;
            }
            .app-header[_ngcontent-ihs-c1] .app-header-logo.white[_ngcontent-ihs-c1] {
                background: url(https://etoro-cdn.etorostatic.com/web-client/img/logo-white.png) no-repeat;
            }
            .app-header[_ngcontent-ihs-c1] .app-header-logo.green[_ngcontent-ihs-c1] {
                background: url(https://etoro-cdn.etorostatic.com/web-client/img/login-logo-hd.png) center/105px auto no-repeat;
            }
            .app-header[_ngcontent-ihs-c1] .app-header-buttons-wrapper[_ngcontent-ihs-c1] {
                color: #2c2c2c;
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-wrap: nowrap;
            }
            .sub-template-main-view[_ngcontent-ihs-c1] {
                position: absolute;
                bottom: 0;
                top: 70px;
                left: 0;
                right: 0;
                height: calc(100% - 70px);
            }
            @media screen and (max-width: 740px) {
                .sub-template-main-view[_ngcontent-ihs-c1] {
                    position: static;
                    height: 100%;
                }
            }
            .language-picker-container[_ngcontent-ihs-c1] {
                position: relative;
            }
            .language-picker-container[_ngcontent-ihs-c1] et-language-switcher-menu[_ngcontent-ihs-c1] {
                position: absolute;
                top: 20px;
                display: none;
                width: 200px;
                height: 300px;
                overflow: auto;
                background: #fff;
            }
            .language-picker-container[_ngcontent-ihs-c1]:hover et-language-switcher-menu[_ngcontent-ihs-c1] {
                display: block;
            }
        </style>
        <style>
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100%;
                z-index: 10000000;
                background-color: rgba(39, 43, 58, 0.75);
                -webkit-backdrop-filter: blur(10px);
                backdrop-filter: blur(10px);
            }
            [_nghost-ihs-c2] .tutorial-screen__wrapper[_ngcontent-ihs-c2] {
                position: fixed;
                z-index: 1000;
                background: #272b3a;
                display: flex;
                font-family: OpenSans, sans-serif;
                flex-direction: column;
                justify-content: stretch;
                overflow: hidden;
            }
            [_nghost-ihs-c2] .tutorial-screen__background[_ngcontent-ihs-c2] {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                z-index: 2;
                pointer-events: none;
                mix-blend-mode: overlay;
            }
            [_nghost-ihs-c2] .tutorial-screen__close[_ngcontent-ihs-c2] {
                position: absolute;
                right: 30px;
                top: 30px;
                width: 17px;
                height: 17px;
                cursor: pointer;
                z-index: 4;
            }
            [_nghost-ihs-c2] .tutorial-screen__close[_ngcontent-ihs-c2]::after,
            [_nghost-ihs-c2] .tutorial-screen__close[_ngcontent-ihs-c2]::before {
                content: "";
                width: 23px;
                height: 1px;
                position: absolute;
                top: 50%;
                left: -3px;
                background-color: rgba(255, 255, 255, 0.75);
            }
            [_nghost-ihs-c2] .tutorial-screen__close[_ngcontent-ihs-c2]::before {
                transform: rotate(45deg);
            }
            [_nghost-ihs-c2] .tutorial-screen__close[_ngcontent-ihs-c2]::after {
                transform: rotate(-45deg);
            }
            [_nghost-ihs-c2] .tutorial-screen__text-wrapper[_ngcontent-ihs-c2] {
                z-index: 3;
            }
            [_nghost-ihs-c2] .tutorial-screen__slide-head[_ngcontent-ihs-c2] {
                font-size: 14px;
                letter-spacing: -0.25px;
                text-transform: uppercase;
                color: #c8f996;
            }
            [_nghost-ihs-c2] .tutorial-screen__slide-body[_ngcontent-ihs-c2] {
                font-size: 28px;
                font-weight: 700;
                letter-spacing: -0.54px;
                color: #fff;
            }
            [_nghost-ihs-c2] .tutorial-screen__slide-subtext[_ngcontent-ihs-c2] {
                font-size: 12px;
                color: #fff;
                letter-spacing: -0.14px;
                opacity: 0.5;
                z-index: 3;
                max-height: 82px;
                overflow-y: auto;
                padding-right: 5px;
            }
            [_nghost-ihs-c2] .tutorial-screen__button-cta[_ngcontent-ihs-c2] {
                max-width: 320px;
                min-width: 150px;
                height: 45px;
                border-radius: 5px;
                background-color: #adf68d;
                font-weight: 700;
                font-size: 14px;
                color: #2c2c2c;
                letter-spacing: -0.18px;
                text-transform: uppercase;
                flex: 0 0 auto;
                outline: 0;
                cursor: pointer;
                z-index: 3;
            }
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] swiper > .swiper.s-wrapper {
                overflow: visible;
            }
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] swiper > .swiper.s-wrapper .swiper-pagination {
                position: fixed;
                bottom: 30px;
            }
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] swiper > .swiper.s-wrapper .swiper-pagination .swiper-pagination-bullet {
                background-color: #eaeaea;
                opacity: 1;
                border-color: transparent;
            }
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] swiper > .swiper.s-wrapper .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
                background-color: #adf68d;
            }
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] swiper > .swiper.s-wrapper .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-first,
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] swiper > .swiper.s-wrapper .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-last {
                border: 0;
                margin: 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper[_ngcontent-ihs-c2] {
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border-radius: 10px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__background[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__background[_ngcontent-ihs-c2] {
                background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
                border-radius: 10px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__slide-head[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__slide-head[_ngcontent-ihs-c2] {
                flex: 0 0 auto;
                align-self: center;
                text-align: center;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__text-wrapper[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__text-wrapper[_ngcontent-ihs-c2] {
                display: flex;
                flex-direction: column;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__slide-body[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__slide-body[_ngcontent-ihs-c2] {
                min-height: 136px;
                max-width: 320px;
                align-self: center;
                text-align: center;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__slide-subtext[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__slide-subtext[_ngcontent-ihs-c2] {
                line-height: 1.39;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__button-cta[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__button-cta[_ngcontent-ihs-c2] {
                width: calc(100% - 60px);
                align-self: center;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__swiper[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__swiper[_ngcontent-ihs-c2] {
                flex: 1 1 0;
                height: 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__swiper-slide[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__swiper-slide[_ngcontent-ihs-c2] {
                position: relative;
                height: 100%;
                overflow: hidden;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__swiper-image[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__swiper-image[_ngcontent-ihs-c2] {
                position: absolute;
                max-width: 100%;
                max-height: 100%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .swiper-slide-active[_ngcontent-ihs-c2] .tutorial-screen__swiper-image[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .swiper-slide-active[_ngcontent-ihs-c2] .tutorial-screen__swiper-image[_ngcontent-ihs-c2] {
                opacity: 1;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper[_ngcontent-ihs-c2] {
                width: 732px;
                height: 426px;
                padding: 74px 48px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-0[_ngcontent-ihs-c2] {
                width: 280px;
                margin-top: 57px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-1[_ngcontent-ihs-c2] {
                width: 330px;
                margin: 55px 42px 0 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-2[_ngcontent-ihs-c2] {
                width: 370px;
                margin: 57px -22px 0 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-3[_ngcontent-ihs-c2] {
                width: 270px;
                margin-top: 70px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks[_ngcontent-ihs-c2] .tutorial-screen__slide-body-1[_ngcontent-ihs-c2] {
                width: 240px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks[_ngcontent-ihs-c2] .tutorial-screen__slide-body-3[_ngcontent-ihs-c2] {
                width: 320px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-0[_ngcontent-ihs-c2] {
                width: 444px;
                margin: 46px 228px 0 20px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-1[_ngcontent-ihs-c2] {
                width: 340px;
                margin: 57px -30px 0 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-2[_ngcontent-ihs-c2] {
                width: 450px;
                margin: -62px 0 0 -45px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-3[_ngcontent-ihs-c2] {
                width: 430px;
                margin: 74px 0 0 -10px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-4[_ngcontent-ihs-c2] {
                width: 270px;
                margin-top: 100px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__slide-body-0[_ngcontent-ihs-c2] {
                width: 250px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__slide-body-4[_ngcontent-ihs-c2] {
                width: 320px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-0[_ngcontent-ihs-c2] {
                width: 450px;
                margin: 37px -240px 0 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-1[_ngcontent-ihs-c2] {
                width: 380px;
                margin: 68px -182px 0 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-2[_ngcontent-ihs-c2] {
                width: 330px;
                margin: 77px -105px 0 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-3[_ngcontent-ihs-c2] {
                width: 410px;
                margin-top: 77px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-4[_ngcontent-ihs-c2] {
                width: 310px;
                margin-top: 67px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-2[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-4[_ngcontent-ihs-c2] {
                width: 330px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-0[_ngcontent-ihs-c2] {
                width: 281px;
                margin-top: 80px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-1[_ngcontent-ihs-c2] {
                width: 250px;
                margin-top: 80px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-2[_ngcontent-ihs-c2] {
                width: 310px;
                margin-top: 85px;
                margin-right: -30px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__slide-body-1[_ngcontent-ihs-c2] {
                width: 250px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__slide-body-2[_ngcontent-ihs-c2] {
                width: 222px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__slide-head[_ngcontent-ihs-c2] {
                margin-bottom: 5px;
                width: 320px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__slide-body[_ngcontent-ihs-c2] {
                width: 300px;
                line-height: 1.14;
                margin-bottom: 10px;
                min-height: 102px;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__slide-subtext[_ngcontent-ihs-c2] {
                position: absolute;
                bottom: 51px;
                left: 48px;
                width: 649px;
                line-height: 1.33;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__button-cta[_ngcontent-ihs-c2] {
                color: #47653a;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__swiper[_ngcontent-ihs-c2] {
                position: absolute;
                right: 0;
                top: 0;
                width: 392px;
                height: 375px;
                overflow: hidden;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__swiper-slide[_ngcontent-ihs-c2] {
                width: 100%;
                height: 100%;
                text-align: center;
                overflow: hidden;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__swiper-image[_ngcontent-ihs-c2] {
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] swiper > .swiper.s-wrapper .swiper-pagination {
                bottom: 12px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper[_ngcontent-ihs-c2] {
                width: 560px;
                height: 785px;
                max-height: 82vh;
                box-shadow: 0 1px 24px 8px rgba(0, 0, 0, 0.3);
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks[_ngcontent-ihs-c2] .tutorial-screen__slide-body-0[_ngcontent-ihs-c2] {
                padding: 10px 13px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks[_ngcontent-ihs-c2] .tutorial-screen__slide-body-1[_ngcontent-ihs-c2] {
                padding: 10px 40px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks[_ngcontent-ihs-c2] .tutorial-screen__slide-body-3[_ngcontent-ihs-c2] {
                padding: 10px 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-0[_ngcontent-ihs-c2] {
                padding: 0 30px;
                margin-top: -20px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-2[_ngcontent-ihs-c2] {
                padding: 0;
                margin-top: -30px;
                max-height: 120%;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-3[_ngcontent-ihs-c2] {
                padding: 0 50px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-4[_ngcontent-ihs-c2] {
                padding: 0 95px;
                margin-top: -10px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__slide-body-0[_ngcontent-ihs-c2] {
                max-width: 297px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__slide-body-1[_ngcontent-ihs-c2] {
                max-width: 340px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__slide-body-4[_ngcontent-ihs-c2] {
                max-width: 360px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-0[_ngcontent-ihs-c2] {
                padding: 0 30px;
                margin-top: -20px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-1[_ngcontent-ihs-c2] {
                padding: 0 60px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-3[_ngcontent-ihs-c2] {
                padding: 0 50px;
                margin-top: -20px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-4[_ngcontent-ihs-c2] {
                padding: 0 105px;
                margin-top: -20px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-0[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-1[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-3[_ngcontent-ihs-c2] {
                max-width: 343px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-2[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-4[_ngcontent-ihs-c2] {
                max-width: 375px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__slide-body-0[_ngcontent-ihs-c2] {
                max-width: 420px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__slide-body-1[_ngcontent-ihs-c2] {
                max-width: 400px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__slide-body-2[_ngcontent-ihs-c2] {
                max-width: 380px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__slide-head[_ngcontent-ihs-c2] {
                padding-top: 95px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__slide-body[_ngcontent-ihs-c2] {
                padding: 10px 23px;
                min-height: 110px;
                line-height: 1.14;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__slide-subtext[_ngcontent-ihs-c2] {
                min-height: 70px;
                max-width: 473px;
                margin-left: 44px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__button-cta[_ngcontent-ihs-c2] {
                margin: 20px 29px 76px;
            }
            [_nghost-ihs-c2] .tutorial-screen.tablet[_ngcontent-ihs-c2] .tutorial-screen__swiper-image[_ngcontent-ihs-c2] {
                padding: 0 95px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper[_ngcontent-ihs-c2] {
                width: 100%;
                height: 100%;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-stocks-2[_ngcontent-ihs-c2] .tutorial-screen__slide-body[_ngcontent-ihs-c2] {
                padding: 20px 26px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__slide-body[_ngcontent-ihs-c2] {
                min-height: 106px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__slide-body-1[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__slide-body-3[_ngcontent-ihs-c2] {
                max-width: 360px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-0[_ngcontent-ihs-c2] {
                max-width: 128%;
                max-height: 128%;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-1[_ngcontent-ihs-c2] {
                max-width: 90%;
                max-height: 90%;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-2[_ngcontent-ihs-c2] {
                max-width: 118%;
                max-height: 118%;
                margin-top: -30px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-3[_ngcontent-ihs-c2] {
                max-width: 128%;
                max-height: 128%;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-crypto[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-4[_ngcontent-ihs-c2] {
                max-width: 80%;
                max-height: 80%;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-0[_ngcontent-ihs-c2] {
                margin-top: -20px;
                margin-left: 1%;
                max-width: 124%;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-2[_ngcontent-ihs-c2] {
                max-width: 112%;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-3[_ngcontent-ihs-c2] {
                max-width: 120%;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__swiper-image-4[_ngcontent-ihs-c2] {
                padding: 0 35px;
                margin-top: -50px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-0[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-1[_ngcontent-ihs-c2],
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-3[_ngcontent-ihs-c2] {
                max-width: 370px;
                padding: 20px 30px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-cfd[_ngcontent-ihs-c2] .tutorial-screen__slide-body-2[_ngcontent-ihs-c2] {
                max-width: 370px;
                padding: 20px 15px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__slide-body-1[_ngcontent-ihs-c2] {
                padding: 20px;
                max-width: 375px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__wrapper-copyTraders[_ngcontent-ihs-c2] .tutorial-screen__slide-body-2[_ngcontent-ihs-c2] {
                max-width: 375px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__background[_ngcontent-ihs-c2] {
                background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0) 63%, #272b3a);
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__slide-head[_ngcontent-ihs-c2] {
                padding: 49px 20px 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__slide-body[_ngcontent-ihs-c2] {
                padding: 20px 40px;
                line-height: 1.14;
                letter-spacing: -0.54px;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__slide-subtext[_ngcontent-ihs-c2]:not(:empty) {
                margin: 19px 29px 0;
            }
            [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2] .tutorial-screen__button-cta[_ngcontent-ihs-c2] {
                margin: 28px 29px 111px;
            }
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] [_ngcontent-ihs-c2]::-webkit-scrollbar-thumb {
                background-color: #3d404a;
            }
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] [_ngcontent-ihs-c2]::-webkit-scrollbar-thumb:hover {
                background-color: #3d404a;
            }
            [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] [_ngcontent-ihs-c2]::-webkit-scrollbar-thumb:window-inactive {
                background-color: #3d404a;
            }
            .rtl-direction[_nghost-ihs-c2],
            .rtl-direction [_nghost-ihs-c2] {
                direction: rtl;
            }
            .rtl-direction[_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2],
            .rtl-direction [_nghost-ihs-c2] .tutorial-screen[_ngcontent-ihs-c2] {
                left: auto;
            }
            .rtl-direction[_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper[_ngcontent-ihs-c2],
            .rtl-direction [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__wrapper[_ngcontent-ihs-c2] {
                align-items: flex-end;
            }
            .rtl-direction[_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__swiper-slide[_ngcontent-ihs-c2],
            .rtl-direction [_nghost-ihs-c2] .tutorial-screen.desktop[_ngcontent-ihs-c2] .tutorial-screen__swiper-slide[_ngcontent-ihs-c2] {
                direction: ltr;
            }
            @media (orientation: landscape) {
                [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2]:not(.cordova) .tutorial-screen__swiper-image[_ngcontent-ihs-c2] {
                    display: none;
                }
                [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2]:not(.cordova) .tutorial-screen__slide-subtext[_ngcontent-ihs-c2] {
                    margin: 0 15px;
                    max-height: calc(100% - 179px);
                    opacity: 0;
                }
                [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2]:not(.cordova) .tutorial-screen__slide-body[_ngcontent-ihs-c2] {
                    min-height: auto;
                    margin: 0 auto;
                    max-width: initial !important;
                    opacity: 0;
                    transition: opacity 0.5s ease-in-out;
                }
                [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2]:not(.cordova) .tutorial-screen__button-cta[_ngcontent-ihs-c2] {
                    position: absolute;
                    bottom: 54px;
                    margin: 0;
                }
                [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2]:not(.cordova) swiper > .swiper.s-wrapper .swiper-pagination {
                    bottom: 16px;
                }
                [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2]:not(.cordova) swiper .swiper-slide-active .tutorial-screen__slide-body {
                    opacity: 1;
                }
                [_nghost-ihs-c2] .tutorial-screen.mobile[_ngcontent-ihs-c2]:not(.cordova) swiper .swiper-slide-active .tutorial-screen__slide-subtext {
                    opacity: 0.5;
                }
            }
        </style>
        <style>
            .et-flag[_ngcontent-ihs-c4] {
                display: inline-block;
                height: 19px;
                width: 28px;
                border-radius: 4px;
            }
            .et-flag.ar-ae[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/arab-flag.svg);
            }
            .et-flag.en-gb[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/uk-flag.svg);
            }
            .et-flag.fr-fr[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/france-flag.svg);
            }
            .et-flag.de-de[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/german-flag.svg);
            }
            .et-flag.it-it[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/italy-flag.svg);
            }
            .et-flag.ru-ru[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/russia-flag.svg);
            }
            .et-flag.es-es[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/spain-flag.svg);
            }
            .et-flag.pl-pl[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/poland-flag.svg);
            }
            .et-flag.nl-nl[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/netherlands-flag.svg);
            }
            .et-flag.en-us[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/usa-flag.svg);
            }
            .et-flag.nb-no[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/norway-flag.svg);
            }
            .et-flag.pt-pt[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/portugal-flag.svg);
            }
            .et-flag.sv-se[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/sweden-flag.svg);
            }
            .et-flag.cs-cz[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/czech-flag.svg);
            }
            .et-flag.ms-my[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/malay-flag.svg);
            }
            .et-flag.da-dk[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/denmark-flag.svg);
            }
            .et-flag.ro-ro[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/romania-flag.svg);
            }
            .et-flag.vi-vn[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/vietnam-flag.svg);
            }
            .et-flag.th-th[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/thailand-flag.svg);
            }
            .et-flag.fi-fi[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/finland-flag.svg);
            }
            .et-flag.zh-tw[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/china-traditional-flag.svg);
            }
            .et-flag.zh-cn[_ngcontent-ihs-c4],
            .et-flag.zh-hk[_ngcontent-ihs-c4],
            .et-flag.zh-mo[_ngcontent-ihs-c4],
            .et-flag.zh-sg[_ngcontent-ihs-c4] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/china-flag.svg);
            }
            .icon-arrow-right[_ngcontent-ihs-c4] {
                color: #777;
                display: none;
            }
            .setting-language-picker[_nghost-ihs-c4],
            .setting-language-picker [_nghost-ihs-c4] {
                width: 100%;
                padding-top: 1rem;
                display: block;
                font-family: general-font, "Open Sans", Arial, sans-serif;
                font-size: 1.375rem;
                letter-spacing: -0.35px;
            }
            .setting-language-picker[_nghost-ihs-c4] .icon-arrow-right[_ngcontent-ihs-c4],
            .setting-language-picker [_nghost-ihs-c4] .icon-arrow-right[_ngcontent-ihs-c4] {
                display: inline-block;
            }
            .setting-language-picker[_nghost-ihs-c4] a[_ngcontent-ihs-c4],
            .setting-language-picker [_nghost-ihs-c4] a[_ngcontent-ihs-c4] {
                padding: 0;
            }
            @media (max-width: 767px) {
                .setting-language-picker[_nghost-ihs-c4],
                .setting-language-picker [_nghost-ihs-c4] {
                    padding: 0;
                }
                .setting-language-picker[_nghost-ihs-c4] a[_ngcontent-ihs-c4],
                .setting-language-picker [_nghost-ihs-c4] a[_ngcontent-ihs-c4] {
                    padding: 0 0.625rem;
                }
            }
            .setting-language-picker[_nghost-ihs-c4] .language-name[_ngcontent-ihs-c4],
            .setting-language-picker [_nghost-ihs-c4] .language-name[_ngcontent-ihs-c4] {
                color: #2c2c2c;
                margin: 0 1.1875rem;
                font-weight: 300;
                line-height: normal;
                letter-spacing: -0.55px;
            }
            .app-header-language-picker[_nghost-ihs-c4] a[_ngcontent-ihs-c4],
            .app-header-language-picker [_nghost-ihs-c4] a[_ngcontent-ihs-c4] {
                color: #2c2c2c;
            }
            .app-header-language-picker[_nghost-ihs-c4] a[_ngcontent-ihs-c4] .language-name[_ngcontent-ihs-c4],
            .app-header-language-picker [_nghost-ihs-c4] a[_ngcontent-ihs-c4] .language-name[_ngcontent-ihs-c4] {
                padding: 0 0.625rem;
            }
            a[_ngcontent-ihs-c4] {
                cursor: pointer;
            }
            .transparent-button[_ngcontent-ihs-c4] {
                display: block;
                width: 100%;
                height: 100%;
                background-color: transparent;
            }
            .language-picker-container[_ngcontent-ihs-c4] {
                justify-content: space-between;
            }
            .rtl-direction[_nghost-ihs-c4] .icon-arrow-right[_ngcontent-ihs-c4]::before,
            .rtl-direction [_nghost-ihs-c4] .icon-arrow-right[_ngcontent-ihs-c4]::before {
                content: "\e90e";
            }
            .login-sub-temp[_nghost-ihs-c4] .language-name[_ngcontent-ihs-c4]::after,
            .login-sub-temp [_nghost-ihs-c4] .language-name[_ngcontent-ihs-c4]::after {
                content: "";
                border: solid #777;
                border-width: 0 1px 1px 0;
                display: inline-block;
                margin: 4px 0 4px 10px;
                padding: 3px;
                transform: rotate(45deg);
                -webkit-transform: rotate(45deg);
            }
        </style>
        <style>
            [_nghost-ihs-c3] .onboarding-wrapper {
                position: absolute;
                z-index: 1000;
                width: 100%;
                height: 100%;
                background: #fff;
                font-family: OpenSans-Semibold, sans-serif;
                display: flex;
                flex-direction: column;
                justify-content: stretch;
                padding: 30px 0 65px;
                overflow: hidden;
            }
            [_nghost-ihs-c3] .onboarding-wrapper > .slide-logo {
                flex: 0 0 auto;
                width: 71px;
                height: 22px;
                background: url(https://etoro-cdn.etorostatic.com/web-client/img//login-logo-hd.png) center/contain no-repeat;
                align-self: center;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .have-an-account,
            [_nghost-ihs-c3] .onboarding-wrapper .slide-subtext,
            [_nghost-ihs-c3] .onboarding-wrapper > .slide-body {
                flex: 0 0 auto;
                text-align: center;
                font-family: OpenSans-Semibold, sans-serif;
            }
            [_nghost-ihs-c3] .onboarding-wrapper > .slide-body {
                padding: 20px 35px;
                font-size: 24px;
                font-weight: 700;
                font-stretch: normal;
                font-style: normal;
                line-height: 1.17;
                letter-spacing: -0.43px;
                color: #2c2c2c;
                min-height: 90px;
                overflow: hidden;
                max-width: 320px;
                align-self: center;
            }
            [_nghost-ihs-c3] .onboarding-wrapper > .slide-body-us {
                width: 335px;
                font-family: OpenSans, sans-serif;
                font-size: 22px;
                font-weight: 700;
                line-height: normal;
                letter-spacing: -0.42px;
                text-align: center;
                align-self: center;
                padding-top: 23px;
            }
            [_nghost-ihs-c3] .onboarding-wrapper > .slide-subtext {
                padding: 0 25px;
                font-size: 14px;
                font-weight: 400;
                font-stretch: normal;
                font-style: normal;
                line-height: 1.43;
                letter-spacing: -0.16px;
                text-align: center;
                color: #bababa;
            }
            [_nghost-ihs-c3] .onboarding-wrapper > .slide-subtext-us {
                width: 265px;
                font-size: 18px;
                font-weight: 300;
                line-height: normal;
                letter-spacing: -0.35px;
                color: #777;
                align-self: center;
                text-align: center;
                margin-top: 10px;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .have-an-account {
                text-align: center;
                font-size: 14px;
                letter-spacing: -0.15px;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .have-an-account > a {
                font-family: OpenSans-Semibold, sans-serif;
                cursor: pointer;
                color: #0ea7ff;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .button-cta {
                margin: 28px auto 13px;
                width: calc(100% - 60px);
                max-width: 320px;
                height: 45px;
                border-radius: 5px;
                background-color: #3dae23;
                font-family: OpenSans-Bold, sans-serif;
                font-weight: 700;
                font-size: 14px;
                color: #fff;
                letter-spacing: -0.18px;
                flex: 0 0 auto;
                outline: 0;
                box-shadow: none;
                align-self: center;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider {
                flex: 1 1 0;
                height: 0;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper {
                display: block;
                height: 100%;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .swiper-container {
                overflow: visible;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .slide-image {
                position: relative;
                height: 100%;
                overflow: hidden;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .slide-image > img,
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .slide-image > video {
                position: absolute;
                -o-object-fit: contain;
                object-fit: contain;
                height: 100%;
                width: calc(100% + 3px);
                top: 50%;
                left: -1px;
                transform: translateY(-50%);
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .slide-image > img {
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .video-container {
                position: absolute;
                -o-object-fit: cover;
                object-fit: cover;
                width: 100%;
                left: 0;
                top: 50%;
                transform: translateY(-50%);
                overflow: hidden;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .video-container::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                border-top: 1px solid #fff;
                border-bottom: 1px solid #fff;
                z-index: 2;
                width: 100%;
                height: 100%;
                box-sizing: border-box;
                transform: translate3d(0, 0, 0);
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .video-container > video {
                display: block;
                position: relative;
                width: calc(100% + 3px);
                margin-left: -1px;
                z-index: 1;
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s ease-in-out 0.1s, visibility 0.3s ease-in-out 0.1s;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .swiper-slide-active .video-container > video {
                opacity: 1;
                visibility: visible;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider swiper .swiper-slide-active .slide-image > img {
                opacity: 1;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider .swiper .swiper-pagination {
                position: relative;
                bottom: -6px;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider .swiper .swiper-pagination-bullet {
                background-color: #eaeaea;
                opacity: 1;
                border-color: transparent;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider .swiper .swiper-pagination-bullet.swiper-pagination-bullet-active {
                background-color: #3dae23;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider .swiper.s-wrapper.swiper-container-horizontal .swiper-pagination .swiper-pagination-handle .swiper-pagination-bullet.swiper-pagination-bullet-first,
            [_nghost-ihs-c3] .onboarding-wrapper .onboarding-slider .swiper.s-wrapper.swiper-container-horizontal .swiper-pagination .swiper-pagination-handle .swiper-pagination-bullet.swiper-pagination-bullet-last {
                border: 0;
                margin: 0;
            }
            [_nghost-ihs-c3] .onboarding-wrapper--China .slide-logo {
                width: 54px;
                height: 30px;
                background: url(https://etoro-cdn.etorostatic.com/web-client/img//chinese-logo.png) center/contain no-repeat;
            }
            [_nghost-ihs-c3] .onboarding-wrapper--China .button-cta {
                background-color: #d0021b;
            }
            [_nghost-ihs-c3] .onboarding-wrapper--China > .onboarding-slider .swiper .swiper-pagination-handle > .swiper-pagination-bullet.swiper-pagination-bullet-active {
                background-color: #d0021b;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .controll-wrapper {
                display: flex;
                flex-direction: column;
                position: relative;
                top: 30px;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .et-navigation-buttons {
                justify-content: center;
            }
            [_nghost-ihs-c3] .onboarding-wrapper .et-navigation-buttons .et-disclaimer-link {
                width: 117px;
                height: 35px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: -0.3px;
                color: #54626e;
                border-radius: 18px;
                margin: 21px auto 0;
            }
            @media (max-width: 1024px) {
                [_nghost-ihs-c3] .onboarding-wrapper .et-navigation-buttons .et-disclaimer-link {
                    display: flex;
                }
            }
            [_nghost-ihs-c3] .onboarding-content[_ngcontent-ihs-c3] {
                display: block;
                position: absolute;
                z-index: 1000;
                width: 100%;
                height: 100%;
            }
            [_nghost-ihs-c3] .onboarding-content.tablet[_ngcontent-ihs-c3] {
                background-color: rgba(39, 43, 58, 0.85);
                z-index: 100;
                -webkit-backdrop-filter: blur(10px);
                backdrop-filter: blur(10px);
            }
            [_nghost-ihs-c3] .onboarding-content.tablet[_ngcontent-ihs-c3] .onboarding-wrapper[_ngcontent-ihs-c3] {
                max-width: 560px;
                max-height: 785px;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                border-radius: 10px;
                box-shadow: 0 1px 24px 8px rgba(0, 0, 0, 0.3);
            }
            [_nghost-ihs-c3] .tablet .onboarding-wrapper .onboarding-slider swiper .video-container::after {
                border-top-width: 3px;
                border-bottom-width: 3px;
            }
            .onboarding-preloader[_ngcontent-ihs-c3] {
                position: absolute;
                z-index: 900;
                width: 100%;
                height: 100%;
                background: #fff;
            }
        </style>
       
        <style>
            @font-face {
                font-family: DINOT;
                font-weight: 600;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/dinot/DINOT-Bold.otf) format("truetype");
            }
            @font-face {
                font-family: DINOT;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/dinot/DINOT-Medium.otf) format("truetype");
            }
            @font-face {
                font-family: DINOT;
                font-weight: 300;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/dinot/DINOT.otf) format("truetype");
            }
            @font-face {
                font-family: iconFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/icomoon.ttf) format("truetype");
            }
            @font-face {
                font-family: iconFeedFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/feed/feed.ttf) format("truetype");
            }
            @font-face {
                font-family: iconGeneralFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/general/general.ttf) format("truetype");
            }
            @font-face {
                font-family: iconDiscoveryFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/discover/discover.ttf) format("truetype");
            }
            @font-face {
                font-family: iconNavFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/layout/navigation-layout.ttf) format("truetype");
            }
            @font-face {
                font-family: iconPaymentFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/general/general-v.2.2.ttf) format("truetype");
            }
            button[_ngcontent-ihs-c8] {
                outline: 0;
            }
            .button-default[_ngcontent-ihs-c8] {
                width: 100%;
                text-transform: uppercase;
                color: #fff;
                border: 0;
                border-radius: 3px;
                cursor: pointer;
                transition: background-color 0.2s linear;
            }
            .et-link[_ngcontent-ihs-c8] {
                color: #2999f5;
                cursor: pointer;
            }
            .et-link[_ngcontent-ihs-c8]:hover {
                color: #2fa8f6;
            }
            .blue-btn[_ngcontent-ihs-c8] {
                background-color: #2999f5;
            }
            .blue-btn[_ngcontent-ihs-c8]:hover {
                background-color: #2fa8f6;
            }
            .white-btn[_ngcontent-ihs-c8] {
                background-color: #fff;
                color: #2999f5;
                box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            }
            .white-btn[_ngcontent-ihs-c8]:hover {
                color: #2fa8f6;
            }
            .green-btn[_ngcontent-ihs-c8] {
                background-color: #3fb923;
            }
            .green-btn[_ngcontent-ihs-c8]:hover {
                background-color: #48c328;
            }
            .disabled-btn[_ngcontent-ihs-c8] {
                cursor: default;
                color: #bababa;
                background-color: #f5f5f5;
            }
            .dark-gray-btn[_ngcontent-ihs-c8] {
                background-color: #54626e;
            }
            .dark-gray-btn[_ngcontent-ihs-c8]:hover {
                background-color: #27435b;
            }
            .secondary-btn[_ngcontent-ihs-c8] {
                background-color: #3fb923;
            }
            .secondary-btn[_ngcontent-ihs-c8]:hover {
                background-color: #48c328;
            }
            .primary-btn[_ngcontent-ihs-c8] {
                background-color: #2999f5;
            }
            .primary-btn[_ngcontent-ihs-c8]:hover {
                background-color: #2fa8f6;
            }
            .china-secondary-btn[_ngcontent-ihs-c8] {
                background-color: #d0021b;
            }
            .china-secondary-btn[_ngcontent-ihs-c8]:hover {
                background-color: #e00224;
            }
            .neutral-btn[_ngcontent-ihs-c8] {
                background-color: #54626e;
            }
            .neutral-btn[_ngcontent-ihs-c8]:hover {
                background-color: #27435b;
            }
            .china-product[_nghost-ihs-c8] .green-btn[_ngcontent-ihs-c8],
            .china-product [_nghost-ihs-c8] .green-btn[_ngcontent-ihs-c8] {
                background-color: #d0021b;
            }
            .china-product[_nghost-ihs-c8] .green-btn[_ngcontent-ihs-c8]:hover,
            .china-product [_nghost-ihs-c8] .green-btn[_ngcontent-ihs-c8]:hover {
                background-color: #e00224;
            }
            .china-product[_nghost-ihs-c8] .secondary-btn[_ngcontent-ihs-c8],
            .china-product [_nghost-ihs-c8] .secondary-btn[_ngcontent-ihs-c8] {
                background-color: #d0021b;
            }
            .china-product[_nghost-ihs-c8] .secondary-btn[_ngcontent-ihs-c8]:hover,
            .china-product [_nghost-ihs-c8] .secondary-btn[_ngcontent-ihs-c8]:hover {
                background-color: #e00224;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] {
                display: flex;
                flex-direction: row;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8] {
                width: 1px;
                height: 1px;
                visibility: hidden;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box[_ngcontent-ihs-c8]:checked + .checkbox-box-lable[_ngcontent-ihs-c8] .checkbox-sign[_ngcontent-ihs-c8] {
                border-color: #2999f5;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box[_ngcontent-ihs-c8]:checked + .checkbox-box-lable[_ngcontent-ihs-c8] .checkbox-sign[_ngcontent-ihs-c8]:before {
                font-family: iconFont;
                font-style: normal;
                content: "\e944";
                color: #2999f5;
                display: inline-block;
                line-height: 1.85;
                font-size: 14px;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box[_ngcontent-ihs-c8]:checked + .checkbox-box-lable[_ngcontent-ihs-c8] .checkbox-sign[_ngcontent-ihs-c8]:hover {
                border-color: #2fa8f6;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box[_ngcontent-ihs-c8]:checked + .checkbox-box-lable[_ngcontent-ihs-c8] .checkbox-sign[_ngcontent-ihs-c8]:hover:before {
                color: #2fa8f6;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box-lable[_ngcontent-ihs-c8] {
                font-size: 16px;
                font-weight: 300;
                letter-spacing: -0.25px;
                color: #777;
                display: flex;
                cursor: pointer;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box-lable[_ngcontent-ihs-c8] .box-lable-text[_ngcontent-ihs-c8] {
                padding: 0 15px;
                line-height: 1.6;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box-lable[_ngcontent-ihs-c8] .checkbox-sign[_ngcontent-ihs-c8] {
                width: 26px;
                height: 26px;
                border-radius: 2px;
                border: 1px solid #e0e0e0;
                display: block;
                text-align: center;
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box-lable[_ngcontent-ihs-c8] .checkbox-sign[_ngcontent-ihs-c8]:before {
                content: "";
            }
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box-lable[_ngcontent-ihs-c8] .checkbox-sign[_ngcontent-ihs-c8]:hover,
            .checkbox-wrapper[_ngcontent-ihs-c8] .checkbox-box-lable[_ngcontent-ihs-c8] .checkbox-sign[_ngcontent-ihs-c8]:hover:before {
                border-color: #27435b;
            }
            .positive[_ngcontent-ihs-c8] {
                color: #3dae23;
            }
            .negative[_ngcontent-ihs-c8] {
                color: #d0021b;
            }
            .china-product[_nghost-ihs-c8] .positive[_ngcontent-ihs-c8],
            .china-product [_nghost-ihs-c8] .positive[_ngcontent-ihs-c8] {
                color: #d0021b;
            }
            .china-product[_nghost-ihs-c8] .negative[_ngcontent-ihs-c8],
            .china-product [_nghost-ihs-c8] .negative[_ngcontent-ihs-c8] {
                color: #3dae23;
            }
            h1[_ngcontent-ihs-c8] {
                line-height: 1.2;
                font-weight: 400;
                font-size: 24px;
            }
            h2[_ngcontent-ihs-c8] {
                line-height: 1.2;
                font-weight: 400;
                font-size: 22px;
            }
            h3[_ngcontent-ihs-c8] {
                line-height: 1.2;
                font-weight: 400;
                font-size: 20px;
            }
            h4[_ngcontent-ihs-c8] {
                line-height: 1.2;
                font-weight: 400;
                font-size: 16px;
            }
            h5[_ngcontent-ihs-c8] {
                line-height: 1.2;
                font-weight: 400;
                font-size: 14px;
            }
            h6[_ngcontent-ihs-c8] {
                line-height: 1.2;
                font-weight: 400;
                font-size: 12px;
            }
            small[_ngcontent-ihs-c8] {
                line-height: 1.2;
                font-weight: 400;
                font-size: 10px;
            }
            input[_ngcontent-ihs-c8]::-webkit-input-placeholder {
                color: silver;
            }
            input[_ngcontent-ihs-c8]::-ms-input-placeholder {
                color: silver;
            }
            input[_ngcontent-ihs-c8]::-moz-placeholder {
                color: silver;
            }
            input[_ngcontent-ihs-c8]::placeholder {
                color: silver;
            }
            .login-etoro-logo[_ngcontent-ihs-c8] {
                background: url(https://etoro-cdn.etorostatic.com/web-client/img/login-logo-hd.png) 0 0/100px auto no-repeat;
                width: 100px;
                height: 35px;
            }
            ".china-product"[_nghost-ihs-c8] .login-etoro-logo[_ngcontent-ihs-c8],
            ".china-product" [_nghost-ihs-c8] .login-etoro-logo[_ngcontent-ihs-c8] {
                background: url(https://etoro-cdn.etorostatic.com/web-client/img/chinese-logo.png) 0 0/100px auto no-repeat;
                height: 54px;
            }
            .side-padding[_ngcontent-ihs-c8] {
                padding-left: 50px;
                padding-right: 50px;
            }
            .side-padding[_ngcontent-ihs-c8]:first-child {
                padding-top: 50px;
            }
            @media screen and (max-height: 680px) and (min-width: 750px) {
                .side-padding[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                }
                .side-padding[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            @media (max-width: 767px) {
                .side-padding[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                }
                .side-padding[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            .login-error-wrapper[_ngcontent-ihs-c8] {
                padding-top: 15px;
                max-height: 100px;
                transition: 0.3s linear;
                font-size: 14px;
                color: #ee2614;
            }
            .login-error-wrapper[_ngcontent-ihs-c8]:empty {
                padding-top: 0;
                max-height: 0;
            }
            .login-title[_ngcontent-ihs-c8] {
                font-size: 18px;
                font-weight: 300;
                letter-spacing: -0.3px;
                text-align: center;
                color: #777;
            }
            .login-sub-title[_ngcontent-ihs-c8] {
                color: #777;
                font-size: 16px;
                font-weight: 400;
                letter-spacing: -0.1px;
                line-height: 20px;
                padding-bottom: 0;
                text-align: center;
            }
            .login-sub-title.green[_ngcontent-ihs-c8] {
                color: #7fb830;
            }
            .login-sub-title.twofa-subtitle[_ngcontent-ihs-c8] {
                text-align: start;
                padding-left: 50px;
                padding-right: 50px;
            }
            .login-sub-title.twofa-subtitle[_ngcontent-ihs-c8]:first-child {
                padding-top: 50px;
            }
            @media screen and (max-height: 680px) and (min-width: 750px) {
                .login-sub-title.twofa-subtitle[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                }
                .login-sub-title.twofa-subtitle[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            @media (max-width: 767px) {
                .login-sub-title[_ngcontent-ihs-c8] {
                    text-align: start;
                    -webkit-padding-start: 30px;
                    padding-inline-start: 30px;
                }
                .login-sub-title.twofa-subtitle[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                }
                .login-sub-title.twofa-subtitle[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            .checkbox-ph[_ngcontent-ihs-c8] {
                margin: 15px 0;
                position: relative;
                display: flex;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox[_ngcontent-ihs-c8] {
                width: 30px;
                vertical-align: top;
                z-index: 1;
                opacity: 0;
                position: relative;
                height: 26px;
                cursor: pointer;
            }
            .checkbox-ph[_ngcontent-ihs-c8] + .checkbox-ph[_ngcontent-ihs-c8] {
                margin: 0;
            }
            .checkbox-ph[_ngcontent-ihs-c8] + .checkbox-ph[_ngcontent-ihs-c8] ~ .sign-up-button[_ngcontent-ihs-c8] {
                margin-top: 20px;
            }
            .checkbox-ph[_ngcontent-ihs-c8] label[_ngcontent-ihs-c8] {
                pointer-events: auto;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox-lable[_ngcontent-ihs-c8] {
                font-size: 14px;
                color: #777;
                display: inline-block;
                position: static;
                text-transform: none;
                vertical-align: middle;
                padding-left: 5px;
                padding-top: 2px;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox-lable[_ngcontent-ihs-c8] a[_ngcontent-ihs-c8] {
                text-decoration: none;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox-lable[_ngcontent-ihs-c8]::after,
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox-lable[_ngcontent-ihs-c8]::before {
                content: "";
                display: block;
                left: 0;
                position: absolute;
                top: 0;
                z-index: 0;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox-lable[_ngcontent-ihs-c8]::before {
                border: 1px solid #e0e0e0;
                border-radius: 2px;
                height: 23px;
                width: 23px;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox-lable[_ngcontent-ihs-c8]::after {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/img/checked-icon-blue.svg);
                opacity: 0;
                background-position: center center;
                background-repeat: no-repeat;
                background-size: 17px auto;
                width: 24px;
                height: 24px;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox[_ngcontent-ihs-c8]:checked + .checkbox-lable[_ngcontent-ihs-c8]::before {
                border-color: #3f9adb;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox[_ngcontent-ihs-c8]:checked + .checkbox-lable[_ngcontent-ihs-c8]::after {
                opacity: 1;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox[_ngcontent-ihs-c8]:checked:hover + .checkbox-lable[_ngcontent-ihs-c8]::before {
                border-color: #00a5ee;
            }
            .checkbox-ph[_ngcontent-ihs-c8] .checkbox[_ngcontent-ihs-c8]:checked:hover + .checkbox-lable[_ngcontent-ihs-c8]::after {
                opacity: 0.8;
            }
            .input-error[_ngcontent-ihs-c8] {
                transition: 0.3s linear 0.3s;
                max-height: 100px;
                opacity: 1;
                order: 3;
                min-height: 24px;
            }
            .input-error[_ngcontent-ihs-c8]:empty {
                max-height: 0;
                opacity: 0;
                min-height: 0;
                transition-delay: 0.3s;
            }
            .input-error[_ngcontent-ihs-c8] div[_ngcontent-ihs-c8] > span[_ngcontent-ihs-c8],
            .input-error[_ngcontent-ihs-c8] span[_ngcontent-ihs-c8] {
                color: #ee2614;
                font-size: 12px;
                display: inline-block;
            }
            .input-error.input-error-button[_ngcontent-ihs-c8] {
                max-height: 0;
                opacity: 0;
                min-height: 0;
                transition-delay: 0.3s;
                color: #ee2614;
                font-size: 12px;
            }
            .input-error.input-error-button.ng-active[_ngcontent-ihs-c8] {
                max-height: 100px;
                opacity: 1;
                order: 3;
                min-height: 24px;
            }
            .button-default[_ngcontent-ihs-c8] {
                height: 50px;
                font-size: 16px;
                font-weight: 400;
                text-transform: none;
                margin-top: 10px;
            }
            .login-page[_ngcontent-ihs-c8] {
                display: flex;
                justify-content: space-around;
                height: 100%;
                align-items: center;
            }
            @media screen and (min-width: 768px) {
                .login-page[_ngcontent-ihs-c8] {
                    overflow: auto;
                }
            }
            .login-page[_ngcontent-ihs-c8] > div[_ngcontent-ihs-c8] {
                height: 100%;
                display: flex;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] {
                display: flex;
                flex-direction: column;
                min-height: 75px;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph.input-error-label[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph.input-error-label[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:focus {
                color: #ee2614;
                border-color: #ee2614;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph.input-error-label[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8] + .two-line[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph.input-error-label[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:focus + .two-line[_ngcontent-ihs-c8] {
                background-color: #d0021b;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph.input-error-label[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8] + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph.input-error-label[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:focus + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8] {
                color: #ee2614;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph.input-error-label[_ngcontent-ihs-c8] .input-error.error[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph.input-error-label[_ngcontent-ihs-c8] .input-error.ng-active[_ngcontent-ihs-c8] {
                -webkit-animation: 0.3s linear errorBounce;
                animation: 0.3s linear errorBounce;
                -webkit-animation-delay: 0.5;
                animation-delay: 0.5;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[type="email"][_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[type="password"][_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[type="tel"][_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[type="text"][_ngcontent-ihs-c8] {
                -webkit-touch-callout: default;
                -webkit-user-select: text;
                -moz-user-select: text;
                -ms-user-select: text;
                user-select: text;
                color: #777;
                width: 100%;
                outline: 0;
                border-bottom: 1px solid #eee;
                font-size: 16px;
                padding: 0 4px;
                touch-action: auto;
                box-shadow: inset 0 0 0 9999px #fff;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8] {
                order: 2;
                border-radius: 0;
                background-color: transparent;
                height: 40px;
                line-height: 40px;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input.ng-not-empty[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input.not-empty-input[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:focus {
                border-bottom: 0 solid #3f9adb;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input.ng-not-empty[_ngcontent-ihs-c8] + .two-line[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input.not-empty-input[_ngcontent-ihs-c8] + .two-line[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:focus + .two-line[_ngcontent-ihs-c8] {
                background-color: #3f9adb;
                transform: scaleX(1);
                transform-origin: 50% 50% 0;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input.ng-not-empty[_ngcontent-ihs-c8] + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input.not-empty-input[_ngcontent-ihs-c8] + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:focus + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8] {
                transform: translate(-17px, 6px) scale(0.8, 0.8);
                text-transform: uppercase;
                text-align: left;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] .two-line[_ngcontent-ihs-c8] {
                background: #eee;
                height: 1px;
                transform: scaleX(0);
                transition: 0.15s cubic-bezier(0.4, 0, 0.2, 1);
                display: block;
                order: 2;
                flex: none;
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] label[_ngcontent-ihs-c8] {
                order: 1;
                color: #9c9c9c;
                width: 225px;
                text-align: left;
                font-weight: 300;
                pointer-events: none;
                transition: font-size 0.25s cubic-bezier(0.27, 0.23, 0.3, 0.98), transform 0.25s cubic-bezier(0.27, 0.23, 0.3, 0.98);
                -moz-transition: font-size 0.25s cubic-bezier(0.27, 0.23, 0.3, 0.98), transform 0.25s cubic-bezier(0.27, 0.23, 0.3, 0.98);
                -webkit-transition: font-size 0.25s cubic-bezier(0.27, 0.23, 0.3, 0.98), transform 0.25s cubic-bezier(0.27, 0.23, 0.3, 0.98);
                transform: translate(23px, 33px) scale(1.2, 1.2);
            }
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input.ng-not-empty[_ngcontent-ihs-c8] + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input.not-empty-input[_ngcontent-ihs-c8] + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:-webkit-autofill + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:-webkit-autofill:focus + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:-webkit-autofill:hover + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8],
            .login-page[_ngcontent-ihs-c8] .input-row-ph[_ngcontent-ihs-c8] input[_ngcontent-ihs-c8]:focus + .two-line[_ngcontent-ihs-c8] + label[_ngcontent-ihs-c8] {
                transform: translate(-30px, 10px) scale(0.8, 0.8);
                width: 320px;
                text-transform: uppercase;
            }
            @-webkit-keyframes errorBounce {
                0% {
                    transform: translateX(0);
                }
                33% {
                    transform: translateX(5%);
                }
                66% {
                    transform: translateX(-2.5%);
                }
            }
            @keyframes errorBounce {
                0% {
                    transform: translateX(0);
                }
                33% {
                    transform: translateX(5%);
                }
                66% {
                    transform: translateX(-2.5%);
                }
            }
            .error-issue[_ngcontent-ihs-c8] > span[_ngcontent-ihs-c8] {
                display: none;
            }
            .error-issue[_ngcontent-ihs-c8] > span[_ngcontent-ihs-c8]:first-child {
                display: block;
            }
            .mobile-on[_ngcontent-ihs-c8] {
                display: none;
            }
            .login-form[_ngcontent-ihs-c8] {
                padding-left: 50px;
                padding-right: 50px;
            }
            .login-form[_ngcontent-ihs-c8]:first-child {
                padding-top: 50px;
            }
            @media (max-width: 767px) {
                .mobile-on[_ngcontent-ihs-c8] {
                    display: block;
                }
                .login-form[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                }
                .login-form[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            .login-etoro-logo[_ngcontent-ihs-c8] {
                margin: 0 auto 15px;
            }
            @media screen and (max-height: 680px) and (min-width: 750px) {
                .login-form[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                }
                .login-form[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
                .login-etoro-logo[_ngcontent-ihs-c8] {
                    display: none;
                }
            }
            .login-page[_ngcontent-ihs-c8] .input-error[_ngcontent-ihs-c8] {
                text-align: left;
            }
            .login-sts-title[_ngcontent-ihs-c8] {
                font-size: 18px;
                font-weight: 300;
                letter-spacing: -0.3px;
                text-align: center;
                color: #777;
                padding-left: 50px;
                padding-right: 50px;
                padding-top: 50px;
            }
            .login-sts-title[_ngcontent-ihs-c8]:first-child {
                padding-top: 50px;
            }
            @media screen and (max-height: 680px) and (min-width: 750px) {
                .login-sts-title[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                }
                .login-sts-title[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            @media screen and (max-height: 680px) and (min-width: 741px) {
                .login-sts-title[_ngcontent-ihs-c8] {
                    padding-top: 30px;
                }
            }
            @media (max-width: 767px) {
                .login-etoro-logo[_ngcontent-ihs-c8] {
                    margin: 0 0 10px;
                    display: block;
                }
                .login-sts-title[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                    padding-top: 25px;
                    text-align: start;
                }
                .login-sts-title[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            .login-title[_ngcontent-ihs-c8] {
                padding: 50px 50px 10px;
            }
            .login-title[_ngcontent-ihs-c8]:first-child {
                padding-top: 50px;
            }
            @media screen and (max-height: 680px) and (min-width: 750px) {
                .login-title[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                }
                .login-title[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            @media screen and (max-height: 680px) and (min-width: 741px) {
                .login-title[_ngcontent-ihs-c8] {
                    padding-top: 30px;
                }
            }
            .login-sts-wrapp[_ngcontent-ihs-c8] {
                background-color: #fff;
                width: 500px;
                border-top: 1px solid #e4e4e4;
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
                margin: auto;
                overflow-y: auto;
            }
            @media (max-width: 767px) {
                .login-title[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                    padding-top: 25px;
                    text-align: start;
                }
                .login-title[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
                .login-sts-wrapp[_ngcontent-ihs-c8] {
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    width: auto;
                    border-top: none;
                    z-index: 4;
                }
            }
            .login-embed[_nghost-ihs-c8] .login-sts-wrapp[_ngcontent-ihs-c8],
            .login-embed [_nghost-ihs-c8] .login-sts-wrapp[_ngcontent-ihs-c8] {
                border-top: 0;
                box-shadow: none;
            }
            .login-bottom-link[_ngcontent-ihs-c8] {
                font-size: 14px;
                text-align: center;
                padding: 30px 50px 50px;
            }
            .login-bottom-link[_ngcontent-ihs-c8]:first-child {
                padding-top: 50px;
            }
            @media (max-width: 767px) {
                .login-bottom-link[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                }
                .login-bottom-link[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            @media screen and (max-height: 680px) and (min-width: 750px) {
                .login-bottom-link[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
                .login-bottom-link[_ngcontent-ihs-c8] {
                    padding: 20px 30px 30px;
                }
            }
            @media (max-width: 767px) {
                .login-bottom-link[_ngcontent-ihs-c8] {
                    padding: 20px 30px 0;
                }
                .sign-up-button.sign-up-social-button[_ngcontent-ihs-c8] span[_ngcontent-ihs-c8] {
                    width: 60%;
                }
            }
            .social-wrapper-title[_ngcontent-ihs-c8] {
                margin-top: 25px;
                margin-bottom: 15px;
                font-size: 12px;
                text-transform: uppercase;
                color: #777;
                text-align: center;
            }
            .social-wrapper-title[_ngcontent-ihs-c8] span[_ngcontent-ihs-c8] {
                background-color: #fff;
                padding: 0 10px;
            }
            .social-wrapper-title[_ngcontent-ihs-c8]::before {
                content: "";
                display: block;
                margin-top: 10px;
                margin-bottom: -9px;
                border-bottom: 1px solid #eee;
            }
            .sign-up-button[_ngcontent-ihs-c8] {
                border-radius: 4px;
                width: 100%;
                background-color: #3f9adb;
                color: #fff;
                border: 1px solid #3f9adb;
                font-size: 16px;
                height: 50px;
                margin: 0 0 10px;
                padding: 0;
                cursor: pointer;
                transition: 0.1s linear;
                flex-grow: 1;
                transition-property: background-color, border-color, color;
            }
            .sign-up-button.loading[_ngcontent-ihs-c8]::after {
                width: 24px;
                opacity: 1;
                margin-left: 15px;
            }
            .sign-up-button[_ngcontent-ihs-c8]::after {
                height: 24px;
                width: 0;
                opacity: 0;
                display: inline-block;
                content: "";
                margin-top: -4px;
                margin-left: 0;
                vertical-align: middle;
                background-size: 24px 24px;
                -webkit-animation: 0.5s linear infinite rotation;
                animation: 0.5s linear infinite rotation;
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/img/preloader-w.png);
                transition: 0.2s linear;
            }
            .sign-up-button.sign-up-social-button[_ngcontent-ihs-c8] {
                border: 1px solid #e1e1e1;
                background-color: #fff;
                font-size: 14px;
                color: #777;
                height: 45px;
                padding: 0 10px;
                letter-spacing: -0.2px;
            }
            .sign-up-button.sign-up-social-button[_ngcontent-ihs-c8]::before {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/img/sprite-social.png);
                content: "";
                height: 25px;
                width: 25px;
                display: inline-block;
                vertical-align: middle;
            }
            .sign-up-button.sign-up-social-button[_ngcontent-ihs-c8] span[_ngcontent-ihs-c8] {
                min-width: 45%;
                text-align: start;
                vertical-align: middle;
                display: inline-block;
                padding: 0 15px;
                font-size: 14px;
                font-weight: 300;
            }
            .sign-up-button.china-platform-button[_ngcontent-ihs-c8] {
                color: #df4912;
            }
            .sign-up-button.china-platform-button[_ngcontent-ihs-c8]::before {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/img/toa/button-icon.png);
                width: 34px;
                height: 34px;
                background-size: 100%;
            }
            .sign-up-button.google-button[_ngcontent-ihs-c8]::before {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/img/sharing/google-full-icon.svg);
            }
            .sign-up-button.facebook-button[_ngcontent-ihs-c8]::before {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/img/sharing/facebook-full-icon.svg);
            }
            .sign-up-button.apple-button[_ngcontent-ihs-c8]::before {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/img/sharing/apple-full-icon.svg);
            }
            .sign-up-button.apple-button[_ngcontent-ihs-c8]::before,
            .sign-up-button.facebook-button[_ngcontent-ihs-c8]::before,
            .sign-up-button.google-button[_ngcontent-ihs-c8]::before {
                height: 20px;
                width: 18px;
                background-size: 100%;
                background-repeat: no-repeat;
            }
            .sign-up-button.wechat-button[_ngcontent-ihs-c8]::before {
                background-position: -69px -813px;
                width: 34px;
                height: 28px;
            }
            .rtl-direction[_nghost-ihs-c8] .sign-up-button[_ngcontent-ihs-c8],
            .rtl-direction [_nghost-ihs-c8] .sign-up-button[_ngcontent-ihs-c8] {
                direction: rtl;
            }
            .login-add-to-home[_ngcontent-ihs-c8] {
                display: none;
            }
            @media (max-width: 767px) {
                .login-add-to-home[_ngcontent-ihs-c8] {
                    position: relative;
                    display: block;
                    margin-bottom: 35px;
                    box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.15);
                }
                .login-add-to-home[_ngcontent-ihs-c8] .etoto-link-icon[_ngcontent-ihs-c8] {
                    vertical-align: middle;
                    height: 90px;
                    width: 90px;
                    background-color: #7fb830;
                }
                .login-add-to-home[_ngcontent-ihs-c8] .login-add-to-home-text[_ngcontent-ihs-c8] {
                    text-align: left;
                    vertical-align: middle;
                    display: inline-block;
                    width: calc(100% - 100px);
                    margin-left: 5px;
                    padding-left: 10px;
                    color: #777;
                    font-size: 18px;
                    font-weight: 100;
                }
                .login-add-to-home[_ngcontent-ihs-c8] .login-add-to-home-text[_ngcontent-ihs-c8] a.link[_ngcontent-ihs-c8] {
                    font-size: 14px;
                }
            }
            .login-toa[_ngcontent-ihs-c8] {
                display: flex;
                flex-direction: column;
            }
            .login-toa[_ngcontent-ihs-c8] .login-sign-up-toa[_ngcontent-ihs-c8] {
                flex: none;
                background-color: #f5f5f5;
                font-size: 16px;
                text-align: center;
                box-sizing: border-box;
                padding: 12px 50px 50px;
            }
            .login-toa[_ngcontent-ihs-c8] .login-sign-up-toa[_ngcontent-ihs-c8]:first-child {
                padding-top: 50px;
            }
            @media screen and (max-height: 680px) and (min-width: 750px) {
                .login-toa[_ngcontent-ihs-c8] .login-sign-up-toa[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                    padding-bottom: 30px;
                }
                .login-toa[_ngcontent-ihs-c8] .login-sign-up-toa[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            @media (max-width: 767px) {
                .login-toa[_ngcontent-ihs-c8] .login-sign-up-toa[_ngcontent-ihs-c8] {
                    padding-left: 30px;
                    padding-right: 30px;
                    padding-bottom: 30px;
                    background-color: none;
                    font-size: 14px;
                }
                .login-toa[_ngcontent-ihs-c8] .login-sign-up-toa[_ngcontent-ihs-c8]:first-child {
                    padding-top: 30px;
                }
            }
            .login-toa[_ngcontent-ihs-c8] .login-main-toa[_ngcontent-ihs-c8] {
                flex: 1;
                padding: 50px 50px 20px;
                text-align: start;
            }
            .login-toa[_ngcontent-ihs-c8] .login-main-toa.loading[_ngcontent-ihs-c8] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/img/tiny-preloader-hd.gif);
                background-size: 35px 35px;
                background-position: center center;
                background-repeat: no-repeat;
            }
            .login-toa[_ngcontent-ihs-c8] .login-main-toa[_ngcontent-ihs-c8] iframe[_ngcontent-ihs-c8] {
                min-width: 100%;
                min-height: 401px;
                border: 0;
                display: inline-block;
                visibility: hidden;
            }
            .login-toa[_ngcontent-ihs-c8] .login-main-toa[_ngcontent-ihs-c8] iframe.loaded[_ngcontent-ihs-c8] {
                visibility: visible;
            }
            .login-more[_ngcontent-ihs-c8] {
                margin: 20px 0;
                position: relative;
                min-height: 20px;
            }
            @media (max-width: 767px) {
                .login-toa[_ngcontent-ihs-c8] .login-main-toa[_ngcontent-ihs-c8] {
                    padding: 0 10px;
                    overflow: auto;
                }
                .login-toa[_ngcontent-ihs-c8] .login-main-toa[_ngcontent-ihs-c8] iframe[_ngcontent-ihs-c8] {
                    min-width: 100%;
                    min-height: 401px;
                    border: 0;
                    display: inline-block;
                }
                .login-toa[_ngcontent-ihs-c8] .login-main-toa[_ngcontent-ihs-c8] iframe.loaded[_ngcontent-ihs-c8] {
                    visibility: visible;
                }
                .login-more.mobile-hidden[_ngcontent-ihs-c8] {
                    display: none;
                }
            }
            .login-more[_ngcontent-ihs-c8] .login-more-remember[_ngcontent-ihs-c8] {
                float: left;
                font-size: 14px;
                width: 50%;
            }
            .checkbox-lable[_ngcontent-ihs-c8] {
                width: calc(100% - 35px);
            }
        </style>
        
       
        <style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
            .fb_hidden {
                position: absolute;
                top: -10000px;
                z-index: 10001;
            }
            .fb_reposition {
                overflow: hidden;
                position: relative;
            }
            .fb_invisible {
                display: none;
            }
            .fb_reset {
                background: none;
                border: 0;
                border-spacing: 0;
                color: #000;
                cursor: auto;
                direction: ltr;
                font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
                font-size: 11px;
                font-style: normal;
                font-variant: normal;
                font-weight: normal;
                letter-spacing: normal;
                line-height: 1;
                margin: 0;
                overflow: visible;
                padding: 0;
                text-align: left;
                text-decoration: none;
                text-indent: 0;
                text-shadow: none;
                text-transform: none;
                visibility: visible;
                white-space: normal;
                word-spacing: normal;
            }
            .fb_reset > div {
                overflow: hidden;
            }
            @keyframes fb_transform {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
            .fb_animate {
                animation: fb_transform 0.3s forwards;
            }
            .fb_dialog {
                background: rgba(82, 82, 82, 0.7);
                position: absolute;
                top: -10000px;
                z-index: 10001;
            }
            .fb_dialog_advanced {
                border-radius: 8px;
                padding: 10px;
            }
            .fb_dialog_content {
                background: #fff;
                color: #373737;
            }
            .fb_dialog_close_icon {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
                cursor: pointer;
                display: block;
                height: 15px;
                position: absolute;
                right: 18px;
                top: 17px;
                width: 15px;
            }
            .fb_dialog_mobile .fb_dialog_close_icon {
                left: 5px;
                right: auto;
                top: 5px;
            }
            .fb_dialog_padding {
                background-color: transparent;
                position: absolute;
                width: 1px;
                z-index: -1;
            }
            .fb_dialog_close_icon:hover {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;
            }
            .fb_dialog_close_icon:active {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;
            }
            .fb_dialog_iframe {
                line-height: 0;
            }
            .fb_dialog_content .dialog_title {
                background: #6d84b4;
                border: 1px solid #365899;
                color: #fff;
                font-size: 14px;
                font-weight: bold;
                margin: 0;
            }
            .fb_dialog_content .dialog_title > span {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
                float: left;
                padding: 5px 0 7px 26px;
            }
            body.fb_hidden {
                height: 100%;
                left: 0;
                margin: 0;
                overflow: visible;
                position: absolute;
                top: -10000px;
                transform: none;
                width: 100%;
            }
            .fb_dialog.fb_dialog_mobile.loading {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
                min-height: 100%;
                min-width: 100%;
                overflow: hidden;
                position: absolute;
                top: 0;
                z-index: 10001;
            }
            .fb_dialog.fb_dialog_mobile.loading.centered {
                background: none;
                height: auto;
                min-height: initial;
                min-width: initial;
                width: auto;
            }
            .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
                width: 100%;
            }
            .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
                background: none;
            }
            .loading.centered #fb_dialog_loader_close {
                clear: both;
                color: #fff;
                display: block;
                font-size: 18px;
                padding-top: 20px;
            }
            #fb-root #fb_dialog_ipad_overlay {
                background: rgba(0, 0, 0, 0.4);
                bottom: 0;
                left: 0;
                min-height: 100%;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%;
                z-index: 10000;
            }
            #fb-root #fb_dialog_ipad_overlay.hidden {
                display: none;
            }
            .fb_dialog.fb_dialog_mobile.loading iframe {
                visibility: hidden;
            }
            .fb_dialog_mobile .fb_dialog_iframe {
                position: sticky;
                top: 0;
            }
            .fb_dialog_content .dialog_header {
                background: linear-gradient(from(#738aba), to(#2c4987));
                border-bottom: 1px solid;
                border-color: #043b87;
                box-shadow: white 0 1px 1px -1px inset;
                color: #fff;
                font: bold 14px Helvetica, sans-serif;
                text-overflow: ellipsis;
                text-shadow: rgba(0, 30, 84, 0.296875) 0 -1px 0;
                vertical-align: middle;
                white-space: nowrap;
            }
            .fb_dialog_content .dialog_header table {
                height: 43px;
                width: 100%;
            }
            .fb_dialog_content .dialog_header td.header_left {
                font-size: 12px;
                padding-left: 5px;
                vertical-align: middle;
                width: 60px;
            }
            .fb_dialog_content .dialog_header td.header_right {
                font-size: 12px;
                padding-right: 5px;
                vertical-align: middle;
                width: 60px;
            }
            .fb_dialog_content .touchable_button {
                background: linear-gradient(from(#4267b2), to(#2a4887));
                background-clip: padding-box;
                border: 1px solid #29487d;
                border-radius: 3px;
                display: inline-block;
                line-height: 18px;
                margin-top: 3px;
                max-width: 85px;
                padding: 4px 12px;
                position: relative;
            }
            .fb_dialog_content .dialog_header .touchable_button input {
                background: none;
                border: none;
                color: #fff;
                font: bold 12px Helvetica, sans-serif;
                margin: 2px -12px;
                padding: 2px 6px 3px 6px;
                text-shadow: rgba(0, 30, 84, 0.296875) 0 -1px 0;
            }
            .fb_dialog_content .dialog_header .header_center {
                color: #fff;
                font-size: 16px;
                font-weight: bold;
                line-height: 18px;
                text-align: center;
                vertical-align: middle;
            }
            .fb_dialog_content .dialog_content {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
                border: 1px solid #4a4a4a;
                border-bottom: 0;
                border-top: 0;
                height: 150px;
            }
            .fb_dialog_content .dialog_footer {
                background: #f5f6f7;
                border: 1px solid #4a4a4a;
                border-top-color: #ccc;
                height: 40px;
            }
            #fb_dialog_loader_close {
                float: left;
            }
            .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
                visibility: hidden;
            }
            #fb_dialog_loader_spinner {
                animation: rotateSpinner 1.2s linear infinite;
                background-color: transparent;
                background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
                background-position: 50% 50%;
                background-repeat: no-repeat;
                height: 24px;
                width: 24px;
            }
            @keyframes rotateSpinner {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
            .fb_iframe_widget {
                display: inline-block;
                position: relative;
            }
            .fb_iframe_widget span {
                display: inline-block;
                position: relative;
                text-align: justify;
            }
            .fb_iframe_widget iframe {
                position: absolute;
            }
            .fb_iframe_widget_fluid_desktop,
            .fb_iframe_widget_fluid_desktop span,
            .fb_iframe_widget_fluid_desktop iframe {
                max-width: 100%;
            }
            .fb_iframe_widget_fluid_desktop iframe {
                min-width: 220px;
                position: relative;
            }
            .fb_iframe_widget_lift {
                z-index: 1;
            }
            .fb_iframe_widget_fluid {
                display: inline;
            }
            .fb_iframe_widget_fluid span {
                width: 100%;
            }
            .fb_mpn_mobile_landing_page_slide_out {
                animation-duration: 200ms;
                animation-name: fb_mpn_landing_page_slide_out;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_landing_page_slide_out_from_left {
                animation-duration: 200ms;
                animation-name: fb_mpn_landing_page_slide_out_from_left;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_landing_page_slide_up {
                animation-duration: 500ms;
                animation-name: fb_mpn_landing_page_slide_up;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_bounce_in {
                animation-duration: 300ms;
                animation-name: fb_mpn_bounce_in;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_bounce_out {
                animation-duration: 300ms;
                animation-name: fb_mpn_bounce_out;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_bounce_out_v2 {
                animation-duration: 300ms;
                animation-name: fb_mpn_fade_out;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_in_v2 {
                animation-duration: 300ms;
                animation-name: fb_bounce_in_v2;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_in_from_left {
                animation-duration: 300ms;
                animation-name: fb_bounce_in_from_left;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_out_v2 {
                animation-duration: 300ms;
                animation-name: fb_bounce_out_v2;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_out_from_left {
                animation-duration: 300ms;
                animation-name: fb_bounce_out_from_left;
                transition-timing-function: ease-in;
            }
            .fb_invisible_flow {
                display: inherit;
                height: 0;
                overflow-x: hidden;
                width: 0;
            }
            @keyframes fb_mpn_landing_page_slide_out {
                0% {
                    margin: 0 12px;
                    width: 100% - 24px;
                }
                60% {
                    border-radius: 18px;
                }
                100% {
                    border-radius: 50%;
                    margin: 0 24px;
                    width: 60px;
                }
            }
            @keyframes fb_mpn_landing_page_slide_out_from_left {
                0% {
                    left: 12px;
                    width: 100% - 24px;
                }
                60% {
                    border-radius: 18px;
                }
                100% {
                    border-radius: 50%;
                    left: 12px;
                    width: 60px;
                }
            }
            @keyframes fb_mpn_landing_page_slide_up {
                0% {
                    bottom: 0;
                    opacity: 0;
                }
                100% {
                    bottom: 24px;
                    opacity: 1;
                }
            }
            @keyframes fb_mpn_bounce_in {
                0% {
                    opacity: 0.5;
                    top: 100%;
                }
                100% {
                    opacity: 1;
                    top: 0;
                }
            }
            @keyframes fb_mpn_fade_out {
                0% {
                    bottom: 30px;
                    opacity: 1;
                }
                100% {
                    bottom: 0;
                    opacity: 0;
                }
            }
            @keyframes fb_mpn_bounce_out {
                0% {
                    opacity: 1;
                    top: 0;
                }
                100% {
                    opacity: 0.5;
                    top: 100%;
                }
            }
            @keyframes fb_bounce_in_v2 {
                0% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom right;
                }
                50% {
                    transform: scale(1.03, 1.03);
                    transform-origin: bottom right;
                }
                100% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom right;
                }
            }
            @keyframes fb_bounce_in_from_left {
                0% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom left;
                }
                50% {
                    transform: scale(1.03, 1.03);
                    transform-origin: bottom left;
                }
                100% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom left;
                }
            }
            @keyframes fb_bounce_out_v2 {
                0% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom right;
                }
                100% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom right;
                }
            }
            @keyframes fb_bounce_out_from_left {
                0% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom left;
                }
                100% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom left;
                }
            }
            @keyframes slideInFromBottom {
                0% {
                    opacity: 0.1;
                    transform: translateY(100%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            @keyframes slideInFromBottomDelay {
                0% {
                    opacity: 0;
                    transform: translateY(100%);
                }
                97% {
                    opacity: 0;
                    transform: translateY(100%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
        <style>
            .dialog-container[_ngcontent-ihs-c11] {
                display: block;
                padding: 24px;
                border-radius: 4px;
                box-sizing: border-box;
                overflow: auto;
                -webkit-overflow-scrolling: touch;
                outline: 0;
                width: 100%;
                height: 100%;
                min-height: inherit;
                max-height: inherit;
            }
        </style>
        <style>
            .et-flag[_ngcontent-ihs-c12] {
                display: inline-block;
                height: 19px;
                width: 28px;
            }
            .et-flag.ar-ae[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/arab-flag.svg);
            }
            .et-flag.en-gb[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/uk-flag.svg);
            }
            .et-flag.fr-fr[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/france-flag.svg);
            }
            .et-flag.de-de[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/german-flag.svg);
            }
            .et-flag.it-it[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/italy-flag.svg);
            }
            .et-flag.ru-ru[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/russia-flag.svg);
            }
            .et-flag.es-es[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/spain-flag.svg);
            }
            .et-flag.pl-pl[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/poland-flag.svg);
            }
            .et-flag.nl-nl[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/netherlands-flag.svg);
            }
            .et-flag.en-us[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/usa-flag.svg);
            }
            .et-flag.nb-no[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/norway-flag.svg);
            }
            .et-flag.pt-pt[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/portugal-flag.svg);
            }
            .et-flag.sv-se[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/sweden-flag.svg);
            }
            .et-flag.cs-cz[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/czech-flag.svg);
            }
            .et-flag.ms-my[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/malay-flag.svg);
            }
            .et-flag.da-dk[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/denmark-flag.svg);
            }
            .et-flag.ro-ro[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/romania-flag.svg);
            }
            .et-flag.vi-vn[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/vietnam-flag.svg);
            }
            .et-flag.th-th[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/thailand-flag.svg);
            }
            .et-flag.fi-fi[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/finland-flag.svg);
            }
            .et-flag.zh-tw[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/china-traditional-flag.svg);
            }
            .et-flag.zh-cn[_ngcontent-ihs-c12],
            .et-flag.zh-hk[_ngcontent-ihs-c12],
            .et-flag.zh-mo[_ngcontent-ihs-c12],
            .et-flag.zh-sg[_ngcontent-ihs-c12] {
                background-image: url(https://etoro-cdn.etorostatic.com/web-client/et/img/settings/general/flags/china-flag.svg);
            }
            @font-face {
                font-family: DINOT;
                font-weight: 600;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/dinot/DINOT-Bold.otf) format("truetype");
            }
            @font-face {
                font-family: DINOT;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/dinot/DINOT-Medium.otf) format("truetype");
            }
            @font-face {
                font-family: DINOT;
                font-weight: 300;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/dinot/DINOT.otf) format("truetype");
            }
            @font-face {
                font-family: iconFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/icomoon.ttf) format("truetype");
            }
            @font-face {
                font-family: iconFeedFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/feed/feed.ttf) format("truetype");
            }
            @font-face {
                font-family: iconGeneralFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/general/general.ttf) format("truetype");
            }
            @font-face {
                font-family: iconDiscoveryFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/discover/discover.ttf) format("truetype");
            }
            @font-face {
                font-family: iconNavFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/layout/navigation-layout.ttf) format("truetype");
            }
            @font-face {
                font-family: iconPaymentFont;
                font-weight: 400;
                font-style: normal;
                src: url(https://etoro-cdn.etorostatic.com/web-client/et/fonts/icomoon/general/general-v.2.2.ttf) format("truetype");
            }
            [_nghost-ihs-c12] {
                text-align: center;
                display: block;
                height: 100%;
            }
            @media screen and (min-width: 971px) {
                [_nghost-ihs-c12] .settings-langs-popup-wrap[_ngcontent-ihs-c12] {
                    display: inline-block;
                    vertical-align: middle;
                }
            }
            .settings-langs-popup-wrap[_ngcontent-ihs-c12] {
                background-color: #fff;
                color: #2c2c2c;
                position: relative;
                max-width: 960px;
                padding: 65px 0 80px 120px;
                text-align: center;
            }
            @media screen and (min-width: 741px) and (max-width: 1024px) {
                .settings-langs-popup-wrap[_ngcontent-ihs-c12] {
                    padding: 20px 0 50px 50px;
                    max-width: 90vw;
                }
            }
            .language-name[_ngcontent-ihs-c12] {
                letter-spacing: -0.55px;
            }
            @media (max-width: 767px) {
                [_nghost-ihs-c12] {
                    width: 100vw;
                }
                .settings-langs-popup-wrap[_ngcontent-ihs-c12] {
                    height: 100%;
                    padding: 0;
                }
                .settings-langs-popup-wrap[_ngcontent-ihs-c12] .title[_ngcontent-ihs-c12] {
                    display: flex;
                    align-items: center;
                    line-height: 60px;
                    border-bottom: none;
                    color: #777;
                    background-color: #fff;
                    font-weight: 300;
                    margin: 0;
                    text-decoration: none;
                    text-align: left;
                    font-family: general-font, "Open Sans", Arial, sans-serif;
                    font-size: 1.375rem;
                    letter-spacing: -0.35px;
                    letter-spacing: -0.55px;
                    box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.1);
                    position: relative;
                    z-index: 99;
                }
                .li-wrapper[_ngcontent-ihs-c12] {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .close[_ngcontent-ihs-c12] {
                    display: none;
                }
            }
            .icon-check[_ngcontent-ihs-c12] {
                font-family: general-font, "Open Sans", Arial, sans-serif;
                font-size: 1.375rem;
                letter-spacing: -0.35px;
            }
            @media (min-width: 768px) {
                .icon-check[_ngcontent-ihs-c12] {
                    display: none;
                }
            }
            .back-btn[_ngcontent-ihs-c12] {
                background-color: transparent;
                font-size: 1em;
                color: #bababa;
                height: 60px;
                width: 60px;
                padding-top: 2px;
            }
            @media screen and (min-width: 741px) {
                .back-btn[_ngcontent-ihs-c12] {
                    display: none;
                }
                .title[_ngcontent-ihs-c12]::after {
                    display: block;
                    content: "";
                    width: 50px;
                    height: 3px;
                    background: #6eaf0f;
                    margin: 30px auto;
                }
            }
            .close[_ngcontent-ihs-c12] {
                position: absolute;
                right: 14px;
                top: 6px;
                padding: 10px;
                font-size: 25px;
                color: #777;
                font-weight: 700;
                cursor: pointer;
                text-align: right;
            }
            .title[_ngcontent-ihs-c12] {
                display: inline-block;
                font-size: 34px;
                letter-spacing: -1px;
                font-weight: 400;
                margin-left: -110px;
            }
            .list[_ngcontent-ihs-c12] {
                background-color: #fff;
            }
            @media screen and (min-width: 741px) {
                .list[_ngcontent-ihs-c12] {
                    padding-top: 30px;
                }
            }
            .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] {
                list-style-type: none;
                -moz-column-count: 3;
                column-count: 3;
            }
            .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12] {
                display: inline-block;
                width: 270px;
                margin-bottom: 19px;
                text-align: left;
            }
            .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12] a[_ngcontent-ihs-c12] {
                font-size: 18px;
                text-decoration: none;
                color: #2c2c2c;
                cursor: pointer;
            }
            .rtl-direction[_nghost-ihs-c12],
            .rtl-direction [_nghost-ihs-c12] {
                direction: rtl;
            }
            .rtl-direction[_nghost-ihs-c12] .back-btn[_ngcontent-ihs-c12],
            .rtl-direction [_nghost-ihs-c12] .back-btn[_ngcontent-ihs-c12] {
                transform: rotate(180deg);
            }
            .rtl-direction[_nghost-ihs-c12] .settings-langs-popup-wrap[_ngcontent-ihs-c12],
            .rtl-direction [_nghost-ihs-c12] .settings-langs-popup-wrap[_ngcontent-ihs-c12] {
                padding: 65px 120px 80px 0;
            }
            @media screen and (min-width: 741px) and (max-width: 1024px) {
                .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12] {
                    width: 100%;
                }
                .rtl-direction[_nghost-ihs-c12] .settings-langs-popup-wrap[_ngcontent-ihs-c12],
                .rtl-direction [_nghost-ihs-c12] .settings-langs-popup-wrap[_ngcontent-ihs-c12] {
                    padding: 20px 50px 50px 0;
                    max-width: 90vw;
                }
            }
            .rtl-direction[_nghost-ihs-c12] .close[_ngcontent-ihs-c12],
            .rtl-direction [_nghost-ihs-c12] .close[_ngcontent-ihs-c12] {
                right: auto;
                left: 14px;
                text-align: left;
            }
            @media (max-width: 767px) {
                .selected-language[_ngcontent-ihs-c12] {
                    font-weight: 600;
                }
                .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12] a[_ngcontent-ihs-c12] {
                    width: 100%;
                    text-align: left;
                    padding: 20px 0;
                    font-family: general-font, "Open Sans", Arial, sans-serif;
                    font-size: 1.375rem;
                    letter-spacing: -0.35px;
                    font-weight: 300;
                    display: flex;
                    align-items: center;
                }
                .list[_ngcontent-ihs-c12] {
                    height: calc(100% - 60px);
                }
                .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] {
                    -moz-column-count: unset;
                    column-count: unset;
                    height: 100%;
                    display: block;
                    overflow-y: auto;
                    -webkit-overflow-scrolling: touch;
                    padding: 0 20px;
                }
                .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12] {
                    width: 100%;
                    margin-bottom: 0;
                }
                .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12]:not(:last-child) {
                    border-bottom: 1px solid #ededed;
                }
                .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12] a[_ngcontent-ihs-c12] .et-flag[_ngcontent-ihs-c12] {
                    border-radius: 4px;
                }
                .rtl-direction[_nghost-ihs-c12] .settings-langs-popup-wrap[_ngcontent-ihs-c12],
                .rtl-direction [_nghost-ihs-c12] .settings-langs-popup-wrap[_ngcontent-ihs-c12] {
                    padding: 0;
                }
                .rtl-direction[_nghost-ihs-c12] .settings-langs-popup-wrap[_ngcontent-ihs-c12] .title[_ngcontent-ihs-c12],
                .rtl-direction [_nghost-ihs-c12] .settings-langs-popup-wrap[_ngcontent-ihs-c12] .title[_ngcontent-ihs-c12] {
                    margin-right: 0;
                }
                .rtl-direction[_nghost-ihs-c12] .close[_ngcontent-ihs-c12],
                .rtl-direction [_nghost-ihs-c12] .close[_ngcontent-ihs-c12] {
                    right: auto;
                    left: 0;
                }
            }
            .rtl-direction[_nghost-ihs-c12] .title[_ngcontent-ihs-c12],
            .rtl-direction [_nghost-ihs-c12] .title[_ngcontent-ihs-c12] {
                margin-right: -110px;
                margin-left: 0;
            }
            .rtl-direction[_nghost-ihs-c12] .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12],
            .rtl-direction [_nghost-ihs-c12] .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12] {
                text-align: right;
            }
            @media (max-width: 767px) {
                .rtl-direction[_nghost-ihs-c12] .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12] a[_ngcontent-ihs-c12],
                .rtl-direction [_nghost-ihs-c12] .list[_ngcontent-ihs-c12] ul[_ngcontent-ihs-c12] li[_ngcontent-ihs-c12] a[_ngcontent-ihs-c12] {
                    display: flex;
                    align-items: center;
                    text-align: left;
                }
            }
        </style>