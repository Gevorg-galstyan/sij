<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Sij
 * @since 1.0.0
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= getTD(); ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= getTD(); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= getTD(); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= getTD(); ?>/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= getTD(); ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?= getTD(); ?>/assets/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="<?= getTD(); ?>/assets/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>

<body <?php body_class('blur'); ?>>

    <?php wp_body_open(); ?>

    <?php get_template_part( 'template-parts/preloader' ); ?>

    <div id="mainMenu" class="d-flex flex-column">
        <div class="modal-close js-main-menu-close d-xl-none">
            <span class="icon-close"></span>
        </div>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'div',
                'container_class' => '',
                'menu_class' => 'menu menu_main',
            ));
        ?>
        <div class="mt-auto d-xl-none">
            <button class="btn btn_main btn_qst mb-1rvr"><i class="icon-commenting-o c-white mr-2"></i>задать вопрос</button>
            <div class="contact-block contact-block_soc">
                <div class="contact-block__info">Ещё задать вопрос можно в месенджерах:</div>
                <div class="contact-block__main">
                    <a href="https://m.me/<?= get_option('theme_contact_fb'); ?>" target="_blank" class="icon-facebook square-big facebook"></a>
                    <a href="https://vk.me/<?= get_option('theme_contact_vk'); ?>" class="icon-vk square-big vk"></a>
                    <?php 
                        $viberLink = wp_is_mobile() ? 'viber://add?number=' . get_option('theme_contact_viber') : 'viber://chat?number=' . get_option('theme_contact_viber');
                    ?>
                    <a href="<?= $viberLink ?>" class="icon-viber square-big viber"></a>
                    <a href="tg://resolve?domain=<?= get_option('theme_contact_telegram'); ?>" class="icon-telegram square-big telegram"></a>
                </div>
            </div>
        </div>
    </div>

    <header id="site-header" role="banner">
        <div class="container">
            <nav class="navbar">
                <button class="menu-toggler" type="button">
                    <span class="menu-toggler__icon"></span>
                </button>
                <a class="logo" href="/" title="На главную">
                    <img srcset="<?= getTD(); ?>/assets/images/logo.png, <?= getTD(); ?>/assets/images/logo@2x.png 2x"
                        alt="логотип">
                </a>
                <div class="ml-auto contact-block">
                    <div class="d-flex align-items-center">
                        <a class="contact-block__main" href="tel:<?= get_option('theme_contactphone'); ?>"
                            title="Позвонить нам">
                            <?= prettyPhone(get_option('theme_contactphone')); ?>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=<?= get_option('theme_contact_whatsapp'); ?>"
                            class="icon-whatsapp square-small whatsapp" title="Написать в whatsapp"></a>
                        <a href="tg://resolve?domain=<?= get_option('theme_contact_telegram'); ?>"
                            class="icon-telegram square-small telegram" title="Написать в telegram"></a>
                    </div>
                    <div class="contact-block__info">Звоните, если есть вопросы</div>
                </div>
            </nav>
        </div>
    </header><!-- #site-header -->