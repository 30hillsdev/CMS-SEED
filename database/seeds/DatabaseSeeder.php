<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(Cms_Framework_Seed\MenuTableSeeder::class);
        $this->call(Cms_Framework_Seed\UserTableSeeder::class);
        $this->call(Cms_Framework_Seed\RoleTableSeeder::class);

        $this->call(Cms_Framework_Seed\ClientTableSeeder::class);
        $this->call(Litepie\MessageTableSeeder::class);
        $this->call(Cms_Framework_Seed\SettingTableSeeder::class);
        $this->call(Litepie\CalendarTableSeeder::class);
        $this->call(Litepie\TaskTableSeeder::class);
        $this->call(Litecms\BlockTableSeeder::class);
        $this->call(Litecms\ContactTableSeeder::class);
        $this->call(Litecms\PageTableSeeder::class);

        Model::reguard();
    }
}
