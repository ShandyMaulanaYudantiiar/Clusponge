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
        <li><a href="<?= base_url("admin/dashboard") ?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li><a href="<?= base_url("admin/admin") ?>">Admin</a></li>
        <li class="active">Tambah admin</li>
    </ol>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tambah admin</h1>
    </div>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Forms</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file">
                            <p class="help-block" style="color: red;">*Upload foto berekstensi gambar dengan ukuran maksimal 2mb.</p>
                        </div>
                        <a href="<?= site_url('admin/admin') ?>" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa fa-reply"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                        <button type="submit" href="<?= site_url('admin/admin') ?>" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="text">Tambah Administrator</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.panel-->
</div><!-- /.col-->

<!-- Footer -->
<?php $this->load->view('admin/templates/footer.php'); ?>
<!-- End of Footer -->