let table;
function blogTable(id) {

    if (table) {
        table.destroy()
        table = false
    }
    table = $('#blogTable').DataTable({
        sDom: '<"d-flex justify-content-between align-items-center"lf>rt<"d-flex justify-content-between align-items-center"ip>',
        order: [0, "desc"],
        ajax: {
            url: 'controller/blogTextController.php',
            type: 'POST',
            data: {
                "blogTable": 1,
                "id":id,
            }
        },
        columns: [
            { data: 'blog_id', visible: false },
            { data: 'title' },
            { data: 'short_tag' },
            { data: 'date' },
            { data: 'process' },
        ],
        "language": { "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/tr.json" }
    });

}
