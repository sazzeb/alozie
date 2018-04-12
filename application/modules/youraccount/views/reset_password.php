<?php
$first_bit = $this->uri->segment(1);
$form_location = base_url().$first_bit.'/update_reset_p';
?>
<div class="b-inner-page-header f-inner-page-header b--header-inner-page">
  <div class="b-inner-page-hder__content">
    <div class="container">
      <h1 class="f-primary-l c-deault" style="text-align: center; color: white;">Reset Your Password Here</h1>
    </div>
  </div>
</div>

<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><span>Enter a new password that you can remember</span></li>
            </ul>
        </div>
    </div>
    <div class="j-menu-container"><?php if (isset($flash)) {echo $flash; } ?></div>
    <div class="container b-container-login-page">
        <div class="row">
            <div class="col-md-6">
                <div class="b-log-in-form">
                    <div class="f-primary-l f-title-big c-secondary">Change your password</div>
                    <p>Change your password by entering a new password of your choice</p>
                    <hr class="b-hr" />
                    <div class="b-form-row b-form-inline b-form-horizontal">
                        <div class="col-xs-12">
                        <form class="form-signin" action="<?= $form_location ?>" method="post">
                            <?php if(isset($email_code, $email_hashed)) { ?>
                            <input type="hidden" value="<?= $email_hashed?>"  name="email_hashed">
                            <input type="hidden" value="<?= $email_code?>"  name="email_code">
                            <?php } ?>
                                <div class="b-form-row">
                                    <label class="b-form-horizontal__label" for="create_account_email"></label>
                                    <div class="b-form-horizontal__input">
                                        <input type="email" name="email" value="<?php echo (isset($email)) ? $email : '' ?>" id="create_account_email" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-horizontal__label" for="create_account_password">Your password</label>
                                    <div class="b-form-horizontal__input">
                                        <input type="password" name="pword" id="create_account_password" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-horizontal__label" for="create_account_password">Repeat password</label>
                                    <div class="b-form-horizontal__input">
                                        <input type="password" name="repeat_pword" id="create_account_password" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <div class="b-form-horizontal__label"></div>
                                    <div class="b-form-horizontal__input">
                                        <button name="submit" value="Submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100" type="submit">Update Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="f-primary-l f-title-big c-secondary"><?= $welcome_msg ?></div>
                <p><?= $log_msg ?></p>
            </div>
        </div>
    </div>
</div>
