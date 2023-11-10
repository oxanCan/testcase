

function addCategoryModal() {
    $.ajax({
        type: "POST",
        url: "controller/categoryController.php",
        data: {
            "addCategoryModal": 1,
        },
        success: function (e) {
            $('#ajaxModal').empty();
            $('#ajaxModal').append(e);
        }
    })
}
function deleteCategoryModal() {
    $.ajax({
        type: "POST",
        url: "controller/categoryController.php",
        data: {
            "deleteCategoryModal": 1,
        },
        success: function (e) {
            $('#ajaxModal').empty();
            $('#ajaxModal').append(e);
        }
    })
}
function deleteCategory() {
    Swal.fire({
        title: 'Kategori Silinsin mi?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#00FF00',
        confirmButtonText: 'Sil',
        cancelButtonText: 'İptal',
        showClass: {
            popup: 'swal2-show',
            backdrop: 'swal2-backdrop-show',
            icon: 'swal2-icon-show'
        },
        hideClass: {
            popup: 'swal2-hide',
            backdrop: 'swal2-backdrop-hide',
            icon: 'swal2-icon-hide'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "controller/categoryController.php",
                data: {
                    "deleteCategory": 1,
                    "id": $("#categorySelect").val(),
                },

                success: function (e) {
                    if (e.trim() === "ok") {
                        Swal.fire({
                            title: 'Başarılı',
                            text: 'Kategori Silindi!',
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#00FF00',
                            confirmButtonText: 'Tamam',

                        }).then((result) => {
                            deleteCategoryModal()
                            $('#ajax').modal('hide');

                        });
                    } else if (e.trim() === "bos") {
                        Swal.fire({
                            title: 'Hata',
                            text: 'Seçili Bir kategori Bulunmuyor!',
                            icon: 'error',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#00FF00',
                            confirmButtonText: 'Tamam',

                        })
                    } else if (e.trim() === "hata") {
                        Swal.fire({
                            title: 'Hata',
                            text: 'Bu kategoriye ait yazılar bulunuyor!',
                            icon: 'error',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#00FF00',
                            confirmButtonText: 'Tamam',
                        })
                    }
                }
            })
        }
    });
}
function addCategory() {
    Swal.fire({
        title: 'Kategori Eklensin mi?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#00FF00',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ekle',
        cancelButtonText: 'İptal',
        showClass: {
            popup: 'swal2-show',
            backdrop: 'swal2-backdrop-show',
            icon: 'swal2-icon-show'
        },
        hideClass: {
            popup: 'swal2-hide',
            backdrop: 'swal2-backdrop-hide',
            icon: 'swal2-icon-hide'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "controller/categoryController.php",
                data: {
                    "addCategory": 1,
                    "categoryName": $("#categoryName").val()
                },
                success: function (e) {
                    if (e.trim() === "ok") {
                        Swal.fire({
                            title: 'Başarılı',
                            text: 'Kategori eklendi!',
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#00FF00',
                            confirmButtonText: 'Tamam',

                        }).then((result) => {
                            $('#ajax').modal('hide');

                        });
                    } else if (e.trim() === "hata") {
                        Swal.fire({
                            title: 'Hata',
                            text: 'Bu kategori bulunuyor!',
                            icon: 'error',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#00FF00',
                            confirmButtonText: 'Tamam',
                        })
                    }else if (e.trim() === "bos") {
                        Swal.fire({
                            title: 'Hata',
                            text: 'Bu alan boş bırakılamaz!',
                            icon: 'error',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#00FF00',
                            confirmButtonText: 'Tamam',
                        })
                    }
                }
            })
        }
    });
}
