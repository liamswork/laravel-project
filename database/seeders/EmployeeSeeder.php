<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $companyIds = DB::table('companies')->pluck('company_id');

        for ($i = 0; $i < 50; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $companyId = $faker->randomElement($companyIds);
            $email = strtolower($firstName) . '.' . strtolower($lastName) . '@example.com';
            $phoneNumber = $faker->phoneNumber;

            DB::table('employees')->insert([
                'employee_id' => $i + 1, // Assuming employee_id starts at 1 and increments
                'fname' => $firstName,
                'lname' => $lastName,
                'company_id' => $companyId,
                'email' => $email,
                'phone' => $phoneNumber,
            ]);
        }
    }
}