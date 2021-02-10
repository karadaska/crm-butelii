// function clickOnStergeAsignareClientTraseu(id) {
//     if (confirm('sigur?')) {
//         $.ajax({
//             url: '/ajax/sterge_asignare_clienti_trasee.php',
//             data: {
//                 id: id
//             },
//             dataType: "json",
//             success: function (data) {
//                 console.log(data);
//                 location.reload();
//             }
//         });
//     }
// }

$(document).ready(function () {
    $("#form_asignari_clienti_trasee").validate({
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