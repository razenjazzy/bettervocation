<?php

use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UpdateGeneralSetting('footer_copy_right', 'Copyright © 2022 Better Vocation All rights ');

    }
}
