<?php
error_reporting(0);
session_start();

include '../db.php';

if(!isset($page)){
    $page='';
}

if((isset($_SESSION['admin'])) && $auth_page){
    header('Location:dashboard.php');
}

if(!(isset($_SESSION['admin'])) && !$auth_page){
    header('Location:login.php?r');
}

?>