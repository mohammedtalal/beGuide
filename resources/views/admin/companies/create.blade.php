@extends('admin.index')

@section('name')
    Create Company
@endsection
@section('extra-style')
<!--============== Select2 ==============-->
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('contents')
<div class="row">
		<div class="col-md-12">
			<!-- general form elements disabled -->
          <div class="box box-warning">
	        <div class="box-header with-border">
	          <h3 class="box-title">Create New Company</h3>
	        </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group col-md-6">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" id="name" name="name" pattern=".*\S+.*" required>
					</div>

					<div class="form-group col-md-6">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email" name="email" required>
					</div>
					
					<div class="form-group col-md-12">
					    <label for="description">Description</label>
					    <textarea type="text" class="form-control" id="description" name="description" rows="8" pattern=".*\S+.*" required></textarea>
					</div>

					<div class="form-group col-md-6">
					    <label for="main_image">Main company image</label>
					    <input type="file" class="form-control" id="main_image" name="main_image" accept="image/*"  required>
					</div>
					
					<div class="form-group col-md-6">
					    <label for="company_images">Gallery</label>
					    <input type="file" class="form-control" id="company_images" name="company_images[]" accept="image/*"  multiple>
					</div>
					
					<div class="form-group col-md-6">
					    <label for="category_id">Select category of company</label>
					    <select name="category_id" id="category_id" class="form-control" required>
					    	<option value="" selected >please select category</option>
					    	@foreach($categories as $category)
						    	<optgroup label="{{ $category->name }}">
									@if($category->children)
										@foreach($category->children as $subCategory)
						    				<option class="child_category" value="{{ $subCategory->id }}" require>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $subCategory->name }}</option>
						    			@endforeach
						    		@endif
								</optgroup>
							@endforeach
					    </select>
					</div>
				

					<div class="form-group col-md-6">
					    <label for="facebook">Facebook</label>
					    <input type="text" class="form-control" id="facebook" name="facebook" >
					</div>

					<div class="form-group col-md-6">
					    <label for="youtube">Youtube</label>
					    <input type="text" class="form-control" id="youtube" name="youtube" >
					</div>

					<div class="form-group col-md-6">
					    <label for="twitter">Twitter</label>
					    <input type="text" class="form-control" id="twitter" name="twitter" >
					</div>

					<div class="form-group col-md-6">
					    <label for="instgram">Instgram</label>
					    <input type="text" class="form-control" id="instgram" name="instgram" >
					</div>

					<div class="form-group col-md-6">
					    <label for="linkedin">Linkedin</label>
					    <input type="text" class="form-control" id="linkedin" name="linkedin" >
					</div>

					<div class="form-group col-md-6">
					    <label for="googleplus">Google Plus</label>
					    <input type="text" class="form-control" id="googleplus" name="googleplus" >
					</div>

					<div class="form-group col-md-6">
					    <label for="website">Company Website</label>
					    <input type="text" class="form-control" id="website" name="website" >
					</div>

					<div class="form-group col-md-6">
					    <label for="video">Company Video</label>
					    <input type="text" class="form-control" id="video" name="video" >
					</div>

					<div class="form-group col-md-6">
					    <label for="tags">Tags Of Company</label>
					    <select name="tags[]" id="tags" class="form-control select2-multi" multiple >
					    	@foreach($tags as $tag)
		    					<option  value="{{ $tag->id }}" require>{{ $tag->name }}</option>
		    				@endforeach
					    </select>
					</div>

				  	<div class="form-groub col-md-12">
				  		<button type="submit" class="btn btn-primary">Add Company</button>
				  	</div>		  
				</form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
</div>
@endsection

@push('extra-script')
<!--============== Select2 ==============-->
<script type="text/Javascript" src="{{ asset('js/select2.min.js') }}"></script>
<script>
	$('.select2-multi').select2({
		placeholder:' Select your tags ...',
		maximumSelectionLength: 5
	});
</script>
@endpush