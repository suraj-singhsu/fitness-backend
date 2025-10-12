@extends('admin.admin-master-layout2')
@section('after-login-section') 
<div class="container-fluid"> 
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-midnightblue">
        <div class="panel-heading">
          <h2>Add New Document</h2>
        </div>
        <div class="panel-body pt">
            <form id="addressForm">
                
                <pre>{{$userInfo}}</pre>
                    <div class="row">  
                        <div class="col-sm-3">
                          <div class="panel panel-profile">
                            <div class="panel-heading">
                              <h2>User Information</h2>
                            </div>
                            <div class="panel-body">
                              <img src="{{asset('admin-assets/demo/avatar/avatar_03.png')}}" class="img-circle">
                              <div class="name">{{$userInfo->name}}</div>
                              <div class="info">{{$userInfo->email}}</div>
                            </div>
                          </div><!-- panel --> 
                        </div>
                        <div class="col-sm-9">
                           <div class="row">
                              <!-- Country -->
                              <div class="col-sm-6">
                                 <label for="document_type" class="form-label mb-n">Document Type <span class="text-danger">*</span></label>
                                 <select name="document_type" id="document_type" class="form-control" required onchange="handle_document_type_change(this)">
                                       <option value="">Select</option>
                                       @foreach($document_types as $key => $value)
                                       <option value="{{$value['code']}}">{{$value['name']}}</option>
                                       @endforeach
                                 </select>
                              </div>

                              <div class="col-sm-6">
                                 <label for="state_id" class="form-label mb-n">Adhard Number <span class="text-danger">*</span></label>
                                 <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Optional">
                              </div>
                              <div class="col-sm-6 mt">
                                <div class="row">
                                    <div class="col-sm-12">
                                       <label class="mb-n">Front Side</label>
                                        <div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
                                            <div>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                <span class="btn btn-default btn-file btn-block"><span class="fileinput-new">Select Document</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt">
                                <div class="row">
                                    <div class="col-sm-12">
                                       <label class="mb-n">Front Side</label>
                                        <div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
                                            <div>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                <span class="btn btn-default btn-file btn-block"><span class="fileinput-new">Select Document</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                           </div>
                        
                        
                      </div>
                      <!-- Form Submit Button -->
                      <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Save Address</button>
                      </div>
                    </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('admin-assets/plugins/form-jasnyupload/fileinput.min.js')}}"></script> 

<script>
  function handle_document_type_change(document_type_obj){
   
   if(document_type_obj.value == 'adhar_card'){
      
   } else if(document_type_obj.value == 'pan_card'){
      
   } else if(document_type_obj.value == 'driving_license'){
      
   }
  }

</script>

@endsection