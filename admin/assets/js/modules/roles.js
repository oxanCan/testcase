let table;
let tableX;
function roleTable() {

    if (table) {
        table.destroy()
        table = false
    }

    table = $('#rolesTable').DataTable({
        
        sDom: '<"d-flex justify-content-between align-items-center"lf>rt<"d-flex justify-content-between align-items-center"ip>',
        ajax: {
            type: 'POST',
            url: 'controller/rolesController.php',
            data: {
                "rolePage": 1,
            }
        },
        columns: [
            { data: 'role_id', visible: false },
            { data: 'role_name' },
            { data: 'process' },
        ],
        "language": { "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/tr.json" }
    });

}
roleTable();

function getPageModal(id) {
    $.ajax({
        type: "POST",
        url: "controller/rolesController.php",
        data: {
            "getPageModal": 1,
            "id":id,
        },
        success: function (e) {
            $('#ajaxModal').empty();
            $('#ajaxModal').append(e);
        }
    })
}
function addPermission(id) {

    var IDs = [];
    $('.role:checked').each(function (i) {
        IDs[i] = $(this).val();
    });
    var IDsNot = [];
    $('.role:not(:checked)').each(function (i) {
        IDsNot[i] = $(this).val();
    });
    console.log(IDs);
    Swal.fire({
        title: 'Yetkiler Düzenlensin mi?',
        icon: 'question',
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
                url: "controller/rolesController.php",
                data: {
                    "addPermission": 1,
                    "IDs": IDs,
                    "IDsNot":IDsNot,
                    "id": id,
                },
                success: function (e) {
                    if (e.trim() === "ok") {
                        Swal.fire({
                            title: 'Başarlı!',
                            text: 'Yetkiler Düzenlendi!',
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: true,
                            confirmButtonColor: '#3085d6'
                        }).then((result) => {
                            $('#ajax').modal('hide');
                        });
                    }
                }
            })
        }
    });
}