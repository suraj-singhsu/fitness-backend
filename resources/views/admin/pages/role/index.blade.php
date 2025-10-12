@extends('admin.admin-master-layout2')
@section('after-login-section') 
           
    <div class="container-fluid"> 
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-midnightblue">
                        <div class="mb-3">
                            @include('admin.layouts.message')

                            <a href="{{ route('role.form') }}" class="d-flex justify-content-end btn btn-dark">+ Add New Role</a>

                        </div>
                        <div class="panel-heading">
                            <h2>Role Lists</h2>
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body no-padding">
                            @include('admin.pages.role.partials.table', ['roles' => $roles])
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection