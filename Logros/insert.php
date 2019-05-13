<?php

if(isset($_POST["milestone"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=Logros", "root", "");
 $milestone_id = uniqid();
 for($count = 0; $count < count($_POST["milestone"]); $count++)
 {  
  $query = "INSERT INTO milestones (milestone_id, milestone, start_date, end_date) VALUES (:milestone_id, :milestone, :start_date, :end_date)";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':milestone_id' => $milestone_id,
    ':milestone'  => $_POST["milestone"][$count], 
    ':start_date' => $_POST["start_date"][$count], 
    ':end_date'  => $_POST["end_date"][$count]
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>
