@extends('admin.index')

@section('name')
    Company Requests
@endsection


@section('contents')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Pending Companies</h3> <hr>
            </div>
			<div class="box-body">
            	<table id="example1" class="table table-bordered table-striped">
            		<thead>
	                <tr>
	                  	<th>#</th>
				        <th>Name</th>
				        <th>Company Name</th>
				        <th>E-mail</th>
				        <th>Phone</th>
				        <th>Message</th>
				        <th>approve?</th>
				       
	                </tr>
                </thead>
                <tbody>
                	@foreach($pendingCompanies as $key => $company)
	                <tr>
	                  	<td>{{ $key + $pendingCompanies->firstItem() }}</td>
			            <td>{{ $company->name }}</td>
			            <td>{{ $company->company_name }}</td>
			            <td>{{ $company->email }}</td>
			            <td>{{ $company->phone }}</td>
			            <td>{{ $company->message }}</td>
			            <td>
			            	<form  method="post" action="{{ route('admin.addCompany.approve') }}">
								{{ csrf_field() }}
								<input type="hidden" name="company_id" value="{{ $company->id }}">
		                    	<input type="checkbox" name="status" required>
		                    	<button class="btn btn-primary pull-right btn-xs"><small>Send</small></button>
		                	</form>
			            </td>
			            
	                </tr>
	               @endforeach 
                </tbody>
                <tfoot>    
                </tfoot>
				</table>
			</div>
			{{ $pendingCompanies->links() }}
        </div>
	</div>
</div>	        
@endsection