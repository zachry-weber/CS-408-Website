<?php
session_start();

require_once '../Dao.php';

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$dao = new Dao();
$_SESSION['authenticated'] = $dao->authenticate($email, $password);

if ($_SESSION['authenticated']) {
   //header('Location: ../index.php');
   echo ("yes");
} else {
   //header('Location: /pages/login.php');
   echo ("no");
}
