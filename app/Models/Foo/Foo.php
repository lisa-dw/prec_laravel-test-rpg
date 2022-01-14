<?php

namespace App\Models\Foo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'title',
    ];
}
