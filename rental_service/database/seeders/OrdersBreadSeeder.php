<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use VoyagerBread\Traits\BreadSeeder;

class OrdersBreadSeeder extends Seeder
{
    use BreadSeeder;

    public function bread()
    {
        return [
            // usually the name of the table
            'name' => 'orders',
            'slug' => 'orders',
            'display_name_singular' => 'Order',
            'display_name_plural' => 'Orders',
            'icon' => '',
            'model_name' => 'App\Models\Order',
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
            'customer_id' => [
                'type' => 'text',
                'display_name' => 'Cliente',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ],
            'status' => [
                'type' => 'text',
                'display_name' => 'Status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 3,
            ],
            'discount' => [
                'type' => 'text',
                'display_name' => 'Desconto',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 4,
            ],
            'total' => [
                'type' => 'text',
                'display_name' => 'Total',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 5,
            ],
            'order_date' => [
                'type' => 'date',
                'display_name' => 'Data',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ],
            'customer_belongsto_order_relationship' => [
                'type' => 'relationship',
                'display_name' => 'Cliente',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => [
                    "model" => "App\\Models\\Customer",
                    "table" => "customers",
                    "type" => "belongsTo",
                    "column" => "customer_id",
                    "key" => "id",
                    "label" => "name",
                    "pivot_table" => "orders",
                    "pivot" => "0",
                    "taggable" => null,
                ],
                'order' => 8,
            ],
            'order_hasmany_item_relationship' => [
                'type' => 'relationship',
                'display_name' => 'Items',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => [
                    "model" => "App\\Models\\OrderItem",
                    "table" => "orderitems",
                    "type" => "hasMany",
                    "column" => "order_id",
                    "key" => "id",
                    "label" => "id",
                    "pivot_table" => "orders",
                    "pivot" => "0",
                    "taggable" => null,
                ],
                'order' => 9,
            ],
            'created_at' => [
                'type' => 'timestamp',
                'display_name' => 'criado em',
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
            'title' => 'Orders',
            'url' => '',
            'route' => 'voyager.orders.index',
            'target' => '_self',
            'icon_class' => 'voyager-basket',
            'color' => null,
            'parent_id' => null,
            'parameters' => null,
            'order' => 8,
        ];
    }
}
