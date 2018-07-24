<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryArticles extends Model
{
    protected $table = "category_articles";
    protected $primarykey = "id";

    protected $fillable = [
    	'category_id', 
    	'article_id',
    ];

    protected $dates =[ 
    	'created_at', 'updated_at'
    ];}
