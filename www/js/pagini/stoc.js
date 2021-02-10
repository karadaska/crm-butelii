$(document).ready(function () {
    $('#form_clienti > div > div > select').on('change', function () {
        $('#form_clienti').submit();
    });
});
