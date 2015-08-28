@extends('app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		Report <b>#{{ $report->id }}</b> for <b>{{ $report->project->name }}</b>
		<div class="pull-right">
			<a href="{{ url('report/' . $report->project_id) }}" class="btn btn-xs btn-primary">Back</a>
			<a href="{{ url('report/edit/' . $report->id) }}" class="btn btn-xs btn-default">Edit</a> 
			<a href="{{ url('report/delete/' . $report->id) }}" class="btn btn-xs btn-danger">Delete</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<tbody>
				<tr>
					<td width="30%"><b>Name</b></td>
					<td>{{ $report->merchant->name }}</td>
				</tr>
				<tr>
					<td width="30%"><b>Category</b></td>
					<td>{{ $report->merchant->category->name }}</td>
				</tr>
				<tr>
					<td width="30%"><b>Address</b></td>
					<td>{{ $report->merchant->address }}</td>
				</tr>
				<tr>
					<td width="30%"><b>Person In-charged</b></td>
					<td>{{ $report->merchant->pic }}</td>
				</tr>
				<tr>
					<td width="30%"><b>Email</b></td>
					<td>{{ $report->merchant->email }}</td>
				</tr>
				<tr>
					<td width="30%"><b>Contact Number</b></td>
					<td>{{ $report->merchant->contact_no }}</td>
				</tr>
				<tr>
					<td width="30%"><b>Competitor(s)</b></td>
					<td>{{ $report->competitors }}</td>
				</tr>
				<tr>
					<td width="30%"><b>Interested</b></td>
					<td><span class="label label-{{ ($report->interested == true) ? 'success' : 'warning' }}">{{ ($report->interested == true) ? 'Yes' : 'No' }}</span></td>
				</tr>
				<tr>
					<td width="30%"><b>Status</b></td>
					<td><span class="label label-{{ ($report->merchant_status == true) ? 'success' : 'warning' }}">{{ ($report->merchant_status == true) ? 'Accepted' : 'Rejected' }}</span></td>
				</tr>
				<tr>
					<td width="30%"><b>Action Taken</b></td>
					<td>{{ $report->action_taken }}</td>
				</tr>
				<tr>
					<td width="30%"><b>Remark(s)</b></td>
					<td>{{ $report->remarks }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection