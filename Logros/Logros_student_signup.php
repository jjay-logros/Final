<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {background-image: url("https://thumbs.dreamstime.com/b/teal-orange-abstract-painting-116433982.jpg"); font-family: Arial, Helvetica, sans-serif; }
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #333;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}
/* Style the submit button */
input[type=submit] {
  background-color: #047809;
  color: white;
}
/* Style the container for inputs */
.container {
  background-color:#4faca1;
  padding: 20px;
  opacity: 0.93;
  width: 50%;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 5px solid #333;
}
/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #ddf9f8;
  color: #000;
  position: relative;
  padding: 20px;
  margin: auto 2% auto; 
}
#message p {
  padding: 10px 35px;
  font-size: 18px;
}
/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}
.valid:before {
  position: relative;
  left: -35px;
  content: "YES, GOOD JOB!";
}
.invalid {
  color: red;
}
.invalid:before {
  position: relative;
  left: -35px;
  content: "NO, TRY AGAIN";
}
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</style>
</head>
<body>
<h3 style="color: #fefefe; font-weight: bold; text-align: center; font-size:40px"
>WELCOME STUDENT!<br><br> SIGN UP, PLEASE!</h3>

<div class="container">

    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyfields") {
        echo '<p>Fill in all fields!</p>';
      }
      else if ($_GET["error"] == "invaliduidmail") {
        echo '<p>Invalid username and e-mail!</p>';
      }
      else if ($_GET["error"] == "invaliduid") {
        echo '<p>Invalid username!</p>';
      }
      else if ($_GET["error"] == "invalidmail") {
        echo '<p>Invalid e-mail!</p>';
      }
      else if ($_GET["error"] == "passwordcheck") {
        echo '<p>Your passwords do not match!</p>';
      }
      else if ($_GET["error"] == "usertaken") {
        echo '<p>Username is already taken!</p>';
      }
    }
    else if (isset($_GET["signup"])) {
      if ($_GET["signup"] == "success") {
        echo '<p>Signup successful!</p>';
      }
    }
  ?>
    
  <form action="includes/students_signup.inc.php" method="post">
  
    <label for="fName"; style="color: black;">First Name<br></label>
    <input type="text" id="fName" name="fName" required><br><br>
      
    <label for="lName"; style="color: black">Last name<br></label>
    <input type="text" id="lName" name="lName" required><br><br>

    <label for="mail"; style="color: black;">E-mail<br></label>
    <input type="text" id="Email" name="mail" required><br><br>  
    
    <label for="uid"; style="color: black;">Username<br></label>
    <input type="text" id="uid" name="uid" required><br><br>
    
    <label for="pwd"; style="color: black;">Password<br></label>
    <input type="password" id="pwd" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 9 or more characters" required><br><br>
   
    <label for="pwd-repeat"; style="color: black;">Repeat password<br></label>
    <input type="password" id="pwd-repeat" name="pwd-repeat" required><br>
<input type="submit" name="signup-submit" value="Submit" />
 
      <form method="post" onsubmit ="return submitUserForm();">
    <div class="g-recaptcha" data-sitekey="6LcsJpkUAAAAAJk2EwdJQNyts_hc8tOwaHjUSH09" data-callback="verifyCaptcha"></div>
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
 
  
<div id="message">
  <h3>Password must contain the following:</h3>
   <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
   <p id="letter" class="invalid">A <b>lowercase</b> letter</p> 
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b> 9 characters </b></p>
</div>
</form>
</div>
				
<script>
var myInput = document.getElementById("pwd");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}
// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}
// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  
   // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  } 
  
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 9) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</body>
</html>