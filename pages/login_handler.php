<?php

require_once '../Dao.php';

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$dao = new Dao();
$_SESSION['authenticated'] = $dao->authenticate($email, $password);

if ($_SESSION['authenticated']) {
   session_start();
   header('Location: ../index.php');
} else {
   header('Location: /pages/login.php');
}
