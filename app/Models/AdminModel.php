<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class AdminModel extends Model
{
    use HasFactory;

    protected function dashboard(){

    	DB::beginTransaction();

    	try {

    		$sql = DB::table('tbl_brgys')->get();
    		return $sql;
            DB::commit();
    		
    	} catch (Exception $e) {

    		
    	}


    }

    protected function pwd_application($data){

    	DB::beginTransaction();

        try {

            $sql = DB::table('pwds')->insert($data);

            DB::commit();

        } catch (\Exception $e) {

            DB::rollback();

            throw $e;
            
        }

    }

    protected function select_brgy($data){

    	DB::beginTransaction();

    	try {

    		$sql = DB::table('pwds')->where('barangay',$data)->get();
    		return $sql;
    		
    	} catch (Exception $e) {
    		
    	}

    }

    protected function member_list($list){

        // DB::beginTransaction();
        $lists = $list["list_of_members"];

        try {

            switch ($lists) {
                case 'pwd':
                    $sql = DB::table('pwds')->where('barangay',$list["brgy_name"])->get();

                    $result = [
                        "sql"=>$sql,
                        "location"=>"pwd"
                    ];
                    return $result;

                    break;
                case 'solo_parents':
                    $sql = DB::table('solo_parents')->where('barangay',$list["brgy_name"])->get();
                    $result = [
                        "sql"=> $sql,
                        "location"=>"solo"
                    ];
                    return $result;
                    break;

                case 'womens':
                    # code...
                    break;

                case 'senior':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }

            
            
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }


    }

}
