<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model 
{
	protected $primaryKey = 'id';
	protected $table      = 'ozr_merchant';
	protected $fillable   = array('project_id', 'name', 'category_id', 'address', 'pic', 'email', 'contact_no');

	const ACTIVE   = '2';
	const INACTIVE = '1';

	public function project()
	{
		return $this->belongsTo('App\Models\Merchant', 'id', 'project_id');
	}

	public function category()
	{
		return $this->belongsTo('App\Models\Category', 'id', 'category_id');
	}

	public function report()
	{
		return $this->hasOne('App\Models\Report', 'merchant_id', 'id');
	}
}