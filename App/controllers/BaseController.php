<?php

class BaseController{
    private $isAdmin = false;
    private $isLoggedIn = false;
    private $cookieName = "fingerprint";
    protected $adminUsername = "admin";
    protected $adminPwd = "admin";
    protected $adminId = -666;

    function __construct()
    {
        $this->CheckIsLoggedIn();
        $this->CheckIsAdmin();
    }

    function CreateCookie($id)
    {
        $name = $this->GetCookieName();
        $value = $id;
        $expiry = time() + (86400 * 30); // Cookie valid for 30 days
        setcookie($name, $value, $expiry, "/");
    }

    function GetCookieName()
    {
        return $this->cookieName;
    }

    function GetIsAdmin()
    {
        return $this->isAdmin;
    }

    function ListView($section_path, $items){
        require_once '../views/layout.php';
    }

    function View($section_path){
        require_once '../views/layout.php';
    }

    function Unauthorized() {
        http_response_code(401);
    
        echo json_encode([
            'error' => 'Unauthorized',
            'message' => 'You do not have permission to access this resource.'
        ]);
    
        exit;
    }

    function WriteFile()
    {
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
            return $target_file;
        
        return null;
    }

    function CheckIsAdmin()
    {
        if (!isset($_COOKIE[$this->GetCookieName()])){
            $this->isAdmin = false;
            return;
        }
        
        $this->isAdmin =  ((int)$_COOKIE[$this->GetCookieName()]) == $this->adminId;
    }

    function CheckIsLoggedIn()
    {
        if(!isset($_COOKIE[$this->GetCookieName()]))
            header("Location: ?route=login");
        $this->isLoggedIn = true;
    }


}

?>