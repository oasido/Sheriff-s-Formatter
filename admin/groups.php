<?php
$page = 'groups';
include "header.php";

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['title']);

    $pages = mysqli_real_escape_string($conn, $_POST['pages']);

    $q = "UPDATE `groups` SET `title`='".$name."', `pages`='".$pages."' WHERE `id`='".$_POST['id']."'";

    if (mysqli_query($conn, $q)) {

        $q = "DELETE FROM `user_groups` WHERE `group_id`='".$_POST['id']."' AND `is_leader`='1'";

        mysqli_query($conn, $q);

        foreach ($_POST['leader_id'] as $leader){
            $q = "INSERT INTO user_groups (user_id, group_id, is_leader) VALUES ('".$leader."', '".$_POST['id']."', '1')";
            mysqli_query($conn, $q);
        }

        $_SESSION['msg'] = "done";
        header('Location:groups.php');
    } else {
        $_SESSION['error'] = "failed";
        header('Location:groups.php');
    }
}elseif(isset($_POST['add-submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['title']);
    $pages = mysqli_real_escape_string($conn, $_POST['pages']);

    $q = "INSERT INTO groups (title, pages) VALUES('".$name."', '".$pages."') ";

    if (mysqli_query($conn, $q)) {
        $insert_id = mysqli_insert_id($conn);
        foreach ($_POST['leader_id'] as $leader){
            $q = "INSERT INTO user_groups (user_id, group_id, is_leader) VALUES ('".$leader."', '".$insert_id."', '1')";
            mysqli_query($conn, $q);
        }
        $_SESSION['msg'] = "done";
        header('Location:groups.php');
    } else {
        $_SESSION['error'] = "failed";
        header('Location:groups.php');
    }
}


$q = "SELECT `groups`.*,COUNT(users.id) as `total_users` FROM `groups` LEFT JOIN `user_groups` ON `user_groups`.`group_id`=`groups`.`id` LEFT JOIN `users` ON `users`.`id`=`user_groups`.`user_id` GROUP BY `groups`.`id`";

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
    .remove_user{
        text-decoration: none;
        color: #ad5252;
    }
    .remove_user:hover{
        text-decoration: none;
        color: red;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.css"/>
<div class="features-boxed center">

    <?php
    if(isset($_SESSION['msg']) && strlen($_SESSION['msg'])>0) {
        ?>
        <div class="alert alert-success" style="margin: 20px;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <strong>Group List Updated</strong> *insert a nice sentence here, aye*
        </div>
        <?php
        unset($_SESSION['msg']);
    }else if(isset($_SESSION['error']) && strlen($_SESSION['error'])>0) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <strong>Failed!</strong> Some unexpected error occured
        </div>
        <?php
        unset($_SESSION['error']);
    }
    ?>
    <div class="container center" style="padding-bottom: 50px;">
        <div class="intro">
            <h2 class="text-center">Groups List &nbsp;&nbsp;&nbsp;&nbsp; <?php
                if($_SESSION['admin']->is_admin=='1'){
                ?><a href="#modal-add-new" data-toggle="modal">
                    <i
                            class="fa fa-plus-circle"></i>
                </a></h2>
            <div class="modal fade" id="modal-add-new">
                <div class="modal-dialog">
                    <form method="post" action="">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h4 class="modal-title">Add New Group</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;
                                </button>
                            </div>
                            <div class="modal-body">

                                <h6>Group Title</h6>
                                <input required minlength="4" type="text"
                                       value="<?php echo $row->title; ?>" name="title"
                                       placeholder="Title to be displayed"
                                       id="username"/>
                                <div id="d_add">
                                <h6>Select Group Leader</h6>

                                    <select id="s_sel" required name="leader_id[]" style="width: 90%;">
                                    <option disabled>Select Group Leader</option>
                                    <?php
                                    $q = "SELECT * FROM users";
                                    $rest = mysqli_query($conn, $q);
                                    while ($rowt = mysqli_fetch_object($rest)) {
                                        echo '<option value="' . $rowt->id . '">' . ucwords($rowt->user_name) . '</option>';
                                    }
                                    ?>
                                    </select><a href="#" class="remove_user"  id="sel"> <i class="fa fa-times"></i></a>
                                </div>
                                <h6 style="text-align: right"><a class="leader_plus" id="add" href="#"><i class="fa fa-plus"></i> Add Another Leader</a> </h6>
                                <h6>Permitted Pages</h6>
                                <input required minlength="2" type="text"
                                       value="<?php echo $row->title; ?>" name="pages"
                                       placeholder="Pages to be managed"/>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default"
                                        data-dismiss="modal">Close
                                </button>
                                <button type="submit" name="add-submit"
                                        class="btn btn-primary">Save changes
                                </button>
                            </div>
                        </div><!-- /.modal-content -->
                    </form>
                </div><!-- /.modal-dialog -->
            </div>
            <?php
            }
            ?>
        </div>


        <table id="users_table" class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Group Folder</th>
                <th>Enrolled Users</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>


            <?php
            while($row=mysqli_fetch_object($res)) {

                $q2= "SELECT * FROM users WHERE id='".$row->leader_id."'";
                $res3=mysqli_query($conn, $q2);
                $leader = mysqli_fetch_object($res3)->user_name;

                echo '
                <tr>
                    <td>'.$row->id.'</td>
                    <td>'.$row->title.'</td>

                    <td>'.$row->pages.'</td>
                    <td>'.$row->total_users.'</td>
                    <td>

                    <a data-toggle="modal" href="#modal-'.$row->id.'"><i class="fa fa-pen" style="margin-right: 10px;"></i></a>';
                if($_SESSION['admin']->is_admin=='1') {
                    echo '<a  ' . ($row->is_admin == '1' ? ' style="color: gray" ' : '') . '  href="#" onclick="' . ($row->is_admin == '1' ? '' : 'deleteUser(' . $row->id . ')') . '"><i class="fa fa-trash"></i></a>';
                }
                echo '

                    </td>
                </tr>
';
                ?>


                <?php
            }
            ?>

            </tbody>
        </table>



    </div>
</div>
<?php


$q = "SELECT groups.*,COUNT(users.id) as total_users FROM groups LEFT JOIN user_groups ON user_groups.group_id=groups.id LEFT JOIN users ON users.id=user_groups.user_id GROUP BY groups.id";

$res = mysqli_query($conn, $q);

while($row=mysqli_fetch_object($res)) {
    ?>
    <div class="modal fade" id="modal-<?php echo $row->id; ?>">
        <div class="modal-dialog">

            <div class="modal-content">
                <form method="post" action="" onsubmit="">
                    <div class="modal-header">

                        <h4 class="modal-title">Edit Group</h4>
                        <button type="button" class="close"
                                data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" name="id"
                               value="<?php echo $row->id; ?>">

                        <h6>Group Title</h6>
                        <input required minlength="4" type="text"
                               value="<?php echo $row->title; ?>"
                               name="title"
                               placeholder="Title to be displayed"
                               id="username"/>
                        <h6>Select Group Leader</h6>
                        <div id="d_l_<?php echo $row->id; ?>">
                            <?php
                            $q = "SELECT * FROM user_groups WHERE group_id='" . $row->id . "' AND is_leader='1'";
                            $res_fr = mysqli_query($conn, $q);

                            while ($row_group = mysqli_fetch_object($res_fr)) {
                                ?>

                                <select id="s_i_<?php echo $row_group->user_id . '_' . $row->id; ?>"
                                        required name="leader_id[]"
                                        style="width: 90%;">
                                    <option disabled>Select Group Leader
                                    </option>
                                    <?php
                                    $q = "SELECT * FROM users";
                                    $rest = mysqli_query($conn, $q);
                                    while ($rowt = mysqli_fetch_object($rest)) {
                                        echo '<option ' . ($row_group->user_id == $rowt->id ? 'selected="selected"' : '') . ' value="' . $rowt->id . '">' . ucwords($rowt->user_name) . '</option>';
                                    }
                                    ?>
                                </select><a href="#" class="remove_user"
                                            id="i_<?php echo $row_group->user_id . '_' . $row->id; ?>">
                                    <i class="fa fa-times"></i></a>
                                <?php
                            }
                            ?>
                        </div>
                        <h6 style="text-align: right"><a class="leader_plus"
                                                         id="l_<?php echo $row->id; ?>"
                                                         href="#"><i
                                        class="fa fa-plus"></i> Add Another
                                Leader</a></h6>
                        <h6>Permitted Pages</h6>
                        <input required minlength="2" type="text"
                               value="<?php echo $row->pages; ?>" name="pages"
                               placeholder="Pages to be managed"/>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">Close
                        </button>
                        <button type="submit" name="submit"
                                class="btn btn-primary">Save changes
                        </button>
                    </div>
                </form>
            </div><!-- /.modal-content -->

        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php
}
?>

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
    var count = 0;
$('.leader_plus').on('click', function (e) {
    e.preventDefault();
    $id=this.id;

    var min=10;
    var max=800000;
    var random =Math.floor(Math.random() * (+max - +min)) + +min;

    $del_id = $id.replace('d_', 'i_');
    var leader_select = '<select id="s_d_'+random+'" required name="leader_id[]"><option disabled>Select Group Leader</option><?php $q = "SELECT * FROM users"; $rest = mysqli_query($conn, $q); while ($rowt = mysqli_fetch_object($rest)) { echo '<option value="' . $rowt->id . '">' . ucwords($rowt->user_name) . '</option>'; } ?> </select><a href="#" class="remove_user"  id="d_'+random+'"> <i class="fa fa-times"></i></a>';


    $('#d_'+$id).append(leader_select);

});


$('body').on('click', '.remove_user', function (e) {

    e.preventDefault();
    $id = this.id;
    $('#'+$id).remove();
    $('#s_'+$id).remove();
});
    <?php
    if($_SESSION['admin']->is_admin=='1'){
    ?>
    function deleteUser(id='') {
        var r = confirm("Are you sure you want to delete this entry?");
        if (r == true) {
            $.ajax({
                url: 'delete.php?type=groups&id=' + id,
                success: function (data) {
                    alert('Group deleted successfully, aye.');
                    location.reload();
                }
            })
        }
    }
    <?php
    }
?>

    $('#users_table').dataTable();
</script>
</html>
