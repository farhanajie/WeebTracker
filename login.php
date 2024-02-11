<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeebTracker</title>
    <?php
        include_once('head/assets.php');
        include_once('head/session.php');
        if ($_SESSION['logged_in']) header('Location: index.php');
    ?>
</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" id="form-login">
                    <form action="backend/admin/loginBackend.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-warning">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>