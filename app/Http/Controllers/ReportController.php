<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;
use Redirect;
use App\Models\Status;
use App\Models\Project;
use App\Models\Merchant;
use App\Models\Report;

class ReportController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($projectId)
	{
		//
		$project   = Project::find($projectId);
		$merchants = $project->merchants()->where('status', STATUS::ACTIVE)->get();
		Session::set('project_id', $project->id);

		return view('reports.merchants.index')->with('merchants', $merchants);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('reports.merchants.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $req)
	{
		//
		$response = array();
		$data = $req->input();

		if (isset($data) && is_array($data) && !empty($data))
		{
			// Store merchant
			$merchantData = array();
			$merchantData['project_id']  = $data['project_id'];
			$merchantData['category_id'] = $data['category_id'];
			$merchantData['name']        = $data['name'];
			$merchantData['address']     = $data['address'];
			$merchantData['pic']         = $data['pic'];
			$merchantData['email']       = $data['email'];
			$merchantData['contact_no']  = $data['contact_no'];
			$merchant = Merchant::create($merchantData);

			// Store report
			$reportData = array();
			$reportData['project_id']      = $data['project_id'];
			$reportData['merchant_id']     = $merchant->id;
			$reportData['competitors']     = $data['competitors'];
			$reportData['interested']      = $data['interested'];
			$reportData['merchant_status'] = $data['merchant_status'];
			$reportData['action_taken']    = $data['action_taken'];
			$reportData['remarks']         = $data['remarks'];
			$report = Report::create($reportData);
		
			if ($merchant->id && $report->id)
			{
				$response['code'] = STATUS::SUCCESS;
				$response['msg']  = 'New [Report #'.$report->id.'] is created in project ['.$report->project->name.'].';

				// Redirect with successful message
				return redirect('report/' . $data['project_id'])->with('response', $response);
			}
		}

		$response['code'] = STATUS::ERROR;
		$response['msg']  = 'Unable to create new report.';

		// Redirect with error message
		return Redirect::back()->with('response', $response); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$report = Report::find($id);

		return view('reports.merchants.view')->with('report', $report);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$report = Report::find($id);

		return view('reports.merchants.edit')->with('report', $report);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $req)
	{
		//
		$response = array();
		$data = $req->input();

		if (isset($data) && is_array($data) && !empty($data))
		{
			$report = Report::find($id);

			if (isset($report) && $report->id)
			{
				// Store merchant
				$merchantData = array();
				$merchantData['project_id']  = $data['project_id'];
				$merchantData['category_id'] = $data['category_id'];
				$merchantData['name']        = $data['name'];
				$merchantData['address']     = $data['address'];
				$merchantData['pic']         = $data['pic'];
				$merchantData['email']       = $data['email'];
				$merchantData['contact_no']  = $data['contact_no'];
				$report->merchant()->update($merchantData);


				// Store report
				$reportData = array();
				$reportData['project_id']      = $data['project_id'];
				$reportData['merchant_id']     = $report->merchant->id;
				$reportData['competitors']     = $data['competitors'];
				$reportData['interested']      = $data['interested'];
				$reportData['merchant_status'] = $data['merchant_status'];
				$reportData['action_taken']    = $data['action_taken'];
				$reportData['remarks']         = $data['remarks'];
				$report->update($reportData);
			
				if ($report->merchant->id && $report->id)
				{
					$response['code'] = STATUS::SUCCESS;
					$response['msg']  = 'Changes have been made for [Report #'.$report->id.'] in project ['.$report->project->name.'].';

					// Redirect with successful message
					return Redirect::to('report/' . $data['project_id'])->with('response', $response);
				}
			}
		}

		$response['code'] = STATUS::ERROR;
		$response['msg']  = 'Unable to update report.';

		// Redirect with error message
		return Redirect::back()->with('response', $response);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $req)
	{
		//
		$response = array();
		$report = Report::find($id);

		if (isset($report) && $report->id)
		{
			$report->status = STATUS::INACTIVE;
			$report->save();
			$report->merchant()->update(array('status' => STATUS::INACTIVE));

			$response['code'] = STATUS::SUCCESS;
			$response['msg']  = '[Report #'.$report->id.'] has been deleted from project ['.$report->project->name.'].';

			// Redirect with successful message
			return Redirect::to('report/'.$report->project->id)->with('response', $response);
		}

		$response['code'] = STATUS::ERROR;
		$response['msg']  = 'Unable to delete report.';

		// Redirect with error message
		return Redirect::back()->with('response', $response);
	}

}
