<?php

namespace Database\seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            ['title' => 'Harry Potter', 'genre' => 'Fantasy', 'author_id' => 1],
            ['title' => '1984', 'genre' => 'Dystopia', 'author_id' => 2],
            ['title' => 'Kafka on the Shore', 'genre' => 'Fiction', 'author_id' => 3],
            ['title' => 'The Old Man and the Sea', 'genre' => 'Classic', 'author_id' => 5],
            ['title' => 'The Shining', 'genre' => 'Horror', 'author_id' => 6],
            ['title' => 'The Alchemist', 'genre' => 'Philosophy', 'author_id' => 4],
        ]);
    }
}
