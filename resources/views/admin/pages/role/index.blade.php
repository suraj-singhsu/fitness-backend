@extends('admin.admin-master-layout2')
@section('after-login-section') 
           
  
            <div class="row">
                <div class="col-md-12">
                  <a href="{{ route('role.form') }}" class=" btn btn-midnightblue mb">Add Role</a>
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body no-padding">
                            @include('admin.pages.role.partials.table', ['roles' => $roles])
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
     
@endsection