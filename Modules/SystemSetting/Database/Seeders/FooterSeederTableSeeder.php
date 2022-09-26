<?php

namespace Modules\SystemSetting\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\SystemSetting\Entities\FooterCategory;
use Modules\SystemSetting\Entities\FooterContent;

class FooterSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        FooterCategory::truncate();
        FooterContent::truncate();

        FooterCategory::create([
            'title' => 'Company',
        ]);
        FooterCategory::create([
            'title' => 'Products',
        ]);
        FooterCategory::create([
            'title' => 'Support',
        ]);
        FooterCategory::create([
            'title' => 'Stay Up to Date',
            'description' => 'By giving us your email, you agree to our Terms of Service and Privacy Policy.',
            'placeholder' => 'Enter Your Email',
        ]);
        FooterCategory::create([
            'title' => 'Bottom Footer Part',
            'description' => '<p>Copyright © 2022 All rights reserved | This BetterVocation Application is made by Golpo Communications.</p>',
        ]);

        $companies = ['About', 'Blog', 'Faq', 'Contact Us', 'Pricing Plan & Package', 'Privacy & Policy'];
        $products = ['Our Plans', 'Academic Solutions', 'Government Solutions', 'Business Solutions'];
        $supports = ['Help & Support'];

        foreach ($companies as $company) {
            DB::table('footer_contents')->insert([
                'footer_category_id' => 1,
                'name' => $company,
                'link' => '/page/' . Str::slug($company, '_'),
            ]);
        }

        $product_id = 7;
        foreach ($products as $product) {
            DB::table('footer_contents')->insert([
                'footer_category_id' => 2,
                'name' => $product,
                'link' => '/page/' . Str::slug($product, '_'),
            ]);
            $product_id++;
        }

        $support_id = 11;
        foreach ($supports as $support) {
            DB::table('footer_contents')->insert([
                'footer_category_id' => 3,
                'name' => $support,
                'link' => '/page/' . Str::slug($support, '_'),
            ]);
            $support_id++;
        }
    }
}
