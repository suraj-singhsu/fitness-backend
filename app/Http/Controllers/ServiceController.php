<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    
    function manage_services (){
        $data= array();
        $data['users'] = \App\Models\User::with('role')->get();
        return view('admin.pages.services.manage-services', $data);
    }
    
    function new_service (){
      $data= array();
      $data['service_categories'] = \App\Models\ServiceCategory::all();
      return view('admin.pages.services.add-service', $data);
    }


   public function manageCategories (Request $request){
      $data= array('parentInfo' => array());
      $parent_id = null;
      if($request->query('parent_id')){
         $parent_id = $request->query('parent_id');
         $data['parentInfo'] = ServiceCategory::where('id', $parent_id)->first();

      }
      $data['service_categories'] = ServiceCategory::where('parent_id', $parent_id)->withCount('children')->get();
      $data['parent_id'] = $parent_id;
      //   dd($data);
      return view('admin.pages.services.manage-categories', $data);
   }

   public function insertUpdateCategory(Request $request){
      $validated = $request->validate([
        'name'       => 'required|string|max:255',
        'parent_id'  => 'nullable|integer',
        'status'     => 'required|boolean',
        'description'=> 'nullable|string',
      ]);
      // dd($request);
      $category_id = null;
      // If updating
      if($request->category_id && $request->category_id != null){
         $category_id = $request->category_id;
      }
      $category = ServiceCategory::find($category_id) ?? new ServiceCategory();
      $parent_id = ($request->parent_id != 0 && $request->parent_id != '') ? $request->parent_id : null;
      $category->name = $request->name;
      $category->parent_id = $parent_id;
      $category->status = $request->status;
      $category->description = $request->description;
      $category->save();
      if($parent_id != null){
         return redirect()->route('category.list', ['parent_id'=> $parent_id])->with('success', 'Sub category added successfully.');
      }else{
         return redirect()->route('category.list', )->with('success', 'New category added successfully.');
      }
   }

   public function addCategoryForm(Request $request, $parent_id = null){
      $data = [];
      $data['parent_id'] = null;
      $data['category_id'] = null;
      $data['service_categories'] = ServiceCategory::all();
      if($parent_id){
         $data['parent_id'] = $parent_id;
      }
      return view('admin.pages.services.add-category', $data);
   }

   public function editCategoryForm(Request $request, $id){
      $data = [];
      // $data['parent_id'] = null;
      $data['categoryInfo'] = null;
      $data['category_id'] = null;
      if($id != null){
         $data['category_id'] = $id;
         $data['categoryInfo'] = ServiceCategory::where('id', $id)->first();
      }
      $data['service_categories'] = ServiceCategory::all();
      // if($request->query('parent_id')){
      //    $data['parent_id'] = $request->query('parent_id');
      // }
      return view('admin.pages.services.edit-category', $data);
   }

   public function categoryDelete($id){
    $category = ServiceCategory::find($id);
    if(!$category) {
        return redirect()->back()->with('error', 'Category not found.');
    }

    $category->delete();

    return redirect()->back()->with('success', 'Category deleted successfully.');
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
