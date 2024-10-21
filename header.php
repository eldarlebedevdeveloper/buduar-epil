<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1122813425401109');
    // fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1122813425401109&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depilacja laserowa w Poznaniu dla kobiet i mężczyzn | Buduar Epil</title>
    <meta name="description"
        content="Depilacja laserowa w Poznaniu. Bezbolesne usuwanie włosów z dowolnych obszarów ciała. Bezpieczne i skuteczne zabiegi dla kobiet i mężczyzn.">
    <!-- <link rel="stylesheet" href="/css/all.min.css"> -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Forum&family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
 
<body>
    <header>
        <div id="preload"></div>
        <div class="top ">
            <div class="container">
                <?php if(is_front_page()){ ?>
                <a href="#slider_services" class="logo rotate scroll-link"><img
                        src="<?php echo get_template_directory_uri();?>/image/logo.png" loading="lazy"
                        alt="buduar Epic">
                    <p><span>Buduar Epil</span><span> - <?php _e('depilacja laserowa', 'buduar-epil-theme'); ?>.<br> Święty Marcin 12/2a, Poznań, Polska 61-803</span>
                        <p>
                </a>
                <?php }else { ?>
                  <?php
                        $current_language = pll_current_language();
                        $language_switcher = $current_language == 'uk' ? 'uk' : '';
                    ?>
                <a href="/<?php echo $language_switcher; ?>" class="logo rotate"><img src="<?php echo get_template_directory_uri();?>/image/logo.png"
                        loading="lazy" alt="buduar Epic">
                    <p><span>Buduar Epil</span><span> - depilacja laserowa.<br> Święty Marcin 12/2a, Poznań, Polska 61-803</span>
                        <p>
                </a>
                <?php } ?>

                <div id="menu">
                    <?php
                        $current_language = pll_current_language();
                        $language_switcher = $current_language == 'uk' ? 'uk' : '';
                         
                    ?>
                    <?php if(is_front_page()){?> 
                    <nav>
                        <a href="#services"><?php _e('Usługi', 'buduar-epil-theme'); ?></a>
                        <a href="#reviews"><?php _e('Opinie', 'buduar-epil-theme'); ?></a>
                        <a href="#sale"><?php _e('Promocje', 'buduar-epil-theme'); ?></a>
                        <a href="#results"><?php _e('Wyniki', 'buduar-epil-theme'); ?></a>
                        <a href="#contacts"><?php _e('Kontakt', 'buduar-epil-theme'); ?></a>
                    </nav>
                    <?php }else { ?> 
                    <nav>
                        <a href="<?php echo $language_switcher == '' ? '' : '/' . $language_switcher; ?>/#services"><?php _e('Usługi', 'buduar-epil-theme'); ?></a>
                        <a href="<?php echo $language_switcher == '' ? '' : '/' . $language_switcher; ?>/#reviews"><?php _e('Opinie', 'buduar-epil-theme'); ?></a>
                        <a href="<?php echo $language_switcher == '' ? '' : '/' . $language_switcher; ?>/#sale"><?php _e('Promocje', 'buduar-epil-theme'); ?></a>
                        <a href="<?php echo $language_switcher == '' ? '' : '/' . $language_switcher; ?>/#results"><?php _e('Wyniki', 'buduar-epil-theme'); ?></a>
                        <a href="<?php echo $language_switcher == '' ? '' : '/' . $language_switcher; ?>/#contacts"><?php _e('Kontakt', 'buduar-epil-theme'); ?></a>
                    </nav>
                    <?php } ?>

                    <span class="btn btn_order  btn_order"><?php _e(' Umów się na wizytę', 'buduar-epil-theme'); ?></span>
                </div>
                <div class="contacts">
                    <div class="contacts_top">

                        <?php // do_shortcode("[language-switcher]"); ?>

                        <p> <?php _e('Pn-Sob: 10:00-19:00', 'buduar-epil-theme'); ?></p>
                        <div id="lang">
                            <?php
                                if ( function_exists( 'pll_the_languages' ) ) {
                                    pll_the_languages( array('show_names' => 1 ) );
                                }
                            ?>
                        </div>
                    </div>
                    <div class="contacts_socials">
                        <a href="https://t.me/Buduar_epil_Poznan"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0,0,256,256" width="32px" height="32px">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path
                                                d="M46.137,6.552c-0.75,-0.636 -1.928,-0.727 -3.146,-0.238h-0.002c-1.281,0.514 -36.261,15.518 -37.685,16.131c-0.259,0.09 -2.521,0.934 -2.288,2.814c0.208,1.695 2.026,2.397 2.248,2.478l8.893,3.045c0.59,1.964 2.765,9.21 3.246,10.758c0.3,0.965 0.789,2.233 1.646,2.494c0.752,0.29 1.5,0.025 1.984,-0.355l5.437,-5.043l8.777,6.845l0.209,0.125c0.596,0.264 1.167,0.396 1.712,0.396c0.421,0 0.825,-0.079 1.211,-0.237c1.315,-0.54 1.841,-1.793 1.896,-1.935l6.556,-34.077c0.4,-1.82 -0.156,-2.746 -0.694,-3.201zM22,32l-3,8l-3,-10l23,-17z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </span></a>
                        <a class="desctop" target="_blank"
                            href="https://www.instagram.com/buduar_epil_poznan__pl?igsh=YXVpMGM4YmMyeGlq"
                            aria-label="Buduar Elip Instagram">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23"
                                    fill="none">
                                    <rect x="1" y="1.89062" width="19.43" height="19.43" rx="4" stroke="#F8F8F8"
                                        stroke-width="2" />
                                    <circle cx="10.7" cy="11.8901" r="4.5" stroke="#F8F8F8" stroke-width="2" />
                                    <circle cx="16.5" cy="6" r="1" stroke="#F8F8F8" />
                                </svg>
                            </span>
                        </a>
                        <a href="https://wa.me/48732954980"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none">
                                    <path
                                        d="M2.76695 17.6731L2.88346 17.3258L2.66782 17.0296C1.43481 15.3363 0.709677 13.2515 0.709677 11C0.709677 5.32527 5.32424 0.709677 10.9973 0.709677H11.0027C16.6757 0.709677 21.2903 5.32659 21.2903 11C21.2903 16.6734 16.6757 21.2903 11.0027 21.2903C8.90898 21.2903 6.96981 20.6681 5.3433 19.5906L5.05952 19.4026L4.73528 19.5063L1.84167 20.4313L2.76695 17.6731Z"
                                        fill="#F8F8F8" stroke="#F8F8F8" stroke-width="1.41935" />
                                    <path
                                        d="M15.8213 14.6596C15.6176 15.2775 14.8091 15.7899 14.1642 15.9396C13.723 16.0405 13.1467 16.121 11.2067 15.2571C8.72525 14.1528 7.12725 11.4443 7.00271 11.2685C6.88344 11.0928 6 9.83434 6 8.53279C6 7.23125 6.61535 6.59749 6.86338 6.32539C7.06709 6.10204 7.40379 6 7.72677 6C7.83126 6 7.9252 6.00567 8.00964 6.0102C8.25768 6.02154 8.38222 6.03741 8.54582 6.45803C8.74953 6.98523 9.24561 8.28677 9.30471 8.42055C9.36488 8.55433 9.42504 8.73573 9.3406 8.91147C9.26144 9.09286 9.19178 9.17336 9.06723 9.32755C8.94268 9.48174 8.82447 9.59965 8.69992 9.76518C8.58593 9.90916 8.45716 10.0634 8.60071 10.3298C8.74425 10.5905 9.24033 11.4601 9.97072 12.1585C10.9133 13.0598 11.6774 13.3478 11.9508 13.4703C12.1545 13.561 12.3973 13.5394 12.5461 13.3694C12.735 13.1505 12.9683 12.7878 13.2058 12.4306C13.3747 12.1744 13.5879 12.1426 13.8116 12.2333C14.0396 12.3184 15.246 12.9589 15.4941 13.0916C15.7421 13.2254 15.9057 13.2889 15.9659 13.4011C16.025 13.5133 16.025 14.0405 15.8213 14.6596Z"
                                        fill="#785040" />
                                </svg>
                            </span></a>
                        <a class="phone" href="tel:+48 732 954 980">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g clip-path="url(#clip0_1_6311)">
                                    <path
                                        d="M16.8598 20.9998C13.1854 20.9951 9.66289 19.5333 7.0647 16.9351C4.46652 14.337 3.00476 10.8144 3 7.14004C3 6.04206 3.43617 4.98905 4.21256 4.21266C4.98895 3.43627 6.04196 3.0001 7.13994 3.0001C7.37244 2.99833 7.60456 3.01943 7.83293 3.0631C8.05371 3.09577 8.27074 3.15003 8.48092 3.2251C8.62874 3.27697 8.76046 3.36652 8.86306 3.4849C8.96566 3.60328 9.03558 3.7464 9.06591 3.90009L10.2989 9.30001C10.3321 9.44659 10.3281 9.59915 10.2873 9.74378C10.2464 9.88841 10.1699 10.0205 10.0649 10.128C9.9479 10.254 9.9389 10.263 8.83191 10.839C9.7184 12.7837 11.2738 14.3455 13.2149 15.2399C13.7998 14.1239 13.8088 14.1149 13.9348 13.9979C14.0423 13.8929 14.1744 13.8165 14.3191 13.7756C14.4637 13.7347 14.6163 13.7307 14.7628 13.7639L20.1627 14.9969C20.3115 15.0314 20.4491 15.1033 20.5624 15.2056C20.6758 15.3079 20.7612 15.4374 20.8107 15.5819C20.8867 15.7955 20.9439 16.0154 20.9817 16.2389C21.018 16.4651 21.036 16.6938 21.0357 16.9229C21.0191 18.0162 20.5707 19.0585 19.7883 19.8223C19.006 20.5862 17.9532 21.0095 16.8598 20.9998Z"
                                        fill="#785040" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_6311">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            +48 732 954 980</a>
                        <div id="burger"></div>
                    </div>
                </div>

            </div>
        </div>
    </header>