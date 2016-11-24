<?php 
require("header.php");
require("config/database.php");
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                      </button>
              <a class="navbar-brand" href="#" ><img src="dinner/logo.jpg"  style="width:45px;height:33px;"></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Нүүр</a></li>
                  <li><a href="#">Бидний тухай</a></li>
                  <li><a href="#">Жор оруулах</a></li>
                  <li><a href="#">Мэдээ мэдээлэл</a></li>
                  <li><a href="#">Холбоо барих</a></li>
                  <li><a href="#">Шинэ хэрэглэгч нэмэх</a></li>
              </ul>
    </div>

    </div>
</nav>
       

<p><span class="error">Дараахыг бөглөж коммент үлдээнэ үү.</span></p>
<form method="post" action=""> 

         Нэр: <input type="text" name="name" value="">
         <span class="error">* <?php echo $nameErr;?></span>
         <br><br>

                  И-мэйл: <input type="text" name="email" value="">
                  <span class="error">* <?php echo $emailErr;?></span>
                  <br><br>
                               
        Коммент: <textarea name="comment" rows="5" cols="40"></textarea>
       <br><br>


                  <input type="submit" name="submit" value="Зөвшөөрөх">
</form>

