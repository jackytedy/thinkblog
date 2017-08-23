<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     */
    public function change()
    {
        $this->table('user', [
            'id' => false,
            'primary_key' => ['id'],
            'engine' => 'InnoDB',
            'encoding' => 'utf8',
            'collation' => 'utf8_general_ci',
            'comment' => '用户'
        ])->addColumn('id', 'integer', [
            'null' => false,
            'limit' => MysqlAdapter::INT_REGULAR,
            'precision' => 10,
            'signed' => false,
            'identity' => 'enable',
            'comment' => '主键'
        ])->addColumn('name', 'string', [
            'null' => false,
            'limit' => 63,
            'collation' => 'utf8_general_ci',
            'encoding' => 'utf8',
            'comment' => '用户名',
        ])->addColumn('password', 'string', [
            'null' => true,
            'limit' => 255,
            'collation' => 'utf8_general_ci',
            'encoding' => 'utf8',
            'comment' => '经过加密的密码',
        ])->addColumn('first_name', 'string', [
            'null' => true,
            'limit' => 255,
            'collation' => 'utf8_general_ci',
            'encoding' => 'utf8',
            'comment' => '姓名',
        ])->addColumn('last_name', 'string', [
            'null' => true,
            'limit' => 255,
            'collation' => 'utf8_general_ci',
            'encoding' => 'utf8',
            'comment' => '姓名',
        ])->addColumn('email', 'string', [
            'null' => true,
            'limit' => 255,
            'collation' => 'utf8_general_ci',
            'encoding' => 'utf8',
            'comment' => '电子邮箱',
        ])->addColumn('phone', 'string', [
            'null' => true,
            'limit' => 127,
            'collation' => 'utf8_general_ci',
            'encoding' => 'utf8',
            'comment' => '电话号码',
        ])->addColumn('created_at', 'datetime', [
            'null' => false,
            'default' => 'CURRENT_TIMESTAMP',
            'comment' => '创建时间',
        ])->addColumn('updated_at', 'datetime', [
            'null' => true,
            'comment' => '更新时间',
        ])->create();
    }
}
