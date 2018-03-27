@extends('admin.index')

@section('name')
    Subscribes
@endsection

@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Subscribes</h3>

            </div>

            <div class="box-body">
            	<table id="example1" class="table table-bordered table-striped">
            		<thead>
		                <tr>
		                  	<th>#</th>
					        <th>Emails</th>
		                </tr>
                	</thead>
                	<tbody>
                		@foreach($allSubscribes as $key => $subscribe)
		                <tr>
		                  	<td>{{ $key + $allSubscribes->firstItem() }}</td>
				            <td>{{ $subscribe->email }}</td>
				            <td>
		                	<a class="btn btn-info btn-xs" href="{{ route('subscribe.edit',$subscribe->id) }}"><i class="fa fa-edit"></i></a>
	                       		<form method="POST" action="{{ route('subscribe.destroy',$subscribe->id) }}">
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
            {{ $allSubscribes->links() }}
        </div>
    </div>
</div>
@endsection