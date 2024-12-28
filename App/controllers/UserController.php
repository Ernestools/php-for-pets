<?php
require_once("BaseController.php");
class UserController extends BaseController  {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
        parent::__construct();
    }

    public function list() {
        if(!$this->GetIsAdmin())
            $this->Unauthorized();
        $users = $this->userModel->getAllUsers();
        $this->ListView('users/list.php', $users);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->userModel->createUser($_POST['username'], $_POST['password']);
            header('Location: ?route=loginView');
        } else {
            header('Location: ?route=signupView');
        }
    }

    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->userModel->createUser($_POST['username'], $_POST['password']);
            header('Location: ?route=userList');
        } else {
            header('Location: ?route=userList');
        }
    }
    public function addUserView()
    {
        $this->View('users/add.php');
    }
    
    public function delete() {
        if(isset($_GET["id"])){
            $this->userModel->deleteUser($_GET["id"]);
        }
        header('Location: ?route=userList');
    }

    public function IsAdminLogin($username, $pwd)
    {
        return $username == $this->adminUsername && $pwd == $this->adminPwd;
    }

    public function login() {
        if(!isset($_POST['username']) || !isset($_POST['password'])){    
            header('Location: ?route=loginView&error=1');
            return;
        }

        if($this->IsAdminLogin($_POST['username'], $_POST['password'])){
            $this->CreateCookie($this->adminId);
            header('Location: ?route=itemList');
            return;
        }


        $user =  $this->userModel->login($_POST['username'], $_POST['password']);
        
        if(empty($user)){
            header('Location: ?route=loginView&error=2');
            return;
        }

        $this->CreateCookie($user[0]['id']);
        header('Location: ?route=itemList');
        return;
    }

    public function loginView()
    {
        $this->View('users/login.php');
    }

    public function signupView()
    {
        $this->View('users/signUp.php');
    }

}
?>