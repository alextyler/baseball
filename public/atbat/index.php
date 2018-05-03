<?php
require_once("../../private/initialize.php");
//require_login();
$page_title = "atbat Page";
$current = "atbat";
include(SHARED_PATH . '/public_header.php');

$playerid = $_GET['playerid'] ?? false;

$atbat = Atbat::find_all();


$player = Player::find_by_id($playerid);

?>

<section id="boxes">
   <div class="container">


     <br>
     <h2>Overall Player Stats</h2>
     <p>
       <?php echo "playerid: " .  $player->playerid; ?>
     </p>
     <p>


        <button type="button" onclick="location='create.php?playerid=<?php echo $playerid; ?>'">Add an at bat</button>
        <br /><br />

        <table>
          <tr>

            <th>Avg</th>
            <th>RBI</th>
            <th>OBP</th>
            <th>HR</th>
            <th>Singles</th>
            <th>Doubles</th>
            <th>Triples</th>
            <th>Update</th>
            <th>Delete</th>

          </tr>



<?php
      //find any contracts from the blog
      $singles = atbat::find_singles($playerid);
      foreach($singles as $single)
      {$sig = $single->singles;}

      $doubles = atbat::find_doubles($playerid);
      foreach($doubles as $double)
      {$dob = $double->doubles;}

      $triples = atbat::find_triples($playerid);
      foreach($triples as $triple)
      {$trip = $triple->triples;}

      $homers = atbat::find_homers($playerid);
      foreach($homers as $homer)
      {$hom = $homer->homers;}

      $rbis = atbat::find_rbis($playerid);
      foreach($rbis as $rbi)
      {$rib = $rbi->rbis;}

      $strikeouts = atbat::find_strikeouts($playerid);
      foreach($strikeouts as $strikeout)
      {$strikeout = $strikeout->strikeouts;}

      $walks = atbat::find_walks($playerid);
      foreach($walks as $walk)
      {$walk = $walk->walks;}

      $battedouts = atbat::find_battedouts($playerid);
      foreach($battedouts as $battedout)
      {$battedout = $battedout->battedouts;}

      $reachedonerrors = atbat::find_reachedonerrors($playerid);
      foreach($reachedonerrors as $reachedonerror)
      {$reachedonerror = $reachedonerror->reachedonerrors;}

      $totalatbats = atbat::find_totalatbats($playerid);
      foreach($totalatbats as $totalatbat)
      {$totalatbat = $totalatbat->totalatbats;}
      echo "total at bats" . $totalatbat;
      $avg = ($sig + $dob + $trip + $hom) / $totalatbat;

      $obp = ($sig + $dob + $trip + $hom + $walk + $reachedonerror)/$totalatbat;



//output
        echo "<tr><td>" . number_format($avg, 3) . "</td>";
        echo "<td>" .  $rib . "</td>";
        echo "<td>" .  number_format($obp, 3) . "</td>";
        echo "<td>" .  $hom . "</td>";
        echo "<td>" .  $sig . "</td>";
        echo "<td>" .  $dob . "</td>";
        echo "<td>" .  $trip . "</td>";
        echo "<td><a href='update.php?playerid=" . $playerid . "'>Update</a></td>";
        echo "<td><a href='delete.php?playerid=" . $playerid . "'>Delete</a></td></tr>";


?>

      </table>
      </div>
    </section>


<?php


include(SHARED_PATH . '/public_footer.php');
?>
