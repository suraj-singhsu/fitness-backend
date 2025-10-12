@extends('admin.admin-master-layout2')
@section('after-login-section')
<div class="row">
      <div class="col-md-12">
         <a href="{{ route('category.list') }}" class="btn btn-midnightblue mb">View All Category</a>
         <div class="panel panel-midnightblue">
            <div class="panel-heading">
               <h2>New Category</h2>
            </div>
            <div class="panel-body no-padding">
               <form method="POST" action="{{ route('category.insert-update', $category_id)}}" enctype="multipart/form-data" class="pt">
                  @csrf
                  <!-- Parent Category -->
                  <div class="col-sm-4">
                        <label for="parent_id" class="form-label mb-n">Parent Category</label>
                        <select name="parent_id" id="parent_id" class="form-control" {{($parent_id) ? 'readonly' : ''}}>
                           <option value="">None</option>
                           @foreach($service_categories as $cat)
               <option value="{{ $cat->id }}" {{( $cat->id == $parent_id)  ? 'selected' : ''}}>{{$cat->id}} - {{$cat->name}}</option>
                           @endforeach
                        </select>
                  </div>

                  <!-- Name -->
                  <div class="col-sm-4">
                     <label for="name" class="form-label mb-n">Category Name <span class="text-danger">*</span></label>
                     <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name" value="" required>
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
                     @if(isset($category_id))
                     <input text value="{{$category_id}}" name="category_id" />
                     @endif
                     <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                  <!-- </div> -->
               </form>
            </div>
         </div>
      </div>
</div>
@endsection