<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Support\Facades\Hash;

use Session;

use Illuminate\Http\Request;

class redirection extends Controller
{
    protected function register(){

            $data = [

                [
                    "username" => "admin",
                    "password" => Hash::make('p@55w0rd'),
                    "designation" => "admin"
                ],
                [
                    "username" => "solo",
                    "password" => Hash::make('p@55w0rd'),
                    "designation" => "solo parent"
                ],
                [
                    "username" => "pwd",
                    "password" => Hash::make('p@55w0rd'),
                    "designation" => "pwd"
                ],
                [
                    "username" => "women",
                    "password" => Hash::make('p@55w0rd'),
                    "designation" => "women"
                ],
                [
                    "username" => "senior",
                    "password" => Hash::make('p@55w0rd'),
                    "designation" => "senior"
                ],

            ];

        DB::table('users')->insert($data);
            
    }

    protected function login_auth(Request $request){

        
            $credentials = $request->only('username', 'password');
            $user = DB::table('users')->where('username', $request->input('username'))->first();
        
            if($user && Hash::check($request->input('password'), $user->password)){
                session()->put(['user_id'=>$user->id,'designation'=>$user->designation]);
                if($user->designation == "admin"){
                    return redirect()->to('/admin');
                }elseif($user->designation == "solo parents"){
                    return redirect()->to('user');
                }elseif($user->designation == "pwd"){
                    return redirect()->to('user');
                    
                }elseif($user->designation == "womens"){
                    return redirect()->to('user');
                }else{
                    return redirect()->to('user');
                }
                
            }else{
                return back()->withInput()->withErrors(['password' => 'Invalid credentials']);
            }

    }
    
    protected function user_direction(){

		return view('users/addpwd');
		
	}

}
