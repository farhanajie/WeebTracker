<?php
include '../../head/session.php';
include '../../head/koneksi.php';

$id_event = $_POST['id_event'];

$query = mysqli_query($koneksi, "DELETE FROM event WHERE id_event = '$id_event'");
if ($query) {
    header("Location: ../../index.php");
} else {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p>Data gagal dihapus!</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
}
?>