<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone_number' => $this->faker->unique()->phoneNumber,
            'national_number' => $this->faker->unique()->numerify('###########'), // 11-digit number
            'password' => Hash::make('password'),
            'role_id' => 2, // Default to Patient role
        ];
    }

    public function createUsersWithPatientRole(int $count, array $attributes = [])
    {
        $patientRoleId = 2;
        $users = [];

        for ($i = 0; $i < $count; $i++) {
            $user = User::create(array_merge([
                'name' => $this->faker->name, // Realistic name
                'phone_number' => $this->faker->unique()->numerify('#########'), //9-digit
                'national_number' => $this->faker->unique()->numerify('###########'), // 11-digit number
                'password' => Hash::make('password'),
                'role_id' => $patientRoleId,
            ], $attributes['user'] ?? []));

            $users[] = $user;
        }

        return $users;
    }

    public function createPatientsForUsers(array $users, array $attributes = [])
    {
        $patients = [];

        foreach ($users as $user) {
            $patient = Patient::create(array_merge([
                'user_id' => $user->id,
                'height' => $this->faker->randomFloat(2, 150, 200),
                'weight' => $this->faker->randomFloat(2, 50, 120),
                'birthdate' => $this->faker->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d'),
            ], $attributes['patient'] ?? []));

            $patients[] = $patient;
        }

        return $patients;
    }

    public function createUsersAndPatients(int $count, array $attributes = [])
    {
        $users = $this->createUsersWithPatientRole($count, $attributes);
        $patients = $this->createPatientsForUsers($users, $attributes);

        return ['users' => $users, 'patients' => $patients];
    }

    public function createUsersAndStudents()
    {
        $faker = Faker::create();
        $studentsFourth = [];
        $studentsFifth = [];

        $now = Carbon::now();

        // 1. إنشاء طلاب السنة الرابعة
        for ($i = 1; $i <= 170; $i++) {
            $userId = DB::table('users')->insertGetId([
                'name' => json_encode([
                    'en' => 'Fourth Student ' . $i,
                    'ar' => 'طالب السنة الرابعة ' . $i
                ]),
                'phone_number' => $faker->unique()->numerify('#########'),
                'national_number' =>$faker->unique()->numerify('###########'),
                'password' => Hash::make('password'),
                'role_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $studentId = DB::table('students')->insertGetId([
                'user_id' => $userId,
                'year' => 'fourth-year',
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $studentsFourth[] = $studentId;
        }

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

    public function createUsersWithSupervisorRole(int $count, array $attributes = [])
    {
        $RoleId = 3;
        $users = [];

        for ($i = 0; $i < $count; $i++) {
            $user = User::create(array_merge([
                'name' => $this->faker->name, // Realistic name
                'phone_number' => $this->faker->unique()->numerify('#########'), //9-digit
                'national_number' => $this->faker->unique()->numerify('###########'), // 11-digit number
                'password' => Hash::make('password'),
                'role_id' => $RoleId,
            ], $attributes['user'] ?? []));

            $users[] = $user;
        }

        return $users;
    }

    public function createUsersWithDoctorRole(int $count, array $attributes = [])
    {
        $RoleId = 4;
        $users = [];

        for ($i = 0; $i < $count; $i++) {
            $user = User::create(array_merge([
                'name' => $this->faker->name, // Realistic name
                'phone_number' => $this->faker->unique()->numerify('#########'), //9-digit
                'national_number' => $this->faker->unique()->numerify('###########'), // 11-digit number
                'password' => Hash::make('password'),
                'role_id' => $RoleId,
            ], $attributes['user'] ?? []));

            $users[] = $user;
        }

        return $users;
    }
}
