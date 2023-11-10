CKEDITOR.replace('editor');

function editBlog(id) {
    Swal.fire({
        title: 'Hakkımda Yazısı Düzenlensin mi?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#00FF00',
        cancelButtonColor: '#d33',
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
                    'editBlog': 1,
                    'blog_id': id,
                    "text": CKEDITOR.instances['editor'].getData(),
                    "title": $('#title').val(),
                    "short_tag": $('#short_tag').val()
                },
                url: "controller/blogcontroller.php",
                success: function (e) {
                    if (e.trim() === "ok") {
                        Swal.fire({
                            title: 'Başarlı!',
                            text: 'Blog Güncellendi!',
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#3085d6'
                        }).then((result) => {
                            window.location.href = "bloglist";
                        });
                    } else if (e.trim() === "bos") {
                        Swal.fire({
                            title: 'Hata!',
                            text: 'Boş alan bırakmayınız!',
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