<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publishedDate',
        'description',
        'image',
        'language',
        'city',
        'state', 
        'neighborhood'
    ];
}
