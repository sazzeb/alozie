
<?php
$first_bit = $this->uri->segment(1);
$form_location = base_url().$first_bit.'/send_reset';
?>

<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
  <div class="b-inner-page-header__content">
    <div class="container">
      <h1 class="f-primary-l c-default" style="text-align: center; color: white;">Forgot Password - Enter Email to Recover</h1>
    </div>
  </div>
</div>

<div class="j-menu-container"><?php if (isset($flash)) {echo $flash; } ?></div>
<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><span>Recover password</span></li>
            </ul>
        </div>
    </div>
    <div class="container b-forgot-password-page">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="b-forgot-password-form">
                    <h3 class="f-primary-l is-global-title">Rcover Password</h3>
                    <p>Enter your email to enable you recover your password.</p>
                    <form class="form-signin" action="<?= $form_location ?>" method="post">
                        <div class="b-form-row b-form-inline b-form-horizontal b-form-password">
                            <div class="b-form-row">
                                <div class="b-form-horizontal--mail f-form-horizontal--mail">
                                    <i class="fa fa-envelope"></i>
                                    <input type="text" name="email" value="<?= $email ?>" id="create_account_email" class="form-control" placeholder="Email" />
                                </div>
                            </div>
                            <div class="b-form-row">
                                <div>
                                    <button name="submit" value="Value" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100" type="submit">Send Me Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

