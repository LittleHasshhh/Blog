<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'ROLE_ADMIN') {
    header('Location: ../login.php') ;
}
?>