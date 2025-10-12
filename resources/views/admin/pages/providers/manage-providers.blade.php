@extends('admin.admin-master-layout2')
@section('after-login-section')            
<div class="container-fluid"> 
    <div data-widget-group="group1">
        <div class="row">
            
            <div class="col-md-12">
                <div class="panel panel-midnightblue">
                    <div class="panel-heading">
                        <h2>Provider Lists</h2>
                        <div class="panel-ctrls"></div>
                    </div>
                    <div class="panel-body no-padding">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Picture</th>
                                        <th>First/Last Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        
                                        <th>Document</th>
                                        <th>Address</th>
                                        <th>Status</th>
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
                                            <td>Gender</td>
                                            
                                            <!-- <td>{{$value->created_at ?? 'N/A'}}</td> -->
                                            <td>
                                                <a href="{{url('document/new')}}?user_id={{$value->role_id}}" class="btn btn-midnightblue btn-sm"><i class="fa fa-plus"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-midnightblue btn-sm"><i class="fa fa-file"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{url('address/new')}}?user_id={{$value->role_id}}" class="btn btn-midnightblue btn-sm"><i class="fa fa-plus"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-midnightblue btn-sm"><i class="fa fa-map-marker"></i></a>
                                            </td>
                                            <td>{{$value->status}}</td>
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
                    <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#add_address_btn').on('click', function() {
            $('#country_id').html('<option value="">Loading...</option>');
            $.ajax({
                url: "{{ url('api/get-countries') }}",
                type: 'GET',
                success: function (res) {
                    console.log("res:", res);
                    // $('#state_id').html('<option value="">Select State</option>');
                    // $.each(res, function (key, state) {
                    //     $('#state_id').append('<option value="' + state.id + '">' + state.name + '</option>');
                    // });
                }
            });
            $('#add_address_form').modal('show');
        });
        function open_add_address_modal(){
            alert();
        }
    </script>
@endsection