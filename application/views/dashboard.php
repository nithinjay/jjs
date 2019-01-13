<div class="content-wrapper">
    <div class="container-fluid">
		<p style="color:green;" id="flash_msg"><?php echo $this->session->flashdata('message_name');?></p>
    <script> 
        setTimeout(function() {
            $('#flash_msg').hide('fast');
        }, 5000);
    </script>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Leads</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
			<i class="fa fa-table"></i> Leads
			<a href="<?php echo base_url();?>">
				<button style="float: right !important;" type="button" class="right btn btn-success">Add</button>
			</a>
		</div>
        <div class="card-body">
		  
		  <button type="button" class="delete_all right btn btn-danger">Delete Selected</button>
		  <br><br>
          <div class="table-responsive">
            <table class="table table-bordered" id="leadtables" width="100%" cellspacing="0">
              <thead>
                <tr>
				  <th><input type="checkbox" id="master"></th>
                  <th>SI No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Home sqft</th>
                  <th>Added Date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
				  <th><input type="checkbox" id="master"></th>
                  <th>SI No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Home sqft</th>
                  <th>Added Date</th>
                </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->