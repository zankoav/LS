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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
    <script type="text/javascript">
        <?php
        $templateName = (wp_is_mobile() ? 'mobile' : 'desktop') . '_p404.js';
        $assets = new Assets();
        echo file_get_contents(__DIR__ . $assets->asset($templateName));
        ?>
    </script>
</head>

<body>
    <?php
    $template = wp_is_mobile() ? 'backend/components/mobile/404' : 'backend/components/desktop/404';
    get_template_part($template);
    ?>
</body>

</html>