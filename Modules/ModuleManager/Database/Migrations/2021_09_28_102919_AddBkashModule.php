<?php

use Illuminate\Database\Migrations\Migration;

class AddBkashModule extends Migration
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
        $newModule->name = 'Bkash';
        $newModule->details = 'Bkash Module For BetterVocation. Bkash is a bangladeshi payment gateway';
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
