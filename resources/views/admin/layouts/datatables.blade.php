<script type="text/javascript">
$(document).ready(function(){

 if ($('.emailTemplateDatatable').length) {
    $('.emailTemplateDatatable').DataTable({
        bLengthChange: true,
        "bDestroy": true,
        language: {
            search: "<i class='ti-search'></i>",
            searchPlaceholder: 'Quick Search',
            paginate: {
                next: "<i class='ti-arrow-right'></i>",
                previous: "<i class='ti-arrow-left'></i>"
            }
        },
        "bPaginate": true,
        "bStateSave": true,
         "aaSorting": [[ 0,1,2,3, "asc" ]],
         "columnDefs": [
            { responsivePriority: 1, targets: 4 },
            { "bSortable": false, "aTargets": [4] },
            ],
        responsive: true,
        searching: true,
        'lengthMenu':[[10,50,100,250,500,], [ 10,50,100,250,500, "All"]],
        // lengthChange: true,
    /*      buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]*/
         dom:"'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip", buttons:[ /*{
            extend: "copy", className: "btn-sm prints"
        }
        ,*/ {
            extend: "csv", title: "Email Template List", exportOptions: {
                columns: [':visible :not(:last-child)'],
                       }, className: "btn-sm prints",footer: true,
        }
        , {
            extend: "excel", title: "Email Template List", exportOptions: {
                columns: [':visible :not(:last-child)'],
                       },className: "btn-sm prints",footer: true,
        }
        , {
            extend: "print",exportOptions: {
                columns: [':visible :not(:last-child)'],
                       },title: "<center>Email Template List</center>", className: "btn-sm prints",footer: true, 
        }  
        ],
    });
}
 if ($('.cmsTemplateDatatable').length) {
    $('.cmsTemplateDatatable').DataTable({
        bLengthChange: true,
        "bDestroy": true,
        language: {
            search: "<i class='ti-search'></i>",
            searchPlaceholder: 'Quick Search',
            paginate: {
                next: "<i class='ti-arrow-right'></i>",
                previous: "<i class='ti-arrow-left'></i>"
            }
        },
        "bPaginate": true,
        "bStateSave": true,
         "aaSorting": [[ 0,1, "asc" ]],
         "columnDefs": [
            { responsivePriority: 1, targets: 2 },
            { "bSortable": false, "aTargets": [2] },
            ],
        responsive: true,
        searching: true,
        'lengthMenu':[[10,50,100,250,500,], [ 10,50,100,250,500, "All"]],
        // lengthChange: true,
    /*      buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]*/
         dom:"'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip", buttons:[ /*{
            extend: "copy", className: "btn-sm prints"
        }
        ,*/ {
            extend: "csv", title: "CMS Template List", exportOptions: {
                columns: [':visible :not(:last-child)'],
                       }, className: "btn-sm prints",footer: true,
        }
        , {
            extend: "excel", title: "CMS Template List", exportOptions: {
                columns: [':visible :not(:last-child)'],
                       },className: "btn-sm prints",footer: true,
        }
        , {
            extend: "print",exportOptions: {
                columns: [':visible :not(:last-child)'],
                       },title: "<center>CMS Template List</center>", className: "btn-sm prints",footer: true, 
        }  
        ],
    });
}
    $('div.dataTables_filter input').addClass('datatableSearchBox');
    $('div.dataTables_length select').addClass('datatableSelectBox');
});
       
</script>