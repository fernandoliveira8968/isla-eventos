<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\Tipo;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = Tipo::pluck('id', 'slug');

        Evento::create(['id' => 1, 'titulo' => 'Workshop de Laravel', 'tipo_id' => $tipos['workshop'],
            'data' => '2026-11-18', 'local' => 'Laboratório 2.05', 'vagas' => 20, 'inscritos' => 12, 'created_at' => now(), 'updated_at' => now(), 'descricao' => 'teste',]);
        Evento::create(['id' => 2, 'titulo' => 'Palestra: Carreiras em Cibersegurança', 'tipo_id' => $tipos['palestra'],
            'data' => '2026-11-25', 'local' => 'Auditório', 'vagas' => 120, 'inscritos' => 120, 'created_at' => now(), 'updated_at' => now(), 'descricao' => null,]);
        Evento::create(['id' => 3, 'titulo' => 'Hackathon ISLA 24h', 'tipo_id' => $tipos['hackathon'],
            'data' => '2026-11-06', 'local' => 'Átrio principal', 'vagas' => 60, 'inscritos' => 41, 'created_at' => now(), 'updated_at' => now(), 'descricao' => null,]);
        Evento::create(['id' => 4, 'titulo' => 'Git e GitHub para iniciantes', 'tipo_id' => $tipos['workshop'],
            'data' => '2026-09-30', 'local' => 'Laboratório 1.02', 'vagas' => 25, 'inscritos' => 25, 'created_at' => now(), 'updated_at' => now(), 'descricao' => 'teste 2',]);
        Evento::create(['id' => 5, 'titulo' => 'Conversa com antigos alunos DWDM', 'tipo_id' => $tipos['palestra'],
            'data' => '2026-12-02', 'local' => 'Sala 3.10', 'vagas' => 40, 'inscritos' => 9, 'created_at' => now(), 'updated_at' => now(), 'descricao' => null,]);
    }
}
