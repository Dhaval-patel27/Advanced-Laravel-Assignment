<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    protected $table = 'posts';
    protected $fillable = ['title', 'desc', 'image', 'date', 'u_id'];
}
