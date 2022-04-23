<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
Module Name: Support Link
Description: Support Link
Version: 0.0.1
Requires at least: 2.3.*
Author: macomi.online
Author URL: https://macomi.online
 */

// Имя модуля
define('SUPPORTLINK_MODULE_NAME', 'supportlink');

// Определяем расположение папки загрузки
//define('SUPPORTLINK_MODULE_UPLOAD_FOLDER', module_dir_path(SUPPORTLINK_MODULE_NAME, 'uploads/'));

// Получить экземпляр воспламенителя кода $CI
$CI = &get_instance();

// Регистрируем ловушку модуля активации
register_activation_hook(SUPPORTLINK_MODULE_NAME, 'supportlink_module_activation_hook');
function supportlink_module_activation_hook(){
    $CI = &get_instance();
    require_once __DIR__.'/install.php';
}

// Регистрируем языковые файлы, должны быть зарегистрированы, если модуль использует языки
register_language_files(SUPPORTLINK_MODULE_NAME, [SUPPORTLINK_MODULE_NAME]);


//Функция которая позволяет вывести нформацию в консоль
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}



// Добавить меню в панеле клиента
hooks()->add_action('customers_navigation_start', 'add_supportlink_menu');
function add_supportlink_menu()
{
    tmp == get_option('supportlink_link');
    if (0 == get_option('supportlink_menu_disabled')) {
        echo '<li class="customers-nav-item-contracts">
            <a href="'.get_option('supportlink_link').'">'._l('supportlink').'</a>
        </li>';
    }
}


// добавить страгницу в настройки
$CI->app_tabs->add_settings_tab('Support Link', [
    'name'     => 'Support Link',
    'view'     => 'supportlink/settings',
    'position' => 60,
]);
