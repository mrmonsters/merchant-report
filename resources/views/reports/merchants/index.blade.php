@extends('app')

@section('content')
<div class="row" style="padding: 8px 0 8px 0;">
	<div class="col-md-12">
		<a href="{{ url('report/create') }}" class="btn btn-primary pull-right">Create</a> 
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table id="merchant-report" class="table table-bordered table-striped table-responsive">
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
				@foreach ($merchants as $merchant)
				<tr>
					<td>{{ $merchant->report->id }}</td>
					<td>{{ $merchant->name }}</td>
					<td>{{ $merchant->address }}</td>
					<td>{{ $merchant->pic }}</td>
					<td>{{ $merchant->contact_no }}</td>
					<td><span class="label label-{{ ($merchant->report->merchant_status == true) ? 'success' : 'warning' }}">{{ ($merchant->report->merchant_status == true) ? 'Accepted' : 'Rejected' }}</span></td>
					<td>
						<a href="{{ url('report/show/' . $merchant->report->id) }}" class="btn btn-xs btn-info">View</a>
						<a href="{{ url('report/edit/' . $merchant->report->id) }}" class="btn btn-xs btn-default">Edit</a>
						<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#popup" onclick="confirmDel({{ $merchant->report->id }})">Delete</a>
					</td>
				</tr>
				@endforeach	
			</tbody>
		</table>
		<form id="form-del" method="POST" action="{{ url('report/delete') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<input type="hidden" name="report_id" value="DELETE" />
		</form>
	</div>
</div>

<!-- Delete Confirmation -->
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Alert</h4>
			</div>
			<div class="modal-body">
				Are you sure you want to delete this report?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="submitDel()">Yes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
			</div>
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

function confirmDel(reportId)
{
	$('#form-del').attr('action', "{{ url('report/destroy') }}/" + reportId);
}

function submitDel()
{
	$('#form-del').submit();
}
</script>
@endsection