<?php
if(isset($_POST['login-submit'])) {
  require 'dbh.inc.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  if (empty($mailuid) || empty($password)) {
    header("Location: ../offical_logros_login_others.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM OtherPeople WHERE uidOthers=? OR Email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../offical_logros_login_others.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['Password_idPassword']);
        if ($pwdCheck == false) {
          header("Location: ../offical_logros_login_others.php?error=wrongpwd");
          exit();
        }
        else if ($pwdCheck == true) {
          session_start();
          $_SESSION['userId'] = $row['idOtherPeople'];
          $_SESSION['userUid'] = $row['uidOthers'];

          header("Location: ../home_2.php");
          exit();
        }
      }
      else {
        header("Location: ../offical_logros_login_others.php?error=nouser");
        exit();
      }
    }
  }
}
else {
  header("Location: ../offical_logros_login_others.php");
  exit();
}
