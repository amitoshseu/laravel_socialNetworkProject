@extends('layouts.app')

<style type="text/css" media="screen">
	.profile-img{
		max-width: 150px;
		border: 5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0,0,0,0.3);
	}
</style>

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<img class="profile-img" src="https://pbs.twimg.com/profile_images/723879256380469249/tNaCfB3t.jpg" alt="">

				<h1>{{ $user->name  }}</h1>
				<h5>{{ $user->email }}</h5>
				<h5>{{ $user->dob }} ({{ Carbon\Carbon:: createFromFormat('Y-m-d', $user->dob)->age}} years old.)</h5>

				<button class="btn btn-success">Follow</button>
			</div>
		</div>
	</div>
</div>

@endsection