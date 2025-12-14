<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateContacts extends BaseMigration
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
        $table = $this->table('contacts');
        $table
            ->addColumn('email', 'string', ['limit' => 150, 'null' => false])
            ->addColumn('phone', 'string', ['limit' => 150, 'null' => false])
            ->addColumn('client_id', 'integer', ['null' => false, 'signed' => false])
            ->addColumn('position', 'string', [
                'limit' => 100,
                'default' => 'new',
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'null' => false])
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP', 'null' => false])
            ->addForeignKey('client_id', 'clients', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION'])
            ->create();
    }
}
