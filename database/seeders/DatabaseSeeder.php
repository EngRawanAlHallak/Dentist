<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\DataFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

      //  DB::table('practical_schedule_students')->truncate();

        $this->call([
//            BasicSeeder::class,
            EducationalContentSeeder::class
        ]);

//       $Userfactory = new UserFactory();
//        $Userfactory->createUsersAndPatients(50);
//        $Userfactory->createUsersAndStudents();
//        $Userfactory->createUsersWithSupervisorRole(30);
//        $Userfactory->createUsersWithDoctorRole(20);

//        $Datafactory = new DataFactory();
//        $Datafactory->assignRandomDiseasesToPatients();
//        $Datafactory->createResources(30);
//


    }
}
