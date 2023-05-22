<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //categorie database tradotte inglese
        $categories_es = [
            'moda',
            'piso',
            'coche',
            'animales',
            'electrónica',
        ];
        // traduzione inglese
        $categories_en = [
            'fashion',
            'house',
            'car',
            'animal',
            'electronic',
        ];

        //foreach spagnolo
        $i = 0;
        foreach(Category::all() as $category){
            $category->es = $categories_es[$i];
            $category->save();
            $i++;
        }
        //foreach inglese
        $j = 0;
        foreach(Category::all() as $category){
            $category->en = $categories_en[$j];
            $category->save();
            $j++;
        }
    }
}
