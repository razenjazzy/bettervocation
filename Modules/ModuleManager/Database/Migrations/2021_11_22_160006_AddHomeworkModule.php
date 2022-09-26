<?php

use Illuminate\Database\Migrations\Migration;

class AddHomeworkModule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $totalCount = \Illuminate\Support\Facades\DB::table('modules')->count();

        $newModule = new \Modules\ModuleManager\Entities\Module();
        $newModule->name = 'Homework';
        $newModule->details = 'Homework Module For BetterVocation. ';
        $newModule->status = 0;
        $newModule->order = $totalCount;
        $newModule->save();

        $newModule = new \Modules\ModuleManager\Entities\Module();
        $newModule->name = 'Communicate';
        $newModule->details = 'Communicate module for Better Vocation';
        $newModule->status = 0;
        $newModule->order = $totalCount;
        $newModule->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
