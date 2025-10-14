<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Action'],
            ['id' => 2, 'name' => 'Romance'],
            ['id' => 3, 'name' => 'Comedy'],
            ['id' => 4, 'name' => 'Horror'],
            ['id' => 5, 'name' => 'Fantasy'],
        ];
    }
}
