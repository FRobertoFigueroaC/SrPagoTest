<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cp',
        'state_id',
    ];

    protected $casts = [
        'state_id' => 'integer',
    ];

    protected $table = "municipalities";

    public function states(){
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
}
