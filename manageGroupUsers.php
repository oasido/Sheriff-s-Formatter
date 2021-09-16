<?php

include 'main.php';
if(isset($_GET['id'])){
    if(isset($_SESSION['user'])) {

        $q = "SELECT * FROM `user_groups` WHERE `group_id`='".$_GET['group']."' AND `is_leader`='1' AND `user_id`='".$_SESSION['user']->id."'";
        $res = mysqli_query($conn, $q);

        if(mysqli_num_rows($res)>0){

            if($_GET['type']=='1'){
                $q = "SELECT * FROM `user_groups` WHERE user_id='".$_GET['id']."' AND `group_id`='".$_GET['group']."'";
                if(mysqli_num_rows(mysqli_query($conn, $q))==0)
                $q = "INSERT INTO `user_groups` (user_id, group_id) VALUES ('".$_GET['id']."', '".$_GET['group']."')";

            }
            elseif($_GET['type']=='0'){
                $q = "DELETE FROM `user_groups` WHERE user_id='".$_GET['id']."' AND `group_id` = '".$_GET['group']."' AND `is_leader`='0'";
            }
            echo mysqli_query($conn, $q);
        }

    }
}
