@extends('admin.admin-master-layout2')
@section('after-login-section')  

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
      $( "#sortable" ).sortable();
      $( "#sortable" ).disableSelection();
    } );
    </script>
<style>
    .alert{
        padding: 10px;
        margin-bottom: 20px;
    }
    i{
        font-size: 18px !important;
        /* margin: 0px 5px; */
    }
    .drag-item{
        margin: 5px;
    }
    .parsley-required{
        color:red;
    }
</style>          
    <ol class="breadcrumb mb-n">
        <li><a href="{{url('admin/dashboard')}}">Home</a></li>
        <li><a href="{{url('admin/my-profile')}}">My Profile</a></li>
        <li><a href="javascript:void(0)">Change Password</a></li>

    </ol>
    <div class="container-fluid"> 
        <div id="api-msg" class="alert hide"></div>
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-midnightblue" id="form-panel">
                        <div class="panel-heading">
                            <h2 id="form-heading">Change Password</h2>
                        </div>
                        <div class="panel-body">
                            <form onsubmit="return false" method="POST" class="form-horizontal row-border" id="validate-form" data-parsley-validate >
                                
                                <div class="row">
                                    
                                    <div class="col-sm-3">
                                        <label for="old_password">Old Password<span style="color:red">*</span></label>
                                        <input name="old_password" id="old_password" type="text" placeholder="Enter entity Code" required class="form-control" />
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="new_password">New Password<span style="color:red">*</span>	</label>
                                        <input name="new_password" id="new_password" type="text" placeholder="Enter entity Name" required class="form-control"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="confirm_password">Confirm New Password<span style="color:red">*</span>	</label>
                                        <input name="confirm_password" id="confirm_password" type="text" placeholder="Enter entity Name" required class="form-control"/>
                                    </div>
                                </div>
                                <div class="row">	
                                    <div class="col-sm-12 mt">
                                        <input onclick="saveUpdate('validate-form','{{url('admin/password/change')}}', 'btn_submit')" id="btn_submit" value="Change Password" type="submit" class="btn-success btn">
                                        <input onclick="resetForm()" value="Cancel" type="reset" class="btn-inverse btn" />
                                    </div>
                                </div>
                            </form>		
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function saveUpdate(formid,url, btnId){
            var data = new FormData($('#'+formid)[0]);
            if(btnId == 'btn_submit'){
                data.append('submit', true);
            }else{
                data.append('update', true);
            }
            
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
    </script>
@endsection