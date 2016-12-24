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
<img  src="public/img/2.jpg"  height='300' width='1400'>
<hr>

<div>    
  
</center>
<br>
<div class='col-sm-9 '>
  <?php if (isset($error)) {
        echo $error;
      }
 $start=0;
$limit=3;
$id=0;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}
$query = $conn->query( " SELECT news_id, news_title, news_body, image FROM news LIMIT $start, $limit");
//  $query = $conn->query("SELECT post_id, post_title, post_body FROM post");
     while($row = $query->fetch_assoc()) {
      echo " 
<div class='col-sm-12 postbox-box'>
<div class='col-sm-4'>
    <img  src='".$row['image']."'class='list-image' target='_blank' alt='Image' >
      </div> 
      <div class='col-sm-7'>
   <h4>  
        <a href='repage.php?jor=".$row['news_id']."' target='_blank' class='news-title''> 
 ";
          echo  $row['news_title'];
          echo " </a> 
      </h4>
    ";
    $news_body = $row['news_body'];
    $string = strip_tags($news_body);

    if (strlen($string) > 500) {

        // truncate string
        $stringCut = substr($string, 0, 500);

        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' '))."... <a href='repage.php?jor=".$row['news_id']."'>Дэлгэрэнгүй</a>"; 
    }
        echo "<div class= news-body>"."<p>".$string."</p>"."</div>";  
     echo " 
         </p> 
          </div>       
  </div> 
 
 ";      
}
 ?>
 </div> 
<div class="col-sm-3">
 <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/"
  1data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
   data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" 
   fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=392649047557501&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2F1000jor.mn&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false">
   <span style="vertical-align: bottom;"><iframe name="fba605029ffb4"  frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.1/plugins/page.php?adapt_container_width=true&amp;app_id=392649047557501&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FiPrOY23SGAp.js%3Fversion%3D42%23cb%3Df1cbfbde8955164%26domain%3Dwww.1000jor.mn%26origin%3Dhttp%253A%252F%252Fwww.1000jor.mn%252Ff376716a6d6e96c%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2F1000jor.mn&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false" style="border: none; visibility: visible; width: 340px; height: 214px;" class=""></iframe></span></div>
  </div> 
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

 echo "<div class='col-sm-12'>";

while($query2=mysqli_fetch_array($query))
{
echo "<li>".$query2['news_body']."</li>";
}
echo "</ul>";
$rows=mysqli_num_rows(mysqli_query($conn, "select * from news"));
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
echo '</div>';
                ?>
    </div>




</div>

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

<?php 
require("footer.php");
?>