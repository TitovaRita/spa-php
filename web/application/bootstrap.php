<?php

// подключаем .env файл
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

// Подключение php ORM Doctrine
require_once 'config/doctrine-config.php';

// подключаем файлы ядра
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';

// подключаем все файлы моделей
$files = glob(__DIR__ . '/models/*.php');
foreach ($files as $file) {
    require($file);
}

require_once 'core/router.php';
