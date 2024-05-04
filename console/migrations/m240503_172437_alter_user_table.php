<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m240503_172437_alter_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'description', $this->string());
        $this->addColumn('{{%user}}', 'address', $this->string());
        $this->addColumn('{{%user}}', 'company_name', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'description');
        $this->dropColumn('{{%user}}', 'address');
        $this->dropColumn('{{%user}}', 'company_name');
    }
}
/*
 * 'name' => $this->string(),
            'email' => $this->string(),
            'password' => $this->string(),
            'description' => $this->string(),
            'address' => $this->string(),
            'company_name' => $this->string(),
            'created_at' => $this->timestamp(),
 */