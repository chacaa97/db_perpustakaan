<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'publisher' => 'Scribner',
                'publication_year' => 1925,
                'category' => 'Novel',
                'stock' => 10,
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'publisher' => 'J.B. Lippincott & Co.',
                'publication_year' => 1960,
                'category' => 'Novel',
                'stock' => 8,
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'publisher' => 'Secker & Warburg',
                'publication_year' => 1949,
                'category' => 'Novel',
                'stock' => 5,
            ],
            [
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'publisher' => 'George Allen & Unwin',
                'publication_year' => 1955,
                'category' => 'Fantasy',
                'stock' => 12,
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'publisher' => 'T. Egerton, Whitehall',
                'publication_year' => 1813,
                'category' => 'Novel',
                'stock' => 6,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
