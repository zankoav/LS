<div class="ls-app__header">
    <header class="header">
        <div class="header__container">
            <a class="header__logo" href="/">Lightning Soft</a><a class="header__telegram" target="_blank" href="https://t.me/zanko_av"><img
                    class="header__telegram-icon"
                    id="header-telegram"
                    width="24"
                    height="24"
                    src="/wp-content/themes/LS/frontend/build/img/79558a8010e6539712d7.svg"
                    alt="telegram" /></a>
        </div>
    </header>
</div>
<div class="ls-app__main">
    <div class="post">
        <h1 class="post__title"><?= get_the_title(); ?></h1>
        <small class="post__date">от <?= get_the_modified_date('d.m.Y'); ?> </small>
        <?php
        $thumbnail = get_the_post_thumbnail_url(get_the_ID());
        if (!empty($thumbnail)): ?>
            <img class="post__image" src="<?= $thumbnail; ?>" alt="<?= get_the_title(); ?>" />
        <?php endif; ?>
        <div class="post__content">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<div class="ls-app__footer">
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__copy">© 2020—<?= date('Y'); ?>, ООО «Лайтнинг Софт»</div>
        </div>
    </footer>
</div>