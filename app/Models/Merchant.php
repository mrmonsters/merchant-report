<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model 
{
	protected $primaryKey = 'id';
	protected $table      = 'ozr_merchant';
	protected $fillable   = array('project_id', 'name', 'category_id', 'address', 'pic', 'email', 'contact_no', 'status');

	public function project()
	{
		return $this->belongsTo('App\Models\Merchant');
	}

	public function category()
	{
		return $this->belongsTo('App\Models\Category');
	}

	public function report()
	{
		return $this->hasOne('App\Models\Report', 'merchant_id', 'id');
	}
}