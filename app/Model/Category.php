<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = "categories";
	protected $primarykey = "id";

	protected $fillable =[
		'title', 'description' 
	];  

	protected $dates = [
        'created_at',
        'updated_at'
    ];
}
