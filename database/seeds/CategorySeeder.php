<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Status;
use App\Models\Project;
use App\Models\Category;

class CategorySeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$projectId = Project::where('name', '=', 'Bello2')->first()->id;
		$beauties = array(
			'hair',
			'face',
			'body',
			'nail'
		);

		foreach ($beauties as $beauty)
		{
			$model = array(
				'project_id' => $projectId,
				'name'       => $beauty,
				'status'     => Status::ACTIVE
			);

			Category::create($model);
		}

		$projectId = Project::where('name', '=', 'Makandeal')->first()->id;
		$foods = array(
			'western',
			'japanese',
			'korean',
			'chinese',
			'malay',
			'indian',
			'buffet',
			'fast food',
			'dessert',
			'beverage',
			'others'
		);

		foreach ($foods as $food)
		{
			$model = array(
				'project_id' => $projectId,
				'name'       => $food,
				'status'     => Status::ACTIVE
			);
		
			Category::create($model);
		}
	}

}
