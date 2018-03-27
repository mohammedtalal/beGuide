@extends('admin.index')

@section('name')
    Our Blog
@endsection

@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Advertises</h3>
              <hr>
              @if(! empty(count($advertises)) )
              	<a href="{{ route('advertise.edit', $adv_id->id) }}"  class="btn btn-primary btn-flat">Update Data</a>
              @elseif(empty(count($advertises)))
              	<a href="{{ route('advertise.create') }}"  class="btn btn-primary btn-flat">Create New Advertise</a>
              @endif            
            </div>

            <div class="box-body">
            	<table id="example1" class="table table-bordered table-striped">
            		<thead>
		                <tr>
		                  	<th>#</th>
					        <th>Left advertise</th>
					        <th>Left alt</th>
					        <th>right advertise</th>
					        <th>right alt</th>
					        <th>Main Background </th>
					        <th>Main Background alt</th>
					        <th>Subscribe Background</th>
					        <th>Subscribe Background alt</th>
					        <th>Action</th>
		                </tr>
                	</thead>
                	<tbody>
                		@foreach($advertises as $key => $advertise)
                		
		                <tr>
		                  	<td>{{ ++$key }}</td>
				            <td>
				            	<img style="width: 50px;height: 50px" src="{{ asset('images/advertises/'.$advertise->left_adv) }}" alt="$advertise->left_alt">
				            </td>
				            <td>{{ $advertise->left_alt }}</td>

				            <td>
				            	<img style="width: 50px;height: 50px" src="{{ asset('images/advertises/'.$advertise->right_adv) }}" alt="{{ $advertise->right_alt }}">
				            </td>
				            <td>{{ $advertise->right_alt }}</td>

				            <td>
				            	<img style="width: 50px;height: 50px" src="{{ asset('images/advertises/'.$advertise->mainBG_image) }}" alt="{{ $advertise->mainBG_alt }}">
				            </td>
				            <td>{{ $advertise->mainBG_alt }}</td>

				            <td>
				            	<img style="width: 50px;height: 50px" src="{{ asset('images/advertises/'.$advertise->subscribeBG_image) }}" alt="{{ $advertise->subscribeBG_alt }}">
				            </td>
				            <td>{{ $advertise->subscribeBG_alt }}</td>

                      		<td>
	                  			<a class="btn btn-info btn-xs" href="{{ route('advertise.edit',$advertise->id) }}"><i class="fa fa-edit"></i></a>
	                       		<form method="POST" action="{{ route('advertise.destroy',$advertise->id) }}">
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
          
        </div>
    </div>
</div>
@endsection