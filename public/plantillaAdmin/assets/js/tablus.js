$(document).ready(function() {
    $('#basic-datatables').DataTable({
    });

    $('#multi-filter-select').DataTable( {
        "pageLength": 5,
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value=""></option></select>')
                .appendTo( $(column.footer()).empty() )
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                        );

                    column
                    .search( val ? '^'+val+'$' : '', true, false )
                    .draw();
                } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    });

    // Add Row
    $('#add-row').DataTable({
        "pageLength": 8,
    });

    var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

    $('#addRowButton').click(function() {
        $('#add-row').dataTable().fnAddData([
            $("#addNombre").val(),
            $("#addCorreo").val(),
            $("#addGénero").val(),
            $("#addFecha de nacimiento").val(),
            $("#addÁrea").val(),
            $("#addTeléfono").val(),
            $("#addRol").val(),
            action
            ]);
        $('#addRowModal').modal('hide');

    });
});