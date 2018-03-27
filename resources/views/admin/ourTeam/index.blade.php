@extends('admin.index')

@section('name')
    Our Team
@endsection

@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
            	<h3 class="box-title">Our Team</h3>
				<hr>
			  	<a href="{{ route('team.create') }}"  class="btn btn-primary btn-flat">Add New Member</a>
            </div>

            <div class="box-body">
            	<table id="example1" class="table table-bordered table-striped">
            		<thead>
		                <tr>
		                  	<th>#</th>
					        <th>Name</th>
					        <th>Position</th>
					        <th>Image</th>
					        <th>Action</th>
		                </tr>
                	</thead>
                	<tbody>
                		@foreach($teams as $key => $team)
		                <tr>
		                  	<td>{{ $key + $teams->firstItem() }}</td>
				            <td>{{ $team->name }}</td>
				            <td>{{ $team->position }}</td>
				            <td>
				            	<img style="width: 50px;height: 50px" src="{{ asset('images/teams/'.$team->image) }}" alt="our team">
				            </td>

				            <td>
		                	<a class="btn btn-info btn-xs" href="{{ route('team.edit',$team->id) }}"><i class="fa fa-edit"></i></a>
	                       		<form method="POST" action="{{ route('team.destroy',$team->id) }}">
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
            {{ $teams->links() }}
        </div>
    </div>
</div>
@endsection