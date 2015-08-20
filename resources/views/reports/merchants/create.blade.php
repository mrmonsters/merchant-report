@extends('app')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				Add New Record
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Merchant Name</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" id="name" name="name" placeholder="eg. Yokozuna Japanese Cuisine" />
						</div>
					</div>
					<div class="form-group">
						<label for="category" class="col-sm-2 control-label">Cuisine</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" id="category" name="category" placeholder="eg. Japanese" />
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
						<label for="contact" class="col-sm-2 control-label">Contact Number</label>
						<div class="col-sm-10">
							<input class="form-control" type="phone" id="contact" name="contact" placeholder="eg. 010-2345678" />
						</div>
					</div>
					<div class="form-group">
						<label for="competitor" class="col-sm-2 control-label">Competitor(s)</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" id="competitor" name="competitor" placeholder="eg. Groupon, Food Panda..." />
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
						<label for="status" class="col-sm-2 control-label">Status</label>
						<div class="col-sm-10">
							<select class="form-control" id="status" name="status">
								<option value="0">Rejected</option>
								<option value="1">Accepted</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="action" class="col-sm-2 control-label">Action Taken</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" id="action" name="action" placeholder="eg. Appointment done." />
						</div>
					</div>
					<div class="form-group">
						<label for="remark" class="col-sm-2 control-label">Remarks</label>
						<div class="col-sm-10">
							<textarea class="form-control" type="text" id="remark" name="remark" rows="3"></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="panel-footer">
				<div class="pull-right">
					<a href="{{ url('report') }}" class="btn btn-default">Cancel</a>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection