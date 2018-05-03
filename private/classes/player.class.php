<?php

class Player extends DatabaseObject {

static protected $table_name = 'player';
static protected $db_columns = ['playerid', 'jerseyNumber', 'playerFName', 'playerLName'];


public $playerid;
public $jerseyNumber;
public $playerFName;
public $playerLName;

//construct method
public function __construct($args=[]) {
  $this->playerid = $args['playerid'] ?? NULL;
  $this->jerseyNumber = $args['jerseyNumber'] ?? '';
  $this->playerFName = $args['playerFName'] ?? '';
  $this->playerLName = $args['playerLName'] ?? '';

}

// add your function here
//static public function qualScore($mozDA, $sponsors, $fqshop, $gfairy, $mstar) {
//  if($fqshop == 1){$fq = 10;}else{$fq = 0;}
//  if($gfairy == 1){$gf = 10;}else{$gf = 0;}
//  if($mstar == 1){$ms = 10;}else{$ms = 0;}

//  $qualityScore = $fq + $gf + $ms + $mozDA + $sponsors;

//  return $qualityScore;
//}

}

?>
