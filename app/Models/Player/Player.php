<?php

namespace App\Models\Player;

use App\Models\Client\Client;
use App\Models\Quest\Quest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'content',
        'title',
    ];

//    protected $table = '';

    protected $casts = [
        'content' => 'array',
    ];

    use HasFactory;

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    public function quests()
    {
        return $this->hasMany(Quest::class);
    }

}
