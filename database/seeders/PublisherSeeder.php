<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Informações a serem inseridas no banco de dados
     */
    private array $fields = [
        [
            'name'     => 'Grupo Companhia das Letras',
            'email'    => 'sac@companhiadasletras.com.br',
            'website'  => 'https: //www.companhiadasletras.com.br/',
            'phone'    => '1137073500',
            'zip_code' => '04532002',
        ],
        [
            'name'     => 'Grupo Editorial Record',
            'email'    => 'sac@record.com.br',
            'website'  => 'https://www.record.com.br/',
            'phone'    => null,
            'zip_code' => '20921380',
        ],
        [
            'name'     => 'Globo Livros',
            'email'    => 'globolivros@edglobo.com.br',
            'website'  => 'https://globolivros.globo.com/',
            'phone'    => '2125345000',
            'zip_code' => '20230240',
        ],
        [
            'name'     => 'Editora Moderna',
            'email'    => null,
            'website'  => 'https://www.moderna.com.br/',
            'phone'    => '1636363183',
            'zip_code' => '14050060',
        ],
        [
            'name'     => 'Editora Rocco',
            'email'    => 'rocco@rocco.com.br',
            'website'  => 'https://rocco.com.br/',
            'phone'    => '21989861348',
            'zip_code' => '01419002',
        ],
        [
            'name'     => 'Saraiva Educação',
            'email'    => null,
            'website'  => 'https://saraivaeducacao.com.br/',
            'phone'    => null,
            'zip_code' => null,
        ],
        [
            'name'     => 'Editora Panda Books',
            'email'    => 'edoriginal@pandabooks.com.br',
            'website'  => 'https://www.pandabooks.com.br/',
            'phone'    => '11963985172',
            'zip_code' => '05413010',
        ],
        [
            'name'     => 'Grupo Editorial Autêntica',
            'email'    => 'portal@grupoautentica.com.br',
            'website'  => 'https://www.grupoautentica.com.br/',
            'phone'    => null,
            'zip_code' => '01311940',
        ],
    ];


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->fields as $values) {
            Publisher::create($values);
        }
    }
}
