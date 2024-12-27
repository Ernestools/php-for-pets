<?php
// File: /public/index.php
$config = require_once '../config/config.php';

require_once '../models/Database.php';
require_once '../models/User.php';
require_once '../models/Item.php';

require_once '../controllers/ItemController.php';
require_once '../controllers/UserController.php';

$db = new Database($config['db']);
$itemModel = new Item($db->getConnection());
$UserModel = new User($db->getConnection());

$itemController = new ItemController($itemModel);
$UserController = new UserController($UserModel);

$route = $_GET['route'] ?? 'index';

if ($route === 'add') {
    $itemController->add();
}if ($route === 'addView') {
    $itemController->addView();
} elseif ($route === 'delete') {
    $itemController->delete();
} elseif  ($route === 'itemList'){
    $itemController->index();
} elseif  ($route === 'loginView'){
    $UserController->loginView();
} else {
    require '../views/home.php';
}
?>
