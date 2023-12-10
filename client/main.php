<?php
    session_start();
    include("../server/connection/connectionDB.php");
    include("../server/security/checkLogin.php");
    //checkLogin();

    $ID = $_SESSION['ID'];
    $Class = $_SESSION['class'];
    $web_head = "Overview";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("../extension/_partials/head.php"); ?>
<body>
    <?php include("../extension/_partials/navbar.php"); ?>
</body>
</html>