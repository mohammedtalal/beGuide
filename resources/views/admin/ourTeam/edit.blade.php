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
				<form method="POST" action="{{ route('team.update',$team->id) }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				<div class="form-group col-md-12">
					<label for="image">Member Image</label>
					<img style="width: 50px;height: 50px" src="{{ asset('images/teams/'.$team->image) }}" alt="member image">
					
					<input type="file" class="form-control" id="image" name="image" accept="image/*" required>
				</div>


				<div class="form-group col-md-12">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" pattern=".*\S+.*" name="name" value="{{ $team->name }}" required>
				</div>

				<div class="form-group col-md-12">
				    <label for="position">Position</label>
				    <input type="text" class="form-control" id="position" name="position" pattern=".*\S+.*" value="{{ $team->position }}"   required>
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