<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $studentsFourth = [];
        $studentsFifth = [];

        $now = Carbon::now();

//        // 1. إنشاء طلاب السنة الرابعة
//        for ($i = 1; $i <= 170; $i++) {
//            $userId = DB::table('users')->insertGetId([
//                'name' => json_encode([
//                    'en' => 'Fourth Student ' . $i,
//                    'ar' => 'طالب السنة الرابعة ' . $i
//                ]),
//                'phone_number' => $faker->unique()->numerify('#########'),
//                'national_number' =>$faker->unique()->numerify('###########'),
//                'password' => Hash::make('password'),
//                'role_id' => 1,
//                'created_at' => $now,
//                'updated_at' => $now,
//            ]);
//
//            $studentId = DB::table('students')->insertGetId([
//                'user_id' => $userId,
//                'year' => 'fourth-year',
//                'created_at' => $now,
//                'updated_at' => $now,
//            ]);
//
//            $studentsFourth[] = $studentId;
//        }

        // 2. إنشاء طلاب السنة الخامسة
        for ($i = 1; $i <=170 ; $i++) {
            $userId = DB::table('users')->insertGetId([
                'name' => json_encode([
                    'en' => 'Fifth Student ' . $i,
                    'ar' => 'طالب السنة الخامسة ' . $i
                ]),
                'phone_number' =>$faker->unique()->numerify('#########'),
                'national_number' => $faker->unique()->numerify('###########'),
                'password' => Hash::make('password'),
                'role_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $studentId = DB::table('students')->insertGetId([
                'user_id' => $userId,
                'year' => 'fifth-year',
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $studentsFifth[] = $studentId;
        }
    }

//
//        // 3. توزيع طلاب السنة الرابعة على practical_schedule_id = 1
//        $this->assignStudentsToSchedule($studentsFourth, 1);
//
//        // 4. توزيع طلاب السنة الخامسة على practical_schedule_id = 2
//        $this->assignStudentsToSchedule($studentsFifth, 2);
//    }
//
//    private function assignStudentsToSchedule(array $studentIds, int $scheduleId): void
//    {
//        $now = Carbon::now();
//        $groupSize = 20;
//        $groupNumber = 1;
//        $counter = 0;
//
//        foreach ($studentIds as $studentId) {
//            if ($counter >= $groupSize) {
//                $groupNumber++;
//                $counter = 0;
//            }
//
//            DB::table('practical_schedule_students')->insert([
//                'practical_schedule_id' => $scheduleId,
//                'student_id' => $studentId,
//                'group_number' => $groupNumber,
//                'created_at' => $now,
//                'updated_at' => $now,
//            ]);
//
//            $counter++;
//        }
//    }
}
