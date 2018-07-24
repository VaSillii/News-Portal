<h2>Добро пожаловать, {{ \Auth::user()->name}}</h2>


@if (\Auth::user()->isAdmin == 1) 
	<a href="{{ route('admin') }}">Admin panel</a><br>
@endif

<a href="{{ route('logout') }}">Выйти</a>