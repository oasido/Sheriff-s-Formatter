<?php
$page = 'action-logs';
include "header.php";

$q = "SELECT * FROM action_logs ORDER BY id DESC";
$res = mysqli_query($conn, $q);
?>

<style>
    textarea,
    input,
    select {
        width: 90%;
        margin: 10px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid darkgrey;
    }

    .dataTables_length select {
        width: auto;
    }
</style>
<!-- dataTables -->
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.css" />
<div class="features-boxed center">

    <div class="container center" style="padding-bottom: 50px;">
        <div class="intro">
            <h2 class="text-center">Action Logs</h2>
        </div>


        <table id="action_logs" class="table table-hover">
            <thead>
                <tr>
                    <th>By User</th>
                    <th>Action</th>
                    <th>Affected Game Name</th>
                    <th>Date & Time</th>
                </tr>
            </thead>
            <tbody>


                <?php
            while($row=mysqli_fetch_object($res)) {
                echo '
                <tr>
                    <td>'.$row->by_user.'</td>
                    <td>'.$row->action.'</td>
                    <td>'.$row->affected_user.'</td>
                    <td>'.$row->date.'</td>

                </tr>
                ';
                ?>
                <div class="modal fade" id="modal-<?php echo $row->id; ?>">
                    <div class="modal-dialog">
                        <form method="post" action="">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Edit Log</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                                    <input required minlength="2" type="text" value="<?php echo $row->label; ?>"
                                        name="label" placeholder="Label" id="username" />

                                    <input required minlength="4" type="text" value="<?php echo $row->title; ?>"
                                        name="title" placeholder="Title to be displayed" id="username" />

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
<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.js"></script>
<script>
    function deleteUser(id = '') {
        var r = confirm("Are you sure you want to delete this entry? This cannot be undone.");
        if (r == true) {
            $.ajax({
                url: 'delete.php?type=logs&id=' + id,
                success: function (data) {
                    location.reload();
                }
            })
        }
    }

    $('#action_logs').dataTable({
        "order": [
            [3, "desc"]
        ]
    });
</script>

</html>