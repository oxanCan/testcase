<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6 col-md-5">
            <div class="card text-start">

                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Yeni Moderatör Ekle </h3>
                    </div>
                    <div class="card-body">
                        <form id="val_customer2" method="POST">
                            <div class="form-group mb-5">
                                <label for="name" class="form-label">Ad Soyad</label>
                                <input type="text" class="form-control" name="name" id="name">

                            </div>
                            <div class="form-group mb-5">
                                <label class="form-label" for="telefon">Telefon No</label>
                                <input id="phone" class="form-control" name="phone"  maxlength="10">
                            </div>
                            <div class="form-group mb-5">
                                <label for="email" class="form-label">E-Mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group mb-5">
                                <label for="email" class="form-label">Kullanıcı için şifre belirleyin :</label>
                                <input type="password" class="form-control" name="pass" id="pass" maxlength="15">
                            </div>

                    </div>
                    <div class="card-footer">
                        <div class="step-footer text-end">
                            <button type="button" class="btn btn-success float-end m-2"
                                onclick="addMod()">Kaydet</button>
                        </div>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/modules/addmod.js"></script>
