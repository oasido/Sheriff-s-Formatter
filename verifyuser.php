<?php
include 'main.php';
if (isset($_GET['id'])) {
    if (isset($_SESSION['user']) && $_SESSION['user']->rank<=8) {
        $q = "UPDATE `users` SET `confirmed`='1' WHERE `id`='".$_GET['id']."'";
        if (mysqli_query($conn, $q)) {
            echo '1';

              $affected_user_id = $_GET['id'];
              // get game_name with id
              $query = "SELECT game_name FROM users WHERE id=$affected_user_id";
              $sql_query = mysqli_query($conn, $query);
              $result_row = mysqli_fetch_assoc($sql_query);
              $affected_game_name = $result_row['game_name'];
              $by_name = $_SESSION['user']->game_name;
              $aye = mysqli_query($conn, "INSERT INTO action_logs(by_user,action,affected_user) VALUES('$by_name','<b style=color:green>verified<b>','$affected_game_name')");

        } else {
            echo '2';
        }
    }
}
