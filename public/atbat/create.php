<?php
require_once("../../private/initialize.php");
//require_login();
$page_title = "Create Atbat Page";
include(SHARED_PATH . '/public_header.php');

$playerid = $_GET['playerid'];

$atbat = Atbat::find_player($playerid);

if(is_post_request()) {
    // get post variables
    $atbatid = $_POST['atbatid'];
    $gameid = $_POST['gameid'];
    $endresult = $_POST['endresult'];
    $rbi = $_POST['rbi'];
    $playerid = $_POST['playerid'];

    //$qualityScore = Player::qualityScore($mozDA, $sponsors, $fqshop, $gfairy, $mstar);

    //create an array called args to be used with __construct
    $args = [];
    $args['atbatid'] = $atbatid;
    $args['gameid'] = $gameid;
    $args['endresult'] = $endresult;
    $args['rbi'] = $rbi;
    $args['playerid'] = $playerid;


    //instantiate a new object
    $atbat = new Atbat ($args);
    $atbat->create();

    header("Location: index.php?playerid=$playerid");
}




 ?>




 <section id="boxes"> 
     <div class="container">
         <form action="create.php" method="post">
           <fieldset>
             <legend>Add Player Game Log Stats</legend>
             <input type="hidden" name="playerid" value="<?php echo $playerid; ?>"


               <p>Game ID:
              <select name="$gameid">
                 <option value="game1">Game 1</option>
                 <option value="game2">Game 2</option>
                 <option value="game3">Game 3</option>
                 <option value="game4">Game 4</option>
                 <option value="game5">Game 5</option>
               </select>

             <br>
                <p>Hit type:
                <select name="endresult">
                   <option value="1">Single</option>
                   <option value="2">Double</option>
                   <option value="3">Triple</option>
                   <option value="4">Home Run</option>
                   <option value="5">Strike Out</option>
                   <option value="6">Walk</option>
                   <option value="7">Batted Out</option>
                   <option value="8">Reach on Error</option>
                </select>

             <br>

                 <p>RBI:
               <select name="rbi">
                   <option value="0">0</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                 </select>

<br><br>

             <button type="submit" value="Submit">Submit</button>
             <button type="button" onclick="location='index.php'">Cancel Update</button>
           </fieldset>
         </form>

     </div>
   </section>

<?php


include(SHARED_PATH . '/public_footer.php');



?>
