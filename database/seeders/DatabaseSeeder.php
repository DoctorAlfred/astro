<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Shop\Plan;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use App\Models\Shop\Subscription;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $roles = [
            ['Admin', 'admin'],
            ['Staff', 'staff'],
            ['Affiliate', 'affiliate'],
            ['Customer', 'customer'],
            ['User', 'user']
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role[0],
                'code' => $role[1],
            ]);
        }

        /* Create User Permissions */
        $permissions = [
            ['Admin', 'admin'],
            ['Staff', 'staff'],
            ['Affiliate', 'affiliate'],
            ['Customer', 'customer'],
            ['User', 'user']
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission[0],
                'code' => $permission[1],
            ]);
        }

        /* Create Users Payload */
        $payloadAdmin = [
            'lastname'          => 'Alfredo',
            'firstname'         => 'Matricciani',
            'email'             => 'alfredo.matricciani@gmail.com',
            'phone'             => '',
            'password'          => 'BubuSettete1!',
            'email_verified_at' => Carbon::now(),
            'from'              => 'astro',
            'ip'                => '127.0.0.1',
            'user_agent'        => 'Seeders'
        ];

        $user = User::create($payloadAdmin);

        $payloadCustomer = [
            'lastname'          => 'Angelo',
            'firstname'         => 'Melahel',
            'email'             => 'info@melahel.it',
            'phone'             => '',
            'password'          => 'BubuSettete1!',
            'email_verified_at' => Carbon::now(),
            'from'              => 'astro',
            'ip'                => '127.0.0.1',
            'user_agent'        => 'Seeders'
        ];

        $customer = User::create($payloadCustomer);

        $this->callWith([
            CategoryMeaningsSeeder::class,
            NaiMeaningsSeeder::class,
            PythagoricMeaningsSeeder::class,
            StonesMeaningsSeeder::class,
            AngelMeaningsSeeder::class,

            PlansSeeder::class,
            
            // ChatGptSeeder::class,
            // ['userId' => $user->userId] 
        ]);

        $premiumPlan = Plan::where('slug', 'premium')->first();
        $basicPlan = Plan::where('slug', 'basic')->first();
        $freePlan = Plan::where('slug', 'free')->first();
        
        if ($premiumPlan) {
            Subscription::create([
                'user_id'       => $user['userId'],
                'plan_id'       => $premiumPlan->id,
                'price_paid'    => 0.00,
                'billing_cycle' => 'annual',
                'starts_at'     => now(),
                'expires_at'    => now()->addYears(10),
                'is_active'     => true,
            ]);

            Subscription::create([
                'user_id'       => $customer['userId'],
                'plan_id'       => $basicPlan->id,
                'price_paid'    => 14.40,
                'billing_cycle' => 'annual',
                'starts_at'     => now(),
                'expires_at'    => now()->addYears(1),
                'is_active'     => true,
            ]);
        }

        Log::info(
            'Seeder formatted for Super Admin:' . PHP_EOL .
                'token: ' . json_encode($user['token'], true) . PHP_EOL .
                'userId: ' . json_encode($user['userId'], true) . PHP_EOL .
                'Plan: Premium' . PHP_EOL . PHP_EOL
        );

        Log::info(
            'Seeder formatted for Customer:' . PHP_EOL .
                'token: ' . json_encode($customer['token'], true) . PHP_EOL .
                'userId: ' . json_encode($customer['userId'], true) . PHP_EOL .
                'Plan: Basic' . PHP_EOL . PHP_EOL
        );
    }
}
