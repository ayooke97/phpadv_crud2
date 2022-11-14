<!DOCTYPE html>
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
            <div class="card-body">
                <form action="" method="post" class="d-flex flex-column w-25">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="" class="form-control">              
                    </div>
                    <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="text" name="pass" value="">
                    </div>
                    <label for="pass">Password</label>
                    <input type="text" name="pass" value="">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" value="">
                    <label for="mname">Middle Name<sub>(optional)</sub></label>
                    <input type="text" name="mname" value="">
                    <label for="lname">Last Name</label>
                    <input type="text" name="sinopsis" value="">
                    <label for="jk" name="jk">Gender</label>
                    <div class="d-flex gap-2">
                        <input type="radio" name="lk" id="" value="Laki-Laki">
                        <label for="lk">Male</label>
                        <input type="radio" name="pr" id="" value="Perempuan">
                        <label for="pr">Female</label>
                        <input type="radio" name="sc" id="" value="Rahasia">
                        <label for="sc">Secret</label>
                    </div>

                    <button class="mt-4" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>