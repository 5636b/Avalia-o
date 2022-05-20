<?php

namespace Database\Seeders;

use App\Models\Antiguidade;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AntiguidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();
        Antiguidade::create([
            'tipo' => 'videogame',
            'marca' => 'nintendo',
            'FbAno' => '1994',
            'preco' => '3500',
            'user_id' => $user->id
        ]);
    }
}
