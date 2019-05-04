<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = new \App\Author;
        $author1->firstName = 'Jane';
        $author1->lastName = 'Austen';
        $author1->save();

        $author2 = new \App\Author;
        $author2->firstName = 'Thomas';
        $author2->lastName = 'Glavinic';
        $author2->save();

        $author3 = new \App\Author;
        $author3->firstName = 'Ken';
        $author3->lastName = 'Follett';
        $author3->save();
    }
}
