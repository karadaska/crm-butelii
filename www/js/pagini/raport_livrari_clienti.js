$(document).ready(function () {
    $('#form_raport_livrari_clienti > div > div >  select').on('change', function () {
        $('#form_raport_livrari_clienti').submit();
    });

    $('#data_start_datepicker').datepicker({
        autoclose: true
    });

    $('#data_stop_datepicker').datepicker({
        autoclose: true
    });

});
