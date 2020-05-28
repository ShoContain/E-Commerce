<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;

class MenusTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'footer_menu',
        ]);

        Menu::firstOrCreate([
            'name' => 'header_menu',
        ]);
    }
}
