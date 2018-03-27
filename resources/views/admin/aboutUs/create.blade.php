@extends('admin.index')

@section('name')
    Create About-Us Data
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12 ">
	<!-- general form elements disabled -->
		<div class="box box-warning">
			<div class="box-header with-border">
			  <h3 class="box-title">Create Main Data</h3>
			</div>
			<div class="box-body">
				<form method="POST" action="{{ route('admin.about.store') }}" enctype="multipart/form-data">
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
							<textarea type="text" class="form-control" id="description" name="description" rows="6" pattern=".*\S+.*" required></textarea>
						</div>
					</fieldset>
					<!-- End Head Text -->
					<!-- Start Joins section -->
					<fieldset class="form-group">
					<legend>Join Section</legend>
						<div class=" form-group col-md-6">
							<label for="joinHint">Join hint</label>
							<input type="text" class="form-control" id="joinHint" name="joinHint" required>
						</div>
						<div class="form-group col-md-6">
							<label for="joinButton">join Button</label>
							<label for="joinButton">join Button</label>
							<input type="t	ext" class="form-control" id="joinButton" name="joinButton" required>
						</div>
					</fieldset>
					<!-- Start Joins section -->


					<div class="form-group col-md-12">
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>	
@endsection