<?php 

   session_start();
    include("../connect.php");
    $_SESSION['email']=="";
    $_SESSION['name']=="";
    session_unset();
    session_destroy();

    echo '<script>document.location="login.php"</script>';
?>