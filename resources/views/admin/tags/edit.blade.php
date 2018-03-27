@extends('admin.index')

@section('name')
    Create Company
@endsection

@section('contents')
<div class="row">
	<div class="col-md-12">
		<div class="box box-warning" id="root">
			<div class="box-header with-border">
			  <h3 class="box-title">Create New Tag</h3>
			</div>
			
			
			<div class="box-body">
				<form method="POST" action="{{ route('tags.update',$tag->id) }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					
					<div class="form-group ">
						<label for="tags">Tags</label>
						<br>
						<input type="text" name="name" id="tags" class="form-control" value="{{ $tag->name }}">
					</div>

					<div class="form-group col-md-12">
						<button type="submit"  class="btn btn-primary">Add Tags</button>
					</div>		  
				</form>
			</div>

		</div>
	</div>
</div>	 
@endsection

