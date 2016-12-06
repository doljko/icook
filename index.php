<?php 
session_start();
include_once 'config/config.php';
require("header.php");

?>
  <link rel="stylesheet" href="public/css/style.css">
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
  
  $query3 = $conn->query("SELECT * FROM category");
 
    while($row3 = $query3->fetch_assoc()) {
      $dada = $row3['category_id'];
       $query2 = $conn->query("SELECT COUNT(category_id) as count  FROM post where category_id=".$dada."");
       $row2 = $query2->fetch_assoc();
        echo " <a class='dada' href='angilal.php/dada=$dada'><p> "; 
                                              echo  $row3['caterory_name']; 
        echo " <span class='badge'> "; 
                                             echo  $row2['count']; 
        echo " </span></p></a>";
      }
        ?>


</div>
          
          <div class='col-sm-9'> 
<?php 
  $query = $conn->query("SELECT post_id, post_title, post_body FROM post");
    while($row = $query->fetch_assoc()) {
        echo " 
  <div class='col-sm-3 postbox'>
    <img  src='public/img/3.jpg'  height='250' width='250'class='img-responsive' target='_blank' alt='Image' >
      <h4>  
          <a href='cook/index.php' target='_blank' title='Өглөөний цай''> 
";
          echo  $row['post_title'];
           echo " </a>
      </h4>
        <p>       
      ";
        echo 
        $row['post_body'];  


        
         echo " 
        </p>       
 </div>    

  ";      
    }
?>
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


</div>
<center>
<?php 
require("footer.php");
?>
</center>