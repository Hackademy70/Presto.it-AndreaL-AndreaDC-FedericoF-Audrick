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
           'name' => 'Giacomo',
            'email' => 'test@gmail.com',
            'password'=>bcrypt('Password1?'),
        ]);
        //categorie database
        $categories = [
            'moda',
            'casa',
            'auto',
            'animali',
            'elettronica',
        ];
        foreach ($categories as $category){
         Category::create(['name'=>$category]);   
        }
    }
}
