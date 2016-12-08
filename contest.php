<?php 
    require_once("header.php");
    require_once("config/config.php");

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
 
   <form action="" method="POST">
        <input type="text" name="term" />
        <input type="submit" value="Хайлт" />
    </form>

<?php
    if (!empty($_REQUEST['term'])) {

      $term = mysqli_real_escape_string( $conn, $_REQUEST['term']); 

      $search = "SELECT * FROM post WHERE post_body LIKE '%".$term."%'"; 
      
      $barang2Qry = mysqli_query( $conn, $search) or die ("Warning!".mysql_error());
      $nemex = 0;

      while ($row = mysqli_fetch_array($barang2Qry)){ 

          echo '<span style="padding: 20px; color:dark;"> Хайлтын илэрц: </span>' .$row['post_body'];

      }  

    }
?>


</div> 




<br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cook";

$conn = new mysqli($servername, $username, $password, $dbname);
?>


    <div id="contact_form" class="rapid_contact"> 

        <!-- nerni section end bolv -->
        
        <?php
        if(!empty($_POST['submit']))
        {
          $name = trim($_POST ['rp_name']);
          $email = trim($_POST['rp_email']);
          $content = trim($_POST['rp_message']);

          $insert = "INSERT INTO `comment` (`name`, `email`, `content`) VALUES ('".$name."', '".$email."', '".$content."');";
          if($conn->query($insert))
          {
            echo '<span style="padding: 20px; color:green;">Таны хүсэлтийг хүлээн авлаа.</span>';       
          }
          else
          {
            echo '<span style="padding: 20px; color:red;">Таны оролдлого амжилтгүй боллоо. Дахин оролдлого хийнэ үү!</span>';
          }
          

        }
          
      
        ?>

        <form action="" method="POST" class="">
          <div class="control-group">
            <label class="control-label" > <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Таны нэр:</b></label>

            <div class="controls">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input class=" inputbox input-xlarge" type="text" placeholder="Таны нэр:" name="rp_name" id="rp_name" value="" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="rp_email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;И-Мэйл:</label>
            <div class="controls">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class=" inputbox input-xlarge"  type="text" placeholder="И-Мэйл:" name="rp_email" id="rp_email" value="" required="required" />
            </div>
          </div>  


          <div class="control-group">
            <label class="control-label" for="rp_message">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Message:</label>
          <div class="controls">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea  placeholder="Message:" name="rp_message" id="rp_message" required="required" rows='5' cols='30'></textarea>
            </div>
          </div>

          <div class="control-group">
            <div class="controls">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <input class=" btn " id="submit-form" type="submit" name="submit" value="Илгээх" /> <br><br>
            </div>
          </div>
          <!-- end control group -->
        </form> 

        <div class="contact-list">
          <ul>
            <?php
              // Check connection
              if ($conn->connect_error) {
                   die(" Холболт буруу байна. " . $conn->connect_error);
              } 

              $sql = "SELECT id, name, email, content FROM comment";
                    
              $result = $conn->query($sql);
                  
              if ($result->num_rows > 0) {                   
                   // output data of each row

                while($row = $result->fetch_assoc()) {
                      echo '<li>';
                      echo $row["content"];
                      echo '</li>';
                  }
              } 
              else
              {
                echo '<li>';
                  echo "0 results";
                  echo '</li>';
              }         
            ?> 
          </ul>
        </div>      
    </div>
  </div>  
</body>
    
    </div>
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