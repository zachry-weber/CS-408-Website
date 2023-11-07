<?php
class Dao {
  private $host = "m7az7525jg6ygibs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  private $db = "sr64mwgqty3s88b0";
  private $user = "njmze3cticven8hp";
  private $pass = "jr3iy2vu473w7pzb";
  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}"
  }
}
?>
