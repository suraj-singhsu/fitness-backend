@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <div class="container-fluid"> 
        <div id="api-msg" class="alert hide"></div>
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h2>Add New User</h2>
                        </div>
                        <div class="panel-body">
                            <form onsubmit="return false" method="POST" class="form-horizontal row-border" id="validate-form" data-parsley-validate >
                                
                                <div class="form-group">
                                    
                                    <div class="col-xs-3">
                                        <label for="role">Roles<span style="color:red">*</span></label>
                                        <select name="role" id="role" required class="form-control">
                                            <option value=''>Select Role</option>
                                            @foreach($roles as $key => $value)
                                                <option value='{{$key}}'>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="first_name">First Name<span style="color:red">*</span>	</label>
                                        <input name="first_name" id="first_name" type="text" placeholder="First Name" required class="form-control">
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="last_name">Last Name<span style="color:red">*</span>	</label>
                                        <input name="last_name" id="last_name" type="text" placeholder="Last Name" required class="form-control">
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="email">Email<span style="color:red">*</span>	</label>
                                        <input name="email" id="email" type="text" placeholder="Enter Email" data-parsley-pattern="[A-Za-z ]{4,60}" required class="form-control">
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="primary_phone">Primary Phone<span style="color:red">*</span></label>
                                        <input name="primary_phone" id="primary_phone" type="number" placeholder="Enter Primary Phone" required class="form-control">
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="secondary_phone">Secondary Phone</label>
                                        <input name="secondary_phone" id="secondary_phone" type="number" placeholder="Enter Secondary Phone" class="form-control">
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="gender">Gender<span style="color:red">*</span></label>
                                        <select name="gender" id="gender" required class="form-control">
                                            <option value=''>Select Gender</option>
                                            <option value='male'>Male</option>
                                            <option value='female'>Female</option>
                                            <option value='other'>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="dob">Date of Birth</label>
                                        <input name="dob" id="dob" type="date" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="country_id">Country<span style="color:red">*</span></label>
                                        <select name="country_id" id="country_id" class="form-control" onChange="getStates(this)">
                                            <option value="">Select Country</option>
                                            @foreach($countries as $key => $value)
                                                <option value={{$value->id}}>{{$value->country_code." - ".$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                   <div class="col-xs-3">
                                        <label for="state_id">State<span style="color:red">*</span></label>
                                        <select  name="state_id" id="state_id" required class="form-control" onChange="getCities(this)">
                                            <option value=''>Select State</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="city_id">City<span style="color:red">*</span></label>
                                        <select  name="city_id" id="city_id" required class="form-control">
                                            <option value=''>Select City</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-xs-3">
                                        <label for="pincode">Pincode<span style="color:red">*</span></label>
                                        <input name="pincode" id="pincode" type="number" placeholder="Enter Pincode" required class="form-control">
                                   </div>
                                </div>
                                <div class="form-group" style="padding:0%">
                                    <div class="col-xs-12">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="address" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <!-- Hidden Data  Start -->
                                <input type="hidde" name="user_id" id="user_id" />
                                <!-- Hidden Data End -->
                                <div class="row">	
                                    <div class="col-sm-12 ">
                                        <input onclick="add_update_teacher('validate-form','{{url('ajax/addUpdateTeacher')}}')" id="btn_submit" value="Submit" type="submit" class="btn-success btn">
                                        <input onclick="add_update_teacher('validate-form','{{url('ajax/addUpdateTeacher')}}')" id="btn_update" value="Update" type="submit" class="btn-primary btn" style="display:none" >
                                        <input id="btn_submit" value="Cancel" type="reset" class="btn-inverse btn">
                                    </div>
                                </div>
                            </form>		
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container-fluid -->
    <script>

        function add_update_teacher(formid,url){
            var data = new FormData($('#'+formid)[0]);
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "POST",
                data: data,
                mimeType: "multipart/form-data",
                cache:false,
                contentType: false,
                processData: false,
                success: function(result) {
                    console.log("result1:", result);
                    if(typeof result){
                        result = JSON.parse(result);
                        console.log("result2:", result);
                    }
                    if(result['status'] == 'ok'){
                        $('#api-msg').removeClass("alert-danger").addClass("alert-success").html("<p>"+result['msg']+"</p>");
                        new PNotify({text:result['msg'],type:'success',icon:'ti ti-info-alt',styling:'fontawesome'});
                        setTimeout(function(){
                            // window.location=""; 
                        },2000);
                    }
                },
                error: function(err){
                    // console.log("err:", err);
                    let errResult= JSON.parse(err.responseText);
                    $('#api-msg').removeClass("hide").addClass("alert-danger").html("<p>"+errResult.msg+"</p>");
                    new PNotify({text:errResult.msg,type:'error',icon:'ti ti-info-alt',styling:'fontawesome'});
                }
            });  
        }

        function getStates(e){
            var formData = new FormData();
            formData.append('country_id', e.value);
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{url('ajax/getStateDropdown')}}',
                type: "POST",
                data: formData,
                mimeType: "multipart/form-data",
                cache:false,
                contentType: false,
                processData: false,
                success: function(options) {
                    if(options != ''){
                        $("#state_id").html(options);
                    }
                },
                error: function(err){
                    new PNotify({text:errResult.msg,type:'error',icon:'ti ti-info-alt',styling:'fontawesome'});
                }
            }); 
        }

        function getCities(e){
            var formData = new FormData();
            formData.append('state_id', e.value);
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{url('ajax/getCitiesDropdown')}}',
                type: "POST",
                data: formData,
                mimeType: "multipart/form-data",
                cache:false,
                contentType: false,
                processData: false,
                success: function(options) {
                    if(options != ''){
                        $("#city_id").html(options);
                    }
                },
                error: function(err){
                    new PNotify({text:errResult.msg,type:'error',icon:'ti ti-info-alt',styling:'fontawesome'});
                }
            }); 
        }
    </script>
@endsection