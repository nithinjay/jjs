<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Nithin Jay <?php echo date("Y");?></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('index/logout');?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js');?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js');?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('assets/js/sb-admin-datatables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/sb-admin-charts.min.js');?>"></script>
  </div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('#leadtables').DataTable({
        "ajax": {
            url : "<?php echo base_url("index/allleads") ?>",
            type : 'GET',
			paging: false,
			searching: false
        },
    });
});

jQuery('#master').on('click', function(e) {
	if($(this).is(':checked',true))  
	{
		$(".sub_chk").prop('checked', true);  
	}  
	else  
	{  
		$(".sub_chk").prop('checked',false);  
	}  
});
jQuery('.delete_all').on('click', function(e) { 
var allVals = [];  
	$(".sub_chk:checked").each(function() {  
		allVals.push($(this).attr('data-id'));
	});   
	if(allVals.length <=0)  
	{  
		alert("Please select row.");  
	}  
	else {  
		WRN_PROFILE_DELETE = "Are you sure you want to delete this row?";  
		var check = confirm(WRN_PROFILE_DELETE);  
		if(check == true){  			
			var join_selected_values = allVals.join(",");			
			$.ajax({  			  
				type: "POST",  
				url: "<?php echo base_url("index/deletlead") ?>",  
				cache:false,  
				data: 'ids='+join_selected_values,  
				success: function(response)  
				{   
					$("#loading").hide();  
					$("#msgdiv").html(response);
					location.reload();
				}   
			});
			$.each(allVals, function( index, value ) {
				$('table tr').filter("[data-row-id='" + value + "']").remove();
			});
			

		}  
	}  
});
</script>
</html>