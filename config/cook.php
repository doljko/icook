<?php
 class Cook {
    public function fetch_all(){
       global $pdo;
        $query = $pdo->prepare(" SELECT * FROM blog ");
        $query->execute();
        return $query->fetchAll();
      }
    public function fetch_single($blog_id){
      global $pdo;
      $query = $pdo->prepare(" SELECT * FROM blog WHERE id=? ");
      $query->bindValue(1, $blog_id );
      $query->execute();
      return $query->fetch();
    }
    public function search($src){
      global $pdo;
      $searchq = preg_replace("#[^0-9a-z]#i","",  $src);
      $query = $pdo->prepare("SELECT * FROM blog WHERE title LIKE '%$searchq%'");
      $query->execute();
      $count = $query->rowCount();
      if($count == 0){
        echo 'nothing found!';
      }else {
      }
     return $query->fetchAll();
    }
 } 
?>