<?php 
require("header.php");
?>
<html>
		<body>
	


<?php
		include_once 'config/config.php';
		if(isset($_GET['jor']))
			{
			$id=$_GET['jor'];

			 $query = $conn->query( " SELECT * FROM post WHERE post_id=".$id."");
				$row = $query->fetch_assoc();
				//echo $row['post_id']; echo "<br>";
				//echo " <span class='badge'> "; 
		 echo " <span class='main'> "; 
				 echo  $row['post_title'];
			        echo  $row['post_body'];
			        echo "<img  src='".$row['image']."'  height='800' width='500'class='img-responsive' target='_blank' alt='Image' >";
			    //   echo " </span>";    
     echo " <span> "; 
			
			  
			  }
?>

		<body>    
</html>
 <?php 
require("footer.php");
?>                                            
               