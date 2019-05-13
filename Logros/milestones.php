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
  <a class="active" href="#">Milestones</a>
  <a href="milestone_history.php">History of Milestones</a>
  <a href="support.php">Support & Peer Mentor Chat</a>
  
</div>

<div style="padding-left:16px">
<h2>CREATION OF MILESTONES</h2>
<p>Our purpose in the Logros community is to help you keep track of your goals. Students can now monitor their progress towards graduation online. Please enter some of your goals (classes) for this semester below, along with the expected duration of the goal.</p>
<p></p>
<p></p>
</div>
  <div style="padding-left:16px">
   <p>Enter your current goals in the fields below.</p>
   <br />
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>Enter Milestone</th>
       <th>Enter Start Date</th>
       <th>Enter End Date</th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
     </table>
     <div>
      <input type="submit" name="submit" class="btn btn-info" value="Save and Submit" />
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="milestone[]" class="form-control milestone" /></td>';
  html += '<td><input type="date" name="start_date[]" class="form-control start_date" /></td>';
  html += '<td><input type="date" name="end_date[] class="form-control end_date"/></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.milestone').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter milestone at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.start_date').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter start date at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.end_date').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter end date at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Milestone Information Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>