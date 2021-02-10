function ConsumaStoc() {
    confirm("Esti sigur ca vrei sa scazi din stoc?");
}

function clickOnStergeCantitateMasinaTraseu(fisa_id, tip_produs_id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_cantitate_masina_plecare.php',
            data: {
                fisa_id: fisa_id,
                tip_produs_id: tip_produs_id
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                location.reload();
            }
        });
    }
}

function clickOnStergeClientFisaGenerata(fisa_generata_id, client_id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_clienti_fisa_generata.php',
            data: {
                fisa_generata_id: fisa_generata_id,
                client_id: client_id
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                location.reload();
            }
        });
    }
}
