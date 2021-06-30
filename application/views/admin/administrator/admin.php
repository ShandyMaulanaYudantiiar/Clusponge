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
                                                        <th style="text-align: center; width: 100px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($getadmin as $row) : ?>
                                                        <tr style="text-align: center;">
                                                            <td><?= $no; ?></td>
                                                            <td><?= $row->USERNAME; ?></td>
                                                            <td><?= $row->EMAIL; ?></td>
                                                            <td><img width="30px" height="30px" src="<?= base_url('assets/img/') . $row->FOTO; ?>"></td>
                                                            <td>
                                                                <?php
                                                                if ($_SESSION['EMAIL'] == $row->EMAIL) {
                                                                ?>
                                                                    <a href="<?= base_url('admin/admin/edit/' . $row->ID_USER) ?>" class="btn btn-primary">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="<?php echo site_url('admin/admin/delete/' . $row->ID_USER) ?>" onclick="confirm_modal('<?php echo 'admin/delete/' . $row->ID_USER; ?>')" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php $no++;
                                                    endforeach; ?>
                                                </tbody>
                                            </table>
                                            <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin
                                                                untuk menghapus?</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Pilih "Hapus" untuk menghapus, pilih "Batal"
                                                            untuk kembali ke Panel Admin.</div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-info" type="button" data-dismiss="modal">Batal</button>
                                                            <a id="delete_link" class="btn btn-danger" href="<?php echo site_url('admin/admin/delete/' . $row->ID_USER) ?>">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
<script type="text/javascript">
    function confirm_modal(delete_url) {
        $('#hapusModal').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('delete_link').setAttribute('href', delete_url);
    }
</script>

<!-- Footer -->
<?php $this->load->view('admin/templates/footer.php'); ?>
<!-- End of Footer -->