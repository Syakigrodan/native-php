<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>input Data</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" class="form-control mb-3" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control mb-3" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="job">Job</label>
                        <input type="text" class="form-control mb-3" name="job" placeholder="Job">
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>