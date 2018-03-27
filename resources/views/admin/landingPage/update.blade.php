@extends('admin.index')

@section('name')
    Create Home Page Data
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12 ">
	<!-- general form elements disabled -->
		<div class="box box-warning">
			<div class="box-header with-border">
			  <h3 class="box-title">Create Home Page Data</h3>
			</div>
			
			<div class="box-body">
				<form method="POST" action="{{ route('landingPage.store') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<!-- Start Head Text   -->
					<fieldset class="form-group">
						<legend>Heading Section</legend>
						<div class="form-group col-md-6">
							<label for="headingText">Heading Text</label>
							<input type="text" class="form-control" id="headingText" name="headingText" value="{{ $mainData['headingText'] }}"  required>
						</div>
						<div class="form-group col-md-6">
							<label for="searchHint">Search hint</label>
							<input type="text" class="form-control" id="searchHint" value="{{ $mainData['searchHint'] }}" name="searchHint" >
						</div>
					</fieldset>
					<!-- End Head Text -->
					<!-- Start Best Clients section -->
					<fieldset class="form-group">
					<legend>Best Client Section</legend>
						<div class=" form-group col-md-6">
							<label for="BestclientText">Head Best Client Text</label>
							<input type="text" class="form-control" id="BestclientText" name="BestclientText" value="{{ $mainData['BestclientText'] }}" required>
						</div>
						<div class="form-group col-md-6">
							<label for="client-text">Best Client bio</label>
							<input type="text" class="form-control" id="clientBio" name="BestclientBio" value="{{ $mainData['BestclientBio'] }}" required>
						</div>
					</fieldset>
					<!-- Start Best Clients section -->

					<!-- Start New Clients section -->
					<fieldset class="form-group">
					<legend>new Clients Section</legend>
						<div class="form-group col-md-6">
							<label for="new-clients">New Clients Text</label>
							<input type="text" class="form-control" id="newClientsText" name="newClientText" value="{{ $mainData['newClientText'] }}" required>
						</div>
						<div class="form-group col-md-6">
							<label for="new-clients">New Clients bio</label>
							<input type="text" class="form-control" id="newClientsBio" name="newClientBio" value="{{ $mainData['newClientBio'] }}" required>
						</div>
					</fieldset>
					<!-- End New Clients section -->

					<!-- Start Subscribe section   -->
					<fieldset class="form-group">
					<legend>Subscribe Section</legend>
						<div class="form-group col-md-12">
							<label for="subscribeHeadingText">Subscribe heading</label>
							<input type="text" class="form-control" id="subscribeHeadingText" name="subscribeHeadingText" value="{{ $mainData['subscribeHeadingText'] }}"  required>
						</div>
					</fieldset>
					<!-- End Subscribe section -->

					<!-- start Footer section -->
					<fieldset class="form-group">
					<legend>Footer Section</legend>
						<div class="form-group col-md-12">
							<label for="footerHint">Left hint footer</label>
							<input type="text" class="form-control" id="footerHint" name="footerHint" value="{{ $mainData['footerHint'] }}" required>
						</div>

						<div class="form-group col-md-6">
							<label for="facebook">Facebook Account</label>
							<input type="text" class="form-control" id="facebook" name="facebook" value="{{ $mainData['facebook'] }}" >
						</div>
						<div class="form-group col-md-6">
							<label for="twitter">Twitter Account</label>
							<input type="text" class="form-control" id="twitter" name="twitter" value="{{ $mainData['twitter'] }}" >
						</div>

						<div class="form-group col-md-6">
							<label for="googlePlus">Google+ Account</label>
							<input type="text" class="form-control" id="googlePlus" name="googlePlus" value="{{ $mainData['googlePlus'] }}" >
						</div>
						<div class="form-group col-md-6">
							<label for="linkedin">Linkdin Account</label>
							<input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $mainData['linkedin'] }}">
						</div>
					</fieldset>
					<!-- End Footer section -->

										<!-- Start Head Tags section   -->
					<fieldset class="form-group">
					<legend>Head Tags</legend>
						<div class="form-group col-md-12">
							<label for="headTags">Update head tags</label>
							<textarea class="form-control" name="headTags" id="headTags" cols="30" rows="8" pattern=".*\S+.*" required> {{ $mainData['headTags'] }} </textarea>
							
						</div>
					</fieldset>
					<!-- End Head Tags section -->

					<div class="form-group col-md-12">
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>	
@endsection