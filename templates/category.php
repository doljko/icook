<?php
require("header.php");
?>
<html>
<body>
	<?php
//ogogliin san
// delgerengui xuudas ruu userch bna idr ni damjad title, body medeelliig haruulj bna.

if (isset($_GET['category1'])) {
    $id = $_GET['category1'];
    
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
    $query = $conn->query(" SELECT * FROM post WHERE category_id=" . $id . "");
    
    
    while ($row2 = $query->fetch_assoc()) {
        // echo "<br>"; 
        //    echo  " <div class='details'> <img  src='".$row2['image']."'  height='300' width='500'class='img-responsive' target='_blank' alt='Image' >  </div>";
        
        //     echo "<div class='detail-body'>".$row2['post_body']."</div>";
   
        echo " <div class='main' > ";
        echo "<div class='detail-title'>" . $row2['post_title'] . "</div>";
        
        echo "<div class='detail-body'><img  src='" . $row2['image'] . "' 
			 		class='detail-image' class='img-responsive' target='_blank' alt='Image' >
			 			" . $row2['post_body'] . "</div>";
        //   echo " </span>";   
        echo " </div> ";
   
    }
}
?>

<body>    
</html>
 <?php
require("footer.php");
?> 