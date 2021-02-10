$(document).ready(function () {
    $('#depozit_id').on('change', function (e) {
        var depozit_id = $(this).val();
        $.ajax({
            url: "/ajax/get_trasee.php",
            data: {
                depozit_id: depozit_id
            },
            success: function (data) {
                $('#lista_trasee').html(data);
                $("#traseu_id").uniform();
            },
            error: function (xhr, status) {
                console.log("ajax error: " + status);
            }
        });
    });
});