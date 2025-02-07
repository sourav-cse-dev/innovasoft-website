<?php
    /**
     * The template for displaying the footer.
     *
     * Contains the closing of the #content div and all content after
     *
     * @package VW Corporate Lite
     */
?>

<footer class="text-center text-lg-start" role="contentinfo" style="margin-top: 50px;">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/innovasoft.png" alt="innovasoft">
                <p class="mt-2 paragraph">
                    A software development Company organised and incorporated in 2023 under the Companies Act of
                    Bangladesh.
                </p>
                <!-- Section: Social -->
                <section class="">
                    <div>
                        <h6 class="text-uppercase footer-title">Follow Us on</h6>
                        <hr class="mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #000; height: 2px; border: 1px solid;" />
                    </div>
                    <a href="https://www.facebook.com/innovasoftltd" class=" me-3">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class=" me-3">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class=" me-3">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/innovasoft-limited" class=" me-3">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class=" me-3">
                        <i class="fab fa-youtube"></i>
                    </a>
                </section>
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 d-none d-lg-block">
                <div class="d-flex justify-content-center">
                    <div>
                        <h6 class="text-uppercase footer-title">Visit</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 40px; background-color: #000; height: 2px;border: 1px solid;" />
                        <p>
                            <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="footer-text">About Us</a>
                        </p>
                        <!-- <p>
                            <a href="#" class="footer-text">Our Services</a>
                        </p> -->
                        <!-- <p>
                            <a href="#" class="footer-text">Portfolios</a>
                        </p> -->
                        <p>
                            <a href="<?php echo esc_url(home_url('/career')); ?>" class="footer-text">Career</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 d-none d-lg-block">
                <h6 class="text-uppercase footer-title">Help</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 40px; background-color: #000; height: 2px;border: 1px solid;" />

                <p>
                    <a href="<?php echo esc_url(home_url('/our-services/staff-augmentation')); ?>"
                        class="footer-text">Staff Augmentation</a>
                </p>
                <p>
                    <a href="<?php echo esc_url(home_url('/our-services/full-stack-development')); ?>"
                        class="footer-text">Full-Stack Development</a>
                </p>
                <p>
                    <a href="<?php echo esc_url(home_url('/our-services/mvp-development-service')); ?>"
                        class="footer-text">MVP Development</a>
                </p>
                <p>
                    <a href="<?php echo esc_url(home_url('/our-services/global-expansion')); ?>"
                        class="footer-text">Global Expansion</a>
                </p>
            </div>
            <!-- Grid column -->



            <!-- Grid column -->
            <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase footer-title">Contact</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 40px; background-color: #000; height: 2px;border: 1px solid;" />
                <ul class="fa-ul" style="margin-left: 1.65em;">
                    <li class="mb-3">
                        <div>
                            <span class="fa-li"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                    viewBox="0 0 18 21" fill="none">
                                    <path
                                        d="M14.657 14.6567L10.414 18.8997C10.2284 19.0854 10.0081 19.2328 9.76556 19.3333C9.52303 19.4339 9.26305 19.4856 9.0005 19.4856C8.73796 19.4856 8.47798 19.4339 8.23544 19.3333C7.99291 19.2328 7.77256 19.0854 7.587 18.8997L3.343 14.6567C2.22422 13.5379 1.46234 12.1124 1.15369 10.5606C0.845043 9.00873 1.00349 7.40022 1.60901 5.93844C2.21452 4.47665 3.2399 3.22725 4.55548 2.34821C5.87107 1.46918 7.41777 1 9 1C10.5822 1 12.1289 1.46918 13.4445 2.34821C14.7601 3.22725 15.7855 4.47665 16.391 5.93844C16.9965 7.40022 17.155 9.00873 16.8463 10.5606C16.5377 12.1124 15.7758 13.5379 14.657 14.6567Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12 8.99951C12 9.79516 11.6839 10.5582 11.1213 11.1208C10.5587 11.6834 9.79565 11.9995 9 11.9995C8.20435 11.9995 7.44129 11.6834 6.87868 11.1208C6.31607 10.5582 6 9.79516 6 8.99951C6 8.20386 6.31607 7.4408 6.87868 6.87819C7.44129 6.31558 8.20435 5.99951 9 5.99951C9.79565 5.99951 10.5587 6.31558 11.1213 6.87819C11.6839 7.4408 12 8.20386 12 8.99951Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="footer-text">House#B-109, Road#8, Mohakhali DOHS, Dhaka-1206, Bangladesh
                            </span>
                        </div>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 17 17" fill="none">
                                <path
                                    d="M1 2.66667C1 2.22464 1.17559 1.80072 1.48816 1.48816C1.80072 1.17559 2.22464 1 2.66667 1H5.4C5.57483 1.00013 5.74519 1.05525 5.88696 1.15754C6.02874 1.25984 6.13475 1.40413 6.19 1.57L7.43833 5.31417C7.50158 5.50445 7.4941 5.71116 7.41726 5.89637C7.34042 6.08158 7.19938 6.23288 7.02 6.3225L5.13917 7.26417C6.0611 9.30461 7.69538 10.9389 9.73583 11.8608L10.6775 9.98C10.7671 9.80062 10.9184 9.65958 11.1036 9.58274C11.2888 9.5059 11.4956 9.49841 11.6858 9.56167L15.43 10.81C15.596 10.8653 15.7404 10.9714 15.8427 11.1134C15.945 11.2553 16 11.4259 16 11.6008V14.3333C16 14.7754 15.8244 15.1993 15.5118 15.5118C15.1993 15.8244 14.7754 16 14.3333 16H13.5C6.59667 16 1 10.4033 1 3.5V2.66667Z"
                                    stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg></span><span class=" footer-text">+880 1714 066 521</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 20 16" fill="none">
                                <path
                                    d="M1 4L8.89 9.26C9.21866 9.47928 9.6049 9.5963 10 9.5963C10.3951 9.5963 10.7813 9.47928 11.11 9.26L19 4M3 15H17C17.5304 15 18.0391 14.7893 18.4142 14.4142C18.7893 14.0391 19 13.5304 19 13V3C19 2.46957 18.7893 1.96086 18.4142 1.58579C18.0391 1.21071 17.5304 1 17 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V13C1 13.5304 1.21071 14.0391 1.58579 14.4142C1.96086 14.7893 2.46957 15 3 15Z"
                                    stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg></span><span class=" footer-text">info@innovasoftltd.com</span>
                    </li>
                </ul>
            </div>

            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <div>
                    <h6 class="text-uppercase footer-title">Find us on map</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 40px; background-color: #000; height: 2px;border: 1px solid;" />
                </div>
                <div class="footer-map-div">
                    <?php
                        // Example of embedding Contact Form 7 shortcode in a PHP file
                        $map_shortcode = '[iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.024286646024!2d90.39341997608122!3d23.78214947864877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e80aaa2b3%3A0xe9a2f353de6c695f!2sInnovaSoft%20Limited!5e0!3m2!1sen!2sbd!4v1706506128000!5m2!1sen!2sbd
"  height="250" style="border-radius:6px;"]';
                        echo do_shortcode($map_shortcode);
                    ?>
                </div>
            </div>
            <!-- Grid column -->
        </div>
        <!--Grid row-->


    </div>
    <!-- Grid container -->
    <div class="text-center p-3 footer-bottom-section">
        <span id="currentYear"></span> © Innovasoft Limited. All Rights Reserved.
    </div>
</footer>
<?php wp_footer(); ?>
<script>
document.getElementById("currentYear").innerHTML = new Date().getFullYear();
</script>
</body>

</html>