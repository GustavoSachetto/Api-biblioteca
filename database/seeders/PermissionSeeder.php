<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Informações a serem inseridas no banco de dados
     */
    private array $fields = [
        [
            'name'       => 'admin', 
            'guard_name' => 'web'
        ],
        [
            'name'       => 'moderator', 
            'guard_name' => 'web'
        ],
        [
            'name'       => 'student', 
            'guard_name' => 'web'
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->fields as $values) {
            Permission::create($values);
        }
    }
}
