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
  
  public function newUser($name, $email, $password_hash){
    try{
      $conn = $this->getConnection();
      $saveQuery =
            "INSERT INTO users
            (username, email, password)
            VALUES
            (:name, :email, :password_hash)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":name", $name);
        $q->bindParam(":email", $email);
        $q->bindParam(":password_hash", $password_hash);
        $q->execute();

      } catch (PDOException $e) {
      // Handle database query execution error
        die("Database query failed: " . $e->getMessage());
      }
  }

  public function authenticate ($email, $password) {
    try{
      $conn = $this->getConnection();
      $getQuery =
            "SELECT * FROM users WHERE email=:email";
        $q = $conn->prepare($getQuery);
        $q->bindParam(":email", $email);
        $q->execute();
        $c = $q->fetch();
      if ($c) {
        if (password_verify($password, $c["password_hash"])) {
          return true;
        }
        else{
          return false;
        }
          
      }
    } 
    catch (PDOException $e) {
      // Handle database query execution error
      die("Database query failed: " . $e->getMessage());
    }
 }

}

?>
