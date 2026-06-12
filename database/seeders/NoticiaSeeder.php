<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("noticias")->insert([
            [
                'titulo'=> 'Inteligência Artificial Revoluciona Atendimento ao Cliente em 2026',
                'resumo' => 'Empresas adotam IA para reduzir tempo de resposta e melhorar a experiência dos usuários.',
                'conteudo' => 'Diversas empresas de tecnologia estão investindo em soluções de inteligência artificial para automatizar atendimentos, responder dúvidas em tempo real e personalizar a experiência dos clientes. Especialistas apontam que a tendência deve crescer nos próximos anos devido à redução de custos operacionais e ao aumento da eficiência dos serviços digitais.',
                'imagem' => 'ia_atendimento_2026.jpg',
                'categoria_id' => 1,
                'usuario_id' => 1,
                'ativo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Novos Smartphones Dobráveis Ganham Destaque no Mercado',
                'resumo' => 'Fabricantes apresentam modelos mais resistentes e com melhor autonomia de bateria.',
                'conteudo' => 'O segmento de smartphones dobráveis continua em expansão. Os novos dispositivos lançados em 2026 trazem melhorias significativas na durabilidade das telas, desempenho dos processadores e eficiência energética. Analistas acreditam que a tecnologia se tornará mais acessível ao consumidor nos próximos anos.',
                'imagem' => 'smartphones_dobraveis.jpg',
                'categoria_id' => 2,
                'ativo' => 1,
                'usuario_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Computação em Nuvem Impulsiona Transformação Digital das Empresas',
                'resumo' => 'Organizações ampliam investimentos em infraestrutura cloud para aumentar escalabilidade.',
                'conteudo' => 'A adoção de serviços de computação em nuvem continua crescendo entre empresas de todos os portes. Soluções cloud oferecem maior flexibilidade, segurança e redução de custos com infraestrutura física. O mercado projeta crescimento contínuo impulsionado pela necessidade de inovação tecnológica.',
                'imagem' => 'computacao_nuvem.jpg',
                'categoria_id' => 3,
                'ativo' => 1,
                'usuario_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Cibersegurança se Torna Prioridade Após Aumento de Ataques Digitais',
                'resumo' => 'Empresas reforçam investimentos em proteção de dados e monitoramento de ameaças.',
                'conteudo' => 'O aumento de ataques cibernéticos tem levado organizações a fortalecer suas estratégias de segurança digital. Ferramentas de monitoramento, autenticação multifator e treinamento de colaboradores estão entre as principais medidas adotadas para proteger informações sensíveis.',
                'imagem' => 'ciberseguranca.jpg',
                'categoria_id' => 4,
                'ativo' => 1,
                'usuario_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Startups Apostam em Soluções Baseadas em Internet das Coisas',
                'resumo' => 'Dispositivos conectados impulsionam inovação em diversos setores da economia.',
                'conteudo' => 'Startups de tecnologia estão desenvolvendo soluções inovadoras utilizando Internet das Coisas (IoT) para áreas como agricultura, saúde, logística e cidades inteligentes. Os dispositivos conectados permitem coleta de dados em tempo real, auxiliando na tomada de decisões e na otimização de processos.',
                'imagem' => 'nternet_das_coisas.jpg',
                'categoria_id' => 5,
                'ativo' => 1,
                'usuario_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
