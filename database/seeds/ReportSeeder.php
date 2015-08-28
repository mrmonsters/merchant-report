<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Status;
use App\Models\Project;
use App\Models\Merchant;
use App\Models\Report;

class ReportSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$projectId  = Project::where('name', '=', 'Bello2')->first()->id;
		$merchantId = Merchant::where('name', '=', 'Michael Young Hair Saloon')->where('project_id', $projectId)->first()->id;
		$report     = array(
			'project_id'      => $projectId,
			'merchant_id'     => $merchantId,
			'competitors'     => 'Groupon',
			'interested'      => false,
			'merchant_status' => false,
			'action_taken'    => 'Appointment made.',
			'remarks'         => 'Potential customer.',
			'status'          => Status::ACTIVE
		);
		Report::create($report);

		$projectId  = Project::where('name', '=', 'Makandeal')->first()->id;
		$merchantId = Merchant::where('name', '=', 'Yokozuna Japanese Cuisine')->where('project_id', $projectId)->first()->id;
		$report     = array(
			'project_id'      => $projectId,
			'merchant_id'     => $merchantId,
			'competitors'     => 'Groupon, Food Panda',
			'interested'      => false,
			'merchant_status' => false,
			'action_taken'    => 'Appointment made.',
			'remarks'         => 'Potential customer.',
			'status'          => Status::ACTIVE
		);
		Report::create($report);
	}

}
