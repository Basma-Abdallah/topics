<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Message;
use App\Models\Testimonial;
use App\Models\Topic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // for($i=0;$i<5;$i++){
        //     $itratorForCat=[   'Design' , 'Marketing' ,'Finance' , 'Music', 'Education'  ];
        //      $cat=$itratorForCat[$i];
        //     Category::factory()->create([ 'CategoryName' => $cat,]);
        // }
        //  User::factory(10)->create([
        //     'active' => '0',
        //     ]);
        // //  Path to the folder where images are stored


        // // Get all image files from the folder
        //     $images = File::files( public_path('assets/admin/images/topics'));

        // // Create a Faker instance
        //     $faker = Faker::create();

        // // Seed 10 topics with random data and images
        // for ($i = 0; $i < 10; $i++) {
        //     // Randomly select an image from the folder
        //     $randomImage = $images[array_rand($images)];
        //     Topic::factory(1)->create([

        //         'image' =>  $randomImage->getFilename(), // Store image path

        //     ]);

        //     // Create the topic using Faker for other fields
        //     }

        // //  Testimonial::factory(10)->create();

        // // User::factory()->create([
        // //     'name' => 'Test User',
        // //     'email' => 'test@example.com',
        // // ]);

        // $imagesTes = File::files( public_path('assets/admin/images/testimonials'));

        // $faker = Faker::create();

        // // Seed 10 topics with random data and images
        // for ($i = 0; $i < 10; $i++) {
        //     // Randomly select an image from the folder
        //     $randomImage = $imagesTes[array_rand($imagesTes)];
        //     Testimonial::factory(1)->create([

        //         'Image' =>  $randomImage->getFilename(), // Store image path

        //     ]); }

        Message::factory(10)->create();
    }
}
