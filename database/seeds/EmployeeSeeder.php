<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{   
    /**
     * list of default employees
     * 
     * @var array
     */
    protected $employees = [
        ['first_name'=> 'Alex', 'last_name' => 'Choi', 'email' => 'unicornv24@gmail.com', 'thumbnail' => 'person1-th.png', 'profile_pic' => 'person1.png'],
        ['first_name'=> 'Damon', 'last_name' => 'Fryer', 'email' => 'dde@gmail.com', 'thumbnail' => 'person2-th.png', 'profile_pic' => 'person2.png']
    ];

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->employees as $employee) {
            Employee::firstOrCreate($employee);
        }
    }
}
