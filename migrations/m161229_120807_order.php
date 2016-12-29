<?php

use yii\db\Migration;

class m161229_120807_order extends Migration
{
    public function safeUp()
    {
        $this->createTable('order', array(
            'id' => 'pk',
            'status' => 'int(10) DEFAULT 0',
            'name' => 'VARCHAR(255) NOT NULL',
            'email' => 'VARCHAR(255) NOT NULL',
            'phone' => 'VARCHAR(255) NOT NULL',
            'address' => 'text NOT NULL',
            'qty' => 'int(10) DEFAULT 0',
            'sum' => 'VARCHAR(255) NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        $this->createTable('order_items', array(
            'id' => 'pk',
            'order_id' => 'int(10) DEFAULT 0',
            'product_id' => 'VARCHAR(255) NOT NULL',
            'name' => 'VARCHAR(255) NOT NULL',
            'price' => 'VARCHAR(255) NOT NULL',
            'qty_item' => 'int(10) DEFAULT 0',
            'sum_item' => 'VARCHAR(255) NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        $this->addForeignKey('order_product', 'order_items', 'order_id', 'order', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('order');
        $this->dropTable('order_items');
    }
}
