<?php 
    require_once("header.php");
?>
<img  src="public/img/5.jpg" >
<hr>

<section class="recipes-home-body inner-page">
    <div class="container">
        <div class="recipe-set">
            <div class="login-container">
                <div class="row">
                    <div class="col-lg-3 col-md-3"></div>
                    <div class="col-lg-6 col-md-6">
                        <div class="tab-container tab-shortcode">
                            <ul class="tabs-nav clearfix" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#login-tab" role="tab" data-toggle="tab">Нэвтрэх</a>
                                </li>
                                <li role="presentation">
                                    <a href="#registeration" role="tab" data-toggle="tab">Бүртгүүлэх</a>
                                </li>
                                <li role="presentation">
                                    <a href="#forgot" role="tab" data-toggle="tab">Нууц үг сэргээх</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="login-tab">
                                <br/>
                                <form role="form" id="login-form" action="/index.php/site/login" method="post">                                
                                    <div class="form-group">
                                      <label for="LoginForm_email" class="required">И-мейл <span class="required">*</span></label>                                      <input class="form-control" name="LoginForm[email]" id="LoginForm_email" type="text" />                                     <div class="errorMessage" id="LoginForm_email_em_" style="display:none"></div>                                    </div>

                                    <div class="form-group">
                                      <label for="LoginForm_password" class="required">Нууц үг <span class="required">*</span></label>                                      <input class="form-control" name="LoginForm[password]" id="LoginForm_password" type="password" />                                     <div class="errorMessage" id="LoginForm_password_em_" style="display:none"></div>                                    </div>

                                    <div class="form-group">
                                        <input class="btn btn-success" type="submit" name="yt0" value="Нэвтрэх" /> &nbsp; <a class="btn-auth btn-facebook" href="/index.php/site/login?service=facebook">Facebook нэвтрэх</a>                                        
                                    </div>

                                </form>                            </div>
                            <div role="tabpanel" class="tab-pane" id="registeration">
                                <br/>
                                <from id="register-form" role="form" onsubmit="return false;">
                                    <div class="form-group">
                                        <label>Хэрэглэгчийн нэр *</label>
                                        <input type="text" name="username" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>И-мейл *</label>
                                        <input type="text" name="email" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Нууц үг *</label>
                                        <input type="password" name="password" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Нууц үгээ дахин оруулна уу *</label>
                                        <input type="password" name="confirm-password" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="terms" /> 
                                        <a target="_blank" href="/index.php/site/terms">Үйлчилгээний нөхцөл</a>                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Бүртгүүлэх</button>
                                    </div>
                                </form>
                                <div id="alert-success" class="alert alert-success" role="alert" style="display: none;">
                                    <strong>Амжилттай!</strong> Бүртгэгдлээ, нэвтэрч орно уу!
                                </div>
                                <div id="alert-danger" class="alert alert-danger" role="alert" style="display: none;">
                                    <strong>Алдаа!</strong> <div id="msg">Нууц үг давтан оруулалт буруу байна.</div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="forgot" >
                                <br/>
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
                    <div class="col-lg-3 col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
require("footer.php");
?>