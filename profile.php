<?php
$page = 'profile';
include "main.php";
include('header.php');

$user = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$user");
$row = $result->fetch_row();
if (empty($row)) {
   // Redirect back to main
   header('Location:index.php');
}


//  Row is not empty. Take up the values one by one.
$user_id = $row[0];
// Keep on going according to DATABASE TABLE order
// You can use the variables in HTML.
// Get the groups.
$groups_query = mysqli_query($conn, "SELECT group_id FROM user_groups WHERE user_id=$user");
// You can iterate through the groups as needed to display the groups.

// gets the user info
$getUsername = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE id=$user"));

// transforms the rank into name from ID
$getRank = mysqli_fetch_array(mysqli_query($conn, "SELECT users.rank,ranks.title FROM users, ranks WHERE users.rank = ranks.id AND users.id=$user"));
if (empty($getRank)) {
   $getRank = '?';
}
?>

<div class="features-boxed center">
   <div class="container">
      <div class="profileHeader">
         <h2><span id="checkIfEmpty"><?php echo $getUsername['user_name']; ?></span>'s Profile</h2>

      </div>


      <form>

         <div class="rowp">
            <div class="column text-right">
               <strong>Username</strong>
               <strong>In-Game Name</strong>
               <strong>Rank</strong>
               <strong>Station/Assignment</strong>
               <strong>Badge Number</strong>
               <strong>User Type</strong>
               <strong>Groups</strong>
            </div>
            <div class="column">
               <span><?php echo $getUsername['user_name']; ?></span>
               <span><?php echo $getUsername['game_name']; ?></span>
               <span><?php echo $getRank['title']; ?></span>
               <span><?php echo $getUsername['station']; ?></span>
               <span><?php echo $getUsername['badge_no']; ?> [ <a href="#">Forum Profile</a> ]</span>
               <span id="userType"></span>
               <span>
                  <select id="select" class="align-top form-control">
                  <?php
                     $groupDB = "SELECT groups.title,user_groups.group_id
                     FROM groups, user_groups
                     WHERE groups.id = user_groups.group_id
                     AND user_id=$user";

                     $rest = mysqli_query($conn, $groupDB);
                     while ($group = mysqli_fetch_object($rest)) {
                        echo '<option value="' . $group->group_id . '">' . $group->title . '</option>';
                     }
                     ?>
                  </select>
               </span>
            </div>
         </div>
         <br>
         <div class="signature">
            <strong>Signature</strong>
            <span>
               <div id="sig"></div>
            </span>
         </div>

   </div>
</div>
</div>
</form>


<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="/js/sb-admin.min.js"></script>
</body>
<?php include 'footer.php' ?>
<script>
   // Show signature if available, if not - replace with text.
   let sig = "<?php echo $getUsername['signature']; ?>";
   if (sig || "") {
      $('#sig').append("<center><img style='' src='" + sig + "' /></center>");
   } else {
      $('#sig').append("<span>User has no signature.</span>")
   }


   // Show text under profile header, if the user is a moderator
   let userType = "<?php echo $getUsername['is_admin'] ?>"

   if (userType == 1 || userType == 2) { // if user is admin, show moderator text
      $('#userType').text('Moderator').attr('id', 'userTypeMod');
   } else {
      $('#userType').append('Regular');
   }

   //checkifempty
   if ($("#checkIfEmpty").is(':empty')){
      console.log("empty");
      $('form').remove();
      $('.profileHeader').html('<h2>Sorry, that profile does not exist.<br><br><p style="font-weight: 600;font-size: 1.3rem;">If you try again and the problem presists, well maybe you should stop.<br>Thanks.</p></h2>');
      $(`<button type="button" onclick="window.location.href='/'" class="btn btn-primary">Go back</button><br /><br /><br /><br /><br /><br /><br /><br /><br />`).insertAfter(".profileHeader");
   }

   //
</script>

</html>