<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User;
        $user->name = "Wahyu Febriyanto Utomo";
        $user->nip = "A12.2018.06055";
        $user->email = "wahyufebri69@gmail.com";
        $user->password = bcrypt('wahyu123'); 
        $user->save();
    }
}
