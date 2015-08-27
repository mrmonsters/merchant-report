<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model 
{
	protected $primaryKey = 'id';
	protected $table      = 'ozr_project';
	protected $fillable   = array('name', 'status');

	const ACTIVE   = '2';
	const INACTIVE = '1';

	public function categories()
	{
		return $this->hasMany('App\Models\Category', 'project_id', 'id');
	}

	public function merchants()
	{
		return $this->hasMany('App\Models\Merchant', 'project_id', 'id');
	}

	public function reports()
	{
		return $this->hasMany('App\Models\Report', 'project_id', 'id');
	}
}