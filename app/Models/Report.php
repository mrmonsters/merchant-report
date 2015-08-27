<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model 
{
	protected $primaryKey = 'id';
	protected $table      = 'ozr_report';
	protected $fillable   = array(
		'project_id', 
		'merchant_id', 
		'competitors', 
		'interested', 
		'merchant_status', 
		'action_taken', 
		'remarks', 
		'status'
	);

	const ACTIVE   = '2';
	const INACTIVE = '1';

	public function project()
	{
		return $this->belongsTo('App\Models\Project', 'id', 'project_id');
	}

	public function merchant()
	{
		return $this->belongsTo('App\Models\Merchant', 'id', 'merchant_id');
	}
}