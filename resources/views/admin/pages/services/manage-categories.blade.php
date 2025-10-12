@extends('admin.admin-master-layout2')
@section('after-login-section')            
   
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('category.add')}}" class="btn btn-default mb">Add Category</a>
                    @if($parentInfo)
                    <a href="{{route('category.add', $parent_id)}}" class="btn btn-default mb">Add Sub Category</a>
                    <a href="{{route('category.list')}}" class="btn btn-default mb">View All </a>
                    @endif
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h2>Categories</h2>
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body no-padding">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        @if($parentInfo)
                                        <th>Parent</th>
                                        @endif
                                        <th>Description</th>
                                        <th>Thumbnail</th>
                                        <th>Banner</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <!-- <th>CreatedBy</th>
                                        <th>UpdatedBy</th> -->
                                        <th>Sub Category</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($service_categories as $key => $value)
                                        <tr class="odd gradeX">
                                             <td>{{$key+1}}</td>
                                             <td>{{$value->name}}</td>
                                             @if($parentInfo)
                                             <th>{{$parentInfo->name}}</th>
                                             @endif
                                            <td>{{$value->description}}</td>
                                            <td>{{$value->thumbnail_image ?? 'N/A' }}</td>
                                            <td>{{$value->banner_image ?? 'N/A' }}</td>
                                            <td>{{$value->sort_order}}</td>
                                            <td>
                                                <input class="bootstrap-switch switch-alt" type="checkbox" {{($value->status == 1) ? 'checked' : '' }} data-on-color="success" data-off-color="danger" data-size="small"/>
                                             </td>
                                             <td>
                                                <a href="{{route('category.add', $value->id)}}" class="btn btn-default"><i class="ti ti-plus"></i></a>
                                                @if($value->children_count > 0)
                                                <a href="{{route('category.list', ['parent_id' => $value->id])}}" class="btn btn-default"><i class="ti ti-list"></i> ({{$value->children_count}})</a>
                                                @endif
                                             </td>
                                            <td class="text-center">
     <a href="{{route('category.edit', $value->id)}}" class="btn btn-default btn-sm"><i class="fa fa-pencil"></i></a>
                        <form onsubmit="return confirm('Are you sure you want to delete this category?');" method="POST" action="{{route('category.delete', $value->id)}}">
                           @csrf
                           @method('DELETE')
                           <button class="btn btn-danger btn-sm" type=submit><i class="fa fa-trash"></i></button>
                        </form>
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
      
@endsection