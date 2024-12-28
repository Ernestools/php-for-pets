
    <link rel="stylesheet" href="./css/sharedCSS.css">
    <link rel="stylesheet" href="./css/login.css">

            <div class="container">
                <div class="title">Login</div>
                <div class="content">
                  <form id="loginForm" action="?route=login" method="post">
                    <div class="user-details">
                      <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" id="username" placeholder="Enter your username">
                        <div class="error" id="usernameError"></div>
                      </div>
                      <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                        <div class="error" id="passwordError"></div>
                      </div>
                    </div>
                    <div class="button">
                      <input type="submit" value="Confirm">
                    </div>
                  </form>
                </div>
              </div>
   

