<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        	//riempiamo primo capmo utente
        \App\Models\User::factory()->create([
           'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=>bcrypt('password'),
        ]);
        //categorie database
        $categories = [
            'moda',
            'casa',
            'auto',
            'animali',
            'eletronica',
        ];
        foreach ($categories as $category){
         Category::create(['name'=>$category]);   
        }
    }
}
