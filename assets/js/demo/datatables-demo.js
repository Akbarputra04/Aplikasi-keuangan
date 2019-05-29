// Call the dataTables jQuery plugin
$(document).ready(function() {
	$('#dataTable').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
});
