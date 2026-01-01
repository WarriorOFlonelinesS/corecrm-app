<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * SeetingsSeed seed.
 */
class SettingsSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'key' => 'admin_email',
                'value' => 'admin@example.com',
            ],
            [
                'key' => 'company_name',
                'value' => 'My Company S.p.A.',
            ]
        ];

        $table = $this->table('settings');
        $table->insert($data)->save();
    }
}
