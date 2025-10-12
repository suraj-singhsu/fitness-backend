 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Code</th>
            <th>Status</th>
            <th>Created</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $key => $value)
            <tr class="odd gradeX">
                <td>{{ $key+1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->code }}</td>
                <td>
                    @if ($value->status == 1)
                        <span class="text-success">Active</span>
                    @else
                    <span class="text-danger">Inactive</span>
                    @endif
                </td>
                <td>{{ $value->created_at ?? 'N/A' }}</td>
                <td class="text-center">
                    <a href="{{ route('role.form',$value->id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                   
                    <form action="{{ route('role.delete', $value->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?');">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
            
    </tbody>
</table>