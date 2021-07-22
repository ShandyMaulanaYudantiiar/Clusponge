<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="model-body">Pilih "Hapu" untuk menghapus, pilih "Batal" untuk kembali ke Panel Admin.</div>
            <div class="modal-footer">
                <button class="btn btn-info" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" href="<?= site_url('admin/admin/delete/' . $row->ID_USER) ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>