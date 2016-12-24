<?php
require_once("header.php");
require_once("config/config.php");
?>
<img  src="public/img/5.jpg"  height='300' width='1400'>
<hr>
<div class="col-sm-12">   

<br>
 <?php
$start = 0;
$limit = 3;
$id    = 0;
if (isset($_GET['id'])) {
    $id    = $_GET['id'];
    $start = ($id - 1) * $limit;
}
$query = $conn->query(" SELECT contest_id, contest_name, contest_body, contest_image FROM contest LIMIT $start, $limit");
//  $query = $conn->query("SELECT post_id, post_title, post_body FROM post");
while ($row = $query->fetch_assoc()); {
    echo " 
<div class='col-sm-4 postbox'>
    <img  src='" . $row['image'] . "'class='list-image' target='_blank' alt='Image' >
   <h4>  
        <a href='redirect.php?jor=" . $row['contest_id'] . "' target='_blank' '> 
 ";
    echo $row['contest_name'];
    echo " </a> 
      </h4>
    ";
    echo "<p>" . $row['contest_body'] . "</p>";
    echo " 
         </p>       
  </div>    

 ";
}

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, 'utf8');

echo "<div class='row'>";
while ($query2 = mysqli_fetch_array($query)) {
    echo "<li>" . $query2['contest_body'] . "</li>";
}
echo "</ul>";
$rows  = mysqli_num_rows(mysqli_query($conn, "select * from contest"));
$total = ceil($rows / $limit);

if ($id > 1) {
    echo "<a href='?id=" . ($id - 1) . "' class='button'>Өмнөх</a>";
}
if ($id != $total) {
    echo "<a href='?id=" . ($id + 1) . "' class='button'>Дараах</a>";
}

echo "<ul class='page'>";
for ($i = 1; $i <= $total; $i++) {
    if ($i == $id) {
        echo "<li class='current'>" . $i . "</li>";
    }
    
    else {
        echo "<li><a href='?id=" . $i . "'>" . $i . "</a></li>";
    }
}
echo "</ul>";

echo '</div>';
//
?>

 <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/"
  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
   data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" 
   fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=392649047557501&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2F1000jor.mn&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false">
   <span style="vertical-align: bottom; width: 340px; height: 214px;"><iframe name="fba605029ffb4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.1/plugins/page.php?adapt_container_width=true&amp;app_id=392649047557501&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FiPrOY23SGAp.js%3Fversion%3D42%23cb%3Df1cbfbde8955164%26domain%3Dwww.1000jor.mn%26origin%3Dhttp%253A%252F%252Fwww.1000jor.mn%252Ff376716a6d6e96c%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2F1000jor.mn&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false" style="border: none; visibility: visible; width: 340px; height: 214px;" class=""></iframe></span></div>

<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, 'utf8');

echo "<div class='col-sm-12'>";

while ($query2 = mysqli_fetch_array($query)) {
    echo "<li>" . $query2['news_body'] . "</li>";
}
echo "</ul>";
$rows  = mysqli_num_rows(mysqli_query($conn, "select * from news"));
$total = ceil($rows / $limit);

if ($id > 1) {
    echo "<a href='?id=" . ($id - 1) . "' class='button'>Өмнөх</a>";
}
if ($id != $total) {
    echo "<a href='?id=" . ($id + 1) . "' class='button'>Дараах</a>";
}

echo "<ul class='page'>";
for ($i = 1; $i <= $total; $i++) {
    if ($i == $id) {
        echo "<li class='current'>" . $i . "</li>";
    }
    
    else {
        echo "<li><a href='?id=" . $i . "'>" . $i . "</a></li>";
    }
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

   <!-- comment xeseg -->

<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cook";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, 'utf8');
?>

    <div id="contact_form" class="rapid_contact"> 

        <!-- nerni section end bolv -->
        
        <?php
if (!empty($_POST['submit'])) {
    $name    = trim($_POST['rp_name']);
    $email   = trim($_POST['rp_email']);
    $content = trim($_POST['rp_message']);
    
    $insert = "INSERT INTO `comment` (`name`, `email`, `content`) VALUES ('" . $name . "', '" . $email . "', '" . $content . "');";
    if ($conn->query($insert)) {
        echo '<span style="padding: 20px; color:green;">Таны хүсэлтийг хүлээн авлаа.</span>';
    } else {
        echo '<span style="padding: 20px; color:red;">Таны оролдлого амжилтгүй боллоо. Дахин оролдлого хийнэ үү!</span>';
    }
}
?>
        <div>    
<?php
if (!empty($_REQUEST['term'])) {
    
    $term = mysqli_real_escape_string($conn, $_REQUEST['term']);
    
    $search = "SELECT * FROM post WHERE post_body LIKE '%" . $term . "%'";
    
    $barang2Qry = mysqli_query($conn, $search) or die("Warning!" . mysql_error());
    $nemex = 0;
    
    while ($row = mysqli_fetch_array($barang2Qry)) {
        
        echo '<span style="padding: 20px; color:dark;"> Хайлтын илэрц: </span>' . $row['post_body'];
        
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
    
    while ($row = $result->fetch_assoc()) {
        echo '<li>';
        echo $row["content"];
        echo '</li>';
    }
} else {
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
 
</center>
<br>
  <?php
if (isset($error)) {
    echo $error;
}
?>

<?php
require("footer.php");
?>