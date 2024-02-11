<?php
include '../../head/session.php';
include '../../head/koneksi.php';

$nama_event = $_POST['nama_event'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$tempat = $_POST['tempat'];
$medsos = $_POST['medsos'];
$gambar = "";
$deskripsi = nl2br($_POST['deskripsi']);
$dir = "img/event/";

// HANDLING FOTO
$namafoto = $_FILES['gambar']['name'];
$tmpfoto = $_FILES['gambar']['tmp_name'];
$namafotobaru = str_replace(" ", "", $tanggal_mulai) . "-" . str_replace(" ", "", $nama_event);
echo($namafotobaru);

if ($namafoto) {
    if (file_exists("../../" . $dir . $namafotobaru . ".jpg")) unlink("../../" . $dir . $namafotobaru . ".jpg");
    move_uploaded_file($tmpfoto, "../../" . $dir . $namafotobaru . ".jpg");
    $gambar = $dir . $namafotobaru . ".jpg";
}

// INSERT DATA EVENT
$query = mysqli_query($koneksi, "INSERT INTO event (nama_event, tanggal_mulai, tanggal_selesai, tempat, medsos, gambar, deskripsi) VALUES ('$nama_event', '$tanggal_mulai', '$tanggal_selesai', '$tempat', '$medsos', '$gambar', '$deskripsi')");


if ($query) {
    header("Location: ../../index.php");
} else {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p>Data gagal ditambahkan!</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
}

?>