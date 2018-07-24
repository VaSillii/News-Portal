@extends('layouts.admin')

@section('content')
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<h1>Добавлене категории</h1><br>
		<form method="post">
			@csrf
			<p>
				<span>Введите наименование категории: </span>
				<input type="text" name="title" class="form-control">
			</p>		
			<p>
				<span>Текст категории</span>
				<textarea type="text" name="description" class="form-control"></textarea>
			</p>
			<button type="submit" class="btn btn-success">Добавить</button>
		</form>
		
	</main>
@endsection
