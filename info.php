<?php 
    require_once("header.php");
    require_once("config/database.php");

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


<div id="ad">
   <iframe
      src="ad.html"
      border="0"
      scrolling="no"
      allowtransparency="true"
      width="100%"
      height="100%"
      style="border:0;">
   </iframe>
</div>

<div class="container text-center">    
        <h3>Мэдээ мэдээлэл</h3>
        <br>

 
  <div class="row">

    <div class="col-sm-12">
    
                                <div class="col-sm-5">
                                  <img  src="dinner/3.jpg"  class="img-responsive" alt="Image">
                                  <p>Өглөөний цай</p>
                                </div>

                      <div class="col-sm-5"> 
                        <img s src="dinner/3.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <p>Өдрийн хоол</p>    
                      </div>
   
   <div class="col-sm-5"> 
      <img  src="dinner/3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Салат</p>    
    </div>
                        <div class="col-sm-5"> 
                          <img  src="dinner/3.jpg"  class="img-responsive" style="width:100%" alt="Image">
                          <p>Зууш</p>    
                          
                        </div>

      
<p>Хайлт:</p>

                  <form>
                    <input type="text" name="search" placeholder="..">
                  </form>
    </div>

    <style>
                            .pagination2>li>a{
                              
                              position: relative;
                              float: left;
                              padding: 6px 12px;
                              margin-left: -1px;
                              line-height: 1.42857143;
                              color: #1a1a1b;
                              text-decoration: none;
                              background-color: #fff;
                              border: 1px solid #ddd;

                            }

                            input[type=text] {
                            width: 130px;
                            box-sizing: border-box;
                            border: 2px solid #ccc;
                            border-radius: 4px;
                            font-size: 16px;
                            background-color: white;
                            background-image: url('searchicon.png');
                            background-position: 10px 10px;
                            background-repeat: no-repeat;
                            padding: 12px 20px 12px 40px;
                            -webkit-transition: width 0.4s ease-in-out;
                            transition: width 0.4s ease-in-out;
                        }

    </style>
  <ul class="list-style-type:none pagination2" align="center" >
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
</div>

<p><span class="error">Дараахыг бөглөж коммент үлдээнэ үү.</span></p>

      <?php if (isset($error)) {
        echo $error;
      }
      ?>

      <h4> Сэтгэгдэл</h4>
      <form action="info.php" method="post" autocomplete="off">
        <input type="text" name="username" placeholder="Нэр" /> <br />  <br />
        <input type="text" name="email" placeholder="Мэйл"> </input> <br />  <br />
        <input type="text" name="comment" placeholder="сэтгэгдэл" /> <br />
        <input type="submit" value="Нэмэх" />
      </form>
<br>
<?php 
require("footer.php");
?>