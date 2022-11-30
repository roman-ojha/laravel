<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// first we will import the model
use App\Models\Student;

class StudentController extends Controller
{
    public function show()
    {
        // Student::all() will get all the data from the table
        $students = Student::all();

        // using where clause and order by
        $students = Student::where('saddress', 'Kathmandu')->orderBy('sname')->get();

        // Chunking Results
        Student::chunk(2, function ($students) {
            echo "Chunk of Data <br/>";
            foreach ($students as $student) {
                echo $student->sname."<br/>";
            }
        });

        // get single model with primary key
        $student = Student::find(2);

        // get single data with where clause
        $student = Student::where('saddress', 'Pokhara')->first();
        $student = Student::firstWhere('saddress', 'Pokhara');

        // get single model if found, if not then run the closure
        $stu = Student::where('sname', '=', 'jack')->firstOr(function () {
            echo "First not found so function executed";
        });

        // get single model if exist, if not create
        $stu = Student::firstOrCreate(
            ['sname'=>'jack'],
            ['saddress'=>'NewYork','sphone'=>'4314321432','sclass'=>4]
        );

        // get single model if exist, if not create New instance and return it, you have to save to insert into database
        $student = Student::firstOrNew(
            ['sname'=>'Thor'],
            ['saddress'=>'NewYork','sphone'=>'4314321432','sclass'=>4]
        );
        // if we want to save the instance of that model data then:
        $student->save();

        // Aggregate methods
        $stu= Student::where('sname', "Roman")->count();
        echo $stu;

        // Insert Data
        // first create Student instance and add then save
        $stu = new Student();
        $stu->sname = "Tony";
        $stu->saddress = "london";
        $stu->sphone = "432143243";
        $stu->sclass = 3;
        $stu->save();

        // using create method
        Student::create([
            'sname'=>'Tom',
            'saddress'=>'Bhutan',
            'sphone'=>'431243243',
            'sclass'=>4,
        ]);

        // Update:
        $stu = Student::find(7);
        $stu->saddress = 'India';
        $stu->save();

        // Mass Update:
        Student::where('saddress', 'london')->update(['sclass'=>2]);

        // Update Or Create
        Student::updateOrCreate(
            ['sname'=>'Harry'],
            ['saddress'=>'Butwal','sphone'=>'4321432143','sclass'=>3]
        );

        // Delete Models
        $student = Student::find(6);
        $student->delete();

        // Delete using Destroy method
        Student::destroy(5);

        // Delete using Queries
        Student::where('sname', "Harry")->delete();

        // Deleted all the recoded data
        Student::truncate();

        return view('welcome', ['students'=>$students,'stu'=>$student]);
    }
}
