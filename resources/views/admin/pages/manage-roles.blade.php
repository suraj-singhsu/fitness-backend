@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <ol class="breadcrumb">
        <li><a href="index.html">Setup</a></li>
        <li><a href="#">Manage Roles</a></li>
    </ol>
    <div class="container-fluid"> 
        <div data-widget-group="group1">
            <div class="col-sm-12">
                    <div class="panel panel-midnightblue" id="form-panel">
                        <div class="panel-heading">
                            <h2 id="form-heading">Add Privilege Entity</h2>
                        </div>
                        <div class="panel-body">
                            <form onsubmit="return false" method="POST" class="form-horizontal row-border" id="validate-form" data-parsley-validate >
                                
                                <div class="row">
                                    
                                    <div class="col-sm-3">
                                        <label for="entity_code">Entity Code<span style="color:red">*</span></label>
                                        <input name="code" id="entity_code" type="text" placeholder="Enter entity Code" required class="form-control" />
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="entity_name">Entity Name<span style="color:red">*</span>	</label>
                                        <input name="name" id="entity_name" type="text" placeholder="Enter entity Name" required class="form-control"/>
                                    </div>
                                </div>
                                <div class="row">	
                                    <div class="col-sm-12 mt">
                                        <input onclick="saveUpdate('validate-form','{{url('ajax/add-update-privilege-entity')}}', 'btn_submit')" id="btn_submit" value="Submit" type="submit" class="btn-success btn">
                                        <input onclick="saveUpdate('validate-form','{{ url('ajax/add-update-privilege-entity')}}', 'btn_update')" id="btn_update" value="Update" type="submit" class="btn-primary btn" style="display:none" >
                                        <input onclick="resetForm()" value="Cancel" type="reset" class="btn-inverse btn" />
                                    </div>
                                </div>
                            </form>		
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Data Tables</h2>
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body no-padding">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $key => $value)
                                        <tr class="odd gradeX">
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->role_code}}</td>
                                            <td class="text-center">
                                                <a onClick="setData(this)" href="javascript:void(0)" class="btn btn-success btn-sm"  data-role_id={{$value->id}} data-role={{$value->role}} data-name={{$value->name}} data-status={{$value->status}}><i class="fa fa-pencil"></i></a>
                                                <a onClick="delete_confirmation(this, {{$value->id}})" href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
    </div> <!-- .container-fluid -->
@endsection