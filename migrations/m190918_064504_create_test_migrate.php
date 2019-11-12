<?php

use yii\db\Migration;

/**
 * Class m190918_064504_create_test_migrate
 */
class m190918_064504_create_test_migrate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{test}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'content'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190918_064504_create_test_migrate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190918_064504_create_test_migrate cannot be reverted.\n";

        return false;
    }
    */
}
