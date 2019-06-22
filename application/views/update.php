
<?php include('include/header2.php');?>

<?php include("include/nav2.php")?>
<div class="container">

    <?php echo $this->session->flashdata('msg');
    echo $this->session->flashdata('error_msg');?>
    <?php
//echo print_r($retData);
    foreach($retData->result() as $ret)

    ?>
    <form action="<?php echo base_url();?>Admin/updateData" method="post" enctype="multipart/form-data">
        <div class="panel-body">
<!--            <div class="form-group">-->
<!--                <label>Picture</label>-->
<!--                <input type="file" name="file" class="form-control" value="'"/>-->
<!--            </div>-->

            <div class="form-group">
                <label>Waste Type</label>
                <input class="form-control" type="text" name="waste_type" value="<?php echo $ret->waste_type?>"/>
            </div>


            <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="number" name="price" value="<?php echo $ret->price?>"/>
            </div>

            <div class="form-group">
                <label>Description</label>
                <input class="form-control" type="text" name="description" value="<?php echo $ret->description?>"/>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="userSubmit">Update</button>
                <input type="hidden" name="hidden" value="<?php echo $ret->image_id ?>">
            </div>


        </div>
    </form>

</div>
</body>
</html>
