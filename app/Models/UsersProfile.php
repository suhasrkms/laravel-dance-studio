<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone_no',
        'age',
        'style',
        'prefered_batch',
        'final_batch',
    ];
}
