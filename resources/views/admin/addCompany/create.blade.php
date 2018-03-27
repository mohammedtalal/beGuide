@extends('admin.index')

@section('name')
    Add Company Data
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12 ">
	<!-- general form elements disabled -->
		<div class="box box-warning">
			<div class="box-header with-border">
			  <h3 class="box-title">Add-Company Data</h3>
			</div>
			<div class="box-body">
				<form method="POST" action="{{ route('admin.addCompany.store') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<!-- Start Head Text   -->
					<fieldset class="form-group">
						<legend>Heading Section</legend>
						<div class="form-group col-md-12">
							<label for="headingText">Heading Text</label>
							<input type="text" class="form-control" id="headingText" name="headingText"  required>
						</div>
						<div class="form-group col-md-12">
							<label for="description">Description about us</label>
							<textarea type="text" class="form-control" id="description" name="description" rows="4" pattern=".*\S+.*" required></textarea>
						</div>
					</fieldset>
					<!-- End Head Text -->
					<!-- Start Left Section section -->
					<fieldset class="form-group">
					<legend>Left Section</legend>
						<div class=" form-group col-md-12">
							<label for="leftHeadingText">left Heading Text</label>
							<input type="text" class="form-control" id="leftHeadingText" name="leftHeadingText" required>
						</div>
						<div class="form-group col-md-12">
							<label for="leftDescription">Left Description</label>
							<textarea type="text" class="form-control" id="leftDescription" name="leftDescription" rows="6" pattern=".*\S+.*" required></textarea>
						</div>
					</fieldset>
					<!-- Start Left Section section -->

					<div class="form-group col-md-12">
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>	
@endsection