function logout() {
    $.ajax({
        type: "POST",
        data: {
            'logout': 1
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
                    $('#logoutModal').modal('hide');
                    window.location.href="";
                });
            }
        }
    })

}