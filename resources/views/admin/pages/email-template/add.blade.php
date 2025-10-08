@extends('admin.admin-master-layout2')
@section('after-login-section')           

<ol class="breadcrumb mb-n">
        <li><a href="javascript:void(0)">Email Templates</a></li>
        <li><a href="#">Add</a></li>
    </ol>
    <div class="container-fluid">
                                
	

	<div data-widget-group="group1">
		<div class="row">
            <a href="{{url('/email-template/list')}}" class="btn btn-info m mt-n">View Templates</a>
			<div class="col-md-12">
				<div class="panel" data-widget='{"draggable": "false"}'>
					<div class="panel-body">
						<textarea id="pagedownMe"></textarea>	
                    </div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .container-fluid -->
@endsection