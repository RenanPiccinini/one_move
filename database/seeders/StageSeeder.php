<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    public function run(): void
    {
        Stage::truncate();

        $stages = [
            [
                'stage_number' => 1,
                'slug' => 'brasilia',
                'name' => 'ONE MOVE RUN | Brasília',
                'city' => 'Brasília',
                'state' => 'DF',
                'region' => 'Centro-Oeste',
                'edition_year' => 2027,
                'date' => '2027-03-15',
                'date_display' => '15 de Março de 2027',
                'status' => 'open',
                'registration_link' => 'https://inscricoes.onemoverun.com.br/etapa-brasilia-2027',
                'venue_name' => 'Esplanada dos Ministérios & Ponte JK',
                'venue_address' => 'Eixo Monumental, Zona Cívico-Administrativa, Brasília - DF',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '06:30',
                'hero_image' => 'images/brand/city-brasilia.jpg',
                'teaser' => 'A experiência nasce em Brasília. Uma cidade com identidade própria, escala monumental e uma prova desenhada para ser vivida.',
                'description' => 'Brasília não é apenas o local. É parte da experiência. A prova percorre os cartões postais mais emblemáticos do Brasil, com passagem triunfal ao amanhecer pela Ponte JK e chegada cinematográfica na Esplanada. Estrutura completa com Light Points, DJ Points a cada quilômetro, Recovery Zone com frutas e massoterapia, e a vibrante ONE MOVE Arena com o Speed Test.',
                'lots' => [
                    [
                        'name' => 'Lote Promocional (Early Bird)',
                        'price_basic' => 'R$ 119,90',
                        'price_pro' => 'R$ 219,90',
                        'status' => 'Esgotado',
                        'deadline' => 'Até 15/01/2027'
                    ],
                    [
                        'name' => '1º Lote Oficial',
                        'price_basic' => 'R$ 139,90',
                        'price_pro' => 'R$ 249,90',
                        'status' => 'Ativo',
                        'deadline' => 'Até 15/02/2027'
                    ],
                    [
                        'name' => '2º Lote Final',
                        'price_basic' => 'R$ 169,90',
                        'price_pro' => 'R$ 289,90',
                        'status' => 'Em Breve',
                        'deadline' => 'Até 10/03/2027'
                    ]
                ],
                'kit_pickup' => [
                    'location' => 'Shopping Iguatemi Brasília - Lounge ONE MOVE (Piso 2)',
                    'dates' => '13 e 14 de Março de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento oficial com foto e comprovante de inscrição. Retirada por terceiros mediante procuração simples e cópia de documento.'
                ],
                'schedule' => [
                    ['time' => '05:00', 'title' => 'Abertura da ONE MOVE Arena e Guarda-Volumes'],
                    ['time' => '06:00', 'title' => 'Aquecimento com Coaches Convidados'],
                    ['time' => '06:15', 'title' => 'Alinhamento nos Balizadores / Pelotão de Elite'],
                    ['time' => '06:30', 'title' => 'Largada Oficial 21K (Meia Maratona)'],
                    ['time' => '06:45', 'title' => 'Largada Oficial 10K e 5K'],
                    ['time' => '07:30', 'title' => 'Abertura da Área de Recovery e Hidratação Especial'],
                    ['time' => '08:45', 'title' => 'Cerimônia de Premiação Geral e Categorias'],
                    ['time' => '09:30', 'title' => 'ONE MOVE Sunset/Morning Show, Speed Test e DJ Live']
                ],
                'elevation_gain' => '95m de altimetria gradual (percurso rápido e fluido)',
                'map_coords' => ['lat' => -15.7975, 'lng' => -47.8919],
                'regulations_summary' => 'Todos os atletas que cruzarem a linha de chegada de forma legal receberão a Medalha Finisher ONE MOVE. Premiação com troféus para os 5 primeiros colocados gerais (masculino e feminino) e troféus por faixa etária nas distâncias de 21K e 10K. Obrigatório uso do chip de cronometragem e número de peito visível.',
                'is_featured' => true,
            ],
            [
                'stage_number' => 2,
                'slug' => 'goiania',
                'name' => 'ONE MOVE RUN | Goiânia',
                'city' => 'Goiânia',
                'state' => 'GO',
                'region' => 'Centro-Oeste',
                'edition_year' => 2027,
                'date' => '2027-04-18',
                'date_display' => '18 de Abril de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Parque Flamboyant & Alphaville',
                'venue_address' => 'Jardim Goiás, Goiânia - GO',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '06:30',
                'hero_image' => 'images/brand/course-lighting.jpg',
                'teaser' => 'O ritmo e a energia vibrante do Centro-Oeste no circuito arborizado do Flamboyant.',
                'description' => 'A segunda parada do circuito leva os corredores para Goiânia em uma prova que combina ruas amplas, altimetria plana e uma atmosfera pulsante.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 119,90', 'price_pro' => 'R$ 219,90', 'status' => 'Abertura em breve', 'deadline' => 'Divulgação em 20/02/2027']
                ],
                'kit_pickup' => [
                    'location' => 'Flamboyant Shopping Center - Praça das Águas',
                    'dates' => '16 e 17 de Abril de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento oficial e confirmação de inscrição.'
                ],
                'schedule' => [
                    ['time' => '05:00', 'title' => 'Abertura da Arena'],
                    ['time' => '06:30', 'title' => 'Largada 21K, 10K e 5K'],
                    ['time' => '09:00', 'title' => 'Premiação e Arena Experience']
                ],
                'elevation_gain' => '65m',
                'map_coords' => ['lat' => -16.6869, 'lng' => -49.2648],
                'regulations_summary' => 'Regulamento oficial segue as diretrizes da Confederação Brasileira de Atletismo (CBAt).',
                'is_featured' => false,
            ],
            [
                'stage_number' => 3,
                'slug' => 'belo-horizonte',
                'name' => 'ONE MOVE RUN | Belo Horizonte',
                'city' => 'Belo Horizonte',
                'state' => 'MG',
                'region' => 'Sudeste',
                'edition_year' => 2027,
                'date' => '2027-05-23',
                'date_display' => '23 de Maio de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Lagoa da Pampulha & Praça Alberto Dalva Simão',
                'venue_address' => 'Av. Otacílio Negrão de Lima, Belo Horizonte - MG',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '06:30',
                'hero_image' => 'images/brand/arrival-portico.jpg',
                'teaser' => 'O clássico contorno da Pampulha com a assinatura visual e inovadora da ONE MOVE.',
                'description' => 'Arquitetura modernista de Niemeyer abraçando um percurso plano e rápido em volta da Lagoa da Pampulha. Uma etapa épica para bater recordes pessoais.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 119,90', 'price_pro' => 'R$ 219,90', 'status' => 'Abertura em breve', 'deadline' => 'Divulgação em Março/2027']
                ],
                'kit_pickup' => [
                    'location' => 'BH Shopping - Piso Mariana',
                    'dates' => '21 e 22 de Maio de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento oficial e confirmação de inscrição.'
                ],
                'schedule' => [
                    ['time' => '05:30', 'title' => 'Abertura da Arena'],
                    ['time' => '06:30', 'title' => 'Largada Oficial'],
                    ['time' => '09:00', 'title' => 'Premiação e Speed Test']
                ],
                'elevation_gain' => '42m (percurso muito plano)',
                'map_coords' => ['lat' => -19.8519, 'lng' => -43.9749],
                'regulations_summary' => 'Troféus para os 5 primeiros colocados gerais e medalha para todos os concluintes.',
                'is_featured' => false,
            ],
            [
                'stage_number' => 4,
                'slug' => 'rio-de-janeiro',
                'name' => 'ONE MOVE RUN | Rio de Janeiro',
                'city' => 'Rio de Janeiro',
                'state' => 'RJ',
                'region' => 'Sudeste',
                'edition_year' => 2027,
                'date' => '2027-06-20',
                'date_display' => '20 de Junho de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Aterro do Flamengo & Monumento aos Pracinhas',
                'venue_address' => 'Av. Infante Dom Henrique, Rio de Janeiro - RJ',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '06:15',
                'hero_image' => 'images/brand/percurso-night.jpg',
                'teaser' => 'O amanhecer mais famoso do planeta com vista para o Pão de Açúcar e Baía de Guanabara.',
                'description' => 'Correr no Rio de Janeiro com a estrutura sensorial da ONE MOVE é viver o esporte no seu ápice: pistas fechadas, brisa marítima e ativações musicais inesquecíveis.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 129,90', 'price_pro' => 'R$ 229,90', 'status' => 'Em Breve', 'deadline' => 'Abril/2027']
                ],
                'kit_pickup' => [
                    'location' => 'Shopping Rio Sul - Botafogo',
                    'dates' => '18 e 19 de Junho de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento oficial e confirmação de inscrição.'
                ],
                'schedule' => [
                    ['time' => '05:00', 'title' => 'Abertura Arena'],
                    ['time' => '06:15', 'title' => 'Largada 21K'],
                    ['time' => '06:30', 'title' => 'Largada 10K e 5K'],
                    ['time' => '08:30', 'title' => 'Premiação e Celebração']
                ],
                'elevation_gain' => '30m',
                'map_coords' => ['lat' => -22.9234, 'lng' => -43.1729],
                'regulations_summary' => 'Cronometragem eletrônica oficial com pontos de checagem a cada 5km.',
                'is_featured' => false,
            ],
            [
                'stage_number' => 5,
                'slug' => 'sao-paulo',
                'name' => 'ONE MOVE RUN | São Paulo',
                'city' => 'São Paulo',
                'state' => 'SP',
                'region' => 'Sudeste',
                'edition_year' => 2027,
                'date' => '2027-07-18',
                'date_display' => '18 de Julho de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Obelisco do Ibirapuera & Monumento às Bandeiras',
                'venue_address' => 'Av. Pedro Álvares Cabral, Parque Ibirapuera, São Paulo - SP',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '06:30',
                'hero_image' => 'images/brand/arena-experience.jpg',
                'teaser' => 'A capital da velocidade e da superação. A maior etapa do circuito nacional.',
                'description' => 'São Paulo respira corrida. O percurso largo que contorna o Parque Ibirapuera e os túneis paulistanos com iluminação LED especial e som imersivo.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 129,90', 'price_pro' => 'R$ 239,90', 'status' => 'Em Breve', 'deadline' => 'Maio/2027']
                ],
                'kit_pickup' => [
                    'location' => 'Shopping Eldorado - Espaço de Eventos',
                    'dates' => '16 e 17 de Julho de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento oficial e confirmação de inscrição.'
                ],
                'schedule' => [
                    ['time' => '05:00', 'title' => 'Abertura da ONE MOVE Arena'],
                    ['time' => '06:30', 'title' => 'Largada Geral'],
                    ['time' => '08:45', 'title' => 'Show de Premiação']
                ],
                'elevation_gain' => '85m',
                'map_coords' => ['lat' => -23.5874, 'lng' => -46.6576],
                'regulations_summary' => 'Segurança médica de ponta com UTI móvel e postos de apoio a cada 2 km.',
                'is_featured' => false,
            ],
            [
                'stage_number' => 6,
                'slug' => 'curitiba',
                'name' => 'ONE MOVE RUN | Curitiba',
                'city' => 'Curitiba',
                'state' => 'PR',
                'region' => 'Sul',
                'edition_year' => 2027,
                'date' => '2027-08-15',
                'date_display' => '15 de Agosto de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Parque Barigui & Museu Oscar Niemeyer (MON)',
                'venue_address' => 'Av. Cândido Hartmann, Curitiba - PR',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '07:00',
                'hero_image' => 'images/brand/speed-test.jpg',
                'teaser' => 'O clima europeu, a precisão urbana e a energia do sul do Brasil.',
                'description' => 'Temperatura perfeita para alta performance em um trajeto técnico e dinâmico que conecta as belezas naturais e arquitetônicas da capital paranaense.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 119,90', 'price_pro' => 'R$ 219,90', 'status' => 'Em Breve', 'deadline' => 'Junho/2027']
                ],
                'kit_pickup' => [
                    'location' => 'ParkShoppingBarigüi',
                    'dates' => '13 e 14 de Agosto de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento com foto.'
                ],
                'schedule' => [
                    ['time' => '05:30', 'title' => 'Abertura Arena'],
                    ['time' => '07:00', 'title' => 'Largada Única'],
                    ['time' => '09:00', 'title' => 'Premiação']
                ],
                'elevation_gain' => '110m',
                'map_coords' => ['lat' => -25.4244, 'lng' => -49.3093],
                'regulations_summary' => 'Kit atleta com jaqueta corta-vento especial na categoria PRO.',
                'is_featured' => false,
            ],
            [
                'stage_number' => 7,
                'slug' => 'florianopolis',
                'name' => 'ONE MOVE RUN | Florianópolis',
                'city' => 'Florianópolis',
                'state' => 'SC',
                'region' => 'Sul',
                'edition_year' => 2027,
                'date' => '2027-09-12',
                'date_display' => '12 de Setembro de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Beira-Mar Norte & Ponte Hercílio Luz',
                'venue_address' => 'Av. Jornalista Rubens de Arruda Ramos, Florianópolis - SC',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '06:30',
                'hero_image' => 'images/brand/move-again.jpg',
                'teaser' => 'A Ilha da Magia como cenário de superação e pura conexão com o mar.',
                'description' => 'Um percurso plano beirando as águas da baía norte, com passagem pela icônica Ponte Hercílio Luz iluminada com as cores da ONE MOVE.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 119,90', 'price_pro' => 'R$ 219,90', 'status' => 'Em Breve', 'deadline' => 'Julho/2027']
                ],
                'kit_pickup' => [
                    'location' => 'Beiramar Shopping',
                    'dates' => '10 e 11 de Setembro de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento com foto.'
                ],
                'schedule' => [
                    ['time' => '05:15', 'title' => 'Abertura da Arena'],
                    ['time' => '06:30', 'title' => 'Largada'],
                    ['time' => '09:00', 'title' => 'Premiação e Sunset Afterparty']
                ],
                'elevation_gain' => '25m (plano de velocidade)',
                'map_coords' => ['lat' => -27.5852, 'lng' => -48.5524],
                'regulations_summary' => 'Medalha metálica exclusiva com relevo da Ponte Hercílio Luz.',
                'is_featured' => false,
            ],
            [
                'stage_number' => 8,
                'slug' => 'porto-alegre',
                'name' => 'ONE MOVE RUN | Porto Alegre',
                'city' => 'Porto Alegre',
                'state' => 'RS',
                'region' => 'Sul',
                'edition_year' => 2027,
                'date' => '2027-10-17',
                'date_display' => '17 de Outubro de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Orla do Guaíba & Parque Marinha do Brasil',
                'venue_address' => 'Av. Edvaldo Pereira Paiva, Porto Alegre - RS',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '06:45',
                'hero_image' => 'images/brand/athlete-media.jpg',
                'teaser' => 'O tradicional pôr do sol do Guaíba acolhendo milhares de apaixonados pelo asfalto.',
                'description' => 'A orla revitalizada do Guaíba se transforma na pista de corrida mais bonita do Sul, com pontos de música eletrônica e acolhimento singular.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 119,90', 'price_pro' => 'R$ 219,90', 'status' => 'Em Breve', 'deadline' => 'Agosto/2027']
                ],
                'kit_pickup' => [
                    'location' => 'BarraShoppingSul',
                    'dates' => '15 e 16 de Outubro de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento com foto.'
                ],
                'schedule' => [
                    ['time' => '05:30', 'title' => 'Abertura Arena'],
                    ['time' => '06:45', 'title' => 'Largada'],
                    ['time' => '09:00', 'title' => 'Premiação']
                ],
                'elevation_gain' => '35m',
                'map_coords' => ['lat' => -30.0543, 'lng' => -51.2332],
                'regulations_summary' => 'Premiação por faixas etárias de 5 em 5 anos para 10K e 21K.',
                'is_featured' => false,
            ],
            [
                'stage_number' => 9,
                'slug' => 'salvador',
                'name' => 'ONE MOVE RUN | Salvador',
                'city' => 'Salvador',
                'state' => 'BA',
                'region' => 'Nordeste',
                'edition_year' => 2027,
                'date' => '2027-11-07',
                'date_display' => '07 de Novembro de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Farol da Barra & Orla de Ondina',
                'venue_address' => 'Largo do Farol da Barra, Salvador - BA',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '06:00',
                'hero_image' => 'images/brand/journey.jpg',
                'teaser' => 'Axé, calor, superação e o oceano como testemunha no Farol da Barra.',
                'description' => 'A energia contagiante da Bahia encontra a experiência premium ONE MOVE: percussão ao vivo ao longo do percurso e hidratação com água de coco gelada no Recovery.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 119,90', 'price_pro' => 'R$ 219,90', 'status' => 'Em Breve', 'deadline' => 'Setembro/2027']
                ],
                'kit_pickup' => [
                    'location' => 'Shopping Barra - Salvador',
                    'dates' => '05 e 06 de Novembro de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento com foto.'
                ],
                'schedule' => [
                    ['time' => '05:00', 'title' => 'Abertura Arena'],
                    ['time' => '06:00', 'title' => 'Largada'],
                    ['time' => '08:30', 'title' => 'Premiação e Show de Encerramento']
                ],
                'elevation_gain' => '78m',
                'map_coords' => ['lat' => -13.0102, 'lng' => -38.5324],
                'regulations_summary' => 'Largada antecipada às 06h00 devido às condições térmicas da região.',
                'is_featured' => false,
            ],
            [
                'stage_number' => 10,
                'slug' => 'recife',
                'name' => 'ONE MOVE RUN | Recife',
                'city' => 'Recife',
                'state' => 'PE',
                'region' => 'Nordeste',
                'edition_year' => 2027,
                'date' => '2027-11-28',
                'date_display' => '28 de Novembro de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Marco Zero & Pontes do Recife Antigo',
                'venue_address' => 'Praça Rio Branco, Recife Antigo, Recife - PE',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '05:45',
                'hero_image' => 'images/brand/runner-motion.jpg',
                'teaser' => 'As pontes históricas da Veneza Brasileira emolduradas pela alta performance.',
                'description' => 'Cruzar as pontes do Recife Antigo sob a luz da aurora é uma vivência inesquecível. Percurso plano e veloz para buscar seu melhor tempo.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 119,90', 'price_pro' => 'R$ 219,90', 'status' => 'Em Breve', 'deadline' => 'Outubro/2027']
                ],
                'kit_pickup' => [
                    'location' => 'Shopping RioMar Recife',
                    'dates' => '26 e 27 de Novembro de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento com foto.'
                ],
                'schedule' => [
                    ['time' => '04:45', 'title' => 'Abertura Arena'],
                    ['time' => '05:45', 'title' => 'Largada'],
                    ['time' => '08:15', 'title' => 'Premiação']
                ],
                'elevation_gain' => '20m',
                'map_coords' => ['lat' => -8.0631, 'lng' => -34.8711],
                'regulations_summary' => 'Isotônico em todos os postos de hidratação e Recovery avançado.',
                'is_featured' => false,
            ],
            [
                'stage_number' => 11,
                'slug' => 'fortaleza',
                'name' => 'ONE MOVE RUN | Fortaleza',
                'city' => 'Fortaleza',
                'state' => 'CE',
                'region' => 'Nordeste',
                'edition_year' => 2027,
                'date' => '2027-12-12',
                'date_display' => '12 de Dezembro de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Aterro da Praia de Iracema',
                'venue_address' => 'Av. Historiador Raimundo Girão, Fortaleza - CE',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '05:30',
                'hero_image' => 'images/brand/social-strava.jpg',
                'teaser' => 'A brisa do litoral cearense e a celebração do esporte na Terra da Luz.',
                'description' => 'A penúltima etapa do circuito traz toda a vibração do Ceará em uma prova rápida à beira-mar com pórticos de névoa refrescante.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 119,90', 'price_pro' => 'R$ 219,90', 'status' => 'Em Breve', 'deadline' => 'Novembro/2027']
                ],
                'kit_pickup' => [
                    'location' => 'Shopping Iguatemi Bosque Fortaleza',
                    'dates' => '10 e 11 de Dezembro de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento com foto.'
                ],
                'schedule' => [
                    ['time' => '04:30', 'title' => 'Abertura da Arena'],
                    ['time' => '05:30', 'title' => 'Largada Oficial'],
                    ['time' => '08:00', 'title' => 'Premiação']
                ],
                'elevation_gain' => '18m',
                'map_coords' => ['lat' => -3.7196, 'lng' => -38.5133],
                'regulations_summary' => 'Pontos de água a cada 2 km e duchas refrescantes na reta final.',
                'is_featured' => false,
            ],
            [
                'stage_number' => 12,
                'slug' => 'manaus',
                'name' => 'ONE MOVE RUN | Manaus (Grande Final)',
                'city' => 'Manaus',
                'state' => 'AM',
                'region' => 'Norte',
                'edition_year' => 2027,
                'date' => '2027-12-19',
                'date_display' => '19 de Dezembro de 2027',
                'status' => 'soon',
                'registration_link' => null,
                'venue_name' => 'Complexo Turístico Ponta Negra & Rio Negro',
                'venue_address' => 'Av. Coronel Teixeira, Ponta Negra, Manaus - AM',
                'distances' => ['5K', '10K', '21K'],
                'start_time' => '06:00',
                'hero_image' => 'images/brand/circuit-brazil.jpg',
                'teaser' => 'A Grande Final do Circuito 2027. O coração da Amazônia coroando os campeões do Passaporte ONE MOVE.',
                'description' => 'A consagração do circuito nacional! Uma noite de gala na Ponta Negra, às margens do majestoso Rio Negro, com entrega da cobiçada Mandala de Conclusão do Passaporte ONE MOVE e show épico de encerramento.',
                'lots' => [
                    ['name' => 'Lote Promocional', 'price_basic' => 'R$ 139,90', 'price_pro' => 'R$ 249,90', 'status' => 'Em Breve', 'deadline' => 'Novembro/2027']
                ],
                'kit_pickup' => [
                    'location' => 'Manauara Shopping',
                    'dates' => '17 e 18 de Dezembro de 2027',
                    'hours' => '10h00 às 22h00',
                    'requirements' => 'Documento com foto.'
                ],
                'schedule' => [
                    ['time' => '05:00', 'title' => 'Abertura da Grande Arena'],
                    ['time' => '06:00', 'title' => 'Largada da Grande Final'],
                    ['time' => '08:45', 'title' => 'Cerimônia de Premiação Geral e Campeões do Circuito'],
                    ['time' => '10:00', 'title' => 'Encerramento Oficial e Show']
                ],
                'elevation_gain' => '55m',
                'map_coords' => ['lat' => -3.0637, 'lng' => -60.0818],
                'regulations_summary' => 'Entrega especial da Medalha de Campeão do Circuito para atletas com 3 ou mais etapas concluídas.',
                'is_featured' => false,
            ]
        ];

        foreach ($stages as $stageData) {
            Stage::create($stageData);
        }
    }
}
