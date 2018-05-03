<?php
require_once("../../private/initialize.php");
//require_login();
$page_title = "Create Game Page";
include(SHARED_PATH . '/public_header.php');


if(is_post_request()) {
    // get post variables
    $gameid = $_POST['gameid'];
    $result = $_POST['result'];
    $innings = $_POST['innings'];
    $date = $_POST['date'];


    //$qualityScore = Player::qualityScore($mozDA, $sponsors, $fqshop, $gfairy, $mstar);

    //create an array called args to be used with __construct
    $args = [];
    $args['gameid'] = $gameid;
    $args['result'] = $result;
    $args['innings'] = $innings;
    $args['date'] = $date;



    //instantiate a new object
    $game = new Game ($args);
    $game->create();

    header('Location: index.php');
}

?>

<section id="boxes">
     <div class="container">
         <form action="create.php" method="post">
           <fieldset>
             <legend>Add a game</legend>

             <p>Game ID: <input type="text" name="gameid" value="<?php echo $gameid; ?>"></p>
             <p>Result: <input type="text" name="result" value="<?php echo $result; ?>"></p>
             <p>Innings: <input type="text" name="innings" value="<?php echo $innings; ?>"></p>
             <p>Date: <input type="text" name="date" value="<?php echo $date; ?>"></p>



             <button type="submit" value="Submit">Submit</button>
             <button type="button" onclick="location='index.php'">Cancel Update</button>
           </fieldset>
         </form>

     </div>
  </section>
<?php


include(SHARED_PATH . '/public_footer.php');



?>
