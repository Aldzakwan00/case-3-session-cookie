<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Style CSS-->
    <link rel="stylesheet" href="style.css">

    <!--Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Laman Login</title>
  </head>
  <body>


    <!--Start here-->
    <div class="loginform p-3">
      <h3 class="text-center text-primary mt-2 mb-4">Login Here !</h3>
      <div class="container">
        <!--Implementasi HTML Halaman Form-->
        <form>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" id="email" class="form-control" placeholder="Enter email" value = "<?php echo isset($_COOKIE['user']) ? $_COOKIE['user'] : ''; ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" id="">Remember me</label>
          </div>
          <button type="submit" id="button-login" class="btn btn-primary col-lg-12 mt-2 mb-3">Login</button>
        </form>
      </div>
    <!--dialog kesalahan email dan password-->
    </div>
        <div id="dialog" class="dialog-container">
        <div class="dialog-content d-flex justify-content-center align-item-center flex-column">
            <p id="dialog-message"></p>
            <button class="btn btn-primary" id="tutup-dialog">Close</button>
        </div>
    </div>
    <!--End here-->
  

   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>