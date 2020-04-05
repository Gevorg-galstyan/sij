<?php
/*
Короткий пример для использования Theme_Customization_API
http://casepress.org/kb/web/nastrojki-temy-wordpress-kak-dobavit-svoi-polya/
 */
/**
 * Добавляет страницу настройки темы в админку Вордпресса
 */
function mytheme_customize_register($wp_customize)
{
/*
Добавляем секцию в настройки темы
 */
    $wp_customize->add_section(
        // ID
        'data_site_section',
        // Arguments array
        array(
            'title' => 'Контактные данные',
            'capability' => 'edit_theme_options',
            'description' => "Всякое разное",
        )
    );
/*
Номер телефона для ссылки в шапке
 */
    $wp_customize->add_setting(
        // ID
        'theme_contactphone',
        // Arguments array
        array(
            'default' => '+78007070589',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_contactphone_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Номер телефона",
            'section' => 'data_site_section',
            // This last one must match setting ID from above
            'settings' => 'theme_contactphone',
        )
    );

    // Номер телефона для whatsapp
    $wp_customize->add_setting(
        // ID
        'theme_contact_whatsapp',
        // Arguments array
        array(
            'default' => '+78007070589',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_contact_whatsapp_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Номер телефона для whatsapp",
            'section' => 'data_site_section',
            // This last one must match setting ID from above
            'settings' => 'theme_contact_whatsapp',
        )
    );

    // Ник для telegram
    $wp_customize->add_setting(
        // ID
        'theme_contact_telegram',
        // Arguments array
        array(
            'default' => 'idontlikeskype',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_contact_telegram_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Ник для telegram",
            'section' => 'data_site_section',
            // This last one must match setting ID from above
            'settings' => 'theme_contact_telegram',
        )
    );

    // Имя страницы для facebook messenger
    $wp_customize->add_setting(
        // ID
        'theme_contact_fb',
        // Arguments array
        array(
            'default' => 'evgeniy.buharin',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_contact_fb_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Имя страницы для facebook messenger",
            'section' => 'data_site_section',
            // This last one must match setting ID from above
            'settings' => 'theme_contact_fb',
        )
    );

    // Имя страницы для vk messenger
    $wp_customize->add_setting(
        // ID
        'theme_contact_vk',
        // Arguments array
        array(
            'default' => 'sakralbar',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_contact_vk_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Имя страницы для vk messenger",
            'section' => 'data_site_section',
            // This last one must match setting ID from above
            'settings' => 'theme_contact_vk',
        )
    );

    // Номер телефона для Viber в формате +78007070589
    $wp_customize->add_setting(
        // ID
        'theme_contact_viber',
        // Arguments array
        array(
            'default' => '+78007070589',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_contact_viber_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Номер телефона для viber",
            'section' => 'data_site_section',
            // This last one must match setting ID from above
            'settings' => 'theme_contact_viber',
        )
    );
}
add_action('customize_register', 'mytheme_customize_register');
