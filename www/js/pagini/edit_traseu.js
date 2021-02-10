function clickOnStergeTraseu(id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_traseu.php',
            data: {
                id: id
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                location.href = '../trasee.php';
            }
        });
    }
}


function clickOnStergeAsignareClientTraseu(client_id, traseu_id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_asignare_clienti_trasee.php',
            data: {
                client_id: client_id,
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

$(document).ready(function () {
    $("#form_edit_traseu").validate({
        ignore: null,
        ignore: 'input[type="hidden"]',
        rules: {
            nume: {
                required: true,
                minlength: 5
            }
        },
        mesaj: {
            required: " Numele nu poate lipsi",
            minlenght: " Numele trebuie sa fie de cel putin 5 caractere."
        }
    });

    setDataTable('dataTable', [], 25, 1);


    if ($("#adaugat").val() == 1) {
        $.jGrowl("<i class='icon16 i-checkmark-3'></i> Traseul a fost modificat cu succes!", {
            group: 'success',
            position: 'center',
            sticky: false,
            closeTemplate: '<i class="icon16 i-close-2"></i>',
            animateOpen: {
                width: 'show',
                height: 'show'
            }
        });
    }
    ;

    if ($("#adaugat").val() == 2) {
        $.jGrowl("<i class='icon16 i-checkmark-3'></i> Traseul nu a fost modificat!", {
            group: 'error',
            position: 'center',
            sticky: true,
            closeTemplate: '<i class="icon16 i-close-2"></i>',
            animateOpen: {
                width: 'show',
                height: 'show'
            }
        });
    }
    ;
});