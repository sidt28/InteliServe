<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: departlog.php");
        exit();
    }
?>