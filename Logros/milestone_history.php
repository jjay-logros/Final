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
table {
  border-collapse: collapse;
  width: 100%;
  color: black;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 25px;
  text-align: left;
}
th {
  background-color: blue;
  color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}}

* {
 font-size: 100%;
 font-family: Arial, Helvetica, sans-serif;
}
h1 {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #333;
  font-family: Arial, Helvetica, sans-serif;
}
h2 {
  text-align: left;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #333;
  font-family: Arial, Helvetica, sans-serif;
  border-style: groove;
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
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}
.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.topnav .search-container button:hover {
  background: #ccc;
}
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
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
  <a class="active" href="#">History of Milestones</a>
  <a href="support.php">Support & Peer Mentor Chat</a>
  </div>
</div>
<div style="padding-left:16px">
  <h2>HISTORY OF MILESTONES</h2>
  <p>This page will contain all the previous 
  milestones and show the progress you have made for the past milestones. This page is designed for students to be able to keep track of classes they have already completed in a convenient, efficient manner and help them decide what to take next. Students must manually provide their classes the first time around.</p>
  <p></p>
  <p></p>
  </div>
<div style="padding-left:16px">
<br />
<table>
  <tr>
    <th>Milestone</th>
    <th>Start Date</th>
    <th>End Date</th>
  </tr>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "Logros" );
  if($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
  }
  $sql = "SELECT milestone, start_date, end_date from milestones";

  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
      echo "<tr><td>".$row["milestone"]."</td><td>".$row["start_date"]."</td><td>".$row["end_date"]."</td></tr>";
    }
    echo "</table>";
  }
  else {
    echo "0 result";
  }
  $conn->close();
  ?>
  </table>
  </body>
  </html>