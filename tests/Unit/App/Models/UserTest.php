<?php

namespace Tests\Unit\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class UserTest extends ModelTestCase
{
    protected function model(): Model
    {
        return new User();
    }

    protected function expectedTraits() :array
    {
        return [
            HasApiTokens::class,
            HasFactory::class,
            Notifiable::class
        ];
    }

    protected function expectedFillable() :array
    {
        return [
            "name",
            "email",
            "password"
        ];
    }

    protected function expectedCasts() :array
    {
        return [
            'id' => 'string',
            'email_verified_at' => 'datetime',
        ];
    }
}
