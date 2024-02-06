<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $role_administrator = Role::create(['name' => 'administrator']);
        $role_writer = Role::create(['name' => 'writer']);
        $role_postman = Role::create(['name' => 'postman']);


        Permission::create(['name' => 'users create']);
        Permission::create(['name' => 'users read']);
        Permission::create(['name' => 'users update']);
        Permission::create(['name' => 'users delete']);

        Permission::create(['name' => 'products create']);
        Permission::create(['name' => 'products read']);
        Permission::create(['name' => 'products update']);
        Permission::create(['name' => 'products delete']);

        Permission::create(['name' => 'orders read']);
        Permission::create(['name' => 'orders delete']);

        Permission::create(['name' => 'discounts create']);
        Permission::create(['name' => 'discounts read']);
        Permission::create(['name' => 'discounts update']);
        Permission::create(['name' => 'discounts delete']);

        Permission::create(['name' => 'site setting']);
        Permission::create(['name' => 'permissions']);
        Permission::create(['name' => 'roles']);
        
        Permission::create(['name' => 'comments create']);
        Permission::create(['name' => 'comments read']);
        Permission::create(['name' => 'comments update']);
        Permission::create(['name' => 'comments delete']);

        Permission::create(['name' => 'reviews create']);
        Permission::create(['name' => 'reviews read']);
        Permission::create(['name' => 'reviews update']);
        Permission::create(['name' => 'reviews delete']);
        

        $role_administrator->givePermissionTo([
            'users create',
            'users read',
            'users update',
            'users delete',

            'products create',
            'products read',
            'products update',
            'products delete',

            'orders read',
            'orders delete',

            'discounts create',
            'discounts read',
            'discounts update',
            'discounts delete',

            'site setting',
            'permissions',
            'roles',

            'comments create',
            'comments read',
            'comments update',
            'comments delete',

            'reviews create',
            'reviews read',
            'reviews update',
            'reviews delete',

        ]);
        $role_writer->givePermissionTo([
            'users read',



            'products create',
            'products read',
            'products update',
            'products delete',

            'discounts create',
            'discounts read',
            'discounts update',
            'discounts delete',

            'comments create',
            'comments read',
            'comments update',
            'comments delete',

            'reviews create',
            'reviews read',
            'reviews update',
            'reviews delete',
        ]);
        $role_postman->givePermissionTo([
            'users read',
            
            'orders read',
        ]);

        













        // $role_administrator = Role::create(['name' => 'administrator']);
        // $role_writer = Role::create(['name' => 'writer']);
        // $role_postman = Role::create(['name' => 'postman']);
        // $permission_users = Permission::create(['name' => 'users']);
        // $permission_products = Permission::create(['name' => 'products']);
        // $permission_oders = Permission::create(['name' => 'oders']);
        // $permission_discounts = Permission::create(['name' => 'discounts']);
        // $permission_site_setting = Permission::create(['name' => 'site setting']);
        // $permission_permissions = Permission::create(['name' => 'permissions']);
        // $permission_roles = Permission::create(['name' => 'roles']);
        // $permission_comments = Permission::create(['name' => 'comments']);
        // $permission_reviews = Permission::create(['name' => 'reviews']);
        // $permission_orders_paid = Permission::create(['name' => 'orders paid']);
        // $permission_orders_delivered = Permission::create(['name' => 'orders delivered']);
        // $permission_orders_returned = Permission::create(['name' => 'orders returned']);
        // // give  permission to roles
        // $role_administrator->givePermissionTo('users', 'products','oders','discounts','site setting','permissions','roles','comments','reviews','orders paid','orders delivered','orders returned');
        // $role_writer->givePermissionTo('products','discounts','comments');
        // $role_postman->givePermissionTo('orders paid','orders delivered','orders returned');
    }
}
