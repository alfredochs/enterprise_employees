<?php

use App\Employee;
use App\Enterprise;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\fr_FR\Person as FakerNames;
use Faker\Provider\en_US\PhoneNumber as FakerNumber;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, FakerNames $fakerNames, FakerNumber $fNumbers)
    {
        $enterprises = Enterprise::all();
        foreach ($enterprises as $enterprise) {
            $numberOfEmployees = $faker->numberBetween(0, 20);
            for ($i = 0; $i < $numberOfEmployees; $i++) {
                $newEmployee = new Employee();
                $newEmployee->first_name = $fakerNames->firstName();
                $newEmployee->last_name = $fakerNames->lastName();
                $newEmployee->enterprise_id = $enterprise['id'];
                $newEmployee->phone = $fNumbers->phoneNumber();
                $newEmployee->email = $faker->email();
                $newEmployee->save();
            }
        }
    }
}
