<?php
require_once("../../private/initialize.php");
//require_login();
$page_title = "Create Player Page";
include(SHARED_PATH . '/public_header.php');


if(is_post_request()) {
    // get post variables
    $playerid = $_POST['playerid'];
    $jerseyNumber = $_POST['jerseyNumber'];
    $playerFName = $_POST['playerFName'];
    $playerLName = $_POST['playerLName'];

    //$qualityScore = Player::qualityScore($mozDA, $sponsors, $fqshop, $gfairy, $mstar);

    //create an array called args to be used with __construct
    $args = [];
    $args['playerid'] = $playerid;
    $args['jerseyNumber'] = $jerseyNumber;
    $args['playerFName'] = $playerFName;
    $args['playerLName'] = $playerLName;


    //instantiate a new object
    $player = new Player ($args);
    $player->create();

    header('Location: index.php');
}

?>

<section id="boxes">
     <div class="container">
         <form action="create.php" method="post">
           <fieldset>
             <legend>Add a player</legend>

             <p>Player ID: <input type="text" name="playerid" value="<?php echo $playerid; ?>"></p>
             <p>Jersey Number: <input type="text" name="jerseyNumber" value="<?php echo $jerseyNumber; ?>"></p>
             <p>First Name: <input type="text" name="playerFName" value="<?php echo $playerFName; ?>"></p>
             <p>Last Name: <input type="text" name="playerLName" value="<?php echo $playerLName; ?>"></p>


             <button type="submit" value="Submit">Submit</button>
             <button type="button" onclick="location='index.php'">Cancel Update</button>
           </fieldset>
         </form>

     </div>
  </section>
<?php


include(SHARED_PATH . '/public_footer.php');



?>
