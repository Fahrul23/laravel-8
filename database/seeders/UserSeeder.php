<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(20)->create();
        // collect([
        //     [
        //         'name' => 'Fahrul Ihsan',
        //         'email' => 'Fahrul@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(), 
        //     ],
        //     [
        //         'name' => 'Ferdian Samsudin',
        //         'email' => 'Ferdian@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(), 
        //     ],
        // ])->each(function($user){
        //     User::create($user);
        // });
    }
}
