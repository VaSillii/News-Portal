<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $primarykey = "id";

    protected $fillable = [
    	'title', 
    	'author',
    	'short_text',
    	'full_text',
    ];

    protected $dates =[ 
    	'created_at', 'updated_at'
    ];
}
