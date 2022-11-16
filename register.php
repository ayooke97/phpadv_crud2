<!DOCTYPE html>

<?php
include_once 'config.php';
if (isset($_POST['submit'])) {
    $data = register($_POST);
}
if (isset($_SESSION['value_input'])) {
    $value_input = $_SESSION['value_input'];
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Register</h5>
            </div>
            <div class="card-body justify-content-center">
                <form action="" method="post" class="d-flex flex-column">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" value="<?= isset($value_input['email']) ? $value_input['email'] : '' ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mname">Middle Name<sub>(optional)</sub></label>
                        <input type="text" name="mname" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jk" name="jk">Gender</label>
                        <div class="d-flex gap-2">
                            <input type="radio" name="jk" id="lk" value="Laki-Laki">
                            <label for="lk">Male</label>
                            <input type="radio" name="jk" id="pr" value="Perempuan">
                            <label for="pr">Female</label>
                            <input type="radio" name="jk" id="sc" value="Rahasia">
                            <label for="sc">Secret</label>
                        </div>
                    </div>

                    <button class="mt-4" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>