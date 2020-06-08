<?php
require_once APPROOT . '/views/lang/' . $_SESSION["lang"] . '.php';
?>
<header class="header">
    <div class="header__mobile-buttons">
        <div id="mNavMain" class="m-nav__button for__m-nav-main"><i class="n--icon n--icon__main-nav"></i> <i
                class="n--icon n--icon__main-nav--tablet"></i> <i class="n--icon n--icon__nav-close"></i></div>
        <div id="mNavUser" class="m-nav__button for__m-nav-user"><i class="n--icon n--icon__user-nav"></i> <i
                class="n--icon n--icon__nav-close"></i></div>
    </div>
    <div class="m-nav m-nav__main">
        <div class="m-nav__main-ul">
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon017ed5.png?v=qqqq"
                              srcset="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon01.png?v=qqqq, assets/icon/mobile-menu__icon01@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-01"></picture>
                <a href="<?php echo URLROOT . "/ourTeam"?>" class="m-nav__a ga-event" data-ga-category="home" data-ga-action="click"
                   data-ga-label="home-header Our Team click">Our Team</a></div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon027ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon02.png?v=qqqq, assets/icon/mobile-menu__icon02@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-02"></picture>
                <a href="order-an-essay.html" class="m-nav__a ga-event" data-ga-category="home"
                   data-ga-action="click" data-ga-label="home-header How to Order click">How to Order</a></div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon037ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon03.png?v=qqqq, assets/icon/mobile-menu__icon03@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-03"></picture>
                <a href="#subnav-1" class="m-nav__parent ga-event" data-ga-category="home" data-ga-action="click"
                   data-ga-label="home-header Learn click">Writing services</a></div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon047ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon04.png?v=qqqq, assets/icon/mobile-menu__icon04@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-04"></picture>
                <a href="custom-essay-writing-reviews.html" class="m-nav__a ga-event" data-ga-category="home"
                   data-ga-action="click" data-ga-label="home-header Reviews click">Reviews</a></div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon077ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon07.png?v=qqqq, assets/icon/mobile-menu__icon07@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-07"></picture>
                <a href="#subnav-2" class="m-nav__parent ga-event" data-ga-category="home" data-ga-action="click"
                   data-ga-label="home-header About us click">About us</a></div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon067ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon06.png?v=qqqq, assets/icon/mobile-menu__icon06@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-06"></picture>
                <a href="blog/index.html" class="m-nav__a ga-event" data-ga-category="home" data-ga-action="click"
                   data-ga-label="home-header Blog click">Blog</a></div>
            <div class="m-nav__divider"></div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon087ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon08.png?v=qqqq, assets/icon/mobile-menu__icon08@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-08"></picture>
                <a href="become-a-writer.html" class="m-nav__a ga-event" data-ga-category="home"
                   data-ga-action="click" data-ga-label="home-header Become a writer click">Become a writer</a>
            </div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon107ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon10.png?v=qqqq, assets/icon/mobile-menu__icon10@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-10"></picture>
                <a href="https://essaypro.com/terms-and-conditions.html" class="m-nav__a ga-event"
                   data-ga-category="home" data-ga-action="click"
                   data-ga-label="home-header Terms and Conditions click">Terms and Conditions</a></div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon107ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon10.png?v=qqqq, assets/icon/mobile-menu__icon10@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-10"></picture>
                <a href="https://essaypro.com/refund-policy.html" class="m-nav__a ga-event" data-ga-category="home"
                   data-ga-action="click" data-ga-label="home-header Refund Policy click">Refund Policy</a></div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon117ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon11.png?v=qqqq, assets/icon/mobile-menu__icon11@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-11"></picture>
                <a href="https://essaypro.com/privacy-policy.html" class="m-nav__a ga-event" data-ga-category="home"
                   data-ga-action="click" data-ga-label="home-header Privacy Policy click">Privacy Policy</a></div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/mobile-menu__icon097ed5.png?v=qqqq"
                              srcset="assets/icon/mobile-menu__icon09.png?v=qqqq, assets/icon/mobile-menu__icon09@2x.png?v=qqqq 2x"
                              alt="Icon" class="m-nav__img img-09"></picture>
                <a href="https://intercom.help/essaypro" rel="nofollow" class="m-nav__a ga-event"
                   data-ga-category="home" data-ga-action="click" data-ga-label="home-header FAQ click">FAQ</a>
            </div>
            <div class="m-nav__b">
                <picture><img src="<?php echo URLROOT.'/';?>assets/icon/telephone-book7ed5.svg?v=qqqq" alt="Icon" class="m-nav__img img-07">
                </picture>
                <a href="https://essaypro.com/contact-us.html" class="m-nav__a ga-event" data-ga-category="home"
                   data-ga-action="click" data-ga-label="home-header Contact us click">Contact us</a></div>
        </div>
        <div id="subnav-1" class="m-nav__sub-ul"><a href="#" class="m-nav__back">Back</a> <a
                href="custom-essay.html" class="m-nav__a ga-event" data-ga-category="home" data-ga-action="click"
                data-ga-label="home-header Custom Essay Writing click">Custom Essay Writing</a> <a
                href="custom-dissertation-writing-service.html" class="m-nav__a ga-event" data-ga-category="home"
                data-ga-action="click" data-ga-label="home-header Dissertation Writing Services click">Dissertation
                Writing Services</a> <a href="custom-research-paper.html" class="m-nav__a ga-event"
                                        data-ga-category="home" data-ga-action="click"
                                        data-ga-label="home-header Research Paper Writing click">Research Paper
                Writing</a> <a href="term-paper.html" class="m-nav__a ga-event" data-ga-category="home"
                               data-ga-action="click" data-ga-label="home-header Term Paper Writing click">Term Paper
                Writing</a> <a href="write-my-essay.html" class="m-nav__a ga-event" data-ga-category="home"
                               data-ga-action="click" data-ga-label="home-header Write My Essay click">Write My
                Essay</a> <a href="admission-essay.html" class="m-nav__a ga-event" data-ga-category="home"
                             data-ga-action="click" data-ga-label="home-header Admission Essay Writing click">Admission
                Essay Writing</a></div>
        <div id="subnav-2" class="m-nav__sub-ul"><a href="#" class="m-nav__back">Back</a> <a
                href="https://essaypro.com/about-our-service.html" class="m-nav__a ga-event" data-ga-category="home"
                data-ga-action="click" data-ga-label="home-header About EssayPro click">About EssayPro</a> <a
                href="college-essay-writing-service.html" class="m-nav__a ga-event" data-ga-category="home"
                data-ga-action="click" data-ga-label="home-header College Essay Help click">College Essay Help</a>
            <a href="buy-an-essay.html" class="m-nav__a ga-event" data-ga-category="home" data-ga-action="click"
               data-ga-label="home-header Buy an Essay click">Buy an Essay</a> <a href="essay-help.html"
                                                                                  class="m-nav__a ga-event"
                                                                                  data-ga-category="home"
                                                                                  data-ga-action="click"
                                                                                  data-ga-label="home-header Essay Writing Help click">Essay
                Writing Help</a></div>
        <div class="m-nav__app"><a class="m-nav__app__btn app-store">
                <picture>
                    <source data-srcset="<?php echo URLROOT.'/';?>/assets/footer/app__store__icon.png?v=qqqq, /assets/footer/app__store__icon__2x.png?v=qqqq 2x">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mO8VA8AAikBU9RsF2cAAAAASUVORK5CYII="
                         data-src="<?php echo URLROOT.'/';?>/assets/footer/app__store__icon.png?v=qqqq" class="m-nav__app__logo lazy"
                         alt="App Store"></picture>
                <div class="m-nav__app__info"><span>Download on the</span> <span class="title">App Store</span></div>
            </a><a class="m-nav__app__btn google-play">
                <picture>
                    <source data-srcset="/assets/footer/google__play__icon.png?v=qqqq, /assets/footer/google__play__icon__2x.png?v=qqqq 2x">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mO8VA8AAikBU9RsF2cAAAAASUVORK5CYII="
                         data-src="/assets/footer/google__play__icon.png?v=qqqq" class="m-nav__app__logo lazy"
                         alt="Google Play"></picture>
                <div class="m-nav__app__info"><span>get it on</span> <span class="title">Google Play</span></div>
            </a></div>
    </div>
    <div class="m-nav m-nav__user"><a href="https://app.essaypro.com/auth/login" class="m-nav__a ga-event"
                                      data-ga-category="home" data-ga-action="click"
                                      data-ga-label="home-header login click">Log In</a> <a
            href="https://app.essaypro.com/auth/register" class="m-nav__a ga-event" data-ga-category="home"
            data-ga-action="click" data-ga-label="home-header Sign Up click">Sign Up</a></div>
    <div class="m-nav__overlay"></div>
    <div class="header__main">
        <div class="header__logo"><a class="logo ga-event" data-ga-category="home" data-ga-action="click"
                                     data-ga-label="home-header logo click" href="<?php echo URLROOT;?>"><img src="<?php echo URLROOT.'/';?>assets/header/logo.svg"
                                                                                 class="logo_img"
                                                                                 alt="EssayPro"></a></div>
        <div class="header__nav">
            <nav class="nav">
                <ul class="nav-ul">
                    <li class="nav-li"><a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/';?>ourTeam" class="nav-a ga-event" data-ga-category="home"
                                          data-ga-action="click" data-ga-label="home-header Our Team click"><?php echo $lang['Our Team']?></a></li>
                    <li class="nav-li"><a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/';?>services" class="nav-a ga-event" data-ga-category="home"
                                          data-ga-action="click" data-ga-label="home-header Our Team click"><?php echo $lang['Why Us']?></a></li>
                    <li class="nav-li"><a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/';?>reviews" class="nav-a ga-event"
                                          data-ga-category="home" data-ga-action="click"
                                          data-ga-label="home-header Reviews click"><?php echo $lang['Reviews']?></a></li>
                    <li class="nav-li"><a href="<?php echo URLROOT.'/'.$_SESSION["lang"].'/';?>aboutUs" class="nav-a ga-event"
                                          data-ga-category="home" data-ga-action="click"
                                          data-ga-label="home-header Reviews click"><?php echo $lang['About us']?></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header__inner--right"><span class="header__dba">DBA: EPRO</span>
        <div class="header__auth">
            <nav class="n--auth"><span data-link="https://app.essaypro.com/auth/login"
                                       class="n--auth__link ga-event h-l" data-ga-category="home"
                                       data-ga-action="click" data-ga-label="home-header login click">Log In </span><span
                    data-link="https://app.essaypro.com/auth/register"
                    class="button-filled__warning--small ga-event h-l" data-ga-category="home"
                    data-ga-action="click" data-ga-label="home-header Sign Up click"><span class="button-text">Sign Up</span></span>
            </nav>
        </div>
    </div>
</header>