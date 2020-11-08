<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['loginname'];
    $_SESSION['username'] = $username;
    header('Location: /');

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location:login.php');
    }
}