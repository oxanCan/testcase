let table;
function blogTable() {

    if (table) {
        table.destroy()
        table = false
    }
    table = $('#blogListTable').DataTable({
        sDom: '<"d-flex justify-content-between align-items-center"lf>rt<"d-flex justify-content-between align-items-center"ip>',
        order: [0, "desc"],
        ajax: {
            url: 'controller/blogListController.php',
            type: 'POST',
            data: {
                "blogTable": 1,
            }
        },
        columns: [
            { data: 'blog_id', visible: false },
            { data: 'category' },
            { data: 'title' },
            { data: 'short_tag' },
            { data: 'process' },
        ],
        "language": { "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/tr.json" }
    });

}
blogTable();
function deleteBlog(blog_id) {
    Swal.fire({
        title: 'Blog silinsin mi?',
        icon: 'question',
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
                data: {
                    'deleteBlog': 1,
                    'blog_id': blog_id
                },
                url: "controller/blogcontroller.php",
                success: function (data) {
                    if (data.trim() === "ok")
                        Swal.fire({
                            title: 'Başarlı!',
                            text: 'Blog yazısı silindi!',
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#3085d6'
                        }).then((result) => {
                            table.ajax.reload();
                        });
                }
            });
        }
    });
}