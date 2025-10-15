<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::insert([
            ['name' => 'J.K. Rowling', 'bio' => 'Penulis Harry Potter'],
            ['name' => 'George Orwell', 'bio' => 'Penulis 1984 dan Animal Farm'],
            ['name' => 'Haruki Murakami', 'bio' => 'Penulis asal Jepang'],
            ['name' => 'Ernest Hemingway', 'bio' => 'Penulis klasik Amerika'],
            ['name' => 'Stephen King', 'nationality' => 'USA'],
            ['name' => 'Paulo Coelho', 'nationality' => 'Brazil'],
           
        ]);
    }
}
