<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Informações a serem inseridas no banco de dados
     */
    private array $fields = [
        ['name' => 'Autoajuda'],
        ['name' => 'Biografia & Autobiografia'],
        ['name' => 'Ciência'],
        ['name' => 'Ciências Políticas'],
        ['name' => 'Ciências Sociais'],
        ['name' => 'Coleções Literárias'],
        ['name' => 'Crítica Literária'],
        ['name' => 'Educação'],
        ['name' => 'Ficção'],
        ['name' => 'Filosofia'],
        ['name' => 'História'],
        ['name' => 'Literatura Infantil'],
        ['name' => 'Literatura Juvenil'],
        ['name' => 'Negócios & Economia'],
        ['name' => 'Psicologia'],
        ['name' => 'Religião'],
        ['name' => 'Saúde & Boa Forma'],
        ['name' => 'Outros'],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->fields as $values) {
            Category::create($values);
        }
    }
}
