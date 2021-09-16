<?php
session_start();
include "db.php";
$q = "DELETE FROM sessions WHERE user_id='".$_SESSION['user']->id."'";
$res=mysqli_query($conn, $q);

unset($_SESSION['user']);
header('Location:login.php');
