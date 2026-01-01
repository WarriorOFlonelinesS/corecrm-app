<?php
declare(strict_types=1);

use Migrations\BaseSeed;

class OrdersSeed extends BaseSeed
{
    public function run(): void
    {
        $data = [
            [
                'title' => 'Website development',
                'description' => 'Full corporate website development',
                'client_id' => 1,
                'status' => 'new',
                'amount' => 1200.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'CRM customization',
                'description' => 'Customization of CRM system',
                'client_id' => 2,
                'status' => 'in_progress',
                'amount' => 850.50,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Mobile app design',
                'description' => 'UI/UX design for mobile application',
                'client_id' => 3,
                'status' => 'completed',
                'amount' => 500.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Server setup',
                'description' => 'Linux server setup and optimization',
                'client_id' => 1,
                'status' => 'completed',
                'amount' => 300.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'SEO optimization',
                'description' => null,
                'client_id' => 4,
                'status' => 'cancelled',
                'amount' => 150.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->table('orders')->insert($data)->save();
    }
}
