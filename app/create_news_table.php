<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_news_table extends Model
{
    protected $fillable = [
        'title', 'img_url', 'contact',
    ];
}
