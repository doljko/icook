<html>
<title>pagnition</title>
<body>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 mysqli_set_charset( $conn, 'utf8');

$page = (int) (!isset ($_GET["page"]) ? 1 : $_GET["page"]);
$limit = 5;
$startpoint = ($page * $limit) - $limit;

$statement = "pagination order by name asc";




 $res = "SELECT * FROM ($statement) LIMIT ($startpoint), ($limit)"; 

    //  $search = "SELECT * FROM pagination"; 
    //  $res = mysqli_query( $conn, $search) or die ("Өгөгдөл буруу байна!".mysqli_error());
  

   while ($row = mysqli_fetch_assoc($res)) 
   {
 
		 echo ( $row["text1"]);
		 echo"<br>";
		 //echo "fdsafs";
   }
 

 ?>


 </body>
 </html>