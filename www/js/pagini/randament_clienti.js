$(document).ready(function () {
    setDataTable('dataTable', [], 25, 1);

    $('#form_actualizeaza_stoc > div > div >  select').on('change', function () {
        $('#form_actualizeaza_stoc').submit();
    });
});
