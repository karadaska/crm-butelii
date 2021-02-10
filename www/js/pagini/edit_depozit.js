$(document).ready(function () {
    $("#form_edit_depozit").validate({
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

    if ($("#adaugat").val() == 1) {
        $.jGrowl("<i class='icon16 i-checkmark-3'></i> Depozitul a fost modificat cu succes!", {
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
        $.jGrowl("<i class='icon16 i-checkmark-3'></i> Depozitul nu a fost modificat!", {
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