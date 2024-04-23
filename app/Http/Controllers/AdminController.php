<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use Carbon\Carbon;

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

			$countpwd = DB::table('pwds')->count();
			$countsolo = DB::table('solo_parents')->count();
			$countsenior = DB::table('seniors')->count();

			return view('Admin/index')->with(["pwd"=>$countpwd,"solo"=>$countsolo,"senior"=>$countsenior]);
			
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

			// $model = new AdminModel;
			$brgy_name = $request->input('brgy_name');

			// $result = $model::member_list($list);
			$list_mem = $request->input('list_of_members');
			switch ($list_mem) {
                case 'pwd':
                    $sql = DB::table('pwds')->where('barangay',$brgy_name)->get();
                    return view('Admin.pwd_member')->with('data',$sql);
                    break;
                case 'solo_parent':
                // echo $brgy_name;
                    $sql = DB::table('solo_parents')->where('barangay',$brgy_name)->get();
                    return view('Admin.solo_parent_members')->with('data',$sql);
                    break;

                case 'womens':
                    # code...
                    break;

                case 'senior':
                    $sql = DB::table('seniors')->where('barangay',$brgy_name)->get();
                    return view('Admin.senior_member')->with('data',$sql);
                    break;
                
                default:
                    # code...
                    break;
            }
			
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
