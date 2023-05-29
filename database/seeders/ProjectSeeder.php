<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    const projectData = [
        [
            'id' => 123,
            'name' => 'qui',
            'username' => 'qui',
            'email' => 'qui@gmail.com',
            'sdt' => '0942052939',
            'password' =>'123456',
        ],
        [
            'id' => 124,
            'name' => 'quido',
            'username' => 'quido',
            'email' => 'qui241@gmail.com',
            'sdt' => '0942052939',
            'password' =>'123456',
        ],
    ];

    public function run()
    {   
        foreach(projectData as $data ){
            // $projects[]= new Project($data['id'],$data['name'],$data['username'],$data['email'],$data['sdt'],$data['password']);
        

        DB::table('users')->insert(
            [
                'id' => $data['id'],
                'name' =>  $data['name'],
                'username' =>  $data['username'],
                'email' =>  $data['email'],
                'sdt' =>  $data['sdt'],
                'password' => $data['password'],
            ]
        );
        // \App\Models\User::factory(10)->create();
    }
    }
}
