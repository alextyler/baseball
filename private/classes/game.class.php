<?php

class Game extends DatabaseObject {

static protected $table_name = 'game';
static protected $db_columns = ['gameid', 'result', 'innings', 'date'];


public $gameid;
public $result;
public $innings;
public $date;



//construct method
public function __construct($args=[]) {
  $this->gameid = $args['gameid'] ?? NULL;
  $this->result = $args['result'] ?? '';
  $this->innings = $args['innings'] ?? '';
  $this->date = $args['date'] ?? '';

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
