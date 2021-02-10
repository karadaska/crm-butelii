$(document).ready(function () {
    $("#form_adauga_traseu").validate({
        ignore: null,
        ignore: 'input[type="hidden"]'
    });

    if ($("#adaugat").val() == 1) {
        $.jGrowl("<i class='icon16 i-checkmark-3'></i> Traseul a fost adaugat cu succes!", {
            group: 'success',
            position: 'center',
            sticky: false,
            closeTemplate: '<i class="icon16 i-close-2"></i>',
            animateOpen: {
                width: 'show',
                height: 'show'
            }
        });
    } ;

    if ($("#adaugat").val() == 2) {
        $.jGrowl("<i class='icon16 i-checkmark-3'></i> Traseul nu a fost adaugat!", {
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