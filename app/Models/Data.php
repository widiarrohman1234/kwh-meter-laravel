<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Jenssegers\Mongodb\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'blog_posts';
    // protected $table = 'data';
    // protected $guarded = [];  
}
