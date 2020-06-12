    <style>@charset "UTF-8";
    p {
        margin: 0
    }

    .p {
        margin-bottom: 15px
    }

    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent
    }

    body, html {
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    body {
        color: #424b59;
        font-family: Roboto, sans-serif;
        font-size: 16px;
        font-weight: 400
    }

    h1, h2, h3, h4, h5, h6, p {
        margin-top: 0
    }

    p:last-child {
        margin: 0
    }

    a {
        color: #0064ad;
        text-decoration: none
    }

    :focus {
        outline: 0
    }

    .h-l {
        cursor: pointer
    }

    .l--container, .l-0 {
        width: 100%
    }

    @media (max-width: 767px) {
        .l--container, .l-0 {
            padding-left: 16px;
            padding-right: 16px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .l--container, .l-0 {
            padding-left: 32px;
            padding-right: 32px
        }
    }

    @media (min-width: 1024px) {
        .l--container, .l-0 {
            max-width: 1164px;
            margin: 0 auto;
            padding-left: 32px;
            padding-right: 32px
        }
    }

    .container {
        max-width: 1100px;
        margin: 0 auto
    }

    .main {
        position: relative
    }

    @media (max-width: 767px) {
        .hide-for__mobile {
            display: none !important
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .hide-for__tablet {
            display: none !important
        }
    }

    @media (min-width: 1024px) {
        .hide-for__desktop {
            display: none !important
        }
    }

    .l-00, .s--container {
        max-width: 785px;
        margin: 0 auto
    }

    @media (max-width: 767px) {
        .l-00, .s--container {
            padding: 0 15px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .l-00, .s--container {
            padding: 0 15px
        }
    }

    .pt-header {
        padding-top: 64px !important
    }

    @media (max-width: 767px) {
        .pt-header {
            padding-top: 46px !important
        }
    }

    .pt-64 {
        padding-top: 64px !important
    }

    .pb-64 {
        padding-bottom: 64px !important
    }

    .pt-0 {
        padding-top: 0 !important
    }

    @media (max-width: 767px) {
        .pt-0 {
            padding-top: 32px !important
        }
    }

    .text-left {
        text-align: left !important
    }

    .pb-0 {
        padding-bottom: 0 !important
    }

    .mt-0 {
        margin-top: 0 !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    section {
        padding-top: 64px !important;
        padding-bottom: 64px !important
    }

    @media (max-width: 767px) {
        section {
            padding-top: 32px !important;
            padding-bottom: 32px !important
        }
    }

    .readmore {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        margin-top: 10px;
        cursor: pointer
    }

    .link-arrow {
        margin-left: 5px !important;
        width: 11px
    }

    .readmore-link {
        margin-left: 10px
    }

    .youtube-video {
        width: 100%;
        height: 442px;
        border: 0
    }

    .lb {
        padding-bottom: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #e7eef5
    }

    .spinner-center-wrapper {
        z-index: 2000000000
    }

    .reload__wrap {
        left: 0;
        top: 60px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        min-height: 60px;
        position: fixed;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        background-color: #e89b00;
        z-index: 99
    }

    @media (min-width: 1024px) {
        .reload__wrap {
            padding: 0 32px
        }
    }

    @media (max-width: 767px) {
        .reload__wrap {
            top: 46px;
            display: block;
            padding: 16px;
            text-align: center
        }
    }

    .reload__content {
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        color: #fff;
        font-weight: 700;
        text-align: center
    }

    @media (max-width: 767px) {
        .reload__content {
            margin-bottom: 16px
        }
    }

    .reload__btn {
        display: inline-block;
        padding: 0 20px;
        border: 0;
        color: #fff;
        font-size: 16px;
        line-height: 34px;
        -webkit-border-radius: 17px;
        border-radius: 17px;
        text-align: center;
        background-color: #e89b00;
        -webkit-transition: background .3s ease, border .3s ease, color .3s ease;
        -o-transition: background .3s ease, border .3s ease, color .3s ease;
        transition: background .3s ease, border .3s ease, color .3s ease;
        cursor: pointer
    }

    .reload__btn:hover {
        background-color: #fa0
    }

    .h--lg {
        color: #424b59;
        font-weight: 300
    }

    @media (max-width: 767px) {
        .h--lg {
            font-size: 22px;
            line-height: 36px
        }
    }

    @media (min-width: 768px) {
        .h--lg {
            font-size: 44px;
            line-height: 54px
        }
    }

    .h--md {
        color: #424b59;
        font-weight: 300
    }

    @media (max-width: 767px) {
        .h--md {
            font-size: 22px;
            line-height: 30px
        }
    }

    @media (min-width: 768px) {
        .h--md {
            font-size: 32px;
            line-height: 42px;
            margin-bottom: 20px
        }
    }

    .h--sm {
        color: #424b59;
        font-weight: 300
    }

    @media (max-width: 767px) {
        .h--sm {
            font-size: 16px;
            line-height: 24px
        }
    }

    @media (min-width: 768px) {
        .h--sm {
            font-size: 20px;
            line-height: 30px
        }
    }

    .h--xs, .title--supersmall {
        color: #0282d5;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase
    }

    .h--is-inverse {
        color: #fff
    }

    .p--lg {
        color: #424b59;
        font-weight: 300
    }

    @media (max-width: 767px) {
        .p--lg {
            font-size: 16px;
            line-height: 24px
        }
    }

    @media (min-width: 768px) {
        .p--lg {
            font-size: 18px;
            line-height: 26px
        }
    }

    .p--md {
        color: #424b59;
        font-weight: 300
    }

    @media (max-width: 767px) {
        .p--md {
            font-size: 16px;
            line-height: 24px
        }
    }

    @media (min-width: 768px) {
        .p--md {
            font-size: 18px;
            line-height: 32px
        }
    }

    .p--sm {
        color: #424b59;
        font-weight: 300
    }

    @media (max-width: 767px) {
        .p--sm {
            font-size: 16px;
            line-height: 24px
        }
    }

    @media (min-width: 768px) {
        .p--sm {
            font-size: 16px;
            line-height: 26px
        }
    }

    .p--is-inverse {
        color: #fff
    }

    .p--new {
        font-weight: 300;
        font-size: 24px;
        line-height: 38px
    }

    @media (max-width: 767px) {
        .p--new {
            font-size: 18px;
            line-height: 26px
        }
    }

    .blue {
        color: #0282d5;
        font-weight: 300
    }

    @media (max-width: 767px) {
        .blue {
            font-size: 22px !important;
            line-height: 30px
        }
    }

    @media (min-width: 768px) {
        .blue {
            font-size: 32px !important;
            line-height: 42px
        }
    }

    .center {
        text-align: center !important
    }

    .bold {
        color: #424b59;
        line-height: 28px;
        font-size: 20px;
        font-weight: 400
    }

    .button-filled__primary, .button-filled__warning {
        display: inline-block;
        vertical-align: middle;
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer;
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: 0;
        font-size: 0;
        text-align: center;
        white-space: nowrap;
        -webkit-transition: background .3s ease, border .3s ease, color .3s ease;
        -o-transition: background .3s ease, border .3s ease, color .3s ease;
        transition: background .3s ease, border .3s ease, color .3s ease
    }

    .button-filled__primary:focus, .button-filled__primary:hover, .button-filled__warning:focus, .button-filled__warning:hover {
        outline: 0
    }

    @media (max-width: 767px) {
        .button-filled__primary, .button-filled__warning {
            height: 40px;
            line-height: 38px;
            padding: 0 30px;
            -webkit-border-radius: 20px;
            border-radius: 20px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .button-filled__primary, .button-filled__warning {
            height: 44px;
            line-height: 42px;
            padding: 0 30px;
            -webkit-border-radius: 22px;
            border-radius: 22px
        }
    }

    @media (min-width: 1024px) {
        .button-filled__primary, .button-filled__warning {
            height: 44px;
            line-height: 42px;
            padding: 0 35px;
            -webkit-border-radius: 22px;
            border-radius: 22px
        }
    }

    .button-filled__primary--small, .button-filled__warning--small {
        display: inline-block;
        vertical-align: middle;
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer;
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: 0;
        font-size: 0;
        text-align: center;
        white-space: nowrap;
        -webkit-transition: background .3s ease, border .3s ease, color .3s ease;
        -o-transition: background .3s ease, border .3s ease, color .3s ease;
        transition: background .3s ease, border .3s ease, color .3s ease;
        height: 34px;
        line-height: 32px;
        padding: 0 20px;
        -webkit-border-radius: 17px;
        border-radius: 17px
    }

    .button-filled__primary--small:focus, .button-filled__primary--small:hover, .button-filled__warning--small:focus, .button-filled__warning--small:hover {
        outline: 0
    }

    .button-filled__primary--small .button-text, .button-filled__warning--small .button-text {
        font-size: 15px;
        font-weight: 400;
        text-transform: none
    }

    .button-outline__primary, .button-outline__warning {
        display: inline-block;
        vertical-align: middle;
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer;
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: 0;
        font-size: 0;
        text-align: center;
        white-space: nowrap;
        -webkit-transition: background .3s ease, border .3s ease, color .3s ease;
        -o-transition: background .3s ease, border .3s ease, color .3s ease;
        transition: background .3s ease, border .3s ease, color .3s ease
    }

    .button-outline__primary:focus, .button-outline__primary:hover, .button-outline__warning:focus, .button-outline__warning:hover {
        outline: 0
    }

    @media (max-width: 767px) {
        .button-outline__primary, .button-outline__warning {
            height: 38px;
            line-height: 36px;
            padding: 0 30px;
            -webkit-border-radius: 19px;
            border-radius: 19px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .button-outline__primary, .button-outline__warning {
            height: 42px;
            line-height: 40px;
            padding: 0 30px;
            -webkit-border-radius: 21px;
            border-radius: 21px
        }
    }

    @media (min-width: 1024px) {
        .button-outline__primary, .button-outline__warning {
            height: 42px;
            line-height: 40px;
            padding: 0 35px;
            -webkit-border-radius: 21px;
            border-radius: 21px
        }
    }

    .button-outline__primary--small, .button-outline__warning--small {
        display: inline-block;
        vertical-align: middle;
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer;
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: 0;
        font-size: 0;
        text-align: center;
        white-space: nowrap;
        -webkit-transition: background .3s ease, border .3s ease, color .3s ease;
        -o-transition: background .3s ease, border .3s ease, color .3s ease;
        transition: background .3s ease, border .3s ease, color .3s ease;
        height: 32px;
        line-height: 30px;
        padding: 0 20px;
        -webkit-border-radius: 16px;
        border-radius: 16px
    }

    .button-outline__primary--small:focus, .button-outline__primary--small:hover, .button-outline__warning--small:focus, .button-outline__warning--small:hover {
        outline: 0
    }

    .button-outline__primary--small .button-text, .button-outline__warning--small .button-text {
        font-size: 15px;
        font-weight: 400;
        text-transform: none
    }

    .button-filled__primary {
        background-color: #0282d5;
        border: 1px solid #0282d5;
        color: #fff
    }

    .button-filled__primary:hover {
        background-color: #0291f0;
        border: 1px solid #0291f0;
        color: #fff
    }

    .button-filled__warning {
        background-color: #e89b00;
        border: 1px solid #e89b00;
        color: #fff
    }

    .button-filled__warning:hover {
        background-color: #fa0;
        border: 1px solid #fa0;
        color: #fff
    }

    .button-filled__warning--small {
        background-color: #e89b00;
        border: 1px solid #e89b00;
        color: #fff
    }

    .button-filled__warning--small:hover {
        background-color: #fa0;
        border: 1px solid #fa0;
        color: #fff
    }

    .button-outline__primary {
        background-color: #000;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #000;
        border: 1px solid transparent;
        color: #0282d5;
        -webkit-box-shadow: 0 0 0 1px #0282d5;
        box-shadow: 0 0 0 1px #0282d5
    }

    .button-outline__primary:hover {
        background-color: #000;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #0282d5;
        color: #0282d5
    }

    .button-outline__warning {
        background-color: #000;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #000;
        border: 1px solid transparent;
        color: #e89b00;
        -webkit-box-shadow: 0 0 0 1px #e89b00;
        box-shadow: 0 0 0 1px #e89b00
    }

    .button-outline__warning:hover {
        background-color: #000;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #e89b00;
        color: #e89b00
    }

    .button-outline__warning--small {
        background-color: #000;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #000;
        border: 1px solid transparent;
        color: #e89b00;
        -webkit-box-shadow: 0 0 0 1px #e89b00;
        box-shadow: 0 0 0 1px #e89b00
    }

    .button-outline__warning--small:hover {
        background-color: #000;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #e89b00;
        color: #e89b00
    }

    .button-text {
        text-transform: uppercase
    }

    @media (max-width: 767px) {
        .button-text {
            font-size: 14px;
            font-weight: 500
        }
    }

    @media (min-width: 768px) {
        .button-text {
            font-size: 16px;
            font-weight: 500
        }
    }

    @media (min-width: 1024px) {
        .button-text._r--m-t {
            display: none
        }
    }

    @media (max-width: 1023px) {
        .button-text._r--d {
            display: none
        }
    }

    .button-group {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .button-group > :not(:last-child) {
        margin-right: 20px
    }

    .button-social {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        height: 32px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        -webkit-transition: none;
        -o-transition: none;
        transition: none
    }

    .button-social__icon {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        width: 32px;
        height: 32px;
        background-color: #000;
        background-color: rgba(0, 0, 0, .07);
        -webkit-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px
    }

    .button-social__action {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-flex: 1;
        -webkit-flex: 1 1 0%;
        -ms-flex: 1 1 0%;
        flex: 1 1 0%;
        padding: 0 16px 0 10px
    }

    .button-social__name {
        color: #fff;
        font-size: 14px;
        font-weight: 100;
        line-height: 16px;
        white-space: nowrap
    }

    .button-social.facebook {
        background-color: #4065b4
    }

    .button-social.facebook:hover {
        background-color: #34569b
    }

    .button-social.twitter {
        background-color: #0693e3
    }

    .button-social.twitter:hover {
        background-color: #2ba7ed
    }

    .button-social.youtube {
        background-color: #dd2c29
    }

    .button-social.youtube:hover {
        background-color: #de0520
    }

    .avatar--status {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        border: 1px solid #fff;
        position: relative
    }

    .avatar--status__image {
        width: 100%;
        max-width: 48px;
        height: 100%;
        max-height: 48px;
        -webkit-border-radius: 50%;
        border-radius: 50%
    }

    .avatar--status__status {
        display: block;
        position: absolute;
        right: 2px;
        bottom: 2px;
        z-index: 5;
        width: 10px;
        height: 10px;
        border: 3px solid #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%
    }

    .avatar--status__status.is--offline {
        background-color: #fd9598
    }

    .avatar--status__status.is--online {
        background-color: #04be5b
    }

    .avatar {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        width: 54px;
        height: 54px;
        border: 1px solid #000;
        border: 1px solid transparent
    }

    .avatar__image {
        width: 100%;
        max-width: 48px;
        height: 100%;
        max-height: 48px;
        -webkit-border-radius: 50%;
        border-radius: 50%
    }

    .avatar--sm, .avatar--small {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        width: 32px;
        height: 32px
    }

    .avatar--sm__image, .avatar--small__image {
        width: 100%;
        max-width: 32px;
        height: 100%;
        max-height: 32px;
        -webkit-border-radius: 50%;
        border-radius: 50%
    }

    .avatar--md, .avatar--medium {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        width: 82px;
        height: 82px;
        border: 1px solid #e7e7e7
    }

    .avatar--md__image, .avatar--medium__image {
        width: 100%;
        max-width: 76px;
        height: 100%;
        max-height: 76px;
        -webkit-border-radius: 50%;
        border-radius: 50%
    }

    .avatar--large, .avatar--lg {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        width: 102px;
        height: 102px;
        border: 1px solid #e7e7e7
    }

    .avatar--large__image, .avatar--lg__image {
        width: 100%;
        max-width: 96px;
        height: 100%;
        max-height: 96px;
        -webkit-border-radius: 50%;
        border-radius: 50%
    }

    .avatar--placeholder {
        background-position: 50% 50%;
        background-repeat: no-repeat
    }

    @media (max-width: 767px) {
        .avatar--placeholder {
            width: 20px;
            height: 20px;
            -webkit-background-size: 20px 20px;
            background-size: 20px 20px;
            background-image: url(<?php echo URLROOT.'/';?>assets/avatar/avatar_placeholder__40x403511.svg?v1727f34dc38)
        }
    }

    @media (min-width: 768px) {
        .avatar--placeholder {
            width: 40px;
            height: 40px;
            -webkit-background-size: 40px 40px;
            background-size: 40px 40px;
            background-image: url(<?php echo URLROOT.'/';?>assets/avatar/avatar_placeholder__40x403511.svg?v1727f34dc38)
        }
    }

    ._c--primary {
        color: #0282d5 !important
    }

    .icon {
        display: inline-block;
        vertical-align: middle;
        width: 20px;
        height: 20px;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        -webkit-background-size: 20px 20px;
        background-size: 20px 20px;
        outline: 0
    }

    .icon.i-s--50 {
        width: 50px !important;
        height: 50px !important;
        -webkit-background-size: 50px 50px !important;
        background-size: 50px 50px !important
    }

    .icon.icon__order {
        width: 57px;
        height: 45px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon__order__57x454216.svg?v1727f34dc98);
        -webkit-background-size: 57px 45px;
        background-size: 57px 45px
    }

    .icon.icon__writer {
        width: 53px;
        height: 54px;
        background-image: url<?php echo URLROOT.'/';?>assets/icon/icon__writer__53x549072.svg?v1727f34dc9c);
        -webkit-background-size: 53px 54px;
        background-size: 53px 54px
    }

    .icon.icon__essay {
        width: 47px;
        height: 60px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon__essay__47x60e598.svg?v1727f34dc94);
        -webkit-background-size: 47px 60px;
        background-size: 47px 60px
    }

    .icon.icon__case {
        width: 57px;
        height: 45px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon__case__57x45e598.svg?v1727f34dc94);
        -webkit-background-size: 57px 45px;
        background-size: 57px 45px
    }

    .icon.icon__hire {
        width: 53px;
        height: 54px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon__hire__53x544216.svg?v1727f34dc98);
        -webkit-background-size: 53px 54px;
        background-size: 53px 54px
    }

    .icon.icon__paper {
        width: 44px;
        height: 58px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon__paper__44x584216.svg?v1727f34dc98);
        -webkit-background-size: 44px 58px;
        background-size: 44px 58px
    }

    .icon.icon__document {
        width: 42px;
        height: 57px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon__document__42x57e598.svg?v1727f34dc94);
        -webkit-background-size: 42px 57px;
        background-size: 42px 57px
    }

    .icon.icon__support {
        width: 60px;
        height: 51px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon__support__60x519072.svg?v1727f34dc9c);
        -webkit-background-size: 60px 51px;
        background-size: 60px 51px
    }

    .icon.icon__pencil {
        width: 50px;
        height: 50px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon-pencil0bb8.svg?v1727f34dc90);
        -webkit-background-size: 60px 51px;
        background-size: 60px 51px
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .icon.icon__pencil {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    @media (max-width: 767px) {
        .icon.icon__pencil {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    .icon.icon__pencil--purple {
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon-pencil-purple0bb8.svg?v1727f34dc90)
    }

    .icon.icon__cards {
        width: 50px;
        height: 50px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon-cards6a55.svg?v1727f34dc8c);
        -webkit-background-size: 47px 41px;
        background-size: 47px 41px
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .icon.icon__cards {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    @media (max-width: 767px) {
        .icon.icon__cards {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    .icon.icon__users {
        width: 50px;
        height: 50px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon-users0bb8.svg?v1727f34dc90);
        -webkit-background-size: 49px 51px;
        background-size: 49px 51px
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .icon.icon__users {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    @media (max-width: 767px) {
        .icon.icon__users {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    .icon.icon__clock {
        width: 50px;
        height: 64px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon-clock6a55.svg?v1727f34dc8c);
        -webkit-background-size: 50px 64px;
        background-size: 50px 64px
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .icon.icon__clock {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    @media (max-width: 767px) {
        .icon.icon__clock {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    .icon.icon__mac {
        width: 56px;
        height: 51px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon-mac0bb8.svg?v1727f34dc90);
        -webkit-background-size: 56px 51px;
        background-size: 56px 51px
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .icon.icon__mac {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    @media (max-width: 767px) {
        .icon.icon__mac {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    .icon.icon__headphone {
        width: 56px;
        height: 64px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/icon-headphone6a55.svg?v1727f34dc8c);
        -webkit-background-size: 56px 64px;
        background-size: 56px 64px
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .icon.icon__headphone {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    @media (max-width: 767px) {
        .icon.icon__headphone {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    .icon.icon__calendar-2 {
        width: 64px;
        height: 64px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/i__calendar_2ab3e.svg?v1727f34dc84);
        -webkit-background-size: 64px 64px;
        background-size: 64px 64px
    }

    @media (max-width: 1023px) {
        .icon.icon__calendar-2 {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    .icon.icon__clock-2 {
        width: 64px;
        height: 64px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/i__clock_24cff.svg?v1727f34dc88);
        -webkit-background-size: 64px 64px;
        background-size: 64px 64px
    }

    @media (max-width: 1023px) {
        .icon.icon__clock-2 {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    .icon.icon__message-2 {
        width: 64px;
        height: 64px;
        background-image: url(<?php echo URLROOT.'/';?>assets/icon/i__message_24cff.svg?v1727f34dc88);
        -webkit-background-size: 64px 64px;
        background-size: 64px 64px
    }

    @media (max-width: 1023px) {
        .icon.icon__message-2 {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }</style>
    <style>.header {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        width: 100%;
        background-color: #1b1e26;
        background-color: rgba(27, 30, 38, .9)
    }

    @media (max-width: 767px) {
        .header {
            height: 46px
        }
    }

    @media (min-width: 768px) {
        .header {
            height: 64px
        }
    }

    @media (min-width: 1024px) {
        .header {
            padding: 0 32px
        }
    }

    @media (min-width: 1024px) {
        .header__mobile-buttons {
            display: none
        }
    }

    @media (max-width: 767px) {
        .header__main {
            height: 46px
        }
    }

    @media (min-width: 768px) {
        .header__main {
            height: 60px
        }
    }

    @media (max-width: 1023px) {
        .header__main {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%
        }
    }

    @media (min-width: 1024px) {
        .header__main {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        .header__main .header__logo {
            height: 40px;
            width: 206px
        }
    }

    .header__nav {
        display: none
    }

    @media (min-width: 1024px) {
        .header__nav {
            display: block
        }
    }

    .header__inner--right {
        display: none;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    @media (min-width: 1024px) {
        .header__inner--right {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }
    }

    .header__dba {
        margin-right: 24px;
        padding-right: 25px;
        border-right: 1px solid #545b65;
        opacity: .7;
        color: #fff;
        font-size: 15px;
        line-height: 28px
    }

    @media (max-width: 1118px) {
        .header__dba {
            display: none
        }
    }

    @media (max-width: 1160px) {
        .header__dba {
            margin-right: 10px;
            padding-right: 11px
        }
    }

    @media (max-width: 767px) {
        .header__auth {
            display: none
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .header__auth {
            padding-right: 32px
        }
    }

    .logo {
        display: block
    }

    @media (max-width: 767px) {
        .logo {
            height: 30px
        }
    }

    @media (min-width: 768px) {
        .logo {
            height: 40px
        }
    }

    @media (max-width: 767px) {
        .logo_img {
            height: 30px
        }
    }

    @media (min-width: 768px) {
        .logo_img {
            height: 40px
        }
    }

    @media screen and (min-width: 1034px) {
        .nav {
            margin-left: 26px
        }
    }

    .nav-ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        list-style: none outside none;
        margin: 0;
        padding: 0
    }

    .nav-li {
        position: relative
    }

    .nav-a {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        height: 40px;
        padding: 0 16px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        cursor: pointer;
        color: #fff;
        font-size: 16px;
        line-height: 18px;
        white-space: nowrap
    }

    .nav-a.disabled {
        cursor: default
    }

    .nav-a.is--active, .nav-a:not(.disabled):hover {
        background-color: #464a51
    }

    .nav-a .arrow-down {
        display: inline-block;
        width: 12px;
        height: 7px;
        margin-bottom: 2px;
        margin-left: 5px;
        background: url(<?php echo URLROOT.'/';?>assets/nav/arrow_down13b0.svg?v1727f34de58) no-repeat 50% 50%;
        -webkit-background-size: 12px 7px;
        background-size: 12px 7px
    }

    .n--auth {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        position: relative
    }

    .n--auth__link {
        margin-right: 16px;
        color: #fff;
        font-size: 16px;
        line-height: 18px
    }

    .subnav {
        display: none;
        position: absolute;
        top: 50px;
        left: 0;
        z-index: 9999;
        width: 260px;
        list-style: none outside none;
        margin: 0;
        padding: 0 0 6px;
        background-color: #1b1e26;
        background-color: rgba(27, 30, 38, .9);
        -webkit-border-radius: 0 0 3px 3px;
        border-radius: 0 0 3px 3px
    }

    .subnav.is--show {
        display: block
    }

    .subnav-a {
        display: block;
        width: 100%;
        padding: 8px 16px;
        color: #fff;
        font-size: 16px;
        line-height: 20px;
        white-space: nowrap
    }

    .subnav-a.disabled {
        cursor: default
    }

    .subnav-a:not(.disabled):hover {
        background-color: #fff;
        background-color: rgba(255, 255, 255, .1)
    }

    .m-nav {
        position: fixed;
        z-index: 115;
        padding: 8px 0;
        overflow-y: auto;
        background-color: #1b1e26;
        -webkit-transition: -webkit-transform .3s ease;
        transition: -webkit-transform .3s ease;
        -o-transition: transform .3s ease;
        transition: transform .3s ease;
        transition: transform .3s ease, -webkit-transform .3s ease;
        opacity: .95
    }

    @media (max-width: 767px) {
        .m-nav {
            top: 46px;
            height: -webkit-calc(100vh - 46px);
            height: calc(100vh - 46px)
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .m-nav {
            top: 60px;
            height: -webkit-calc(100vh - 60px);
            height: calc(100vh - 60px)
        }
    }

    .m-nav__main {
        left: 0;
        width: 100%;
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%)
    }

    @media (min-width: 1024px) {
        .m-nav__main {
            display: none
        }
    }

    .m-nav__main.active {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }

    .m-nav__user {
        right: 0;
        width: auto;
        -webkit-transform: translateX(250px);
        -ms-transform: translateX(250px);
        transform: translateX(250px)
    }

    @media (min-width: 1023px) {
        .m-nav__user {
            display: none
        }
    }

    .m-nav__user.active {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }

    .m-nav__sub-ul {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 125;
        width: 100%;
        height: 100%;
        padding: 16px 0 8px;
        background-color: #1b1e26;
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%);
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .m-nav__sub-ul.active {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }

    .m-nav__a, .m-nav__parent {
        width: 100%;
        display: block;
        padding: 0 20px;
        color: #dae0e6;
        font-size: 16px;
        line-height: 40px;
        cursor: pointer
    }

    .m-nav__parent {
        position: relative;
        padding-right: 40px
    }

    .m-nav__parent:before {
        display: block;
        content: '';
        position: absolute;
        top: 14px;
        right: 20px;
        width: 6px;
        height: 10px;
        background: url(<?php echo URLROOT.'/';?>assets/nav/arrow_right__6x10-gray2249.svg?v1727f34de5c) no-repeat 0 50%;
        -webkit-background-size: 6px 10px;
        background-size: 6px 10px
    }

    .m-nav__back {
        display: block;
        position: relative;
        margin-bottom: 8px;
        padding: 7px 20px 7px 40px;
        color: #d3d8de;
        font-size: 12px;
        font-weight: 500;
        line-height: 18px;
        text-transform: uppercase;
        cursor: pointer
    }

    .m-nav__back:before {
        display: block;
        content: '';
        position: absolute;
        top: 11px;
        left: 20px;
        width: 6px;
        height: 10px;
        background: url(<?php echo URLROOT.'/';?>assets/nav/arrow_left__6x102249.svg?v1727f34de5c) no-repeat 0 50%;
        -webkit-background-size: 6px 10px;
        background-size: 6px 10px
    }

    .m-nav__divider {
        width: 100%;
        height: 1px;
        margin: 8px 0;
        background-color: #3c3e45
    }

    .m-nav--active {
        overflow: hidden
    }

    @media (max-width: 1023px) {
        .m-nav--active .m-nav__overlay {
            display: block;
            opacity: 1
        }
    }

    .m-nav__button {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        position: absolute;
        top: 0;
        z-index: 120;
        cursor: pointer
    }

    @media (max-width: 767px) {
        .m-nav__button {
            width: 48px;
            height: 46px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .m-nav__button {
            width: 60px;
            height: 60px
        }
    }

    .m-nav__button.active {
        background-color: #1b1e26
    }

    .m-nav__button.for__m-nav-main {
        left: 0;
        border-right: 1px solid #1b1e26
    }

    @media (min-width: 1024px) {
        .m-nav__button.for__m-nav-main {
            display: none
        }
    }

    .m-nav__button.for__m-nav-user {
        right: 0;
        border-left: 1px solid #1b1e26
    }

    @media (min-width: 1023px) {
        .m-nav__button.for__m-nav-user {
            display: none
        }
    }

    .m-nav__overlay {
        display: none;
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 110;
        opacity: 0;
        background-color: #000;
        background-color: rgba(0, 0, 0, .7);
        -webkit-transition: opacity .3s ease;
        -o-transition: opacity .3s ease;
        transition: opacity .3s ease
    }

    @media (max-width: 767px) {
        .m-nav__overlay {
            top: 46px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .m-nav__overlay {
            top: 60px
        }
    }

    .m-nav__b {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 20px
    }

    .m-nav__b:hover {
        background: #31343b
    }

    .m-nav__app {
        margin: 130px 0 12px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .m-nav__app__btn {
        height: 50px;
        padding-left: 15px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        color: #fff;
        font-weight: 700;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        background-color: #000;
        text-decoration: none;
        cursor: pointer
    }

    .m-nav__app__btn span:first-child {
        width: 100%;
        display: inline-block;
        font-size: 10px;
        line-height: 1
    }

    .m-nav__app__btn.app-store {
        width: 138px
    }

    .m-nav__app__btn.google-play {
        width: 155px
    }

    .m-nav__app__btn.google-play span:first-child {
        text-transform: uppercase
    }

    .m-nav__app__btn:first-child {
        margin-right: 12px
    }

    .m-nav__app__logo {
        margin-right: 8px
    }

    .n--icon {
        display: inline-block;
        vertical-align: middle;
        width: 16px;
        height: 16px;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        -webkit-background-size: 16px 16px;
        background-size: 16px 16px;
        -webkit-transition: background-image .3s ease;
        -o-transition: background-image .3s ease;
        transition: background-image .3s ease
    }

    .n--icon__main-nav {
        height: 15px;
        background-image: url(<?php echo URLROOT.'/';?>assets/nav/icon__main_nav__16x152249.svg?v1727f34de5c);
        -webkit-background-size: 16px 15px;
        background-size: 16px 15px
    }

    .n--icon__main-nav--tablet {
        width: 22px;
        height: 15px;
        background-image: url(<?php echo URLROOT.'/';?>assets/nav/icon__main_nav__22x152249.svg?v1727f34de5c);
        -webkit-background-size: 22px 15px;
        background-size: 22px 15px
    }

    .n--icon__user-nav {
        width: 16px;
        height: 16px;
        background-image: url(<?php echo URLROOT.'/';?>assets/nav/icon__user_nav__16x16773d.svg?v1727f34de60);
        -webkit-background-size: 16px 16px;
        background-size: 16px 16px
    }

    .n--icon__nav-close {
        background-image: url(<?php echo URLROOT.'/';?>assets/nav/icon__nav_close__14x142249.svg?v1727f34de5c);
        -webkit-background-size: 14px 14px;
        background-size: 14px 14px
    }

    @media (min-width: 768px) {
        .m-nav__button .n--icon__main-nav {
            display: none
        }
    }

    @media (max-width: 767px) {
        .m-nav__button .n--icon__main-nav--tablet {
            display: none
        }
    }

    @media (min-width: 1024px) {
        .m-nav__button .n--icon__main-nav--tablet {
            display: none
        }
    }

    @media (min-width: 1023px) {
        .m-nav__button .n--icon__user-nav {
            display: none
        }
    }

    .m-nav__button .n--icon__nav-close {
        display: none
    }

    .m-nav__button.active .n--icon__main-nav, .m-nav__button.active .n--icon__main-nav--tablet {
        display: none
    }

    .m-nav__button.active .n--icon__user-nav {
        display: none
    }

    @media (max-width: 1023px) {
        .m-nav__button.active .n--icon__nav-close {
            display: inline-block
        }
    }</style>
    <style>.s-1 {
        position: relative;
        overflow: hidden;
        background-color: #000
    }

    @media (max-width: 767px) {
        .s-1 {
            min-height: 905px;
            max-height: 1300px
        }
    }

    @media (min-width: 768px) {
        .s-1 {
            height: 100vh;
            min-height: 974px;
            max-height: 1300px
        }
    }

    @media (min-width: 1024px) {
        .s-1 {
            min-height: 794px
        }
    }

    .ios.ipad.tablet .s-1 {
        height: -webkit-calc(100vh - 56px);
        height: calc(100vh - 56px)
    }

    .s-1 .l-0 {
        position: relative;
        z-index: 50
    }

    @media (max-width: 767px) {
        .s-1 .h--lg {
            margin-bottom: 8px;
            text-align: center
        }
    }

    @media (min-width: 768px) {
        .s-1 .h--lg {
            margin-bottom: 16px
        }
    }

    @media (max-width: 767px) {
        .s-1 .p--lg {
            margin-bottom: 16px;
            text-align: center
        }
    }

    @media (min-width: 768px) {
        .s-1 .p--lg {
            margin-bottom: 32px
        }
    }

    .s-1__wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        z-index: 10
    }

    @media (max-width: 767px) {
        .s-1__wrapper {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 32px
        }
    }

    @media (min-width: 768px) {
        .s-1__wrapper {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .s-1__wrapper {
            margin-top: 170px
        }
    }

    @media (min-width: 1024px) {
        .s-1__wrapper {
            margin-top: 78px
        }
    }

    @media (max-width: 767px) {
        .s-1__left {
            margin-bottom: 16px
        }
    }

    @media (min-width: 768px) {
        .s-1__left {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 0%;
            -ms-flex: 1 1 0%;
            flex: 1 1 0%
        }
    }

    @media (max-width: 767px) {
        .s-1__left .button-group {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .s-1__left .button-group > :not(:last-child) {
            margin-right: 0;
            margin-bottom: 16px
        }
    }

    @media (min-width: 768px) {
        .s-1__left .button-group {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }
    }

    @media (min-width: 768px) {
        .s-1__right {
            margin-left: 20px
        }
    }

    .s-1__bottom {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 10
    }

    .s-1__bottom .h--md, .s-1__bottom .h--sm {
        text-align: center
    }

    .s-1__bottom .h--md {
        margin: 0
    }

    @media (max-width: 767px) {
        .s-1__bottom .h--md {
            display: none
        }
    }

    @media (min-width: 768px) {
        .s-1__bottom .h--md {
            padding-bottom: 32px
        }
    }

    .s-1__bottom .h--sm {
        margin: 0
    }

    @media (max-width: 767px) {
        .s-1__bottom .h--sm {
            padding: 16px
        }
    }

    @media (min-width: 768px) {
        .s-1__bottom .h--sm {
            padding: 32px
        }
    }

    .s-1__divider {
        width: 100%;
        height: 1px;
        background-color: #fff;
        background-color: rgba(255, 255, 255, .2)
    }

    .bg__image--top {
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        font-family: 'object-fit: cover; object-position: 0 0;';
        -o-object-position: 50% 0;
        object-position: 50% 0
    }
    </style>
    <style>.sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }

    [role=button] {
        cursor: pointer
    }

    .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent
    }

    .dropdown, .dropup {
        position: relative
    }

    .dropdown-toggle:focus {
        outline: 0
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 90;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        list-style: none;
        font-size: 14px;
        text-align: left;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        -webkit-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        -webkit-background-clip: padding-box;
        background-clip: padding-box
    }

    .dropdown-menu.pull-right {
        right: 0;
        left: auto
    }

    .dropdown-menu .divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }

    .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap
    }

    .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
        text-decoration: none;
        color: #262626;
        background-color: #f5f5f5
    }

    .dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        background-color: #337ab7
    }

    .dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
        color: #777
    }

    .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
        text-decoration: none;
        background-color: transparent;
        background-image: none;
        cursor: not-allowed
    }

    .open > .dropdown-menu {
        display: block
    }

    .open > a {
        outline: 0
    }

    .dropdown-menu-right {
        left: auto;
        right: 0
    }

    .dropdown-menu-left {
        left: 0;
        right: auto
    }

    .dropdown-header {
        display: block;
        padding: 3px 20px;
        font-size: 12px;
        line-height: 1.42857143;
        color: #777;
        white-space: nowrap
    }

    .dropdown-backdrop {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        z-index: 990
    }

    .pull-right > .dropdown-menu {
        right: 0;
        left: auto
    }

    .dropup .caret, .navbar-fixed-bottom .dropdown .caret {
        border-top: 0;
        border-bottom: 4px dashed;
        content: ""
    }

    .dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-bottom: 2px
    }

    @media (min-width: 768px) {
        .navbar-right .dropdown-menu {
            left: auto;
            right: 0
        }

        .navbar-right .dropdown-menu-left {
            left: 0;
            right: auto
        }
    }

    .clearfix:after, .clearfix:before {
        content: " ";
        display: table
    }

    .clearfix:after {
        clear: both
    }

    .center-block {
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .pull-right {
        float: right !important
    }

    .pull-left {
        float: left !important
    }

    .hide {
        display: none !important
    }

    .show {
        display: block !important
    }

    .invisible {
        visibility: hidden
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }

    .hidden {
        display: none !important
    }

    .affix {
        position: fixed
    }

    .c-3__button-decrement, .c-3__button-increment, .dropdown, .select {
        display: none;
        opacity: 0
    }

    .c-3__button-decrement:hover, .c-3__button-increment:hover {
        background-color: #424b59
    }

    .desktop .c-1 .dropdown, .desktop .c-2 .dropdown, .desktop .c-7 .dropdown, .desktop .c-8 .dropdown {
        display: block;
        opacity: 1
    }

    .desktop .c-1 .select, .desktop .c-2 .select, .desktop .c-7 .select, .desktop .c-8 .select {
        display: none
    }

    .desktop .c-1 .c-3__button-decrement, .desktop .c-1 .c-3__button-increment, .desktop .c-2 .c-3__button-decrement, .desktop .c-2 .c-3__button-increment, .desktop .c-7 .c-3__button-decrement, .desktop .c-7 .c-3__button-increment, .desktop .c-8 .c-3__button-decrement, .desktop .c-8 .c-3__button-increment {
        display: block;
        opacity: 1
    }

    .android.mobile .c-1 .select, .android.mobile .c-2 .select, .android.mobile .c-7 .select, .android.mobile .c-8 .select, .android.tablet .c-1 .select, .android.tablet .c-2 .select, .android.tablet .c-7 .select, .android.tablet .c-8 .select, .blackberry.mobile .c-1 .select, .blackberry.mobile .c-2 .select, .blackberry.mobile .c-7 .select, .blackberry.mobile .c-8 .select, .blackberry.tablet .c-1 .select, .blackberry.tablet .c-2 .select, .blackberry.tablet .c-7 .select, .blackberry.tablet .c-8 .select, .fxos.mobile .c-1 .select, .fxos.mobile .c-2 .select, .fxos.mobile .c-7 .select, .fxos.mobile .c-8 .select, .fxos.tablet .c-1 .select, .fxos.tablet .c-2 .select, .fxos.tablet .c-7 .select, .fxos.tablet .c-8 .select, .ios.ipad.tablet .c-1 .select, .ios.ipad.tablet .c-2 .select, .ios.ipad.tablet .c-7 .select, .ios.ipad.tablet .c-8 .select, .ios.iphone.mobile .c-1 .select, .ios.iphone.mobile .c-2 .select, .ios.iphone.mobile .c-7 .select, .ios.iphone.mobile .c-8 .select, .ios.ipod.mobile .c-1 .select, .ios.ipod.mobile .c-2 .select, .ios.ipod.mobile .c-7 .select, .ios.ipod.mobile .c-8 .select, .meego .c-1 .select, .meego .c-2 .select, .meego .c-7 .select, .meego .c-8 .select, .windows.mobile .c-1 .select, .windows.mobile .c-2 .select, .windows.mobile .c-7 .select, .windows.mobile .c-8 .select, .windows.tablet .c-1 .select, .windows.tablet .c-2 .select, .windows.tablet .c-7 .select, .windows.tablet .c-8 .select {
        display: block;
        opacity: 1
    }

    .android.mobile .c-1 .dropdown, .android.mobile .c-2 .dropdown, .android.mobile .c-7 .dropdown, .android.mobile .c-8 .dropdown, .android.tablet .c-1 .dropdown, .android.tablet .c-2 .dropdown, .android.tablet .c-7 .dropdown, .android.tablet .c-8 .dropdown, .blackberry.mobile .c-1 .dropdown, .blackberry.mobile .c-2 .dropdown, .blackberry.mobile .c-7 .dropdown, .blackberry.mobile .c-8 .dropdown, .blackberry.tablet .c-1 .dropdown, .blackberry.tablet .c-2 .dropdown, .blackberry.tablet .c-7 .dropdown, .blackberry.tablet .c-8 .dropdown, .fxos.mobile .c-1 .dropdown, .fxos.mobile .c-2 .dropdown, .fxos.mobile .c-7 .dropdown, .fxos.mobile .c-8 .dropdown, .fxos.tablet .c-1 .dropdown, .fxos.tablet .c-2 .dropdown, .fxos.tablet .c-7 .dropdown, .fxos.tablet .c-8 .dropdown, .ios.ipad.tablet .c-1 .dropdown, .ios.ipad.tablet .c-2 .dropdown, .ios.ipad.tablet .c-7 .dropdown, .ios.ipad.tablet .c-8 .dropdown, .ios.iphone.mobile .c-1 .dropdown, .ios.iphone.mobile .c-2 .dropdown, .ios.iphone.mobile .c-7 .dropdown, .ios.iphone.mobile .c-8 .dropdown, .ios.ipod.mobile .c-1 .dropdown, .ios.ipod.mobile .c-2 .dropdown, .ios.ipod.mobile .c-7 .dropdown, .ios.ipod.mobile .c-8 .dropdown, .meego .c-1 .dropdown, .meego .c-2 .dropdown, .meego .c-7 .dropdown, .meego .c-8 .dropdown, .windows.mobile .c-1 .dropdown, .windows.mobile .c-2 .dropdown, .windows.mobile .c-7 .dropdown, .windows.mobile .c-8 .dropdown, .windows.tablet .c-1 .dropdown, .windows.tablet .c-2 .dropdown, .windows.tablet .c-7 .dropdown, .windows.tablet .c-8 .dropdown {
        display: none
    }

    .android.mobile .c-1 .c-3__button-decrement, .android.mobile .c-1 .c-3__button-increment, .android.mobile .c-2 .c-3__button-decrement, .android.mobile .c-2 .c-3__button-increment, .android.mobile .c-7 .c-3__button-decrement, .android.mobile .c-7 .c-3__button-increment, .android.mobile .c-8 .c-3__button-decrement, .android.mobile .c-8 .c-3__button-increment, .android.tablet .c-1 .c-3__button-decrement, .android.tablet .c-1 .c-3__button-increment, .android.tablet .c-2 .c-3__button-decrement, .android.tablet .c-2 .c-3__button-increment, .android.tablet .c-7 .c-3__button-decrement, .android.tablet .c-7 .c-3__button-increment, .android.tablet .c-8 .c-3__button-decrement, .android.tablet .c-8 .c-3__button-increment, .blackberry.mobile .c-1 .c-3__button-decrement, .blackberry.mobile .c-1 .c-3__button-increment, .blackberry.mobile .c-2 .c-3__button-decrement, .blackberry.mobile .c-2 .c-3__button-increment, .blackberry.mobile .c-7 .c-3__button-decrement, .blackberry.mobile .c-7 .c-3__button-increment, .blackberry.mobile .c-8 .c-3__button-decrement, .blackberry.mobile .c-8 .c-3__button-increment, .blackberry.tablet .c-1 .c-3__button-decrement, .blackberry.tablet .c-1 .c-3__button-increment, .blackberry.tablet .c-2 .c-3__button-decrement, .blackberry.tablet .c-2 .c-3__button-increment, .blackberry.tablet .c-7 .c-3__button-decrement, .blackberry.tablet .c-7 .c-3__button-increment, .blackberry.tablet .c-8 .c-3__button-decrement, .blackberry.tablet .c-8 .c-3__button-increment, .fxos.mobile .c-1 .c-3__button-decrement, .fxos.mobile .c-1 .c-3__button-increment, .fxos.mobile .c-2 .c-3__button-decrement, .fxos.mobile .c-2 .c-3__button-increment, .fxos.mobile .c-7 .c-3__button-decrement, .fxos.mobile .c-7 .c-3__button-increment, .fxos.mobile .c-8 .c-3__button-decrement, .fxos.mobile .c-8 .c-3__button-increment, .fxos.tablet .c-1 .c-3__button-decrement, .fxos.tablet .c-1 .c-3__button-increment, .fxos.tablet .c-2 .c-3__button-decrement, .fxos.tablet .c-2 .c-3__button-increment, .fxos.tablet .c-7 .c-3__button-decrement, .fxos.tablet .c-7 .c-3__button-increment, .fxos.tablet .c-8 .c-3__button-decrement, .fxos.tablet .c-8 .c-3__button-increment, .ios.ipad.tablet .c-1 .c-3__button-decrement, .ios.ipad.tablet .c-1 .c-3__button-increment, .ios.ipad.tablet .c-2 .c-3__button-decrement, .ios.ipad.tablet .c-2 .c-3__button-increment, .ios.ipad.tablet .c-7 .c-3__button-decrement, .ios.ipad.tablet .c-7 .c-3__button-increment, .ios.ipad.tablet .c-8 .c-3__button-decrement, .ios.ipad.tablet .c-8 .c-3__button-increment, .ios.iphone.mobile .c-1 .c-3__button-decrement, .ios.iphone.mobile .c-1 .c-3__button-increment, .ios.iphone.mobile .c-2 .c-3__button-decrement, .ios.iphone.mobile .c-2 .c-3__button-increment, .ios.iphone.mobile .c-7 .c-3__button-decrement, .ios.iphone.mobile .c-7 .c-3__button-increment, .ios.iphone.mobile .c-8 .c-3__button-decrement, .ios.iphone.mobile .c-8 .c-3__button-increment, .ios.ipod.mobile .c-1 .c-3__button-decrement, .ios.ipod.mobile .c-1 .c-3__button-increment, .ios.ipod.mobile .c-2 .c-3__button-decrement, .ios.ipod.mobile .c-2 .c-3__button-increment, .ios.ipod.mobile .c-7 .c-3__button-decrement, .ios.ipod.mobile .c-7 .c-3__button-increment, .ios.ipod.mobile .c-8 .c-3__button-decrement, .ios.ipod.mobile .c-8 .c-3__button-increment, .meego .c-1 .c-3__button-decrement, .meego .c-1 .c-3__button-increment, .meego .c-2 .c-3__button-decrement, .meego .c-2 .c-3__button-increment, .meego .c-7 .c-3__button-decrement, .meego .c-7 .c-3__button-increment, .meego .c-8 .c-3__button-decrement, .meego .c-8 .c-3__button-increment, .windows.mobile .c-1 .c-3__button-decrement, .windows.mobile .c-1 .c-3__button-increment, .windows.mobile .c-2 .c-3__button-decrement, .windows.mobile .c-2 .c-3__button-increment, .windows.mobile .c-7 .c-3__button-decrement, .windows.mobile .c-7 .c-3__button-increment, .windows.mobile .c-8 .c-3__button-decrement, .windows.mobile .c-8 .c-3__button-increment, .windows.tablet .c-1 .c-3__button-decrement, .windows.tablet .c-1 .c-3__button-increment, .windows.tablet .c-2 .c-3__button-decrement, .windows.tablet .c-2 .c-3__button-increment, .windows.tablet .c-7 .c-3__button-decrement, .windows.tablet .c-7 .c-3__button-increment, .windows.tablet .c-8 .c-3__button-decrement, .windows.tablet .c-8 .c-3__button-increment {
        display: block;
        opacity: 1
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .android.mobile .c-2 .c-3__button-decrement, .android.tablet .c-2 .c-3__button-decrement, .blackberry.mobile .c-2 .c-3__button-decrement, .blackberry.tablet .c-2 .c-3__button-decrement, .fxos.mobile .c-2 .c-3__button-decrement, .fxos.tablet .c-2 .c-3__button-decrement, .ios.ipad.tablet .c-2 .c-3__button-decrement, .ios.iphone.mobile .c-2 .c-3__button-decrement, .ios.ipod.mobile .c-2 .c-3__button-decrement, .meego .c-2 .c-3__button-decrement, .windows.mobile .c-2 .c-3__button-decrement, .windows.tablet .c-2 .c-3__button-decrement {
            -webkit-border-radius: 22px 0 0 22px;
            border-radius: 22px 0 0 22px
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .android.mobile .c-2 .c-3__button-increment, .android.tablet .c-2 .c-3__button-increment, .blackberry.mobile .c-2 .c-3__button-increment, .blackberry.tablet .c-2 .c-3__button-increment, .fxos.mobile .c-2 .c-3__button-increment, .fxos.tablet .c-2 .c-3__button-increment, .ios.ipad.tablet .c-2 .c-3__button-increment, .ios.iphone.mobile .c-2 .c-3__button-increment, .ios.ipod.mobile .c-2 .c-3__button-increment, .meego .c-2 .c-3__button-increment, .windows.mobile .c-2 .c-3__button-increment, .windows.tablet .c-2 .c-3__button-increment {
            -webkit-border-radius: 0 22px 22px 0;
            border-radius: 0 22px 22px 0
        }
    }

    .c-1 .select, .c-2 .select {
        position: relative
    }

    .c-3__menu.dropdown-menu {
        width: 100%;
        min-width: 0;
        margin: 0;
        padding: 0;
        background-color: #333945;
        border: 0;
        border-top-color: transparent;
        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .c-3__search {
        left: 0;
        top: -44px;
        height: 44px;
        width: 180px;
        padding: 0 16px;
        max-width: 100%;
        display: inline-block;
        position: absolute;
        outline: 0;
        cursor: pointer;
        border: 0;
        color: #fff;
        -webkit-border-top-left-radius: 5px;
        border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        border-top-right-radius: 5px;
        font: 14px/19px Roboto, sans-serif;
        background-color: #333945;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__search:focus::-webkit-input-placeholder {
        opacity: 0
    }

    .c-3__search:focus::-moz-placeholder {
        opacity: 0
    }

    .c-3__search:focus::-ms-input-placeholder {
        opacity: 0
    }

    .c-3__search:focus::placeholder {
        opacity: 0
    }

    .c-3__search::-webkit-input-placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__search::-moz-placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__search::-ms-input-placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__search::placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3.open .c-3__search {
        border-bottom: 1px solid #444b58
    }

    .c-3__ul {
        max-height: 194px;
        overflow-x: hidden;
        overflow-y: auto;
        list-style: none outside none;
        margin: 0;
        padding: 0;
        background-color: #333945;
        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px
    }

    .c-3__ul__group__label {
        width: 100%;
        display: inline-block;
        padding: 20px 5px 8px 5px;
        color: #8793a6;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .c-3__ul__group:last-child .c-3__li {
        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px
    }

    .c-3 .not__found__for, .c-3__li {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        position: relative;
        height: 44px;
        padding: 0 16px;
        cursor: pointer;
        color: #fff;
        font-size: 14px;
        font-weight: 400;
        line-height: 19px;
        text-align: left;
        white-space: nowrap
    }

    .c-3 .not__found__for:not(.not__found__for):focus, .c-3 .not__found__for:not(.not__found__for):hover, .c-3__li:not(.not__found__for):focus, .c-3__li:not(.not__found__for):hover {
        background-color: #424b59
    }

    .c-3 .not__found__for.not__found__for, .c-3__li.not__found__for {
        color: #afb9c8;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default !important
    }

    .c-3__dropdown-half .c-3__item {
        padding: 0 16px
    }

    .c-3__dropdown, .c-3__select {
        position: relative;
        width: 100%;
        height: 44px;
        padding: 0 36px 0 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #333945;
        border: 1px solid #333945;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        font-weight: 300;
        line-height: 19px;
        outline: 0;
        text-align: left
    }

    .c-3__dropdown:focus, .c-3__dropdown:hover, .c-3__select:focus, .c-3__select:hover {
        -moz-outline-style: none;
        z-index: 20
    }

    .c-3__dropdown:hover, .c-3__select:hover {
        border-color: #333945
    }

    .c-3__dropdown-half:hover, .c-3__dropdown:hover {
        background-color: #424b59
    }

    .c-3__dropdown .c-3__selected, .c-3__dropdown-half .c-3__selected {
        max-width: 100%;
        display: inline-block;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .c-3__dropdown .c-3__placeholder, .c-3__dropdown-half .c-3__placeholder {
        display: none
    }

    .open .c-3__dropdown, .open .c-3__dropdown-half {
        border-bottom: 1px solid #444b58;
        -webkit-border-radius: 5px 5px 0 0;
        border-radius: 5px 5px 0 0
    }

    .open .c-3__dropdown .c-3__selected, .open .c-3__dropdown-half .c-3__selected {
        display: none
    }

    .open .c-3__dropdown .c-3__placeholder, .open .c-3__dropdown-half .c-3__placeholder {
        display: inline;
        color: #9aa1ab;
        font-size: 14px;
        font-weight: 400;
        line-height: 19px;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .open .c-3__select-arrow {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .c-3__dropdown-half {
        position: relative;
        width: 100%;
        height: 44px;
        padding: 0 36px 0 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #333945;
        border: 1px solid #333945;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        font-weight: 300;
        line-height: 19px;
        outline: 0;
        text-align: left;
        -webkit-border-radius: 0;
        border-radius: 0;
        padding: 0 20px 0 16px
    }

    .c-3__dropdown-half:focus, .c-3__dropdown-half:hover {
        -moz-outline-style: none;
        z-index: 20
    }

    .c-3__dropdown-half:hover {
        border-color: #333945
    }

    .c-3__select-half {
        position: relative;
        width: 100%;
        height: 44px;
        padding: 0 36px 0 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #333945;
        border: 1px solid #333945;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        font-weight: 300;
        line-height: 19px;
        outline: 0;
        text-align: left;
        -webkit-border-radius: 0;
        border-radius: 0;
        padding: 0 20px 0 16px
    }

    .c-3__select-half:focus, .c-3__select-half:hover {
        -moz-outline-style: none;
        z-index: 20
    }

    .c-3__select-half:hover {
        border-color: #333945
    }

    .open .c-3__dropdown-half {
        -webkit-border-radius: 0;
        border-radius: 0
    }

    .c-3__select-arrow {
        display: block;
        width: 7px;
        height: 7px;
        position: absolute;
        top: 50%;
        right: 15px;
        z-index: 20;
        margin-top: -3px;
        background: url(<?php echo URLROOT.'/';?>assets/calculator/select_arrowc456.svg?v1727f34dc50) no-repeat 50% 50%;
        -webkit-background-size: 7px 6px;
        background-size: 7px 6px;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__button-decrement, .c-3__button-increment, .c-3__button-select {
        display: block;
        position: relative;
        width: 50px;
        height: 44px;
        padding: 0;
        background-color: #333945;
        border: 1px solid #333945
    }

    .c-3__button-decrement:focus, .c-3__button-decrement:hover, .c-3__button-increment:focus, .c-3__button-increment:hover, .c-3__button-select:focus, .c-3__button-select:hover {
        z-index: 20
    }

    .c-3__button-decrement:hover, .c-3__button-increment:hover, .c-3__button-select:hover {
        border-color: #333945
    }

    .c-3__button-decrement, .c-3__button-increment {
        cursor: pointer;
        background-position: 50% 50%;
        background-repeat: no-repeat
    }

    .c-3__button-decrement {
        background-image: url(<?php echo URLROOT.'/';?>assets/calculator/decrement3d45.svg?v1727f34dc48);
        background-image: url(<?php echo URLROOT.'/';?>assets/calculator/decrement3d45.svg?v1727f34dc48);
        -webkit-background-size: 12px 2px;
        background-size: 12px 2px;
        -webkit-border-radius: 5px 0 0 5px;
        border-radius: 5px 0 0 5px;
        margin-right: -1px
    }

    .c-3__button-increment {
        background-image: url(<?php echo URLROOT.'/';?>assets/calculator/increment4f82.svg?v1727f34dc4c);
        background-image: url(<?php echo URLROOT.'/';?>assets/calculator/increment4f82.svg?v1727f34dc4c);
        -webkit-background-size: 12px 12px;
        background-size: 12px 12px;
        -webkit-border-radius: 0 5px 5px 0;
        border-radius: 0 5px 5px 0;
        margin-left: -1px
    }

    .c-1 {
        width: 250px;
        max-height: 428px;
        padding: 16px 16px 20px;
        background-color: #1b1f26;
        background-color: rgba(27, 31, 38, .9);
        -webkit-border-radius: 5px;
        border-radius: 5px
    }

    .c-1__header {
        margin-bottom: 16px
    }

    .c-1__main {
        height: 228px;
        max-height: 228px;
        margin-bottom: 20px
    }

    .c-1__row:not(:last-child) {
        margin-bottom: 16px
    }

    .c-1__group {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .c-1__element {
        position: relative
    }

    .c-1__element:nth-child(2) {
        -webkit-box-flex: 1;
        -webkit-flex: 1 1 0%;
        -ms-flex: 1 1 0%;
        flex: 1 1 0%;
        padding: 0 2px
    }

    .c-1__footer {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .c-1__footer .button-filled__primary {
        width: 100%
    }

    .c-1__price {
        width: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin-bottom: 16px;
        color: #fff;
        font-weight: 500;
        font-family: Roboto, sans-serif
    }

    .c-1__price__inner {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .c-1__price--min {
        color: #fff;
        font-size: 22px;
        line-height: 26px
    }

    .c-1__price--per-page {
        margin-right: 7px;
        color: #fff;
        font-size: 22px;
        line-height: 26px
    }

    .c-1__price .discount {
        padding: 1px 4px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        font-size: 16px;
        line-height: 19px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        background-color: #57a818
    }

    .c-1__price__label {
        font-size: 12px;
        line-height: 12px
    }

    .c-1__price-value {
        font-size: 18px;
        font-weight: 500;
        line-height: 21px
    }

    .c-1 .h--sm {
        margin: 0;
        color: #fff
    }

    .c-1__nameplate {
        width: 250px;
        margin-top: 5px;
        padding: 16px 14px 20px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        background-color: #1b1f26;
        background-color: rgba(27, 31, 38, .9);
        -webkit-border-radius: 5px;
        border-radius: 5px
    }

    .c-1__nameplate:after, .c-1__nameplate:before {
        top: -9px;
        width: 2px;
        height: 13px;
        position: absolute;
        content: '';
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background-color: #e8e9e9
    }

    .c-1__nameplate:before {
        left: 26px
    }

    .c-1__nameplate:after {
        right: 26px
    }

    .c-1__nameplate__icon {
        margin-right: 11px
    }

    .c-1__nameplate__inner {
        color: #fff;
        line-height: 18px;
        font-family: Roboto, sans-serif
    }

    .c-1__nameplate__title {
        font-size: 15px;
        font-weight: 700
    }

    .c-1__nameplate__text {
        font-size: 13px;
        font-weight: 500
    }

    .c-2 {
        max-width: 694px;
        margin: 0 auto
    }

    .c-2__form {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 100%
    }

    .c-2__main {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        width: 456px
    }

    .c-2__row {
        width: -webkit-calc(50% - 10px);
        width: calc(50% - 10px)
    }

    .c-2__row:nth-child(2n+1) {
        margin-right: 10px
    }

    .c-2__row:nth-child(2n) {
        margin-left: 10px
    }

    .c-2__row:nth-child(n+3) {
        margin-top: 20px
    }

    .c-2__group {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .c-2__element {
        position: relative
    }

    .c-2__element:nth-child(2) {
        -webkit-box-flex: 1;
        -webkit-flex: 1 1 0%;
        -ms-flex: 1 1 0%;
        flex: 1 1 0%;
        padding: 0 2px
    }

    .c-2__result {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        width: 218px;
        margin-left: 20px
    }

    .c-2__result .button-filled__primary {
        width: 100%
    }

    .c-2__price {
        width: 100%;
        height: 44px;
        margin-bottom: 20px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        color: #fff
    }

    .c-2__price__inner {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .c-2__price--min {
        color: #fff;
        font-size: 22px;
        line-height: 26px
    }

    .c-2__price--per-page {
        margin-right: 7px;
        color: #fff;
        font-size: 22px;
        line-height: 26px
    }

    .c-2__price .discount {
        padding: 2px 4px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        font-size: 16px;
        line-height: 19px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        background-color: #57a818
    }

    .c-2__price__label {
        font-size: 12px;
        line-height: 12px
    }

    .c-2__price-value {
        font-size: 18px;
        font-weight: 500;
        line-height: 21px
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .c-2 .c-3__select {
            -webkit-border-radius: 22px;
            border-radius: 22px
        }
    }</style>
    <style>.s-16 {
        background-color: #fff
    }

    .s-16 .h--md {
        text-align: center;
        margin-bottom: 32px
    }

    .s-16 .button-filled__primary {
        margin-top: 20px
    }

    .s-16__wrap {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding: 0 15px
    }

    @media (max-width: 1023px) {
        .s-16__wrap {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
    }

    .s-16__block {
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1
    }

    .s-16__list {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .s-16__item {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 34px
    }

    @media (max-width: 767px) {
        .s-16__item {
            margin-bottom: 24px
        }
    }

    .s-16__item-num {
        display: inline-block;
        width: 64px;
        min-width: 64px;
        height: 64px;
        margin-right: 30px;
        text-align: center;
        font: 700 24px/64px Roboto, sans-serif;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        background: #f2f5fa;
        color: #6c6c6c
    }

    @media (max-width: 767px) {
        .s-16__item-num {
            width: 40px;
            min-width: 40px;
            height: 40px;
            line-height: 40px;
            font-size: 18px
        }
    }

    .s-16__text {
        font: 500 18px/28px Roboto, sans-serif;
        color: #191919
    }

    @media (max-width: 767px) {
        .s-16__text {
            font-size: 16px
        }
    }

    .s-16__video-wrap {
        margin-bottom: 50px;
        text-align: center
    }

    @media (max-width: 1023px) {
        .s-16__video-wrap {
            -webkit-box-ordinal-group: 0;
            -webkit-order: -1;
            -ms-flex-order: -1;
            order: -1;
            margin-bottom: 25px;
            margin-top: -15px
        }
    }

    .s-16__video {
        max-width: 100%
    }

    .s-16__btn {
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    @media (max-width: 1023px) {
        .s-16__btn {
            display: none
        }
    }</style>
    <style>.s-2 {
        background-color: #fff
    }

    .s-2.bggrey {
        background-color: #f2f5fa
    }

    .s-2 .h--md {
        text-align: center
    }

    @media (max-width: 767px) {
        .s-2 .h--md {
            margin-bottom: 20px
        }
    }

    @media (min-width: 768px) {
        .s-2 .h--md {
            margin-bottom: 32px
        }
    }

    .s-2 .p--md {
        text-align: center
    }

    @media (max-width: 767px) {
        .s-2 .p--md {
            margin-bottom: 20px
        }
    }

    @media (min-width: 768px) {
        .s-2 .p--md {
            margin-bottom: 48px
        }
    }

    .s-2__w {
        height: auto
    }

    @media (max-width: 767px) {
        .s-2__c {
            margin-bottom: 16px
        }
    }

    @media (min-width: 768px) {
        .s-2__c {
            margin-bottom: 48px
        }
    }

    .s-2__ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        list-style: none outside none;
        margin: 0;
        padding: 0
    }

    .s-2__li {
        width: 225px;
        color: #424b59;
        font-size: 16px;
        font-weight: 300;
        letter-spacing: 0;
        line-height: 36px
    }

    .s-2__b-g {
        text-align: center
    }

    .s-2 .button-text {
        color: #fff;
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase
    }</style>
    <style>.s-4 {
        background-color: #fff
    }

    @media (max-width: 767px) {
        .s-4.s-4-1 .s-4__i {
            width: 48px
        }
    }

    @media (max-width: 767px) {
        .s-4.s-4-3 .h--md {
            margin-bottom: 20px
        }
    }

    @media (min-width: 768px) {
        .s-4.s-4-3 .h--md {
            margin-bottom: 32px
        }
    }

    .s-4.s-4-3 .p--md {
        text-align: center
    }

    @media (max-width: 767px) {
        .s-4.s-4-3 .p--md {
            margin-bottom: 20px
        }
    }

    @media (min-width: 768px) {
        .s-4.s-4-3 .p--md {
            max-width: 680px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 40px
        }
    }

    .s-4.s-4-3 .p--md strong {
        font-weight: 400
    }

    @media (min-width: 768px) {
        .s-4.s-4-3 .p--sm {
            margin-left: auto;
            margin-right: auto
        }
    }

    .s-4.s-4-4 .h--md, .s-4.s-4-4 .p--md {
        text-align: center
    }

    @media (max-width: 767px) {
        .s-4.s-4-4 .h--md {
            margin-bottom: 16px
        }
    }

    @media (min-width: 768px) {
        .s-4.s-4-4 .h--md {
            margin-bottom: 32px
        }
    }

    .s-4.s-4-4 .p--md {
        max-width: 700px;
        margin-left: auto;
        margin-right: auto
    }

    @media (max-width: 767px) {
        .s-4.s-4-4 .p--md {
            margin-bottom: 32px
        }
    }

    @media (min-width: 768px) {
        .s-4.s-4-4 .p--md {
            margin-bottom: 48px
        }
    }

    .s-4.s-4-4 .p--md.description {
        max-width: 100%
    }

    .s-4__ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        list-style: none outside none;
        margin: 0;
        padding: 0
    }

    @media (max-width: 767px) {
        .s-4__ul {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }
    }

    @media (min-width: 768px) {
        .s-4__ul {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .s-4__ul {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }
    }

    @media (min-width: 1024px) {
        .s-4__ul.fl__d-jcc {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }
    }

    .s-4__ul.s-4__ul-1 .s-4__li {
        margin-top: 0
    }

    @media (min-width: 1024px) {
        .s-4__ul.s-4__ul-1 .s-4__li {
            width: -webkit-calc(25% - 20px);
            width: calc(25% - 20px)
        }
    }

    .s-4__ul.s-4__ul-1 .s-4__li:not(:last-child) {
        margin-left: 0
    }

    @media (min-width: 1024px) {
        .s-4__ul.s-4__ul-1 .s-4__li:not(:last-child) {
            margin-right: 20px
        }
    }

    .s-4__ul.s-4__ul-2 .s-4__li {
        margin-top: 0
    }

    @media (min-width: 1024px) {
        .s-4__ul.s-4__ul-2 .s-4__li {
            width: -webkit-calc(25% - 20px);
            width: calc(25% - 20px)
        }
    }

    .s-4__ul.s-4__ul-2 .s-4__li:not(:last-child) {
        margin-left: 0
    }

    @media (min-width: 1024px) {
        .s-4__ul.s-4__ul-2 .s-4__li:not(:last-child) {
            margin-right: 20px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .s-4__ul.s-4__ul-2 .s-4__li:nth-child(n+3) {
            margin-top: 32px
        }
    }

    .s-4__li {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }

    @media (max-width: 767px) {
        .s-4__li {
            width: 100%
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .s-4__li {
            width: -webkit-calc(50% - 10px);
            width: calc(50% - 10px)
        }
    }

    @media (min-width: 768px) {
        .s-4__li {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
    }

    @media (min-width: 1024px) {
        .s-4__li {
            width: -webkit-calc(33.33333% - 20px);
            width: calc(33.33333% - 20px)
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .s-4__li:nth-child(2n+1) {
            margin-right: 10px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .s-4__li:nth-child(2n) {
            margin-left: 10px
        }
    }

    @media (min-width: 1024px) {
        .s-4__li:nth-child(3n+2) {
            margin-left: 30px;
            margin-right: 30px
        }
    }

    @media (min-width: 1024px) {
        .s-4__li:nth-child(3n+3) {
            margin-right: 0
        }
    }

    @media (max-width: 767px) {
        .s-4__li:not(:last-child) {
            margin-bottom: 32px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .s-4__li:nth-child(n+3) {
            margin-top: 48px
        }
    }

    @media (min-width: 1024px) {
        .s-4__li:nth-child(n+4) {
            margin-top: 48px
        }
    }

    @media (max-width: 767px) {
        .s-4__i {
            width: 42px;
            margin-right: 14px
        }
    }

    @media (min-width: 768px) {
        .s-4__i {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            width: 64px;
            height: 64px;
            margin-bottom: 24px
        }
    }

    @media (max-width: 767px) {
        .s-4__d {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 0%;
            -ms-flex: 1 1 0%;
            flex: 1 1 0%
        }
    }

    @media (min-width: 768px) {
        .s-4__d {
            text-align: center
        }
    }

    .s-4 .h--md {
        text-align: center
    }

    @media (max-width: 767px) {
        .s-4 .h--md {
            margin-bottom: 32px
        }
    }

    @media (min-width: 768px) {
        .s-4 .h--md {
            margin-bottom: 48px
        }
    }

    .s-4 .h--sm {
        font-weight: 400 !important
    }

    @media (max-width: 767px) {
        .s-4 .h--sm {
            margin: 0
        }
    }

    @media (min-width: 768px) {
        .s-4 .h--sm {
            margin-bottom: 8px
        }
    }</style>