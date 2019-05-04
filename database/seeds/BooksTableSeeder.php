<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Query\Builder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //die folgende methode ist zu datenbanknahe
        /*DB::table('books')->insert([
            'title' => 'Stolz und Vorurteil',
            'isbn' => '1234567899',
            'subtitle' => 'Untertitel',
            'rating' => 5,
            'description' => "Jane Austen's Meisterwerk",
            'published' => new DateTime()
        ]);*/

        $book = new \App\Book();
        $book->title = "Stolz und Vorurteil";
        $book->isbn = "1234567899";
        $book->subtitle = "eine dramatische Romanze";
        $book->rating = 9;
        $book->description = "Jane Austen's Meisterwerk";
        $book->published = new DateTime();
        $book->price = 10.20;

        //get first user
        $user = \App\User::all()->first();
        //user hinzufügen
        $book->user()->associate($user);
        //speichern in DB!!
        $book->save();

        //alle authoren suchen und die Id werte sammeln (mit pluck)
        $authors = \App\Author::all()->pluck("id");
        $book->authors()->sync($authors);

        $orders = \App\Order::all()->pluck("id");
        $book->orders()->sync($orders);
        //$book->save();
        //add images to book
        $image1 = new \App\Image();
        $image1->title = "Cover 1";
        $image1->url = "https://m.media-amazon.com/images/I/71aEJV+ctrL._AC_UL436_.jpg";
        $image1->book()->associate($book);
        $image1->save();

        $image2 = new \App\Image();
        $image2->title = "Cover english";
        $image2->url = "https://m.media-amazon.com/images/I/71r9qdiBIcL._AC_UL436_.jpg";
        $image2->book()->associate($book);
        $image2->save();


        //---------------------------------------------------
        //----------------------------------------------------

        $book = new \App\Book();
        $book->title = "Das größere Wunder";
        $book->isbn = "1234567889";
        $book->subtitle = "Packend, klug, existenziell";
        $book->rating = 10;
        $book->description = "Jonas ist Tourist in einer Todeszone, er nimmt an einer Expedition zum Gipfel des Mount Everest teil. ";
        $book->published = new DateTime();
        $book->price = 11.90;

        //get first user
        $user = \App\User::all()->first();
        //user hinzufügen
        $book->user()->associate($user);
        //speichern in DB!!
        $book->save();

        //alle authoren suchen und die Id werte sammeln (mit pluck)
        $authors = \App\Author::all()->pluck("id");
        $book->authors()->sync($authors);

        $orders = \App\Order::all()->pluck("id");
        $book->orders()->sync($orders);
        //$book->save();
        //add images to book
        $image1 = new \App\Image();
        $image1->title = "Cover 1";
        $image1->url = "https://images-na.ssl-images-amazon.com/images/I/41Ii8xJLGQL._SX312_BO1,204,203,200_.jpg";
        $image1->book()->associate($book);
        $image1->save();

        $image2 = new \App\Image();
        $image2->title = "Cover 2";
        $image2->url = "https://images-na.ssl-images-amazon.com/images/I/51Iq7b3B2JL.jpg";
        $image2->book()->associate($book);
        $image2->save();

        //---------------------------------------------------
        //----------------------------------------------------

        $book = new \App\Book();
        $book->title = "Das Fundament der Ewigkeit";
        $book->isbn = "1234567789";
        $book->subtitle = "Historischer Roman (Kingsbridge-Roman, Band 3) ";
        $book->rating = 10;
        $book->description = "Nach DIE SÄULEN DER ERDE und DIE TORE DER WELT der neue große historische KINGSBRIDGE-Roman des internationalen Bestsellerautors: ";
        $book->published = new DateTime();
        $book->price = 36.00;

        //get first user
        $user = \App\User::all()->first();
        //user hinzufügen
        $book->user()->associate($user);
        //speichern in DB!!
        $book->save();

        //alle authoren suchen und die Id werte sammeln (mit pluck)
        $authors = \App\Author::all()->pluck("id");
        $book->authors()->sync($authors);

        $orders = \App\Order::all()->pluck("id");
        $book->orders()->sync($orders);
        //$book->save();
        //add images to book
        $image1 = new \App\Image();
        $image1->title = "Cover 1";
        $image1->url = "https://images-na.ssl-images-amazon.com/images/I/5117epjhyxL._SX333_BO1,204,203,200_.jpg";
        $image1->book()->associate($book);
        $image1->save();




    }
}
