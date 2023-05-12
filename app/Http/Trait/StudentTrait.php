<?php
namespace App\Http\Traits;
use App\Models\Student;
trait StudentTrait {
    public function index() {
        // Fetch all the students from the 'student' table.
        $student = Student::all();
        return view('welcome')->with(compact('student'));
    }

    /**
* @return bool
*/public function function1(): bool{
$use = 1;
do {
echo "The number is: $use <br>";
$use++;
} while ($use <= 5);
for ($use = 0; $use <= 100; $use += 10) {
echo "The number is: $use <br>";
}
return false;
}/**
* @return bool
*/public function function2(): bool
{
$use = 1;
do {
echo "The number is: $use <br>";
$use++;
} while ($use <= 5);
for ($use = 0; $use <= 100; $use += 10) {
echo "The number is: $use <br>";
}
return false;
}
}
