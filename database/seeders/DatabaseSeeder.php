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
      $this->call([
        UserSeeder::class,     
        ClientSeeder::class,    
        LegalCaseSeeder::class,    
        DocumentSeeder::class,     
        TaskSeeder::class,         
        DeadlineSeeder::class,      
        CorrespondenceSeeder::class, 
        BillingSeeder::class,  
        ]);    

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
