<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GlanceController extends Controller{
    public function login(Request $request){
        return view('glance.login');
    }
    
    public function dashboard(){
        return view('glance.pages.dashboard');
    }
    
    public function manageRoles(){
        $data = array();
        $data['roles'] = \App\Models\Role::all();
        return view('glance.pages.manage-roles', $data);
    }
}