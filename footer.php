<footer class="footer">
    <div class="footer__logo">
        <img src="<?php echo get_template_directory_uri() ;?>/dist/assets/img/global/logo-white.svg" alt="">
    </div>
    <div class="footer__icons">
        <ul class="social-list">
            <!-- Icon 1 -->
            <li>
                <a target="_blank" href="<?= get_field('facebook'); ?>"><svg aria-hidden="true" focusable="false"
                        data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z">
                        </path>
                    </svg>
                </a>
            </li>
            <!-- Icon 2 -->
            <li>
                <a target="_blank" href="<?= get_field('youtube'); ?>"><svg aria-hidden="true" focusable="false"
                        data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                        </path>
                    </svg>
                </a>
            </li>
            <!-- Icon 3 -->
            <li>
                <a target="_blank" href="<?= get_field('linkedin'); ?>">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin"
                        class="svg-inline--fa fa-linkedin fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                        </path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>

    <div class="footer__links">
        <ul>
            <li>
                <a href="#" target="_blank"></a>
            </li>
            <li>
                <a href="https://www.hackerusa.com/privacy-policy/" target="_blank">Privacy Policy</a>
            </li>
        </ul>
    </div>
    <div class="footer__nav">
        <nav class="footer-nav">
        <?php
          if( has_nav_menu( 'secondary' ) ) {
            wp_nav_menu([
                'theme_location'  => 'secondary',
                'container'       => false,
                'menu_class'      => false,
            ]);
        }
    ?>
        </nav>
    </div>

  
</footer>


<?php wp_footer(); ?>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6264576.js"></script>
<!-- End of HubSpot Embed Code -->
</body>

</html>