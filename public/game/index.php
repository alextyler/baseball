<?php
require_once("../../private/initialize.php");
//require_login();
$page_title = "Game Page";
$current = "game";
include(SHARED_PATH . '/public_header.php');
?>

<section id="boxes">
     <div class="container">



        <br>
        <h2>Games</h2>
        <button type = "button" onclick="location='create.php'">Create A New Game</button>
        <br /><br />
        <table>
           <tr>

             <th>Game ID</th>
             <th>Result</th>
             <th>Innings</th>
             <th>Date</th>
             <th>Update</th>
             <th>Delete</th>
           </tr>


<?php

    $games = Game::find_all();
     //echo var_dump($taxs);
     foreach($games as $game)
     {
     //echo "<tr><td>" .  $blog->blogid . "</td>";
     echo "<tr><td>" .  $game->gameid . "</td>";
     echo "<td>" .  $game->result . "</td>";
     echo "<td>" .  $game->innings . "</td>";
     echo "<td>" .  $game->date . "</td>";
     echo "<td><a href='update.php?gameid=" . $game->gameid . "'>Update</a></td>";
     echo "<td><a href='delete.php?gameid=" . $game->gameid . "'>Delete</a></td></tr>";
     }

?>
     </table>
     </div>
  </section>
<?php


include(SHARED_PATH . '/public_footer.php');
?>
