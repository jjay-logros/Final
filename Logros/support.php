<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logros</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
 * {
 font-size: 100%;
 font-family: Arial, Helvetica, sans-serif;
}
.button {
  background-color: #2196F3;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #333;
  font-family:Arial, Helvetica, sans-serif;
}
h2 {
  text-align: left;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #333;
  font-family: cursive;
  border-style: groove;
}
h3 {
  text-align: left;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #DAA520;
  font-family: Arial, Helvetica, sans-serif;

}

body{
	background-color:#E0E0E0
}
.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.open-button {
  background-color: #333;
  color: white;
  font-weight: bold;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 1;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 5px solid #333;
  z-index: 9;
}

.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: #4cafa1;
}

.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 50px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: black;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.9;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: brown;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
	<img src="logo_final.jpg" alt="Logo for Logros" style="width:300px;height:200px;">
	<h1>LOGROS</h1>
  <p><i>Where Achievement Happens</i></p> 
</div>
<div class="topnav">
  <a href="home_2.php">Home</a>
  <a href="milestones.php">Milestones</a>
  <a href="milestone_history.php">History of Milestones</a>
  <a class="active" href="#">Support & Peer Mentor Chat</a>

</div>
<div style="padding-left:16px">
  <h2>SUPPORT & PEER MENTOR CHAT</h2>
  <p>The customer support page is for students who are unsure of how to use the main features of Logros. We also address general questions and concerns. This page will have links to different categories of support such as <b>Managing your account</b>, which will explain how to keep track of and manage milestones and a <b>Suggestions</b> page on how to organize milestones. Students who are unsure of what classes to take can view suggestions on what classes to take wirh our peer mentor chat feature.</p>
  <p></p>
  <p></p>
  <h3><u>Managing Your Account</u></h3>
  <p><b>How can I create a new milestones?</b>
    - View the Milestones page. In this page you can add your goals for the semester. Make sure you specify the start date and end date so you can keep track of your milestones.</p>
<p>
<b>How can I view my milestone history?</b>
    -The first time around you will have to manually update your milestone history. As you move forward with your milestones, and complete them, it will be updated to the history page.
  </p>
  <p><b>Can I ask a peer mentor questions regarding my major and minor?</b>
    -Yes, you may ask our peer mentors questions regarding your major, minor, classes, or simply if you're seeking for advice.
  </p>
  <p><b>What is the difference between te student account and other user account?</b>
     -We have two types of accounts. We have a students account and other user. If you're looking to keep track of your graduation progress we advise you to create a student account. If you're looking to track unacademic related goals, try using our other user account.</p>

  <h3><u>Suggestions</u></h3>
  <p>1. Set a deadline for each of your milestones so you can meet each milestone in a timely fashion.</p>
  <p>2. Set up your goals for each Milestone and determine how you will keep track of each. Determine the steps you must take to get there.</p>
  <p>3. Set up timely reminders. Wehther it is on your phone or on our site. You can set up reminders for milestones.</p>

  <h3><u>Peer Mentor Chat</u></h3>
  <p><b>Need assistance with planning out your milestones this semester? View the link below to chat with one of our peer mentor today and get the assistance you need!</b></p>

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<br>
<br>
<br>
<br>
<br>

<p id="demo"></p>

</div>

</body>
</html>