<?php
if (empty($_SESSION["konsul"])) {
    // $_SESSION["alert"] = "anda harus login dulu";
    header("Location:./konsultasi.php");
}
