<?php
session_start();

$_SESSION['lang'] = $_POST['lang'];

if (!empty($_SERVER['HTTP_REFERER'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

header("Location: index.php");
exit;
?>