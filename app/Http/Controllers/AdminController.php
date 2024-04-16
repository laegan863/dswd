<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use Carbon;

use Illuminate\Support\Facades\Storage;

use App\Models\AdminModel;

class AdminController extends Controller
{
    protected function dashboard(){

    	$model = new AdminModel;

    	$result = $model::dashboard();

    	Session::put('sidebar', $result);
		$minutes = 525600;
	    config(['session.lifetime' => $minutes]);
	    config(['session.cookie_lifetime' => $minutes]);

    	return view('Admin/index');

    }

    protected function pwd(Request $request){

    	return view('Admin/pwd');

    }

    protected function add_pwd_member(Request $request){

    	$model = new AdminModel;

    	$result = $model::dashboard();


    	return view('Admin/addpwd')->with('brgy', $result);

    }

    protected function pwd_application(Request $request){

    	 

    	$data = [

			    'member_account_id' => $request->input('member_account_id'),
			    'application' => $request->input('application'),
			    'date_applied' => $request->input('date_applied'),
			    'last_name' => $request->input('last_name'),
			    'first_name' => $request->input('first_name'),
			    'middle_name' => $request->input('middle_name'),
			    'suffix' => $request->input('suffix'),
			    'date_of_birth' => $request->input('date_of_birth'),
			    'sex' => $request->input('sex'),
			    'civil_status' => $request->input('civil_status'),
			    'type_of_disabilities' => $request->input('type_of_disabilities'),
			    'cause_of_disabilities' => $request->input('cause_of_disabilities'),
			    'house_number_street' => $request->input('house_number_street'),
			    'barangay' => $request->input('barangay'),
			    'municipality' => $request->input('municipality'),
			    'province' => $request->input('province'),
			    'region' => $request->input('region'),
			    'landline_num' => $request->input('landline_num'),
			    'mobile_num' => $request->input('mobile_num'),
			    'email' => $request->input('email'),
			    'educational_attainment' => $request->input('educational_attainment'),
			    'occupation' => $request->input('occupation'),
			    'status_of_employment' => $request->input('status_of_employment'),
			    'type_of_employment' => $request->input('type_of_employment'),
			    'category_of_employment' => $request->input('category_of_employment'),
			    'organization_affiliated' => $request->input('organization_affiliated'),
			    'contact_person' => $request->input('contact_person'),
			    'office_address' => $request->input('office_address'),
			    'tel_nos' => $request->input('tel_nos'),
			    'sss_num' => $request->input('sss_num'),
			    'gsis_num' => $request->input('gsis_num'),
			    'pagibig_num' => $request->input('pagibig_num'),
			    'psn_num' => $request->input('psn_num'),
			    'philhealth_num' => $request->input('philhealth_num'),
			    'father_l_name' => $request->input('father_l_name'),
			    'father_f_name' => $request->input('father_f_name'),
			    'father_m_name' => $request->input('father_m_name'),
			    'mother_l_name' => $request->input('mother_l_name'),
			    'mother_f_name' => $request->input('mother_f_name'),
			    'mother_m_name' => $request->input('mother_m_name'),
			    'gaurdian_l_name' => $request->input('gaurdian_l_name'),
			    'gaurdian_f_name' => $request->input('gaurdian_f_name'),
			    'gaurdian_m_name' => $request->input('gaurdian_m_name'),
			    'accomplish_by' => $request->input('accomplish_by'),
			    'accomplish_l_name' => $request->input('accomplish_l_name'),
			    'accomplish_f_name' => $request->input('accomplish_f_name'),
			    'accomplish_m_name' => $request->input('accomplish_m_name'),
			    'physician_lisence_number' => $request->input('physician_lisence_number'),
			    'physician_l_name' => $request->input('physician_l_name'),
			    'physician_f_name' => $request->input('physician_f_name'),
			    'physician_m_name' => $request->input('physician_m_name'),
			    'processing_l_name' => $request->input('processing_l_name'),
			    'processing_f_name' => $request->input('processing_f_name'),
			    'processing_m_name' => $request->input('processing_m_name'),
			    'approving_l_name' => $request->input('approving_l_name'),
			    'approving_f_name' => $request->input('approving_f_name'),
			    'approving_m_name' => $request->input('approving_m_name'),
			    'encoder' => $request->input('encoder'),
			    'name_of_reporting' => $request->input('name_of_reporting'),
			    'control_num' => $request->input('control_num'),
			    
			];

			if ($request->hasFile('img')) {

		       $data["img"] = $request->file('img')->store('img');

		    }

			$models = new AdminModel;

			$result = $models::pwd_application($data);

			return back()->with('msg',1);


    }

    protected function select_brgy($barangay_name){

    	$model = new AdminModel;

    	$result = $model::select_brgy($barangay_name);

    	session()->put(['return_data' => $result, 'brgy_name' => $barangay_name]);
    	return redirect()->to('barangay');

    }

    protected function brgy(){

    	return view('Admin/barangay');
    }

    protected function member_list(Request $request){

    	$model = new AdminModel;

    	$list = [

    		'brgy_name' => $request->input('brgy_name'),
    		'list_of_members' => $request->input('list_of_members')

    	];

    	$result = $model::member_list($list);
    	return view('Admin/pwd_member')->with('data',$result);

    }

    protected function solo_parent(){
    	return view('Admin/solo_parent');
    }



}
