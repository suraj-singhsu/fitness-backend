@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <ol class="breadcrumb mb-n">
        <li><a href="javascript:void(0)">Email Template</a></li>
        <li><a href="#">List</a></li>
    </ol>
    <div class="container-fluid"> 
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('/email-template/add')}}" class="btn btn-info m ml-n mt-n">Add New Template</a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Email Templates</h2>
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
                                   
                                        <tr class="odd gradeX">
                                            <td>qwerty</td>
                                            <td>qwerty</td>
                                            <td>qwerty</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                       
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