<?php

require_once '../Dao.php';

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$dao = new Dao();
$log = $dao->authenticate($email, $password);
if ($log) {
  $_SESSION['authenticated'] = true;
  $_SESSION["user_id"] = $log["user_id"];
  session_start();
  header('Location: ../index.php');
} else {
  header('Location: /pages/login.php');
}
