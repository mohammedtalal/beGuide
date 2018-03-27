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
			  <h3 class="box-title">Subscribe</h3>
			</div>
			<div class="box-body">
				<form method="POST" action="{{ route('subscribe.update',$subscribe->id) }}" >

				{{ csrf_field() }}
				<div class="form-group col-md-6">
					<label for="email">Company Name</label>
					<input type="email" class="form-control" id="email" name="email" value="{{ $subscribe->email }}" required>
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