<?php

/**
 *
 * Template Name: Home page
 *
 */

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

    <script type="text/javascript">
        const landing_ajax = "<?= admin_url('admin-ajax.php'); ?>";
        /** JS */
        <?php
        $templateName = (wp_is_mobile() ? 'mobile' : 'desktop') . '_index.js';
        $assets = new Assets();
        echo file_get_contents(__DIR__ . $assets->asset($templateName));
        ?>
    </script>
</head>

<body>
    <?php
    $template = wp_is_mobile() ? 'backend/components/mobile/index' : 'backend/components/desktop/index';
    get_template_part($template);
    ?>
</body>

</html>