<?php
    session_start();
    require "connect.php";

    function check_login() {
        if(empty($_SESSION['info'])) {
            header("Location: login.php");
            die;
        }
    }
