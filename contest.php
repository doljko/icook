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

<br>
    
    </div>
  </div>  
</body>
    
    </div>
</div>
<?php

$page  = 2;
$hal    = isset($_GET['hal']) ? $_GET['hal'] : 1;
$pageSql= "SELECT * FROM post  ORDER BY post_id DESC";
$pageQry= mysqli_query($conn, $pageSql) or die ("Хайлт буруу байна: ".mysqli_error());
//$jml    = mysqli_num_rows($pageQry);
//$mulai  = $baris * ($hal-1);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style type="text/css">
#content
{
  width: 900px;
  margin: 0 auto;
  font-family:Arial, Helvetica, sans-serif;
}
.page
{
float: right;
margin: 0;
padding: 0;
}
.page li
{
  list-style: none;
  display:inline-block;
}
.page li a, .current
{
display: block;
padding: 5px;
text-decoration: none;
color: #8A8A8A;
}
.current
{
  font-weight:bold;
  color: #000;
}
.button
{
padding: 5px 15px;
text-decoration: none;
background: #333;
color: #F3F3F3;
font-size: 13PX;
border-radius: 2PX;
margin: 0 4PX;
display: block;
float: left;
}
</style>
<body>
<div id="content">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 mysqli_set_charset( $conn, 'utf8');
 ?>
 <?php
$start=0;
$limit=3;
$id=0;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}

$query=mysqli_query($conn, "select * from post LIMIT $start, $limit");
echo "<ul>";
while($query2=mysqli_fetch_array($query))
{
echo "<li>".$query2['post_body']."</li>";
}
echo "</ul>";
$rows=mysqli_num_rows(mysqli_query($conn, "select * from post"));
$total=ceil($rows/$limit);

if($id>1)
{
echo "<a href='?id=".($id-1)."' class='button'>Өмнөх</a>";
}
if($id!=$total)
{
echo "<a href='?id=".($id+1)."' class='button'>Дараах</a>";
}

echo "<ul class='page'>";
for($i=1;$i<=$total;$i++)
{
if($i==$id) { echo "<li class='current'>".$i."</li>"; }

else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
}
echo "</ul>";
?>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cook";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 mysqli_set_charset( $conn, 'utf8');
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
        <div>    
 
 

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
<br><br>
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
          <form action="" method="POST">
        <input type="text" name="term" />
        <input type="submit" value="Хайлт" />
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
</body>
</html>
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