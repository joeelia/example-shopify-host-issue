<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Osiset\ShopifyApp\Storage\Models\Plan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'type' => 'RECURRING',
            'name' => 'Test freeium charge',
            'price' => 0.00,
            'capped_amount' => 999.00,
            'terms' => 'test app takes money',
            'trial_days' => 0,
            'test' => true,
            'interval' => 'EVERY_30_DAYS'

        ]);
        
    }
}
