<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name');
            $table->string('title');
            $table->string('image');
            $table->string('version');
            $table->string('folder_path')->default('bettervocationtheme');
            $table->string('live_link')->default('#');
            $table->text('description');
            $table->boolean('is_active');
            $table->boolean('status');
            $table->text('tags')->nullable();
            $table->timestamps();
        });

        DB::table('themes')->insert(
            [
                'name' => 'bettervocationtheme',
                'title' => 'Better Vocation Theme',
                'version' => '1.00',
                'live_link' => '#',
                'tags' => 'clean',
                'folder_path' => 'bettervocationtheme',
                'image' => 'public/frontend/bettervocationtheme/img/screenshort.jpg',
                'description' => 'Better Vocation Default Theme',
                'is_active' => 1,
                'status' => 1,
            ]
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('themes');
    }
}
