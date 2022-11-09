<!doctype html>
<?php
    include_once 'config.php';
    if(isset($_POST['btn_delete'])){
        remove($_POST['input_id']);
    }
    if(isset($_GET['sort'])){
        $sort = $_GET['sort'];
        echo $sort;
    }
?>
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
    <div class="d-flex">
        <a class="btn btn-dark mb-4" href="create.php">Create</a>
        <form action="" method="get">
        <select name="sort" id="sort">
            <option value=""selected>Sort by...</option>
            <option value="judul_buku">Judul</option>
            <option value="th_terbit_buku">Tahun</option>
            <option value="penerbit">Penerbit</option>
        </select>
        
        </form>
        
    </div>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Sinopsis</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 1; 
            foreach (show() as $data) : ?>
                <tr>
                    <th scope="row">
                        <?=$i?>
                    </th>
                    <td><?= $data['judul_buku'] ?></td>
                    <td><?= $data['penerbit'] ?></td>
                    <td><?= $data['th_terbit_buku'] ?></td>
                    <td><?= $data['sinopsis'] ?></td>
                    <td>
                        <form action="" method="post">
                        <a class="btn btn-warning" href="edit.php?id_buku=<?=base64_encode($data['id_buku'])?>">Edit</a>
                            <input type="hidden" value="<?= $data['id_buku'] ?>" name="input_id">
                            <button type="submit" class="btn btn-danger" name="btn_delete">Delete</button>
                        </form>
                    </td>
                </tr>
                
            <?php $i++; endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
</script>
</html>