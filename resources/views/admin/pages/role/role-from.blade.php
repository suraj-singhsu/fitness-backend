@extends('admin.admin-master-layout2')
@section('after-login-section')            
   
            <div class="row">
                <div class="col-sm-12">
                  <a href="{{ route('role.index') }}" class=" btn btn-midnightblue mb">View All Role</a>
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                             <h2>{{ isset($role) ? 'Edit Role' : 'Add New Role' }}</h2>
                        </div>
                        <div class="panel-body">
                           <form action="{{ route('role.save', isset($role) ? $role->id : '') }}" method="POST">
                                @csrf
                                 <div class="row">
                                    <div class="col-sm-3 mb-3">
                                       <label class="mb-n">Role Name</label>
                                       <input type="text" name="name" value="{{ old('name', $role->name ?? '') }}" class="form-control" placeholder="Enter role name">
                                    </div>

                                       
                                       <div class="col-sm-3 mb-3">
                                          <label class="mb-n">Role Code</label>
                                          <input type="text" name="code" value="{{ old('code', $role->code ?? '') }}" class="form-control" placeholder="Enter role code">
                                    </div>
                                    
                                 </div>
                                
                                       <button type="submit" class="btn btn-midnightblue mt">
                                    {{ isset($role) ? 'Update Role' : 'Add Role' }}
                                </button>
                                

                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    
@endsection