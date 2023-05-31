<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class ProjectSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $data=[
            'id' => 123,
            'matb' => 'KIO_01',
            'tentb' => 'Kiosk',
            'loaitb' => 'Kiosk',
            'diachiip' => '192.168.1.10',
            'dichvusd' => 'Khám tim mạch',
            'username' => 'qui',
            'password' =>'123456',
        ]; 
        DB::table('thietbi')->insert($data);
        // \App\Models\User::factory(10)->create();
    }
}
