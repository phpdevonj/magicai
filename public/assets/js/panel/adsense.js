
$(function () {
    if($('#adsTable').length){
        "use strict";
        var table = $('#adsTable').DataTable({
            "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
            responsive: true,
            colReorder: true,
            language: {
                "emptyTable": "<div>No ads created yet</div>",
                search: "<i class='fa fa-search search-icon'></i>",
                lengthMenu: '_MENU_ ',
                paginate : {
                    first    : '<i class="fa fa-angle-double-left"></i>',
                    last     : '<i class="fa fa-angle-double-right"></i>',
                    previous : '<i class="fa fa-angle-left"></i>',
                    next     : '<i class="fa fa-angle-right"></i>'
                }
            },
            pagingType : 'full_numbers',
            columns: [
                {
                    data: 'custom-type',
                    name: 'custom-type',
                    orderable: false,
                    searchable: true
                },
                {
                    data: 'custom-status',
                    name: 'custom-status',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'updated-on',
                    name: 'updated-on',
                    orderable: false,
                    searchable: true
                },
                {
                    data: 'actions',
                    name: 'actions',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    }
});
	