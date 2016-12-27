<?php

use yii\db\Migration;

class m161227_152711_products extends Migration
{
    public function safeUp()
    {
        $this->createTable('product', array(
            'id' => 'pk',
            'name' => 'VARCHAR(200) NOT NULL',
            'description' => 'text NOT NULL',
            'images' => 'VARCHAR(200) NOT NULL',
            'hit' => 'tinyint(1) DEFAULT 0',
            'price' => 'int(10) DEFAULT 0',
            'category_id' => 'int(10) DEFAULT 0',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        $this->addForeignKey('category_product', 'product', 'category_id', 'category', 'id');

        $this->insert('product', array(
            'name' => 'Seafood',
            'description' => 'Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit.',
            'images' => 'page2-img1.jpg',
            'hit' => '1',
            'price' => '150',
            'category_id' => '1',
        ));

        $this->insert('product', array(
            'name' => 'Brunch',
            'description' => 'Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit.',
            'images' => 'page2-img2.jpg',
            'hit' => '1',
            'price' => '780',
            'category_id' => '1',
        ));

        $this->insert('product', array(
            'name' => 'Lunch combos',
            'description' => 'Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit.',
            'images' => 'page2-img3.jpg',
            'hit' => '1',
            'price' => '199',
            'category_id' => '2',
        ));

        $this->insert('product', array(
            'name' => 'Steaks &amp; chiken',
            'description' => 'Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit.',
            'images' => 'page2-img4.jpg',
            'hit' => '1',
            'price' => '340',
            'category_id' => '2',
        ));

        $this->insert('product', array(
            'name' => 'Desserts',
            'description' => 'Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit.',
            'images' => 'page2-img5.jpg',
            'hit' => '0',
            'price' => '250',
            'category_id' => '3',
        ));

        $this->insert('product', array(
            'name' => 'Kids menu',
            'description' => 'Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit.',
            'images' => 'page2-img6.jpg',
            'hit' => '1',
            'price' => '435',
            'category_id' => '3',
        ));

        $this->insert('product', array(
            'name' => 'Bakery',
            'description' => 'Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit.',
            'images' => 'page2-img7.jpg',
            'hit' => '1',
            'price' => '220',
            'category_id' => '4',
        ));

        $this->insert('product', array(
            'name' => 'Soups and Salads',
            'description' => 'Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit.',
            'images' => 'page2-img8.jpg',
            'hit' => '0',
            'price' => '850',
            'category_id' => '4',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('product');
    }
}
