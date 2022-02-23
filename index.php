<?php 

ob_start();
session_start();

// var_dump($_SESSION["role"]);
// var_dump($_SESSION["nama"]);
// var_dump($_SESSION["email"]);
// var_dump($_SESSION["telpon"]);
// var_dump($_SESSION["status"]);
// var_dump($_SESSION["login"]);
// var_dump($_SESSION["fotoProfil"]);

require "config/sessionmanager.php";
// include "config/loginlog.php";

if (!isset($_SESSION["login"])) 
{
    header("Location: Authentication/logout.php");
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
    $timeOut = true;
    header("Location: Authentication/logout.php");
}

// $timeIn = true;
$_SESSION['LAST_ACTIVITY'] = time();


// var_dump($_SESSION['LAST_ACTIVITY']);
?>