<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        FakerFactory::create(10)->unique(true);
        $this->call([
            CategorySeeder::class,
            AuthorPublisherBookSeeder::class,
            UserBorrowingSeeder::class, // Novo seeder adicionado aqui

        ]);
        // User::factory(10)->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
