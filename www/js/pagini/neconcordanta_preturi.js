$(document).ready(function () {
    setDataTable('dataTable', [], 25, 1);
    $('#form_neconcordanta_preturi > div > div >  select').on('change', function () {
        $('#form_neconcordanta_preturi').submit();
    });
});
