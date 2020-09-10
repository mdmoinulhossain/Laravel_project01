<!-- footer -->
<footer class="footer-area">
    <!-- Footer Top Area -->
    <div class="footer-top pt-4 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="footer-single-block">
                        <div class="footer-logo">
                            <a class="navbar-brand text-bold" href="index.html">
                <img src="<?php echo url('/'); ?>/assets/images/logo.png" alt="TutorPortalBD.com">
                            </a>
                        </div>
                        <p class="footer-dec">TutorPortalBD is the Most Popular online tutor matching platform in Bangladesh. TutorPortalBD helps students/parents connect with qualified tutors in-person and online tutors in over 15 different categories.</p>
                        <ul class="footer-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6  mt-3">
                    <div class="footer-block">
                        <h5>Quick Links</h5>
                        <ul class="footer-list">
                             <li><a href="<?php echo url('/'); ?>">Home</a></li>
                            <li><a href="<?php echo url('/'); ?>/request_tutor">Request for Tutor</a></li>
                            <li><a href="<?php echo url('/'); ?>/tutors">Our Tutors</a></li>
                            <li><a href="<?php echo url('/'); ?>/tutor_jobs">Tuition Jobs</a></li>
                            <li><a href="<?php echo url('/'); ?>/faq">FAQ</a></li>
                            <li><a href="<?php echo url('/'); ?>/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="footer-block">
                        <h5>Office Location</h5>
                        <div class="newsletter-wrap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38703636307!2d90.2792402583574!3d23.780573258349722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1597833428501!5m2!1sbn!2sbd" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--// Footer Top Area -->

    <!-- Footer-bottom Area -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right py-2 text-center text-white">
                        <p>&copy; 2020-<?php echo date("Y"); ?> | TutorPortalBD | <a href="https://www.facebook.com/ges100" target="_blanck">GoldenEyes LTD</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/Footer-botton Area -->


</footer>



<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script data-cfasync="false" src="<?php echo url('/'); ?>/assets/js/email-decode.min.js"></script><script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v4.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = '<?php echo url('/'); ?>/assets/js/facebook.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="657190834616380"
  theme_color="#7646ff"
  logged_in_greeting="Hello! How can we help you?"
  logged_out_greeting="Hello! How can we help you?">
      </div>



</div>

<script src="<?php echo url('/'); ?>/assets/js/app.js"></script>
<script src="<?php echo url('/'); ?>/assets/js/custom.js"></script>
<script src="<?php echo url('/'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo url('/'); ?>/assets/js/top.js"></script>
<script src="<?php echo url('/'); ?>/assets/js/google.js"></script>

</body>
</html>
<!-- footer -->
