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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
    <script type="text/javascript">
        const landing_ajax = "<?= admin_url('admin-ajax.php'); ?>";
    </script>
</head>

<body>
    <?php
    $template = wp_is_mobile() ? 'backend/components/mobile/index' : 'backend/components/desktop/index';
    get_template_part($template);
    ?>
</body>

</html>