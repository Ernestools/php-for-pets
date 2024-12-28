<?php
// File: /public/index.php
$config = require_once '../config/config.php';

require_once '../models/Database.php';
require_once '../models/User.php';
require_once '../models/Item.php';

require_once '../controllers/ItemController.php';
require_once '../controllers/UserController.php';

session_start();

$db = new Database($config['db']);
$itemModel = new Item($db->getConnection());
$UserModel = new User($db->getConnection());

$itemController = new ItemController($itemModel);
$UserController = new UserController($UserModel);

$route = $_GET['route'] ?? 'index';

if ($route === 'add') {
    $itemController->add();
} elseif ($route === 'addView') {
    $itemController->addView();
} elseif ($route === 'delete') {
    $itemController->delete();
} elseif ($route === 'itemList'){
    $itemController->list();
} elseif ($route === 'userList'){
    $UserController->list();
} elseif ($route === 'loginView'){
    $UserController->loginView();
} elseif ($route === 'login'){
    $UserController->login();
} elseif ($route === 'signupView'){
    $UserController->signupView();
}elseif ($route === 'signup'){
    $UserController->add();
}elseif ($route === 'addToChart'){
    $itemController->addToChart();
}elseif ($route === 'deleteUser'){
    $UserController->delete();
}elseif ($route === 'basket'){
    $itemController->basket();
}elseif ($route === 'addUser'){
    $UserController->addUser();
}elseif ($route === 'addUserView'){
    $UserController->addUserView();
}elseif ($route === 'home'){
    require '../views/home.php';
}
 else {
    require '../views/home.php';
}
?>
