<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateClients extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
       
        $table = $this->table('clients');
        $table
            ->addColumn('first_name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('last_name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('amount', 'decimal', ['precision'=>12, 'scale'=>2, 'default' => 0, 'null' => false])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'null' => false])
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP', 'null' => false])
            ->create();
    }
}
