<?php include "views/partials/head.php";?>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black shadow" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="d-flex justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <h1 class="text-center fw-bold mb-5 mx-1 mx-md-4 mt-4">Kayıt Ol</h1>
                <form class="mx-1 mx-md-4">
                  <div class="mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-floating">
                      <input type="name" class="form-control" id="name" placeholder="Ad Soyad">
                      <label for="form3Example1c">Ad Soyad</label>
                    </div>
                  </div>

                  <div class="mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-floating">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                      <label for="form3Example3c">Email</label>
                    </div>
                  </div>

                  <div class="mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-floating">
                      <input type="password" class="form-control" id="password" placeholder="Şifre">
                      <label for="form3Example4c">Şifre</label>
                    </div>
                  </div>

                  <div class="mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-floating">
                      <input type="password" class="form-control" id="password2" placeholder="Şifre Tekrarı">
                      <label for="form3Example4cd">Şifre Tekrar</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-4">
                    <button type="button" class="btn btn-dark btn-lg shadow" onclick="register()">Kayıt Ol</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="assets/js/modules/auth.js"></script>

