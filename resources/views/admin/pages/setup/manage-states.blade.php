@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <ol class="breadcrumb mb-n">
        <li><a href="#">Settings</a></li>
        <li><a href="#">Manage States</a></li>
    </ol>
    <div class="container-fluid"> 
        <div data-widget-group="group1">
            <div class="row">
                <form action="" method="get">

                    <div class="col-sm-3 p">
                        <select name="country_id" id="country_id" class="form-control">
                            <option value="">Select Country</option>
                            @foreach($countries as $key => $value)
                                <option value={{$value->id}}>{{$value->country_code." - ".$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3 p">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </form>
                <div class="col-md-12">
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h2>manage States</h2>
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body no-padding">
                            
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>Status</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($states as $key => $value)
                                        <tr class="odd gradeX">
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->country_name}}</td>
                                            <td>{{$value->name}}</td>
                                            <td class="text-center">
                                                <input class="bootstrap-switch switch-alt" type="checkbox" {{($value->status == 'active') ? 'checked' : '' }} data-on-color="success" data-off-color="danger" data-size="small" onChange="changeStatus(this)" data-status={{$value->status}} data-state_id={{$value->id}} />
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
        function changeStatus(e){
            var formData = new FormData();
            let current_status = e.getAttribute('data-status');
            let state_id = e.getAttribute('data-state_id');
            console.log("current_status:",current_status);
            console.log("state_id:",state_id);
            let new_status = (current_status == 'active') ? 'inactive' : 'active';
            console.log("new_status:", new_status);

            formData.append('state_id', state_id);
            formData.append('status', new_status);
            console.log("forData:", formData);
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{url('ajax/update-state-status')}}',
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