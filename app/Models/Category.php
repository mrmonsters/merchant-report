<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
	protected $primaryKey = 'id';
	protected $table      = 'ozr_category';
	protected $fillable   = array('project_id', 'name', 'status');

	const ACTIVE   = '2';
	const INACTIVE = '1';

	public function merchants()
	{
		return $this->hasMany('App\Models\Merchant', 'category_id', 'id');
	}
}