<?php
require("header.php");
?>
<?php
include_once 'config/config.php';
if (isset($_GET['jor'])) {
    $id = $_GET['jor'];
    
    $query = $conn->query(" SELECT * FROM news WHERE news_id=" . $id . "");
    $row   = $query->fetch_assoc();
    //echo $row['post_id']; echo "<br>";
    //echo " <span class='badge'> "; 
    echo " <div class='main' > ";
    echo "<div class='detail-title'>" . $row['news_title'] . "</div>";
    
    echo "<div class='detail-body'><img  src='" . $row['image'] . "' 
			 class='detail-image' class='img-responsive' target='_blank' alt='Image' >
			 " . $row['news_body'] . "</div>";
    //   echo " </span>";   
    echo " </div> ";
}
?>

 <?php
require("footer.php");
?>                                            
               