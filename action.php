<?php
session_start();
$_SESSION['name'] = $_POST['name'];

echo "hello " . $_SESSION['name'] . "!";


?>