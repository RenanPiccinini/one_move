<?php

namespace Tests\Feature;

use App\Providers\AppServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('24 DE JANEIRO');
        $response->assertSee('24 de Janeiro');
        $response->assertSee('CIRCUITO NACIONAL');
        $response->assertSee('LARGADA: JANEIRO');
        $response->assertSee('aspect-video', false);
        $response->assertSee('Dúvidas?');
        $response->assertSee('Contato');
        $response->assertSee('Parceiros Oficiais');
        $response->assertSee('Realização');
        $response->assertSee('Produção');
        $response->assertSee('Cobertura Exclusiva');
        $response->assertSee('images/parceiros/arenna_run_sem_fundo.png');
        $response->assertSee('images/parceiros/To_no_Flash-01.png');
        $response->assertSee('5561992451300');
        $response->assertDontSee('5561999999999');
        $response->assertSee(route('pages.inscricoes-breve'), false);
        $response->assertDontSee('inscricoes.onemoverun.com.br', false);
        $response->assertDontSee('27 DE JANEIRO');
        $response->assertDontSee('27 de Janeiro');
        $response->assertDontSee('hidden xs:inline', false);
    }

    public function test_inscricoes_em_breve_page_loads_with_site_layout(): void
    {
        Carbon::setTestNow(Carbon::create(2026, 11, 17, 22, 0, 0, 'America/Sao_Paulo'));

        $response = $this->get('/inscricoes-em-breve');

        $response->assertStatus(200);
        $response->assertSee('INSCRIÇÕES');
        $response->assertSee('EM BREVE');
        $response->assertSee('PRÉ-VENDA');
        $response->assertSee('19/11/2026');
        $response->assertSee('00h00');
        $response->assertSee('Meia-noite');
        $response->assertSee('Horário de Brasília');
        $response->assertSee('20% OFF');
        $response->assertSee('VAGAS LIMITADAS');
        $response->assertSee('countdownPreVenda');
        $response->assertSee('Dias');
        $response->assertSee('Horas');
        $response->assertSee('Minutos');
        $response->assertSee('Segundos');
        $response->assertSee('Acompanhar @onemoverun');
        $response->assertDontSee('pre-venda-brasilia.jpg');
        $response->assertDontSee('A LARGADA DO CIRCUITO ESTÁ CHEGANDO');
        $response->assertDontSee('Não perca o lote inicial');
        $response->assertDontSee('Ativar Alerta no WhatsApp');
        $response->assertDontSee('Cadastre seu alerta diretamente');
        $response->assertDontSee('inscricoes.onemoverun.com.br', false);

        Carbon::setTestNow();
    }

    public function test_automatic_redirect_to_chippower_when_registration_opens_at_midnight(): void
    {
        // 19 de Novembro de 2026 às 00:00:01 (Meia-noite em diante)
        Carbon::setTestNow(Carbon::create(2026, 11, 19, 0, 0, 1, 'America/Sao_Paulo'));

        $this->assertTrue(AppServiceProvider::isRegistrationOpen());
        $this->assertSame(
            'https://www.chippower.com.br/evento.php?slug=one-move-run-brasil',
            AppServiceProvider::getRegistrationUrl()
        );

        // Acesso à rota de inscrições redireciona diretamente para o Chippower
        $response = $this->get('/inscricoes-em-breve');
        $response->assertRedirect('https://www.chippower.com.br/evento.php?slug=one-move-run-brasil');

        // Na home, o botão agora aponta diretamente para o Chippower
        $responseHome = $this->get('/');
        $responseHome->assertSee('https://www.chippower.com.br/evento.php?slug=one-move-run-brasil', false);

        Carbon::setTestNow();
    }

    public function test_secondary_public_pages_load_successfully(): void
    {
        $this->seed();

        $this->get('/faq')
            ->assertStatus(200)
            ->assertSee('PERGUNTAS FREQUENTES')
            ->assertSee('99245-1300');

        $this->get('/contato')
            ->assertStatus(200)
            ->assertSee('FALE COM A ONE MOVE')
            ->assertSee('+55 (61) 99245-1300')
            ->assertSee('5561992451300');
    }

    public function test_regulamentos_page_loads_and_has_clean_structure(): void
    {
        $this->seed();

        $response = $this->get('/regulamentos');

        $response->assertStatus(200);
        $response->assertSee('REGULAMENTO ON MOVE - BRASÍLIA');
        $response->assertSee('Data Oficial');
        $response->assertSee('24 de Janeiro de 2027');
        $response->assertDontSee('27 de Janeiro');
        $response->assertDontSee('15 de Março');
        $response->assertSee('Cidade & Local', false);
        $response->assertSee('Percursos');
        $response->assertSee('Organização');
        $response->assertDontSee('3.500 Atletas');
        $response->assertDontSee('Quórum mín');
        $response->assertDontSee('Íntegra dos Artigos e Capítulos Oficiais');
        $response->assertSee('ONE_MOVE_RUN_BRASIL_2027_REGULAMENTO_CROWN_COMPANY_COM_CLAUSULA_RESPONSABILIDADES.pdf');
        $response->assertDontSee('bg-[#07080B]', false);
        $response->assertDontSee('bg-[#090B10]', false);
    }

    public function test_calendario_and_etapas_redirect_to_home_calendar_section(): void
    {
        $response = $this->get('/calendario');
        $response->assertRedirect(url('/#calendario'));

        $responseEtapas = $this->get('/etapas');
        $responseEtapas->assertRedirect(url('/#calendario'));
    }

    public function test_parceiros_oficiais_page_loads_with_all_partners_and_navigation(): void
    {
        $response = $this->get('/parceiros-oficiais');

        $response->assertStatus(200);
        $response->assertSee('Parceiros Oficiais');
        $response->assertSee('PARCEIROS');
        $response->assertSee('OFICIAIS');
        $response->assertSeeInOrder([
            'Apex Group',
            'Arena Run',
            'Chipower',
            'FAtDF',
            'Greenfisio',
            'Pátio Brasil Shopping',
            'PDS Digital Solutions',
            'Sport Life',
            'Tô no Flash',
            'Ultra Academia',
        ]);
        $response->assertDontSee('Eurobike');
        $response->assertSee('images/parceiros/patio_brasil.jpeg');
        $response->assertSee('images/parceiros/Fat_DF.png');
        $response->assertSee('images/parceiros/greenfisio.png');
        $response->assertSee('images/parceiros/chip_power.jpeg');
        $response->assertSee('images/parceiros/apex_group.jpeg');
        $response->assertSee('images/parceiros/ultra_academia.jpeg');
        $response->assertSee('images/parceiros/sport_life.jpeg');
        $response->assertSee('images/parceiros/pds.jpeg');
        $response->assertSee('images/parceiros/arenna_run.png');
        $response->assertSee('images/parceiros/To_no_Flash-01.png');
        $response->assertSee('Cobertura Exclusiva');
        $response->assertDontSee('bg-[#07080B]', false);
        $response->assertDontSee('bg-[#090B10]', false);
        $response->assertSee('CONECTE SUA MARCA À <span class="text-gradient-orange whitespace-nowrap">ONE MOVE RUN</span>', false);
        $response->assertSee('Quero Ser Parceiro');
        $response->assertDontSee('Ver Cotas');
        $response->assertSee('5561992451300');
    }
}
