<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Modules\ModuleManager\Entities\Module;

class AddSupportTicketModule extends Migration
{
    public function up()
    {
        $totalCount = DB::table('modules')->count();

        $newModule = new Module();
        $newModule->name = 'SupportTicket';
        $newModule->details = 'SupportTicket Module For BetterVocation. ';
        $newModule->status = 0;
        $newModule->order = $totalCount;
        $newModule->save();
    }

    public function down()
    {
        //
    }
}
