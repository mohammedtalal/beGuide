@extends('admin.index')

@section('name')
    Our Blog
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12 ">
	<!-- general form elements disabled -->
		<div class="box box-warning">
			<div class="box-header with-border">
			  <h3 class="box-title">Advertises</h3>
			</div>
			<div class="box-body">
				<form method="POST" action="{{ route('advertise.update',$advertise->id) }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				<div class="form-group col-md-6">
					<label for="left_adv">left Advertise</label>
					<img style="width: 50px;height: 50px" src="{{ asset('images/advertises/'.$advertise->left_adv) }}" >
					<input type="file" class="form-control"  name="left_adv" accept="image/*" required>
				</div>

				<div class="form-group col-md-6">
					<label for="right_adv">Right Advertise</label>
					<img style="width: 50px;height: 50px" src="{{ asset('images/advertises/'.$advertise->right_adv) }}" >
					<input type="file" class="form-control" id="right_adv" name="right_adv" required>
				</div>

				<div class="form-group col-md-6">
					<label for="left_alt">Left Alt</label>
					<input type="text" class="form-control" id="left_alt" name="left_alt" value="{{ $advertise->left_alt }}" required>
				</div>

				<div class="form-group col-md-6">
					<label for="right_alt">Right Alt</label>
					<input type="text" class="form-control" id="right_alt" name="right_alt" value="{{ $advertise->right_alt }}" required>
				</div>
				
				<!-- Main backgeound image -->
				<div class="form-group col-md-6">
					<label for="mainBG_image">Main Background Image</label>
					<img style="width: 50px;height: 50px" src="{{ asset('images/advertises/'.$advertise->mainBG_image) }}" >
					<input type="file" class="form-control" id="mainBG_image" name="mainBG_image" required>
				</div>

				<!-- Main backgeound alt -->
				<div class="form-group col-md-6">
					<label for="subscribeBG_image">Subscribe Background Image</label>
					<img style="width: 50px;height: 50px" src="{{ asset('images/advertises/'.$advertise->subscribeBG_image) }}" >
					<input type="file" class="form-control" id="subscribeBG_image" name="subscribeBG_image" required>
				</div>

				<!-- Subscribe backgeound image -->
				<div class="form-group col-md-6">
					<label for="mainBG_alt">Main Background Alt</label>
					<input type="text" class="form-control" id="mainBG_alt" name="mainBG_alt" value="{{ $advertise->mainBG_alt }}" required>
				</div>
				
				<!-- Subscribe backgeound alt -->
				<div class="form-group col-md-6">
					<label for="subscribeBG_alt">Subscribe Background Alt</label>
					<input type="text" class="form-control" id="subscribeBG_alt" name="subscribeBG_alt" value="{{ $advertise->subscribeBG_alt }}" required>
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