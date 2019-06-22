<?php include('include/header2.php');?>
<div id="nav3">
    <?php include('include/nav2.php');?>
</div>
<div class="container">


<div class="container-fluid" id="schedule">
    <h2 id="list">Scheduling Report</h2>
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

                <table border="1" class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Area</th>
                        <th>Street Address</th>
                        </tr>
                    <?php
                    foreach($retData->result() as $ret){
                        echo "<tr>";
                        echo "<td>".$ret->name."</td>";
                        echo "<td>".$ret->location."</td>";
                        echo "<td>".$ret->date."</td>";
                        echo "<td>".$ret->area."</td>";
                        echo "<td>".$ret->street_address."</td></tr>";

                    }
                    ?>
                    <table>
</div>
            </div>

</body>
</html>



