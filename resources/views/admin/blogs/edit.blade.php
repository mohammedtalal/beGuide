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
				<form method="POST" action="{{ route('blog.update',$blog->id) }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				<div class="form-group col-md-12">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" pattern=".*\S+.*" required>
				</div>

				<div class="form-group col-md-12">
				    <label for="blog_image">Blog image</label>
				    <img style="width:50px; height: 50px" src="{{ asset('images/blogs/'.$blog->blog_image) }}" alt="{{ $blog->alt }}">
				    <input type="file" class="form-control" id="blog_image" name="blog_image" value="{{ $blog->title }}"  required>
				</div>

				<div class="form-group col-md-12">
				    <label for="alt">Image alt</label>
				    <input type="text" class="form-control" id="alt" name="alt" value="{{ $blog->alt }}" pattern=".*\S+.*" required>
				</div>

				<div class="form-group col-md-12">
					<label for="body">Blog Body</label>
					<br>	
					<textarea name="body" id="body" cols="30" rows="15" class="form-control" pattern=".*\S+.*" required>{{ $blog->body }}</textarea>
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