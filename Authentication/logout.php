<?php

session_start();
require '../config/connect.php';
require_once '../config/sessionmanager.php';

$agenUser = $_SERVER['HTTP_USER_AGENT'];
$ipUser = $_SERVER['REMOTE_ADDR'];
$idUser = $userSession['idUser'];
$loginLog = $_SESSION['loginLog'];

// var_dump($loginLog);

$query = "UPDATE tloginlog SET  
                                waktuLogout = now()
                                WHERE idLoginLog = $loginLog
                                ";
mysqli_query($db, $query);

$_SESSION = [];
session_unset();
session_destroy();

header("Location: login.php");
exit;