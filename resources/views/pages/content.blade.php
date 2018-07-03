@extends('pages.posts')

@section('content')
	<h1>{{$mainContent or ''}}</h1>
	
	@for ($i = 0; $i < 10; $i++) 
		The current value is {{$i}}
	@endfor

	@forelse($users as $user)
		<li>{{$user->name}}}</li>
	@empty
		<p>No users</p>
@endforelse
@endsection