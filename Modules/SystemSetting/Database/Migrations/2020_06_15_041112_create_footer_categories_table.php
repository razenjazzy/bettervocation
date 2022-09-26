<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\SystemSetting\Entities\FooterCategory;

class CreateFooterCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('placeholder')->nullable();

            $table->timestamps();
        });

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
            'description' => '<p>@BetterVocation - Ultimate Learning Management All Rights Reserved to - BetterVocation</p>',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer_categories');
    }
}
