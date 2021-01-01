<?php defined('ALTUMCODE') || die() ?>

<div class="index-container page-hero-section bg-image hero-home-2" style="background-image: url('<?= SITE_URL . ASSETS_URL_PATH . 'images/bg_hero_2.svg' ?>'); color: white">
    <div class="container hero-caption">
        <?php display_notifications() ?>

        <?php if ($data->is_custom_domain) : ?>
            <span class="badge badge-soft mb-2"><?= $this->language->index->is_custom_domain ?></span>
        <?php endif ?>

        <div class="row">
            <div class="col">
                <div class="text-left wow fadeInUp fg-white">
                    <h1 class="index-header mb-4" data-aos="fade-down"><?= $this->language->index->header ?></h1>
                    <h3 class="mb-4" data-aos="fade-down"> With troolink get easily discovered online!</h3>
                    <p class="index-subheader mb-5" data-aos="fade-down" data-aos-delay="300"><?= $this->language->index->subheader ?></p>

                    <div data-aos="fade-down" data-aos-delay="500">
                        <a href="<?= url('register') ?>" class="btn bg-dark index-button" style='color: white'><?= $this->language->index->sign_up ?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block wow zoomIn">
                <div class="ml-10 floating-animate">
                    <img src="<?= SITE_URL . ASSETS_URL_PATH . 'images/home1.png' ?>" class="index-image" width='288' />
                </div>
            </div>

        </div>
    </div>
</div>

<!--<div class="tolink container">-->
<!--    <div class="header mb-3">-->
<!--        <h1>Why Troolink?</h1>-->
<!--    </div>-->
<!--    <div class="cards">-->
<!--        <div class="custom-card shadow">-->
<!--            <img src="<?= SITE_URL . ASSETS_URL_PATH . 'images/icons/payment.png' ?>" alt="">-->
<!--            <h3 class="title">-->
<!--                Light on your wallet-->
<!--            </h3>-->
<!--            <p>Our inexpensive pricing make us the most valuable solution for businesses or individuals.</p>-->
<!--        </div>-->
<!--        <div class="custom-card shadow">-->
<!--            <img src="<?= SITE_URL . ASSETS_URL_PATH . 'images/icons/customizable.png' ?>" alt="">-->
<!--            <h3 class="title">-->
<!--                Easy Customization-->
<!--            </h3>-->
<!--            <p>Use custom colors, fonts & background to design your personalized troolink page.</p>-->

<!--        </div>-->
<!--        <div class="custom-card shadow">-->
<!--            <img src="<?= SITE_URL . ASSETS_URL_PATH . 'images/icons/concept.png' ?>" alt="">-->
<!--            <h3 class="title">-->
<!--                Stats and Analytics-->
<!--            </h3>-->
<!--            <p>Get access to user statistics, you can also integrate Google Analytics.</p>-->

<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="pres-2 container mt-7">
    <div class="img">
        <img src="<?= SITE_URL . ASSETS_URL_PATH . 'images/troolink_large.png' ?>" alt="">
    </div>
    <div class="info">
        <h2 class="mt-3"><?= $this->language->index->presentation2->header ?></h2>

        <p class="mt-3"><?= $this->language->index->presentation2->subheader ?></p>
        <a href="<?= url('register') ?>" class="mt-2 btn bg-dark index-button" style="color: white">SIGN UP NOW</a>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 py-3">
                <div class="iconic-list">
                    <div class="iconic-item wow fadeInUp">
                        <div class="iconic-content">
                            <h5>Boost your Business</h5>
                            <p class="fs-small">Create your business page and share your troo.link with anyone instantly</p>
                        </div>
                        <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
                            <span class="mai-analytics"></span>
                        </div>
                    </div>
                    <div class="iconic-item wow fadeInUp">
                        <div class="iconic-content">
                            <h5>SEO Friendly</h5>
                            <p class="fs-small">Optimize your page for SEO right from the dashboard</p>
                        </div>
                        <div class="iconic-md iconic-text bg-info fg-white rounded-circle">
                            <span class="mai-shield-checkmark"></span>
                        </div>
                    </div>
                    <div class="iconic-item wow fadeInUp">
                        <div class="iconic-content">
                            <h5>Multi Device Access</h5>
                            <p class="fs-small">Access from any device to make changes on your profile.</p>
                        </div>
                        <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
                            <span class="mai-desktop-outline"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 py-3 wow zoomIn ">
                <div class="fix-mobile">
                    <img style="width: 233px" src="<?= SITE_URL . ASSETS_URL_PATH . 'images/home2.png' ?>" alt="">
                </div>
            </div>
            <div class="col-lg-4 py-3">
                <div class="iconic-list">
                    <div class="iconic-item wow fadeInUp">
                        <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
                            <span class="mai-speedometer-outline"></span>
                        </div>
                        <div class="iconic-content">
                            <h5>Easy Customizations</h5>
                            <p class="fs-small">Use custom colors, fonts & background to design your personalized troolink page.</p>
                        </div>
                    </div>
                    <div class="iconic-item wow fadeInUp">
                        <div class="iconic-md iconic-text bg-success fg-white rounded-circle">
                            <span class="mai-aperture"></span>
                        </div>
                        <div class="iconic-content">
                            <h5>Shortened Links</h5>
                            <p class="fs-small">Get custom short links using our in-built link shortener</p>
                        </div>
                    </div>
                    <div class="iconic-item wow fadeInUp">
                        <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
                            <span class="mai-stats-chart-outline"></span>
                        </div>
                        <div class="iconic-content">
                            <h5>Analytics</h5>
                            <p class="fs-small">Get user statistics or integrate Google Analytics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container mt-10">
    <div class="text-center mb-8">
        <h2><?= $this->language->index->pricing->header ?></h2>

        <p class="text-muted"><?= $this->language->index->pricing->subheader ?></p>
    </div>

    <?= $this->views['packages'] ?>
</div>


<div class="page-section bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 py-3 wow fadeInUp">
                <h2 class="mb-4">Frequently <br> asked questions</h2>
                <p>Got a question? We're here to answer! If you don't find see your question here, drop us a line on our Contact Page.</p>

                <p class="fg-primary fw-medium">Need more help?</p>
                <!-- <a href="<?= url('contact') ?>" class="btn btn-gradient btn-split-icon rounded-pill">
                    <span class="icon mai-call-outline"></span> Contact Us
                </a> -->
            </div>
            <div class="col-lg-7 py-3 no-scroll-x">
                <div class="accordion accordion-gap" id="accordionFAQ">
                    <div class="accordion-item wow fadeInRight">
                        <div class="accordion-trigger" id="headingFour">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Why should I build a profile on troo.link?</button>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
                            <div class="accordion-content">
                                <p>Troolink is helpful to all the businesses or individuals who are looking for building their unique digital address that they can share easily with anyone across the globe.</p>
                                <ul>
                                    <li>Entrepreneurs</li>
                                    <li>New or Established Brands</li>
                                    <li>Small Business Owners</li>
                                    <li>Artists and Entertainers</li>
                                    <li>Freelancers</li>
                                    <li>Affiliate Marketers</li>
                                    <li>Social Media Influencers</li>
                                    <li>& many more</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInRight">
                        <div class="accordion-trigger" id="headingFive">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">I do not have any technical knowledge, can I still build my profile?</button>
                        </div>
                        <div id="collapse2" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionFAQ">
                            <div class="accordion-content">
                                <p>Yes, our custom profile builder is easy to use and does not require any technical language. It's as easy as creating a profile on social media.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInRight">
                        <div class="accordion-trigger" id="headingSix">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">What payment options do you offer?</button>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingSix" data-parent="#accordionFAQ">
                            <div class="accordion-content">
                                <p>We accept all major debit/credit cards. We currently use Stripe as our payment gateway that is well known for its safe and secure payments processing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInRight">
                        <div class="accordion-trigger" id="headingSeven">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Do I have to download an app to edit my troolink page?</button>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionFAQ">
                            <div class="accordion-content">

                                <p>Troo.link is accessible using your web browser hence does not require any app download.</p>

                                <p>troo.link dashboard can be accessed from any device hence you can edit your profile pages on the move.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item wow fadeInRight">
                        <div class="accordion-trigger" id="headingEight">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Do you offer managed services for my profile?</button>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingEight" data-parent="#accordionFAQ">
                            <div class="accordion-content">
                                <p>Yes, We offer managed services to our subscribers for an additioanl cost. This includes building your profile as per your brand requirements and managing it on a monthly retainer. </p>

                                <p>To get more information you can email our business team at business@troo.link </p>

                                <p>You can also write to us from our Contact Us Page</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item wow fadeInRight">
                        <div class="accordion-trigger" id="headingNine">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Can I cancel my subscription at any time, do you offer refund?</button>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="headingNine" data-parent="#accordionFAQ">
                            <div class="accordion-content">
                                <p>Cancelling Subscription- Yes, you can cancel your plan at any time, however the account will remain active untill the plan's expiry date, unless you decide to delete the account. </p>

                                <p>Refunds - We do not offer refunds, However we offer 7 days free trial that can help you understand if troolink is the right platform for you.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php ob_start() ?>
<script src="<?= SITE_URL . ASSETS_URL_PATH . 'js/libraries/lozad.min.js' ?>"></script>

<script>
    /* Lazy loading */
    const observer = lozad();
    observer.observe();
</script>
<?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>