<?php
session_start();

unset($_SESSION["email"]);
$_SESSION["alert"] = "Anda Berhasil Logout";
$_SESSION["jenisalert"] = "success";
header("Location:login.php");
