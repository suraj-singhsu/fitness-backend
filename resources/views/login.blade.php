@extends('admin.admin-master-layout1')
@section('before-login-section')
<div class="focused-form">
    <div class="container" id="login-form">
        <a href="javascript:void(0)" class="login-logo"><h2> <b>Fitness Admin</b> </h2></a>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary	">
                    <div class="panel-heading"><h2>Login Form</h2></div>
                    <div class="panel-body">
                        <form action="{{ route('login') }}" class="form-horizontal" method="post">
							@csrf
                            <div class="form-group mb-md">
                                <div class="col-xs-12">
                                    <div class="input-group">							
                                        <span class="input-group-addon"><i class="ti ti-user"></i></span>
                                        <input type="text" name="email" id="username" value="sadmin@yopmail.com" class="form-control" placeholder="Username Or Email ID" >
                                    </div>
									@error('email')
										<span class="text-danger">{{ $message }}</span>
									@enderror
                                </div>
                            </div>
                            <div class="form-group mb-md">
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ti ti-key"></i>
                                        </span>
                                        <input type="password" name="password" id="password" value="12345678" class="form-control" placeholder="Password" >
                                    </div>
									@error('password')
										<span class="text-danger">{{ $message }}</span>
									@enderror
                                </div>
                            </div>
                            <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
                            <div class="form-group mb-n">
                                <div class="col-xs-12">
                                    <a href="forgotpassword.php" class="pull-left">Forgot password?</a>
                                    
                                </div>
                            </div>
                            
                                <div class="clearfix">
                                    <input type="submit" value="LOGIN" class="btn btn-primary pull-right"  >
                                </div>
                            
                        </form>
                    </div>
					<div id="response-message"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        function checklogin(formid){
            $(document).ready(function() {
            var form = $('#'+formid);
            var data = new FormData(form[0]);
            $.ajax({
                url: "{{url('api/auth/login')}}",
                headers: {
                    'X-CSRF-Token': '{{csrf_token()}}',
                },
                type: "POST",
                data: data,
                cache:false,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle successful response
                    console.log("response:", response);
                    if(response['status'] == 'ok'){
                        new PNotify({text:response['msg'],type:'success',icon:'ti ti-info-alt',styling:'fontawesome'});
                        console.log("response['default-route']:", response['default-route']);
                        setTimeout(function(){
                            
                            window.location = response['default-route']; 
                        },2000);
                    }else{
                        new PNotify({text:response['msg'],type:'success',icon:'ti ti-info-alt',styling:'fontawesome'});
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.log("xhr:", xhr);
                    if(xhr.status == '403'){
                        new PNotify({text:xhr.responseJSON['msg'], type:'error',icon:'ti ti-info-alt',styling:'fontawesome'});
                    }
                    console.log("status:", status);
                    console.log("error:", error);
                }
            });
        });
        }


    </script>
@endsection