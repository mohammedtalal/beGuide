@extends('admin.index')

@section('name')
    Our Team
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12 ">
	<!-- general form elements disabled -->
		<div class="box box-warning">
			<div class="box-header with-border">
			  <h3 class="box-title">Edit Member</h3>
			</div>
			<div class="box-body">
				<form method="POST" action="{{ route('team.store') }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				<div class="form-group col-md-12">
					<label for="image">Member Image</label>
					<input type="file" class="form-control" id="image" name="image" accept="image/*" required>
				</div>

				<div class="form-group col-md-12">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" pattern=".*\S+.*" name="name" required>
				</div>

				<div class="form-group col-md-12">
				    <label for="position">Position</label>
				    <input type="text" class="form-control" id="position" name="position" pattern=".*\S+.*"  required>
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