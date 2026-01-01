<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Clients seed.
 */
class ContactsSeed extends BaseSeed
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
        $faker = \Faker\Factory::create('it_IT');
        $data = [];

        for($i=0; $i<20;$i++){
            $data =[
                'email' => $faker->phoneNumber(),
                'phone' => $faker->email(),
                'client_id' => $faker->client_id(),
                'position' => $faker->jobTitle(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }
        $table = $this->table('contacts');
        $table->insert($data)->save();
    }
}
