<?php

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

/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/

require_once 'core/router.php';
