<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Category;
use App\Model\Article;
use App\Model\CategoryArticles;

use App\Http\Requests\ArticleRequest;


class ArticlesController extends Controller
{
    public function index() 
    {
    	$objArticle = new Article();
    	$articles = $objArticle->get();
    	return view('admin.articles.index', ['articles'=>$articles]);
    }

    //Добавление статьи
    public function addArticles() 
    {
    	$objCategory = new Category();
    	$categories = $objCategory->get();
    	return view('admin.articles.add', ['categories' => $categories]);
    }
    public function addRequestArticle(ArticleRequest $request) 
    {

    	$objArticle = new Article();
        // $objCategoryArticle = new CategoryArticle();
 
        // $fullText = $request->input('full_text') ?? null;
        $objArticle= $objArticle->create([
            'title'       => $request->input('title'),
            'short_text'  => $request->input('short_text'),
            'full_text'   => $request->input('full_text'),
            'author'      => $request->input('author')
        ]);
 
        // if($objArticle) {
        //     foreach($request->input('categories') as $category_id) {
        //         $category_id = (int)$category_id;
        //         $objCategoryArticle = $objCategoryArticle->create([
        //             'category_id'    => $category_id,
        //             'article_id'     => $objArticle->id
        //         ]);
        //     }
            return redirect()->route('articles')->with('success', 'Статья успешно добавлена');
        // }
        // return back()->with('error' , 'Не удалось добавить статью');
        // return back()->with('error' , 'Не удалось добавить статью');


    	// $objArticle = new Article();
    	// $objCategoryArticle = new CategoryArticles();


    	// $objArticle = $objArticle->create([
    	// 	'title' =>$request->input('title'),
    	// 	'author' => $request->input('author'),
    	// 	'short_text' => $request->input('short_text'),
    	// 	'full_text' => $request->input('full_text'),
    	// ]); 

    	// if ($objArticle){
    	// 	foreach ($request->input('categories') as $category_id) {
	    // 		$category_id = (int)$category_id;
	    // 		$objCategoryArticle = $objCategoryArticle->create([
	    // 			'category_id' => $category_id,
	    // 			'article_id' => $objArticle->id,
	    // 		]);
	    // 	}
	    // 	//если статья успешно добавлена 
	    // 	return redirect()->route('articles')->with('success', 'Сатья успешно добавлена в базу');
    	// }
    	// // Ошибка, если статья не добавлена 
    	// return back()->with('error' , 'Не удалось добавить статью');

    	
    }

    public function editArticles(int $id) 
    {

    }

    public function deleteArticles(Request $request)
    {

    }
}
