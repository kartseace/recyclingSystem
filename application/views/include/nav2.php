
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('user/admin_panel')?>">Recycling</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url('user/admin_panel')?>">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Waste <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('admin/admin_paper')?>">Paper</a></li>
                    <li><a href="<?php echo base_url('admin/admin_glass')?>">Glass and Plastic</a></li>
                    <li><a href="<?php echo base_url('admin/admin_metal')?>">Metal and Steel</a></li>
                    <li><a href="<?php echo base_url('admin/admin_ewaste')?>">E-Waste</a></li>
                    <li><a href="<?php echo base_url('admin/admin_other')?>">Others</a></li>
<!--                    <li><a href="--><?php //echo base_url('admin/admin_general')?><!--">General Waste & Services</a></li>-->
                </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View & Action<span class="caret"</span> </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url( 'schedule/getScheduledData')?>">Scheduled time</a></li>
                    <li><a href="<?php echo base_url( 'admin/getDataAction')?>">Paper</a></li>
                    <li><a href="<?php echo base_url('admin/getDataAction2')?>">Glass and Plastic</a></li>
                    <li><a href="<?php echo base_url('admin/getDataAction3')?>">Metal and Steel</a></li>
                    <li><a href="<?php echo base_url('admin/getDataAction4')?>">E-Waste</a></li>
                    <li><a href="<?php echo base_url('admin/getDataAction5')?>">Others</a></li>
<!--                    <li><a href="#">Genera Waste & Services</a></li>-->
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="#" onClick="home()"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
    </div>
    <script>
        function home(){
            window.location="<?php echo (base_url());?>user/loadhome";
        }
    </script>
</nav>