@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <ol class="breadcrumb mb-n">
        <li><a href="index.html">Settings</a></li>
        <li><a href="#">Manage Countries</a></li>
    </ol>
    <div class="container-fluid"> 
        <div id="api-msg" class="alert hide"></div>
        <div data-widget-group="group1">
            <div class="row">

                <div class="col-sm-12">
                    <div class="panel panel-midnightblue" id="form-panel">
                        <div class="panel-heading">
                            <h2 id="form-heading">Add Country</h2>
                        </div>
                        <div class="panel-body">
                            <form onsubmit="return false" method="POST" class="form-horizontal row-border" id="country-form" data-parsley-validate >
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="code">Country Code<span style="color:red">*</span></label>
                                        <input name="code" id="code" type="text" placeholder="Country Code" required class="form-control" />
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="name">Name<span style="color:red">*</span>	</label>
                                        <input name="name" id="name" type="text" placeholder="Country Name" required class="form-control required"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="status">Status<span style="color:red">*</span>	</label>
                                        <select name="status" id="status" required class="form-control required">
                                            <option value='active'>Active</option>
                                            <option value='inactive'>Inactive</option>
                                        </select>
                                        <input name="country_id" id="country_id" type="hidden"/>
                                    </div>
                                </div>
                                <div class="row">	
                                    <div class="col-sm-12 ">
                                        <input onclick="save_update_country('country-form','{{url('ajax/addUpdateCountry')}}')" id="btn_submit" value="Submit" type="submit" class="btn-success btn">
                                        <input onclick="save_update_country('country-form','{{url('ajax/addUpdateCountry')}}')" id="btn_update" value="Update" type="submit" class="btn-primary btn" style="display: none" >
                                        <input id="btn_reset" value="Cancel" type="reset" class="btn-inverse btn" onclick="resetForm()" />
                                    </div>
                                </div>
                            </form>		
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h2>Countries</h2>
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body no-padding">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Country Code</th>
                                        <th>Country</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($countries as $key => $value)
                                        <tr class="odd gradeX">
                                            <td class="text-center">{{$key+1}}</td>
                                            <td>{{$value->country_code}}</td>
                                            <td>{{$value->name}}</td>
                                            <td class="text-center">
                                                <input class="bootstrap-switch switch-alt" type="checkbox" {{($value->status == 'active') ? 'checked' : '' }} data-on-color="success" data-off-color="danger" data-size="small" onChange="changeStatus(this)" data-status={{$value->status}} data-country_id={{$value->id}} />
                                            </td>
                                            <td class="text-center">
                                                <button onClick="setData(this)" data-country_id={{$value->id}} data-code={{$value->country_code}} data-name={{$value->name}} data-status={{$value->status}} class="btn btn-midnightblue"><i class="fa fa-pencil"></i></button>
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

    <script>
        function save_update_country(formid,url){
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
                            window.location=""; 
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

        function resetForm(){
            $("#btn_submit").show();
            $("#btn_update").hide();
            $("#form-heading").html('Add Country');
            $("#form-panel").addClass('panel-midnightblue').removeClass('panel-info');
        }

        function setData(e){
            $("#form-heading").html('Update Country');
            $("#form-panel").removeClass('panel-midnightblue').addClass('panel-info');
            let country_id = e.getAttribute('data-country_id');
            let code = e.getAttribute('data-code');
            let name = e.getAttribute('data-name');
            let status = e.getAttribute('data-status');
            
            $("#code").val(code).prop('readonly', true);
            $("#name").val(name).focus();
            $("#status").val(status);
            $("#country_id").val(country_id);
            $("#btn_submit").hide();
            $("#btn_update").show();
        }

        function changeStatus(e){
            var formData = new FormData();
            let current_status = e.getAttribute('data-status');
            let country_id = e.getAttribute('data-country_id');
            console.log("current_status:",current_status);
            console.log("country_id:",country_id);
            let new_status = (current_status == 'active') ? 'inactive' : 'active';
            console.log("new_status:", new_status);

            formData.append('country_id', country_id);
            formData.append('status', new_status);
            console.log("forData:", formData);
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{url('ajax/update-country-status')}}',
                type: "POST",
                data: formData,
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
                    e.setAttribute('data-status', new_status);
                    if(result['status'] == 'ok'){
                        new PNotify({text:result['msg'],type:'success',icon:'ti ti-info-alt',styling:'fontawesome'});
                    }
                },
                error: function(err){
                    e.setAttribute('data-status', current_status);
                    new PNotify({text:errResult.msg,type:'error',icon:'ti ti-info-alt',styling:'fontawesome'});
                }
            }); 
            

        }
    </script>
@endsection