<?php

namespace App\Models;

use Database\Factories\UserRequestFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[UseFactory(UserRequestFactory::class)]
class UserRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'message',
        'email',
        'phone_number',
    ];
}
