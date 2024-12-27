<?php
require_once("BaseController.php");
class UserController extends BaseController  {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        require_once '../views/users/list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->userModel->createUser($_POST['name'], $_POST['email']);
            header('Location: /tpphp/public');
        } else {
            require_once '../views/users/add.php';
        }
    }
    public function delete($id) {
        $this->userModel->deleteUser($id);
        header('Location: /tpphp/public');
    }
    public function login($id) {
        header('Location: /tpphp/public');
    }
    public function loginView()
    {
        $this->View('users/login.php');
    }

}
?>