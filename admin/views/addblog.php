<div class="card shadow">
    <div class="card-body">
        <div class="card-header">
            <h4 class="font-weight-bold text-primary text-center">Yeni Yazı Oluştur</h4>
        </div>
        <form>
            <div class="container">
                <div class="row">
                    <div class="col m-5">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title" placeholder=" " name="title">
                            <label for="title">Başlık Giriniz</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="shortTag" placeholder=" " name="shortTag">
                            <label for="shortTag">Kısa Açıklama</label>
                        </div>
                    </div>
                    <div class="col m-2">
                        <div class="form-group" id="categorySelection">
                            <h5 class="font-weight-bold text-primary text-center">Kategori Seç</h5>
                            <table class="table table-striped" id="categoryTable">
                                <tr>
                                    <th class="d-none"></th>
                                    <th scope="col">Kategori Adı</th>
                                    <th scope="col"> Seçim</th>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>


        </form>
        <h4 class="font-weight-bold text-primary text-center">Blog Yazısı</h4>
        <textarea name="editor" id="editor" class="form-control" rows="10"></textarea>
        <div class="card-footer text-end">
            <button type="button" class="btn btn-primary" onclick="addBlog()" id="submitButton">Kaydet</button>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/modules/addBlog.js"></script>
