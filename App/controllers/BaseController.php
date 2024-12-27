<?php

class BaseController{
    private $isAdmin = true;
    private $isLoggedIn = true;

    function __construct()
    {
        $this->CheckIsAdmin();
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
        //this is a fake function so far
        //when the user management part is implemented, it will have a meaning
        //for now, it is a dumbass thing in our code
        $isAdmin = true;
    }

    function CheckIsLoggedIn()
    {
        if(false)//we need some real fucking condition, wtf is that
            header("Location: ?route=login");//get your ass to the login page you little unlogged fucker
    }


}

?>