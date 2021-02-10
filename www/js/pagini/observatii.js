var $dtDataTable;
$(document).ready(function () {
        $dtDataTable = setDataTable('dataTable',
            [],50,1
        );
    }
);

function clickOnStergeObservatieClient(id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_observatie.php',
            data: {
                id: id
            },
            dataType: "json",
            success: function (data) {
                window.location.replace("/observatii.php");
            }
        });
    }
}
