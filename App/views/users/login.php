<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Commerce website</title>
    <link rel="stylesheet" href="./css/sharedCSS.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <header>
        <div class="hero">
           <nav>
                <img src="images/logo.jpg" class="logo">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
                <div>
                    <a href="signUp.html" class="btn">Sign Up</a>
                </div>
            </nav>
            <div class="container">
                <div class="title">Login</div>
                <div class="content">
                  <form id="loginForm" action="#">
                    <div class="user-details">
                      <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" id="username" placeholder="Enter your username">
                        <div class="error" id="usernameError"></div>
                      </div>
                      <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" id="password" placeholder="Enter your password">
                        <div class="error" id="passwordError"></div>
                      </div>
                    </div>
                    <div class="button">
                      <input type="submit" value="Confirm">
                    </div>
                  </form>
                </div>
              </div>
    </header>
    <script src="login.js"></script>
</body>
</html>
