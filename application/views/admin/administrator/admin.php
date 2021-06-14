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
        <li class="active">Admin</li>
    </ol>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Administrator</h1>
    </div>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-header">
                    <a href="<?= base_url("admin/Admin/tambah") ?>" class="btn btn-sm btn-info btn-icon-split shadow-sm">
                        <span class="icon text-white">
                            <i class="fa fa-plus"></i>
                            <i class="text">Tambah Admin</i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Default box -->
                                    <div class="card">
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <?php echo $this->session->userdata('pesan'); ?>
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center; width: 5px;">No</th>
                                                        <th style="text-align: center; width: 200px;">Username</th>
                                                        <th style="text-align: center; width: 300px;">Email</th>
                                                        <th style="text-align: center; width: 100px;">Foto</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="text-align: center;">
                                                        <td>1</td>
                                                        <td>asdasd</td>
                                                        <td>asdasd</td>
                                                        <td>asdasd</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php $this->load->view('admin/templates/footer.php'); ?>
<!-- End of Footer -->