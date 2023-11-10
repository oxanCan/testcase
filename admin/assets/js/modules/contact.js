
function checkContact(id) {
    Swal.fire({
        title: 'İletişim Formunun durumu değiştirilsin mi?',
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
                    'checkContact': 1,
                    'contact_id': id
                },
                url: "controller/contactController.php",
                success: function (e) {
                    if (e.trim() === "ok")
                        sweetAlert('Başarılı', 'Onaylandı', 'success');
                    setTimeout(function () {
                        window.location.reload()
                    }, 1000);
                }
            });
        }
    });
}
let table;
function contactTable() {

    if (table) {
        table.destroy()
        table = false
    }
    table = $('#contactTable').DataTable({
        sDom: '<"d-flex justify-content-between align-items-center"lf>rt<"d-flex justify-content-between align-items-center"ip>',
        order: [0, "desc"],
        ajax: {
            url: 'controller/contactController.php',
            type: 'POST',
            data: {
                "contactTable": 1,
            }
        },
        columns: [
            { data: 'contact_id', visible: false },
            { data: 'name' },
            { data: 'email' },
            { data: 'phone' },
            { data: 'message' },
            { data: 'process' },
        ],
        "language": { "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/tr.json" }
    });

}
contactTable();