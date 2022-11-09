<?php

namespace Database\Seeders;

use App\Models\Programacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programacao = [
            [
                'horario' => 'Dia 16/11 - 14:00 às 16:00',
                'atividade' => 'Abertura dos eventos e palestra:
                "Atitude Empreendedora Maker".
                Palestrantes: Prof. Lázaro e discente Júlia Lima.',
                'local' => 'Auditório',
                'publico' => 150
            ],
            [
                'horario' => 'Dia 16/11 - 17:00',
                'atividade' => 'Início do Torneio de Futsal Maker',
                'local' => 'Quadra',
                'publico' => null
            ],
            [
                'horario' => 'Dia 16/11 - 19:00 às 20:30 – Turma 1',
                'atividade' => 'Oficina Robótica-Arduíno',
                'local' => 'Laboratório de Informática - Sala 114',
                'publico' => 20
            ],
            [
                'horario' => 'Dia 16/11 - 20:30 às 22:00 – Turma 2',
                'atividade' => 'Oficina Robótica-Arduíno',
                'local' => 'Laboratório de Informática - Sala 114',
                'publico' => 20
            ],
            [
                'horario' => 'Dia 17/11 - 08:00 às 08:30',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - CRIAÇÃO DE UM SISTEMA AUTÔNOMO
                PARA O TRANSPORTE DE PEQUENAS QUANTIDADES DE REAGENTES
                PERICULOSOS - Autor: Augusto Henrique de Sousa Xavier',
                'local' => 'Sala 316',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:50 às 09:20',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - CRIAÇÃO DE UM SISTEMA AUTÔNOMO
                PARA O TRANSPORTE DE PEQUENAS QUANTIDADES DE REAGENTES
                PERICULOSOS - Autor: Augusto Henrique de Sousa Xavier',
                'local' => 'Sala 316',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 09:40 às 10:10',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - CRIAÇÃO DE UM SISTEMA AUTÔNOMO
                PARA O TRANSPORTE DE PEQUENAS QUANTIDADES DE REAGENTES
                PERICULOSOS - Autor: Augusto Henrique de Sousa Xavier',
                'local' => 'Sala 316',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 10:30 às 11:00',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - CRIAÇÃO DE UM SISTEMA AUTÔNOMO
                PARA O TRANSPORTE DE PEQUENAS QUANTIDADES DE REAGENTES
                PERICULOSOS - Autor: Augusto Henrique de Sousa Xavier',
                'local' => 'Sala 316',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:00 às 08:30',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - DESENVOLVIMENTO DE UM PORTAL WEB
                PARA DIVULGAÇÃO DAS ATIVIDADES DO GRUPO CEPETZ -
                Autora: Erika Kress',
                'local' => 'Sala 314',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:50 às 09:20',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - DESENVOLVIMENTO DE UM PORTAL WEB
                PARA DIVULGAÇÃO DAS ATIVIDADES DO GRUPO CEPETZ -
                Autora: Erika Kress',
                'local' => 'Sala 314',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 09:40 às 10:10',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - DESENVOLVIMENTO DE UM PORTAL WEB
                PARA DIVULGAÇÃO DAS ATIVIDADES DO GRUPO CEPETZ -
                Autora: Erika Kress',
                'local' => 'Sala 314',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 10:30 às 11:00',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - DESENVOLVIMENTO DE UM PORTAL WEB
                PARA DIVULGAÇÃO DAS ATIVIDADES DO GRUPO CEPETZ -
                Autora: Erika Kress',
                'local' => 'Sala 314',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:00 às 08:30',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - PRODUÇÃO TEXTUAL NA EBTT, LITERATURA
                E HISTÓRIA EM QUADRINHOS: INTERSEÇÕES -
                Autor: Isabeli Ximenes Flora',
                'local' => 'Sala 312',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:50 às 09:20',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - PRODUÇÃO TEXTUAL NA EBTT, LITERATURA
                E HISTÓRIA EM QUADRINHOS: INTERSEÇÕES -
                Autor: Isabeli Ximenes Flora',
                'local' => 'Sala 312',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 09:40 às 10:10',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - PRODUÇÃO TEXTUAL NA EBTT, LITERATURA
                E HISTÓRIA EM QUADRINHOS: INTERSEÇÕES -
                Autor: Isabeli Ximenes Flora',
                'local' => 'Sala 312',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 10:30 às 11:00',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - PRODUÇÃO TEXTUAL NA EBTT, LITERATURA
                E HISTÓRIA EM QUADRINHOS: INTERSEÇÕES -
                Autor: Isabeli Ximenes Flora',
                'local' => 'Sala 312',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:00 às 08:30',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - O FENÔMENO DA FALSA PARIDADE
                EPISTÊMICA -
                Autor: Paulo Henrique Silva Costa',
                'local' => 'Sala 318',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:50 às 09:20',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - O FENÔMENO DA FALSA PARIDADE
                EPISTÊMICA -
                Autor: Paulo Henrique Silva Costa',
                'local' => 'Sala 318',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 09:40 às 10:10',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - O FENÔMENO DA FALSA PARIDADE
                EPISTÊMICA -
                Autor: Paulo Henrique Silva Costa',
                'local' => 'Sala 318',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 10:30 às 11:00',
                'atividade' => 'Apresentações de trabalhos dos
                Cursos Técnicos - O FENÔMENO DA FALSA PARIDADE
                EPISTÊMICA -
                Autor: Paulo Henrique Silva Costa',
                'local' => 'Sala 318',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:00 às 08:30',
                'atividade' => 'RESPONSABILIDADE EPISTÊMICA.
                DESINFORMAÇÃO. CIÊNCIA -
                Autora: Rebecca dos Santos Beutler',
                'local' => 'Sala 319',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:50 às 09:20',
                'atividade' => 'RESPONSABILIDADE EPISTÊMICA.
                DESINFORMAÇÃO. CIÊNCIA -
                Autora: Rebecca dos Santos Beutler',
                'local' => 'Sala 319',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 09:40 às 10:10',
                'atividade' => 'RESPONSABILIDADE EPISTÊMICA.
                DESINFORMAÇÃO. CIÊNCIA -
                Autora: Rebecca dos Santos Beutler',
                'local' => 'Sala 319',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 10:30 às 11:00',
                'atividade' => 'RESPONSABILIDADE EPISTÊMICA.
                DESINFORMAÇÃO. CIÊNCIA -
                Autora: Rebecca dos Santos Beutler',
                'local' => 'Sala 319',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 14:00 às 14:30',
                'atividade' => 'ESTRATÉGIAS DE LEITURA COM GÊNEROS
                POR IMAGEM E TEXTO: ABORDAGENS COGNITIVAS E RECURSO
                DIDÁTICO PARA ATIVIDADES NO ENSINO MÉDIO',
                'local' => 'Sala 319',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 14:50 às 15:20',
                'atividade' => 'ESTRATÉGIAS DE LEITURA COM GÊNEROS
                POR IMAGEM E TEXTO: ABORDAGENS COGNITIVAS E RECURSO
                DIDÁTICO PARA ATIVIDADES NO ENSINO MÉDIO',
                'local' => 'Sala 319',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 15:40 às 16:10',
                'atividade' => 'ESTRATÉGIAS DE LEITURA COM GÊNEROS
                POR IMAGEM E TEXTO: ABORDAGENS COGNITIVAS E RECURSO
                DIDÁTICO PARA ATIVIDADES NO ENSINO MÉDIO',
                'local' => 'Sala 319',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 16:30 às 17:00',
                'atividade' => 'ESTRATÉGIAS DE LEITURA COM GÊNEROS
                POR IMAGEM E TEXTO: ABORDAGENS COGNITIVAS E RECURSO
                DIDÁTICO PARA ATIVIDADES NO ENSINO MÉDIO',
                'local' => 'Sala 319',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 14:00 às 14:30',
                'atividade' => 'ESPAÇO CIÊNCIAS DA NATUREZA: AMBIENTE
                CRIATIVO PARA ENSINO-APRENDIZAGEM -
                Autora: Júlia Cristina Xavier de Lima',
                'local' => 'Sala 318',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 14:50 às 15:20',
                'atividade' => 'ESPAÇO CIÊNCIAS DA NATUREZA: AMBIENTE
                CRIATIVO PARA ENSINO-APRENDIZAGEM -
                Autora: Júlia Cristina Xavier de Lima',
                'local' => 'Sala 318',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 15:40 às 16:10',
                'atividade' => 'ESPAÇO CIÊNCIAS DA NATUREZA: AMBIENTE
                CRIATIVO PARA ENSINO-APRENDIZAGEM -
                Autora: Júlia Cristina Xavier de Lima',
                'local' => 'Sala 318',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 16:30 às 17:00',
                'atividade' => 'ESPAÇO CIÊNCIAS DA NATUREZA: AMBIENTE
                CRIATIVO PARA ENSINO-APRENDIZAGEM -
                Autora: Júlia Cristina Xavier de Lima',
                'local' => 'Sala 318',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 14:00 às 14:30',
                'atividade' => 'CAPITÃO AMÉRICA - O ESTUDO SOCIOLÓGICO
                [EM BREVE NOS CINEMAS] -
                Autora: Cecília Rocha Cruz',
                'local' => 'Sala 314',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 14:50 às 15:20',
                'atividade' => 'CAPITÃO AMÉRICA - O ESTUDO SOCIOLÓGICO
                [EM BREVE NOS CINEMAS] -
                Autora: Cecília Rocha Cruz',
                'local' => 'Sala 314',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 15:40 às 16:10',
                'atividade' => 'CAPITÃO AMÉRICA - O ESTUDO SOCIOLÓGICO
                [EM BREVE NOS CINEMAS] -
                Autora: Cecília Rocha Cruz',
                'local' => 'Sala 314',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 16:30 às 17:00',
                'atividade' => 'CAPITÃO AMÉRICA - O ESTUDO SOCIOLÓGICO
                [EM BREVE NOS CINEMAS] -
                Autora: Cecília Rocha Cruz',
                'local' => 'Sala 314',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 14:00 às 14:30',
                'atividade' => 'DESENVOLVIMENTO DE PROTÓTIPOS DE
                BRAÇOS ROBÓTICOS UTILIZANDO DIFERENTES MATERIAIS -
                Autor: Gustavo Brugnara Fonseca Otoni',
                'local' => 'Sala 312',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 14:50 às 15:20',
                'atividade' => 'DESENVOLVIMENTO DE PROTÓTIPOS DE
                BRAÇOS ROBÓTICOS UTILIZANDO DIFERENTES MATERIAIS -
                Autor: Gustavo Brugnara Fonseca Otoni',
                'local' => 'Sala 312',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 15:40 às 16:10',
                'atividade' => 'DESENVOLVIMENTO DE PROTÓTIPOS DE
                BRAÇOS ROBÓTICOS UTILIZANDO DIFERENTES MATERIAIS -
                Autor: Gustavo Brugnara Fonseca Otoni',
                'local' => 'Sala 312',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 16:30 às 17:00',
                'atividade' => 'DESENVOLVIMENTO DE PROTÓTIPOS DE
                BRAÇOS ROBÓTICOS UTILIZANDO DIFERENTES MATERIAIS -
                Autor: Gustavo Brugnara Fonseca Otoni',
                'local' => 'Sala 312',
                'publico' => null
            ],
            [
                'horario' => 'Dia 17/11 - 08:00 às 10:00',
                'atividade' => 'Turma 1: Oficina Arduíno-Robótica',
                'local' => 'Laboratório de Informática - sala 114',
                'publico' => 20
            ],
            [
                'horario' => 'Dia 17/11 - 08:00 às 10:00',
                'atividade' => 'Turma 1: Manufatura Aditivada',
                'local' => 'Laboratório Maker',
                'publico' => 20
            ],
            [
                'horario' => 'Dia 17/11 - 10:00 às 12:00',
                'atividade' => 'Turma 2: Oficina Arduíno-Robótica',
                'local' => 'Laboratório de Informática - sala 114',
                'publico' => 20
            ],
            [
                'horario' => 'Dia 17/11 - 10:00 às 12:00',
                'atividade' => 'Turma 2: Manufatura Aditivada',
                'local' => 'Laboratório Maker',
                'publico' => 20
            ],
            [
                'horario' => 'Dia 18/11 - 14:00 às 16:00',
                'atividade' => 'Palestra: "Inovação Tecnológica e
                Cultura Maker".
                Palestrantes: Profs. Lázaro e Eduardo Gomes.
                Encerramento da Semana C&T com premiação de trabalho
                dos Cursos Técnicos.',
                'local' => 'Auditório',
                'publico' => 150
            ],
            [
                'horario' => 'Dia 18/11 - 17:00',
                'atividade' => 'Campeonato Maker',
                'local' => 'Quadra',
                'publico' => null
            ],
            [
                'horario' => 'Dia 18/11 - 19:00 às 19:20',
                'atividade' => 'BARRAGEM I DA MINA DO CÓRREGO DO
                FEIJÃO – PANORAMA GERAL PRÉ-RUPTURA E DAS CAUSAS
                DO ROMPIMENTO -
                Autora: Mariana Rezende de Carvalho',
                'local' => 'Auditório',
                'publico' => null
            ],
            [
                'horario' => 'Dia 18/11 - 19:20 às 19:40',
                'atividade' => 'DESENVOLVIMENTO E CARACTERIZAÇÃO DE
                UM COMPÓSITO DE PET RECICLADO COM CASCA DE CAFÉ E
                CASCA DE OVOS DE GALINHA -
                Autora: Pâmella Santos Piva',
                'local' => 'Auditório',
                'publico' => null
            ],
            [
                'horario' => 'Dia 18/11 - 19:40 às 20:00',
                'atividade' => 'ESTUDO DE CASO: AVALIAÇÃO DO POTENCIAL
                DE TOMBAMENTO PARA PATRIMÔNIO HISTÓRICO E CULTURAL DA
                PONTE MACHADO-CORDISLÂNDIA -
                Autor: Thais Mariana Silveira Fermino',
                'local' => 'Auditório',
                'publico' => null
            ],
            [
                'horario' => 'Dia 18/11 - 20:00 às 20:20',
                'atividade' => 'OS IMPACTOS CAUSADOS PELA PANDEMIA DO
                COVID-19 NO SETOR DA CONSTRUÇÃO CIVIL EM VARGINHA/MG -
                Autora: Bianca Patrícia Rodrigues',
                'local' => 'Auditório',
                'publico' => null
            ],
            [
                'horario' => 'Dia 18/11 - 20:20 às 20:40',
                'atividade' => 'ESCRITA E LEITURA EM TEMPOS DE (PÓS)
                PANDEMIA NO CONTEXTO ACADÊMICO: POSSIBILIDADES E
                DESAFIOS -
                Autor: Leandro Noronha Ferreira',
                'local' => 'Auditório',
                'publico' => null
            ],
            [
                'horario' => 'Dia 18/11 - 20:40 às 21:00',
                'atividade' => 'EXTENSÃO DE PLATAFORMA ONLINE PARA
                CONTEXTO ACADÊMICO NO CEFET-MG VARGINHA -
                Autor: Leandro Noronha Ferreira',
                'local' => 'Auditório',
                'publico' => null
            ],
            [
                'horario' => 'Dia 18/11 - 20:40 às 21:00',
                'atividade' => 'EXTENSÃO DE PLATAFORMA ONLINE PARA
                CONTEXTO ACADÊMICO NO CEFET-MG VARGINHA -
                Autor: Leandro Noronha Ferreira',
                'local' => 'Auditório',
                'publico' => null
            ],
            [
                'horario' => 'Dia 19/11 - 08:00 às 12:00',
                'atividade' => 'Final do Campeonato Maker
                Encerramento da Semana Maker e Engenharia.
                Premiações.
                Atividade de Integração',
                'local' => 'Quadra',
                'publico' => null
            ],
        ];
        Programacao::insert($programacao);
    }
}
