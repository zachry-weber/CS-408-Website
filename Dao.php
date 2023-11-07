<?php
class Dao {
  private $host = "m7az7525jg6ygibs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  private $db = "sr64mwgqty3s88b0";
  private $user = "njmze3cticven8hp";
  private $pass = "jr3iy2vu473w7pzb";
  public function getConnection () {
    return
     new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass); 
  }
  
  public function newUser($name, $email, $password) {
    $conn = $this->getConnection();
    $saveUser =
      "INSERT INTO users
      (username, email, password)
      VALUES
      (:username, :email, :password)";
    $q = $conn->prepare($saveUser);
    $q->bindParam(":username", $username);
    $q->bindParam(":email:, $email);
    $q->bindParam(":password", $password);
    $q->execute();
  }

}

?>
