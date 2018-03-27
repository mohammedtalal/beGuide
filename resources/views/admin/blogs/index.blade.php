@extends('admin.index')

@section('name')
    Our Blog
@endsection

@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Our Blog</h3>
              <hr>
              <a href="{{ route('blog.create') }}"  class="btn btn-primary btn-flat">Add New Blog</a>
            </div>

            <div class="box-body">
            	<table id="example1" class="table table-bordered table-striped">
            		<thead>
		                <tr>
		                  	<th>#</th>
					        <th>Title</th>
					        <th>Body</th>
		                  	<th>Alt</th>
		                  	<th>Image</th>

		                </tr>
                	</thead>
                	<tbody>
                		@foreach($allBlogs as $key => $blog)
		                <tr>
		                  	<td>{{ $key + $allBlogs->firstItem() }}</td>
				            <td>{{ str_replace('-',' ',$blog->title) }}</td>
				            <td> {{ str_limit($blog->body,350) }}</td>  
                      		<td>{{ $blog->alt }}</td> 

                      		<td>
                      			<img style="width: 50px;height: 50px" src="{{ asset('images/blogs/'.$blog->blog_image) }}" alt="{{$blog->alt}}">
                      		</td>

				            <td style="width: 5%;">
		                	<a class="btn btn-info btn-xs" href="{{ route('blog.edit',$blog->id) }}"><i class="fa fa-edit"></i></a>
	                       		<form method="POST" action="{{ route('blog.destroy',$blog->id) }}">
		                        	{{ csrf_field() }}
		                        	<button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>   
		                        	<input type="hidden" name="_method" value="DELETE">
	                      		</form>
	  	               		</td>
				        </tr>

				        @endforeach
				    </tbody>
            	</table>
            </div>
            {{ $allBlogs->links() }}
        </div>
    </div>
</div>
@endsection
