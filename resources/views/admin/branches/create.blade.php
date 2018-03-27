@extends('admin.index')

@section('name')
    Create Branch
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12 ">
	<!-- general form elements disabled -->
		<div class="box box-warning">
			<div class="box-header with-border">
			  <h3 class="box-title">Create New Branch</h3>
			</div>
			<div class="box-body">
				<form method="POST" action="{{ route('branches.store') }}" enctype="multipart/form-data">

				{{ csrf_field() }}
				<div class="form-group col-md-6">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" name="address" required>
				</div>

				<div class="form-group col-md-6">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" required>
				</div>

				<div class="form-group col-md-6">
					<label for="lat">Latitude</label>
					<input type="number" class="form-control" id="lat" name="lat" required>
				</div>

				<div class="form-group col-md-6">
					<label for="long">Longtude</label>
					<input type="number" class="form-control" id="long" name="long" required>
				</div>

				<div class="form-group col-md-6">
					<label for="company_id">Select company of branch</label>
					<select name="company_id" id="company_id" class="form-control">
						<option value="" selected >please select company</option>	
							@foreach($companies as $company)
							<option value="{{ $company->id }}" require>{{ $company->name }}</option>
							@endforeach
					</select>
				</div>

				<div  id="dynamic-field">
					<div class="form-group col-md-6" >
					    <label for="phone">Phone</label>
					    <button type="button" class="btn pull-right btn-defualt btn-sm" id="add-more" >
					    	<i class="glyphicon glyphicon-plus"></i>
					    </button> 
					    <input type="tel" class="form-control" id="phone" name="phone[]" pattern="[0-9]{11}" minlength="8" maxlength="11" required>
					</div>
				</div>

				<div class="form-group col-md-12">
					<button type="submit" class="btn btn-primary">Add Branch</button>
				</div>		  
				</form>
			</div>
		</div>
	</div>	
</div>
@endsection