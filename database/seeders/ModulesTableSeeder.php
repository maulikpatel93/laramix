<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modules')->delete();
        
        \DB::table('modules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'panel' => 'Backend',
                'title' => 'Dashboard',
                'controller' => 'dashboard',
                'action' => 'index',
                'icon' => 'fas fa-tachometer-alt',
                'functionality' => 'crud',
                'type' => 'Menu',
                'parent_menu_id' => NULL,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => '2021-11-18 06:23:47',
                'created_at' => '2021-11-17 05:20:46',
                'updated_at' => '2021-11-22 05:44:00',
            ),
            1 => 
            array (
                'id' => 2,
                'panel' => 'Backend',
                'title' => 'Admin Management',
                'controller' => '',
                'action' => '',
                'icon' => 'fas fa-users-cog',
                'functionality' => 'other',
                'type' => 'Menu',
                'parent_menu_id' => NULL,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => '2021-11-17 06:16:16',
                'created_at' => '2021-11-17 05:21:21',
                'updated_at' => '2022-02-13 07:23:25',
            ),
            2 => 
            array (
                'id' => 3,
                'panel' => 'Backend',
                'title' => 'Modules',
                'controller' => 'modules',
                'action' => 'index',
                'icon' => 'far fa-circle',
                'functionality' => 'crud',
                'type' => 'Submenu',
                'parent_menu_id' => 2,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => '2021-11-18 06:24:34',
                'created_at' => '2021-11-17 05:21:38',
                'updated_at' => '2021-11-18 06:24:34',
            ),
            3 => 
            array (
                'id' => 4,
                'panel' => 'Backend',
                'title' => 'Permission',
                'controller' => 'permission',
                'action' => 'index',
                'icon' => 'far fa-circle',
                'functionality' => 'crud',
                'type' => 'Submenu',
                'parent_menu_id' => 2,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => '2021-11-17 06:53:25',
                'created_at' => '2021-11-17 05:22:14',
                'updated_at' => '2021-11-22 05:54:10',
            ),
            4 => 
            array (
                'id' => 5,
                'panel' => 'Backend',
                'title' => 'Role',
                'controller' => 'role',
                'action' => 'index',
                'icon' => 'far fa-circle',
                'functionality' => 'crud',
                'type' => 'Submenu',
                'parent_menu_id' => 2,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => '2021-11-17 06:53:35',
                'created_at' => '2021-11-17 05:22:51',
                'updated_at' => '2021-11-22 05:39:18',
            ),
            5 => 
            array (
                'id' => 6,
                'panel' => 'Backend',
                'title' => 'Templates',
                'controller' => '',
                'action' => '',
                'icon' => 'fas fa-envelope-open-text',
                'functionality' => 'other',
                'type' => 'Menu',
                'parent_menu_id' => NULL,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => NULL,
                'created_at' => '2021-11-17 07:33:07',
                'updated_at' => '2021-11-17 07:33:07',
            ),
            6 => 
            array (
                'id' => 7,
                'panel' => 'Backend',
                'title' => 'Email Templates',
                'controller' => 'emailtemplates',
                'action' => 'index',
                'icon' => 'far fa-circle',
                'functionality' => 'crud',
                'type' => 'Submenu',
                'parent_menu_id' => 6,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => '2021-11-18 06:23:57',
                'created_at' => '2021-11-17 07:33:53',
                'updated_at' => '2021-12-07 10:39:17',
            ),
            7 => 
            array (
                'id' => 8,
                'panel' => 'Backend',
                'title' => 'Settings',
                'controller' => 'settings',
                'action' => 'index',
                'icon' => 'fas fa-cog',
                'functionality' => 'crud',
                'type' => 'Menu',
                'parent_menu_id' => NULL,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => '2021-11-19 05:42:58',
                'created_at' => '2021-11-18 09:11:22',
                'updated_at' => '2021-11-22 05:39:55',
            ),
            8 => 
            array (
                'id' => 9,
                'panel' => 'Backend',
                'title' => 'Custom Pages',
                'controller' => 'custompages',
                'action' => 'index',
                'icon' => 'far fa-circle',
                'functionality' => 'crud',
                'type' => 'Submenu',
                'parent_menu_id' => 6,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => '2022-02-13 03:08:02',
                'created_at' => '2021-11-18 09:14:49',
                'updated_at' => '2022-02-13 03:08:02',
            ),
            9 => 
            array (
                'id' => 10,
                'panel' => 'Backend',
                'title' => 'Admin User',
                'controller' => 'user',
                'action' => 'index',
                'icon' => 'far fa-circle',
                'functionality' => 'crud',
                'type' => 'Submenu',
                'parent_menu_id' => 2,
                'parent_submenu_id' => NULL,
                'menu_position' => NULL,
                'submenu_position' => NULL,
                'is_hiddden' => 0,
                'is_active' => 1,
                'is_active_at' => '2022-07-26 13:10:09',
                'created_at' => '2021-11-19 04:26:20',
                'updated_at' => '2022-07-26 13:10:09',
            ),
        ));
        
        
    }
}