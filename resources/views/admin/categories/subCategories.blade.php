@extends('admin.index')

@section('name')
    Sub-Categories
@endsection


@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">All Sub-Categories</h3>
              <hr>
              <a href="{{ route('categories.create') }}"  class="btn btn-primary btn-flat">Add Sub-Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

	                <tr>
	                  <th>#</th>
	                  <th>Name</th>
	                  <th>Description</th>
                    <th>Parent</th>
	                  <th>Category Image</th>
	                  <th style="width:60px">Action</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($subCategories as $key => $cat)
                    <tr>
                        <td>{{  $key +$subCategories->firstItem() }}</td>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->description }}</td>
                        <td>{{ $cat->parent_category->name }}</td>
                        <td ><img style="width: 50px;height: 50px" src="{{ asset('images/categories/'.$cat->category_image) }}" alt=""></td>
                        
                        <td>
                          <a href="{{ route('categories.edit',$cat->id) }}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>

                          <form  method="post" action="{{ route('categories.destroy',$cat->id) }}">
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
            {{ $subCategories->render() }}
          </div>
          <!-- /.box -->
	</div>  
</div>

@endsection