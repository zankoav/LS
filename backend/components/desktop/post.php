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
        <small class="d-b post__date mb-16">от <?= get_the_date('d.m.Y'); ?> </small>
        <?php
        $thumbnail = get_the_post_thumbnail_url(get_the_ID());
        if (!empty($thumbnail)): ?>
            <img class="post__image" src="<?= $thumbnail; ?>" alt="<?= get_the_title(); ?>" />
        <?php endif; ?>
        <div class="post__content mt-32">
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