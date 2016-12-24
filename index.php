<?php 
require("templates/header.php");
?>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  
<div class="carousel-inner">
      <div class="item active">
        <img src="public/img/3.jpg" width="100" height="100" >
      </div>

      <div class="item">
        <img src="public/img/4.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="public/img/3.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="public/img/2.jpg" alt="Flower" width="460" height="345">
      </div>
</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Өмнөх</span>
    </a>

    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Дараах</span>
    </a>

  </div>

					<h3><center>Мэдээ, мэдээлэл</center></h3> <hr>

<div class='col-sm-3 bordercat'><h3>Ангилал</h3>
      <div class="titlelines"></div>

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

            $query3 = $conn->query("SELECT * FROM category");
           
              while($row3 = $query3->fetch_assoc()) {
                $dada = $row3['category_id'];
                 $query2 = $conn->query("SELECT COUNT(category_id) as count  FROM post where category_id=".$dada."");
                 $row2 = $query2->fetch_assoc();
                  echo " <a  href='category.php?category1=".$row3['category_id']."'><p> "; 
                                                        echo  $row3['caterory_name']; 
                  echo " <span class='badge'> "; 
                                                       echo  $row2['count']; 
                  echo " </span></p></a>";
                }

          ?>
</div>

<style class="img">
img:hover {
    opacity: 0.5;
    filter: alpha(opacity=30); /* For IE8 and earlier */
    webkit-transform:scale(1.2);
    transform:scale(1.2);
    -webkit-transition: all 0.7s ease;
}
</style>

<div class='col-sm-9'> 
<?php 
$start=0;
$limit=9;
$id=0;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}
$query = $conn->query( " SELECT post_id, post_title, post_body, image FROM post LIMIT $start, $limit");
//  $query = $conn->query("SELECT post_id, post_title, post_body FROM post");
     while($row = $query->fetch_assoc()) {
      echo " 
<div class='col-sm-4 postbox'>
    <img  src='".$row['image']."'class='list-image' target='_blank' alt='Image' >
   <h4>  
        <a href='redirect.php?jor=".$row['post_id']."' target='_blank' title='Өглөөний цай''> 
 ";
          echo  $row['post_title'];
          echo " </a> 
      </h4>
    ";
        echo "<p>".$row['post_body']."</p>";  
     echo " 
         </p>       
  </div>    

 ";      
    }

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
 


// $query=mysqli_query($conn, " SELECT post_id, post_title, post_body FROM post LIMIT $start, $limit");
// while($row = $query->fetch_assoc()) {
     //<div class='col-sm-3 postbox'>
                //     <img  src='public/img/3.jpg'  height='250' width='250'class='img-responsive' target='_blank' alt='Image' >
                //       <h4>  
                //           <a href='cook/index.php' target='_blank' title='Өглөөний цай''> 
                // ";
                //           echo  $row['post_title'];
                //            echo " </a>
                //       </h4>
                //         <p>       
                //       ";
                //         echo 
                //         $row['post_body'];  
                //          echo " 
                //         </p>       
                //  </div>   

// echo "<ul>";.echo "<div class='col-sm-3 postbox'>
//                     <img  src='public/img/2.jpg'  height='250' width='250'class='img-responsive' target='_blank' alt='Image' >
//                       <h4>  
//                           <a href='cook/index.php' target='_blank' title='Өглөөний цай''> ";
//  echo  $row['post_title'];
//                            echo " </a>
//                     </h4>
//                             ";
//                    echo 
//                         $row['post_body'];  
                      
//                   echo $


// echo " </ul>"; 


//}
//
 echo "<div class='row'>";
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

echo '</div>';
//
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

<div id="content">


</div>
<center>
<?php 
require("templates/footer.php");
?>
</center>