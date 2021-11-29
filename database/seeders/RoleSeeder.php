<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin',
            'Collaborator',
            'Subscriber',
        ];

        $i = 1;
        foreach ($roles as $role) {
            $createdRole = Role::create([
                'title'     => $role,
                'level'     => $i
            ]);

            $i++;
        }
    }
}
