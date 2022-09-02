<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionCategory;
use App\Models\Subject;
use App\Models\SubjectCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjectCategory = SubjectCategory::factory(10)->create()->each(function($category) {
            User::factory(rand(1,12))->create()->each(function($user) use($category) {
                Subject::factory(rand(1, 10))->create([
                    'user_id' => $user->id,
                    'subject_category_id' => $category->id,
                ]);
            });
        });


        QuestionCategory::factory(10)->create()->each(function($category) {
            User::factory(rand(1,12))->create()->each(function($user) use($category) {
                Question::factory(rand(1, 10))->create([
                    'user_id' => $user->id,
                    'question_category_id' => $category->id,
                ]);
            });
        });



        // $questionCategory = QuestionCategory::factory(10)->create();

        // User::factory(30)->create()->each(function($user) use($subjectCategory, $questionCategory) {
        //     Subject::factory(rand(1, 10))->create([
        //         'user_id' => $user->id,
        //         'subject_category_id' => $subjectCategory->random(1)->id,
        //     ]);
        //     // ->each(function($subject) use($subjectCategory, $questionCategory) {
        //     //     $subject->subjectCategory()->save($subjectCategory->randome(1));
        //     // });

        //     Question::factory(rand(1, 10))->create([
        //         'user_id' => $user->id,
        //         'question_category_id' => $questionCategory->random(1)->id,
        //     ]);
        // });
    }
}
