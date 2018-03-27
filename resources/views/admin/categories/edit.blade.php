@extends('admin.index')

@section('name')
    Edit Category
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
              <form method="POST" action="{{ route('categories.update',$category->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group ">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                </div>
                
                <div class="form-group ">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" name="description" id="description" rows="8" required>{{ $category->description }}</textarea>
                </div>

                <div class="form-group  ">
                  @if("images/categories/".$category->category_image)
                      <img style="width: 50px;height: 50px" src="{{ asset('images/categories/'.$category->category_image) }}" alt="category image">
                  @else
                      <td>No image found</td>
                  @endif
                  <label for="category_image">Category Image</label>
                  <input class="form-control" type="file" id="category_image" name="category_image" accept="image/*" required>
                 </div>

                  <div class="form-group " style="margin-top: 24px;">
                    <label for="parent_id">Parent ?</label>
                    <select name="parent_id" class="form-control">
                      @if($category->parent_category)
                        <option value="{{ $category->parent_category->id }}">{{ $category->parent_category->name }}</option>
                      @elseif(! $category->parent_category)
                        <option value="0">None</option>
                      @endif
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