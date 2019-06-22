<?php include('include/header2.php');?>
<div id="nav3">
    <?php include("include/nav2.php")?>
</div>
<div class="container-fluid">
    <div><h2>Paper Gallery</h2></div>

    <!--    <div class="table-responsive">-->
    <!--<table class="table" border="1">-->
    <!--    <tr><th>Image</th><th>Price</th><th>Description</th></tr>-->
    <?php
    //foreach($retData->result() as $ret){
    //
    //    echo "<tr><td>"."<img src='$ret->file_name' height='60' width='60'".
    //        "</td><td>".$ret->price."</td><td>".$ret->description."</td></tr>";
    //}
    //?>
    <!--</table>-->
    <!--</div>-->


    <div id="papertable">
        <table border="1" class="table table-striped">
            <tr><th>Image File</th><th>Price</th><th>Description</th><th colspan=""2">Action</th></tr>
            <?php
            foreach($retData->result() as $ret) {
                echo '<tr>';
                echo '<td>'."<img src='$ret->file_name' width='120' height='80'>".'</td>';
                echo '<td>'.$ret->price.'</td>';
                echo '<td>'.$ret->description.'</td>';
                echo '<td>'."<a href='".base_url()."admin/updateAction/".$ret->image_id."'>Update</a>";
                echo  "<a href='".base_url()."admin/delData/".$ret->image_id."'>Delete</a>".'</td>';
                // echo print_r($ret);
                echo '</tr>';
            }
            ?>
            <table>

    </div>
</div>
</body>
</html>



