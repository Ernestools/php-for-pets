<link rel="stylesheet" href="./css/signUp.css">

<div class="container">
    <div class="title">Add Product</div>
    <div class="content">
        <form id="signUpform" method="post" action="?route=add" enctype="multipart/form-data">
        <div class="user-details">
            <div class="input-box">
            <span class="details">Name</span>
            <input type="text" id="username" name="name" placeholder="Enter the name" >
            <div class="error" id="username-error" ></div> 
            </div>
            
            <div class="input-box">
            <span class="details">Price</span>
            <input type="text" id="email" name="price" placeholder="Enter the price" >
            <div id="email-error" class="error-message"></div> 
            <div id="email-error" class="error"></div> 
            </div>

            <div class="input-box">
            <span class="details">Image</span>
            <input type="file" id="file" name="file"/>
            <div id="password-error" class="error"></div> 
            </div>
        </div>
        <div class="button">
            <input id="submit" type="submit" value="Confirm">
        </div>
        </form>
    </div>
    </div>
</div>