// make console.log safe to use
window.console||(console={log:function(){}});

function setDataTable(id_table, fara_sort, opt_per_page, order_column, order_direction) {
    var per_page = typeof opt_per_page !== 'undefined' ? opt_per_page : 25;
    var order = typeof order_column !== 'undefined' ? order_column : 0;
    var order_direction = typeof order_direction !== 'undefined' ? order_direction : 'asc';
    var ord = [[order, order_direction]];
    $('#' + id_table).dataTable({
        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        "pagingType": "full_numbers",
        "bJQueryUI": false,
        "bAutoWidth": true,
        "stateSave": true,
        "order": ord,
        "iDisplayLength": per_page,
        "oLanguage": {
            "sSearch": "<span>Filtru:</span> _INPUT_",
            "sLengthMenu": "<span>_MENU_ per pagina</span>",
            "oPaginate": {
                "sFirst": "Prima",
                "sLast": "Ultima",
                "sPrevious": "Anterioara",
                "sNext": "Urmatoarea"
            },
            "sInfo": "Afisez de la _START_ la _END_ din _TOTAL_ rezultate",
            "sInfoEmpty": "0 intrari",
            "sEmptyTable": "Lipsa date"
        },
        "oPaginate": {
            "sNext": "Urmator",
            "sPrevious": "Anterior"
        },
        "aoColumnDefs": [
            {'bSortable': false, 'aTargets': fara_sort}
        ]
    });
    $('.dataTables_length select').uniform();
}
// function setDataTable(id_table, opt) {
//     var fara_sort = [];
//     var per_page = 25;
//     var default_sort = 0;
//     var default_sort_order = "asc";
//     var hiddenColumns = [];
//     var no_paging = 0;
//     var paging = true;
//     var info = true;
//     var filter = true;
//
//     if (typeof opt != 'undefined') {
//         fara_sort = (typeof opt['fara_sort'] != 'undefined') ? opt['fara_sort'] : [];
//         per_page = (typeof opt['per_page'] != 'undefined') ? opt['per_page'] : 25;
//         no_paging = (typeof opt['no_paging'] != 'undefined') ? opt['no_paging'] : 0;
//         default_sort = (typeof opt['default_sort'] != 'undefined') ? opt['default_sort'] : 0;
//         default_sort_order = (typeof opt['default_sort_order'] != 'undefined') ? opt['default_sort_order'] : "asc";
//         hiddenColumns = (typeof opt['hiddenColumns'] != 'undefined') ? opt['hiddenColumns'] : [];
//         if (no_paging == 1) {
//             paging = false;
//             info = false;
//         }
//     }
//
//     var $table = $('#' + id_table);
//     if ($table.length > 0) {
//         var $dtTable = $table.DataTable({
//             "bAutoWidth": true,
//             "paging": paging,
//             "info": info,
//             "filter": filter,
//             "iDisplayLength": per_page,
//             "dom": '<"top"lfip<"clear">>rt<"bottom"ip<"clear">>',
//             "oLanguage": {
//                 "sSearch": "<span>Filtru:</span> _INPUT_",
//                 "sLengthMenu": "<span>_MENU_</span>",
//                 "oPaginate": {
//                     "sFirst": "Primul",
//                     "sLast": "Ultimul",
//                     "sPrevious": "Anterioara",
//                     "sNext": "Urmatoarea"
//                 },
//                 "sInfo": "Afisez de la _START_ la _END_ din _TOTAL_ rezultate",
//                 "sInfoEmpty": "0 intrari",
//                 "sEmptyTable": "Lipsa date"
//             },
//             "oPaginate": {
//                 "sNext": "Urmator",
//                 "sPrevious": "Anterior"
//             },
//             columnDefs: [
//                 {
//                     targets: hiddenColumns,
//                     visible: false
//                 }
//             ],
//             initComplete: function () {
//                 $('.dataTables_filter').css({
//                     'float': 'left',
//                     'margin-left': '20px'
//                 });
//                 $('.dataTables_filter').find('input').attr('placeholder', 'Cauta');
//                 $('.dataTables_length select').uniform();
//             }
//         });
//
//         // apply sorting order...
//         $dtTable.order([[default_sort, default_sort_order]]).draw(false);
//
//         return $dtTable;
//     }
//
//     return undefined;
// }
$(document).ready(function() {

    conditionizr({
        ie8: { 
            customScript: "js/excanvas.min.js" 
        }         
    });

    //Init the genyxAdmin plugin
    $.genyxAdmin({
        fixedWidth: false,// make true if you want to use fixed widht instead of fluid version.
        customScroll: false,// Custom scroll for page. true or false 
        responsiveTablesCustomScroll: false,// custom scroll for responsive tables. true or false
        backToTop: true,//show back to top , true or false
        navigation: {
            useNavMore: true, //use arrow for hint. ture or false
            navMoreIconDown: 'i-arrow-down-2', //icon for down state.
            navMoreIconUp: 'i-arrow-up-2',//icon for up state
            rotateIcon: true//rotate icon on hover , true or false
        },
        setCurrent: {
            absoluteUrl: false, //put true if use absolute path links. example http://www.host.com/dashboard instead of /dashboard
            subDir: '' //if you put template in sub dir you need to fill here. example '/html'
        },
        collapseNavIcon: 'i-arrow-left-7', //icon for collapse navigation button
        collapseNavRestoreIcon: 'i-arrow-right-8', //icon for restore navigation button
        rememberNavState: true, //remember if menu is collapsed 
        remeberExpandedSub: true, //remeber expanded sub menu by user
        hoverDropDown: true, //set false if not want to show dropdown on hover ( click instead)
        accordionIconShow: 'i-arrow-down-2',//icon for accordion expand
        accordionIconHide: 'i-arrow-up-2'//icon for accordion hide
    });

    //Disable certain links
    $('a[href^=#]').click(function (e) {
        e.preventDefault()
    })

    //------------- Prettify code  -------------//
    window.prettyPrint && prettyPrint();

    //------------- Bootstrap tooltips -------------//
    $("[data-toggle=tooltip]").tooltip ({});
    $(".tip").tooltip ({placement: 'top'});
    $(".tipR").tooltip ({placement: 'right'});
    $(".tipB").tooltip ({placement: 'bottom'});
    $(".tipL").tooltip ({placement: 'left'});
    //--------------- Popovers ------------------//
    //using data-placement trigger
    $("a[data-toggle=popover]")
      .popover()
      .click(function(e) {
        e.preventDefault()
    });

    $('#fixedwidth').click(function() {
        $.genyxAdmin({fixedWidth: true});
    });

    //init this last don`t change
    //------------- Uniform  -------------//
    //add class .nostyle if not want uniform to style field
    //$("input, textarea, select").not('.nostyle').uniform();
    $("[type='checkbox'], [type='radio'], [type='file'], select").not('.toggle, .select2, .multiselect').uniform();
});

