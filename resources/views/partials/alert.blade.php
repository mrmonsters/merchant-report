<?php 
use App\Models\Status; 

$response = Session::get('response');
?>
@if (isset($response) && is_array($response) && !empty($response))
<div class="alert alert-{{ ($response['code'] == STATUS::SUCCESS) ? 'success' : 'danger' }} alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>{{ ($response['code'] == STATUS::SUCCESS) ? 'Successful' : 'Failed' }}!</strong> {{ $response['msg'] }}
</div>
@endif