<?php
$page = 'settings';
include "header.php";

if (isset($_POST['submit'])) {
    if (strlen($_POST['password'])>0) {
        if ($_POST['password']==$_POST['con_pass']) {
            $name = mysqli_real_escape_string($conn, $_POST['user_name']);
            $game_name= mysqli_real_escape_string($conn, $_POST['game_name']);
            $station= mysqli_real_escape_string($conn, $_POST['station']);
            $badge= mysqli_real_escape_string($conn, $_POST['badge_no']);
            $rank= mysqli_real_escape_string($conn, $_POST['rank']);
            $password= mysqli_real_escape_string($conn, $_POST['password']);
            $hashed = hash('sha512', 'YN3_QY2*m;hbPVab' . $password);
            $confirmed= mysqli_real_escape_string($conn, $_POST['confirmed']);

            $q = "UPDATE users SET user_name='".$name."',game_name='".$game_name."',station='".$station."',badge_no='".$badge."',rank='".$rank."', password='".$hashed."' WHERE id='".$_SESSION['admin']->id."'";
            if (mysqli_query($conn, $q)) {
                $_SESSION['msg'] = "done";

                $q = "SELECT * FROM users WHERE id='".$_SESSION['admin']->id."'";
                $res=mysqli_query($conn, $q);
                $_SESSION['admin'] = mysqli_fetch_object($res);


                header('Location:ranks.php');
            } else {
                $_SESSION['error'] = "Failed";
                header('Location:ranks.php');
            }
        } else {
            $_SESSION['error'] = "Password and Confirm Password must match";
            header('Location:ranks.php');
        }
    } else {
        $name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $game_name= mysqli_real_escape_string($conn, $_POST['game_name']);
        $station= mysqli_real_escape_string($conn, $_POST['station']);
        $badge= mysqli_real_escape_string($conn, $_POST['badge_no']);
        $rank= mysqli_real_escape_string($conn, $_POST['rank']);

        $q = "UPDATE users SET user_name='".$name."',game_name='".$game_name."',station='".$station."',badge_no='".$badge."',rank='".$rank."' WHERE id='".$_SESSION['admin']->id."'";
        if (mysqli_query($conn, $q)) {
            $_SESSION['msg'] = "done";

            $q = "SELECT * FROM users WHERE id='".$_SESSION['admin']->id."'";
            $res=mysqli_query($conn, $q);
            $_SESSION['admin'] = mysqli_fetch_object($res);


            header('Location:ranks.php');
        } else {
            $_SESSION['error'] = "Failed";
            header('Location:ranks.php');
        }
    }
}



?>

<style>
    input,select{
        width: 90%;
        margin: 10px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid darkgrey;
    }
    .dataTables_length select{
        width:auto;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.css"/>
<div class="features-boxed center">
<div class="container center" style="padding-bottom: 50px; width: 50ch;">

    <h2>Account Settings</h2>

    <?php
    if (isset($_SESSION['msg'])) {
        ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;
        </button>
        <strong>Success!</strong> Profile Updated Successfully
    </div>
    <?php
        unset($_SESSION['msg']);
    } elseif (isset($_SESSION['error'])) {
        ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;
        </button>
        <strong></strong> <?php echo $_SESSION['error']; ?>
    </div>
    <?php
        unset($_SESSION['error']);
    } ?>

    <form method="post" action="">
        <strong>Rank</strong>


        <select class="form-control" required id="rank" name="rank">
            <option value="" disabled  >Select  rank
            </option>

            <?php
            $qury = "SELECT * FROM ranks order by id desc";
            $ranks = mysqli_query($conn, $qury);
            while ($rowr =mysqli_fetch_object($ranks)) {
                echo '<option '.($_SESSION['admin']->rank==$rowr->id?'selected':'').' value="'.$rowr->id.'">'.$rowr->title.'</option>';
            } ?>
        </select>

        <strong>Username</strong>
        <input class="form-control" type="text" name="user_name" value="<?php echo $_SESSION['admin']->user_name; ?>" >
        <strong>Your in-game name</strong>
        <input class="form-control" type="text" name="game_name" required value="<?php echo $_SESSION['admin']->game_name; ?>" autocomplete="off" placeholder="Name in Game">
        <strong>Select your station</strong>
        <select class="form-control" required id="station" name="station">
            <option value="" disabled selected>Select your station</option>
            <?php
            $qw = "SELECT * FROM stations ORDER BY id DESC";
            $rest = mysqli_query($conn, $qw);
            while ($stations=mysqli_fetch_object($rest)) {
                echo '<option '.($_SESSION['admin']->station==$stations->value?'selected="selected"':'').' value="'.$stations->value.'">'.$stations->title.'</option>';
            } ?>
        </select>
        <strong>Badge Number</strong>
        <input class="form-control" type="number" name="badge_no" required value="<?php echo $_SESSION['admin']->badge_no; ?>" autocomplete="off" placeholder="Badge Number">


        <hr/>
        <strong>Password</strong>
        <p>Leave blank if you don't want to change your password.</p>
        <input class="form-control" type="password" name="password" autocomplete="off" placeholder="New Password">
        <input class="form-control" type="password" name="con_pass" autocomplete="off" placeholder="Confirm New Passowrd">

        <center><button type="submit" name="submit" style="margin-left: 10px;" class="btn btn-dark">Save</button></center>

    </form>


</div>
</div>


</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>

</body>
<?php include '../footer.php' ?>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.js"></script>
<script>
    function deleteUser(id=''){
        var r = confirm("Are you sure you want to delete this entry?");
        if (r == true) {
            $.ajax({
                url:'delete.php?type=ranks&id='+id,
                success:function (data) {
                    alert('Rank deleted successfully');
                    location.reload();
                }
            })
        }
    }


    $('#users_table').dataTable();
</script>
</html>
