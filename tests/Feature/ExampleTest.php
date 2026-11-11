<?php

namespace Tests\Feature;

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
        $response->assertDontSee('27 DE JANEIRO');
        $response->assertDontSee('27 de Janeiro');
        $response->assertDontSee('hidden xs:inline', false);
    }

    public function test_secondary_public_pages_load_successfully(): void
    {
        $this->seed();

        $this->get('/faq')->assertStatus(200)->assertSee('PERGUNTAS FREQUENTES');
        $this->get('/contato')->assertStatus(200)->assertSee('FALE COM A ONE MOVE');
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
            'Chipower',
            'FAtDF',
            'Greenfisio',
            'Pátio Brasil Shopping',
            'PDS Digital Solutions',
            'Sport Life',
            'Ultra Academia',
        ]);
        $response->assertSee('images/parceiros/patio_brasil.jpeg');
        $response->assertSee('images/parceiros/Fat_DF.png');
        $response->assertSee('images/parceiros/greenfisio.png');
        $response->assertSee('images/parceiros/chip_power.jpeg');
        $response->assertSee('images/parceiros/apex_group.jpeg');
        $response->assertSee('images/parceiros/ultra_academia.jpeg');
        $response->assertSee('images/parceiros/sport_life.jpeg');
        $response->assertSee('images/parceiros/pds.jpeg');
        $response->assertDontSee('bg-[#07080B]', false);
        $response->assertDontSee('bg-[#090B10]', false);
    }
}
