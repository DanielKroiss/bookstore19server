<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order1 = new \App\Order;
        $order1->totalprice = 123.23;
        $order1->state = 1;
        $order1->comment = 'lieferbar';
        //$order1->user_id = 1;
        //$order1->save();

        //get first user
        $user = \App\User::all()->first();
        //user hinzufügen
        //$user=1;
        $order1->user()->associate($user);
        $order1->save();


        $books = \App\Book::all()->pluck("id");
        $order1->books()->sync($books);

        $order1->save();
    }
}

