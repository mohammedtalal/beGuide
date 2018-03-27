@extends('admin.index')

@section('name')
    Categories
@endsection

@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact-Us</h3>
              <hr>	
              @if(! empty(count($allContactData)))
              	<a href="{{ route('contact.edit',$dataID->id) }}"  class="btn btn-primary btn-flat">Update Data</a>
              @elseif(empty(count($allContactData)))
              	<a href="{{ route('contact.create') }}"  class="btn btn-primary btn-flat">Create Contact Data</a> 
              @endif
            </div>

            <div class="box-body">
            	<table id="example1" class="table table-bordered table-striped">
            		<thead>
		                <tr>
		                  	<th>#</th>
					        <th>Name</th>
					        <th>Description</th>
					        <th>address</th>
					        <th >phone</th>
					        <th>email</th>
					        <th>Latitude</th>
					        <th>Langtude</th>
					        <th>Action</th>
		                </tr>
                	</thead>
                	<tbody>
                		@foreach($allContactData as $key => $data)
		                <tr>
		                  	<td>{{ ++$key }}</td>
				            <td>{{ $data->companyName }}</td>
				            <td>{{ $data->description }}</td>
				            <td>{{ $data->address }}</td>
				            <td>{{ $data->phone }}</td>
				            <td>{{ $data->email }}</td>
				            <td>{{ $data->lat }}</td>
				            <td>{{ $data->long }}</td>
				            <td>
		                	<a class="btn btn-info btn-xs" href="{{ route('contact.edit',$data->id) }}"><i class="fa fa-edit"></i></a>
	                       		<form method="POST" action="{{ route('contact.destroy',$data->id) }}">
		                        	{{ csrf_field() }}
		                        	<button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>   
		                        	<input type="hidden" name="_method"value="DELETE">
	                      		</form>
	  	               		</td>
				        </tr>
				        @endforeach
				    </tbody>
            	</table>
            </div>
            {{ $allContactData->links() }}
        </div>
    </div>
</div>
@endsection