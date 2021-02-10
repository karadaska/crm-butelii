function clickOnStergeCantitateMasinaLaIntoarecere(id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_cantitate_masina_intoarcere.php',
            data: {
                id: id
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                location.reload();
            }
        });
    }
}


function clickOnUpdateIndexSosire(id) {
    $.ajax({
        url: '/ajax/adauga_index_plecare.php',
        data: {
            id: id,
            index_sosire: index_sosire
        },
        dataType: "json",
        success: function (data) {
            console.log(data);
            location.reload();
        }
    });
}


