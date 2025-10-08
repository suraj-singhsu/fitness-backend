<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    function manage_services (){
        $data= array();
        $data['users'] = \App\Models\User::with('role')->get();
        return view('admin.pages.services.manage-services', $data);
    }
    function manage_categories (){
        $data= array();
        $data['users'] = \App\Models\User::with('role')->get();
        return view('admin.pages.services.manage-categories', $data);
    }
    function add_user(){
        $data= array();
        $data['roles'] = \App\Models\Role::all();
        $data['users'] = \App\Models\User::all(); 
        $data['countries'] = DB::select("select * from countries where country_code = 'IN'");
        $data['states'] = DB::select("select * from states where country_id = '101'");
        return view('admin.pages.users.add-user', $data);
    }

    public function store(Request $request){
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'membership_id' => 'required|unique:member_profiles',
            'plan_type' => 'required',
        ]);

        MemberProfile::create($request->all());

        return redirect()->back()->with('success', 'Member added successfully.');
    }
}
