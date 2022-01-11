<?php

namespace App\Models\Quest;

use App\Models\Player\Player;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
