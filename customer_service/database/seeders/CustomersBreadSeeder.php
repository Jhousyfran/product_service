<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use VoyagerBread\Traits\BreadSeeder;

class CustomersBreadSeeder extends Seeder
{
    use BreadSeeder;

    public function bread()
    {
        return [
            // usually the name of the table
            'name' => 'customers',
            'slug' => 'customers',
            'display_name_singular' => 'Customer',
            'display_name_plural' => 'Customers',
            'icon' => '',
            'model_name' => 'App\Models\Customer',
            'controller' => '',
            'generate_permissions' => 1,
            'description' => '',
            'details' => [
                "order_column" => null,
                "order_display_column" => null,
            ],
        ];
    }

    public function inputFields()
    {
        return [
            'id' => [
                'type' => 'text',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ],
            'name' => [
                'type' => 'text',
                'display_name' => 'Nome',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ],
            'email' => [
                'type' => 'text',
                'display_name' => 'Email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ],
            'phone' => [
                'type' => 'text',
                'display_name' => 'Telefone',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ],
            'address' => [
                'type' => 'text',
                'display_name' => 'Endereço',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ],
            'city' => [
                'type' => 'text',
                'display_name' => 'Cidade',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ],
            'state' => [
                'type' => 'text',
                'display_name' => 'UF',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ],
            'zipcode' => [
                'type' => 'text',
                'display_name' => 'CEP',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ],
            'customer_hasmany_order_relationship' => [
                'type' => 'relationship',
                'display_name' => 'Ordem',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => [
                    "model" => "App\\Models\\Order",
                    "table" => "orders",
                    "type" => "hasMany",
                    "column" => "id",
                    "key" => "customer_id",
                    "label" => "id",
                    "pivot_table" => "customers",
                    "pivot" => "0",
                    "taggable" => null,
                ],
                'order' => 8,
            ],
            'created_at' => [
                'type' => 'timestamp',
                'display_name' => 'created_at',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 3,
            ],
            'updated_at' => [
                'type' => 'timestamp',
                'display_name' => 'updated_at',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 4,
            ],
            'deleted_at' => [
                'type' => 'timestamp',
                'display_name' => 'deleted_at',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 5,
            ],
        ];
    }

    public function menuEntry()
    {
        return [
            'role' => 'admin',
            'title' => 'Customers',
            'url' => '',
            'route' => 'voyager.customers.index',
            'target' => '_self',
            'icon_class' => 'voyager-basket',
            'color' => null,
            'parent_id' => null,
            'parameters' => null,
            'order' => 8,
        ];
    }
}
