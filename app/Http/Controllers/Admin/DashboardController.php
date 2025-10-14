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
      //   $data['countries'] = DB::select("select * from countries");
        $data['countries'] = \App\Models\Country::all();
        return view('admin.pages.setup.manage-countries', $data);
    }
    function viewStates(Request $request){
        $veiwData = Array();
        $veiwData = Array();
        
        if($request->country_id){
            // $state_query = "SELECT *, (SELECT name FROM countries where id='$request->country_id') as country_name from states WHERE country_id='$request->country_id' ORDER BY name ASC";
            // $veiwData['states'] = DB::select($state_query);
            $veiwData['states'] = \App\Models\State::where('country_id', $request->country_id)->get();
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
            $state_query = "SELECT * from tbl_states WHERE country_id='$request->country_id' ORDER BY name ASC";
            $veiwData['states'] = \App\Models\state::where('country_id', $request->country_id)->get();
        }
        
        if( $request->country_id && $request->state_id){
            $veiwData['cities'] =  \App\Models\city::where('country_id', $request->country_id)->where('state_id', $request->state_id)->get();
        }
        return view('admin.pages.setup.manage-cities', $veiwData);
    }
    public function getAllCountries(){
        return DB::select("select * from tbl_countries WHERE status='active' ORDER BY name ASC");
    }

    function add_new_address(Request $request){
      $data = array();
      
      if($request->query('user_id')){
         $data['userInfo'] = \App\Models\User::select('id', 'name', 'email', 'phone')->find($request->query('user_id'));
      }
      return view('admin.pages.address.add-new-address', $data);
   }
   
   function new_document(Request $request){
      $data = array();
      $data['document_types'] = config('constants.document_types');
      if($request->query('user_id')){
         $data['userInfo'] = \App\Models\User::select('id', 'name', 'email', 'phone')->find($request->query('user_id'));
      }
      return view('admin.pages.document.new-document', $data);
   }
   function getCountries(){
      $data = array();
      return DB::select("select * from countries where status='active'");
   }
}
