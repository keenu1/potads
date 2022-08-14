<?php
$tipe = $_SESSION["tipe"];
if (empty($_SESSION["email"])) {
    // $_SESSION["alert"] = "anda harus login dulu";
    header("Location:./login.php");
} else if ($tipe != 1) {
    header("Location:../index.php");
}
