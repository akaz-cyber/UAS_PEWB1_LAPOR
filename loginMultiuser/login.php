<!DOCTYPE html>
<!-- monggo front end na -->
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>Login</title>
  
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

	<main class="container mt-5">
    <div class="row align-items-center">
    <div class="col-md-6 text-center">
    <img src="../page/img/login.png" alt="Lapor" class="img-fluid" style="height: 80%;">
    </div>
    <div class="col-md-6 text-center" >
        <p ><h2>Silahkan masuk terlebih dahulu untuk melapor</h2></p>
        <form action="../process/process_login.php" method="POST">
            <div class="form-group"> <label for="email">Email:</label> <input type="email" class="form-control"
                    id="email" name="email" required> </div>
            <div class="form-group"> <label for="password">Kata Sandi:</label> <input type="password" class="form-control"
                    id="password" name="password" required> </div> <button type="submit"
                class="btn btn-danger mt-5 w-100">Login</button>
        </form></div>
    </div></div>    
</main>
  
    <?php include '../page/component/footer.php'; ?>
</body>

</html>