<?php
$page='dashboard';
include "header.php";

$q = "SELECT COUNT(id) as `total_users` FROM `users` WHERE `confirmed`='1'";
$res = mysqli_query($conn, $q);
$stats = array();
$stats['total_users'] = mysqli_fetch_object($res)->total_users;

$q = "SELECT COUNT(id) as `total_users` FROM `users` WHERE `confirmed`='0'";
$res = mysqli_query($conn, $q);

$stats['total_pending'] = mysqli_fetch_object($res)->total_users;

$q = "SELECT COUNT(id) as total FROM permissions";
$res = mysqli_query($conn, $q);

$stats['total_permissions'] = mysqli_fetch_object($res)->total;



?>
<style>
    .logs .text{
        color: #0070ff;
    }
    .logs label{
        margin-right: 10px;
        background: orange;
        color: white;
        padding: 2px 10px;
        font-size: 12px;
        border-radius: 3px;
    }
    .logs small{
        float: right;
        background: #52c0cc;
        color: white;
        padding: 2px 10px;
        font-size: 10px;
        border-radius: 3px;
    }
    .logs .log{
        border-bottom: 1px solid silver;
        margin-bottom: 5px;
    }
</style>
<div class="features-boxed center" style="width: 100%;">
    <div class="container center">

        <div class="intro">
            <h2 class="text-center">Admin Dashboard</h2>
        </div>
        <div class="row justify-content-center features">
            <div class="col-sm-6 item">
                <div class="box"><i class="fa fa-user-times icon"></i>
                <h3 class="name"><?php echo $stats['total_pending']; ?><br /></h3>
                <p class="description">Awaiting Approval<br /></p><a href="inactive_users.php" class="learn-more">Access »</a></div>
            </div>
        </div>
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
</html>