<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Nate's Blog Manager | <?php echo $page_title; //gets the $page_title from the page and puts it here ?></title>
    <link rel="stylesheet" href="http://sofab1.com/lm_2018/public/stylesheets/styles.css?modified=20012009">
    <style>
    .owe {color: red; }
    .refund { color: green; }
    </style>
  </head>

  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Bobcats</span> Stats</h1>
        </div>
        <nav>
          <ul>
            <li <?php if ($current == 'home') {echo 'class="current"';} ?>><a href="<?php echo WWW_ROOT?>/home.php">Home</a></li>
            <li <?php if ($current == 'blog') {echo 'class="current"';} ?>><a href="<?php echo WWW_ROOT?>/player/index.php">Players</a></li>
            <li <?php if ($current == 'logout') {echo 'class="current"';} ?>><a href="<?php echo WWW_ROOT?>/logout.php">Logout</a></li>
          </ul>
          </ul>
          </ul>
          </ul>
          </ul>
        </nav>
      </div>
    </header>
