<!doctype html>
<html class="no-js" lang="en">
<?php
include('inc/head.php')
?>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <?php
    include('inc/header.php')
    ?>
    <!-- end header -->
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url(images/1920.png);">
        <div class="opacity-medium bg-penguin-white"></div>
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div class="col-12 page-title-large text-center d-flex align-items-center justify-content-center flex-column">

                    <h1 class="alt-font text-black font-weight-500 no-margin-bottom">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->

    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                            <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we’ll be in touch soon!</span>
                            <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                        </div>
                        <div class="col-12">
                            <!-- start contact form -->
                            <form action="connection.php" method="post">
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="text" name="wName" id="wName" placeholder="Your name">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="email" name="wEmail" id="wEmail" placeholder="Your email address">
                                        <input class="medium-input bg-white mb-0" type="tel" name="wNumber" id="wNumber" placeholder="Your mobile">
                                    </div>
                                    <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                        <textarea class="medium-textarea h-200px bg-white" name="wDescription" id="wDescription" placeholder="Your message"></textarea>
                                    </div>
                                    <div class="col text-left sm-margin-30px-bottom">
                                        <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                        <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                    </div>
                                    <div class="col text-center text-md-right">
                                        <input type="hidden" name="redirect" value="">
                                        <button class="btn btn-medium btn-iris-blue mb-0" type="submit" name="saveWeb" id="saveWeb">Send Message</button>
                                    </div>
                                </div>
                                <div class="form-results d-none"></div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->

    <!-- end section -->
    <!-- start section -->
    <section class="padding-100px-tb md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 text-center text-sm-right xs-margin-20px-bottom">
                    <span class="alt-font font-weight-500 text-extra-large text-extra-dark-gray d-block letter-spacing-minus-1-half">Connect with social media</span>
                </div>
                <div class="col-12 col-md-2 d-none d-md-block">
                    <span class="w-100 h-1px d-block bg-medium-gray"></span>
                </div>
                <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 social-icon-style-02 text-center text-sm-left">
                    <ul class="small-icon">
                    
                        <li><a class="instagram text-extra-dark-gray text-sm-left" href="https://www.instagram.com/mdentcare9/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="linkedin text-extra-dark-gray text-sm-left" href="https://wa.me/9727056971?text=Hello" target="_blank"><i class="fab fa-whatsapp"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0 wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col h-600px p-0 md-h-450px xs-h-300px">

                    <iframe class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.107080111827!2d72.78507687591272!3d21.148136483666498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0538af63c2011%3A0x77c8588fa8f1b16!2sM%20Dent%20Care!5e0!3m2!1sen!2sin!4v1689882521991!5m2!1sen!2sin"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start footer -->
    <?php
    include('inc/footer.php')
    ?>
    <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>