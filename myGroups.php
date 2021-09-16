<?php
$page = 'permissions';
include 'main.php';
include "header.php";


$q = "SELECT * FROM user_groups JOIN groups ON user_groups.group_id=groups.id WHERE user_id='".$_SESSION['user']->id."' AND is_leader='1'";
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
    function addUser(id=''){

        $.ajax({
            url:'manageGroupUsers.php?type=1&id='+id,
            success:function (data) {
                location.reload();
            }
        })
    }

    function removeUser(id=''){
        var r = confirm("Are you sure you want to remove this user from your group?");
        if (r == true) {
            $.ajax({
                url:'manageGroupUsers.php?type=0&id='+id,
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
            <h2 class="text-center">Manage Groups
                <p class="text-center"></p>
        </div>


        <table id="users_table" class="table table-hover">
            <thead>
            <tr>
                <th>Group Title</th>
                <th>Total Users</th>
                <th>Manage Members</th>
            </tr>
            </thead>
            <tbody>


            <?php
            while ($row=mysqli_fetch_object($res)) {
                $q = "SELECT COUNT(users.id) as total_users FROM users JOIN user_groups  ON user_groups.user_id=users.id WHERE user_groups.group_id='".$row->id."' AND user_groups.is_leader='0'  GROUP BY user_groups.group_id";

                $restt = mysqli_query($conn, $q);
                $rowt = mysqli_fetch_object($restt);
                echo '
                <tr>
                    <td>'.$row->title.'</td>
                    <td>'.($rowt->total_users).'</td>

                    <td>

                    <a href="permissions.php?group='.base64_encode('po5464in6m336874b4uy32t34t83t24uy23tgt2736t'.$row->group_id).'">Manage Members  <i class="fa fa-angle-right"></i></a>

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

    // $('#users_table').dataTable();
</script>
</html>
