<?php 
require("header.php");
?>

<html>
<body>
	

	<?php
	//ogogliin san
include_once 'config/config.php';


// delgerengui xuudas ruu userch bna idr ni damjad title, body medeelliig haruulj bna.

if(isset($_GET['category1']))
{
$id=$_GET['category1'];


 $query = $conn->query( " SELECT * FROM category WHERE category_id=".$id."");

	$row2 = $query->fetch_assoc();
	//echo $row['post_id']; echo "<br>";
	 echo  $row2['category_id'];
        // echo  $row['category_body'];
	 echo "<br>";
	 echo "<br>";
	  echo $row2['category_body'];
     echo  " <img  src='".$row2['image']."'  height='250' width='250'class='img-responsive' target='_blank' alt='Image' >";

}
?>

<body>    
</html>
 <?php 
require("footer.php");
?> 