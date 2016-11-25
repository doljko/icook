<?php 
    require_once("header.php");
    require_once("config/database.php");

    if(isset($_POST['username'], $_POST['email'], $_POST['comment'] )){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
     if(empty($username) or empty ($email)) {
      $error = 'All fields are required';
    } else {
      global $pdo;
      $query = $pdo->prepare('INSERT INTO comment (username, email, comment) VALUES (?,?,?)');
      $query->bindValue(1, $username, PDO::PARAM_STR);
      $query->bindValue(2, $email, PDO::PARAM_STR);
      $query->bindValue(3, $comment, PDO::PARAM_STR);
      $query->execute();
    }
  }
?>
<img  src="public/img/5.jpg" >
<hr>
<div class="col-sm-12">   
  <div class="col-sm-9">
    <img  src="public/img/3.jpg"  height="150" width="200"class="img-responsive" target="_blank" alt="Image" >
      <h4>  
          <a href="cook/index.php" target="_blank" title="Өглөөний цай">Өглөөний цай </a>
      </h4>
        <p>       Айл бүрт шарах шүүгээ байх албагүй. Харин айл бүрт будаа агшаагч байгаа гэж бодож байна. Будаа агшаагчинд ганцхан будаа агшаахаас гадна маш олон 
            төрлийн амтат хоол, зоог хийж болдог. Будаа агшаагчинд хоол хийснээр шарж, хуураагүй,
            жигнэж болгосон хоол болох болно. Энэ нь ходоод дотор муутай хүнд нэн ач тустай шүү.
        </p>       
 </div>    
 <div class="col-sm-9">
    <img  src="public/img/3.jpg"  height="150" width="200"class="img-responsive" target="_blank" alt="Image" >
      <h4>  
          <a href="cook/index.php" target="_blank" title="Өглөөний цай">Өглөөний цай </a>
      </h4>
        <p>       Айл бүрт шарах шүүгээ байх албагүй. Харин айл бүрт будаа агшаагч байгаа гэж бодож байна. Будаа агшаагчинд ганцхан будаа агшаахаас гадна маш олон 
            төрлийн амтат хоол, зоог хийж болдог. Будаа агшаагчинд хоол хийснээр шарж, хуураагүй,
            жигнэж болгосон хоол болох болно. Энэ нь ходоод дотор муутай хүнд нэн ач тустай шүү.
        </p>
        
</div> 
<div class="col-sm-9">
    <img  src="public/img/1.jpg"  height="150" width="200"class="img-responsive" target="_blank" alt="Image" >
      <h4>  
          <a href="cook/index.php" target="_blank" title="Өглөөний цай">Өглөөний цай </a>
      </h4>
        <p>       Айл бүрт шарах шүүгээ байх албагүй. Харин айл бүрт будаа агшаагч байгаа гэж бодож байна. Будаа агшаагчинд ганцхан будаа агшаахаас гадна маш олон 
            төрлийн амтат хоол, зоог хийж болдог. Будаа агшаагчинд хоол хийснээр шарж, хуураагүй,
            жигнэж болгосон хоол болох болно. Энэ нь ходоод дотор муутай хүнд нэн ач тустай шүү.
        </p>        
</div>     
<div>    
  <p>Хайлт:</p>
    <form>
      <input type="text" name="search" placeholder="..">
    </form>
</div>
<br>
<form action="">
  <fieldset>
    <legend>АСУУЛТ, ХАРИУЛТ:</legend>
    Нэр:<br>
    <input type="text" name="firstname" >
    <br><br>
    Санал:<br>
    <input type="text" name="lastname" >
    <br><br>
    <input type="submit" value="Илгээх">
     <br><br>
     <h3>Хүмүүсийн илгээсэн сэтгэгдэл гарч ирнэ.</h3>
  </fieldset>
</form>
</div>
<ul class="pagination2" >
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a class="active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">»</a></li>
    </ul>
<center>
  <br>
  <p><span class="error"><b>ЭНЭ тагыг авахаар хөлний саарал дээш яваад байгаа юмаа ххэ.</b></span></p>
      
</center>
<br>
  <?php if (isset($error)) {
        echo $error;
      }
      ?>

<?php 
require("footer.php");
?>