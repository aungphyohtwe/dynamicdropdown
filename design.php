
<?php 
require 'data.php';
?>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-4">
				<div class="card">
				  <div class="card-header">
				    xxxxx 1
				  </div>
				  <div class="card-body">
				  	<div class="form-group row">
					    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Service</label>
					    <div class="col-sm-8">
					      <select class="form-control form-control-sm" id="select-service">
							<?php foreach ($service as $key => $value) :?>
								<option value="<?php echo $key;?>"><?php echo $value;?></option>
							<?php endforeach; ?>
						  </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Access</label>
					    <div class="col-sm-8">
					      <select class="form-control form-control-sm" id="select-access">
						  </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Unol Data</label>
					    <div class="col-sm-8">
					      <select class="form-control form-control-sm" id="select-unol">
						  </select>
					    </div>
					</div>
				  </div>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
				  <div class="card-header">
				    xxxxx 2
				  </div>
				  <div class="card-body">
				  	<div class="form-group row">
					    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
					    <div class="col-sm-8">
					      <select class="form-control form-control-sm">
							<option>Small select</option>
						  </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
					    <div class="col-sm-8">
					      <select class="form-control form-control-sm">
							<option>Small select</option>
						  </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
					    <div class="col-sm-8">
					      <select class="form-control form-control-sm">
							<option>Small select</option>
						  </select>
					    </div>
					</div>
				  </div>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
				  <div class="card-header">
				    xxxxx 3
				  </div>
				  <div class="card-body">
				  	<div class="form-group row">
					    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
					    <div class="col-sm-8">
					      <select class="form-control form-control-sm">
							<option>Small select</option>
						  </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
					    <div class="col-sm-8">
					      <select class="form-control form-control-sm">
							<option>Small select</option>
						  </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
					    <div class="col-sm-8">
					      <select class="form-control form-control-sm">
							<option>Small select</option>
						  </select>
					    </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
		<div>
		</div>
	</div>
</body>
</html>

<script src="js/app.js" type="text/javascript" charset="utf-8"></script>

