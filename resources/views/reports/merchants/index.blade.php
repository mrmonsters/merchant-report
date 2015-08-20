@extends('app')

@section('content')
<div class="container">
	<div class="row" style="padding: 8px 0 8px 0;">
		<div class="col-md-12">
			<a href="{{ url('report/create') }}" class="btn btn-primary pull-right">Create</a> 
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="merchant-report" class="table table-striped table-responsive">
				<thead>
					<th width="5%">No.</th>
					<th width="20%">Name</th>
					<th width="25%">Address</th>
					<th width="10%">PIC</th>
					<th width="10%">Contact</th>
					<th width="8%">Status</th>
					<th width="12%">Action</th>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>Yokozuna Japanese Cuisine</td>
						<td>Fraser's Place @ Jalan Perak</td>
						<td>Mark</td>
						<td>03-21664633 / 012-2873384</td>
						<td>Rejected</td>
						<td>
							<a href="#" class="btn btn-xs btn-default">Edit</a>
							<a href="#" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>	
					<tr>
						<td>1</td>
						<td>Yokozuna Japanese Cuisine</td>
						<td>Fraser's Place @ Jalan Perak</td>
						<td>Mark</td>
						<td>03-21664633 / 012-2873384</td>
						<td>Rejected</td>
						<td>
							<a href="#" class="btn btn-xs btn-default">Edit</a>
							<a href="#" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Yokozuna Japanese Cuisine</td>
						<td>Fraser's Place @ Jalan Perak</td>
						<td>Mark</td>
						<td>03-21664633 / 012-2873384</td>
						<td>Rejected</td>
						<td>
							<a href="#" class="btn btn-xs btn-default">Edit</a>
							<a href="#" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Yokozuna Japanese Cuisine</td>
						<td>Fraser's Place @ Jalan Perak</td>
						<td>Mark</td>
						<td>03-21664633 / 012-2873384</td>
						<td>Rejected</td>
						<td>
							<a href="#" class="btn btn-xs btn-default">Edit</a>
							<a href="#" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Yokozuna Japanese Cuisine</td>
						<td>Fraser's Place @ Jalan Perak</td>
						<td>Mark</td>
						<td>03-21664633 / 012-2873384</td>
						<td>Rejected</td>
						<td>
							<a href="#" class="btn btn-xs btn-default">Edit</a>
							<a href="#" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection

@section('addon-script')
<script type="text/javascript">
$(document).ready(function()
{
	$('#merchant-report').DataTable();
});
</script>
@endsection