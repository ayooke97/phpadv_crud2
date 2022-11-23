<?php include_once 'config.php';

if (isset($_POST['submit'])) {
    login($_POST);
}
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include_once 'navbar.php'; ?>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" class="mb-3">
                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" value="<?= isset($email['email']) ? $email['email'] : '' ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" value="" class="form-control">
                    </div>
                    <button class="mt-4 btn btn-primary" type="submit" name="submit">Submit</button>
                </form>
                <a href="register.php">Belum daftar?</a>
            </div>
        </div>
    </div>
</body>

</html>