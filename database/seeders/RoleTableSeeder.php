<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role')->delete();
        
        \DB::table('role')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'masteradmin',
                'panel' => 'Backend',
                'is_active' => 1,
                'is_active_at' => '2022-07-26 11:11:42',
                'created_at' => '1979-08-15 17:59:49',
                'updated_at' => '2022-07-26 11:11:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'panel' => 'Backend',
                'is_active' => 1,
                'is_active_at' => '2021-11-18 10:39:12',
                'created_at' => '1994-02-01 18:13:21',
                'updated_at' => '2021-11-18 10:39:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Subadmin',
                'panel' => 'Backend',
                'is_active' => 1,
                'is_active_at' => '2022-07-26 13:24:27',
                'created_at' => '1971-07-25 10:14:26',
                'updated_at' => '2022-07-26 13:24:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'User',
                'panel' => 'Frontend',
                'is_active' => 1,
                'is_active_at' => '2022-07-26 09:12:34',
                'created_at' => '2021-11-24 10:52:56',
                'updated_at' => '2022-07-26 13:27:20',
            ),
        ));
        
        
    }
}