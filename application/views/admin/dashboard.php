<!-- Header -->
<?php $this->load->view('admin/templates/header.php'); ?>
<!-- End of Header -->

<!-- Navbar -->
<?php $this->load->view('admin/templates/navbar.php'); ?>
<!-- End of Navbar -->

<!-- Sidebar -->
<?php $this->load->view('admin/templates/sidebar.php'); ?>
<!-- End of Sidebar -->

<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Dashboard</li>
    </ol>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
</div>
<!--/.row-->

<div class="panel panel-container">
    <div class="row">
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-server color-blue"></em>
                    <div class="large">49</div>
                    <div class="text-muted">Attribute</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-file color-orange"></em>
                    <div class="large">76</div>
                    <div class="text-muted">Value</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-orange panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                    <div class="large">2</div>
                    <div class="text-muted">Users</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-red panel-widget ">
                <div class="row no-padding"><em class="fa fa-xl fa-bar-chart color-red"></em>
                    <div class="large">1</div>
                    <div class="text-muted">Dataset</div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!-- <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Site Traffic Overview
                <ul class="pull-right panel-settings panel-button-tab-right">
                    <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                            <em class="fa fa-cogs"></em>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <ul class="dropdown-settings">
                                    <li><a href="#">
                                            <em class="fa fa-cog"></em> Settings 1
                                        </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">
                                            <em class="fa fa-cog"></em> Settings 2
                                        </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">
                                            <em class="fa fa-cog"></em> Settings 3
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--/.row-->

<!-- Footer -->
<?php $this->load->view('admin/templates/footer.php'); ?>
<!-- End of Footer -->