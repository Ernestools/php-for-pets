<?php

require("BaseController.php");

class ItemController extends BaseController{
    private $itemModel;

    public function __construct($itemModel) {
        $this->itemModel = $itemModel;
    }

    public function index() {
        $items = $this->itemModel->getAll();
        $this->ListView('items/list.php', $items);
    }

    public function addView()
    {
        $this->View('items/add.php');
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fileUrl = $this->WriteFile();
            $this->itemModel->create($_POST['name'], $_POST['price'], $fileUrl);
            header('Location: ?route=index');
        } else {
            require_once '../views/items/add.php';
        }
    }

    public function delete() {
        if (isset($_POST['id'])) {
            $this->itemModel->delete($_POST['id']);
            header('Location: ?route=index');
        }
    }
}

?>