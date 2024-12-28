<!DOCTYPE html>
<html >
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veterinary website</title>
    <link rel="stylesheet" href="./css/sharedCSS.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <header>
        <div class="hero">
           <nav>
                <img src ="./images/logo.jpg" class="logo">
                <ul>
                    <?php if($this->GetIsAdmin()): ?>
                        <li> <a href = "?route=itemList">Products</a></li>
                        <li> <a href = "?route=userList">Users</a></li>
                        <li><a id="logout" href ="?route=home">Logout</a></li>
                    
                    
                    <?php elseif($this->IsLoggedIn()): ?>
                        <li> <a href = "?route=basket">Panier</a></li>
                        <li><a id="logout" href ="?route=home">Logout</a></li>
                    <?php else: ?>
                        <a href="?route=signupView" class="btn">Sign Up</a> 
                    <?php endif ?>
                    
                </ul>
            </nav>
        </div>
    </header>
    <div class="main">
        <?php include($section_path); ?>
    </div>
    <script src="js/logout.js"></script>

</body>
</html>