<?php $this->load->view("admin/templates/headerauth.php"); ?>

<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <form action="" method="post">
                        <?= $this->session->flashdata('pesan'); ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" type="email" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password">
                            </div>
                            <!-- <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div> -->
                            <button type="submit" class="btn btn-block btn-primary">
                                Log in
                            </button>
                            <a href="<?= base_url() ?>" class="btn btn-block btn btn-danger">
                                <i class="fa fa-reply"></i>
                                <span class="text">Kembali</span></a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</body>
<?php $this->load->view("admin/templates/footerauth.php"); ?>