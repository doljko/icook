<?php 
require("header.php");
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
  </style>
<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn" > <center> Бүртгүүлэх </center></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Нэвтрэх</h4>
        </div>
        
        
        <div class="modal-body" style="padding:40px 50px;">
          
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Хэрэглэгчийн нэр: </label>
              <input type="text" class="form-control" id="usrname" placeholder="И-мэйл">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Нууц үг: </label>
              <input type="text" class="form-control" id="psw" placeholder="Нууц үг">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Сануулах: </label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Бүртгүүлэх</button>
          </form>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Цуцлах</button>
          <p>Not a member? <a href="#">Нэвтрэх</a></p>
          <p>Нууц үгээ <a href="#">мартцсан уу ?</a></p>
        </div>
      </div>
      
    </div>
  </div>
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

<?php 
require("footer.php");
?>

