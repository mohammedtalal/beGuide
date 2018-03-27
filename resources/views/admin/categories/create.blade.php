@extends('admin.index')

@section('name')
    Create Category
@endsection

@section('contents')
	<div class="row">
		<div class="col-md-12">
				<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
			
				        {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" id="name" name="name" pattern=".*\S+.*"  required>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="6" name="description" id="description" pattern=".*\S+.*" required></textarea>
                </div>

                
                <div class="form-group">
    		          <label for="category_image">Category Image</label>
    		          <input class="form-control" type="file" id="category_image" name="category_image" accept="image/*" required>
    		        </div>

  		        <div class="form-group">
    	          <label for="parent_id">Parent ?</label>
    	          <select name="parent_id" class="form-control">
    	          	<option value="0">None</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
    	          </select>
         	  	</div>

				      <div class="box-footer">
	            	<button type="submit" class="btn btn-primary">Submit</button>
	            </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
	</div>

@endsection