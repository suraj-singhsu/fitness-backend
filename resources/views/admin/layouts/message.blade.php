 @if(session('success'))
    <div class="alert alert-dismissable alert-success">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-dismissable alert-danger">
        <strong>Error!</strong> {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
@endif
