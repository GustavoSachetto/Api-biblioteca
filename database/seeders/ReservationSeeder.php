<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Informações a serem inseridas no banco de dados
     */
    private array $fields = [
        [
            'observation' => 'O livro está com a primeira página rasgada no canto superior esquerdo', 
            'user_id'     => '3', 
            'book_id'     => '7', 
            'withdrawal'  => '2024-07-18', 
            'devolution'  => '2024-07-25', 
        ],
        [
            'observation' => null, 
            'user_id'     => '3', 
            'book_id'     => '5', 
            'withdrawal'  => '2024-07-18', 
            'devolution'  => '2024-07-25', 
        ],
        [
            'observation' => 'O livro veio com a página 67 faltando', 
            'user_id'     => '2', 
            'book_id'     => '5', 
            'withdrawal'  => '2024-07-25', 
            'devolution'  => '2024-08-01', 
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->fields as $values) {
            Reservation::create($values);
        }
    }
}
