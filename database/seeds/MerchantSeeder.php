<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;
use App\Models\Category;
use App\Models\Merchant;

class MerchantSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$projectId  = Project::where('name', '=', 'Bello2')->first()->id;
		$categoryId = Category::where('name', '=', 'hair')->where('project_id', $projectId)->first()->id;
		$merchant   = array(
			'project_id'  => $projectId,
			'category_id' => $categoryId,
			'name'        => 'Michael Young Hair Saloon',
			'address'     => 'Michaeal\'s Place @ Jalan Tun Razak',
			'pic'         => 'Michael',
			'email'       => 'michael@gmail.com',
			'contact_no'  => '03-45678912 / 012-3456789',
			'status'	  => Merchant::ACTIVE
		);
		Merchant::create($merchant);

		$projectId  = Project::where('name', '=', 'Makandeal')->first()->id;
		$categoryId = Category::where('name', '=', 'japanese')->where('project_id', $projectId)->first()->id;
		$merchant   = array(
			'project_id'  => $projectId,
			'category_id' => $categoryId,
			'name'        => 'Yokozuna Japanese Cuisine',
			'address'     => 'Fraser\'s Place @ Jalan Perak',
			'pic'         => 'Mark',
			'email'       => 'mark@gmail.com',
			'contact_no'  => '03-21664633 / 012-2873384',
			'status'	  => Merchant::ACTIVE
		);
		Merchant::create($merchant);
	}

}
