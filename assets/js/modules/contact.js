function addContact() {
    Swal.fire({
        title: 'İletişim bilgileriniz gönderilsin mi?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#00FF00',
        cancelButtonColor: '#d33 ',
        confirmButtonText: 'Evet',
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
                    'addContact': 1,
                    "name": $('#name').val(),
                    "email": $('#email').val(),
                    "phone": $('#phone').val(),
                    "message": $('#message').val()
                },
                url: "controller/contactController.php",
                success: function (e) {
                    if (e.trim() === "ok") {
                        Swal.fire({
                            icon: "success",
                            title: "Başarılı",
                            text: "İletişim Bilgileriniz alınmıştır.",
                            showConfirmButton: true,
                            confirmButtonText: "Tamam",
                            timer: 5000
                        });
                        $('#name').val("");
                        $('#email').val("");
                        $('#phone').val("");
                        $('#message').val("");
                    } else if (e.trim() === 'bos') {
                        Swal.fire({
                            icon: "error",
                            title: "Boş Alan Bırakmayınız.",
                            showConfirmButton: true,
                            confirmButtonText: "Tamam",
                            timer: 1500
                        });
                    }
                }
            });
        }
    });
}