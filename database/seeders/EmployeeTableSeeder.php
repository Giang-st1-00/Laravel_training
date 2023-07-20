<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            ['department_name' => 'JIT'],
            ['department_name' => 'KIT'],
            ['department_name' => 'GIT']
        ];

        Department::insert($departments);
    }
}
