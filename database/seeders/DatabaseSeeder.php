<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use \App\Models\UserDomicilio;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(100)->create();
        foreach ($users as $user) {
            $userDomicilio = UserDomicilio::factory()->create(['user_id' => $user->id]);
        }
    }
}
