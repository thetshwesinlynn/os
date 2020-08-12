<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
        'codeno','name','price','discount','photo','description','brand-id','subcategory_id',
    ];
}