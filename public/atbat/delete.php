<?php
// DO NOT CHANGE THIS PAGE!!!

require_once("../../private/initialize.php");
//require_login();
$page_title = "Delete Page";
include(SHARED_PATH . '/public_header.php');

// if form has been submitted get variables and calculate numbers then
// set them to the array.
$playerid = $_GET['playerid'];

// find the user info based on passed id
$player = Player::find_by_id($playerid);

// set new variables to
$playerFName = $player->playerFName;

if(is_post_request()) {
    //get id from form
    $playerid = $_POST['playerid'];

    //send array back to construct
    $args = [];
    $args['playerid'] = $playerid;

    //instantiate and call delete function.
    $player = new Player($args);
    $result = $player->delete($playerid);
    echo $result;
    //after saving redirect back to home page.
    header('Location: index.php');

}

?>

 <section id="boxes">
      <div class="container">
          <form action="delete.php" method="post">
            <fieldset>
              <legend>Are you sure you want to delete <?php echo $playerFName; ?>'s stats?</legend>
              <input name="playerid" type="hidden" value="<?php echo $playerid;?>">
              <button type="submit" value="Submit">Yes, Please Delete</button>
              <button type="button" onclick="location='index.php'">No, Don't Delete</button>
            </fieldset>
          </form>

         <br>
      </div>
   </section>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
