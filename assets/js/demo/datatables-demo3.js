// Call the dataTables jQuery plugin
$(document).ready(function() {
	$('#dataTable').DataTable( {
        "scrollY":        "220px",
        "scrollCollapse": true,
        "paging":         true
    } );
    $('#dataTable1').DataTable( {
        "scrollY":        "220px",
        "scrollCollapse": true,
        "paging":         true
    } );
    $('#dataTable2').DataTable( {
        "scrollY":        "220px",
        "scrollCollapse": true,
        "paging":         true
    } );
});
