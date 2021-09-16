<?php
$page = 'stations';
include "header.php";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['title']);
    $val = mysqli_real_escape_string($conn, $_POST['value']);

    $q = "UPDATE `stations` SET `title`='".$name."', `value`='".$val."' WHERE `id`='".$_POST['id']."'";

    if (mysqli_query($conn, $q)) {
        $_SESSION['msg'] = "done";
        header('Location:stations.php');
    } else {
        $_SESSION['error'] = "failed";
        header('Location:stations.php');
    }
} elseif (isset($_POST['add-submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['title']);
    $val = mysqli_real_escape_string($conn, $_POST['value']);

    $q = "INSERT INTO stations (title,value) VALUES('".$name."', '".$val."')";

    if (mysqli_query($conn, $q)) {
        $_SESSION['msg'] = "done";
        header('Location:stations.php');
    } else {
        $_SESSION['error'] = "failed";
        header('Location:stations.php');
    }
}


$q = "SELECT `stations`.*,COUNT(users.id) as `total_users` FROM `stations` LEFT JOIN `users` ON `users`.`station`=`stations`.`value` GROUP BY `stations`.`value`";

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
<div class="features-boxed center">

    <?php
    if (isset($_SESSION['msg']) && strlen($_SESSION['msg'])>0) {
        ?>
        <div class="alert alert-success" style="margin: 20px;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <strong>Action Executed</strong> *insert a nice sentence here, aye*
        </div>
        <?php
        unset($_SESSION['msg']);
    } elseif (isset($_SESSION['error']) && strlen($_SESSION['error'])>0) {
        ?>
        <div class="alert alert-danger" style="margin: 20px;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <strong>Failed!</strong> Some unexpected error occured.
        </div>
        <?php
        unset($_SESSION['error']);
    }
    ?>
    <div class="container center" style="padding-bottom: 50px;">
        <div class="intro">
            <h2 class="text-center">Stations List &nbsp;&nbsp;&nbsp;&nbsp; <a href="#modal-add-new" data-toggle="modal">
                    <i
                        class="fa fa-plus-circle"></i>
                </a></h2>
            <div class="modal fade" id="modal-add-new">
                <div class="modal-dialog">
                    <form method="post" action="">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h4 class="modal-title">Add New Station</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">

                                <input required minlength="4" type="text" value="<?php echo $row->title; ?>" name="title"
                                       placeholder="Title to be displayed"
                                       id="username"/>

                                <input required minlength="1" type="text" value="<?php echo $row->value; ?>" name="value"
                                       placeholder="Value of station to be saved in DB"
                                       id="username"/>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="add-submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </form>
                </div><!-- /.modal-dialog -->
            </div>
        </div>


        <table id="users_table" class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Value</th>
                <th>Enrolled Users</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>


            <?php
            while ($row=mysqli_fetch_object($res)) {
                echo '
                <tr>
                    <td>'.$row->title.'</td>
                    <td>'.$row->value.'</td>
                    <td>'.$row->total_users.'</td>
                    <td>

                    <a data-toggle="modal" href="#modal-'.$row->id.'"><i class="fa fa-pen" style="margin-right: 10px;"></i></a> <a  href="#" onclick="deleteUser('.$row->id.')"><i class="fa fa-trash"></i></a>

                    </td>
                </tr>
'; ?>
                <div class="modal fade" id="modal-<?php echo $row->id; ?>">
                    <div class="modal-dialog">
                        <form method="post" action="">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Edit Rank</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id"
                                           value="<?php echo $row->id; ?>">

                                    <input required minlength="4" type="text" value="<?php echo $row->title; ?>" name="title"
                                           placeholder="Title to be displayed"
                                           id="username"/>

                                    <input required minlength="1" type="text" value="<?php echo $row->value; ?>" name="value"
                                           placeholder="Value of station to be saved in DB"
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
                url:'delete.php?type=stations&id='+id,
                success:function (data) {
                    alert('Station deleted successfully');
                    // location.reload();
                }
            })
        }
    }


    $('#users_table').dataTable();
</script>
</html>
