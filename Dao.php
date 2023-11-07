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
  
  public function newUser($userName, $email, $password){
    try{
      $conn = $this->getConnection();
      $saveQuery =
            "INSERT INTO Users
            (Email, Username, PasswordHash)
            VALUES
            (:email, :userName, :password)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":email", $email);
        $q->bindParam(":userName", $userName);
        $q->bindParam(":password", $password);
        $q->execute();

      } catch (PDOException $e) {
      // Handle database query execution error
        die("Database query failed: " . $e->getMessage());
      }
  }

}

?>
