<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include_once 'config.php'; ?>
    <br>
    <a class="btn btn-dark mb-4" href="create.php">Create</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Sinopsis</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (show() as $data) : ?>
                <tr>
                    <th scope="row"><?= $data['id_buku'] ?></th>
                    <td><?= $data['judul_buku'] ?></td>
                    <td><?= $data['penerbit'] ?></td>
                    <td><?= $data['th_terbit_buku'] ?></td>
                    <td><?= $data['sinopsis'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit.php?id_buku=<?=$data['id_buku']?>">Edit</a>
                        <a class="btn btn-danger" href="remove.php">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>