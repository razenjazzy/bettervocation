<?php

use Illuminate\Database\Migrations\Migration;

class AddAssignmentModule extends Migration
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
        $newModule->name = 'Assignment';
        $newModule->details = 'Assignment Module For BetterVocation';
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
