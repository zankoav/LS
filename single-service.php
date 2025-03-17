<?php

if (!defined('ABSPATH')) {
    exit;
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <meta name="description" content="Мы предлагаем разработку одностраничного сайта любой сложности по низким ценам с гарантией технической поддержки в течении года.">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5L6RDDK6');
    </script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript">
        const landing_ajax = "<?= admin_url('admin-ajax.php'); ?>";
        /** JS */
        <?php
        $templateName = (wp_is_mobile() ? 'mobile' : 'desktop') . '_post.js';
        $assets = new Assets();
        echo file_get_contents(__DIR__ . $assets->asset($templateName));
        ?>
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L6RDDK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="single-post">
        <header class="header">
            <div class="header__container">
                <a class="header__logo" href="/">Lightning Soft</a><a class="header__phone" id="header-phone" href="tel:375295558386">+375 29 555 83 86</a><a class="header__telegram" target="_blank" href="https://t.me/zanko_av"><img
                        class="header__telegram-icon"
                        id="header-telegram"
                        width="24"
                        height="24"
                        src="/wp-content/themes/LS/frontend/build/img/79558a8010e6539712d7.svg"
                        alt="telegram" /></a>
            </div>
        </header>
        <div class="post">
            <h1 class="post__title mb-8"><?= get_the_title(); ?></h1>
            <small class="d-b post__date mb-16">от <?= get_the_modified_date('d.m.Y'); ?> </small>
            <?php
            $thumbnail = get_the_post_thumbnail_url(get_the_ID());
            if (!empty($thumbnail)): ?>
                <img class="post__image" src="<?= $thumbnail; ?>" alt="<?= get_the_title(); ?>" />
            <?php endif; ?>
            <div class="post__content ls-editor mt-32">
                <?php the_content(); ?>
            </div>
        </div>
        <footer class="footer">
            <div class="footer__top">
                <div class="footer__top-container">
                    <a class="footer__logo" href="/">Lightning Soft</a>
                    <div class="footer__phone-wrapper">
                        <a class="footer__phone" id="footer-phone" href="tel:80295558386">8 029 555-83-86</a>
                        <div class="footer__phone-label">Для звонков по Беларуси</div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__bottom-container">
                    <div class="footer__copy">© 2020—2023, ООО «Лайтнинг Софт»</div>
                    <a class="footer__telegram" target="_blank" href="https://t.me/zanko_av"><img
                            class="footer__telegram-icon"
                            id="footer-telegram"
                            width="24"
                            height="24"
                            src="/wp-content/themes/LS/frontend/build/img/1f29d653ac40aedb3780.svg"
                            alt="telegram" /></a>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>