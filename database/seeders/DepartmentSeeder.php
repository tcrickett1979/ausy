<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'department_name' => 'Finance',
            ],
            [
                'department_name' => 'Sales',
            ],
            [
                'department_name' => 'Marketing',
            ],
            [
                'department_name' => 'Finance',
            ],
            [
                'department_name' => 'Human Resource',
            ],
        ];

        Department::insert($data);
    }
}
