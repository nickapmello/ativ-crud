<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alunos;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alunos::create([
            'uuid' => \Illuminate\Support\Str::uuid(),
            'name' => 'Nicolas Mello',
            'email' => 'nicolasmello@gmail.com',
            'matricula' => '240041048',
        ]);

        Alunos::create([
            'uuid' => \Illuminate\Support\Str::uuid(),
            'name' => 'Fernando Szkavarach',
            'email' => 'fernaszk@gmail.com',
            'matricula' => '240041125',
        ]);

        Alunos::create([
            'uuid' => \Illuminate\Support\Str::uuid(),
            'name' => 'Antonio Gimenez',
            'email' => 'abg26112004@gmail.com',
            'matricula' => '24004176',
        ]);
    }
}
