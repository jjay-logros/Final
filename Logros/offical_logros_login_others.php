<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {background-color:#ffac75; font-family: Arial, Helvetica, sans-serif; }
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
  background-color: #fefefe;
  margin-left:50px;
  
}
/* Set a style for all buttons */
button {
  background-color: #083301;
  color: white;
  font-weight: bold;
  font-size: 20px;
  padding: 10px 2px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  text-align: center;
 }
button:hover {
  opacity: 0.8;
}
/* Extra styles for the cancel button */
.cancel_button {
  padding: 10px 2px;
  background-color: #c10000;
}
/* Extra styles for the logout button */
.logout_button {
  padding: 10px 2px;
  background-color: #000;
}
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  margin-bottom: -300; 
  position: relative;
}
img.avatar {
  width: 40%;
  border-radius: 50%;
}
.container {
  padding: 5px;
  
}
span.psw {
  float: right;
  padding-top: 16px;
}
/* The Modal (background) */
.bkground {
  display: all; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  padding-top: 60px;
 
}
/* Modal Content/Box */
.bkground-content {
  background-color: #f6ef3c;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 5px solid #333;
  width: 50%; /* Could be more or less, depending on screen size */
  opacity: 0.92;
}
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
.cancel_button {
     width: 20%;
  }
  
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
</style>
</head>
<body>

<h1 style="font-weight: bold; text-align: center; font-size:40px">WELCOME TO LOGROS!</h1>

<form class="bkground-content animate" action="includes/others_login.inc.php" method="post">
    <div class="imgcontainer">
      
      <img src="https://www.referralnet.com.au/wp-content/uploads/2015/10/handshake-350x350-1.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="mailuid"><b>Username/E-mail</b></label><br>
        <input type="text" name="mailuid" required><br>
        <label for="pwd"><b>Password</b></label><br>
        <input type="password" name="pwd" required><br>
        <button type="submit" name="login-submit">Login</button>
        <label><br>
          <input type="checkbox" checked="checked" name="remember">Remember me
        </label>
      </div>

     <div class="container" style="background-color:#CCCC99">
	  
	    <span class="psw"; style="font-weight: bold"><a href="PasswordReset.html">Forget Password?</a></span>
	  
      <form method="post" onsubmit ="return submitUserForm();">
    <div class="g-recaptcha" data-sitekey="6LcnFaAUAAAAALyQ8hzg5xRqvBM_dNY0I1MPtu4w" data-callback="verifyCaptcha"></div>
    <div id="g-recaptcha-error"></div>
    </form>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
 </script>
      
    </div>
  </form>
</div>

<script>
</script>
</body>
</html>