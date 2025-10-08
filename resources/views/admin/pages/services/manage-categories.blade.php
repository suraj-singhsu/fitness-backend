@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <div class="container-fluid"> 
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-md-12">
                    <ion-button class="btn btn-midnightblue mb">Add New Category</ion-button>
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h2>Categories</h2>
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body no-padding">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><i class="fa fa-user"></i></th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key => $value)
                                        <tr class="odd gradeX">
                                            <td>{{$key+1}}</td>
                                            <td>
                                                @if($value->profile_image != '')
                                                    <img src="{{$value->profile_image}}">
                                                @else
                                                    <i class="fa fa-user"></i>
                                                @endif
                                            </td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->role->name}} ({{$value->role->role_code}})</td>
                                            <td>
                                                {{ $value->email ?? 'N/A' }}
                                                @if($value->email != '')
                                                    @if($value->is_email_verified == false)
                                                        <i class="fa fa-warning text-warning"></i>
                                                    @else
                                                        <i class="fa fa-check text-success"></i>
                                                    @endif
                                                @endif
                                            </td>
                                            <td>

                                                {{ $value->phone ?? 'N/A' }}
                                                @if($value->phone != '')
                                                    @if($value->is_phone_verified == true)
                                                        <i class="fa fa-check text-success"></i>
                                                    @else
                                                        <i class="fa fa-warning text-warning"></i>
                                                    @endif
                                                @endif
                                        
                                            </td>
                                            <td>{{$value->status}}</td>
                                            <td>{{$value->created_at ?? 'N/A'}}</td>
                                            <td class="text-center">
                                                @if($value->role_id != 1)
                                                    <a onClick="setData(this)" href="javascript:void(0)" class="btn btn-success btn-sm"  data-role_id={{$value->id}} data-role={{$value->role}} data-name={{$value->name}} data-status={{$value->status}}><i class="fa fa-pencil"></i></a>
                                                    <a onClick="delete_confirmation(this, {{$value->id}})" href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                       
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection