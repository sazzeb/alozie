<?php
$form_location = base_url().'youraccount/submit';
?>
<h1 style="text-align: center; color: #f68d34;">Create Account</h1>
<?php
echo validation_errors("<p style='color: red;'>", "</p>");
?>
<div class="l-main-container"><?php if (isset($flash)) {echo $flash; } ?></div>
<div class="l-main-container">
    <div class="container b-container-login-page">
        <div class="row">
          <form class="form-horizontal" action="<?= $form_location ?>" method="post">
            <div class="col-md-6">
                <div class="b-form-row f-primary-l f-title-big c-secondary">Create an account</div>
                <div class="b-form-row" style="color: #4195e2;">Create an account with us, we love doing business with us.</div>
                <hr class="b-hr" />
                <div class="row b-form-inline b-form-horizontal">
                    <div class="col-xs-12">
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_location">First Name</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="firstname" value="<?= $firstname ?>" placeholder=" Enter Your First name here" id="create_account_location" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_name">Last Name</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="lastname" value="<?= $lastname ?>" placeholder=" Enter Your last name here" id="create_account_name" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_email">Username</label>
                            <div class="b-form-horizontal__input">
                               <input id="textinput" name="username" value="<?= $username ?>" type="text" placeholder="Enter your username of choice here" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_email">Your Email</label>
                            <div class="b-form-horizontal__input">
                                <input type="email" name="email" value="<?= $email ?>" type="text" placeholder="Enter your contact email address here" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_password">Your password</label>
                            <div class="b-form-horizontal__input">
                                <input type="password" id="create_account_password" name="pword" value="<?= $pword ?>" type="password" placeholder="Enter your password of choice here" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_confirm">Confirm password</label>
                            <div class="b-form-horizontal__input">
                                <input type="password" name="repeat_pword" value="<?= $repeat_pword ?>" type="password" placeholder="Repeat your password here" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_phone">Phone Number</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="telnum" value="<?= $telnum ?>" id="create_account_phone" class="form-control"  placeholder="Enter You Cell Number"/>
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_name">Company</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="company" value="<?= $company ?>" placeholder=" Enter the name of your company here" id="create_account_name" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                        <label class="b-form-vertical__label" for="website">Identify that you are human</label>
                        <div class="g-recaptcha" data-sitekey="<?= $keyme ?>"></div>
                        </div>
                        <div class="b-form-row">
                            <div class="b-form-horizontal__label"></div>
                            <div class="b-form-horizontal__input">
                            <button id="singlebutton" name="submit" value="Submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">sign up now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </form>
            <div class="col-md-6">
                <div class="f-primary-l f-title-big c-secondary"><?= $welcome ?></div>
                <p><?= $login_msg ?></p>
            </div>
        </div>
    </div>
</div>
