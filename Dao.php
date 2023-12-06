<?php
class Dao {
  private $host = "m7az7525jg6ygibs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  private $db = "sr64mwgqty3s88b0";
  private $user = "njmze3cticven8hp";
  private $pass = "jr3iy2vu473w7pzb";

 // $mysqli = new mysqli($host, $user, $pass, $db);
 // if($mysqli->connect_errno) {
 //     die("Connection failed: " . $mysqli->connect_error);
 // }

  //return $mysqli;  

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

  public function getUser ($user_id) {
    try{
      $conn = $this->getConnection();
      $getQuery =
            sprintf("SELECT * FROM users WHERE user_id=:user_id");
        $q = $conn->prepare($getQuery);
        $q->bindParam(":user_id", $user_id);
        $q->execute();
        $c = $q->fetch();
      if ($c) {
        return $c;
      }
      else {
        return false;
      }
    } 
    catch (PDOException $e) {
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
        if (password_verify($password, $c["password"])) {
          return $c;
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

  public function addComment($userId, $content) {
      $conn = $this->getConnection();
      $saveQuery = "INSERT INTO comments (user_id, Content) VALUES (:userId, :content)";
      $q = $conn->prepare($saveQuery);
      $q->bindParam(":userId", $userId);
      $q->bindParam(":content", $content);
      $q->execute();
  }
  
  public function getMostRecentComment() {
    $conn = $this->getConnection();
    $query = "SELECT * FROM comments ORDER BY CreatedAt DESC LIMIT 1";
    $result = $conn->query($query);

    if ($result && $result->rowCount() > 0) {
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    return null;
  }

  public function getCommentById($postid){
    $conn = $this->getConnection();
        $saveQuery =
            sprintf("SELECT * FROM comments
            WHERE com_id = :postid");
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":postid", $postid);
        $q->execute();
        $post = $q->fetch(PDO::FETCH_ASSOC);

        if($post){
          return $post;
        }
        else {
          return FALSE;
        }
      return FALSE;
  }

}

?>
