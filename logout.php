<?php
    @session_start();
    unset($_SESSION['email']);
    @session_write_close();
    header('Location: login.php');
?>