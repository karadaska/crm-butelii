$(document).ready(function () {
    $("#form_adauga_client").validate({
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
        $.jGrowl("<i class='icon16 i-checkmark-3'></i> Clientul a fost adaugat cu succes!", {
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