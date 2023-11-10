function register() {
    Swal.fire({
        title: 'Kayıt Bilgilerinizi Onaylıyor musunuz?',
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
                    'register': 1,
                    "name": $('#name').val(),
                    "email": $('#email').val(),
                    "password": $('#password').val(),
                    "password2": $('#password2').val()
                },
                url: "controller/authController.php",
                success: function (e) {
                    if (e.trim() === "ok") {
                        Swal.fire({
                            icon: "success",
                            title: "Başarılı",
                            text: "İletişim Bilgileriniz alınmıştır.",
                            showConfirmButton: true,
                            confirmButtonText: "Tamam",
                            timer: 1500

                        }).then((result) => {
                            window.location.href = "login";
                        });

                    } else if (e.trim() === 'bos') {
                        Swal.fire({
                            icon: "error",
                            title: "Boş Alan Bırakmayınız.",
                            showConfirmButton: true,
                            confirmButtonText: "Tamam",
                            timer: 1500
                        });
                    } else if (e.trim() === 'hataPass') {
                        Swal.fire({
                            icon: "error",
                            title: "Şifreler uyuşmuyor.",
                            showConfirmButton: true,
                            confirmButtonText: "Tamam",
                            timer: 1500
                        });
                    } else if (e.trim() === 'hata') {
                        Swal.fire({
                            icon: "error",
                            title: "Bu mail adresi kullanılıyor!",
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
function login() {

    $.ajax({
        type: "POST",
        data: {
            'login': 1,
            "email": $('#email').val(),
            "password": $('#password').val(),
        },
        url: "controller/authController.php",
        success: function (e) {
            if (e.trim() === "ok") {
                Swal.fire({
                    icon: "success",
                    title: "Başarılı",
                    text: "Giriş Yapılıyor.",
                    showConfirmButton: true,
                    confirmButtonText: "Tamam",
                    timer: 1500

                }).then((result) => {
                    window.location.href = "";
                });

            } else if (e.trim() === 'bos') {
                Swal.fire({
                    icon: "error",
                    title: "Boş Alan Bırakmayınız.",
                    showConfirmButton: true,
                    confirmButtonText: "Tamam",
                    timer: 1500
                });
            } else if (e.trim() === 'hata') {
                Swal.fire({
                    icon: "error",
                    title: "Kullanıcı adı veya şifre yanlış!",
                    showConfirmButton: true,
                    confirmButtonText: "Tamam",
                    timer: 1500
                });
            }
        }
    });
}
function logout() {
    Swal.fire({
        title: 'Çıkış yapılsın mı?',
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
                    "logout": 1,
                },
                url: "controller/authController.php",
                success: function (e) {
                    if (e.trim() === "ok") {
                        Swal.fire({
                            icon: "success",
                            title: "Başarılı",
                            text: "Çıkış Yapılıyor.",
                            showConfirmButton: true,
                            confirmButtonText: "Tamam",
                            timer: 1500
                        }).then((result) => {
                            window.location.href = "";
                        });
                    }
                }
            })
        }
    });
}
