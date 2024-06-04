<?php
include("header.php");
?>
<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 100px;
        right: 100px;
        background-color: #51CD5E;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img6">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Contact
            </h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->
<div class="rs-contact contact-style6 pb-120 md-pb-80">
    <div class="rs-contact pt-120 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 md-mb-30">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <img src="assets/images/contact/style1/icons/1.png" alt="images">
                        </div>
                        <div class="content-text">
                            <h4 class="title"><a href="#">Address</a></h4>
                            <p class="services-txt">Supela Bakhara (C.G.)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-30">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <img src="assets/images/contact/style1/icons/2.png" alt="images">
                        </div>
                        <div class="content-text">
                            <h4 class="title"><a href="#">Email Us</a></h4>
                            <span><a href="#">support@gaganvegetables.com</a></span><br>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <img src="assets/images/contact/style1/icons/3.png" alt="images">
                        </div>
                        <div class="content-text">
                            <h4 class="title"><a href="#">Call Us</a></h4>
                            <span><a href="#">(+91) 87707 27871, (+91) 91741 62779</a></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Icons Section End -->
</div>
<!-- Contact Section Start -->
<div id="rs-contact" class="rs-contact contact-style1 contact-modify4 black-bg pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6">
                <div class="contact-map">
                    <iframe
                        src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-section">
                    <div class="contact-wrap">
                        <div class="sec-title2 mb-55 md-mb-35">
                            <span class="sub-title">Contact Us</span>

                            <div class="heading-border-line left-style"></div>
                        </div>
                        <div id="form-messages"></div>
                        <form method="post" action="contact/contact.php" rule="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" name="email" placeholder="E-Mail" required>
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <input class="from-control" type="text" name="mobile" placeholder="Phone Number"
                                        required>
                                </div>

                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" name="message" placeholder="Your Message Here"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <button type="submit" class="readon more submit submit-new">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <a href="https://api.whatsapp.com/send/?phone=918770727871&text=Hello%20I%20would%20like%20to%20know%20more%20information%0Ahttp://gaganvegetables.com&app_absent=0"
                        class="float" target="_blank">
                        <i class="fa fa-whatsapp my-float"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->

<?php
include("footer.php");
?>