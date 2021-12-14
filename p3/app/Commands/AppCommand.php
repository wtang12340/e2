<?php

namespace App\Commands;

class AppCommand extends Command
{

    public function migrate()
    {
        $this->app->db()->createTable('products', [
            'name' => 'varchar(255)',
            'sku' => 'varchar(255)',
            'description' => 'text',
            'price' => 'decimal(10,2)',
            'available' => 'int',
            'weight' => 'decimal(10,2)',
            'perishable' => 'tinyint(1)'
        ]);
    }
}