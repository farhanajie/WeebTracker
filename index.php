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
        $query = mysqli_query(
            $koneksi,
            "SELECT * FROM event ORDER BY tanggal_mulai DESC"
        );

        foreach ($query as $event) :
            $tanggalMulai = strtotime($event['tanggal_mulai']);
            $tanggalMulai = date('m/d/Y', $tanggalMulai);
            $tanggalSelesai = strtotime($event['tanggal_selesai']);
            $tanggalSelesai = date('m/d/Y', $tanggalSelesai);
        ?>
        
        <div class="card col-md-4 rounded shadow">
            <div class="ratio ratio-16x9">
                <img src="<?php echo($event['gambar']) ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title"><a class="stretched-link" href="detail.php?id_event=<?php echo($event['id_event']) ?>"><?php echo($event['nama_event']) ?></a></h5>
                <p class="card-text">
                    <i class="bi bi-calendar"></i> <?php echo($tanggalMulai." - ".$tanggalSelesai) ?>
                    <br>
                    <i class="bi bi-geo-alt"></i> <?php echo($event['tempat']) ?>
                </p>
            </div>
        </div>

        <?php endforeach ?>
    </div>
    <?php include_once('components/tambahEvent.php') ?>
</body>

</html>