



// READ records
function readinmu() {
    $.get("ajax/lista_inmuebles.php", {}, function (data, status) {
        $("#inmuebles_content").html(data);
    });
}

$(document).ready(function () {
    // READ recods on page load
    readinmu(); // calling function
});
