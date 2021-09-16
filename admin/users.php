<?php
$page = 'users';
include "header.php";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $game_name= mysqli_real_escape_string($conn, $_POST['game_name']);
    $station= mysqli_real_escape_string($conn, $_POST['station']);
    $badge= mysqli_real_escape_string($conn, $_POST['badge']);
    $rank= mysqli_real_escape_string($conn, $_POST['rank']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $confirmed= mysqli_real_escape_string($conn, $_POST['confirmed']);

    $is_admin = 0;
    if($_POST['is_admin']=='2'){
        $is_admin='2';
    }elseif($_POST['is_admin']=='0'){
        $is_admin = '0';
    }


  //add to Logs
    $by_name = $_SESSION['admin']->game_name;
    $aye = mysqli_query($conn, "INSERT INTO action_logs(by_user,action,affected_user) VALUES('$by_name','<b style=color:orange>modified<b>','$game_name')");
  // end of add to Logs

    $q = "UPDATE `users` SET `user_name`='".$name."',`game_name`='".$game_name."',`station`='".$station."',`badge_no`='".$badge."',`rank`='".$rank."',`confirmed`='".$confirmed."'";
    if($_SESSION['admin']->is_admin=='1') {
        $q .= ", is_admin='" . $is_admin . "'";
    }

    $q .= " WHERE `id`='".$_POST['id']."'";

    if (mysqli_query($conn, $q)) {
        $_SESSION['msg'] = "Done!";
        header('Location:users.php');
    } else {
        $_SESSION['error'] = "Failed!";
        header('Location:users.php');
    }
}

$q = "SELECT `users`.*,`ranks`.`title` as `rank` FROM `users` JOIN `ranks` ON `ranks`.`id`=`users`.`rank`";
$res = mysqli_query($conn, $q);
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
<div class="features-boxed container h-100 justify-content-center">

    <?php
    if(isset($_SESSION['msg']) && strlen($_SESSION['msg'])>0) {
        ?>
        <div class="alert alert-success" style="margin: 20px;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <strong>Action Executed</strong> *insert a nice sentence here, aye*
        </div>
        <?php
        unset($_SESSION['msg']);
    }else if(isset($_SESSION['error']) && strlen($_SESSION['error'])>0) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <strong>Failed!</strong> Some unexpected error occured.
        </div>
        <?php
        unset($_SESSION['error']);
    }
    ?>
    <div class="" style="padding-bottom: 50px;">
        <div class="intro">
            <h2 class="text-center">User List</h2>
            <p class="text-center"></p>
        </div>

        <table id="users_table" class="table table-hover">
            <thead>
            <tr>
                <th>Username</th>
                <th>In-game Name</th>
                <th>Assignment</th>
                <th>Badge</th>
                <th>Rank</th>
                <th>Status</th>
                <th>User Type</th>
                <th>Join Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

                <?php
                while($row=mysqli_fetch_object($res)) {
                    echo '
                <tr>
                    <td>'.$row->user_name.'</td>
                    <td>'.$row->game_name.'</td>
                    <td>'.$row->station.'</td>
                    <td>'.$row->badge_no.'<br><a href="https://sd.lsgov.us/forum/memberlist.php?mode=viewprofile&u='.$row->badge_no.'" target="_blank">Profile</a></td>
                    <td>'.$row->rank.'</td>
                    <td>'.($row->confirmed=='1'?'Confirmed':'Not Confirmed').'</td>

                    <td>'.($row->is_admin=='1'?'<b style="color: #34a219;">Admin</b>':($row->is_admin=='2'?'<b style="color: #ce12ce;">Moderator</b>':'User')).'</td>
                    <td>'.$row->added_date.'</td>
                    <td>

                    <a data-toggle="modal" '.($row->is_admin=='1'?' style="color: gray" ':'').' href="#modal-'.($row->is_admin=='1'?'':$row->id).'"><i class="fa fa-pen" style="margin-right: 10px;"></i></a>
                     ';
                    if($_SESSION['admin']->is_admin=='1'){
                    echo '
                     <a  '.($row->is_admin=='1'?' style="color: gray" ':'').'  href="#" onclick="'.($row->is_admin=='1'?'':'deleteUser('.$row->id.')').'"><i class="fa fa-trash"></i></a>
                    '; }
                    echo '
                        </td>
                        </tr>
                        ';
                    ?>
                <div class="modal fade" id="modal-<?php echo $row->id; ?>">
                	<div class="modal-dialog">
                        <form method="post" action="">
                		<div class="modal-content">
                			<div class="modal-header">

                				<h4 class="modal-title">Edit User</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                			</div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                                <h6 style="text-align: left">Username
                                <input required minlength="4" type="text" value="<?php echo $row->user_name; ?>" name="name"/>
                                <h6 style="text-align: left">IGN
                                <input required type="text" class="spaceFix" value="<?php echo $row->game_name; ?>" name="game_name"/>
                                <h6 style="text-align: left">Station
                                <select required name="station">
                                    <option value="" disabled >Select station</option>

                                    <?php
                                    $qw = "SELECT * FROM stations ORDER BY id DESC";
                                    $rest = mysqli_query($conn, $qw);
                                    while($stations=mysqli_fetch_object($rest)){

                                        echo '<option '.($row->station==$stations->value?'selected="selected"':'').' value="'.$stations->value.'">'.$stations->title.'</option>';
                                    }
                                    ?>
                                </select>
                                <h6 style="text-align: left">Badge Number
                                <input required type="number" value="<?php echo $row->badge_no; ?>" name="badge"/>
                                <h6 style="text-align: left">Rank
                                <select required name="rank">
                                    <option value="" disabled>Select rank</option>

                                    <?php
                                    $qury = "SELECT * FROM ranks order by id desc";
                                    $ranks = mysqli_query($conn, $qury);
                                    while($rowr =mysqli_fetch_object($ranks)){

                                        echo '<option '.($row->rank==$rowr->title?'selected':'').' value="'.$rowr->id.'">'.$rowr->title.'</option>';
                                    }
                                    ?>

                                </select>
                                <h6 style="text-align: left">Status
                                <select required  name="confirmed">
                                    <option disabled>Active Status</option>
                                    <option value="1" <?php echo $row->confirmed=='1'?'selected':''; ?>>Confirmed</option>
                                    <option value="0" <?php echo $row->confirmed=='0'?'selected':''; ?>>Not Confirmed</option>
                                </select>

                            </div>
                			<div class="modal-footer">
                				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                			</div>
                		</div><!-- /.modal-content -->
                        </form>
                	</div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

<?php
                }
                ?>

            </tbody>
        </table>
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
                url:'delete.php?type=users&id='+id,
                success:function (data) {
                    alert('User deleted.');
                    location.reload();
                }
            })
        }
    }


    $('#users_table').dataTable();
</script>
</html>
