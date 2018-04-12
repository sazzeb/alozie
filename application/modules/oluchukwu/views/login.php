<?php
$first_bit = $this->uri->segment(1);
$form_location = base_url().$first_bit.'/submit_login';
?>
<!DOCTYPE html>
<html>
<head>
    <title>IGA-SHAR</title>
    <link rel="shortcut icon" href="<?= $icon ?>">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style type="text/css">
  body{
    background: url(<?= base_url() ?>img/rivcast/slide1.jpg);
    background-color: #444;
    background: url(<?= base_url() ?>img/rivcast/slide2.jpg),url(<?= base_url() ?>img/rivcast/slides3.jpg),url(<?= base_url() ?>img/rivcast/slide4.jpg);    
}

.vertical-offset-100{
    padding-top:100px;
}
</style>
</head>
<body>
<div class="container">
    <div class="row vertical-offset-100">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Please sign in</h3>
        </div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form" action="<?= $form_location ?>" method="post">
                    <fieldset>
                <div class="form-group">
                  <label for="inputText" class="sr-only">Username or Email address</label>
                  <input class="form-control" placeholder="E-mail or Username" name="username" value="<?= $username ?>" type="text">
              </div>
              <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
                <input class="form-control" placeholder="Enter Password" name="pword" type="password">
              </div>
              <div class="checkbox">
                  <label>
                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                  </label>
                </div>
              <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Submit">
            </fieldset>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>



