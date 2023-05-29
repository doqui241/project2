<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
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
            'img' => '',
            'name' => 'qui',
            'username' => 'qui',
            'email' => 'qui@gmail.com',
            'sdt' => '0942052939',
            'password' =>bcrypt('123456'),
        ]; 
        DB::table('users')->insert($data);
        // \App\Models\User::factory(10)->create();
    }
}
