<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Role;

class UserController extends Controller
{
    //

    public function insert_provider(Request $request){
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'membership_id' => 'required|unique:member_profiles',
            'plan_type' => 'required',
        ]);

        MemberProfile::create($request->all());

        return redirect()->back()->with('success', 'Member added successfully.');
    }
    function add_provider(){
        $data= array();
        $data['roles'] = \App\Models\Role::all();
        $data['users'] = \App\Models\User::all(); 
      //   $data['countries'] = DB::select("select * from countries where country_code = 'IN'");
        $data['countries'] = \App\Models\Country::where('country_code', 'IN')->get();
        $data['countries'] = \App\Models\State::where('country_id', '101')->get();
        return view('admin.pages.providers.add-provider', $data);
    }
    function manage_providers (){
        $data= array();
        $data['users'] = \App\Models\User::with('role')->get();
        return view('admin.pages.providers.manage-providers', $data);
    }
    function manage_users (){
        $data= array();
        $data['users'] = \App\Models\User::with('role')->get();
        return view('admin.pages.users.manage-users', $data);
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
    // Role Crud 

    public function roleForm($id = null)
    {
        $role = null;

        if ($id) {
            $role = Role::find($id);
            if (!$role) {
                return redirect()->route('role.index')->with('error', 'Role not found.');
            }
        }

        return view('admin.pages.role.role-from',compact('role'));
    }

    public function saveRole(Request $request, $id = null)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',

        ]);

        if ($id) {
            // Update existing role
            $role = Role::find($id);
            if (!$role) {
                return redirect()->back()->with('error', 'Role not found.');
            }
            $role->name = $request->name;
            $role->code = $request->code;

            $role->save();

            return redirect()->route('role.index')->with('success', 'Role updated successfully.');
        } else {
            // Create new role
            $role = new Role();
            $role->name = $request->name;
            $role->code = $request->code;

            $role->save();

            return redirect()->route('role.index')->with('success', 'Role added successfully.');
        }
    }



    // Role Crud start
    public function manageRole()
    {
        $roles = Role::all();
        return view('admin.pages.role.index', compact('roles'));
    }

    public function addRole(Request $request)
    {
         if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required|string',
                'code' => 'required|string',
            ], [
                'name.required' => 'Role name field is required.',
                'code.required' => 'Role code is required.',
            ]);

            try {
                $roles = new Role();

                $roles->name = $request->name;
                $roles->code = $request->code;
                $roles->save();
                
                return redirect()->route('role.index')->with('success', 'Role added successfully !');

            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Something went wrong. Please try again.');
            }
           
        }
        return view('admin.pages.role.add');
    }

    public function editRole(Request $request, $id)
    {
        $role = Role::find($id);
        if (!$role) {
            return redirect()->route('role.index')->with('error', 'Record not found.');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'string',
                'code' => 'string'

            ]);
          
            $role->name = $request->name;
            $role->code = $request->code;

            $role->save();

            return redirect()->route('role.index')->with('success', 'Role updated successfully!');
        }
        return view('admin.pages.role.edit', compact('role'));
    }

    public function deleteRole($id){
        $role = Role::find($id);

        if (!$role) {
            return redirect()->back()->with('error', 'Role not found.');
        }

        $role->delete();

        return redirect()->route('role.index')->with('success', 'Role deleted successfully.');
    }
    // Role Crud end

    // User Crud start



}
