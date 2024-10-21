<script>
$(document).ready(function() {
    $('#preload').fadeOut();
});
</script>

<footer>
    <div class="container">
        <div class="footer_line">
            <div class="footer_logo rotate">
                <img src="<?php echo get_template_directory_uri();?>/image/logo.png" loading="lazy" alt="buduar Epil">
                <p>
                    <?php _e('Buduar Epil - depilacja laserowa w Poznaniu', 'buduar-epil-theme'); ?>
                </p> 
            </div>
            <div class=" footer_contact">
                <div class="address">
                    <p> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 14 22" fill="none">
                            <path
                                d="M0.5 8.5C0.5 10.9242 5.07246 18.0797 7.30435 20.908C9.25217 18.4838 12.0797 11.8283 13.5 9C13.2971 6.37374 12.1739 1.5 7.30435 1.5C1.21739 1.5 0.5 5.4697 0.5 8.5Z"
                                fill="#785040" />
                            <path
                                d="M7.43077 21.0397C7.20205 21.2841 6.81089 21.2727 6.59683 21.0154L6.56923 20.9822C6.3 20.6945 0 12.7548 0 7.97945C0 3.83699 3.12308 0.5 7 0.5C10.8769 0.5 14 3.83699 14 7.97945C14 12.7548 7.7 20.6945 7.43077 21.0397V21.0397ZM7 1.65068C3.71538 1.65068 1.07692 4.46986 1.07692 7.97945C1.07692 11.1283 4.38465 16.1285 6.21836 18.6622C6.60598 19.1978 7.39402 19.1978 7.78164 18.6622C9.61535 16.1285 12.9231 11.1283 12.9231 7.97945C12.9231 4.46986 10.2846 1.65068 7 1.65068Z"
                                fill="#785040" />
                            <path
                                d="M7 10.5C5.32 10.5 4 9.18 4 7.5C4 5.82 5.32 4.5 7 4.5C8.68 4.5 10 5.82 10 7.5C10 9.18 8.68 10.5 7 10.5ZM7 5.7C5.98 5.7 5.2 6.48 5.2 7.5C5.2 8.52 5.98 9.3 7 9.3C8.02 9.3 8.8 8.52 8.8 7.5C8.8 6.48 8.02 5.7 7 5.7Z"
                                fill="#F8F8F8" />
                        </svg><?php _e('Święty Marcin 12/2a, Poznań, Polska 61-803', 'buduar-epil-theme'); ?></p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <circle cx="10" cy="10.5" r="9" fill="#785040" />
                            <path
                                d="M10 19C14.4 19 18.5 14.9 18.5 10.5C18.5 6.1 14.4 2 10 2C5.6 2 1.5 6.1 1.5 10.5C1.5 14.9 5.6 19 10 19ZM10 0.5C15.5 0.5 20 5 20 10.5C20 16 15.5 20.5 10 20.5C4.5 20.5 0 16 0 10.5C0 5 4.5 0.5 10 0.5ZM14.5 10C14.7761 10 15 10.2239 15 10.5V11C15 11.2761 14.7761 11.5 14.5 11.5H9.5C9.22386 11.5 9 11.2761 9 11V6C9 5.72386 9.22386 5.5 9.5 5.5H10C10.2761 5.5 10.5 5.72386 10.5 6V9.5C10.5 9.77614 10.7239 10 11 10H14.5Z"
                                fill="#F8F8F8" />
                            <circle cx="10" cy="10.5" r="9.5" stroke="#785040" />
                        </svg><?php _e('Pon-Sob: 10:00-19:00', 'buduar-epil-theme'); ?>
                    </p>
                </div>
                <div class="contacts">
                    <a href="tel:+48 732 954 980" class="tel"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_1_6311)">
                                <path
                                    d="M16.8598 20.9998C13.1854 20.9951 9.66289 19.5333 7.0647 16.9351C4.46652 14.337 3.00476 10.8144 3 7.14004C3 6.04206 3.43617 4.98905 4.21256 4.21266C4.98895 3.43627 6.04196 3.0001 7.13994 3.0001C7.37244 2.99833 7.60456 3.01943 7.83293 3.0631C8.05371 3.09577 8.27074 3.15003 8.48092 3.2251C8.62874 3.27697 8.76046 3.36652 8.86306 3.4849C8.96566 3.60328 9.03558 3.7464 9.06591 3.90009L10.2989 9.30001C10.3321 9.44659 10.3281 9.59915 10.2873 9.74378C10.2464 9.88841 10.1699 10.0205 10.0649 10.128C9.9479 10.254 9.9389 10.263 8.83191 10.839C9.7184 12.7837 11.2738 14.3455 13.2149 15.2399C13.7998 14.1239 13.8088 14.1149 13.9348 13.9979C14.0423 13.8929 14.1744 13.8165 14.3191 13.7756C14.4637 13.7347 14.6163 13.7307 14.7628 13.7639L20.1627 14.9969C20.3115 15.0314 20.4491 15.1033 20.5624 15.2056C20.6758 15.3079 20.7612 15.4374 20.8107 15.5819C20.8867 15.7955 20.9439 16.0154 20.9817 16.2389C21.018 16.4651 21.036 16.6938 21.0357 16.9229C21.0191 18.0162 20.5707 19.0585 19.7883 19.8223C19.006 20.5862 17.9532 21.0095 16.8598 20.9998Z"
                                    fill="#785040"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1_6311">
                                    <rect width="24" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>+48 732 954 980</a>
                    <div class="contacts_social">
                        <a href="https://t.me/Buduar_epil_Poznan" aria-label="Buduar Elip Telegram">
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
                        </a>
                        <a href="https://wa.me/48732954980" aria-label="Buduar Elip Whatsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <path
                                    d="M3.0422 17.7654L3.20638 17.276L2.90252 16.8587C1.70452 15.2135 1 13.1882 1 11C1 5.48554 5.48465 1 10.9973 1H11.0027C16.5153 1 21 5.48683 21 11C21 16.5132 16.5153 21 11.0027 21C8.96763 21 7.08397 20.3955 5.50364 19.3486L5.10376 19.0837L4.64688 19.2297L2.29921 19.9802L3.0422 17.7654Z"
                                    fill="#F8F8F8" stroke="#F8F8F8" stroke-width="2" />
                                <path
                                    d="M15.8213 14.6596C15.6176 15.2775 14.8091 15.7899 14.1642 15.9396C13.723 16.0405 13.1467 16.121 11.2067 15.2571C8.72525 14.1528 7.12725 11.4443 7.00271 11.2685C6.88344 11.0928 6 9.83434 6 8.53279C6 7.23125 6.61535 6.59749 6.86338 6.32539C7.06709 6.10204 7.40379 6 7.72677 6C7.83126 6 7.9252 6.00567 8.00964 6.0102C8.25768 6.02154 8.38222 6.03741 8.54582 6.45803C8.74953 6.98523 9.24561 8.28677 9.30471 8.42055C9.36488 8.55433 9.42504 8.73573 9.3406 8.91147C9.26144 9.09286 9.19178 9.17336 9.06723 9.32755C8.94268 9.48174 8.82447 9.59965 8.69992 9.76518C8.58593 9.90916 8.45716 10.0634 8.60071 10.3298C8.74425 10.5905 9.24033 11.4601 9.97072 12.1585C10.9133 13.0598 11.6774 13.3478 11.9508 13.4703C12.1545 13.561 12.3973 13.5394 12.5461 13.3694C12.735 13.1505 12.9683 12.7878 13.2058 12.4306C13.3747 12.1744 13.5879 12.1426 13.8116 12.2333C14.0396 12.3184 15.246 12.9589 15.4941 13.0916C15.7421 13.2254 15.9057 13.2889 15.9659 13.4011C16.025 13.5133 16.025 14.0405 15.8213 14.6596Z"
                                    fill="#785040" />
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/buduar_epil_poznan__pl?igsh=YXVpMGM4YmMyeGlq"
                            aria-label="Buduar Elip Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23"
                                fill="none">
                                <rect x="1" y="1.89062" width="19.43" height="19.43" rx="4" stroke="#F8F8F8"
                                    stroke-width="2" />
                                <circle cx="10.7" cy="11.8901" r="4.5" stroke="#F8F8F8" stroke-width="2" />
                                <circle cx="16.5" cy="6" r="1" stroke="#F8F8F8" />
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=61550341361513"
                            aria-label="Buduar Elip Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="30" viewBox="0 0 18 30"
                                fill="none">
                                <path
                                    d="M17.375 12H11.75V7.5C11.75 6.258 12.758 6.375 14 6.375H16.25V0.75H11.75C8.02175 0.75 5 3.77175 5 7.5V12H0.5V17.625H5V30H11.75V17.625H15.125L17.375 12Z"
                                    fill="#FAFAFA" />
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@buduar_epil_pozna?_t=8nbcUavJhDx"
                            aria-label="Buduar Elip Tiktok">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28"
                                fill="none">
                                <path
                                    d="M17.4815 8.96472C19.233 10.2531 21.3778 11.0111 23.6945 11.0111V7.39884C22.4013 7.11527 21.2565 6.41971 20.3958 5.45217C18.9225 4.50577 17.861 2.94453 17.5498 1.11719H14.302V19.4469C14.2946 21.5837 12.6099 23.3139 10.5323 23.3139C9.30809 23.3139 8.22041 22.7133 7.53163 21.7826C6.30163 21.1437 5.45806 19.8317 5.45806 18.3166C5.45806 16.1738 7.14556 14.4365 9.22756 14.4365C9.62647 14.4365 10.0109 14.5004 10.3716 14.6182V10.9664C5.90047 11.0615 2.30469 14.822 2.30469 19.447C2.30469 21.7557 3.20009 23.8486 4.65341 25.3779C5.9645 26.2841 7.54278 26.8127 9.24097 26.8127C13.7921 26.8127 17.4816 23.0148 17.4816 18.3299L17.4815 8.96472Z"
                                    fill="white" />
                                <path
                                    d="M23.6945 7.39876V6.42223C22.5284 6.42398 21.3853 6.08782 20.3958 5.45218C21.2717 6.43914 22.4249 7.11975 23.6945 7.39895M17.5497 1.1171C17.52 0.942497 17.4973 0.766725 17.4814 0.590221V0H12.997V18.3299C12.9899 20.4666 11.3052 22.1968 9.2275 22.1968C8.63849 22.1977 8.05754 22.0559 7.53156 21.7828C8.22034 22.7133 9.30803 23.3139 10.5322 23.3139C12.6097 23.3139 14.2946 21.5838 14.3019 19.447V1.1172L17.5497 1.1171ZM10.3718 10.9663V9.92658C9.99708 9.87389 9.6193 9.8475 9.24109 9.8476C4.68953 9.8476 1 13.6454 1 18.3299C1 21.2669 2.45003 23.8552 4.65353 25.3778C3.20022 23.8486 2.30481 21.7555 2.30481 19.4469C2.30481 14.822 5.9005 11.0614 10.3718 10.9663Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <script>
        $(document).ready(function() {
            $('#preload').fadeOut();
        });
        </script>
        <div class="footer_copy">
            <p><?php _e('© 2024 Buduar Epil. Wszelkie prawa zastrzeżone', 'buduar-epil-theme'); ?></p>
            <a href="/<?php echo pll_current_language() == 'uk' ? 'privacy-ua' : 'privacy'; ?>"><?php _e('Polityka prywatności', 'buduar-epil-theme'); ?>
            </a> 
        </div>
    </div> 
</footer>
<script type="text/javascript" src="https://booksy.com/widget/code.js?id=214248&country=pl&lang=pl"></script>
<div class="popups">
    <div class="overflow"></div>
    <div class="popup_wrap">
        <div class="consultation body_form popup_form">
            <div class="close_popup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect x="13.2969" y="41.7891" width="41" height="2" transform="rotate(-45 13.2969 41.7891)"
                        fill="#121009" />
                    <rect x="14.7109" y="12.7969" width="41" height="2" transform="rotate(45 14.7109 12.7969)"
                        fill="#121009" />
                </svg>
            </div>
            <p><?php _e('Zapisz się na konsultację', 'buduar-epil-theme'); ?></p>
            <form action="">
                <input type="hidden" name="service" value="<?php _e('Zapisz się na konsultację', 'buduar-epil-theme'); ?>">
                <input type="hidden" name="key" value="e3wfsr3ras2qeadw">
                <div><label for=""><?php _e('Imię*', 'buduar-epil-theme'); ?></label><input required placeholder="Marta" name="name" type="text"></div>
                <div><label for=""><?php _e('Numer telefonu*', 'buduar-epil-theme'); ?></label><input required placeholder="+4899-99-99-999" name="phone"
                        type="text"></div>
                <div class="checkbox">
                    <input type="checkbox" name="police" id="police_form">
                    <label for="police_form">
                        <?php _e('Zgadzam się z', 'buduar-epil-theme'); ?>
                            <a href="/<?php echo pll_current_language() == 'uk' ? 'privacy-ua' : 'privacy'; ?>">
                                <?php _e('polityką prywatności', 'buduar-epil-theme'); ?>
                            </a> 
                            <?php _e('i wyrażam zgodę na wykorzystywanie danych osobowych', 'buduar-epil-theme'); ?>
                    </label>

                </div>
                <button class="btn"><?php _e('Zapisać się', 'buduar-epil-theme'); ?></button>
            </form>
        </div>
        <div class=" sale_form body_form popup_form">
            <div class="close_popup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect x="13.2969" y="41.7891" width="41" height="2" transform="rotate(-45 13.2969 41.7891)"
                        fill="#121009" />
                    <rect x="14.7109" y="12.7969" width="41" height="2" transform="rotate(45 14.7109 12.7969)"
                        fill="#121009" />
                </svg>
            </div>
            <p><?php _e('Otrzymaj 15% zniżki na pierwszą wizytę!', 'buduar-epil-theme'); ?></p>
            <form action="">
                <input type="hidden" name="service" value="<?php _e('Skorzystaj z 15 procent  zniżki na pierwszą wizytę!', 'buduar-epil-theme'); ?>">
                <input type="hidden" name="key" value="e3wfsr3ras2qeadw">
                <div><label for=""><?php _e('Imię*', 'buduar-epil-theme'); ?></label><input required placeholder="Marta" name="name" type="text"></div>
                <div><label for=""><?php _e('Numer telefonu*', 'buduar-epil-theme'); ?></label><input required placeholder="+4899-99-99-999" name="phone"
                        type="text"></div>
                <div class="checkbox">
                    <input type="checkbox" name="police" id="police_form_sale">
                    <label for="police_form_sale">
                        <?php _e('Zgadzam się z', 'buduar-epil-theme'); ?>  <a href="/<?php echo pll_current_language() == 'uk' ? 'privacy-ua' : 'privacy'; ?>"><?php _e('polityką prywatności', 'buduar-epil-theme'); ?></a> <?php _e('i wyrażam zgodę na wykorzystywanie danych osobowych', 'buduar-epil-theme'); ?>

                    </label>

                </div>
                <button class="btn"><?php _e('Uzyskaj zniżkę', 'buduar-epil-theme'); ?></button>
            </form>
        </div>
        <div class=" gaid_form body_form popup_form">
            <div class="close_popup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect x="13.2969" y="41.7891" width="41" height="2" transform="rotate(-45 13.2969 41.7891)"
                        fill="#121009" />
                    <rect x="14.7109" y="12.7969" width="41" height="2" transform="rotate(45 14.7109 12.7969)"
                        fill="#121009" />
                </svg>
            </div>
            <p><?php _e('Pobierz przewodnik "Jak przygotować się do depilacji laserowej"', 'buduar-epil-theme'); ?></p>
            <form action="">
                <input type="hidden" name="service"
                    value="<?php _e('Pobierz przewodnik "Jak przygotować się do depilacji laserowej"', 'buduar-epil-theme'); ?>">
                <input type="hidden" name="key" value="e3wfsr3ras2qeadw">
                <div><label for=""><?php _e('Imię*', 'buduar-epil-theme'); ?></label><input required placeholder="Marta" name="name" type="text"></div>
                <div><label for=""><?php _e('Numer telefonu*', 'buduar-epil-theme'); ?></label><input required placeholder="+4899-99-99-999" name="phone"
                        type="text"></div> 
                <div class="checkbox"> 
                    <input type="checkbox" name="police" id="police_form_gaid">
                    <label for="police_form_gaid">
                        <?php _e('Zgadzam się z', 'buduar-epil-theme'); ?>  <a href="/<?php echo pll_current_language() == 'uk' ? 'privacy-ua' : 'privacy'; ?>"><?php _e('polityką prywatności', 'buduar-epil-theme'); ?></a> <?php _e('i wyrażam zgodę na wykorzystywanie danych osobowych', 'buduar-epil-theme'); ?>

                    </label>

                </div>
                <button class="btn get_gaid_ua"><?php _e('zdobądź przewodnik', 'buduar-epil-theme'); ?></button>
            </form> 
        </div>
        <div class=" proposition_form body_form popup_form">
            <div class="close_popup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect x="13.2969" y="41.7891" width="41" height="2" transform="rotate(-45 13.2969 41.7891)"
                        fill="#121009" />
                    <rect x="14.7109" y="12.7969" width="41" height="2" transform="rotate(45 14.7109 12.7969)"
                        fill="#121009" />
                </svg>
            </div>
            <p><?php _e('Skorzystaj z gorącej oferty 5+1', 'buduar-epil-theme'); ?></p>
            <form action="">
                <input type="hidden" name="service" value="<?php _e('Skorzystaj z gorącej oferty 5+1', 'buduar-epil-theme'); ?>">
                <input type="hidden" name="key" value="e3wfsr3ras2qeadw">
                <div><label for=""><?php _e('Imię*', 'buduar-epil-theme'); ?></label><input required placeholder="Marta" name="name" type="text"></div>
                <div><label for=""><?php _e('Numer telefonu*', 'buduar-epil-theme'); ?></label><input required placeholder="+4899-99-99-999" name="phone"
                        type="text"></div>
                <div class="checkbox">
                    <input type="checkbox" name="police" id="police_form_5">
                    <label for="police_form_5">
                        <?php _e('Zgadzam się z', 'buduar-epil-theme'); ?>  <a href="/<?php echo pll_current_language() == 'uk' ? 'privacy-ua' : 'privacy'; ?>"><?php _e('polityką prywatności', 'buduar-epil-theme'); ?></a> <?php _e('i wyrażam zgodę na wykorzystywanie danych osobowych', 'buduar-epil-theme'); ?>

                    </label>

                </div>
                <button class="btn"><?php _e('Skorzystaj', 'buduar-epil-theme'); ?></button>

            </form>

        </div>
        <div class=" order_form body_form popup_form">
            <div class="close_popup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect x="13.2969" y="41.7891" width="41" height="2" transform="rotate(-45 13.2969 41.7891)"
                        fill="#121009" />
                    <rect x="14.7109" y="12.7969" width="41" height="2" transform="rotate(45 14.7109 12.7969)"
                        fill="#121009" />
                </svg>
            </div>
            <p><?php _e('Umów się na wizytę', 'buduar-epil-theme'); ?></p>
            <form action="">
                <input type="hidden" name="service" value="<?php _e('Umów się na wizytę', 'buduar-epil-theme'); ?>">
                <input type="hidden" name="key" value="e3wfsr3ras2qeadw">
                <div><label for=""><?php _e('Imię*', 'buduar-epil-theme'); ?></label><input required placeholder="Marta" name="name" type="text"></div>
                <div><label for=""><?php _e('Numer telefonu*', 'buduar-epil-theme'); ?></label><input required placeholder="+4899-99-99-999" name="phone"
                        type="text"></div>
                <div class="checkbox">
                    <input type="checkbox" name="police" id="police_form_order">
                    <label for="police_form_order">
                        <?php _e('Zgadzam się z', 'buduar-epil-theme'); ?>  <a href="/<?php echo pll_current_language() == 'uk' ? 'privacy-ua' : 'privacy'; ?>"><?php _e('polityką prywatności', 'buduar-epil-theme'); ?></a> <?php _e('i wyrażam zgodę na wykorzystywanie danych osobowych', 'buduar-epil-theme'); ?>

                    </label>

                </div>
                <button class="btn"><?php _e('Zapisać się', 'buduar-epil-theme'); ?></button>

            </form>
            <span>
                <?php _e('Lub zarejestruj się przez Booksy', 'buduar-epil-theme'); ?>
            </span>
            <span class="btn btn_booksy"><?php _e('Zarejestruj się przez Booksy', 'buduar-epil-theme'); ?></span>
        </div>
        <div class="vaucher_from">
            <div class="form_image">
                <img src="<?php echo get_template_directory_uri();?>/image/popup_image.jpg" loading="lazy"
                    alt="ZAMÓWIĆ VOUCHER PODARUNKOWY NA JEDNĄ PROCEDURĘ LUB KOMPLEKS">

            </div>
            <div class="form_body">
                <div class="close_popup">
                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                        <rect x="13.2969" y="41.7891" width="41" height="2" transform="rotate(-45 13.2969 41.7891)"
                            fill="#121009" />
                        <rect x="14.7109" y="12.7969" width="41" height="2" transform="rotate(45 14.7109 12.7969)"
                            fill="#121009" />
                    </svg>
                </div>
                <p><?php _e('ZAMÓWIĆ VOUCHER PODARUNKOWY NA JEDNĄ PROCEDURĘ LUB KOMPLEKS', 'buduar-epil-theme'); ?></p> 
                <form action="">
                    <input type="hidden" name="service"
                        value="<?php _e('ZAMÓWIĆ VOUCHER PODARUNKOWY NA JEDNĄ PROCEDURĘ LUB KOMPLEKS', 'buduar-epil-theme'); ?>">
                    <input type="hidden" name="key" value="e3wfsr3ras2qeadw">
                    <div><label for=""><?php _e('Imię*', 'buduar-epil-theme'); ?></label><input required placeholder="Marta" name="name" type="text">
                    </div>
                    <div><label for=""><?php _e('Numer telefonu*', 'buduar-epil-theme'); ?></label><input required placeholder="+4899-99-99-999" name="phone"
                            type="text"></div>
                    <div class="checkbox">
                        <input type="checkbox" name="police" id="police_form_voucher">
                        <label for="police_form_voucher">
                                    <?php _e('Zgadzam się z', 'buduar-epil-theme'); ?>  <a href="/<?php echo pll_current_language() == 'uk' ? 'privacy-ua' : 'privacy'; ?>"><?php _e('polityką prywatności', 'buduar-epil-theme'); ?></a> <?php _e('i wyrażam zgodę na wykorzystywanie danych osobowych', 'buduar-epil-theme'); ?>

                        </label>
 
                    </div>
                    <button class="btn"><?php _e('Zamówienie', 'buduar-epil-theme'); ?></button>
                </form>
            </div>
        </div>
        <div class="success">
            <div class="close_popup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect x="13.2969" y="41.7891" width="41" height="2" transform="rotate(-45 13.2969 41.7891)"
                        fill="#121009" />
                    <rect x="14.7109" y="12.7969" width="41" height="2" transform="rotate(45 14.7109 12.7969)"
                        fill="#121009" />
                </svg>
            </div>
            <p><?php _e('Aplikacja zakończyła się sukcesem!', 'buduar-epil-theme'); ?></p>
            <span><?php _e('Skontaktujemy się z Tobą wkrótce', 'buduar-epil-theme'); ?></span>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>