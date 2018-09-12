<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'alias', 'intro', 'body']; // поля можно менять

    // $guarded - поля нельзя менять

    public function getRouteKeyName() {
        return 'alias';
    }
}
