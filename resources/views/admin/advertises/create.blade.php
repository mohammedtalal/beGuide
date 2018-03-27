@extends('admin.index')

@section('name')
    Create Advertise
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12 ">

	<!-- general form elements disabled -->
		<div class="box box-warning">
			<div class="box-header with-border">
			  <h3 class="box-title">Create New Advertise</h3>
			</div>
			<div class="box-body">
				
				<form method="POST" action="{{ route('advertise.store') }}" enctype="multipart/form-data">

				{{ csrf_field() }}
				<div class="form-group col-md-6">
					<label for="left_adv">left Advertise</label>
					<input type="file" class="form-control"  name="left_adv" accept="image/*" required>
				</div>

				<div class="form-group col-md-6">
					<label for="left_alt">Left Alt</label>
					<input type="text" class="form-control" id="left_alt" name="left_alt" required>
				</div>

				<div class="form-group col-md-6">
					<label for="right_adv">Right Advertise</label>
					<input type="file" class="form-control" id="right_adv" name="right_adv" required>
				</div>

				<div class="form-group col-md-6">
					<label for="right_alt">Right Alt</label>
					<input type="text" class="form-control" id="right_alt" name="right_alt" required>
				</div>
				
				<!-- Main Background image &alt -->
				<div class="form-group col-md-6">
					<label for="mainBG_image">Main Background Image</label>
					<input type="file" class="form-control" id="mainBG_image" name="mainBG_image" required>
				</div>

				<div class="form-group col-md-6">
					<label for="mainBG_alt">Main Background Alt</label>
					<input type="text" class="form-control" id="mainBG_alt" name="mainBG_alt" required>
				</div>

				<!-- Subscribe Background image & alt -->
				<div class="form-group col-md-6">
					<label for="subscribeBG_image">Subscribe Background Image</label>
					<input type="file" class="form-control" id="subscribeBG_image" name="subscribeBG_image" required>
				</div>

				<div class="form-group col-md-6">
					<label for="subscribeBG_alt">Subscribe Background Alt</label>
					<input type="text" class="form-control" id="subscribeBG_alt" name="subscribeBG_alt" required>
				</div>				

				<div class="form-group col-md-12">
					<button type="submit" class="btn btn-primary">Add Advertise</button>
				</div>		  
				</form>
			</div>
		</div>
	</div>	
</div>
@endsection