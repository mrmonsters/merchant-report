<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
	protected $primaryKey = 'id';
	protected $table      = 'ozr_category';
	protected $fillable   = array('project_id', 'name', 'status');

	public function merchants()
	{
		return $this->hasMany('App\Models\Merchant', 'category_id', 'id');
	}
}