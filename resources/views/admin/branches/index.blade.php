@extends('admin.index')

@section('name')
    Branches
@endsection

@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">All branches</h3> <hr>
              <a href="{{ route('branches.create') }}"  class="btn btn-primary btn-flat">Add New Branch</a>
            </div>
			<div class="box-body">
            	<table id="example1" class="table table-bordered table-striped">
            		<thead>
	                <tr>
	                  	<th>#</th>
				        <th>Address</th>
				        <th>Name</th>
				        <th>Phone</th>
				        <th>Latitude</th>
				        <th>Longtude</th>
				        <th>Company Name</th>
				        <th>Action</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($branches as $key => $branch)
	                <tr>
	                  	<td>{{ $key + $branches->firstItem() }}</td>
			            <td>{{ $branch->address }}</td>
			            <td>{{ str_ireplace('-', ' ',$branch->name) }}</td>
			            <td>{{ $branch->phone }}</td>
			            <td>{{ $branch->lat }}</td>
			            <td>{{ $branch->long }}</td>
			            <td>{{ $branch->companies->name }}</td>
			            <td>  
		                    <a href="{{ route('branches.edit',$branch->id) }}" class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a>
		                    <form  method="post" action="{{ route('branches.destroy',$branch->id) }}">
								{{ csrf_field() }}
		                    	<button class='btn btn-danger btn-xs' type="submit"><i class="fa fa-trash"></i></button>
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
			{{ $branches->links() }}
        </div>
	</div>
</div>	        
@endsection