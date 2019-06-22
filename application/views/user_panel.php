<?php include('include/header2.php')?>

<!--<div class="container-fluid">-->
<!--<input type="text" class="datepicker" placeholder="Date">-->
<!--</div>-->
<div class="container-fluid">
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
    else if($error_msg){
        ?>
        <div class="alert alert-danger">
            <?php echo $error_msg; ?>
        </div>
        <?php
    }
    ?>

    <?php echo form_open_multipart('schedule/schedulepickup');?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control"/>
        <span class="text-danger"><?php echo form_error('name');?></span>
    </div>
     <div class="form-group">
        <label>location</label>
        <input type="text" name="location" class="form-control"/>
        <span class="text-danger"> <?php echo form_error('location');?></span>
        </div>

        <div class="form-group">
         <label>date</label>
        <input type="date" name="date" class="form-control"/>
            <span class="text-danger"> <?php echo form_error('date');?></span>
            </div>
        <div class="form-group">
            <label>area</label>
            <input type="text" name="area" class="form-control"/>
            <span class="text-danger"> <?php echo form_error('area');?></span>
        </div>
    <div class="form-group">
        <label>street address</label>
        <input type="text" name="street" class="form-control"/>
        <span class="text-danger"> <?php echo form_error('street');?></span>

    </div>
    <span class="text-danger"> <?php echo $this->session->flashdata('errors');?></span>
    <?php echo form_submit(['name'=>'book','value'=>'Confirm Scheduling','class'=>'btn btn-success1']) ?>
    <button type="button" onClick="home()">Log Out</button>




</div>
<script>
    function home(){
        window.location="<?php echo (base_url());?>user/loadhome";
    }
</script>
</body>
</head>
</html>