<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Status;
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
				'status' => Status::ACTIVE
			),
			array(
				'name'   => 'Makandeal',
				'status' => Status::ACTIVE
			),
		);

		foreach ($projects as $project)
		{
			Project::create($project);
		}
	}

}
