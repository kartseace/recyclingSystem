<html>
<head>
    <title>Recyclig system </title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>"/>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/custom.css"/>

    <!-- jQuery library -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Latest compiled JavaScript -->
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</head>
<body>

  <span style="...">
<div class="container" id="register_form"><!-- container class is used to centered  the body of the browser with some decent width-->

  <div class="row"><!-- row class is used for grid sysstem in Bootstrap-->
<div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->

<div class="login-panel panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Registration </h3>
  </div>

    <div class="panel-body">

    <?php
    $error_msg=$this->session->flashdata('error_msg');
    if($error_msg){
        echo $error_msg;
    }
    ?>

        <form role="form" method="post" action="<?php echo base_url('user/register_user');?>">
        <fieldset>
        <div class="form-group">
            <label class="col-md-4 control-label">Username</label>
            <input class="form-control" placeholder="Name" name="user_name" type="text" autofocus required>
            </div>

<div class="form-group">
  <label class="col-md-4 control-label">E-mail</label>
  <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus required>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>
  <input class="form-control" placeholder="Password" name="user_password" type="password" required>
  </div>

  <div class="form-group">
     <label>Confirm-Password</label>
     <input class="form-control" placeholder="retype-password" name="re_password" type="password" required>
  </div>

<div class="form-group">
  <label class="col-md-4 control-label">Gender</label>
  <label class="radio-inline"><input type="radio" name="gender" value="male" checked="checked">Male</label>
  <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
  <label class="radio-inline"><input type="radio" name="gender" value="other">Other</label>
</div>

  <div class="form-group">
    <label class="col-md-4 control-label">Age</label>
    <input class="form-control" placeholder="Age" name="user_age" type="number" required>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">Mobile No.</label>
    <input class="form-control" placheholder="Mobile No." name="user_mobile" type="text" required>
  </div>
<input class="btn btn-success" type="submit" value="Register" name="register">

</fieldset>
</form>
<center><b>Already registered?</b><br><a href="<?php echo base_url('user/login_view');?>">Login here</a>
</div>

</div>
<div>
</div>
</div>
</span>
</body>
</html>