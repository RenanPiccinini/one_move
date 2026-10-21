<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StageSeeder::class);

        if (! User::where('email', 'admin@onemove.com.br')->exists()) {
            User::create([
                'name' => 'Admin ONE MOVE',
                'email' => 'admin@onemove.com.br',
                'password' => bcrypt('onemove2027'),
            ]);
        }
    }
}
