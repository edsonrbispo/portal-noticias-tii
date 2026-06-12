<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("usuarios")->insert([
            [
                "nome"=> "Edson Rodrigues",
                "email" => "edson@senac.br",
                "perfil" => "administrador",
                "password" => Hash::make("12345678"),
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nome" => "Alexandra",
                "email" => "alexandra@senac.br",
                "perfil" => "editor",
                "password" => Hash::make("12345678"),
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
