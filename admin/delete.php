<?php
include 'main.php';
if (isset($_GET['id'])){
    if(isset($_SESSION['admin'])){

        $affected_user_id = $_GET['id'];
        // get game_name with id
        $query = "SELECT game_name FROM users WHERE id=$affected_user_id";
        $sql_query = mysqli_query($conn, $query);
        $result_row = mysqli_fetch_assoc($sql_query);
        $affected_game_name = $result_row['game_name'];
        $by_name = $_SESSION['admin']->game_name;
        $aye = mysqli_query($conn, "INSERT INTO action_logs(by_user,action,affected_user) VALUES('$by_name','<b style=color:red>deleted<b>','$affected_game_name')");
        $groups_delete = mysqli_query($conn, "DELETE FROM user_groups WHERE user_id=".$affected_user_id);
        $q = "DELETE FROM ".$_GET['type']." WHERE id='".$_GET['id']."'";

        if(mysqli_query($conn, $q)){
            if($_GET['type']=='groups'){
                $q = "DELETE FROM user_groups WHERE group_id='".$_GET['id']."'";
                mysqli_query($conn, $q);
            }

            echo '1';
        } else {
            echo '2';
        }
    }
}
?>
