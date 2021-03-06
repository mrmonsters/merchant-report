@extends('app')
<?php 
use App\Models\Project; 

$project = Project::find(Session::get('project_id'));
?>

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		New Report for <b>{{ $project->name }}</b>
	</div>
	<form class="form-horizontal" method="POST" action="{{ url('report/store') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div class="panel-body">
			<input type="hidden" name="project_id" value="{{ $project->id }}" />
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Merchant Name</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="name" name="name" placeholder="eg. Yokozuna Japanese Cuisine" />
				</div>
			</div>
			<div class="form-group">
				<label for="category_id" class="col-sm-2 control-label">Category</label>
				<div class="col-sm-10">
					<select class="form-control" id="category_id" name="category_id">
					@foreach ($project->categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="address" class="col-sm-2 control-label">Address</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="address" name="address" placeholder="eg. Fraser's Place @ Jalan Perak" />
				</div>
			</div>
			<div class="form-group">
				<label for="pic" class="col-sm-2 control-label">Person In-Charged</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="pic" name="pic" placeholder="eg. Mark" />
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input class="form-control" type="email" id="email" name="email" placeholder="eg. mark.yokozuna@gmail.com" />
				</div>
			</div>
			<div class="form-group">
				<label for="contact_no" class="col-sm-2 control-label">Contact Number</label>
				<div class="col-sm-10">
					<input class="form-control" type="phone" id="contact_no" name="contact_no" placeholder="eg. 010-2345678" />
				</div>
			</div>
			<div class="form-group">
				<label for="competitors" class="col-sm-2 control-label">Competitor(s)</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="competitors" name="competitors" placeholder="eg. Groupon, Food Panda..." />
				</div>
			</div>
			<div class="form-group">
				<label for="interested" class="col-sm-2 control-label">Interested</label>
				<div class="col-sm-10">
					<select class="form-control" id="interested" name="interested">
						<option value="0">No</option>
						<option value="1">Yes</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="merchant_status" class="col-sm-2 control-label">Status</label>
				<div class="col-sm-10">
					<select class="form-control" id="merchant_status" name="merchant_status">
						<option value="0">Rejected</option>
						<option value="1">Accepted</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="action_taken" class="col-sm-2 control-label">Action Taken</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="action_taken" name="action_taken" placeholder="eg. Appointment done." />
				</div>
			</div>
			<div class="form-group">
				<label for="remarks" class="col-sm-2 control-label">Remarks</label>
				<div class="col-sm-10">
					<textarea class="form-control" type="text" id="remarks" name="remarks" rows="5"></textarea>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<div class="pull-right">
				<a href="{{ url('report/' . $project->id) }}" class="btn btn-default">Cancel</a>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="clearfix"></div>
		</div>
	</form>
</div>
@endsection