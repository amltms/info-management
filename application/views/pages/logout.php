<?php session_start();
$_SESSION['username'] = array(); // Unset everything in the session
session_destroy();
header("Location: ".base_url()); ?>