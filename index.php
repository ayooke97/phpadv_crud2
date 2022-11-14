<!doctype html>
<?php
    include_once 'config.php';
    $data = show();
    if(isset($_POST['btn_delete'])){
        remove($_POST['input_id']);
    }
    if(isset($_POST['buttonSort'])){
        $sort = $_POST['sort'];
        echo $sort;
        $data = show($sort);
        // var_dump($_GET);
        // die;     
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
        <form action="" method="post">
        <select name="sort" id="sort">
            <option value=""selected>Sort by...</option>
            <option value="judul_buku">Judul</option>
            <option value="th_terbit_buku">Tahun</option>
            <option value="penerbit">Penerbit</option>
        </select>
        <button type="submit" name="buttonSort">Sort</button>
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
            foreach ($data as $d) : ?>
                <tr>
                    <th scope="row">
                        <?=$i?>
                    </th>
                    <td><?= $d['judul_buku'] ?></td>
                    <td><?= $d['penerbit'] ?></td>
                    <td><?= $d['th_terbit_buku'] ?></td>
                    <td><?= $d['sinopsis'] ?></td>
                    <td>
                        <form action="" method="post">
                        <a class="btn btn-warning" href="edit.php?id_buku=<?=base64_encode($d['id_buku'])?>">Edit</a>
                            <input type="hidden" value="<?= $d['id_buku'] ?>" name="input_id">
                            <button type="submit" class="btn btn-danger" name="btn_delete">Delete</button>
                        </form>
                    </td>
                </tr>
                
            <?php $i++; endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    // $(document).ready(function(){
    // //   $("#sort").on('change', ) 
    // $("#sort").change(function (e) { 
    //     e.preventDefault();
    //     let sort = $("#sort").val();
    //     $.ajax({
    //         type: "GET",
    //         url: "getdata.php",
    //         dataType: "html",
    //         success: function (response) {
    //             console.log(response);
    //         }
    //     });
    // }); 
    // })
    
</script>
</body>

</html>