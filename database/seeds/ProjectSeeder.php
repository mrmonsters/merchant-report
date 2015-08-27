<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;

class ProjectSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$projects = array(
			array(
				'name'   => 'Bello2',
				'status' => Project::ACTIVE
			),
			array(
				'name'   => 'Makandeal',
				'status' => Project::ACTIVE
			),
		);

		foreach ($projects as $project)
		{
			Project::create($project);
		}
	}

}
