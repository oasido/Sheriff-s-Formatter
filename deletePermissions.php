<?php
include 'main.php';
if(isset($_GET['id'])){
    if(isset($_SESSION['user'])){
        $q = "DELETE FROM ".$_GET['type']." WHERE id='".$_GET['id']."'";
        if(mysqli_query($conn, $q)){
            echo '1';
        }else{
            echo '2';
        }
    }


}

?>