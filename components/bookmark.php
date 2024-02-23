<div class="modal fade" id="modal-bookmark">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Event Favorit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $bkArray = json_decode($_COOKIE['bookmark']);
                $bkQuery = mysqli_query($koneksi, "SELECT * FROM event WHERE id_event IN ('" . implode("' , '", $bkArray) . "')");

                foreach ($bkQuery as $bkEvent) :
                    $bkTanggalMulai = strtotime($bkEvent['tanggal_mulai']);
                    $bkTanggalMulai = date('d/m/Y', $bkTanggalMulai);
                    $bkTanggalSelesai = strtotime($bkEvent['tanggal_selesai']);
                    $bkTanggalSelesai = date('d/m/Y', $bkTanggalSelesai);
                ?>

                    <div class="card rounded shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo ($bkEvent['gambar']) ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a class="stretched-link" href="detail.php?id_event=<?php echo ($bkEvent['id_event']) ?>"><?php echo ($bkEvent['nama_event']) ?></a></h5>
                                    <p class="card-text">
                                        <i class="bi bi-calendar"></i> <?php echo ($bkTanggalMulai . " - " . $bkTanggalSelesai) ?>
                                        <br>
                                        <i class="bi bi-geo-alt"></i> <?php echo ($bkEvent['tempat']) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>