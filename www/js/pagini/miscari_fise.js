$(document).ready(function () {
    // setDataTable('dataTable', [7], 25, 1);

    $('#form_miscari_fise > div > div >  select').on('change', function () {
        $('#form_miscari_fise').submit();
    });
});
