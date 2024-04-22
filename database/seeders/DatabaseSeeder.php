<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setor;
use App\Models\Perfil;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Setor::create([
            'sigla' => 'DTI',
            'nome' => 'DIRETORIA DE TECNOLOGIA DA INFORMAÇÃO'
        ]);

        Perfil::create([
            'nome' => 'usuario',
            'descricao' => 'Usuario comum'
        ]);
        Perfil::create([
            'nome' => 'admin',
            'descricao' => 'Administrador do setor'
        ]);
        Perfil::create([
            'nome' => 'master',
            'descricao' => 'Mestre do sistema'
        ]);

        $master = User::create([
            'name' => 'master',
            'email' => 'master@master.com',
            'password' => Hash::make('mastermaster'),
            'perfil_id' => 3,
            'setor_id' => 1
        ]);

        // Perfil::find(3)->users()->save($master);

    }
}
