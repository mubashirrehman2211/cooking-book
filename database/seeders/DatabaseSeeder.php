<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\recipebytitles;
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
        \App\Models\User::factory(5)->create();
        
        recipebytitles::factory(5)->create();

        // recipe::create([
        // 'id' => 1,
        // 'category_name' => 'Chicken',
        // 'category_desc' => 'This classic roasted chicken recipe is a timeless favorite that delivers a succulent, juicy bird with crispy, golden-brown skin. Perfect for family dinners or special occasions, this dish combines simple ingredients and straightforward techniques to produce a flavorful, aromatic meal that will impress any guest. The secret to its deliciousness lies in the careful preparation and the perfect blend of herbs and spices that enhance the natural flavors of the chicken.',
        // 'category_image' => 'No image yet',
        // ]);

        // recipe::create([
        // 'id' => 2,
        // 'category_name' => 'Beef',
        // 'category_desc' => 'This classic roasted Beef recipe is a timeless favorite that delivers a succulent, juicy bird with crispy, golden-brown skin. Perfect for family dinners or special occasions, this dish combines simple ingredients and straightforward techniques to produce a flavorful, aromatic meal that will impress any guest. The secret to its deliciousness lies in the careful preparation and the perfect blend of herbs and spices that enhance the natural flavors of the chicken.',
        // 'category_image' => 'No image yet',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
