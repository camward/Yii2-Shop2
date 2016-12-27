<?php

use yii\db\Migration;

class m161227_141339_category extends Migration
{
    public function safeUp()
    {
        $this->createTable('category', array(
            'id' => 'pk',
            'name' => 'VARCHAR(255) NOT NULL',
            'description' => 'text NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');


        $this->insert('category', array(
            'name' => 'Best cuisine',
            'description' => 'This website template has several pages:  Restaurant, Cuisine, Wine List, CookBook, Gallery, Contacts (note that contact us form - doesn\'t work).',
        ));

        $this->insert('category', array(
            'name' => 'Good rest',
            'description' => 'Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus.',
        ));
        $this->insert('category', array(
            'name' => 'Great service',
            'description' => 'Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit velit eu magna. Nunc viverra nisi sed orci.',
        ));

        $this->insert('category', array(
            'name' => 'Best cooks',
            'description' => 'Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit velit eu magna. Nunc viverra nisi sed orci tincidunt at hendrerit orci.',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('category');
    }
}
