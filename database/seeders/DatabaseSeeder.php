<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email' => 'super_admin@app.com',
            'password' => Hash::make('super_admin123$$'),
            'name' => 'abdalhalem alfakhrany',
            'role' => 'admin',
        ]);

        $start_date = date('y-m-d\Th:i', mktime(11, 30, 00, 1, 18, 2024));
        $end_date = date('y-m-d\Th:i', mktime(12, 30, 00, 1, 18, 2024));
        $exam1 = Exam::create(['title' => 'exam 1', 'start_date' => $start_date, 'end_date' => $end_date]);
        $exam2 = Exam::create(['title' => 'exam 2', 'start_date' => $start_date, 'end_date' => $end_date]);
        $exam3 = Exam::create(['title' => 'exam 3', 'start_date' => $start_date, 'end_date' => $end_date]);

        $student1 = Student::create([
            'email' => 'student1@app.com',
            'password' => Hash::make('student123$$'),
            'name' => 'abdalhalem alfakhrany',
            'ph_number' => '01023453578',
            'role' => 'student',
        ]);
        $start_attendance = date('y-m-d\Th:i', mktime(11, 33, 00, 1, 18, 2024));
        $end_attendance = date('y-m-d\Th:i', mktime(12, 20, 00, 1, 18, 2024));
        $student1->exams()->save($exam1, ['result' => 10, 'start_attendance' => $start_attendance, 'end_attendance' => $end_attendance]);
        $student1->exams()->save($exam2, ['result' => 10, 'start_attendance' => $start_attendance, 'end_attendance' => $end_attendance]);

        $student2 = Student::create([
            'email' => 'student2@app.com',
            'password' => Hash::make('student123$$'),
            'name' => 'abdalhalem alfakhrany',
            'ph_number' => '01023453578',
            'role' => 'student',
        ]);
        $student2->exams()->save($exam3, ['result' => 10, 'start_attendance' => $start_attendance, 'end_attendance' => $end_attendance]);

        $student3 = Student::create([
            'email' => 'student3@app.com',
            'password' => Hash::make('student123$$'),
            'name' => 'abdalhalem alfakhrany',
            'ph_number' => '01023453578',
            'role' => 'student',
        ]);
        $student3->exams()->save($exam3, ['result' => 10, 'start_attendance' => $start_attendance, 'end_attendance' => $end_attendance]);
    }
}
