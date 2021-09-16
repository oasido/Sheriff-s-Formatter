<?php
$page = 'permissions';
include 'main.php';
include "header.php";


$getGroup = str_replace('po5464in6m336874b4uy32t34t83t24uy23tgt2736t', '', base64_decode($_GET['group']));

$q = "SELECT * FROM user_groups WHERE group_id='".$getGroup."' AND user_id='".$_SESSION['user']->id."' AND is_leader='1'";
$res = mysqli_query($conn, $q);
if (mysqli_num_rows($res)==0) {
    die('Invalid URL (Make sure you are still the leader of this group)');
} else {
}

$q = "SELECT * FROM users  WHERE is_admin<>'1'";
$res = mysqli_query($conn, $q);
$q="SELECT * FROM groups WHERE id='".$getGroup."'";
$res2= mysqli_query($conn, $q);
$gr_oup = $row2=mysqli_fetch_object($res2);
$q = "SELECT * FROM user_groups WHERE group_id='".$getGroup."' ";
$resy = mysqli_query($conn, $q);
$users_in_group = array();

while ($user_groups = mysqli_fetch_object($resy)) {
    $users_in_group[] = $user_groups->user_id;
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
    #mdc{
        width: auto;
        margin: auto;
        padding: auto;
        border-radius: auto;

    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.css"/>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.js"></script>
<script>
    function addUser(group,id=''){

            $.ajax({
                url:'manageGroupUsers.php?type=1&id='+id+'&group='+group,
                success:function (data) {
                    location.reload();
                }
            })
    }

    function removeUser(group,id=''){
        var r = confirm("Are you sure you want to remove this user from your group?");
        if (r == true) {
            $.ajax({
                url:'manageGroupUsers.php?type=0&id='+id+'&group='+group,
                success:function (data) {
                    location.reload();
                }
            })
        }
    }


</script>

<div class="features-boxed center">

    <?php
    if (isset($_SESSION['msg']) && strlen($_SESSION['msg'])>0) {
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <strong>Success!</strong><?php echo $_SESSION['msg']; ?>
        </div>
        <?php
        unset($_SESSION['msg']);
    } elseif (isset($_SESSION['error']) && strlen($_SESSION['error'])>0) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <strong>Failed!</strong> <?php echo $_SESSION['error']; ?>
        </div>
        <?php
        unset($_SESSION['error']);
    }
    ?>
    <div class="container center" style="padding-bottom: 50px;">
        <div class="intro">
            <h2 class="text-center">Manage <?php echo $gr_oup->title; ?>
            <p class="text-center"></p>
        </div>


        <table id="users_table" class="table table-hover">
            <thead>
            <tr>
                <th>Username</th>
                <th>Name in Game</th>
                <th>Assignment</th>
                <th>Badge No.</th>
                <th>Rank</th>
                <th>Add to group</th>
            </tr>
            </thead>
            <tbody>


            <?php
            while ($row=mysqli_fetch_object($res)) {
                echo '
                <tr>
                    <td>'.$row->user_name.'</td>
                    <td>'.($row->game_name).'</td>
                    <td>'.$row->station.'</td>
                    <td>'.$row->badge_no.'<br><a href="https://sd.lsgov.us/forum/memberlist.php?mode=viewprofile&u='.$row->badge_no.'" target="_blank">Profile</a></td>
                  ';
                $q="SELECT * FROM ranks WHERE id='".$row->rank."'";
                $rerrr = mysqli_query($conn, $q);
                $ranks = mysqli_fetch_object($rerrr);
                echo '
                    <td>'.$ranks->title.'</td>
                    <td>
                    ';

                if (in_array($row->id, $users_in_group)) {
                    $q = "SELECT * FROM user_groups WHERE user_id='".$row->id."' AND group_id='".$getGroup."' AND is_leader='1'";
                    $is_leader=false;
                    if (mysqli_num_rows(mysqli_query($conn, $q))>0) {
                        $is_leader=true;
                    }
                    echo '<span style="opacity: 0;">BYEE</span><i class="fa fa-'.(!$is_leader?'minus-circle':'chess-queen').'"  onclick="'.(!$is_leader?'removeUser('.$getGroup.','.$row->id.')':'').'" title="'.(!$is_leader?'Remove from group':'Group Leader').'" style="color: '.(!$is_leader?'red':'#0089ff').'; cursor: pointer"></i>';
                } else {
                    echo '<span style="opacity: 0;">AYEE</span><i class="fa fa-plus-circle"  onclick="addUser('.$getGroup.','.$row->id.')" title="Add to group" style="color: green; cursor: pointer"></i>';
                }

                echo '

                    </td>
                </tr>
'; ?>
                <div class="modal fade" id="modal-<?php echo $row->id; ?>">
                    <div class="modal-dialog">
                        <form method="post" action="">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Edit Permissions</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id"
                                           value="<?php echo $row->id; ?>">


                                    <input required minlength="4" type="text" value="<?php echo $row->access_pages; ?>" name="access_pages"
                                           placeholder="Write the access pages"
                                           id="username"/>

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


</body>
<?php include 'footer.php' ?>
<script>

    $(document).ready(function() {
        $('#users_table').DataTable( {
            "order": [[ 5, "desc" ]]
        } );
    } );

</script>
</html>
