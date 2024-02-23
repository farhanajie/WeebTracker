<div class="modal fade" id="modal-edit-event">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Edit Event</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="backend/admin/editEventBackend.php" method="post" enctype="multipart/form-data">
                    <div hidden>
                        <input type="number" class="form-control" id="id_event" name="id_event" value="<?php echo($event['id_event'])?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama-event" class="form-label">Nama Event</label>
                        <input type="text" class="form-control" id="nama_event" name="nama_event" value="<?php echo($event['nama_event'])?>">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php
                            $tm = strtotime($event['tanggal_mulai']);
                            echo date('Y-m-d', $tm);
                        ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="<?php
                            $ts = strtotime($event['tanggal_selesai']);
                            echo date('Y-m-d', $ts);
                        ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tempat" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo($event['tempat'])?>">
                    </div>
                    <div class="mb-3">
                        <label for="medsos" class="form-label">Link Media Sosial</label>
                        <input type="text" class="form-control" id="medsos" name="medsos" value="<?php echo($event['medsos'])?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <div hidden>
                        <input type="text" class="form-control" id="gambar_default" name="gambar_default" value="<?php echo($event['gambar'])?>">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6"><?php echo($event['deskripsi'])?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>