<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;

class CategoriesController extends Controller
{
	//стартовая страница 
	public function index() 
	{	
		$objCategory = new Category();
		$categories = $objCategory->get();
		return view('admin.categories.index', ['categories' => $categories]);

	}

	//переход к странице добавления
	public function addCategory()
	{
		return view('admin.categories.add');
	}   

	public function addRequestCategory(Request $request) 
	{
		$this->validate($request, [
			'title' => 'required|string|min:3|max:15',
			'description' => 'required'
		]);
		$objCategory = new Category();

		$objCategory = $objCategory->create([
			'title' =>$request->input('title'),
			'description' => $request->input('description')
		]);

		if ($objCategory) {
			return redirect()->route('categories')->with('success', 'Категория добавлена');
		} else {
			return redirect()->route('categories')->with('error', 'Неудалось добавить');
		}
	} 

	//блок редактировая категорий 
	public function editCategory(int $id)
	{
		$category = Category::find($id);
		if(!$category) {
			return abort(404);
		}

		return view('admin.categories.edit', ['category' =>$category]);
	}
	public function editRequestCategory(Request $request, int $id)
	{
		$objCategory = Category::find($id);

		$objCategory->title = $request->input('title');
		$objCategory->description = $request->input('description');
		if ($objCategory->save()) {
			return redirect()->route('categories')->with('success', 'Категория успешно изменена');
		} else {
			return back()->with('error', 'Неудалось изменить');
		}
	}

	//блок удалания категории 
	public function deleteCategory(Request $request) 
	{
		if($request->ajax()) {
            $id = (int)$request->input('id');
            $objCategory = new Category();
 
            $objCategory->where('id', $id)->delete();
 
            echo "success";
		// if ($request->ajax()) {
			// $id = (int)$request->input('id');
			// $objCategory = new Category();

			// $objCategory->where('id', $id)->delete();
			// echo "success";
		}
	}
}
