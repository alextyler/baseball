<?php
require_once("../private/initialize.php");
require_login();
$page_title = "Welcome Page";
$current = "home";
include(SHARED_PATH . '/public_header.php');
 ?>

 <section id="boxes">
   <div class="container">


     <br>
     <h2>Welcome to the STATS PAGE!!!</h2>
<?php
$image_url='http://www.gcbobcats.com/sports/bsb/2017-18/4.10.18_baseball_poll_graphic.jpg?max_width=1650';
?>
<img src=<?php echo $image_url;?>



   </div>
 </section>
<?php



include(SHARED_PATH . '/public_footer.php');
 ?>
