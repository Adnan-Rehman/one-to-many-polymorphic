<?php

namespace App\Models;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


    public $timestamps = false;
    protected $guarded = [];

    public function commentable(){
        return $this->morphTo();
    }
}
