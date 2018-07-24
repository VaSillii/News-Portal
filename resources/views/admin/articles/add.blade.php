@extends('layouts.admin')

@section('content')
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<h1>Добавлене статей</h1><br>
		<form method="post">
			@csrf
			<p>
				<span>Выбор категории</span>
				<select name="categories[]" class="form-control" multiple>
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->title }}</option>
					@endforeach
				</select>
			</p>
			<p>
				<span>Введите название статьи: </span>
				<input type="text" name="title" class="form-control" required>
			</p>
			<p>
				<span>Введите автора статьи: </span>
				<input type="text" name="author" class="form-control" required>
			</p>		
			<p>
				<span>Введите краткий текст статьи</span>
				<textarea type="text" name="short_text" class="form-control"></textarea>
			</p>
			<p>
				<span>Текст категории</span>
				<textarea type="text" name="full_text" class="form-control"></textarea>
			</p>
			<button type="submit" class="btn btn-success">Добавить</button>
		</form>
		
	</main>
@endsection
