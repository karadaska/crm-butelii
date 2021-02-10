function clickOnStergeSofer(id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_sofer.php',
            data: {
                id: id
            },
            dataType: "json",
            success: function (data) {
                window.location.replace("/soferi.php");
            }
        });
    }
}


function clickOnStergeAsignareMasinaSofer(sofer_id, masina_id){
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_asignare_masina_sofer.php',
            data: {
                sofer_id: sofer_id,
                masina_id: masina_id
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                location.reload();
            }
        });
    }
}