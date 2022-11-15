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
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" class="">
                    <label for="Judulbuku">Judul Buku</label>
                    <input type="text" name="judulbuku" value="<?= $result['judul_buku'] ?>">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" value="<?= $result['penerbit'] ?>">
                    <label for="th_terbit">Tahun</label>
                    <input type="text" name="th_terbit" value="<?= $result['th_terbit_buku'] ?>">
                    <label for="sinopsis">Sinopsis</label>
                    <input type="text" name="sinopsis" value="<?= $result['sinopsis'] ?>">
                    <button class="mt-4" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>