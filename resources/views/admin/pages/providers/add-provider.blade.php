@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <div class="container-fluid"> 
        <div id="api-msg" class="alert hide"></div>
        <div class="panel mb">
            <div class="panel-heading">
                <h2>Add Provider</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-midnightblue" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Personal Information</h2>
                        <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body, .panel-footer"}'></div>
                    </div>
                    <div class="panel-body" style="height: 148px">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row">
                                    <label class="col-sm-12">Profile Picture</label>
                                    <div class="col-sm-12">
                                        <div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
                                            <div>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="first_name" class="mb-n">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="last_name" class="mb-n">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" required>
                                    </div>
                                </div>
                                <div class="row mt">
                                    <div class="col-sm-6">
                                        <label for="phone" class="mb-n">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email" class="mb-n">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                                    </div>
                                </div>
                                <div class="row mt">
                                    <div class="col-sm-6">
                                        <label for="gender" class="mb-n">Gender</label>
                                        <select id="gender" name="gender" class=form-control>
                                            <option value="">Select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="gender" class="mb-n">Status</label>
                                        <select id="gender" name="gender" class=form-control>
                                            <option value="">Select</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 mb text-center">
                        <button class="btn btn-midnightblue">Save</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-midnightblue" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Documents / KYC</h2>
                        <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body, .panel-footer"}'></div>
                    </div>
                    <div class="panel-body" style="height: 148px">
                        <div class="row mt">
                            <div class="col-sm-6">
                                <label for="document_type" class="mb-n">Document Type</label>
                                <select id="document_type" name="document_type" class=form-control>
                                    <option value="">Select</option>
                                    <option>Adhar Card</option>
                                    <option>Pan Card</option>
                                    <option>Driver Licence</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="document_number" class="mb-n">Document Number</label>
                                <input type="text" name="document_number" id="document_number" class="form-control" placeholder="Enter Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <span class="text-gray"><em>Footer</em></span>
                    </div>
                </div>
            </div>
           
        </div>
        
       
            
        
    </div>


@endsection