@extends('admin.admin-master-layout2')
@section('after-login-section')           

<ol class="breadcrumb mb-n">
        <li><a href="javascript:void(0)">Content Management</a></li>
        <li><a href="#">View</a></li>
    </ol>
    <div class="container-fluid">
                                
	

	<div data-widget-group="group1">
		<div class="row">
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