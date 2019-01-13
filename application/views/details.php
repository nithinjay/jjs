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
        <li class="breadcrumb-item active">Lead Details</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
			<i class="fa fa-table"></i> Lead Details
		</div>
        <div class="card-body">
          <div class="table-responsive">
			  <div class="form-group">
				<b>First Name:&nbsp;</b><?php echo $firstname;?>
			  </div>
			  <div class="form-group">
				<b>Last Name:&nbsp;</b><?php echo $lastname;?>
			  </div>
			  <div class="form-group">
				<b>Email:&nbsp;</b><?php echo $email;?>
			  </div>
			  <div class="form-group">
				<b>Phone:&nbsp;</b><?php echo $phone;?>
			  </div>
			  <div class="form-group">
				<b>Address:&nbsp;</b><?php echo $address;?>
			  </div>
			  <div class="form-group">
				<b>Square Foot:&nbsp;</b><?php echo $squarefoot;?>
			  </div>
			  <div class="form-group">
				<b>Added Date:&nbsp;</b><?php echo $added_date;?>
			  </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->