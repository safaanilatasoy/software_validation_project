<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Book;



class BookTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_addbook_form()
    {
        $response = $this->get('/create');

        $book = Book::all();
        
        $response -> assertStatus(200);
        
    }
    public function test_index()
    {
        $response = $this->get('/');
        $book = Book::all();
        
        $response -> assertStatus(200);
        
    }
    public function test_createBook()
    {
        $book1 = book::create([
            'book_name' => "test",
            'book_author' => "test_author",
            'book_category' => "category_test"
        ]);
    }
    
    


}

