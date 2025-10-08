<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    function add_email_template(){
        return view('admin.pages.email-template.add');
    }

    function email_template_list(){
        return view('admin.pages.email-template.list');
    }

    function viewCMS(){
        return view('admin.pages.cms.view-cms');   
    }
    function addCMS(){
        return view('admin.pages.cms.add-cms');   
    }
    function index(){
        return view('admin.pages.dashboard');   
    }
    
    function manageRoles(){
        $data = array();
        $data['roles'] = \App\Models\Role::all();
        return view('admin.pages.manage-roles', $data); 
    }

    function manageUsers(){
        $data = array();
        $data['users'] = \App\Models\User::with('role')->get();
        return view('admin.pages.manage-users', $data); 
    }

    function addUser(){
        $data = array();
        $data['roles'] = \App\Models\Role::all();
        $data['countries'] = DB::select("select * from countries where country_code = 'IN'");
        $data['states'] = DB::select("select * from states where country_id = '101'");
        // dd($data);
        return view('admin.pages.user.add-user', $data); 
    }

    function changePassword(){
        return view('admin.pages.change-password');
    }
    function myProfile(){
        return view('admin.pages.my-profile');
    }
    function viewCountries(){
        $data = array();
        $data['countries'] = DB::select("select * from countries");
        return view('admin.pages.setup.manage-countries', $data);
    }
    function viewStates(Request $request){
        $veiwData = Array();
        $veiwData = Array();
        $veiwData['states'] = Array();
        if($request->country_id){
            $state_query = "SELECT *, (SELECT name FROM countries where id='$request->country_id') as country_name from states WHERE country_id='$request->country_id' ORDER BY name ASC";
            $veiwData['states'] = DB::select($state_query);
        }else{
            $veiwData['state'] = "asdfg";
        }
        $veiwData['countries'] = $this->getAllCountries();
        return view('admin.pages.setup.manage-states', $veiwData);
    }
    function viewCities(Request $request){
        $veiwData = Array('country_id' => '', 'state_id' => '');
        $veiwData['states'] = Array();
        $veiwData['cities'] = Array();
        $veiwData['countries'] = $this->getAllCountries();
        if($request->country_id){
            $veiwData['country_id'] = $request->country_id;
            $state_query = "SELECT * from states WHERE country_id='$request->country_id' ORDER BY name ASC";
            $veiwData['states'] = DB::select($state_query);
        }
        if($request->state_id){
            $veiwData['state_id'] = $request->state_id;
        }
        if( $request->state_id){
            $veiwData['cities'] =  DB::select("SELECT *, (SELECT name FROM states where id='$request->state_id') as state_name from cities WHERE state_id='$request->state_id'");
        }
        return view('admin.pages.setup.manage-cities', $veiwData);
    }
    public function getAllCountries(){
        return DB::select("select * from countries WHERE status='active' ORDER BY name ASC");
    }
}
