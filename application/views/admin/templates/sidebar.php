<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Username</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li style="color:gray"><em class="nav-header">&nbsp;</em> HOME</li>
        <li><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li style="color:gray"><em class="nav-header">&nbsp;</em> MANAGEMENT USER</li>
        <li><a href="widgets.html"><em class="fa fa-user">&nbsp;</em> Administrator</a></li>
        <li style="color:gray"><em class="nav-header">&nbsp;</em> CLUSTERING</li>
        <li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Cluster Data</a></li>
        <li><a href="#" role="button" data-toggle="modal" data-target="#logoutModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div>
<!-- Modal -->
<?php $this->load->view('admin/templates/modal.php'); ?>
<!-- End of Modal -->