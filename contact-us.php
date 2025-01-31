<!-- Header Include -->
<?php
$pageTitle = "Contact Techmefi - Get in Touch for Loan Assistance & Inquiries";
$pageDescription = "Reach out to Techmefi for personalized loan assistance and inquiries about business lending, residential mortgages, property tax loans, and more. Our team is here to help you with expert advice and support for all your financial needs.";
include 'include/header.php'; ?>

<!-- Banner Section Start -->
<section class="banner inner-banner">
    <div class="container h-100">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h2>Contact Us</h2>
                    <?php
                    // Check if the 'submitted' parameter in the URL is set to 1
                    if (isset($_GET['submitted']) && $_GET['submitted'] == 1) : ?>
                        <p class="th-alert">Thanks for getting in touch, your query will be answered shortly.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- About Section Start -->
<section class="about inner-about amr-about-1 contact-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 align-self-center">
                <div class="top-headings-left">
                    <!-- <h6 class="cl-iPrimary">WE CATER TO YOUR FINANCIAL NEEDS</h6> -->
                    <h3>Have A Question?<br>
                        Drop Us A Message</h3>
                    <p>We are here to assist with all your lending needs. Whether you have inquiries about personal loans, business loans, or mortgage options, our team of financial experts is ready to help. One of our dedicated customer support specialists will get in touch with you shortly.</p>
                    <h6 class="cl-iPrimary text-white">Reach Us at:</h6>
                    <p>We’re committed to helping you achieve your financial goals. Contact us today to explore tailored loan solutions designed to fit your needs.</p>
                    <div class="bottom-links">
                        <a href="tel:+18328650076" class="btn-link"> <i class="ic-5 fa-solid fa-phone fa-beat"></i> +1 (832) 865-0076 </a>
                        <a href="mailto:support@techmefi.com" class="btn-link"> <i class="ic-3 fa-solid fa-envelope fa-beat"></i>support@techmefi.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="top-headings-left">
                    <h3>Contact Us</h3>
                </div>
                <div class="contact-form">
                    <form class="mt-4 form-box" id="contactForm" method="POST" action="contact-mail.php">
                        <fieldset class="header-form">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Full Name <span>*</span></label>
                                    <input type="text" class="form-control name" placeholder="Enter Your Full Name" name="name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="email" class="form-control email" placeholder="Enter Your Email Address" name="email">
                                </div>
                                <div class="col-lg-6 mb-3 phone-banner banner-field-container">
                                    <label for="phonenumber">Phone <span>*</span></label>
                                    <input class="form-control phone" type="tel" name="phonenumber" id="phone-contact">
                                    <span id="valid-msg-contact" class="hide">✓ Valid</span>
                                    <span id="error-msg-contact" class="hide"></span>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Company <span>*</span></label>
                                    <input type="text" class="form-control name" placeholder="Enter Your Company" name="company">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="description">Message <span>*</span></label>
                                    <textarea name="description" class="form-control textarea" placeholder="Enter Your Message" rows="5"></textarea>
                                </div>
                                <div class="form-group col-lg-5">
                                    <button class="btn btn-primary submitform submit" id="phone-submit" type="submit">ask a question <i class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- About Section End -->

<!-- Footer Include -->
<?php include 'include/footer.php'; ?>