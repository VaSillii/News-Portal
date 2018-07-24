<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Category;


class startPage extends Controller
{
    public function startPage() {
    	$objArticle = new Article();
    	$articles = $objArticle->get();

    	$objCategory = new Category();
    	$categories = $objCategory->get();

    	return view('base', ['categories' =>$categories, 'articles'=>$articles]);
    }
}
