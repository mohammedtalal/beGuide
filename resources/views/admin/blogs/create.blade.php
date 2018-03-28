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
			  <h3 class="box-title">Our Blog</h3>
			</div>
			<div class="box-body">
				<form method="POST" action="{{ route('blog.store') }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				<div class="form-group col-md-12">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" pattern=".*\S+.*" required>
				</div>

				<div class="form-group col-md-6">
				    <label for="blog_image">Blog image</label>
				    <input type="file" class="form-control" id="blog_image" name="blog_image" accept="image/*"  required>
				</div>

				<div class="form-group col-md-6">
				    <label for="alt">Image alt</label>
				    <input type="text" class="form-control" id="alt" name="alt" accept="image/*" pattern=".*\S+.*" required>
				</div>

				<div class="form-group col-md-12">
					<label for="body">Blog Body</label>
					<br>	
					<textarea name="body" id="body" cols="30" rows="15" class="form-control" pattern=".*\S+.*" required></textarea>
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

@push('extra-script')
	<!-- tinymce texteeditor  -->
     <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
     <script>tinymce.init({ selector:'textarea' });</script>
@endpush