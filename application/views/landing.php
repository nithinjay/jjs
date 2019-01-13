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
        <li class="breadcrumb-item active">Add Lead</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
			<i class="fa fa-table"></i> Add Lead
		</div>
        <div class="card-body">
          <div class="table-responsive">
				<?php $lead_form_attributes = array('name' => 'lead_form', 'id' => 'lead_form'); ?>
				<?php echo form_open_multipart("", $lead_form_attributes); ?>
				  <div class="form-group">
					<label for="fname">First Name</label>
					<input type="name" class="form-control" id="fname" name="fname" aria-describedby="nameHelp" placeholder="Enter  firstname">
					<span class="error"><?php echo form_error('fname'); ?></span>
				  </div>
				  <div class="form-group">
					<label for="lname">Last Name</label>
					<input type="name" class="form-control" id="lname" name="lname" aria-describedby="nameHelp" placeholder="Enter lastname">
					<span class="error"><?php echo form_error('lname'); ?></span>
				  </div>
				  <div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="nameHelp" placeholder="Enter email">
					<span class="error"><?php echo form_error('email'); ?></span>
				  </div>
				  <div class="form-group">
					<label for="phone">Phone Number</label>
					<input type="number" class="form-control" id="phone" name="phone" aria-describedby="nameHelp" placeholder="Enter phone">
					<span class="error"><?php echo form_error('phone'); ?></span>
				  </div>
				  <div class="form-group">
					<label for="address">Address</label>
					<textarea class="form-control" id="address" name="address" aria-describedby="nameHelp" placeholder="Enter address"></textarea>
					<span class="error"><?php echo form_error('address'); ?></span>
				  </div>
				  <div class="form-group">
					<label for="squarefoot">Home square footage</label>
					<input type="number" class="form-control" id="squarefoot" name="squarefoot" aria-describedby="nameHelp" placeholder="Enter square foot (Sq. Ft.)">
					<span class="error"><?php echo form_error('squarefoot'); ?></span>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				<?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->