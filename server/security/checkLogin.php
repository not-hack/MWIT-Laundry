<?php
    function checkLogin() {
        if (strlen($_SESSION['ID'] == 0) OR strlen($_SESSION['class'] == 0)) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = "Signin.php";
            $_SESSION["ID"] = "";
            $_SESSION['class'] = "";
            header("Location: http://$host$uri/$extra");
        }
    }
?>