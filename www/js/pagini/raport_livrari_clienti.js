$(document).ready(function () {
    $('#form_raport_livrari_clienti > div > div >  select').on('change', function () {
        $('#form_raport_livrari_clienti').submit();
    });
});
