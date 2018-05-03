<?php
// DO NOT CHANGE THIS PAGE!!!

require_once("../../private/initialize.php");
//require_login();
$page_title = "Delete Page";
include(SHARED_PATH . '/public_header.php');

// if form has been submitted get variables and calculate numbers then
// set them to the array.
$gameid = $_GET['gameid'];

// find the user info based on passed id
$game = Game::find_by_id($gameid);

// set new variables to
$gameid = $game->gameid;

if(is_post_request()) {
    //get id from form
    $gameid = $_POST['gameid'];

    //send array back to construct
    $args = [];
    $args['gameid'] = $gameid;

    //instantiate and call delete function.
    $game = new Game($args);
    $result = $game->delete($gameid);
    echo $result;
    //after saving redirect back to home page.
    header('Location: index.php');

}

?>

 <section id="boxes">
      <div class="container">
          <form action="delete.php" method="post">
            <fieldset>
              <legend>Are you sure you want to delete <?php echo $gameid; ?>'s results?</legend>
              <input name="gameid" type="hidden" value="<?php echo $gameid;?>">
              <button type="submit" value="Submit">Yes, Please Delete</button>
              <button type="button" onclick="location='index.php'">No, Don't Delete</button>
            </fieldset>
          </form>

         <br>
      </div>
   </section>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
