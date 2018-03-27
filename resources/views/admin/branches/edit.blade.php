@extends('admin.index')

@section('name')
    Edit Branch
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12">
		<!-- general form elements disabled -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Branch</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
			<form method="POST" action="{{ route('branches.update',$branch->id) }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group col-md-6">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" pattern=".*\S+.*" id="address" name="address" value="{{ $branch->address }}" required>
				</div>

				<div class="form-group col-md-6">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" value="{{ $branch->name }}" required>
				</div>
				  
				<div class="form-group col-md-6">
				    <label for="phone">Phone</label>
				    <input 	type="string" class="form-control" name="phone" id="phone"  minlength="8" value="{{ $branch->phone }}" required>
				</div>

		        <div class="form-group col-md-6">
				    <label for="lat">Latitude</label>
				    <input type="text" class="form-control" id="lat" name="lat" value="{{ $branch->lat }}" required>
				</div>
				<div class="form-group col-md-6">
				    <label for="long">Langtude</label>
				    <input type="text" class="form-control" id="long" name="long" value="{{ $branch->long }}" required>
				</div>
				

				<div class="form-group col-md-6">
				    <label for="company_id">Select branch company</label>
				    <select name="company_id" id="company_id" class="form-control" >
			    		
				    	@foreach($companies as $company)
			    			<option @if($branch->companies->name == $company->name) {!! 'selected' !!} @endif  value="{{ $company->id }}" require>{{ $company->name }}</option>
			    		@endforeach
				    </select>
				</div>
				  <div class="form-group col-md-6">
				  	<button type="submit" class="btn btn-primary">Save Updates</button>
				  </div>
			</form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
	</div>
</div>
@endsection