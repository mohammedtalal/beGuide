@extends('admin.index')

@section('name')
    Categories
@endsection

@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">All Categories</h3>
              <hr>
              <a href="{{ route('categories.create') }}"  class="btn btn-primary btn-flat">Add New Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

	                <tr>
	                  <th>#</th>
	                  <th>Name</th>
	                  <th>Description</th>
	                  <th>Category Image</th>
	                  <th>Action</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($categories as $key => $category)
	                <tr>
	                  <td>{{ $key + $categories->firstItem() }}</td>
	                  <td>{{ $category->name }}</td>
	                  <td>{{ $category->description }}</td>
	                  <td><img style="width: 50px;height: 50px" src="{{ asset('images/categories/'.$category->category_image) }}" alt="category image"></td>
	                  <td>
	                  	 <a class="btn btn-info btn-xs" href="{{ route('categories.edit',$category->id) }}"><i class="fa fa-edit"></i></a>
                       <form method="POST" action="{{ route('categories.destroy',$category->id) }}">
                        {{ csrf_field() }}
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>   
                        <input type="hidden" name="_method" value="DELETE">
                      </form>
  	               </td>
	                </tr>
	               @endforeach 
                </tbody>
                <tfoot>
	                
                </tfoot>
              </table>
              
            </div>
            <!-- /.box-body -->
            {{ $categories->render() }}
          </div>
          <!-- /.box -->
	</div>
</div>
@endsection