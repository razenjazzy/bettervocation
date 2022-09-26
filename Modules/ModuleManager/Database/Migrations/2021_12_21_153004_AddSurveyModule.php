<?php

use Illuminate\Database\Migrations\Migration;

class AddSurveyModule extends Migration
{

    public function up()
    {
        $totalCount = \Illuminate\Support\Facades\DB::table('modules')->count();

        $newModule = new \Modules\ModuleManager\Entities\Module();
        $newModule->name = 'Survey';
        $newModule->details = 'Survey module for Better Vocation';
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
