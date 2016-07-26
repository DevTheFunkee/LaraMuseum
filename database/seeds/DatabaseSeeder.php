<?php

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
        $this->call('VisitorTableSeeder');
        $this->call('AvenueTableSeeder');
        $this->call('EventTableSeeder');

    }
}
