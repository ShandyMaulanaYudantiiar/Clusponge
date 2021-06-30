<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="model-body">Pilih "Logout" untuk keluar, pilih "Cancel" untuk kembali ke Panel Admin.</div>
            <div class="modal-footer">
                <button class="btn btn-info" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?= site_url('admin/Auth/logout') ?>">Logout</a>
                <!-- <a class="btn btn-danger" href="<?= site_url('admin/Auth/logout') ?>">Logout</a> -->
            </div>
        </div>
    </div>
</div>