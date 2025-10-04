@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Manage Users</a></li>
    </ol>
    <div class="container-fluid"> 
        <div data-widget-group="group1">
            <div class="row">
                <form action="" method="get">

                    <div class="col-sm-3 p">
                        <select name="country_id" id="country_id" class="form-control" onChange="getStates(this)">
                            <option value="">Select Country</option>
                            @foreach($countries as $key => $value)
                                <option value={{$value->id}} {{($country_id == $value->id) ? 'selected' : ''}} >{{$value->country_code." - ".$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3 p">
                        <select name="state_id" id="state_id" class="form-control">
                            <option value="">Select State</option>
                            @foreach($states as $key => $value)
                                <option value={{$value->id}} {{($state_id == $value->id) ? 'selected' : ''}}>{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3 p">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </form>
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
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cities as $key => $value)
                                        <tr class="odd gradeX">
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->state_name}}</td>
                                            <td>{{$value->city}}</td>
                                            <td class="text-center">
                                                <input {{($value->status == 'active') ? 'checked' : '' }} data-on-color="success" data-off-color="danger" data-size="small" onChange="changeStatus(this)" data-status={{$value->status}} data-city_id={{$value->id}} class="bootstrap-switch switch-alt" type="checkbox" />
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
    
        function changeStatus(e){
            var formData = new FormData();
            let current_status = e.getAttribute('data-status');
            let city_id = e.getAttribute('data-city_id');
            console.log("current_status:",current_status);
            console.log("city_id:",city_id);
            let new_status = (current_status == 'active') ? 'inactive' : 'active';
            console.log("new_status:", new_status);

            formData.append('city_id', city_id);
            formData.append('status', new_status);
            console.log("forData:", formData);
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{url('ajax/update-city-status')}}',
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