@extends('admin.admin-master-layout2')
@section('after-login-section')            
    <div class="container-fluid"> 
        <div id="api-msg" class="alert hide"></div>
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h2>Manger Members</h2>
                        </div>
                        <div class="panel-body">
    
    <form action="{{ route('providers.insert') }}" method="POST">
        @csrf
        
        <!-- User Selection -->
        <div class="form-group mb-3">
            <label for="user_id">Select User</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">-- Select User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                @endforeach
            </select>
        </div>

        <!-- Membership ID -->
        <div class="form-group mb-3">
            <label for="membership_id">Membership ID</label>
            <input type="text" name="membership_id" id="membership_id" class="form-control" placeholder="Enter unique membership ID" required>
        </div>

        <!-- Join Date -->
        <div class="form-group mb-3">
            <label for="join_date">Join Date</label>
            <input type="date" name="join_date" id="join_date" class="form-control">
        </div>

        <!-- Plan Type -->
        <div class="form-group mb-3">
            <label for="plan_type">Plan Type</label>
            <select name="plan_type" id="plan_type" class="form-control">
                <option value="monthly">Monthly</option>
                <option value="quarterly">Quarterly</option>
                <option value="half_yearly">Half Yearly</option>
                <option value="yearly">Yearly</option>
            </select>
        </div>

        <!-- Plan Start Date -->
        <div class="form-group mb-3">
            <label for="plan_start_date">Plan Start Date</label>
            <input type="date" name="plan_start_date" id="plan_start_date" class="form-control">
        </div>

        <!-- Plan End Date -->
        <div class="form-group mb-3">
            <label for="plan_end_date">Plan End Date</label>
            <input type="date" name="plan_end_date" id="plan_end_date" class="form-control">
        </div>

        <!-- Fitness Goal -->
        <div class="form-group mb-3">
            <label for="fitness_goal">Fitness Goal</label>
            <textarea name="fitness_goal" id="fitness_goal" class="form-control" rows="3" placeholder="Enter fitness goal..."></textarea>
        </div>

        <!-- Submit -->
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Save Member</button>
        </div>
    </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container-fluid -->
@endsection