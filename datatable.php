

<link href="dt/jquery.dataTables.min.js" rel="stylesheet">
<link href="dt/jquery.dataTables.min.css" rel="stylesheet"/>
<link href="dt/jquery-1.12.0.min.js" rel="stylesheet"/>


<script>		
	$(document).ready(function() {

		if ( $.fn.dataTable.isDataTable( '#example' ) ) {

			table = $('#example').DataTable();

		}
		else {
			table = $('#example').DataTable( {
				paging: false
			} );
		}

	} );



</script>