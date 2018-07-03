<?php
// class PostConroller extends Controller
// {
	
// 	public function listPost(Request $request)
// 	{
// 		return 'list'; 
// 	}
// 	public function addPost(Request $request)
// 	{
// 		return 'add'; 
// 	}
// }

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class PostController extends Controller
{
    public function listPosts(Request $request)
	{
		return 'list'; 
	}
	public function addPosts(Request $request)
	{
		return 'add'; 
	}
}