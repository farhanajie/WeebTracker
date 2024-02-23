<div class="modal fade" id="modal-hapus-event">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Hapus Event</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin akan menghapus event ini?</p>
            </div>
            <div class="modal-footer">
                <form action="backend/admin/hapusEventBackend.php" method="post">
                    <input type="number" id="id_event" name="id_event" value="<?php echo $id_event ?>" hidden>
                    <button class="btn btn-danger" name="hapus_event" type="submit">Ya</button>
                </form>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
</div>