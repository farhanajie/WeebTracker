<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeebTracker</title>
    <?php
    include_once('head/assets.php');
    include_once('head/koneksi.php');
    include_once('head/session.php');
    ?>
</head>

<body>
    <?php include_once('components/navbar.php') ?>
    <div class="container">

        <?php
        $id_event = $_GET['id_event'];
        $query = mysqli_query(
            $koneksi,
            "SELECT * FROM event WHERE id_event = '$id_event'"
        );
        $event = mysqli_fetch_assoc($query);

        $tanggalMulai = strtotime($event['tanggal_mulai']);
        $tanggalMulai = date('d/m/Y', $tanggalMulai);
        $tanggalSelesai = strtotime($event['tanggal_selesai']);
        $tanggalSelesai = date('d/m/Y', $tanggalSelesai);
        ?>
        
        <div class="row">
            <div class="col-md-4">
                <div class="img-box rounded">
                    <img src="<?php echo($event['gambar'])?>" alt="...">
                </div>
            </div>
            <div class="col-md-8">
                <h3 class="event-title"><?php echo($event['nama_event'])?></h3>
                <p><i class="bi bi-calendar"></i> <?php echo($tanggalMulai." - ".$tanggalSelesai) ?></p>
                <p><i class="bi bi-geo-alt"></i> <?php echo($event['tempat']) ?></p>
                <p><i class="bi bi-link-45deg"></i> <a href="<?php echo($event['medsos']) ?>"><?php echo($event['medsos']) ?></a></p>
                <button class="btn btn-warning" id="btn-bookmark"><i class="bi bi-heart"></i> <span>Favorit</span></button>
                <?php if($_SESSION['logged_in']) : ?>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-edit-event"><i class="bi bi-pencil"></i> <span>Edit</span></button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-hapus-event"><i class="bi bi-trash"></i> <span>Hapus</span></button>
                <?php endif ?>
                <h5 class="deskripsi">Deskripsi</h5>
                <p><?php echo($event['deskripsi']) ?></p>
            </div>
        </div>

    </div>
    <?php include_once('components/tambahEvent.php') ?>
    <?php include_once('components/editEvent.php') ?>
    <?php include_once('components/hapusEvent.php') ?>
</body>

</html>