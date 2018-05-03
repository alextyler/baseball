<?php

class Atbat extends DatabaseObject {

static protected $table_name = 'atbat';
static protected $db_columns = ['atbatid', 'gameid', 'endresult', 'rbi', 'playerid'];


public $atbatid;
public $gameid;
public $endresult;
public $rbi;
public $playerid;
public $singles;
public $doubles;
public $triples;
public $homers;
public $rbis;
public $strikeouts;
public $walks;
public $battedouts;
public $reachedonerrors;
public $totalatbats;

//construct method
public function __construct($args=[]) {
  $this->atbatid = $args['atbatid'] ?? NULL;
  $this->gameid = $args['gameid'] ?? '';
  $this->endresult = $args['endresult'] ?? '';
  $this->rbi = $args['rbi'] ?? '';
  $this->playerid = $args['playerid'] ?? '';
}

static public function find_player($id) {
  $sql = "SELECT * FROM player";
  $sql .= " WHERE playerid='" . $id . "'";
  return static::find_by_sql($sql);
  }


// single function
static public function find_singles($id) {
  $sql = "SELECT count(endresult) as singles FROM atbat";
  $sql .= " WHERE playerid='" . $id . "' AND endresult=1";
  return static::find_by_sql($sql);
  }

// double function
static public function find_doubles($id) {
  $sql = "SELECT count(endresult) as doubles FROM atbat";
  $sql .= " WHERE playerid='" . $id . "' AND endresult=2";
  return static::find_by_sql($sql);
  }

  // triple function
  static public function find_triples($id) {
    $sql = "SELECT count(endresult) as triples FROM atbat";
    $sql .= " WHERE playerid='" . $id . "' AND endresult=3";
    return static::find_by_sql($sql);
    }

    // Hr function
    static public function find_homers($id) {
      $sql = "SELECT count(endresult) as homers FROM atbat";
      $sql .= " WHERE playerid='" . $id . "' AND endresult=4";
      return static::find_by_sql($sql);
      }

      // rbi function
      static public function find_rbis($id) {
        $sql = "SELECT sum(rbi) as rbis FROM atbat";
        $sql .= " WHERE playerid='" . $id . "' ";
        return static::find_by_sql($sql);
        }

        // strikout function
        static public function find_strikeouts($id) {
          $sql = "SELECT count(endresult) as strikeouts FROM atbat";
          $sql .= " WHERE playerid='" . $id . "' AND endresult=5";
          return static::find_by_sql($sql);
          }

          // walk function
          static public function find_walks($id) {
            $sql = "SELECT count(endresult) as walks FROM atbat";
            $sql .= " WHERE playerid='" . $id . "' AND endresult=6";
            return static::find_by_sql($sql);
            }

            // batted out function
            static public function find_battedouts($id) {
              $sql = "SELECT count(endresult) as battedouts FROM atbat";
              $sql .= " WHERE playerid='" . $id . "' AND endresult=7";
              return static::find_by_sql($sql);
              }

              // reachedonerrors function
              static public function find_reachedonerrors($id) {
                $sql = "SELECT count(endresult) as reachedonerrors FROM atbat";
                $sql .= " WHERE playerid='" . $id . "' AND endresult=8";
                return static::find_by_sql($sql);
                }

                // total at bats function
                static public function find_totalatbats($id) {
                  $sql = "SELECT count(endresult) as totalatbats FROM atbat";
                  $sql .= " WHERE playerid='" . $id . "'";
                  return static::find_by_sql($sql);
                  }

}

?>
