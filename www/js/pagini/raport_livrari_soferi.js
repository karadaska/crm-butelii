$(document).ready(function () {
    // setDataTable('dataTable', [7], 25, 1);
    $('#export_livrari_soferi').on('click', function (e) {
        var sofer_id = $('#id').val();
        var data_start = $('#data_start').val();
        var data_stop = $('#data_stop').val();
        location.href='/export_livrari_soferi.php?id=' + sofer_id + '&data_start=' + data_start + '&data_stop=' + data_stop ;
    });
});
