
<?php
$first_bit = $this->uri->segment(1);
$form_location = base_url().$first_bit.'/login_user';
?>
<div class="b-inner-page-header f-inner-page-header " style="background-color: #636363">
  <div class="b-inner-page-header__content">
    <div class="container">
      <h1 class="f-primary-l c-default" style="text-align: center; color: white;">Welcome Register and Login</h1>
    </div>
  </div>
</div>
<div class="l-main-container">
    <div class="container b-container-login-page">
        <div class="row">
            <div class="col-md-6">
                <div class="b-log-in-form">                 
                <div class="f-primary-l f-title-big c-secondary"><?php if (isset($flash)) {echo $flash; } ?></div>
                    <div class="f-primary-l f-title-big c-secondary">Create an account</div>
                    <p>Login  to our awesome website, we are committed in intaracting with you instantly, dont be left out</p>
                    <hr class="b-hr" />
                    <div class="b-form-row b-form-inline b-form-horizontal">
                    <?php
                    echo validation_errors("<p style='color: red;'>", "</p>");
                    ?>
                    <form class="form-signin" action="<?= $form_location ?>" method="post">
                        <div class="col-xs-12">
                            <div class="b-form-row">
                                <label class="b-form-horizontal__label" for="create_account_email">Your Email</label>
                                <div class="b-form-horizontal__input">
                                    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                </div>
                            </div>
                            <div class="b-form-row">
                                <label class="b-form-horizontal__label" for="create_account_password">Your password</label>
                                <div class="b-form-horizontal__input">
                                <input type="password" name="pword" id="inputPassword" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="b-form-row">
                                <div class="b-form-horizontal__label"></div>
                                <label for="contact_form_copy" class="b-contact-form__window-form-row-label">
                                    <input  type="checkbox" name="remember" value="remember-me" id="contact_form_copy" class="b-form-checkbox" />
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <div class="b-form-row">
                                <div class="b-form-horizontal__label"></div>
                                <div class="b-form-horizontal__input">
                                    <button name="submit" value="Submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100" type="submit">Sign in now</button>
                                </div>
                            </div>
                            <div class="b-form-row">
                                <div class="b-form-horizontal--mail">
                                <label class="b-form-horizontal__label" for="create_account_email"></label>
                                    <a href="<?= base_url().'youraccount/forgotten' ?>" class="f-link--color">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="f-primary-l f-title-big c-secondary">Log In with social account</div>
                <p><?= $social ?> </p>
                <div class="b-social-links-box">
                    <a href="#" class="b-social__item f-social__item b-social__item--fb"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="#" class="b-social__item f-social__item b-social__item--tw"><i class="fa fa-twitter"></i> Twitter</a>
                    <a href="#" class="b-social__item f-social__item b-social__item--ld"><i class="fa fa-linkedin"></i> LinkedIn</a>
                    <a href="#" class="b-social__item f-social__item b-social__item--g f-social__item--g"><i class="fa fa-google-plus"></i> Google +</a>
                </div>
            </div>
        </div>
    </div>
</div>
