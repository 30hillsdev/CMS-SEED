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
        $this->call(Cms_Framework_Seed\MessageTableSeeder::class);
        $this->call(Cms_Framework_Seed\SettingTableSeeder::class);
        $this->call(Cms_Framework_Seed\CalendarTableSeeder::class);
        $this->call(Cms_Framework_Seed\TaskTableSeeder::class);
        $this->call(Cms_Framework_Seed\BlockTableSeeder::class);
        $this->call(Cms_Framework_Seed\ContactTableSeeder::class);
        $this->call(Cms_Framework_Seed\PageTableSeeder::class);

        Model::reguard();
    }
}
