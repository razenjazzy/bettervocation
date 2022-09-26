<?php

use Illuminate\Database\Migrations\Migration;

class AddOrgModule extends Migration
{

    public function up()
    {
        $totalCount = \Illuminate\Support\Facades\DB::table('modules')->count();
        $newModule = new \Modules\ModuleManager\Entities\Module();
        $newModule->name = 'Org';
        $newModule->details = 'Organization Management Module For BetterVocation. ';
        $newModule->status = 0;
        $newModule->order = $totalCount;
        $newModule->save();
    }

    public function down()
    {
        //
    }
}
