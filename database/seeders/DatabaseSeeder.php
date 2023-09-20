<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        
        /* Listing::create([
            'title'=> "Laravel Senior Developer",
            'tags'=> "laravel, javascript",
            'company'=> "Acme Corp",
            'location'=> "Boston MA",
            'email'=> "email@email.com",
            'website'=> "https://acme.com",
            'desc'=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ullam voluptatibus sed magni omnis possimus magnam nisi facilis similique laudantium? Nihil ex natus odio quisquam culpa quibusdam voluptatibus tenetur distinctio debitis repellendus magni itaque sit sequi placeat accusantium ullam cumque, eum pariatur, maiores quis reprehenderit labore. Eaque, voluptatibus enim, ex pariatur expedita delectus laborum repudiandae officiis repellendus quos natus eveniet reprehenderit corrupti nihil quae, sunt veniam earum sequi necessitatibus sapiente."
        ]);

        Listing::create([
            'title'=> "Full-Stack Engineer",
            'tags'=> "laravel, backend, api",
            'company'=> "Stark Industries",
            'location'=> "New York, NY",
            'email'=> "email2@email.com",
            'website'=> "https://wwww.starkindustries.com",
            'desc'=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ullam voluptatibus sed magni omnis possimus magnam nisi facilis similique laudantium? Nihil ex natus odio quisquam culpa quibusdam voluptatibus tenetur distinctio debitis repellendus magni itaque sit sequi placeat accusantium ullam cumque, eum pariatur, maiores quis reprehenderit labore. Eaque, voluptatibus enim, ex pariatur expedita delectus laborum repudiandae officiis repellendus quos natus eveniet reprehenderit corrupti nihil quae, sunt veniam earum sequi necessitatibus sapiente."
        ]); */
    }
}
