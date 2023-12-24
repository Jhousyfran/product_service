<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use VoyagerBread\Traits\BreadSeeder;

class ProductsBreadSeeder extends Seeder
{
    use BreadSeeder;

    public function bread()
    {
        return [
            // usually the name of the table
            'name' => 'products',
            'slug' => 'products',
            'display_name_singular' => 'Product',
            'display_name_plural' => 'Products',
            'icon' => '',
            'model_name' => 'App\Models\Product',
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
                'browse' => 1,
                'read' => 1,
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
            'price' => [
                'type' => 'text',
                'display_name' => 'Preço',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
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
            'title' => 'Products',
            'url' => '',
            'route' => 'voyager.products.index',
            'target' => '_self',
            'icon_class' => 'voyager-basket',
            'color' => null,
            'parent_id' => null,
            'parameters' => null,
            'order' => 8,
        ];
    }
}
