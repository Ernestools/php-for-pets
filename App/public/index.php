<?php
// File: /public/index.php
$config = require_once '../config/config.php';
require_once '../models/Database.php';
require_once '../models/Item.php';
require_once '../controllers/ItemController.php';

$db = new Database($config['db']);
$itemModel = new Item($db->getConnection());
$itemController = new ItemController($itemModel);

$route = $_GET['route'] ?? 'index';

if ($route === 'add') {
    $itemController->add();
}if ($route === 'addView') {
    $itemController->addView();
} elseif ($route === 'delete') {
    $itemController->delete();
} else {
    $itemController->index();
}
?>
