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
        
        $response -> assertStatus(200);
        
    }
    public function test_deletebook_form()
    {
        $response = $this->get('/create');
        
        $response -> assertStatus(200);
        
    }
   
   public function test_addbook_duplication(){
       $book1 = Book::make([
           
           'book_name' => 'Harry Potter',
           'book_author' => 'JK Rowling',
           'book_category' => 'Adventure',
           'book_file' => 'potter.pdf'
           
       ]);
       $book2 = Book::make([
           
        'book_name' => 'Nutuk',
        'book_author' => 'Mustafa Kemal ATATURK',
        'book_category' => 'Legendary',
        'book_file' => 'nutuk.pdf'
        
    ]);
    $this-> assertTrue($book1->book_name != $book2->book_name );
   }

}

