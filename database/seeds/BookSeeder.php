<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\books

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample penulis
        $author1 = Author::create(['name'=>'Muhammad Fauzil adhim']);
        $author2 = Author::create(['name'=>'Salim A Fillah']);
        $author3 = Author::create(['name'=>'Aam Amiruddin']);

        //sample buku
        $book1 = Book::create(['title'=>'Kupinang engkau dengan hamdalah','amount'=>3,'author_id'=>$author1->id]); 
        $book2 = Book::create(['title'=>'Jalan cinta Perjuangan','amount'=>2,'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Membingkai surga dalam rumah tangga','amount'=>4,'author_id'=>$author3->id]);
        $book3 = Book::create(['title'=>'Cinta & seks rumah tangga muslim','amount'=>3,'author_id'=>$author3->id]);

    }

}
