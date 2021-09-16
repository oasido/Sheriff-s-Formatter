<?php
   $page = 'permissions';
   include "header.php";
  
   if (isset($_POST['submit'])) {
       $rank = mysqli_real_escape_string($conn, $_POST['rank']);
       $access= mysqli_real_escape_string($conn, $_POST['access_pages']);
       $q = "UPDATE permissions SET rank='".$rank."',access_pages='".$access."' WHERE id='".$_POST['id']."'";
       
       if (mysqli_query($conn, $q)) {
           $_SESSION['msg'] = " Change applied!";
           header('Location:permissions.php');
       } else {
           $_SESSION['error'] = "Change failed!";
           header('Location:permissions.php');
       } 
       
       } elseif(isset($_POST['add-submit'])){
       $rank = mysqli_real_escape_string($conn, $_POST['rank']);
       $access= mysqli_real_escape_string($conn, $_POST['access_pages']);
       $q= "SELECT * FROM permissions WHERE rank='".$rank."'";
       $res=mysqli_query($conn, $q);
       if(mysqli_num_rows($res)>0){
           $_SESSION['error'] = "Duplicates are not allowed. Please update the permission(s) to the rank itself, fool.";
           header('Location:permissions.php');
       } else {
           $q = "INSERT INTO permissions (rank, access_pages) VALUES ('" . $rank . "', '" . $access . "')";
           
           if (mysqli_query($conn, $q)) {
               $_SESSION['msg'] = "Permission entry added!";
               header('Location:permissions.php');
           } else {
               $_SESSION['error'] = "Some unexpected error occured!";
               header('Location:permissions.php');
           }
       }
   }
   
   $q = "SELECT * FROM ranks ";
   $res = mysqli_query($conn, $q);
   $ranks = array();
   
   while($row=mysqli_fetch_object($res)){
       $ranks[] = $row;
   }
   
   $q = "SELECT permissions.*,ranks.id as rank_id,ranks.title FROM permissions LEFT JOIN ranks ON ranks.id=permissions.rank";
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
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/datatables.min.js"></script>
<script>
   function deleteUser(id=''){
       var r = confirm("Are you sure you want to delete this entry?");
       if (r == true) {
           $.ajax({
               url:'delete.php?type=permissions&id='+id,
               success:function (data) {
                   alert('Aye! Permission entry deleted. Successfully, eh..!');
                   location.reload();
               }
           })
       }
   }
</script>
<div class="features-boxed container h-100 justify-content-center">
   <?php
      if(isset($_SESSION['msg']) && strlen($_SESSION['msg'])>0) {
      ?>
   <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Success!</strong><?php echo $_SESSION['msg']; ?>
   </div>
   <?php
      unset($_SESSION['msg']);
      } else if(isset($_SESSION['error']) && strlen($_SESSION['error'])>0) {
      ?>
   <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Failed!</strong> <?php echo $_SESSION['error']; ?>
   </div>
   <?php
      unset($_SESSION['error']);
      }
      ?>
   <div class="container" style="padding-bottom: 50px;">
      <div class="intro">
         <h2 class="text-center">Permissions List &nbsp;&nbsp;&nbsp;&nbsp; <a href="#modal-add-new" data-toggle="modal">
            <i
               class="fa fa-plus-circle"></i>
            </a>
         </h2>
         <div class="modal fade" id="modal-add-new">
            <div class="modal-dialog">
               <form method="post" action="">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4 class="modal-title">Add Permissions</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     </div>
                     <div class="modal-body">
                        <select name="rank">
                           <option value="" disabled select="">Select rank</option>
                           <option value="0">All Ranks</option>
                           <?php
                              foreach ($ranks as $rank){
                                echo '<option  value="'.$rank->id.'">'.$rank->title.'</option>';
                              }
                              
                              ?>
                        </select>
                        <input required minlength="4" type="text" value="<?php echo $row->rank; ?>" name="access_pages" placeholder="Write the access pages" id="username"/>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="add-submit" class="btn btn-primary">Save</button>
                     </div>
                  </div>
                  <!-- /.modal-content -->
               </form>
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <p class="text-center"></p>
      </div>
      <table id="users_table" class="table table-hover">
         <thead>
            <tr>
               <th>ID</th>
               <th>Rank</th>
               <th>Access Pages</th>
               <th>Actions</th>
            </tr>
         </thead>
         <tbody>
            <?php
               while($row=mysqli_fetch_object($res)) {
               
                   echo '
               
                   <tr>
                       <td>'.$row->id.'</td>
                       <td>'.($row->rank=='0'?'<b style="color: #4ed264">All Ranks</b>':'').$row->title.'</td>
                       <td>'.$row->access_pages.'</td>
                       <td>
                       <a data-toggle="modal" href="#modal-'.$row->id.'"><i class="fa fa-pen" style="margin-right: 10px;"></i></a> <a   href="#" onclick="deleteUser('.$row->id.')"><i class="fa fa-trash"></i></a>
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
                           <select name="rank">
                              <option value="0">All Ranks</option>
                              <?php
                                 foreach ($ranks as $rank){
                                    echo '<option '.($rank->id==$row->rank?'selected':'').' value="'.$rank->id.'">'.$rank->title.'</option>';
                                 }
                                 ?>
                           </select>
                           <input required minlength="4" type="text" value="<?php echo $row->access_pages; ?>" name="access_pages"
                              placeholder="Write the access pages"
                              id="username"/>
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
   </div>
</div>
</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
</body>
<?php include '../footer.php' ?>
<script>
   $('#users_table').dataTable();
</script>
</html>