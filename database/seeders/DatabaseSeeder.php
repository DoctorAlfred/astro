<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
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
            'name'                => 'Alfredo',
            'surname'             => 'Matricciani',
            'email'               => 'alfredo.matricciani@gmail.com',
            'phone'               => '',
            'password'            => 'BubuSettete1!',
            'email_verified_at'   => Carbon::now(),
            'from'                => 'astro',
            'ip'                  => '127.0.0.1',
            'user_agent'          => 'Seeders'
        ];

        $user = User::create($payloadAdmin);

        Log::info(
            'Seeder formatted for Super Admin:' . PHP_EOL .
                'token: ' . json_encode($user['token'], true) . PHP_EOL .
                'userId: ' . json_encode($user['userId'], true) . PHP_EOL
        );

        $this->callWith([
            NaiMeaningsSeeder::class,
            PythagoricMeaningsSeeder::class,
            StonesMeaningsSeeder::class,
            // ChatGptSeeder::class,
            // ['userId' => $user->userId] 
        ]);
    }
}
