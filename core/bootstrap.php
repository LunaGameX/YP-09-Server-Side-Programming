<?php
//Путь до директории с конфигурационными файлами
const DIR_CONFIG = '/../config';

//Подключение автозагрузчика composer
require_once __DIR__ . '/../vendor/autoload.php';

//Добавляем пользовательскую функцию автозагрузки классов
//spl_autoload_register(function($className) {
//
//    $paths = include __DIR__ . DIR_CONFIG . '/path.php';
//    $className = str_replace('\\', '/', $className);
//
//    foreach ($paths['classes'] as $path) {
//        $fileName = $_SERVER['DOCUMENT_ROOT'] . "/$paths[root]/$path/$className.php";
//
//        if (file_exists($fileName)) {
//            require_once $fileName;
//        }
//    }
//});

//Функция, возращающая массив всех настроек приложения
function getConfigs (string $path = DIR_CONFIG): array {
    $settings = [];
    foreach (scandir(__DIR__ . $path) as $file) {
        $name = explode('.', $file) [0];
        if (!empty($name)) {
            $settings[$name] = include __DIR__ . "$path/$file";
        }
    }
    return $settings;
}

require_once __DIR__ . '/../routes/web.php';

$app = new Src\Application(new Src\Settings(getConfigs()));

//Функция возвращает глобальный экземпляр приложения
function app() {
    global $app;
    return $app;
}

return $app;