<?php include_once('head/session.php') ?>

<nav class="navbar navbar-expand-sm bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="index.php">WeebTracker</a>
        <div>
            <ul class="navbar-nav mb-0 d-flex">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-bookmark"><i class="bi bi-heart-fill"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-bell-fill"></i></a>
                </li>
                <?php if ($_SESSION['logged_in']) : ?>
                    <li class="nav-item">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-tambah-event">Tambah Event</button>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="backend/admin/logoutBackend.php">Logout</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>

<?php include_once('components/tambahEvent.php') ?>
<?php include_once('components/bookmark.php') ?>