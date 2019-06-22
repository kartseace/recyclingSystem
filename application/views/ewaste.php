<?php include('include/header2.php');?>
<div id="nav3">
    <?php include('include/nav3.php');?>
</div>
<div class="container">
    <div><h2>Paper Gallery</h2></div>
</div>
    <div class="row">
        <div class="col-md-4">

                <table border="1">
                    <?php
                    foreach($retData->result() as $ret){
                        echo "<td>"."<img  src='$ret->file_name' alt='Lights' style='width:500px' float='left'"."</td>";
                        echo "<div class='caption'>";
                        echo "<p>".$ret->price."</p>";
                        echo "<p>".$ret->description."</p>";
                        echo "</div>";
                    }
                    ?>
                    <table>
            </div>
        </div>

</body>
</html>



