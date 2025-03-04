<header class="header-mobile">
    <div class="header-mobile__container">
        <a class="header-mobile__logo" href="/">Lightning Soft</a>
        <div class="header-mobile__menu">
            <img
                class="header__menu-icon"
                width="24"
                height="24"
                src="/wp-content/themes/LS/frontend/build/img/caf06731ac077691ed1f.svg"
                alt="Меню" />
        </div>
    </div>
    <div class="header-mobile__navigation">
        <div class="header-mobile__navigation-top">
            <a class="header-mobile__logo" href="/">Lightning Soft</a>
            <div class="header-mobile__close">
                <img
                    class="header__close-icon"
                    width="24"
                    height="24"
                    src="/wp-content/themes/LS/frontend/build/img/d64287053581ba847a5d.svg"
                    alt="Close" />
            </div>
        </div>
        <div class="header-mobile__navigation-bottom">
            <div class="header-mobile__navigation-bottom-calls">
                <a
                    class="header-mobile__navigation-bottom-phone"
                    id="header-phone"
                    href="tel:375295558386">+375 29 555 83 86</a><a
                    class="header-mobile__telegram"
                    target="_blank"
                    href="https://t.me/zanko_av"><img
                        class="header__telegram-icon"
                        id="header-telegram"
                        width="24"
                        height="24"
                        src="/wp-content/themes/LS/frontend/build/img/79558a8010e6539712d7.svg"
                        alt="telegram" /></a>
            </div>
        </div>
    </div>
</header>
<div class="post">
    <h1 class="post__title mb-8"><?= get_the_title(); ?></h1>
    <small class="d-b post__date mb-16">от <?= get_the_date('n.j.Y'); ?> </small>
    <img class="post__image" src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?= get_the_title(); ?>" />
    <div class="post__content mt-32">
        <?php the_content(); ?>
    </div>
</div>
<footer class="footer-mobile">
    <div class="footer-mobile__top">
        <div class="footer-mobile__top-container">
            <div class="mb-20">
                <a class="footer-mobile__logo" href="/">Lightning Soft</a>
            </div>
            <div class="footer-mobile__phone-wrapper">
                <a class="footer-mobile__phone" id="footer-phone" href="tel:80295558386">8 029 555-83-86</a>
            </div>
            <div class="footer-mobile__phone-label mb-20">Для звонков по Беларуси</div>
            <a class="footer-mobile__telegram" target="_blank" href="https://t.me/zanko_av"><img
                    class="footer-mobile__telegram-icon"
                    id="footer-telegram"
                    width="24"
                    height="24"
                    src="/wp-content/themes/LS/frontend/build/img/1f29d653ac40aedb3780.svg"
                    alt="telegram" /></a>
        </div>
    </div>
    <div class="footer-mobile__bottom">
        <div class="footer-mobile__bottom-container">
            <div class="footer-mobile__bottom-copy">© 2020—2023, ООО «Лайтнинг Софт»</div>
        </div>
    </div>
</footer>