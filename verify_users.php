<?php
   $page = 'verify_users';
   include "main.php";
   include "header.php";
   $q = "SELECT `users`.*,`ranks`.`title` as `rank` FROM `users` JOIN `ranks` ON `ranks`.`id`=`users`.`rank` WHERE `users`.`confirmed`='0'";
   $res = mysqli_query($conn, $q);
   ?>
<style>
input ,select{
    width: 90%;
    /* margin: 10px; */
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
   <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
      &times;
      </button>
      <strong>Success!</strong> — updated successfully.
   </div>
   <?php
      unset($_SESSION['msg']);
      } elseif (isset($_SESSION['error']) && strlen($_SESSION['error'])>0) {
          ?>
   <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
      &times;
      </button>
      <strong>Snap, aye!</strong> — Some unexpected error has occured.
   </div>
   <?php
      unset($_SESSION['error']);
      }

      ?>
   <div class="container center" style="padding-bottom: 50px;">
      <div class="intro">
         <h2 class="text-center">Accounts on Hold</h2>
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
               <th>Join Date</th>
               <th>Verify</th>
            </tr>
         </thead>
         <tbody>
            <?php
               while ($row=mysqli_fetch_object($res)) {
                   echo '
                   <tr>
                       <td>'.$row->user_name.'</td>
                       <td>'.$row->game_name.'</td>
                       <td>'.$row->station.'</td>
                       <td>'.$row->badge_no.'<br><a href="https://sd.lsgov.us/forum/memberlist.php?mode=viewprofile&u='.$row->badge_no.'" target="_blank">Profile</a></td>
                       <td>'.$row->rank.'</td>
                       <td>'.$row->added_date.'</td>
                       <td><center><a href="javascript:idverify_user('.$row->id.');" ><i style="color:green;" class="fa fa-check fa-lg" aria-hidden="true"></i></a></center></td>
                   </tr>
                    '; ?>
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
                           <input required minlength="4" type="text" value="<?php echo $row->user_name; ?>" name="name" placeholder="Choose a username..."
                              id="username"/>
                           <input required type="text" class="spaceFix" value="<?php echo $row->game_name; ?>" name="game_name" placeholder="Your in-game name..."
                              id="ign"/>
                           <select required id="station" name="station">
                              <option value="" disabled >Select your
                                 station
                              </option>
                              <option value="ELS" <?php echo $row->station=='ELS'?'selected':''; ?>>East Los Santos Station</option>
                              <option value="SCV" <?php echo $row->station=='SCV'?'selected':''; ?>>Santa Clara Valley</option>
                              <option value="N/A" <?php echo $row->station=='N/A'?'selected':''; ?>>Not Available</option>
                           </select>
                           <input required type="number" value="<?php echo $row->badge_no; ?>" name="badge"
                              placeholder="Badge number..." id="badge"/>
                           <select required id="rank" name="rank">
                              <option value="" disabled >Select your rank
                              </option>
                              <option value="12"  <?php echo $row->rank=='12'?'selected':''; ?>>Deputy Sheriff Trainee</option>
                              <option value="11"  <?php echo $row->rank=='11'?'selected':''; ?>>Deputy Sheriff</option>
                              <option value="10"  <?php echo $row->rank=='10'?'selected':''; ?>>Deputy Sheriff (Bonus I)</option>
                              <option value="9"  <?php echo $row->rank=='9'?'selected':''; ?>>Deputy Sheriff (Bonus II)</option>
                              <option value="8"  <?php echo $row->rank=='8'?'selected':''; ?>>Sergeant</option>
                              <option value="7"  <?php echo $row->rank=='7'?'selected':''; ?>>Lieutenant</option>
                              <option value="6"  <?php echo $row->rank=='6'?'selected':''; ?>>Captain</option>
                              <option value="5"  <?php echo $row->rank=='5'?'selected':''; ?>>Area Commander</option>
                              <option value="4"  <?php echo $row->rank=='4'?'selected':''; ?>>Division Chief</option>
                              <option value="3"  <?php echo $row->rank=='3'?'selected':''; ?>>Assistant Sheriff</option>
                              <option value="2"  <?php echo $row->rank=='2'?'selected':''; ?>>Undersheriff</option>
                              <option value="1"  <?php echo $row->rank=='1'?'selected':''; ?>>Sheriff</option>
                           </select>
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
                     </div>
                     <!-- /.modal-content -->
                  </form>
               </div>
               <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <?php
               }

               ?>
         </tbody>
      </table>
      <br><br><br><br>
      <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Hey you!</h4>
  If you verify an account, make sure you check the user's reply on the Sheriff's Formatter thread, if everything checks out (rank, badge, station, etc) then <u>quote</u> him/her and state that you verified his/her's account, like so: <a class="alert-link" href="https://i.imgur.com/04lXG39.png" target="_blank">CLICK<a>
  <hr>
  <span class="mb-0">This is to let everyone know that you already handled the request.<br>Tanks!</span>
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
<!-- footer -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.js"></script>
<script>
function idverify_user(id=''){
    var r = confirm("Did you check out everything?\nIn-game name, station, badge number, rank..?");
    if (r == true) {
        $.ajax({
            url:'verifyuser.php?id='+id,
            success:function (data) {
                location.reload();
            }
        })
    }
}
   $('#users_table').dataTable( {
        "order": [[ 5, "asc" ]]
    } );;
</script>
<?php include 'footer.php' ?>
</html>
