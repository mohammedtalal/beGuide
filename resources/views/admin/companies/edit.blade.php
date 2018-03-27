@extends('admin.index')

@section('name')
    Edit Company
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
              <h3 class="box-title">Edit Company</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form method="POST" action="{{ route('companies.update',$company->id) }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group col-md-6">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" value="{{ $company->name }} " pattern=".*\S+.*" required>
			</div>

			<div class="form-group col-md-6">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" value="{{ $company->email }} " pattern=".*\S+.*" name="email" required>
			</div>

			<div class="form-group col-md-12">
			    <label for="description">Description</label>
			    <textarea type="text" class="form-control" id="description" name="description" rows="8" pattern=".*\S+.*" required>{{ $company->description }}</textarea>
			</div>

			<div class="form-group col-md-6">
				@if("images/companies/'.$company->main_image")
		           	<img style="width: 50px;height: 50px" src="{{ asset('images/companies/'.$company->main_image) }}" alt="company image">
		        @else
	            	<td>No image found</td>
	            @endif
			    <label for="main_image">Main company image</label>
			    <input type="file" class="form-control" id="main_image" name="main_image" accept="image/*"  required>
			</div>

			
			<div class="form-group col-md-6">
				@foreach($urlPaths as $path)
					@if("images/companies/gallery'.$path->url")
		           	<img style="width: 50px;height: 50px" src="{{ asset('images/companies/gallery/'.$path->url) }}" alt="company image">
			        @else
		            	<td>No image found</td>
		            @endif
				@endforeach
			    <label for="company_images">Gallery</label>
			    <input type="file" class="form-control" id="company_images" name="company_images[]" accept="image/*"  multiple>
			</div>

			<div class="form-group col-md-6">
			    <label for="category_id">Select company category</label>
			    <select name="category_id" id="category_id" class="form-control">
				    	@foreach($categories as $category)
					    	<optgroup label="{{ $category->name }}">
								@if($category->children)
									@foreach($category->children as $subCategory)
					    				<option @if($company->categories->name == $subCategory->name) {!! 'selected' !!} @endif class="child_category" value="{{ $subCategory->id }}" require>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $subCategory->name }}</option>
					    			@endforeach
					    		@endif
							</optgroup>
						@endforeach

			    </select>
			</div>

			<div class="form-group col-md-6">
			    <label for="facebook">Facebook</label>
			    <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $company->facebook }}" >
			</div>

			<div class="form-group col-md-6">
			    <label for="youtube">Youtube</label>
			    <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $company->youtube }}" >
			</div>

			<div class="form-group col-md-6">
			    <label for="twitter">Twitter</label>
			    <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $company->twitter }}" >
			</div>

			<div class="form-group col-md-6">
			    <label for="instgram">Instgram</label>
			    <input type="text" class="form-control" id="instgram" name="instgram" value="{{ $company->instgram }}" >
			</div>

			<div class="form-group col-md-6">
			    <label for="linkedin">Linkedin</label>
			    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $company->linkedin }}">
			</div>

			<div class="form-group col-md-6">
			    <label for="googleplus">Google Plus</label>
			    <input type="text" class="form-control" id="googleplus" name="googleplus" value="{{ $company->googleplus }}">
			</div>

			<div class="form-group col-md-6">
			    <label for="website">Company Website</label>
			    <input type="text" class="form-control" id="website" name="website" value="{{ $company->website }}">
			</div>

			<div class="form-group col-md-6">
			    <label for="video">Company Video</label>
			    <input type="text" class="form-control" id="video" name="video" value="{{ $company->video }}">
			</div>

			<div class="form-group col-md-6">
			    <label for="tags">Select tags of company</label>
			    {{ Form::select('tags[]',$tags2, null, ['class' => 'form-control','id' => 'select2-multi', 'multiple' => 'multiple']) }}
			</div>

		  <div class="form-groub col-md-12">
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

@push('extra-script')
<!--============== Select2 ==============-->
<script type="text/Javascript" src="{{ asset('js/select2.min.js') }}"></script>
<script>
	$('#select2-multi').select2();
	$('#select2-multi').select2().val({!! json_encode($company->tags()->allRelatedIds()) !!}).trigger('change');
</script>
@endpush