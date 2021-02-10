$(document).ready(function () {
    setDataTable('dataTable', [], 25, 1);
    $('#form_clienti > div > div > select').on('change', function () {
        $('#form_clienti').submit();
    });


    $('#judet_id').on('change', function (e) {
        var judet_id = $(this).val();
        $.ajax({
            url: "/ajax/get_localitati.php",
            data: {
                judet_id: judet_id
            },
            success: function (data) {
                $('#lista_localitati').html(data);
                $("#localitate_id").uniform();
            },
            error: function (xhr, status) {
                console.log("ajax error: " + status);
            }
        });
    });
});
