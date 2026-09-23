<?php

namespace Database\Factories;

use App\Models\Disease;
use App\Models\Patient;
use App\Models\Resources;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DataFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create(['role_id' => 2]),
            'height' => $this->faker->randomFloat(2, 150, 200), // Height in cm
            'weight' => $this->faker->randomFloat(2, 50, 120), // Weight in kg
            'birthdate' => $this->faker->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d'),
        ];
    }

    public function assignRandomDiseasesToPatients(int $limit = 5, int $minDiseases = 1, int $maxDiseases = 7)
    {
        $patients = Patient::take($limit)->get();

        $diseaseIds = Disease::pluck('id')->toArray();

        if (empty($diseaseIds)) {
            throw new \Exception('No diseases found in the diseases table. Please seed diseases first.');
        }

        foreach ($patients as $patient) {
            $randomDiseaseIds = $this->faker->randomElements(
                $diseaseIds,
                $this->faker->numberBetween($minDiseases, $maxDiseases)
            );

            foreach ($randomDiseaseIds as $diseaseId) {
                DB::table('patient_disease_pivot')->insert([
                    'patient_id' => $patient->id,
                    'disease_id' => $diseaseId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return $patients;
    }

    public function createResources(int $count, array $attributes = [])
    {
        $resources = [];

        // Define category-specific resource names
        $resourceNames = [
            'Books_and_References' => [
                'Dental Anatomy by Wheeler',
                'Oral Pathology by Regezi',
                'Contemporary Orthodontics by Proffit',
                'Clinical Periodontology by Carranza',
                'Textbook of Endodontics by Ingle',
                'Dental Materials by Powers',
                'Oral and Maxillofacial Surgery by Fonseca',
                'Pediatric Dentistry by Pinkham'
            ],
            'Paper_lectures' => [
                'Lecture Notes: Dental Anatomy',
                'Lecture Notes: Periodontology',
                'Lecture Notes: Endodontics Basics',
                'Lecture Notes: Prosthodontics',
                'Lecture Notes: Oral Surgery Techniques',
                'Lecture Notes: Dental Radiology',
                'Lecture Notes: Orthodontic Principles',
                'Lecture Notes: Pediatric Dentistry'
            ],
            'Medical_instruments' => [
                'Dental Mirror',
                'Periodontal Probe',
                'Dental Drill',
                'Extraction Forceps',
                'Dental Scaler',
                'Amalgam Carrier',
                'Dental Syringe',
                'Curing Light'
            ],
            'General' => [
                'Dental Reference Manual',
                'Sterilization Guidelines',
                'Dental Chair Manual',
                'Patient Record Book',
                'Dental Loupes',
                'Protective Face Shield',
                'Dental Model',
                'Infection Control Guide'
            ]
        ];

        for ($i = 0; $i < $count; $i++) {

            $category = $this->faker->randomElement([
                'Books_and_References',
                'Paper_lectures',
                'Medical_instruments',
                'General'
            ]);

            $resourceName = $this->faker->randomElement($resourceNames[$category]);

            $isBooked = $this->faker->boolean(50); // 50% chance of being booked
            $status = $isBooked ? 'booked' : 'available';

            $ownerStudent = Student::inRandomOrder()->first();

            $bookedByStudentId = null;
            $loanStartDate = null;
            $loanEndDate = null;

            if ($isBooked) {
                // If booked, assign a booked_by_student_id and loan dates
                $bookedByStudent = Student::inRandomOrder()->first();
                $bookedByStudentId = $bookedByStudent->id;
                $loanStartDate = $this->faker->dateTimeBetween('-30 days', 'now');
                $loanEndDate = $this->faker->dateTimeBetween($loanStartDate, '+15 days');

                if (Carbon::parse($loanEndDate)->isPast()) {
                    $status = 'available';
                    $bookedByStudentId = null;
                }
            }

            $resource = Resources::create(array_merge([
                'resource_name' => $resourceName,
                'category' => $category,
                'owner_student_id' => $ownerStudent->id,
                'loan_start_date' => $loanStartDate ? Carbon::parse($loanStartDate)->toDateString() : null,
                'loan_end_date' => $loanEndDate ? Carbon::parse($loanEndDate)->toDateString() : null,
                'status' => $status,
                'image_path' => null,
                'booked_by_student_id' => $bookedByStudentId,
                'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            ], $attributes['resource'] ?? []));

            $resources[] = $resource;
        }

        return $resources;
    }

}
