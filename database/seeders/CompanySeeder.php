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
                'slug' => 'adatum',
            ],
            [
                'name' => 'AdventureWorks Cycles',
                'website' => 'adventureworkscycles.com',
                'email' => 'info@adventureworkscycles.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'adventureworks-cycles',
            ],
            [
                'name' => 'Allure Bays Corp',
                'website' => 'allurebayscorp.com',
                'email' => 'contact@allurebayscorp.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'allure-bays-corp',
            ],
            [
                'name' => 'Alpine Ski House',
                'website' => 'alpineskihouse.com',
                'email' => 'info@alpineskihouse.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'alpine-ski-house',
            ],
            [
                'name' => 'Awesome Computers',
                'website' => 'awesomecomputers.com',
                'email' => 'contact@awesomecomputers.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'awesome-computers',
            ],
            [
                'name' => 'Baldwin Museum of Science',
                'website' => 'baldwinmuseumofscience.com',
                'email' => 'info@baldwinmuseumofscience.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'baldwin-museum-of-science',
            ],
            [
                'name' => 'Blue Yonder Airlines',
                'website' => 'blueyonderairlines.com',
                'email' => 'contact@blueyonderairlines.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'blue-yonder-airlines',
            ],
            [
                'name' => 'City Power & Light',
                'website' => 'citypowerandlight.com',
                'email' => 'info@citypowerandlight.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'city-power-light',
            ],
            [
                'name' => 'Coho Vineyard',
                'website' => 'cohovineyard.com',
                'email' => 'contact@cohovineyard.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'coho-vineyard',
            ],
            [
                'name' => 'Coho Winery',
                'website' => 'cohowinery.com',
                'email' => 'info@cohowinery.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'coho-winery',
            ],
            [
                'name' => 'Consolidated Messenger',
                'website' => 'consolidatedmessenger.com',
                'email' => 'contact@consolidatedmessenger.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'consolidated-messenger',
            ],
            [
                'name' => 'Contoso Ltd.',
                'website' => 'contoso.com',
                'email' => 'contact@contoso.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'contoso-ltd',
            ],
            [
                'name' => 'Contoso Bikes & Frozen Yogurt',
                'website' => 'contosobikesandfrozenyogurt.com',
                'email' => 'contact@contosobikesandfrozenyogurt.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'contoso-bikes-frozen-yogurt',
            ],
            [
                'name' => 'Contoso Pharmaceuticals',
                'website' => 'contosopharmaceuticals.com',
                'email' => 'contact@contosopharmaceuticals.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'contoso-pharmaceuticals',
            ],
            [
                'name' => 'CRONUS International Ltd.',
                'website' => 'cronusintl.com',
                'email' => 'contact@cronusintl.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'cronus-international-ltd',
            ],
            [
                'name' => 'Cpandl',
                'website' => 'cpandl.com',
                'email' => 'contact@cpandl.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'cpandl',
            ],
            [
                'name' => 'Fabrikam, Inc.',
                'website' => 'fabrikam.com',
                'email' => 'contact@fabrikam.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'fabrikam-inc',
            ],
            [
                'name' => 'Fine Art School',
                'website' => 'fineartschool.net',
                'email' => 'contact@fineartschool.net',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'fine-art-school',
            ],
            [
                'name' => 'Fourth Coffee',
                'website' => 'fourthcoffee.com',
                'email' => 'contact@fourthcoffee.com',
                'logo' => 'images/default-logo.jpg',
                'slug' => 'fourth-coffee',
            ],
        ];
        
        foreach ($companies as $company) {
            DB::table('companies')->insert([
                'name' => $company['name'],
                'website' => $company['website'],
                'email' => $company['email'],
                'logo' => $company['logo'],
                'slug' => $company['slug'],
            ]);
        }
    }
}