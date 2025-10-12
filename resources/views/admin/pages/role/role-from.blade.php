@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <div class="container-fluid"> 
        <div id="api-msg" class="alert hide"></div>
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                             <h2>{{ isset($role) ? 'Edit Role' : 'Add New Role' }}</h2>
                        </div>
                        <div class="panel-body">
                           <form action="{{ route('role.save', isset($role) ? $role->id : '') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label>Role Name</label>
                                    <input type="text" name="name" value="{{ old('name', $role->name ?? '') }}" class="form-control" placeholder="Enter role name">
                                </div>

                                 <div class="form-group mb-3">
                                    <label>Role Code</label>
                                    <input type="text" name="code" value="{{ old('code', $role->code ?? '') }}" class="form-control" placeholder="Enter role code">
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ isset($role) ? 'Update Role' : 'Add Role' }}
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container-fluid -->
   
@endsection