<?php
require_once("../../private/initialize.php");
require_login();
$page_title = "Update Stats";
include(SHARED_PATH . '/public_header.php');

//get the persons id - id
$gameid = $_GET['gameid'] ?? false;

// find the user info based on passed id
$game = Game::find_by_id($gameid);

// set new variables to
$gameid = $game->gameid;
$result = $game->result;
$innings = $game->innings;
$date = $game->date;



if(is_post_request()) {
    // get post variables
    $gameid = $_POST['gameid'];
    $result = $_POST['result'];
    $innings = $_POST['innings'];
    $date = $_POST['date'];


    //$qualityScore = Blog::qualityScore($mozDA, $sponsors, $fqshop, $gfairy, $mstar);

    //create an array called args to be used with __construct
    $args = [];
    $args['gameid'] = $gameid;
    $args['result'] = $result;
    $args['innings'] = $innings;
    $args['date'] = $date;
  ;


    //instantiate a new object and use the merge attributes and save to update.
    $game = new Game($args);
    $game->merge_attributes($args);
    $game->update($gameid);


    header('Location: index.php');
//<p>Quality Score: <input type="number" name="qualScore" value="<?php echo $qualScore;"></p>
}
?>

<section id="boxes">
     <div class="container">
         <form action="update.php" method="post">
           <fieldset>
             <legend>Update Game Information</legend>
             <input name="gameid" type="hidden" value="<?php echo $gameid;?>">
             <p>Result: <input type="text" name="result" size="40" value="<?php echo $result; ?>"></p>
             <p>Innings: <input type="text" name="innings" size="40" value="<?php echo $innings; ?>"></p>
             <p>Date: <input type="text" name="date" size="40" value="<?php echo $date; ?>"></p>
             



             <button type="submit" value="Submit">Update</button>
             <button type="button" onclick="location='index.php'">Cancel Update</button>
           </fieldset>
         </form>


      </div>
   </section>
<?php


include(SHARED_PATH . '/public_footer.php');
?>
