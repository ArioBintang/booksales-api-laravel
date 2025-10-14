<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling', 'nationality' => 'UK'],
            ['id' => 2, 'name' => 'Haruki Murakami', 'nationality' => 'Japan'],
            ['id' => 3, 'name' => 'Stephen King', 'nationality' => 'USA'],
            ['id' => 4, 'name' => 'Paulo Coelho', 'nationality' => 'Brazil'],
            ['id' => 5, 'name' => 'Tere Liye', 'nationality' => 'Indonesia'],
        ];  
    }
}
