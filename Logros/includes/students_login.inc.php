<?php
if(isset($_POST['login-submit'])) {
  require 'dbh.inc.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  if (empty($mailuid) || empty($password)) {
    header("Location: ../LOGROS_LOGIN_STUDENT.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM Student WHERE uidStudents=? OR Email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../LOGROS_LOGIN_STUDENT.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['Password_idPassword']);
        if ($pwdCheck == false) {
          header("Location: ../LOGROS_LOGIN_STUDENT.php?error=wrongpwd");
          exit();
        }
        else if ($pwdCheck == true) {
          session_start();
          $_SESSION['userId'] = $row['idStudent'];
          $_SESSION['userUid'] = $row['uidStudents'];

          header("Location: ../home_2.php");
          exit();
        }
      }
      else {
        header("Location: ../LOGROS_LOGIN_STUDENT.php?error=nouser");
        exit();
      }
    }
  }
}
else {
  header("Location: ../LOGROS_LOGIN_STUDENT.php");
  exit();
}
