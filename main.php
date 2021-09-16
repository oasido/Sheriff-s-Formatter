<?php
// error reporting, disable when live
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include 'db.php';


if (!isset($auth_page)) {
    $auth_page=false;
}


    $pages='';

if ((isset($_SESSION['user'])) && $auth_page) {
    header('Location:'.$base_url.'index.php');
}

if (!(isset($_SESSION['user'])) && !$auth_page) {
    header('Location:'.$base_url.'login.php');
}




$verified = false;
if (isset($_SESSION['user'])) {
    $page = $_SERVER['REQUEST_URI'];

    $user_rank = $_SESSION['user']->rank;

    $query = "SELECT * FROM `permissions` WHERE `rank`='".$user_rank."' OR `rank`='0'";

    $res = mysqli_query($conn, $query);
    $pages = '';
    while ($row=mysqli_fetch_object($res)) {
        $pages .= $row->access_pages.',';
    }

    $queryLeader = "SELECT * FROM `user_groups` WHERE `user_id`='".$_SESSION['user']->id."' AND `is_leader`='1'";
    $rest = mysqli_query($conn, $queryLeader);
    if (mysqli_num_rows($rest)>0) {
        $leader=mysqli_fetch_object($rest);
        $pages .= ",permissions,manageGroupUsers,myGroups,".$leader->pages;
    }

    $queryGroup = "SELECT * FROM `groups` JOIN `user_groups` ON `user_groups`.`group_id`=`groups`.`id` WHERE `user_groups`.`user_id`='".$_SESSION['user']->id."'";
    $rest = mysqli_query($conn, $queryGroup);
    while ($rowt = mysqli_fetch_object($rest)) {
        $pages .= ','.$rowt->pages;
    }

    $auth_pages =explode(',', $pages);

    $page = explode('/', $page)[1];

//    $page = str_replace('/', '', $page);

    $page = explode('?', $page)[0];


    foreach ($auth_pages as $au) {
        if ($page==$au) {
            $verified = true;
        }
    }

    // if (!$verified) {
    //     header('test: 1');
    //     header('Location: index.php');
    // }


    $q = "DELETE FROM `sessions` WHERE `last_seen` < (NOW() - INTERVAL 30 MINUTE)";
    mysqli_query($conn, $q);

    $q = "DELETE FROM act_log WHERE `added_time` < (NOW() - INTERVAL 1800 MINUTE)";
    mysqli_query($conn, $q);

    $q = "SELECT * FROM `sessions` WHERE `user_id`='".$_SESSION['user']->id."'";
    $res=mysqli_query($conn, $q);

    if (mysqli_num_rows($res)>0) {
        $q = "UPDATE `sessions` SET  `last_seen`=NOW() WHERE user_id='".$_SESSION['user']->id."'";
    } else {
        $q = "INSERT INTO `sessions` (user_id,last_seen) VALUES('".$_SESSION['user']->id."', NOW()) ";
    }

    mysqli_query($conn, $q);
}

// // generate button countdown variable, server side
// if(!isset($_SESSION['generateCount'])){
//     $_SESSION['generateCount'] = 0;
// }
