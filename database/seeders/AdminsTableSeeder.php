<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $password=Hash::make('123456');
        $adminrecords=[
            ['id'=>1,'name'=>'admin','type'=>'admin','mobile'=>9876543210,'email'=>'admin1@admin.com','password'=>$password,'image'=>'','status'=>'1'],
            ['id'=>2,'name'=>'admin','type'=>'admin','mobile'=>9876543210,'email'=>'admin2@admin.com','password'=>$password,'image'=>'','status'=>'1'],
            ['id'=>3,'name'=>'admin','type'=>'admin','mobile'=>9876543210,'email'=>'admin3@admin.com','password'=>$password,'image'=>'','status'=>'1'],
            ['id'=>4,'name'=>'admin','type'=>'admin','mobile'=>9876543210,'email'=>'admin4@admin.com','password'=>$password,'image'=>'','status'=>'1'],
            ['id'=>5,'name'=>'admin','type'=>'admin','mobile'=>9876543210,'email'=>'admin5@admin.com','password'=>$password,'image'=>'','status'=>'1'],
           
        ];
        Admin::insert($adminrecords);
    }
}
