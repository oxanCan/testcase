function blogData(){
    $.ajax({
        type: "POST",
        url: "controller/blogController.php",
        data: {
            "blogData": 1,
        },
        success: function (e) {
            $('#getBlog').empty();
            $('#getBlog').append(e);
        }
    })
}
blogData();