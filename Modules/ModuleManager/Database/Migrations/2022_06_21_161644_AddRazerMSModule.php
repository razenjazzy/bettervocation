<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Modules\ModuleManager\Entities\Module;

class AddRazerMSModule extends Migration
{

    public function up()
    {
        $totalCount = DB::table('modules')->count();
        $newModule = new Module();
        $newModule->name = 'RazerMS';
        $newModule->details = 'RazerMS payment gateway Module For BetterVocation. ';
        $newModule->status = 0;
        $newModule->order = $totalCount;
        $newModule->save();
    }

    public function down()
    {
        //
    }
}
