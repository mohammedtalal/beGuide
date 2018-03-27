@extends('admin.index')

@section('name')
    Create Company
@endsection
@section('extra-style')
<!--============== Select2 ==============-->
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('contents')
	<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">All Tags</h3> <hr>
            </div>
			<div class="box-body col-md-6">
            	<table id="example1" class="table table-bordered table-striped">
            		<thead>
	                <tr>
	                  	<th>#</th>
				        <th>Tag</th>
				        <th>Action</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($tags as $key => $tag)
	                <tr>
	                  	<td>{{ $key + $tags->firstItem() }}</td>
			            <td>{{ $tag->name }}</td>
			            <td>  
		                    <a href="{{ route('tags.edit',$tag->id) }}" class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a>
		                    <form  method="post" action="{{ route('tags.destroy',$tag->id) }}">
								{{ csrf_field() }}
		                    	<button class='btn btn-danger btn-xs' type="submit"><i class="fa fa-trash"></i></button>
		                    	<input type="hidden" name="_method" value="DELETE">
		                	</form>
			            </td>
	                </tr>
	               @endforeach 
                </tbody>

				</table>
				{{ $tags->links() }} 
			</div>
			<div class="box-body col-md-6">
				<form method="POST" action="{{ route('tags.store') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					
					<div class="form-group ">
						<label for="tags">Tags</label>
						<br>
						<input type="text" name="name" id="tags" class="form-control" placeholder="write tag here ...">
					</div>

					<div class="form-group col-md-12">
						<button type="submit"  class="btn btn-primary">Add Tags</button>
					</div>		  
				</form>
			</div>
        </div>
		
	</div>
</div>	
@endsection

@push('extra-script')

<!--============== Select2 ==============-->
<script type="text/Javascript" src="{{ asset('js/select2.min.js') }}"></script>

@endpush