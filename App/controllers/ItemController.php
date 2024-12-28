<?php
require_once("BaseController.php");

class ItemController extends BaseController{
    private $itemModel;

    public function __construct($itemModel) {
        $this->itemModel = $itemModel;
        parent::__construct();
    }
    public function list() {
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
            header('Location: ?route=itemList');
        } else {
            $this->View('items/addView.php');
        }
    }
    public function delete() {
        if (isset($_POST['id'])) {
            $this->itemModel->delete($_POST['id']);
            header('Location: ?route=itemList');
        }
    }

    public function addToChart()
    {
        if(!isset($_POST['itemId'])){
            header('Location: ?route=itemList');
            return;
        }
        $userId = 'user'.$_COOKIE[$this->GetCookieName()];
        if(!isset($_SESSION[$userId]))
            $_SESSION[$userId] = [];
        $_SESSION[$userId][$_POST['itemId']] = $_POST['itemId'];
        header('Location: ?route=itemList');
        return;
    }

    public function basket(){
        $userId = 'user'.$_COOKIE[$this->GetCookieName()];
        if(!isset($_SESSION[$userId])){
            $this->ListView('items/basket.php', []);
            return;
        }
        
        $items = $_SESSION[$userId];
        $values=array_values($items);
        $dbItems = $this->itemModel->getByIds($values);
        $this->ListView('items/basket.php', $dbItems);
    }
}

?>