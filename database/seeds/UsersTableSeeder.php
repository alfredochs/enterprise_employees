<?php

use App\User;
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
        $utenti = [
            [
                'name' => 'Utente di prova',
                'email' => 'prova@email.com',
                'password' => '$2y$10$w5qBB2pes8s5RDpkr9jIZ.73N8ULg26kMeJJgW1UFLetDc7CKjFFq'
            ]
        ];

        foreach ($utenti as $utente) {
            $newUser = new User();
            $newUser->name = $utente['name'];
            $newUser->email = $utente['email'];
            $newUser->password = $utente['password'];
            $newUser->save();
        }
    }
}
