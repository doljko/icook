<?php 
require("header.php");
?>  
<div class=" text-center">    
    <img  src="public/img/7.jpg" alt="">
</div>
<br>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10696.609118423159!2d106.8339728!3d47.9140909!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d96932a2567248b%3A0xe8aafcfa72fd3d3f!2z06jQvdOp0YAg0KXQvtGA0L7QvtC70L7Quw!5e0!3m2!1smn!2smn!4v1480085857914" width="1400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<br><br>

<div class="row">
    <form method="post" action="/mn/contact" role="form">
<div class="col-sm-4">
<div class="form-group">
	<div class="input-group">
			<div class="input-group-addon"><i class="fa fa-user"></i></div>
			<input type="text" class="form-control" name="name" value="" placeholder="Овог Нэр *">
	</div>
</div>

<div class="form-group">
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
		<input type="text" class="form-control" name="email" value="" placeholder="И-мэйл *">
</div>

<div class="field-notice" rel="email"></div>
</div>

<div class="form-group">
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-home"></i></div>
		<textarea class="form-control" name="address" placeholder="Хаяг, Шуудангийн дугаар, Хот"></textarea></div>
	<div class="field-notice" rel="address"></div>
</div>

<div class="form-group">
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-phone"></i></div>
		<input type="text" class="form-control" name="phone" value="" placeholder="Утас."></div>
	<div class="field-notice" rel="phone"></div>
</div>
</div>


<div class="col-sm-5">
	<div class="form-group">
		<div class="input-group">
			<div class="input-group-addon"><i class="fa fa-question"></i></div>
			<input type="text" class="form-control" name="subject" value="" placeholder="Сэдэв *"></div>
	<div class="field-notice" rel="subject"></div>
	</div>

<div class="form-group">
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-quote-left"></i></div>
		<textarea class="form-control" name="msg" placeholder="Зурвас *" rows="4"></textarea></div>
	<div class="field-notice" rel="msg"></div>
</div> 

<div class="form-group form-inline">
	<div class="input-group mb5">
		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
		<input type="text" class="form-control" name="captcha" id="captcha" value="" placeholder="Код хуулах *">
	</div>
	
		<a href="#" onclick="document.getElementById('captcha_image').src = '/includes/securimage/securimage_show.php?sid=' + Math.random(); return false"> <i class="fa fa-refresh"></i></a>
	<div class="field-notice" rel="captcha"></div>
</div>   

<div class="form-group row">
	<span class="col-sm-12"><button type="submit" class="btn btn-primary" name="send"><i class="fa fa-send"></i> Илгээх</button> <i> * Талбаруудыг бөглөнө үү</i></span>
</div>
</div>
                </form>
</div>
<div>
	<h3>Биднийг дага Facegroup oruuulna</h3>
	</div>

	<div>
		<h3>Холбоо барих utas email oruuulna</h3>
	</div>

<center>
<?php 
require("footer.php");
?>
</center>