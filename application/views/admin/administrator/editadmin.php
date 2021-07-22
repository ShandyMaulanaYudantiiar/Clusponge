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
        <li class="active">Edit Akun</li>
    </ol>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit admin</h1>
    </div>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Forms</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form method="post" action="<?= site_url('admin/admin/edit/') . $detail[0]->ID_USER; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                        <input class="form-control" id="id_user" name="id_user" type="hidden" placeholder="Username" value="<?php echo $detail[0]->ID_USER; ?>">
                            <label>Username</label>
                            <input class="form-control" id="username" name="username" type="text" placeholder="Username" value="<?php echo $detail[0]->USERNAME; ?>">
                            <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" id="email" name="email" type="text" placeholder="Email" value="<?php echo $detail[0]->EMAIL; ?>">
                            <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Repeat Password</label>
                            <input id="password2" name="password2" type="password" class="form-control" placeholder="Repeat Password">
                            <?= form_error('password2', '<small class="text-danger pl-2">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input name="foto" id="foto" type="file" accept="image/*" onchange="tampilkanPreview(this,'preview')" placeholder="">
                            <p class="help-block" style="color: red;">*Upload foto berekstensi gambar dengan ukuran maksimal 2mb.</p>
                        </div>
                        <div class="form-group">
                            <img id="preview" src="" alt="" width="320px">
                        </div>
                        <a href="<?= site_url('admin/admin') ?>" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa fa-reply"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                        <button type="submit" href="<?= site_url('admin/admin') ?>" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa fa-save"></i>
                            </span>
                            <span class="text">Edit Akun</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.panel-->
    <script>
        function tampilkanPreview(gambar, idpreview) {
            // membuat objek gambar
            var gb = gambar.files;
            // loop untuk merender gambar
            for (var i = 0; i < gb.length; i++) {
                // bikin variabel
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview = document.getElementById(idpreview);
                var reader = new FileReader();
                if (gbPreview.type.match(imageType)) {
                    // jika tipe data sesuai
                    preview.file = gbPreview;
                    reader.onload = (function(element) {
                        return function(e) {
                            element.src = e.target.result;
                        };
                    })(preview);
                    // membaca data URL gambar
                    reader.readAsDataURL(gbPreview);
                } else {
                    // jika tipe data tidak sesuai
                    alert("Hanya dapat menampilkan preview tipe gambar. Harap simpan perubahan untuk melihat dan merubah gambar.");
                }
            }
        }
    </script>
</div><!-- /.col-->

<!-- Footer -->
<?php $this->load->view('admin/templates/footer.php'); ?>
<!-- End of Footer -->