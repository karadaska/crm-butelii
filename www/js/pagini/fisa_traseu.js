$(document).ready(function () {
    $('#form_fisa_traseu > div  > select').on('change', function () {
        $('#form_fisa_traseu').submit();
    });

    // $dtDataTable = setDataTable('dataTable',
    //     [],50,1
    // );
    // setDataTable('dataTable', false, 15, 5,'desc');
    // setDataTable('dataTable', [], 25, 1)
    // setDataTable('dataTable', [7], 25, 3,'desc');
    setDataTable('dataTable', [4, 5]);
    // setDataTable('dataTable', [4]);
    //setDataTable('dataTable', [0]);
});
