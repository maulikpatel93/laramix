<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission')->delete();
        
        \DB::table('permission')->insert(array (
            0 => 
            array (
                'id' => 1,
                'module_id' => 3,
                'panel' => 'Backend',
                'title' => 'List',
                'name' => 'list',
                'controller' => 'modules',
                'action' => 'index',
            ),
            1 => 
            array (
                'id' => 2,
                'module_id' => 3,
                'panel' => 'Backend',
                'title' => 'Create',
                'name' => 'create',
                'controller' => 'modules',
                'action' => 'create',
            ),
            2 => 
            array (
                'id' => 3,
                'module_id' => 3,
                'panel' => 'Backend',
                'title' => 'Update',
                'name' => 'update',
                'controller' => 'modules',
                'action' => 'update',
            ),
            3 => 
            array (
                'id' => 4,
                'module_id' => 3,
                'panel' => 'Backend',
                'title' => 'View',
                'name' => 'view',
                'controller' => 'modules',
                'action' => 'view',
            ),
            4 => 
            array (
                'id' => 5,
                'module_id' => 3,
                'panel' => 'Backend',
                'title' => 'Delete',
                'name' => 'delete',
                'controller' => 'modules',
                'action' => 'delete',
            ),
            5 => 
            array (
                'id' => 6,
                'module_id' => 3,
                'panel' => 'Backend',
                'title' => 'Is active',
                'name' => 'isactive',
                'controller' => 'modules',
                'action' => 'isactive',
            ),
            6 => 
            array (
                'id' => 7,
                'module_id' => 3,
                'panel' => 'Backend',
                'title' => 'Export',
                'name' => 'export',
                'controller' => 'modules',
                'action' => 'export',
            ),
            7 => 
            array (
                'id' => 8,
                'module_id' => 4,
                'panel' => 'Backend',
                'title' => 'List',
                'name' => 'list',
                'controller' => 'permission',
                'action' => 'index',
            ),
            8 => 
            array (
                'id' => 9,
                'module_id' => 4,
                'panel' => 'Backend',
                'title' => 'Create',
                'name' => 'create',
                'controller' => 'permission',
                'action' => 'create',
            ),
            9 => 
            array (
                'id' => 10,
                'module_id' => 4,
                'panel' => 'Backend',
                'title' => 'Update',
                'name' => 'update',
                'controller' => 'permission',
                'action' => 'update',
            ),
            10 => 
            array (
                'id' => 11,
                'module_id' => 4,
                'panel' => 'Backend',
                'title' => 'View',
                'name' => 'view',
                'controller' => 'permission',
                'action' => 'view',
            ),
            11 => 
            array (
                'id' => 12,
                'module_id' => 4,
                'panel' => 'Backend',
                'title' => 'Delete',
                'name' => 'delete',
                'controller' => 'permission',
                'action' => 'delete',
            ),
            12 => 
            array (
                'id' => 13,
                'module_id' => 4,
                'panel' => 'Backend',
                'title' => 'Is active',
                'name' => 'isactive',
                'controller' => 'permission',
                'action' => 'isactive',
            ),
            13 => 
            array (
                'id' => 14,
                'module_id' => 4,
                'panel' => 'Backend',
                'title' => 'Export',
                'name' => 'export',
                'controller' => 'permission',
                'action' => 'export',
            ),
            14 => 
            array (
                'id' => 15,
                'module_id' => 5,
                'panel' => 'Backend',
                'title' => 'List',
                'name' => 'list',
                'controller' => 'role',
                'action' => 'index',
            ),
            15 => 
            array (
                'id' => 16,
                'module_id' => 5,
                'panel' => 'Backend',
                'title' => 'Create',
                'name' => 'create',
                'controller' => 'role',
                'action' => 'create',
            ),
            16 => 
            array (
                'id' => 17,
                'module_id' => 5,
                'panel' => 'Backend',
                'title' => 'Update',
                'name' => 'update',
                'controller' => 'role',
                'action' => 'update',
            ),
            17 => 
            array (
                'id' => 18,
                'module_id' => 5,
                'panel' => 'Backend',
                'title' => 'View',
                'name' => 'view',
                'controller' => 'role',
                'action' => 'view',
            ),
            18 => 
            array (
                'id' => 19,
                'module_id' => 5,
                'panel' => 'Backend',
                'title' => 'Delete',
                'name' => 'delete',
                'controller' => 'role',
                'action' => 'delete',
            ),
            19 => 
            array (
                'id' => 20,
                'module_id' => 5,
                'panel' => 'Backend',
                'title' => 'Is active',
                'name' => 'isactive',
                'controller' => 'role',
                'action' => 'isactive',
            ),
            20 => 
            array (
                'id' => 21,
                'module_id' => 5,
                'panel' => 'Backend',
                'title' => 'Export',
                'name' => 'export',
                'controller' => 'role',
                'action' => 'export',
            ),
            21 => 
            array (
                'id' => 22,
                'module_id' => 5,
                'panel' => 'Backend',
                'title' => 'Access',
                'name' => 'access',
                'controller' => 'role',
                'action' => 'index',
            ),
            22 => 
            array (
                'id' => 23,
                'module_id' => 7,
                'panel' => 'Backend',
                'title' => 'List',
                'name' => 'list',
                'controller' => 'emailtemplates',
                'action' => 'index',
            ),
            23 => 
            array (
                'id' => 24,
                'module_id' => 7,
                'panel' => 'Backend',
                'title' => 'Create',
                'name' => 'create',
                'controller' => 'emailtemplates',
                'action' => 'create',
            ),
            24 => 
            array (
                'id' => 25,
                'module_id' => 7,
                'panel' => 'Backend',
                'title' => 'Update',
                'name' => 'update',
                'controller' => 'emailtemplates',
                'action' => 'update',
            ),
            25 => 
            array (
                'id' => 26,
                'module_id' => 7,
                'panel' => 'Backend',
                'title' => 'View',
                'name' => 'view',
                'controller' => 'emailtemplates',
                'action' => 'view',
            ),
            26 => 
            array (
                'id' => 27,
                'module_id' => 7,
                'panel' => 'Backend',
                'title' => 'Delete',
                'name' => 'delete',
                'controller' => 'emailtemplates',
                'action' => 'delete',
            ),
            27 => 
            array (
                'id' => 28,
                'module_id' => 7,
                'panel' => 'Backend',
                'title' => 'Is active',
                'name' => 'isactive',
                'controller' => 'emailtemplates',
                'action' => 'isactive',
            ),
            28 => 
            array (
                'id' => 29,
                'module_id' => 8,
                'panel' => 'Backend',
                'title' => 'List',
                'name' => 'list',
                'controller' => 'settings',
                'action' => 'index',
            ),
            29 => 
            array (
                'id' => 30,
                'module_id' => 8,
                'panel' => 'Backend',
                'title' => 'Create',
                'name' => 'create',
                'controller' => 'settings',
                'action' => 'create',
            ),
            30 => 
            array (
                'id' => 31,
                'module_id' => 8,
                'panel' => 'Backend',
                'title' => 'Update',
                'name' => 'update',
                'controller' => 'settings',
                'action' => 'update',
            ),
            31 => 
            array (
                'id' => 32,
                'module_id' => 8,
                'panel' => 'Backend',
                'title' => 'View',
                'name' => 'view',
                'controller' => 'settings',
                'action' => 'view',
            ),
            32 => 
            array (
                'id' => 33,
                'module_id' => 8,
                'panel' => 'Backend',
                'title' => 'Delete',
                'name' => 'delete',
                'controller' => 'settings',
                'action' => 'delete',
            ),
            33 => 
            array (
                'id' => 34,
                'module_id' => 8,
                'panel' => 'Backend',
                'title' => 'Is active',
                'name' => 'isactive',
                'controller' => 'settings',
                'action' => 'isactive',
            ),
            34 => 
            array (
                'id' => 35,
                'module_id' => 8,
                'panel' => 'Backend',
                'title' => 'Export',
                'name' => 'export',
                'controller' => 'settings',
                'action' => 'export',
            ),
            35 => 
            array (
                'id' => 36,
                'module_id' => 9,
                'panel' => 'Backend',
                'title' => 'List',
                'name' => 'list',
                'controller' => 'custompages',
                'action' => 'index',
            ),
            36 => 
            array (
                'id' => 37,
                'module_id' => 9,
                'panel' => 'Backend',
                'title' => 'Create',
                'name' => 'create',
                'controller' => 'custompages',
                'action' => 'create',
            ),
            37 => 
            array (
                'id' => 38,
                'module_id' => 9,
                'panel' => 'Backend',
                'title' => 'Update',
                'name' => 'update',
                'controller' => 'custompages',
                'action' => 'update',
            ),
            38 => 
            array (
                'id' => 39,
                'module_id' => 9,
                'panel' => 'Backend',
                'title' => 'View',
                'name' => 'view',
                'controller' => 'custompages',
                'action' => 'view',
            ),
            39 => 
            array (
                'id' => 40,
                'module_id' => 9,
                'panel' => 'Backend',
                'title' => 'Delete',
                'name' => 'delete',
                'controller' => 'custompages',
                'action' => 'delete',
            ),
            40 => 
            array (
                'id' => 41,
                'module_id' => 9,
                'panel' => 'Backend',
                'title' => 'Is active',
                'name' => 'isactive',
                'controller' => 'custompages',
                'action' => 'isactive',
            ),
            41 => 
            array (
                'id' => 42,
                'module_id' => 10,
                'panel' => 'Backend',
                'title' => 'List',
                'name' => 'list',
                'controller' => 'user',
                'action' => 'index',
            ),
            42 => 
            array (
                'id' => 43,
                'module_id' => 10,
                'panel' => 'Backend',
                'title' => 'Create',
                'name' => 'create',
                'controller' => 'user',
                'action' => 'create',
            ),
            43 => 
            array (
                'id' => 44,
                'module_id' => 10,
                'panel' => 'Backend',
                'title' => 'Update',
                'name' => 'update',
                'controller' => 'user',
                'action' => 'update',
            ),
            44 => 
            array (
                'id' => 45,
                'module_id' => 10,
                'panel' => 'Backend',
                'title' => 'View',
                'name' => 'view',
                'controller' => 'user',
                'action' => 'view',
            ),
            45 => 
            array (
                'id' => 46,
                'module_id' => 10,
                'panel' => 'Backend',
                'title' => 'Delete',
                'name' => 'delete',
                'controller' => 'user',
                'action' => 'delete',
            ),
            46 => 
            array (
                'id' => 47,
                'module_id' => 10,
                'panel' => 'Backend',
                'title' => 'Is active',
                'name' => 'isactive',
                'controller' => 'user',
                'action' => 'isactive',
            ),
            47 => 
            array (
                'id' => 48,
                'module_id' => 10,
                'panel' => 'Backend',
                'title' => 'Export',
                'name' => 'export',
                'controller' => 'user',
                'action' => 'export',
            ),
            48 => 
            array (
                'id' => 49,
                'module_id' => 10,
                'panel' => 'Backend',
                'title' => 'Change Password',
                'name' => 'changepassword',
                'controller' => 'user',
                'action' => 'changepassword',
            ),
        ));
        
        
    }
}