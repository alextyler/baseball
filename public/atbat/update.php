<?php
require_once("../../private/initialize.php");
require_login();
$page_title = "Update Stats";
include(SHARED_PATH . '/public_header.php');

//get the persons id - id
$playerid = $_GET['playerid'] ?? false;

// find the user info based on passed id
$player = Player::find_by_id($playerid);

// set new variables to
$playerid = $player->playerid;
$teamName = $player->teamName;
$jerseyNumber = $player->jerseyNumber;
$playerFName = $player->playerFName;
$playerLName = $player->playerLName;


if(is_post_request()) {
    // get post variables
    $playerid = $_POST['playerid'];
    $teamName = $_POST['teamName'];
    $jerseyNumber = $_POST['jerseyNumber'];
    $playerFName = $_POST['playerFName'];
    $playerLName = $_POST['playerLName'];

    //$qualityScore = Blog::qualityScore($mozDA, $sponsors, $fqshop, $gfairy, $mstar);

    //create an array called args to be used with __construct
    $args = [];
    $args['playerid'] = $playerid;
    $args['teamName'] = $teamName;
    $args['jerseyNumber'] = $jerseyNumber;
    $args['playerFName'] = $playerFName;
    $args['playerLName'] = $playerLName;
  ;


    //instantiate a new object and use the merge attributes and save to update.
    $player = new Player($args);
    $player->merge_attributes($args);
    $player->update($playerid);


    header('Location: index.php');
//<p>Quality Score: <input type="number" name="qualScore" value="<?php echo $qualScore;"></p>
}
?>

<section id="boxes">
     <div class="container">
         <form action="update.php" method="post">
           <fieldset>
             <legend>Update Player Information</legend>
             <input name="playerid" type="hidden" value="<?php echo $playerid;?>">
             <p>Team Name: <input type="text" name="teamName" size="40" value="<?php echo $teamName; ?>"></p>
             <p>Jersey Number: <input type="text" name="jerseyNumber" size="40" value="<?php echo $jerseyNumber; ?>"></p>
             <p>First Name: <input type="text" name="playerFName" size="40" value="<?php echo $playerFName; ?>"></p>
             <p>Last Name: <input type="text" name="playerLName" size="40" value="<?php echo $playerLName; ?>"></p>



             <button type="submit" value="Submit">Update</button>
             <button type="button" onclick="location='index.php'">Cancel Update</button>
           </fieldset>
         </form>


      </div>
   </section>
<?php


include(SHARED_PATH . '/public_footer.php');
?>
