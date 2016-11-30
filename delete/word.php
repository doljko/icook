<?php 
    require_once("header.php");
?>
<img  src="public/img/5.jpg" >
<hr>
<div class="row">
                    <div class="col-lg-3 col-md-3"></div>
                    <div class="col-lg-6 col-md-6">
                   
          <from id="forgot-form" role="form" onsubmit="return false;">
                                    <div class="form-group">
                                        <label>И-мейл *</label>
                                        <input type="text" name="email" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Нууц үг авах</button>
                                    </div>
                                </form>
                                <div id="alert-success" class="alert alert-success" role="alert" style="display: none;">
                                    <strong>Амжилттай!</strong> Таны и-мейлрүү шинэ нууц үг илгээгдлээ!
                                </div>
                                <div id="alert-danger" class="alert alert-danger" role="alert" style="display: none;">
                                    <strong>Алдаа!</strong> <div id="msg">Энэ и-мейл бүртгэлгүй байна.</div>
                                </div>
                            </div>
                         

</div>


</div>

<?php 
require("footer.php");
?>
