<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    public $timestamps = true;

    protected $casts = [
        'price' => 'float'
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'image',
        'created_at'
    ];
}
