<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paging extends Model
{
    protected $guarded = ['id'];
    protected $table = 'post';
}
