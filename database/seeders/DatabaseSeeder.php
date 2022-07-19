<?php

namespace Database\Seeders;

use App\Models\BedroomsType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         BedroomsType::factory(1)->create(['name' => 'Sencilla', 'code' => 'Q', 'description' => 'Habitacion desde una a dos personas']);
         BedroomsType::factory(1)->create(['name' => 'Doble', 'code' => 'QQ', 'description' => 'Habitacion desde una a 4 personas']);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
