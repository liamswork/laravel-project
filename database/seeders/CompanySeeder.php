<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    public function run()
    {
        $companies = [
            [
                'name' => 'A. Datum Corporation',
                'website' => 'adatum.com',
                'email' => 'contact@adatum.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'AdventureWorks Cycles',
                'website' => 'adventureworkscycles.com',
                'email' => 'info@adventureworkscycles.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Allure Bays Corp',
                'website' => 'allurebayscorp.com',
                'email' => 'contact@allurebayscorp.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Alpine Ski House',
                'website' => 'alpineskihouse.com',
                'email' => 'info@alpineskihouse.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Awesome Computers',
                'website' => 'awesomecomputers.com',
                'email' => 'contact@awesomecomputers.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Baldwin Museum of Science',
                'website' => 'baldwinmuseumofscience.com',
                'email' => 'info@baldwinmuseumofscience.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Blue Yonder Airlines',
                'website' => 'blueyonderairlines.com',
                'email' => 'contact@blueyonderairlines.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'City Power & Light',
                'website' => 'citypowerandlight.com',
                'email' => 'info@citypowerandlight.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Coho Vineyard',
                'website' => 'cohovineyard.com',
                'email' => 'contact@cohovineyard.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Coho Winery',
                'website' => 'cohowinery.com',
                'email' => 'info@cohowinery.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Consolidated Messenger',
                'website' => 'consolidatedmessenger.com',
                'email' => 'contact@consolidatedmessenger.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Contoso Ltd.',
                'website' => 'contoso.com',
                'email' => 'contact@contoso.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Contoso Bikes & Frozen Yogurt',
                'website' => 'contosobikesandfrozenyogurt.com',
                'email' => 'contact@contosobikesandfrozenyogurt.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Contoso Pharmaceuticals',
                'website' => 'contosopharmaceuticals.com',
                'email' => 'contact@contosopharmaceuticals.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'CRONUS International Ltd.',
                'website' => 'cronusintl.com',
                'email' => 'contact@cronusintl.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Cpandl',
                'website' => 'cpandl.com',
                'email' => 'contact@cpandl.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Fabrikam, Inc.',
                'website' => 'fabrikam.com',
                'email' => 'contact@fabrikam.com',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Fine Art School',
                'website' => 'fineartschool.net',
                'email' => 'contact@fineartschool.net',
                'logo' => 'images/default-logo.jpg',
            ],
            [
                'name' => 'Fourth Coffee',
                'website' => 'fourthcoffee.com',
                'email' => 'contact@fourthcoffee.com',
                'logo' => 'images/default-logo.jpg',
            ],
        ];

        foreach ($companies as $company) {
            DB::table('companies')->insert([
                'name' => $company['name'],
                'website' => $company['website'],
                'email' => $company['email'],
                'logo' => $company['logo'],
            ]);
        }
    }
}