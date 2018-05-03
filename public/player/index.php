<?php
require_once("../../private/initialize.php");
//require_login();
$page_title = "Player Page";
$current = "player";
include(SHARED_PATH . '/public_header.php');
?>

<section id="boxes">
     <div class="container">



        <br>
        <h2>Players</h2>
        <button type = "button" onclick="location='create.php'">Create A New Player</button>
        <br /><br />
        <table>
           <tr>

             <th>Player ID</th>
             <th>Jersey Number</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>AVG</th>
             <th>HR</th>
             <th>RBI</th>
             <th>Detail</th>
             <th>Update</th>
             <th>Delete</th>
           </tr>


<?php

  $players = Player::find_all();
     //echo var_dump($taxs);
     foreach($players as $player)
     {
     //echo "<tr><td>" .  $blog->blogid . "</td>";
     echo "<tr><td>" .  $player->playerid . "</td>";
     echo "<td>" .  $player->jerseyNumber . "</td>";
     echo "<td>" .  $player->playerFName . "</td>";
     echo "<td>" .  $player->playerLName . "</td>";
     echo "<td>" .  $player->avg . "</td>";
     echo "<td>" .  $player->hr . "</td>";
     echo "<td>" .  $player->rbi . "</td>";
     echo "<td><a href='../atbat/index.php?playerid=" . $player->playerid . "'>Detail</a></td>";
     echo "<td><a href='update.php?playerid=" . $player->playerid . "'>Update</a></td>";
     echo "<td><a href='delete.php?playerid=" . $player->playerid . "'>Delete</a></td></tr>";
     }

?>
     </table>
     </div>
  </section>

<?php


include(SHARED_PATH . '/public_footer.php');
?>
