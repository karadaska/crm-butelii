function clickOnStergeObservatieLaClient(id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_observatie_la_client.php',
            data: {
                id: id
            },
            dataType: "json",
            success: function (data) {
                // window.location.replace("/edit_client.php?id=" + id);
                location.reload();
            }
        });
    }
}

function clickOnStergeTargetClient(client_id, tip_produs_id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_target_client.php',
            data: {
                client_id: client_id,
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

function clickOnModificaTargetClient(client_id, tip_produs_id, target) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/update_target_client.php',
            data: {
                client_id: client_id,
                tip_produs_id: tip_produs_id,
                target: target
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                location.reload();
            }
        });
    }
}

function clickOnStergeClient(id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_client.php',
            data: {
                id: id
            },
            dataType: "json",
            success: function (data) {
                window.location.replace("/clienti.php");
            }
        });
    }
}
$(document).ready(function () {
    $("#form_edit_client").validate({
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

    $('#judet_id').on('change', function (e) {
        var judet_id = $(this).val();
        $.ajax({
            url: "/ajax/get_localitati.php",
            data: {
                judet_id: judet_id
            },
            success: function (data) {
                $('#lista_localitati').html(data);
                $("#localitate_id").uniform();
            },
            error: function (xhr, status) {
                console.log("ajax error: " + status);
            }
        });
    });


    if ($("#adaugat").val() == 1) {
        $.jGrowl("<i class='icon16 i-checkmark-3'></i> Clientul a fost modificat cu succes!", {
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
        $.jGrowl("<i class='icon16 i-checkmark-3'></i> Clientul nu a fost adaugat!", {
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