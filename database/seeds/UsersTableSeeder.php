<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $user = new \App\User;
//        $user->name = "testuser";
//        $user->email = "test1@gmail.com";
//        $user->password = bcrypt('secret');
//        $user->save();
        $user = new \App\User;
        $user->firstname = "daniel";
        $user->lastname = "kroiss";
        $user->city = "linz";
        $user->street = "hauptstraße";
        $user->housenumber = "1";
        $user->postalcode = "4020";
        $user->isadmin = true;
        $user->email = "test1@gmail.com";
        $user->password = bcrypt('secret');
        $user->save();

        $user = new \App\User;
        $user->firstname = "max";
        $user->lastname = "musteruser";
        $user->city = "hagenberg";
        $user->street = "softwarepark";
        $user->housenumber = "1";
        $user->postalcode = "4232";
        $user->isadmin = false;
        $user->email = "max@gmx.at";
        $user->password = bcrypt('secret');
        $user->save();
    }
}
