<?php
$page = 'settings';
include "main.php";
include('header.php');

// // ERROR REPORTING
// error_reporting(E_ALL);
// ini_set("display_errors", 1);


// HTML DOM Parser
// include('dom\simple_html_dom.php');
// include('dom/cURL.php');

// ACCOUNT SAVE
// if (isset($_POST['submit'])) {
//    if (strlen($_POST['password']) > 0) {
//       if ($_POST['password'] == $_POST['con_pass']) {
//          $name = str_replace('_', ' ', mysqli_real_escape_string($conn, $_POST['game_name']));
//          $station = mysqli_real_escape_string($conn, $_POST['station']);
//          $signature = mysqli_real_escape_string($conn, $_POST['signature']);
//          $password = mysqli_real_escape_string($conn, $_POST['password']);
//          $hashed = hash('sha512', 'YN3_QY2*m;hbPVab' . $password);
//          $q = "UPDATE users SET game_name='" . $name . "', station='" . $station . "', signature='" . $signature . "', password='" . $hashed . "' WHERE id='" . $_SESSION['user']->id . "'";

//          if (mysqli_query($conn, $q)) {
//             $q = "SELECT * FROM users WHERE id='" . $_SESSION['user']->id . "'";
//             $res = mysqli_query($conn, $q);
//             $_SESSION['user'] = mysqli_fetch_object($res);
//             $_SESSION['msg'] = "Done!";
//             header('Location:settings.php');
//          } else {
//             $_SESSION['error'] = "Failed!";
//             header('Location:settings.php');
//          }
//       } else {
//          $_SESSION['error'] = "No match! Make sure you type the same password in all fields.";
//          header('Location:settings.php');
//       }
//    } else {
//       $name = str_replace('_', ' ', mysqli_real_escape_string($conn, $_POST['game_name']));
//       $station = mysqli_real_escape_string($conn, $_POST['station']);
//       $signature = mysqli_real_escape_string($conn, $_POST['signature']);
//       $q = "UPDATE users SET game_name='" . $name . "', station='" . $station . "', signature='" . $signature . "' WHERE id='" . $_SESSION['user']->id . "'";
//       if (mysqli_query($conn, $q)) {
//          $q = "SELECT * FROM users WHERE id='" . $_SESSION['user']->id . "'";
//          $res = mysqli_query($conn, $q);
//          $_SESSION['user'] = mysqli_fetch_object($res);
//          $_SESSION['msg'] = "Done!";
//          header('Location:settings.php');
//       } else {
//          $_SESSION['error'] = "Failed, please contact a moderator! [ERROR CODE: FUCK-AYE]";
//          header('Location:settings.php');
//       }
//    }
// }

?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.css" />
<div class="features-boxed center">
   <div class="container center">
      <h2 id="accountSettings">Account Settings</h2>
      <p>Hello, <?php echo $_SESSION['user']->user_name; ?>!</p>
   </div>

   <?php
   // ALERT MESSAGES
   if (isset($_SESSION['msg'])) {
   ?>
      <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;
         </button>
         <strong>Success!</strong> — Updated successfully.
      </div>
   <?php
      unset($_SESSION['msg']);
   } elseif (isset($_SESSION['error'])) {
   ?>
      <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;
         </button>
         <strong>Error!</strong> — Something went wrong. <?php echo $_SESSION['error']; ?>
      </div>
   <?php
      unset($_SESSION['error']);
   }
   ?>


   <div class="card someSpace">
      <div class="card-header">
         Update
      </div>
      <div class="card-body">
         <h5 class="card-title">Automatically update your Sheriff's Formatter account!</h5>
         <p class="card-text">Press the button to automatically update your rank, in game name and groups.<br />
            If anything goes wrong, check out the contact details located in the site's footer.
         </p>
         <center><button type="button" id="updateAccount" class="btn disabled btn-primary btn-sm">Update Account</button>
         <br /><br /><span>Disabled, running a demo.</span>
      </center>
      </div>
   </div>
   <form method="post" action="">
      <div class="card someSpace">
         <div class="card-header">
            In-Character Details
         </div>
         <div class="card-body">
            <div class="form-inline">
               <div class="col-md-12 form-group">
                  <label class="col-sm-4 col-form-label">In-Game Name</label>
                  <input class="form-control col-sm-7" type="text" name="game_name" required value="<?php echo $_SESSION['user']->game_name; ?>" autocomplete="off" placeholder="Firstname Lastname">
               </div>
            </div>
            <br>
            <div class="form-inline">
               <div class="col-md-12 form-group">
                  <label class="col-sm-4 col-form-label">Station/Assignment</label>
                  <select class="form-control col-sm-7" required id="station" name="station">
                     <option value="" disabled selected>Select your station</option>
                     <?php
                     $qw = "SELECT * FROM stations ORDER BY id DESC";
                     $rest = mysqli_query($conn, $qw);
                     while ($stations = mysqli_fetch_object($rest)) {
                        echo '<option ' . ($_SESSION['user']->station == $stations->value ? 'selected="selected"' : '') . ' value="' . $stations->value . '">' . $stations->title . '</option>';
                     }
                     ?>
                  </select>
               </div>
            </div>
            <br>
            <div class="form-inline">
               <div class="col-md-12 form-group">
                  <label class="col-sm-4 col-form-label">Badge Number</label>
                  <input class="form-control col-sm-7 disabled" type="number" disabled required value="<?php echo $_SESSION['user']->badge_no; ?>" autocomplete="off" placeholder="Badge number goes here">
               </div>
            </div>
            <br>
            <div class="form-inline">
               <div class="col-md-12 form-group">
                  <label class="col-sm-4 col-form-label">Rank</label>
                  <?php
                  $qqr = "SELECT * FROM ranks WHERE id='" . $_SESSION['user']->rank . "'";
                  $rest = mysqli_query($conn, $qqr);
                  $rowt = mysqli_fetch_object($rest);
                  ?>
                  <input class="form-control col-sm-7 disabled" name="rank" type="text" disabled required value="<?php echo $rowt->title; ?>" autocomplete="off" placeholder="Rank">
               </div>
            </div>
            <br>
            <div class="form-inline">
               <div class="col-md-12 form-group">
                  <label class="col-sm-4 col-form-label">(Optional) Signature</label>
                  <input class="form-control col-sm-7" type="text" name="signature" value="<?php echo $_SESSION['user']->signature; ?>" autocomplete="off" placeholder="(Optional) Direct URL of your signature">
               </div>
            </div>
         </div>
      </div>
      <div class="card someSpace">
         <div class="card-header">
            Account Security
         </div>
         <div class="card-body">
            <p>Leave blank if you don't want to change your password.</p>
            <input disabled class="form-control someSpace" type="password" name="password" autocomplete="off" placeholder="New password">
            <input disabled class="form-control someSpace" type="password" name="con_pass" autocomplete="off" placeholder="Confirm new passowrd">
            <span>Disabled, running a demo.</span>
         </div>
      </div>
      <center>
         <button class="btn btn-lg btn-success">Save</button>
      </center>
      <br />
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
<?php include 'footer.php' ?>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.js"></script>

<script>
   // $('[data-toggle="popover"]').popover()
   // $('[data-toggle="popover"]').popover('show');

   // $('#updateAccount').click(function() {


   //    <?php
   //    // ! Update the account from here.

   //    // Run the SQL lines to update the account.
   //    $userId = (int)$_SESSION['user']->id;
   //    // Wipe all the group relations for the user.
   //    $deleteSQL = "DELETE FROM user_groups WHERE user_id = {$userId}";
   //    $deleteResult = mysqli_query($conn, $deleteSQL);
   //    for ($i = 0; $i < count($groupArray[0]); $i++) {
   //       $current = (int)$groupArray[0][$i];

   //       if (in_array($current, $rankArrays)) {
   //          $rankUpdateSQL = "UPDATE users SET rank = {$current} WHERE id = {$userId}";
   //          $return = mysqli_query($conn, $rankUpdateSQL);
   //          if (!$return) {
   //             echo ("Error with updating the rank.");
   //             echo ("Error: {$conn->error}");
   //          }
   //       } else {
   //          $addGroupSQL = "INSERT INTO user_groups (user_id, group_id, is_leader) VALUES({$userId}, {$current}, 0)";
   //          $return = mysqli_query($conn, $addGroupSQL);
   //       }
   //    }

   //    ?>
   //    $('input[name="password"]').val("");
   //    $('input[name="con_pass"]').val("");
   //    $('input[name="game_name"]').val("<?php echo $userIGN ?>");
   //    $('button[name="submit"]').click();

   // });
</script>

</html>