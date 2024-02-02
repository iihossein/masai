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


        Permission::create(['name' => 'users']);
        Permission::create(['name' => 'products']);
        Permission::create(['name' => 'oders']);
        Permission::create(['name' => 'discounts']);
        Permission::create(['name' => 'site setting']);
        Permission::create(['name' => 'permissions']);
        Permission::create(['name' => 'roles']);
        Permission::create(['name' => 'comments']);
        Permission::create(['name' => 'reviews']);
        Permission::create(['name' => 'orders paid']);
        Permission::create(['name' => 'orders delivered']);
        Permission::create(['name' => 'orders returned']);

        $role_administrator->givePermissionTo([
            'users',
            'products',
            'oders',
            'discounts',
            'site setting',
            'permissions',
            'roles',
            'comments',
            'reviews',
            'orders paid',
            'orders delivered',
            'orders returned'
        ]);
        $role_writer->givePermissionTo([
            'products',
            'discounts',
            'comments'
        ]);
        $role_postman->givePermissionTo([
            'orders paid',
            'orders delivered',
            'orders returned'
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
