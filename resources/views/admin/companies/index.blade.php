@extends('admin.index')

@section('name')
    Companies
@endsection

@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">All Companies</h3>
              <hr>
              <a href="{{ route('companies.create') }}"  class="btn btn-primary btn-flat">Add New Company</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  	<th>#</th>
				        <th>Name</th>
				        <th>Email</th>
				        <th >Description</th>
				        <th ><i class="fa fa-tags"></i>Tags</th>
				        <th>Cat.name</th>
				        <th>Image</th>
				        <th>Action</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($companies as $key => $company)
	                <tr>
	                  	<td>{{ $key + $companies->firstItem()  }}</td>
			            <td>{{ str_ireplace('-', ' ',$company->name) }}</td>
			            <td>{{ $company->email }}</td>
			            <td>{{ $company->description }}</td>
						<td>
							@foreach($company->tags as $tag) 
								<span class="label label-info"><small>{{$tag->name}}</small></span>	 
							@endforeach
						</td> 
			            <td>{{ $company->categories->name }}</td>
			            <td><img style="width: 50px;height: 50px" src="{{ asset('images/companies/'.$company->main_image) }}" alt="company image"></td>
	                  	<td>
		                	<a class="btn btn-info btn-xs" href="{{ route('companies.edit',$company->id) }}"><i class="fa fa-edit"></i></a>
                       		<form method="POST" action="{{ route('companies.destroy',$company->id) }}">
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
            {{ $companies->links() }}
          </div>
          <!-- /.box -->
	</div>
</div>
@endsection
