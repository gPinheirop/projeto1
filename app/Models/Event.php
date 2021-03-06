<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $casts=[
        'itens' => 'array'
    ];

    protected $dates=['date'];

    protected $guarded = [];

    public function user(){
        return $this->BelongsTo('App/Model/User');
    }
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
