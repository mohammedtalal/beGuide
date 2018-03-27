@extends('admin.index')

@section('name')
    Contact Us
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12 ">
	<!-- general form elements disabled -->
		<div class="box box-warning">
			<div class="box-header with-border">
			  <h3 class="box-title">Contact-Us Data</h3>
			</div>
			<div class="box-body">
				<form method="POST" action="{{ route('contact.store') }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				<div class="form-group col-md-6">
					<label for="companyName">Company Name</label>
					<input type="text" class="form-control" id="companyName" name="companyName" required>
				</div>

				<div class="form-group col-md-6">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" name="address" required>
				</div>

				<div class="form-group col-md-12">
				    <label for="description">Description</label>
				    <textarea type="text" class="form-control" id="description" name="description" rows="6" pattern=".*\S+.*" required></textarea>
				</div>

				<div class="form-group col-md-6">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" name="phone" required>
				</div>

				<div class="form-group col-md-6">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>

				<div class="form-group col-md-6">
					<label for="lat">Latitude</label>
					<input type="number" class="form-control" id="lat" name="lat" required>
				</div>

				<div class="form-group col-md-6">
					<label for="long">Longtude</label>
					<input type="number" class="form-control" id="long" name="long" required>
				</div>

				<div class="form-group col-md-12">
					<label for="logo">Site Logo</label>
					<input type="file" class="form-control" id="logo" name="logo" accept="image/*" required>
				</div>

				<div class="form-group col-md-12">
					<button type="submit" class="btn btn-primary">Save Changes</button>
				</div>		  
				</form>
			</div>
		</div>
	</div>	
</div>
@endsection