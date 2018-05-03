<?php

class Contract extends DatabaseObject {

static protected $table_name = 'contract';
static protected $db_columns = ['contractid', 'pmtDate', 'contractLength', 'pmtAmount', 'blogid'];


public $contractid;
public $pmtDate;
public $contractLength;
public $pmtAmount;
public $blogid;



//construct method
public function __construct($args=[]) {
  $this->contractid = $args['contractid'] ?? NULL;
  $this->pmtDate = $args['pmtDate'] ?? '';
  $this->contractLength = $args['contractLength'] ?? '';
  $this->pmtAmount = $args['pmtAmount'] ?? '';
  $this->blogid = $args['blogid'] ?? '';

}

// add your function here
static public function find_contract($id) {
  $sql = "SELECT * FROM contract";
  $sql .= " WHERE blogid='" . $id . "'";
  return static::find_by_sql($sql);
  }

}

?>
