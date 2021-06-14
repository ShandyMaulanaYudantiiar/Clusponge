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
        <li><a href="<?= base_url("admin/importData") ?>">Import Data</a></li>
    </ol>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Import Data</h1>
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
                            <label>Upload Dataset</label>
                            <input type="file">
                            <p class="help-block" style="color: red;">*Upload dataset berekstensi csv.</p>
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
                            <span class="text">Upload</span>
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