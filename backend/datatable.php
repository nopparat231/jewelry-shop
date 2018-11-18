<link rel="stylesheet" type="text/css" href="../dt/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="../dt/jquery-1.12.0.min.js"></script>
<script type="text/javascript" language="javascript" src="../dt/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>	


$(document).ready(function() {

    $('#example').DataTable( {

      
          "aaSorting" :[[0,'asc']],

          "language": {
             "lengthMenu": "Display _MENU_ records",
              "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
              "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
              "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 แถว",
              "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกแถว)",
              "sInfoPostFix":    "",
              "sInfoThousands":  ",",
              "sLengthMenu":     "แสดง _MENU_ แถว",
              "sLoadingRecords": "กำลังโหลดข้อมูล...",
              "sProcessing":     "กำลังดำเนินการ...",
              "sSearch":         "ค้นหา: ",
              "sZeroRecords":    "ไม่พบข้อมูล",
              "oPaginate": {
                "sFirst":    "หน้าแรก",
                "sPrevious": "ก่อนหน้า",
                "sNext":     "ถัดไป",
                "sLast":     "หน้าสุดท้าย"
          },
          "oAria": {
                "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
          }
    }



	  //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]

	});

} );
</script>