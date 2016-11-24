<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>

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
                    <div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2),
    zoom: 10
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
<br>
<address align= "center">
Менежер<a href="mailto:webmaster@example.com">Jon Doe</a>.<br>
Бидэнтэй нэгдээрэй:<br>
Example.com<br>
Баянгол дүүрэг<br>
Улаанбаатар
</address>

<?php 
require("footer.php");
?>
