
<?php include('include/header2.php');?>

<?php include("include/nav2.php")?>
<div class="container">

    <?php echo $this->session->flashdata('msg');
    echo $this->session->flashdata('error_msg');?>
    <form action="<?php echo base_url();?>Admin/uploading" method="post" enctype="multipart/form-data">
        <div class="panel-body">
            <div class="form-group">
                <label>Picture</label>
                <input type="file" name="file" class="form-control"/>
            </div>

            <div class="form-group">
                <label>Waste Type</label>
                <input class="form-control" type="text" name="waste_type"/>
            </div>


            <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="number" name="price"/>
            </div>

            <div class="form-group">
                <label>Description</label>
                <input class="form-control" type="text" name="description"/>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="userSubmit">Add</button>
            </div>


        </div>
    </form>

</div>
</body>
</html>
