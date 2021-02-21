<?php

namespace Database\Seeders;

use App\Models\Course;
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
        // \App\Models\User::factory(10)->create();
            Course::factory(50)->create();
        //$this->call(CourseSeeder::class);
        // $course = new Course();

        // $course->name = "Laravel";
        // $course->description = "Best PHP Framework";
        // $course->category = "Web Development";

        // $course->save();


        // $course2 = new Course();

        // $course2->name = "Vue.js";
        // $course2->description = "A JavaScript Framework";
        // $course2->category = "Web Development";

        // $course2->save();


        // $course3 = new Course();

        // $course3->name = "React.js";
        // $course3->description = "A JavaScript Library";
        // $course3->category = "Web Development";

        // $course3->save();
      
    }
}
