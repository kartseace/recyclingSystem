<html>
<head>
    <title>Recyclig system </title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>"/>

    <link rel="stylesheet" href="<?php echo base_url().'assets/custom.css'?>"/>

    <!-- jQuery library -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Latest compiled JavaScript -->
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</head>
<body>
<div class="container" id="login_form">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <?php
                $success_msg= $this->session->flashdata('success_msg');
                $error_msg= $this->session->flashdata('error_msg');

                if($success_msg){
                    ?>
                    <div class="alert alert-success">
                        <?php echo $success_msg; ?>
                    </div>
                    <?php
                }
                if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                        <?php echo $error_msg; ?>
                    </div>
                    <?php
                }
                ?>



                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('user/login_user');?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="user_email" type="email">
                                <span class="text-danger"><?php echo form_error('user_email');?></span>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" >
                                <span class="text-danger"> <?php echo form_error('user_password');?></span>
                            </div>
                           <span class="text-danger"> <?php echo $this->session->flashdata('errors');?></span>

                         <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                        </fieldset>
                    </form>
                    <b>Not registered?</b><br><a href="<?php echo base_url('user/register_view');?>">Register here</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>