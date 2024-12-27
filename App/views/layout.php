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
                <li> <a href = "#">Home</a></li>
                <li> <a href = "#">How it works</a></li>
                <li> <a href = "#">Privacy</a></li>
            </ul>
            <div>
                <a href="login.html" class="login-btn">Log in</a> 
                <a href="signUp.html" class="btn">Sign Up</a> 
            </div>
           </nav>
    </header>
    <div class="main">
        <?php include($section_path); ?>
    </div>

</body>
</html>