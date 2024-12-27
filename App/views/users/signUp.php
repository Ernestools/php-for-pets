            <div class="container">
                <div class="title">Sign up</div>
                <div class="content">
                  <form id="signUpform" action="#">
                    <div class="user-details">
                      <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" id="username" placeholder="Enter your username" >
                        <div class="error" id="username-error" ></div> 
                      </div>
                      
                      <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" id="email" placeholder="Enter your email" >
                        <div id="email-error" class="error-message"></div> 
                        <div id="email-error" class="error"></div> 
                      </div>

                      <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" id="password" placeholder="Enter your password" >
                        <div id="password-error" class="error"></div> 
                      </div>
                      <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" id="confirmPassword" placeholder="Confirm your password" >
                        <div id="confirmPassword-error" class="error"></div> 
                      </div>
                    </div>
                    <div class="button">
                      <input id="submit" type="submit" value="Confirm">
                    </div>
                  </form>
                </div>
              </div>

    <script src="js/signUp.js"></script>