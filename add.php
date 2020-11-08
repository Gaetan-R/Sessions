<?php
session_start();

$cookieId = $_GET['add_to_cart'];

$_SESSION['products'][$cookieId]++;

header('Location: /');
