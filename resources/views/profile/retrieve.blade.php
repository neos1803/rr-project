<x-dashboard-master>
    @section('content')
        <h1>{{$profile->username}}'s Profile</h1>
        <div class="row">
            <div class="col-sm-6">
                <form action="{{ route('profile.update', $profile) }}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="{{$profile->username}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password-confirmation">Password Confirmation</label>
                        <input type="password" name="password_confirmation" id="password-confirmation" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Changes</button>
                </form>
            </div>
        </div>
    @endsection
</x-dashboard-master>