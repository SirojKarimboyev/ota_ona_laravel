<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'post_models';
    protected $fillable = ['title', 'discription', 'image'];
}
