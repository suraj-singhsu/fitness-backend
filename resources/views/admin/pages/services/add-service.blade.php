@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <div class="container-fluid"> 
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('services/categories')}}" class="btn btn-midnightblue mb">View All Service</a>
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h2>Add New Service</h2>
                        </div>
                        <div class="panel-body no-padding">
                           <form method="POST" enctype="multipart/form-data" class="pt">
                              @csrf
                              <!-- <div class="row"> -->

                              <!-- Parent Category -->
                              <div class="col-sm-4">
                                    <label for="parent_id" class="form-label mb-n">Category</label>
                                    <select name="parent_id" id="parent_id" class="form-control">
                                       <option value="0">None</option>
                                       <!-- Loop parent categories -->
                                       @foreach($service_categories as $parent)
                                          <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                       @endforeach
                                    </select>
                              </div>

                              <!-- Name -->
                              <div class="col-sm-4">
                                 <label for="name" class="form-label mb-n">Category Name <span class="text-danger">*</span></label>
                                 <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name" required>
                              </div>
                              
                              <!-- Status -->
                              <div class="col-sm-4">
                                 <label for="status" class="form-label mb-n">Status</label>
                                 <select name="status" id="status" class="form-control">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                 </select>
                              </div>

                              <!-- Description -->
                              <div class="col-sm-12 mt">
                                 <label for="description" class="form-label mb-n">Description</label>
                                 <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter Description"></textarea>
                              </div>
                              
                               <div class="col-sm-6 mt">
                                <div class="row">
                                    <div class="col-sm-12">
                                       <label class="mb-n">Thumbnail</label>
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
                                       <label class="mb-n">Banner</label>
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

                             
                              
                                 <!-- Submit Button -->
                              <div class="col-sm-12 mt mb">
                                 <button type="submit" class="btn btn-primary">Save Category</button>
                              </div>

    <!-- </div> -->
</form>

                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection