<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create ([

           'name'=>'admin',
            'email'=>'adminemail@gmail.com',
            'password'=>bcrypt('admin123'),
            'image'=>'admin.jpg',
            'gender'=>'gender',
            'contact'=>'contact',
            'shift'=>'shift',
            'address'=>'address',



        ]);
    }
}
