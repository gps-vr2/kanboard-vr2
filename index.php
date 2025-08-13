<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Kanboard\Core\Controller\Runner;

try {
    require __DIR__.'/app/common.php';
    $container['router']->dispatch();
    $runner = new Runner($container);
    $runner->execute();
} catch (Exception $e) {
    echo htmlspecialchars('Internal Error: '.$e->getMessage(), ENT_QUOTES, 'UTF-8', false);
}