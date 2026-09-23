<?php

namespace Database\Seeders;

use App\Models\Disease;
use App\Models\Patient;
use App\Models\PatientRequest;
use App\Models\PracticalSchedule;
use App\Models\Resources;
use App\Models\Stage;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class BasicSeeder extends Seeder
{
    public function run(): void
    {
        //roles
        Role::create(['name' => 'dentalStudent']);
        Role::create(['name' => 'patient']);
        Role::create(['name' => 'supervisor']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'radiologyManager']);
        Role::create(['name' => 'AdmissionManager']);

        //diseases
        Disease::create(['name' => 'داء السكري']);
        Disease::create(['name' => 'امراض القلب وضغط الدم']);
        Disease::create(['name' => 'التدخين']);
        Disease::create(['name' => 'الحمل']);
        Disease::create(['name' => 'امراض الغدد الصماء']);
        Disease::create(['name' => 'حساسية اتجاه اي مادة طبية']);
        Disease::create(['name' => 'امراض معدية']);

        //stages
        Stage::create(['name' => ['en' =>'Orthodontic', 'ar' => 'تقويم الاسنان'],'required_case_count'=>5,'Practical_Mark'=>30]);   //تقويم الاسنان
        Stage::create(['name' => ['en' =>'Pediatic Dentistry', 'ar' => 'طب اسنان الاطفال'],'required_case_count'=>6,'Practical_Mark'=>30]);   //طب اسنان الاطفال
        Stage::create(['name' => ['en' =>'Oral medicine', 'ar' => 'طب الفم'],'required_case_count'=>3,'Practical_Mark'=>30]); // طب الفم
        Stage::create(['name' => ['en' =>'Gum Disease', 'ar' => 'أمراض اللثة'],'required_case_count'=>5,'Practical_Mark'=>30]);   //امراض اللثة
        Stage::create(['name' => ['en' =>'Fixed and Removable Dentures', 'ar' => 'التعويضات الثابتة والمتحركة'],'required_case_count'=>6,'Practical_Mark'=>30]); //التعويضات الثابتة والمتحركة
        Stage::create(['name' => ['en' =>'Treatment', 'ar' => 'المداواة'],'required_case_count'=>5,'Practical_Mark'=>30]); //المداواة
        Stage::create(['name' => ['en' =>'Dental Treatments', 'ar' => 'المعالجات السنية'],'required_case_count'=>6,'Practical_Mark'=>30]); //المعالجات السنية
        Stage::create(['name' => ['en' =>'Oral Surgery', 'ar' => 'الجراحة الفموية'],'required_case_count'=>5,'Practical_Mark'=>30]); //الجراحة الفموية

        //basic users
        User::create([
            'name' =>['en' => 'rawan', 'ar' => 'روان'],
            'phone_number'=>'988307451',
            'national_number'=>'10101010101',
            'password'=>Hash::make('10101010'),
            'role_id'=>'1']); // student

        User::create([
            'name' => ['en' => 'touqa', 'ar' => 'تقى'],
            'phone_number'=>'934936220',
            'national_number'=>'22222222222',
            'password'=>Hash::make('22222222'),
            'role_id'=>'1']); // student

        User::create([
            'name' => 'ghalia',
            'phone_number'=>'948868463',
            'national_number'=>'20202020202',
            'password'=>Hash::make('20202020'),
            'role_id'=>'2']); //patient

        User::create([
            'name' => 'raneem',
            'phone_number'=>'995247365',
            'national_number'=>'33333333333',
            'password'=>Hash::make('33333333'),
            'role_id'=>'2']); //patient

        User::create([
            'name' => 'zainab',
            'phone_number'=>'982145673',
            'national_number'=>'33223322332',
            'password'=>Hash::make('33333333'),
            'role_id'=>'2']); //patient

        User::create([
            'name' => 'hamad',
            'phone_number'=>'982567431',
            'national_number'=>'11221122112',
            'password'=>Hash::make('33333333'),
            'role_id'=>'2']); //patient

        User::create([
            'name' => 'ziad',
            'phone_number'=>'994453672',
            'national_number'=>'22112211221',
            'password'=>Hash::make('33333333'),
            'role_id'=>'2']); //patient

        User::create([
            'name' => 'ahmad',
            'phone_number'=>'988741235',
            'national_number'=>'30303030303',
            'password'=>Hash::make('30303030'),
            'role_id'=>'3']); //supervisor

        User::create([
            'name' => 'sama',
            'phone_number'=>'996525847',
            'national_number'=>'33553355335',
            'password'=>Hash::make('30303030'),
            'role_id'=>'3']); //supervisor

        User::create([
            'name' => 'waseem',
            'phone_number'=>'954336715',
            'national_number'=>'33663366336',
            'password'=>Hash::make('30303030'),
            'role_id'=>'3']); //supervisor


        User::create([
            'name' => 'omar',
            'phone_number'=>'404040404',
            'national_number'=>'40404040404',
            'password'=>Hash::make('40404040'),
            'role_id'=>'4']); //doctor

        User::create([
            'name' => 'sami',
            'phone_number'=>'985797431',
            'national_number'=>'50505050505',
            'password'=>Hash::make('50505050'),
            'role_id'=>'5']); //admin

        User::create([
            'name' => 'hazem',
            'phone_number'=>'993531394',
            'national_number'=>'60606060606',
            'password'=>Hash::make('60606060'),
            'role_id'=>'6']); //radiology

        User::create([
            'name' => 'areej',
            'phone_number'=>'939560554',
            'national_number'=>'70707070707',
            'password'=>Hash::make('70707070'),
            'role_id'=>'7']); //admission

        Student::create(['user_id' => 1, 'year' => 'fourth-year']);
        Student::create(['user_id' => 2, 'year' => 'fifth-year']);

        Patient::create(['user_id' => 3, 'height' => 1.65, 'weight' => 60.5, 'birthdate' => '2006-07-11']);
        Patient::create(['user_id' => 4, 'height' => 1.72, 'weight' => 70.2, 'birthdate' => '2007-01-05']);
        Patient::create(['user_id' => 5, 'height' => 1.7, 'weight' => 80, 'birthdate' => '2006-01-01']);
        Patient::create(['user_id' => 6, 'height' => 1.8, 'weight' => 78, 'birthdate' => '2000-09-05']);
        Patient::create(['user_id' => 7, 'height' => 1.6, 'weight' => 66, 'birthdate' => '1998-12-11']);

        //fourth year table
        practicalSchedule::create(['days' => 'Sunday', 'stage_id' => 5, 'supervisor_id' => 8,
                'location' => 'lap3', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Sunday', 'stage_id' => 3, 'supervisor_id' => 9,
            'location' => 'lap1', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Sunday', 'stage_id' => 7, 'supervisor_id' => 10,
            'location' => 'lap2', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Sunday', 'stage_id' => 6, 'supervisor_id' => 10,
            'location' => 'lap4', 'start_time' => '15:00:00', 'end_time' => '17:00:00', 'year' => 'fourth-year']);

        practicalSchedule::create(['days' => 'Monday', 'stage_id' => 3, 'supervisor_id' => 9,
            'location' => 'lap3', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Monday', 'stage_id' => 7, 'supervisor_id' => 10,
            'location' => 'lap1', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Monday', 'stage_id' => 2, 'supervisor_id' => 8,
            'location' => 'lap2', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fourth-year']);

        practicalSchedule::create(['days' => 'Tuesday', 'stage_id' => 6, 'supervisor_id' => 10,
            'location' => 'lap3', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Tuesday', 'stage_id' => 5, 'supervisor_id' => 8,
            'location' => 'lap1', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Tuesday', 'stage_id' => 2, 'supervisor_id' => 8,
            'location' => 'lap2', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Tuesday', 'stage_id' => 7, 'supervisor_id' => 10,
            'location' => 'lap4', 'start_time' => '15:00:00', 'end_time' => '17:00:00', 'year' => 'fourth-year']);

        practicalSchedule::create(['days' => 'Wednesday', 'stage_id' => 5, 'supervisor_id' => 8,
            'location' => 'lap3', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Wednesday', 'stage_id' => 7, 'supervisor_id' => 10,
            'location' => 'lap1', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Wednesday', 'stage_id' => 2, 'supervisor_id' => 8,
            'location' => 'lap2', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fourth-year']);

        practicalSchedule::create(['days' => 'Thursday', 'stage_id' => 1, 'supervisor_id' => 9,
            'location' => 'lap3', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Thursday', 'stage_id' => 7, 'supervisor_id' => 10,
            'location' => 'lap1', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fourth-year']);
        practicalSchedule::create(['days' => 'Thursday', 'stage_id' => 3, 'supervisor_id' => 9,
            'location' => 'lap2', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fourth-year']);

        // fifth year
        practicalSchedule::create(['days' => 'Sunday', 'stage_id' => 1, 'supervisor_id' => 9,
            'location' => 'lap4', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Sunday', 'stage_id' => 7, 'supervisor_id' => 10,
            'location' => 'lap5', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Sunday', 'stage_id' => 6, 'supervisor_id' => 9,
            'location' => 'lap6', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fifth-year']);

        practicalSchedule::create(['days' => 'Monday', 'stage_id' => 5, 'supervisor_id' => 8,
            'location' => 'lap4', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Monday', 'stage_id' => 6, 'supervisor_id' => 9,
            'location' => 'lap5', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Monday', 'stage_id' => 1, 'supervisor_id' => 8,
            'location' => 'lap6', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fifth-year']);

        practicalSchedule::create(['days' => 'Tuesday', 'stage_id' => 1, 'supervisor_id' =>8,
            'location' => 'lap3', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Tuesday', 'stage_id' => 6, 'supervisor_id' => 9,
            'location' => 'lap1', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Tuesday', 'stage_id' => 7, 'supervisor_id' => 10,
            'location' => 'lap2', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fifth-year']);

        practicalSchedule::create(['days' => 'Wednesday', 'stage_id' => 6, 'supervisor_id' => 9,
            'location' => 'lap3', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Wednesday', 'stage_id' => 5, 'supervisor_id' => 8,
            'location' => 'lap1', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Wednesday', 'stage_id' => 1, 'supervisor_id' => 10,
            'location' => 'lap2', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fifth-year']);

        practicalSchedule::create(['days' => 'Thursday', 'stage_id' => 7, 'supervisor_id' => 10,
            'location' => 'lap3', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Thursday', 'stage_id' => 6, 'supervisor_id' => 9,
            'location' => 'lap1', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'year' => 'fifth-year']);
        practicalSchedule::create(['days' => 'Thursday', 'stage_id' => 1, 'supervisor_id' => 8,
            'location' => 'lap2', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'year' => 'fifth-year']);


    }
}
