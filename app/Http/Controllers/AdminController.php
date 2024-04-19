<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use Carbon;

use Illuminate\Support\Facades\Storage;

use App\Models\AdminModel;

use DB;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    protected function dashboard(){

		if(session()->get('user_id')==1){

			$model = new AdminModel;

			$result = $model::dashboard();

			Session::put('sidebar', $result);
			$minutes = 525600;
			config(['session.lifetime' => $minutes]);
			config(['session.cookie_lifetime' => $minutes]);
			return view('Admin/index');
			
		}else{
			return view('login');
		}	

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

	
		if(session()->get('user_id')==1){

			$model = new AdminModel;

			$list = [

				'brgy_name' => $request->input('brgy_name'),
				'list_of_members' => $request->input('list_of_members')

			];

			$result = $model::member_list($list);
			return view('Admin/pwd_member')->with('data',$result);

			
		}else{
			return view('login');
		}

    	
    }

	protected function brgys(){

			$data = [
				['barangay_name' => 'Brgy. 1'],
				['barangay_name' => 'Brgy. 2'],
				['barangay_name' => 'Brgy. 3'],
				['barangay_name' => 'Brgy. 4'],
				['barangay_name' => 'Anahaw'],
				['barangay_name' => 'Bato'],
				['barangay_name' => 'Gargato'],
				['barangay_name' => 'Baga-as'],
				['barangay_name' => 'Calapi'],
				['barangay_name' => 'Camalobalo'],
				['barangay_name' => 'Candumarao'],
				['barangay_name' => 'Camba-og'],
				['barangay_name' => 'Cambugsa'],
				['barangay_name' => 'Aranda'],
				['barangay_name' => 'Palayog'],
				['barangay_name' => 'Tuguis'],
				['barangay_name' => 'Paticui'],
				['barangay_name' => 'Quiwi'],
				['barangay_name' => 'Narauis'],
				['barangay_name' => 'Himaya'],
				['barangay_name' => 'Nanunga'],
				['barangay_name' => 'Pilar'],
				['barangay_name' => 'Tagda'],
				['barangay_name' => 'Miranda']
			];


		$sql = DB::table('tbl_brgys')->insert($data);

	}

	protected function logout(Request $request){
		$request->session()->flush();
		return redirect('/login');
	}
	



}
