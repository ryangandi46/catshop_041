<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CATSHOP 041</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link href="<?= base_url('/assets/css/style.css" rel="stylesheet') ?>">
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">

          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">CATSHOP 041</span>
          </div>
          <div class="d-flex align-items-center  px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
            <form action="" method="post" style="width: 23rem;">
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example18">Username</label>
                <input type="text" name="username" id="form2Example18" class="form-control form-control-lg" required />
              </div>
              <div class="form-outline mb-2">
                <label class="form-label" for="form2Example28">Password</label>
                <input type="password" name="password" id="pass" class="form-control form-control-lg" required />
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="flexSwitchCheckChecked" onclick="show()">
                <label class="form-check-label" for="flexSwitchCheckChecked">Show password</label>
              </div>
              
              <div style="color : red;"><?= validation_errors(); ?></div>
              <?= $this->session->flashdata('msg'); ?>
              <div class="pt-1 mb-4">
                <input class="btn btn-primary" type="submit" name="login" value="LOGIN">
              </div>             
            </form>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="<?= base_url('/assets/img/wallpaperbetter3.jpg') ?>" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>
  <script>
    function show() {
      var x = document.getElementById("pass");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
</body>

</html>