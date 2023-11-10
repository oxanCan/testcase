function addMod() {
    Swal.fire({
        title: 'Yeni moderatör eklensin mi?',
        icon: 'question',
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
                data: {
                    'addMod': 1,
                    "name": $("#name").val(),
                    "phone": $("#phone").val(),
                    "email": $("#email").val(),
                    "pass": $("#pass").val(),
                },
                url: "controller/modController.php",
                success: function (e) {
                    if (e.trim() === "ok"){
                        Swal.fire({
                            title: 'Başarlı!',
                            text: 'Moderatör eklendi!',
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#3085d6'
                        }).then((result) => {
                            window.location.reload();
                        });
                    }else if(e.trim()==="bos"){
                        Swal.fire({
                            title: 'Hata!',
                            text: 'Boş alan bırakmayınız.',
                            icon: 'error',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#3085d6'
                        })
                    }else if(e.trim()==="hata"){
                        Swal.fire({
                            title: 'Hata!',
                            text: 'Bu email kullanılıyor.',
                            icon: 'error',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#3085d6'
                        })
                    }
                }
            });
        }
    });
}
$("#phone").on("input", function () {
    var sanitizedValue = $(this).val().replace(/[^0-9]/g, "");
    $(this).val(sanitizedValue);
});