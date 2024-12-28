<link rel="stylesheet" href="./css/sharedCSS.css">
<link rel="stylesheet" href="./css/signUp.css">
            
            <div class="container">
                <div class="title">Sign up</div>
                <div class="content">
                  <form id="signUpform" name="signUpform" action="?route=signup" method="post">
                    <div class="user-details">
                      <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" id="username" name="username" placeholder="Enter your username" >
                        <div class="error" id="username-error" ></div> 
                      </div>

                      <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" id="password" name="password" placeholder="Enter your password" >
                        <div id="password-error" class="error"></div> 
                      </div>
                      <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" id="confirmPassword" placeholder="Confirm your password" >
                        <div id="confirmPassword-error" class="error"></div> 
                      </div>
                    </div>
                    <div class="button">
                      <input id="submitBtn" type="submit" value="Confirm">
                    </div>
                  </form>
                </div>
              </div>

    <script src="js/signUp.js"></script>