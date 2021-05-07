<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersProfile extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'teachers_id',
        'style',
        'dp_path',
        'name',
        'information',
        'rating',
    ];
}
