<?php

// ! Update the account from here.

  // Run the SQL lines to update the account.
$userId = (int)$_SESSION['user']->id;
// Wipe all the group relations for the user.
$deleteSQL = "DELETE FROM user_groups WHERE user_id = {$userId}";
$deleteResult = mysqli_query($conn, $deleteSQL);
for ($i = 0; $i < count($groupArray[0]); $i++) {
    $current = (int)$groupArray[0][$i];

    if (in_array($current, $rankArrays)) {
      $rankUpdateSQL = "UPDATE users SET rank = {$current} WHERE id = {$userId}";
      $return = mysqli_query($conn, $rankUpdateSQL);
      if (!$return) {
          echo ("Error with updating the rank.");
          echo ("Error: {$conn->error}");
      }
    } else {
      $addGroupSQL = "INSERT INTO user_groups (user_id, group_id, is_leader) VALUES({$userId}, {$current}, 0)";
      $return = mysqli_query($conn, $addGroupSQL);
    }
}


?>