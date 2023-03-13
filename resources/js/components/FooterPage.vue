<template>
    <main class="ps-main">
        <footer class="ps-footer ps-footer--default bg--cover" data-background="img/bg/footer-bg.jpg">
            <div class="container">
                <div class="ps-footer__top">
                    <div class="ps-footer__widgets">
                        <div class="ps-footer__column">
                            <div class="ps-widget ps-widget--footer ps-widget-footer-contact">
                                <div class="ps-widget__content">
                                    <p>59 Bervely Hill Ave, Brooklyn Town, New York, NY 5630, CA, US</p>
                                    <p>+056 686 56 56 98</p>
                                    <p><a href="mailto%40hello%40finderland.html"><span class="__cf_email__" data-cfemail="28404d444447684e41464c4d5a4449464c064b4745">[email&#160;protected]</span></a></p>
                                    <div class="ps-social-links light"><a href="#"><i class="lnir lnir-twitter-filled"></i></a><a href="#"><i class="lnir lnir-facebook-filled"></i></a><a href="#"><i class="lnir lnir-google"></i></a><a href="#"><i class="lnir lnir-youtube"></i></a><a href="#"><i class="lnir lnir-vimeo"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-footer__column">
                            <div class="ps-widget ps-widget--footer">
                                <div class="ps-widget__content">
                                    <ul class="ps-widget__links">
                                        <li><a href="shop.html">For sell</a></li>
                                        <li><a href="shop.html">For Rent</a></li>
                                        <li><a href="shop.html">Consult</a></li>
                                        <li><a href="shop.html">Privacy Policy</a></li>
                                        <li><a href="shop.html">Term &amp; Conditions</a></li>
                                        <li><a href="shop.html">FAQs</a></li>
                                        <li><a href="shop.html">User's Guide</a></li>
                                        <li><a href="shop.html">Sitemap</a></li>
                                        <li><a href="shop.html">Download App</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ps-footer__column">
                            <div class="ps-widget ps-widget--footer">
                                <div class="ps-widget__content">
                                    <ul class="ps-widget__links">
                                        <li><a href="about-us.html">about</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="help-center.html">Help Center</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-footer__subscribe">
                        <div class="ps-widget ps-widget--footer ps-widget--footer-subscribe">
                            <div class="ps-widget__content">
                                <form class="ps-form--widget-subscribe" action="https://nouthemes.net/html/finderland/index.html" method="get">
                                    <div class="ps-form__top">
                                        <p>Be the first to get the latest news about market, promotions and much more!</p>
                                    </div>
                                    <div class="ps-form__content">
                                        <div class="ps-form__icon"><i class="icon-envelope"></i></div>
                                        <input class="form-control" type="text" placeholder="Email Address" />
                                        <button><i class="icon-arrow-right"></i></button>
                                    </div>
                                    <div class="ps-form__bottom">
                                        <p>By subscribing, you accept the <a href="#">Privacy Policy</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-footer__bottom">
                    <div class="ps-footer__copyright">
                        <p>&copy; 2021 <strong>Finderland</strong>. All right reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</template>



<style>
    .ps-footer .ps-widget--footer {
  margin-bottom: 30px;
}

.ps-footer .ps-widget--footer .ps-social-links a:hover {
  text-decoration: none;
}

.ps-footer__copyright {
  text-align: center;
  border-top: 1px solid rgba(255, 255, 255, 0.3);
}

.ps-footer__copyright p {
  margin-bottom: 0;
  color: #fff;
  line-height: 1em;
}

@media screen and (max-width: 1024px) {
  .ps-footer {
    margin-bottom: 60px;
  }
}

.ps-footer--default {
  background-color: var(--color-bg-primary);
}

.ps-footer--default .ps-footer__copyright {
  padding-bottom: 60px;
  padding-top: 32px;
}

.ps-footer--default .ps-footer__top {
  display: grid;
  padding-top: 80px;
  padding-bottom: 50px;
}

.ps-footer--default.light {
  background-color: #fff;
}

.ps-footer--default.light .ps-widget--footer p {
  color: var(--color-heading);
}

.ps-footer--default.light .ps-widget--footer .ps-social-links a {
  color: var(--color-heading);
}

.ps-footer--default.light .ps-widget--footer .ps-widget__links li a {
  color: var(--color-heading);
}

.ps-footer--default.light .ps-widget--footer .ps-widget__links li a:hover {
  color: var(--color-text);
}

.ps-footer--default.light .ps-footer__copyright p {
  color: var(--color-heading);
}

.ps-footer--default.light .ps-footer__bottom {
  border-top: 1px solid rgba(6, 5, 5, 0.1);
}

.ps-footer--default.light .ps-form--widget-subscribe .ps-form__bottom p {
  color: var(--color-text);
}

.ps-footer--default.light .ps-form--widget-subscribe .ps-form__bottom p a {
  color: var(--color-heading);
}

.ps-footer--default.light .ps-form--widget-subscribe .ps-form__bottom p a:hover {
  color: var(--color-1st);
}

@media screen and (min-width: 768px) {
  .ps-footer--default .ps-widget-footer-contact {
    max-width: 255px;
  }
  .ps-footer--default .ps-footer__widgets {
    display: grid;
    grid-template-columns: 4fr 3fr 3fr;
  }
}

@media screen and (min-width: 1040px) {
  .ps-footer--default .ps-footer__top {
    grid-template-columns: 7fr 3fr;
    grid-gap: 30px;
    padding-top: 120px;
    padding-bottom: 70px;
  }
  .ps-footer--default .ps-footer__copyright {
    padding-top: 65px;
    padding-bottom: 122px;
  }
}

@media screen and (min-width: 1440px) {
  .ps-footer--default .ps-footer__top {
    padding-top: 160px;
    padding-bottom: 100px;
  }
}

</style>