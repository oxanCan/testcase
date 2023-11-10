CKEDITOR.replace('editor');

function addBlog() {
    var category = [];
    $('.category:checked').each(function (i) {
        category[i] = $(this).val();
    });
    Swal.fire({
        title: 'Yeni yazı eklemek istediğinize emin misiniz?',
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
                    "addBlog": 1,
                    "text": CKEDITOR.instances['editor'].getData(),
                    "title": $('#title').val(),
                    "shortTag": $('#shortTag').val(),
                    "category": category
                },
                url: "controller/blogcontroller.php",
                success: function (e) {
                    if (e.trim() === "ok") {
                        Swal.fire({
                            icon: "success",
                            title: "Başarılı",
                            text: "Blog yazısı Eklendi.",
                            showConfirmButton: true,
                            confirmButtonText: "Tamam",
                            timer: 1500
                        
                    }).then((result) => {
                        window.location.reload();
                    });
                        
                    } else if (e.trim() === "bos") {
                        Swal.fire({
                            icon: "error",
                            title: "Hata",
                            text: "Boş alan bırakmayınız.",
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

let table;
function categoryTable() {

    if (table) {
        table.destroy()
        table = false
    }
    table = $('#categoryTable').DataTable({
        sDom: '<lf>',
        order: [0, "desc"],
        ajax: {
            url: 'controller/categoryController.php',
            type: 'POST',
            data: {
                "categoryTable": 1,
            }
        },
        columns: [
            { data: 'id', visible: false },
            { data: 'name' },
            { data: 'process' },
        ],
        "language": { "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/tr.json" }
    });

}
categoryTable();