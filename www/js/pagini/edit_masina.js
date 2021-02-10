function clickOnStergeMasina(id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_masina.php',
            data: {
                id: id
            },
            dataType: "json",
            success: function (data) {
                window.location.replace("/masini.php");
            }
        });
    }
}

function clickOnStergeAsignareMasinaTraseu(masina_id, traseu_id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_asignare_masina_traseu.php',
            data: {
                masina_id: masina_id,
                traseu_id: traseu_id
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                location.reload();
            }
        });
    }
}
