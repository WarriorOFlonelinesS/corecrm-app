<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateOrders extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change()
    {
        $table = $this->table('orders');
        $table
            ->addColumn('title', 'string', ['limit' => 150, 'null' => false])
            ->addColumn('description', 'text', ['null' => true])
            ->addColumn('client_id', 'integer', ['null' => true, 'signed' => false])
            ->addColumn('status', 'string', [
                'limit' => 20,
                'default' => 'new',
                'null' => false,
            ])
            ->addColumn('amount', 'decimal', ['precision'=>12, 'scale'=>2, 'default' => 0, 'null' => false])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'null' => false])
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP', 'null' => false])
            ->create();
    }
}
