<?php
include '../../head/session.php';
include '../../head/koneksi.php';

$id_event = $_POST['id_event'];
$nama_event = $_POST['nama_event'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$tempat = $_POST['tempat'];
$medsos = $_POST['medsos'];
$gambar = $_POST['gambar_default'];
$deskripsi = nl2br($_POST['deskripsi']);
$dir = "img/event/";

// HANDLING FOTO
if(isset($_POST['gambar'])) {
    $namafoto = $_FILES['gambar']['name'];
    $tmpfoto = $_FILES['gambar']['tmp_name'];
    $namafotobaru = str_replace(" ", "", $tanggal_mulai) . "-" . str_replace(" ", "", $nama_event);
    echo($namafotobaru);

    if ($namafoto) {
        if (file_exists("../../" . $dir . $namafotobaru . ".jpg")) unlink("../../" . $dir . $namafotobaru . ".jpg");
        move_uploaded_file($tmpfoto, "../../" . $dir . $namafotobaru . ".jpg");
        $gambar = $dir . $namafotobaru . ".jpg";
    }
}

$query = mysqli_query($koneksi, "UPDATE event SET nama_event='$nama_event', tanggal_mulai='$tanggal_mulai', tanggal_selesai='$tanggal_selesai', tempat='$tempat', medsos='$medsos', gambar='$gambar', deskripsi='$deskripsi' WHERE id_event='$id_event'");

header("Location: ../../detail.php?id_event=" . $id_event);

?>