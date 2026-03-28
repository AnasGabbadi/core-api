<?php

namespace Fleetbase\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(
            ['name' => 'Administrateur', 'guard_name' => 'sanctum'],
            ['guard_name' => 'sanctum']
        );

        Role::firstOrCreate(
            ['name' => 'Gestionnaire', 'guard_name' => 'sanctum'],
            ['guard_name' => 'sanctum']
        );

        Role::firstOrCreate(
            ['name' => 'Conducteur', 'guard_name' => 'sanctum'],
            ['guard_name' => 'sanctum']
        );
    }
}
