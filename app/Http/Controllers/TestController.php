<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class TestController extends Controller
{
    //
    public function someMethod(Request $request) {
    	$name = $this->request->input('name', 'NameUser');
    	$surname = $request->input('surname', 'SurnameUser');
    	

    	return view('test', [
    		'name' => $name,
    		'surname' => $surname
    	]);
    }

    public function showPosts() {
        return view('pages.posts', [
            'mainContent' => 'Содержание',
            'title' => 'Заголовок страницы',
            'template' => 'pages.content2',
            'users' => []
        ]);
    }
}
